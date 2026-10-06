<?php
// 사전 틀 만들기: 코드의 __('원문'), __('원문', '문맥') 키를 모아 사전에 쓴다.
//   테마 밖 문구 → lang/<lang>.php, theme/<테마>/ 문구 → theme/<테마>/lang/<lang>.php
// 사용: php lang/build.php en
// 이미 있는 번역은 그대로 두고 새 키는 빈 값('')으로 추가한다. 빈 값이면 화면에는 원문이 나온다.
if (PHP_SAPI !== 'cli') exit;

define('_GNUBOARD_', true);

$lang = isset($argv[1]) ? $argv[1] : '';
if (!preg_match('/^[a-z]{2}(-[A-Za-z]{2,4})?$/', $lang) || $lang === 'ko') {
    fwrite(STDERR, "사용: php lang/build.php <언어코드, 예: en>\n");
    exit(1);
}

$root = dirname(dirname(__FILE__));
$skip_dirs = array('.git', 'data', 'lang', '_dev');

// PHP 문자열 리터럴 토큰 → 값
function build_literal($t)
{
    return (is_array($t) && $t[0] === T_CONSTANT_ENCAPSED_STRING) ? eval('return '.$t[1].';') : null;
}

// 파일 하나에서 키를 모은다. $keys[키] = 처음 나온 파일
function build_scan($file, $rel, &$keys)
{
    $tokens = array();
    foreach (token_get_all(file_get_contents($file)) as $t) {
        if (is_array($t) && in_array($t[0], array(T_WHITESPACE, T_COMMENT, T_DOC_COMMENT)))
            continue;
        $tokens[] = $t;
    }

    $n = count($tokens);
    for ($i = 0; $i < $n; $i++) {
        $t = $tokens[$i];
        if (!is_array($t) || $t[0] !== T_STRING || $t[1] !== '__' || !isset($tokens[$i + 1]) || $tokens[$i + 1] !== '(')
            continue;
        // 함수 정의, 메서드 호출은 제외
        $prev = $i > 0 ? $tokens[$i - 1] : null;
        if (is_array($prev) && in_array($prev[0], array(T_FUNCTION, T_OBJECT_OPERATOR, T_DOUBLE_COLON)))
            continue;

        $str = isset($tokens[$i + 2]) ? build_literal($tokens[$i + 2]) : null;
        $next = isset($tokens[$i + 3]) ? $tokens[$i + 3] : null;
        if ($str === null || ($next !== ')' && $next !== ',')) {
            fwrite(STDERR, "건너뜀(원문이 문자열 상수가 아님)\t$rel:{$t[2]}\n");
            continue;
        }

        $key = $str;
        if ($next === ',' && !preg_match('/\{[0-9]+\}/', $str)) {
            $ctx = isset($tokens[$i + 4]) ? build_literal($tokens[$i + 4]) : null;
            if ($ctx === null) {
                fwrite(STDERR, "건너뜀(문맥이 문자열 상수가 아님)\t$rel:{$t[2]}\n");
                continue;
            }
            if ($ctx !== '')
                $key = $ctx.'|'.$str;
        }

        if (!isset($keys[$key]))
            $keys[$key] = $rel;
    }
}

// 저장소 전체를 파일 경로 순으로 읽는다
$files = array();
$it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($root));
foreach ($it as $f) {
    if (!$f->isFile() || substr($f->getFilename(), -4) !== '.php')
        continue;
    $rel = str_replace('\\', '/', substr($f->getPathname(), strlen($root) + 1));
    $top = strtok($rel, '/');
    if (in_array($top, $skip_dirs) || preg_match('#^theme/[^/]+/lang/#', $rel))
        continue;
    $files[$rel] = $f->getPathname();
}
ksort($files);

// 사전 단위(''=저장소, 'theme/<테마>')로 키를 모은다
$scoped = array('' => array());
foreach ($files as $rel => $path) {
    $scope = preg_match('#^theme/[^/]+#', $rel, $m) ? $m[0] : '';
    if (!isset($scoped[$scope]))
        $scoped[$scope] = array();
    build_scan($path, $rel, $scoped[$scope]);
}

// 기존 사전 전부에서 번역을 모은다 (키가 다른 사전으로 옮겨 가도 번역을 잃지 않게)
$dict_files = array('' => $root.'/lang/'.$lang.'.php');
foreach (glob($root.'/theme/*/lang/'.$lang.'.php') as $f)
    $dict_files['theme/'.basename(dirname(dirname($f)))] = $f;
foreach ($scoped as $scope => $keys)
    if (!isset($dict_files[$scope]))
        $dict_files[$scope] = $root.'/'.$scope.'/lang/'.$lang.'.php';

$olds = $trans = $used = array();
foreach ($dict_files as $scope => $f) {
    $olds[$scope] = is_file($f) ? include($f) : array();
    if (!is_array($olds[$scope]))
        $olds[$scope] = array();
    foreach ($olds[$scope] as $key => $val)
        if ($val !== '' || !isset($trans[$key]))
            $trans[$key] = $val;
}
foreach ($scoped as $keys)
    $used += $keys;

foreach ($dict_files as $scope => $dict_file) {
    $keys = isset($scoped[$scope]) ? $scoped[$scope] : array();
    $old = $olds[$scope];

    // 파일별로 묶어서 쓴다. 어디서도 쓰지 않는 키는 번역을 잃지 않도록 맨 끝에 남긴다.
    $out = "<?php\nif (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가\n\n";
    $out .= "// 사전 ($lang). 틀은 php lang/build.php $lang 로 만든다. 값이 ''이면 원문을 쓴다.\n";
    $out .= "return array(\n";
    $group = null;
    $added = $done = 0;
    foreach ($keys as $key => $rel) {
        if ($rel !== $group) {
            $out .= "\n// $rel\n";
            $group = $rel;
        }
        $val = isset($trans[$key]) ? (string)$trans[$key] : '';
        if (!isset($trans[$key]))
            $added++;
        if ($val !== '')
            $done++;
        $out .= var_export((string)$key, true).' => '.var_export($val, true).",\n";
    }

    $unused = array_diff_key($old, $used);
    if ($unused) {
        $out .= "\n// 코드에서 쓰지 않는 키\n";
        foreach ($unused as $key => $val)
            $out .= var_export((string)$key, true).' => '.var_export((string)$val, true).",\n";
    }
    $out .= ");\n";

    if (!is_dir(dirname($dict_file)))
        mkdir(dirname($dict_file));
    file_put_contents($dict_file, $out);

    $name = substr($dict_file, strlen($root) + 1);
    echo "$name: 키 ".count($keys).", 새로 추가 $added, 번역됨 $done, 쓰지 않는 키 ".count($unused)."\n";
}
