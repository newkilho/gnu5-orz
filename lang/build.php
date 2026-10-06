<?php
// 사전 틀 만들기: 코드의 __('원문'), __('원문', '문맥') 키를 모아 사전에 쓴다.
//   테마 밖 문구 → lang/<lang>.php, theme/<테마>/ 문구 → theme/<테마>/lang/<lang>.php
// 사용: php lang/build.php en
// 이미 있는 번역은 그대로 두고 새 키는 빈 값('')으로 추가한다. 빈 값이면 화면에는 원문이 나온다.
if (PHP_SAPI !== 'cli') exit;

define('_GNUBOARD_', true);

$lang = isset($argv[1]) ? $argv[1] : '';
if (!preg_match('/^[a-z]{2}(-[a-z]{2,4})?$/', $lang) || $lang === 'ko') {
    fwrite(STDERR, "사용: php lang/build.php <언어코드, 예: en>\n");
    exit(1);
}

$root = dirname(dirname(__FILE__));
$skip_dirs = array('.git', 'data', 'lang', '_dev');
// 번역 대상이 아닌 곳: 관리자, 쇼핑몰, 테마가 없을 때의 기본 스킨, 설치, 외부 라이브러리 플러그인
$skip_re = '#^(adm|install|skin|mobile|shop)/|^theme/[^/]+/(mobile/)?shop/|^lib/shop|^shop\.|^(g4|yc4)_import|^plugin/(editor|PHPMailer|lgxpay|sms5|debugbar|jqplot|jquery-ui|htmlpurifier|browscap|syndi)/#';

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
        // alert/alert_close/confirm은 번역하지 않으므로 글자 문구가 바로 오면 알려 준다
        if (!is_array($t) || $t[0] !== T_STRING || !in_array($t[1], array('__', 'alert', 'alert_close', 'confirm')) || !isset($tokens[$i + 1]) || $tokens[$i + 1] !== '(')
            continue;
        // 함수 정의, 메서드 호출은 제외
        $prev = $i > 0 ? $tokens[$i - 1] : null;
        if (is_array($prev) && in_array($prev[0], array(T_FUNCTION, T_OBJECT_OPERATOR, T_DOUBLE_COLON)))
            continue;

        $str = isset($tokens[$i + 2]) ? build_literal($tokens[$i + 2]) : null;
        $next = isset($tokens[$i + 3]) ? $tokens[$i + 3] : null;
        if ($t[1] !== '__') {
            if ($str !== null && preg_match('/[\x{AC00}-\x{D7A3}]/u', $str))
                fwrite(STDERR, "알림 문구가 __() 밖에 있음(__('…') 또는 __('…{1}', 값)으로 감쌀 것)\t$rel:{$t[2]}\n");
            continue;
        }
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

// js/*.js 의 __js('원문') 키 (저장소 사전에 넣고, lang/<lang>.js 로도 내보낸다)
function build_scan_js($file, $rel, &$keys, &$js_keys)
{
    preg_match_all('/\b__js\(\s*(\'(?:[^\'\\\\]|\\\\.)*\'|"(?:[^"\\\\]|\\\\.)*")/', file_get_contents($file), $m);
    foreach ($m[1] as $lit) {
        $q = $lit[0];
        $body = substr($lit, 1, -1);
        if ($q === "'")
            $body = str_replace(array("\\'", '"'), array("'", '\\"'), $body);
        $str = json_decode('"'.str_replace("\\'", "'", $body).'"');
        if (!is_string($str) || $str === '') {
            fwrite(STDERR, "건너뜀(JS 문자열을 읽지 못함)\t$rel\t$lit\n");
            continue;
        }
        if (!isset($keys[$str]))
            $keys[$str] = $rel;
        $js_keys[$str] = true;
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
    if (in_array($top, $skip_dirs) || preg_match('#^theme/[^/]+/lang/#', $rel) || preg_match($skip_re, $rel))
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
$js_keys = array();
foreach (glob($root.'/js/*.js') as $path) {
    $rel = 'js/'.basename($path);
    if (!preg_match('#shop|\.min\.js$|^js/jquery-#', $rel))
        build_scan_js($path, $rel, $scoped[''], $js_keys);
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

    // 넣을 키가 없으면 사전을 두지 않는다 (번역은 모두 다른 사전에 있으므로 빈 사전은 지운다)
    if (!$keys && !array_filter(array_diff_key($old, $used), 'strlen')) {
        if (is_file($dict_file))
            unlink($dict_file);
        continue;
    }

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
        // 같은 키가 다른 사전에도 있으면 자기 사전의 번역을 먼저 쓴다
        $val = (isset($old[$key]) && $old[$key] !== '') ? (string)$old[$key] : (isset($trans[$key]) ? (string)$trans[$key] : '');
        if (!isset($trans[$key]))
            $added++;
        if ($val !== '')
            $done++;
        $out .= var_export((string)$key, true).' => '.var_export($val, true).",\n";
    }

    // 번역이 없는(빈 값) 키는 남길 필요가 없다
    $unused = array_filter(array_diff_key($old, $used), 'strlen');
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

// JS 사전 lang/<lang>.js: js/*.js 의 __js() 키 중 번역이 있는 것 (extend/kh_i18n.extend.php가 읽는다)
$dict = include($root.'/lang/'.$lang.'.php');
$js = array();
foreach ($js_keys as $key => $t)
    if (isset($dict[$key]) && $dict[$key] !== '')
        $js[$key] = $dict[$key];
$js_file = $root.'/lang/'.$lang.'.js';
if ($js) {
    file_put_contents($js_file, "// JS 사전 ($lang). php lang/build.php $lang 가 lang/$lang.php 에서 만든다. 직접 고치지 않는다.\nvar kh_i18n = ".json_encode($js, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT).";\n");
    echo "lang/$lang.js: 키 ".count($js_keys).", 번역됨 ".count($js)."\n";
} elseif (is_file($js_file)) {
    unlink($js_file);
}
