<?php
// 다국어 문구 저장 (gnu5-orz) — 화면은 i18n.php
// 저장소 사전과 다른 번역만 data/lang/<언어>.php에 남긴다.
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

$base = kh_dict_file(G5_THEME_PATH, $lang) + kh_dict_file(G5_PATH, $lang);
$saved = array();
foreach ($rows as $r) {
    if (!is_array($r) || count($r) != 2)
        continue;
    $key = (string)$r[0];
    $val = str_replace("\r\n", "\n", (string)$r[1]);
    if ($key === '' || $val === '' || (isset($base[$key]) && $base[$key] === $val))
        continue;
    $saved[$key] = $val;
}

$dir = G5_DATA_PATH.'/lang';
if (!is_dir($dir)) {
    @mkdir($dir, G5_DIR_PERMISSION);
    @chmod($dir, G5_DIR_PERMISSION);
}
$file = $dir.'/'.$lang.'.php';
$body = "<?php\nif (!defined('_GNUBOARD_')) exit;\n\n// 관리자 → 환경설정 → 다국어 문구에서 고친 번역 ($lang)\nreturn ".var_export($saved, true).";\n";
if (@file_put_contents($file, $body) === false)
    alert(G5_DATA_DIR.'/lang 폴더에 저장하지 못했습니다.');
@chmod($file, G5_FILE_PERMISSION);
if (function_exists('opcache_invalidate'))
    @opcache_invalidate($file, true);

// 최신글 캐시에 남은 게시판 이름을 지운다
$result = sql_query(" select bo_table from {$g5['board_table']} ");
while ($row = sql_fetch_array($result))
    delete_cache_latest($row['bo_table']);

goto_url('./i18n.php?lang='.$lang);
