<?php
// 실행: php tests/i18n.php (DB 없이 실행, PHP 5.2 문법 사용)
// 다국어(gnu5-orz): __() 사전 합치기·치환, 번역 없는 문구 수집, 언어별 주소, 사전 파일 무결성
if (PHP_SAPI !== 'cli') exit;
$root = dirname(dirname(__FILE__));

function expect_i18n($condition, $message) {
    if (!$condition) {
        fwrite(STDERR, "실패: ".$message."\n");
        exit(1);
    }
}

// config.php의 주소 상수 (상수는 한 번만 정할 수 있으므로 자식 프로세스에서 확인. _GNUBOARD_는 config.php가 정한다)
if (isset($argv[1]) && $argv[1] === 'config') {
    $_SERVER['REDIRECT_REDIRECT_KH_LANG'] = $argv[2];
    $g5_path = array('path' => $root, 'url' => 'https://example.com/sub');
    include $root.'/config.php';
    $out = array();
    foreach (array('KH_LANG', 'G5_URL', 'G5_BASE_URL', 'G5_BBS_URL', 'G5_PLUGIN_URL', 'G5_ADMIN_URL', 'G5_CSS_URL', 'G5_DATA_URL', 'G5_IMG_URL', 'G5_JS_URL', 'G5_SKIN_URL', 'G5_EDITOR_URL', 'G5_MOBILE_URL') as $c)
        $out[] = $c.'='.constant($c);
    echo implode("\n", $out);
    exit(0);
}

$php = defined('PHP_BINARY') && PHP_BINARY ? PHP_BINARY : 'php';
foreach (array('ko' => '', 'en' => '/en', 'zh-hant' => '/zh-hant') as $lang => $prefix) {
    $lines = array();
    exec(escapeshellarg($php).' '.escapeshellarg(__FILE__).' config '.escapeshellarg($lang), $lines, $code);
    expect_i18n($code === 0, 'config.php 읽기 ('.$lang.')');
    $c = array();
    foreach ($lines as $line) {
        $kv = explode('=', $line, 2);
        $c[$kv[0]] = $kv[1];
    }
    expect_i18n($c['KH_LANG'] === $lang, 'KH_LANG ('.$lang.')');
    expect_i18n($c['G5_BASE_URL'] === 'https://example.com/sub', 'G5_BASE_URL에는 접두사 없음 ('.$lang.')');
    expect_i18n($c['G5_URL'] === 'https://example.com/sub'.$prefix, 'G5_URL 언어 접두사 ('.$lang.')');
    expect_i18n($c['G5_BBS_URL'] === 'https://example.com/sub'.$prefix.'/bbs', '페이지 주소는 언어 유지 ('.$lang.')');
    expect_i18n($c['G5_PLUGIN_URL'] === 'https://example.com/sub'.$prefix.'/plugin', '플러그인 주소는 언어 유지 ('.$lang.')');
    foreach (array('G5_ADMIN_URL' => '/adm', 'G5_CSS_URL' => '/css', 'G5_DATA_URL' => '/data', 'G5_IMG_URL' => '/img', 'G5_JS_URL' => '/js', 'G5_SKIN_URL' => '/skin', 'G5_EDITOR_URL' => '/plugin/editor', 'G5_MOBILE_URL' => '/mobile') as $name => $dir)
        expect_i18n($c[$name] === 'https://example.com/sub'.$dir, $name.'는 접두사 없음 ('.$lang.')');
}

// __(): 임시 저장소에 사전 세 개를 두고 en으로 읽는다
define('_GNUBOARD_', true);
$tmp = sys_get_temp_dir().'/gnu5_i18n_test_'.getmypid();
foreach (array('/root/lang', '/root/theme/t/lang', '/data/lang') as $d)
    mkdir($tmp.$d, 0777, true);
// 임시 파일 정리 (실패로 끝나도 지운다)
function cleanup_i18n_test($dir) {
    foreach (array_reverse(glob($dir.'/{,*/,*/*/,*/*/*/,*/*/*/*/}*', GLOB_BRACE)) as $f)
        is_dir($f) ? rmdir($f) : unlink($f);
    rmdir($dir);
}
register_shutdown_function('cleanup_i18n_test', $tmp);
function write_dict($file, $dict) {
    file_put_contents($file, "<?php\nreturn ".var_export($dict, true).";\n");
}
write_dict($tmp.'/root/lang/en.php', array(
    '가' => 'A-root', '나' => 'B-root', '다' => 'C-root', '라' => '',
    '{1}님 {2}' => '{2} for {1}', '처음' => 'First', 'pager|처음' => '« First',
));
write_dict($tmp.'/root/theme/t/lang/en.php', array('나' => 'B-theme', '다' => ''));
write_dict($tmp.'/data/lang/en.php', array('가' => '', '마' => 'E-data', '나' => 'B-data'));

define('KH_LANG', 'en');
define('G5_PATH', $tmp.'/root');
define('G5_DATA_PATH', $tmp.'/data');
define('G5_DIR_PERMISSION', 0755);
define('G5_FILE_PERMISSION', 0644);
define('G5_HOOK_DEFAULT_PRIORITY', 8);
define('G5_BASE_URL', 'https://example.com/sub');
define('G5_IS_ADMIN', true);   // extend의 <head> 출력은 건너뛴다
function add_replace() {}
function add_javascript() {}
function add_stylesheet() {}
require $root.'/lib/i18n.lib.php';

// 테마가 정해지기 전에는 저장소·data 사전만
expect_i18n(__('나') === 'B-data', 'data 사전이 저장소 사전보다 우선');
define('G5_THEME_PATH', $tmp.'/root/theme/t');
expect_i18n(__('나') === 'B-data', '테마가 정해진 뒤 다시 읽어도 data 우선');
expect_i18n(__('가') === 'A-root', '뒤 사전의 빈값이 앞 사전의 번역을 가리지 않음');
expect_i18n(__('다') === 'C-root', '테마 사전의 빈값이 저장소 번역을 가리지 않음');
expect_i18n(__('마') === 'E-data', 'data 사전에만 있는 번역');
expect_i18n(__('라') === '라', '빈 번역은 원문');
expect_i18n(__('없는 문구') === '없는 문구', '사전에 없으면 원문');
expect_i18n(__('{1}님 {2}', '홍길동', '안녕') === '안녕 for 홍길동', '{n} 치환과 번역 순서');
expect_i18n(__('{1}님 {2}', '{2}', 'x') === 'x for {2}', '값 안의 {n}은 다시 치환하지 않음');
expect_i18n(__('{1}개 없음', 3) === '3개 없음', '번역이 없어도 {n} 치환');
expect_i18n(__('처음', 'pager') === '« First', '문맥 키');
expect_i18n(__('처음') === 'First', '문맥 없는 키');
expect_i18n(__('처음', 'other') === '처음', '없는 문맥은 문맥 없는 번역으로 대신하지 않음');

// 번역 없는 문구 수집: 저장소 영어 사전에 있거나 이미 모은 문구는 쓰지 않는다
$collect = $tmp.'/data/lang/en.php';
kh_dict_miss_save();
$saved = include $collect;
expect_i18n(isset($saved['없는 문구']) && $saved['없는 문구'] === '', '사전에 없는 문구는 빈값으로 모음');
expect_i18n(isset($saved['other|처음']), '문맥 키도 모음');
expect_i18n(!isset($saved['라']), '저장소 사전에 있는 키(빈값이어도)는 모으지 않음');
expect_i18n($saved['마'] === 'E-data' && $saved['나'] === 'B-data', '이미 있는 번역은 그대로');
$before = file_get_contents($collect);
touch($collect, time() - 100);
clearstatcache();
$mtime = filemtime($collect);
kh_dict_miss_save();
clearstatcache();
expect_i18n(filemtime($collect) === $mtime && file_get_contents($collect) === $before, '이미 모은 문구만 있으면 파일을 다시 쓰지 않음');

// 언어별 주소 (extend/kh_i18n.extend.php)
require $root.'/extend/kh_i18n.extend.php';
$cases = array(
    '/sub/en/free?page=2' => array('ko' => 'https://example.com/sub/free?page=2', 'ja' => 'https://example.com/sub/ja/free?page=2'),
    '/sub/en/' => array('ko' => 'https://example.com/sub/', 'zh-hans' => 'https://example.com/sub/zh-hans/'),
    '/sub/en' => array('ko' => 'https://example.com/sub/', 'de' => 'https://example.com/sub/de/'),
    '/sub/en?x=1' => array('ko' => 'https://example.com/sub/?x=1'),
    '/sub/enroll.php' => array('ko' => 'https://example.com/sub/enroll.php', 'ja' => 'https://example.com/sub/ja/enroll.php'),
);
foreach ($cases as $uri => $expects) {
    $_SERVER['REQUEST_URI'] = $uri;
    foreach ($expects as $lang => $url)
        expect_i18n(kh_lang_url($lang) === $url, 'kh_lang_url('.$lang.') '.$uri.' → '.kh_lang_url($lang));
}


// 사전 파일: 언어마다 키가 같고, 빈 번역이 없고, 원문에 없는 {n}을 쓰지 않는다
function placeholders($s) {
    preg_match_all('/\{[0-9]+\}/', $s, $m);
    return array_unique($m[0]);
}
$langs = kh_langs();
unset($langs['ko']);
$counts = array();
foreach (array('lang', 'theme/basic/lang') as $dir) {
    foreach (array_keys($langs) as $lang) {
        $file = $root.'/'.$dir.'/'.$lang.'.php';
        expect_i18n(is_file($file), '사전 파일 있음: '.$dir.'/'.$lang.'.php');
        $dict = include $file;
        expect_i18n(is_array($dict), '사전은 배열: '.$dir.'/'.$lang.'.php');
        $counts[$dir][$lang] = count($dict);
        foreach ($dict as $key => $val) {
            expect_i18n($val !== '', '번역 없음: '.$dir.'/'.$lang.'.php '.$key);
            $text = strpos($key, '|') !== false && !preg_match('/\{[0-9]+\}/', $key) ? substr($key, strpos($key, '|') + 1) : $key;
            // 원문에 없는 {n}이 번역에 있으면 화면에 그대로 나온다. 원문의 {n}을 빼고 일반 문장으로 번역한 것은 허용
            expect_i18n(!array_diff(placeholders($val), placeholders($text)), '원문에 없는 {n}: '.$dir.'/'.$lang.'.php '.$key.' → '.$val);
        }
    }
    expect_i18n(count(array_unique($counts[$dir])) === 1, '언어마다 키 수가 같음: '.$dir.' '.json_encode($counts[$dir]));
}

// JS 사전 lang/<언어>.js 는 lang/<언어>.php 와 같은 번역
foreach (array_keys($langs) as $lang) {
    $js = file_get_contents($root.'/lang/'.$lang.'.js');
    expect_i18n(preg_match('/var kh_i18n = (\{.*\});/s', $js, $m) === 1, 'JS 사전 형식: '.$lang);
    $map = json_decode($m[1], true);
    $dict = include $root.'/lang/'.$lang.'.php';
    expect_i18n(is_array($map) && count($map) > 0, 'JS 사전 읽기: '.$lang);
    foreach ($map as $key => $val)
        expect_i18n(isset($dict[$key]) && $dict[$key] === $val, 'JS 사전이 lang/'.$lang.'.php와 다름: '.$key);
}

echo "ok\n";
