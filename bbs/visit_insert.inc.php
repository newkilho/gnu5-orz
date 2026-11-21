<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 컴퓨터의 아이피와 쿠키에 저장된 아이피가 다르다면 테이블에 반영함
if (get_cookie('ck_visit_ip') != $_SERVER['REMOTE_ADDR'])
{
    set_cookie('ck_visit_ip', $_SERVER['REMOTE_ADDR'], 86400); // 하루동안 저장

    // $tmp_row = sql_fetch(" select max(vi_id) as max_vi_id from {$g5['visit_table']} ");
    // $vi_id = $tmp_row['max_vi_id'] + 1;

    // $_SERVER 배열변수 값의 변조를 이용한 SQL Injection 공격을 막는 코드입니다. 110810
    $remote_addr = escape_trim($_SERVER['REMOTE_ADDR']);
    $referer = "";
    if (isset($_SERVER['HTTP_REFERER']))
        $referer = escape_trim(clean_xss_tags(strip_tags($_SERVER['HTTP_REFERER'])));
    $user_agent = '';
    if (isset($_SERVER['HTTP_USER_AGENT']))
        $user_agent  = escape_trim(clean_xss_tags(strip_tags($_SERVER['HTTP_USER_AGENT'])));
    $vi_browser = '';
    $vi_os = '';
    $vi_device = '';
    if(version_compare(phpversion(), '5.3.0', '>=') && defined('G5_BROWSCAP_USE') && G5_BROWSCAP_USE) {
        include_once(G5_BBS_PATH.'/visit_browscap.inc.php');
    }
    $sql = " insert {$g5['visit_table']} ( vi_ip, vi_date, vi_time, vi_referer, vi_agent, vi_browser, vi_os, vi_device ) values ( '{$remote_addr}', '".G5_TIME_YMD."', '".G5_TIME_HIS."', '{$referer}', '{$user_agent}', '{$vi_browser}', '{$vi_os}', '{$vi_device}' ) ";

    $result = sql_query($sql, FALSE);
    // 정상으로 INSERT 되었다면 방문자 합계에 반영
    // (gnu5-orz) 합계·cf_visit 갱신은 사이트 전체에서 60초에 한 번, 한 요청만 한다.
    // 원본은 새 방문자마다 visit_sum 날짜 행 UPDATE + SELECT 4개 + config UPDATE 를 해서,
    // 쿠키 없는 봇이 몰리면 모든 요청이 그 한 행의 잠금 앞에 줄을 섰다(2026-11-22 kilho, 분당 1,400명에 PHP 정체).
    // 합계는 g5_visit 행 수로 다시 센다. GREATEST 로 넣어 오래된 방문기록을 지워도 줄지 않고, 날이 바뀔 때 어제 마지막 1분도 채운다.
    if ($result) {
        $visit_stamp = G5_DATA_PATH.'/cache/visit_sum.stamp';
        if (!is_file($visit_stamp) || filemtime($visit_stamp) <= G5_SERVER_TIME - 60) {
            $visit_lock = sql_real_escape_string('g5_visit_sum_'.G5_MYSQL_DB.'_'.$g5['visit_sum_table']);
            $row = sql_fetch(" select get_lock('{$visit_lock}', 0) as l ");
            if (!empty($row['l'])) {
                @touch($visit_stamp);

                foreach (array(G5_TIME_YMD, date('Y-m-d', G5_SERVER_TIME - 86400)) as $visit_date) {
                    $row = sql_fetch(" select count(*) as cnt from {$g5['visit_table']} where vi_date = '{$visit_date}' ");
                    $visit_cnt = isset($row['cnt']) ? (int)$row['cnt'] : 0;
                    if ($visit_cnt > 0)
                        sql_query(" insert into {$g5['visit_sum_table']} ( vs_date, vs_count ) values ( '{$visit_date}', '{$visit_cnt}' )
                                    on duplicate key update vs_count = greatest(vs_count, values(vs_count)) ", false);
                }

                // INSERT, UPDATE 된건이 있다면 기본환경설정 테이블에 저장
                // 방문객 접속시마다 따로 쿼리를 하지 않기 위함 (엄청난 쿼리를 줄임 ^^)

                // 오늘
                $sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = '".G5_TIME_YMD."' ";
                $row = sql_fetch($sql);
                $vi_today = isset($row['cnt']) ? $row['cnt'] : 0;

                // 어제
                $sql = " select vs_count as cnt from {$g5['visit_sum_table']} where vs_date = DATE_SUB('".G5_TIME_YMD."', INTERVAL 1 DAY) ";
                $row = sql_fetch($sql);
                $vi_yesterday = isset($row['cnt']) ? $row['cnt'] : 0;

                // 최대
                $sql = " select max(vs_count) as cnt from {$g5['visit_sum_table']} ";
                $row = sql_fetch($sql);
                $vi_max = isset($row['cnt']) ? $row['cnt'] : 0;

                // 전체
                $sql = " select sum(vs_count) as total from {$g5['visit_sum_table']} ";
                $row = sql_fetch($sql);
                $vi_sum = isset($row['total']) ? $row['total'] : 0;

                $visit = '오늘:'.$vi_today.',어제:'.$vi_yesterday.',최대:'.$vi_max.',전체:'.$vi_sum;

                // 기본설정 테이블에 방문자수를 기록한 후
                // 방문자수 테이블을 읽지 않고 출력한다.
                // 쿼리의 수를 상당부분 줄임
                sql_query(" update {$g5['config_table']} set cf_visit = '{$visit}' ");

                sql_query(" select release_lock('{$visit_lock}') ", false);
            }
        }
    }
}