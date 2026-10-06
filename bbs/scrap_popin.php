<?php
include_once('./_common.php');

include_once(G5_PATH.'/head.sub.php');

if ($is_guest) {
    $href = './login.php?'.$qstr.'&amp;url='.urlencode(get_pretty_url($bo_table, $wr_id));
    $href2 = str_replace('&amp;', '&', $href);
    $kh_msg = __('회원만 접근 가능합니다.');
    $kh_js_msg = get_js_safe_string($kh_msg);
    $kh_login = __('로그인하기');
    echo <<<HEREDOC
    <script>
        alert({$kh_js_msg});
        opener.location.href = '$href2';
        window.close();
    </script>
    <noscript>
    <p>{$kh_msg}</p>
    <a href="$href">{$kh_login}</a>
    </noscript>
HEREDOC;
    exit;
}

$kh_js_msg = get_js_safe_string(__('올바른 방법으로 사용해 주십시오.'));
echo <<<HEREDOC
<script>
    if (window.name != 'win_scrap') {
        alert({$kh_js_msg});
        window.close();
    }
</script>
HEREDOC;

if ($write['wr_is_comment'])
    alert_close(__('코멘트는 스크랩 할 수 없습니다.'));

$sql = " select count(*) as cnt from {$g5['scrap_table']}
            where mb_id = '{$member['mb_id']}'
            and bo_table = '$bo_table'
            and wr_id = '$wr_id' ";
$row = sql_fetch($sql);
if ($row['cnt']) {

    $back_url = get_pretty_url($bo_table, $wr_id);
    $kh_js_msg = get_js_safe_string(__("이미 스크랩하신 글 입니다.\n\n지금 스크랩을 확인하시겠습니까?"));
    $kh_msg = __('이미 스크랩하신 글 입니다.');
    $kh_scrap = __('스크랩 확인하기');
    $kh_back = __('돌아가기');

    echo <<<HEREDOC
    <script>
    if (confirm({$kh_js_msg}))
        document.location.href = './scrap.php';
    else
        window.close();
    </script>
    <noscript>
    <p>{$kh_msg}</p>
    <a href="./scrap.php">{$kh_scrap}</a>
    <a href="{$back_url}">{$kh_back}</a>
    </noscript>
HEREDOC;
    exit;
}

include_once($member_skin_path.'/scrap_popin.skin.php');

include_once(G5_PATH.'/tail.sub.php');