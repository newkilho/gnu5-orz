<?php
// 다국어 문구 저장 (gnu5-orz) — 화면은 i18n.php
// 받은 목록(사전에 없는 문구)으로 data/lang/<언어>.php를 새로 쓴다.
// 목록에서 지운 문구는 모든 언어의 data/lang/*.php에서 없앤다.
$sub_menu = '100960';
require_once './_common.php';

check_demo();
auth_check_menu($auth, $sub_menu, 'w');
if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');
check_admin_token();

$langs = kh_langs();
$lang = isset($_POST['lang']) ? (string)$_POST['lang'] : '';
if ($lang === 'ko' || !isset($langs[$lang]))
    alert('언어를 선택해 주십시오.');

// common.php가 $_POST에 addslashes를 해 둔다
$rows = json_decode(isset($_POST['dict_json']) ? stripslashes((string)$_POST['dict_json']) : '', true);
if (!is_array($rows))
    alert('번역을 읽지 못했습니다.');

$saved = $posted = array();
foreach ($rows as $r) {
    if (!is_array($r) || count($r) != 2)
        continue;
    $key = trim(str_replace("\r\n", "\n", (string)$r[0]));
    $val = str_replace("\r\n", "\n", (string)$r[1]);
    if ($key === '')
        continue;
    $posted[$key] = true;
    if ($val === '' && $lang !== 'en')   // en.php는 키 목록이므로 빈값도 남긴다
        continue;
    $saved[$key] = $val;
}

// 목록에 있었는데 돌아오지 않은 문구 = 지운 것
$deleted = array_diff_key(kh_dict_file(G5_DATA_PATH, 'en') + kh_dict_file(G5_DATA_PATH, $lang), $posted);

if (!kh_dict_write($lang, $saved))
    alert(G5_DATA_DIR.'/lang 폴더에 저장하지 못했습니다.');

foreach (array_keys($langs) as $code) {
    if ($code === $lang || !$deleted)
        continue;
    $dict = kh_dict_file(G5_DATA_PATH, $code);
    $left = array_diff_key($dict, $deleted);
    if (count($left) != count($dict))
        kh_dict_write($code, $left);
}

// 최신글 캐시에 남은 게시판 이름을 지운다
$result = sql_query(" select bo_table from {$g5['board_table']} ");
while ($row = sql_fetch_array($result))
    delete_cache_latest($row['bo_table']);

goto_url('./i18n.php?lang='.$lang);
