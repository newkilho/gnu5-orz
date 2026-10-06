<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

//------------------------------------------------------------------------------
// 다국어 문구
// 사전: lang/<lang>.php → return ['원문' => '번역', '문맥|원문' => '번역', ...];
// 번역이 없으면 한국어 원문을 그대로 돌려준다.
//------------------------------------------------------------------------------

// 현재 언어 (.htaccess가 환경변수 KH_LANG으로 넘긴다. 없으면 ko)
if (!function_exists('kh_lang')) {
function kh_lang()
{
    static $lang = null;

    if ($lang === null) {
        $lang = 'ko';
        foreach (array('KH_LANG', 'REDIRECT_KH_LANG') as $key) {
            if (isset($_SERVER[$key]) && preg_match('/^[a-z]{2}$/', $_SERVER[$key])) {
                $lang = $_SERVER[$key];
                break;
            }
        }
    }

    return $lang;
}
}

// 현재 언어 사전 (요청당 한 번만 읽는다)
if (!function_exists('kh_dict')) {
function kh_dict()
{
    static $dict = null;

    if ($dict === null) {
        $file = G5_PATH.'/lang/'.kh_lang().'.php';
        $dict = is_file($file) ? include($file) : array();
        if (!is_array($dict))
            $dict = array();
    }

    return $dict;
}
}

// __('안녕하세요?')
// __('{1}님 안녕하세요', $mb_nick)   원문에 {n}이 있으면 뒤 인자는 값
// __('처음', 'pager')                원문에 {n}이 없으면 두 번째 인자는 문맥 이름
if (!function_exists('__')) {
function __($str)
{
    $args = array_slice(func_get_args(), 1);
    $dict = kh_dict();

    $has_param = (bool)preg_match('/\{[0-9]+\}/', $str);
    $key = (!$has_param && isset($args[0]) && $args[0] !== '') ? $args[0].'|'.$str : $str;

    $text = (isset($dict[$key]) && $dict[$key] !== '') ? $dict[$key] : $str;

    if ($has_param) {
        $text = preg_replace_callback('/\{([0-9]+)\}/', function ($m) use ($args) {
            return isset($args[$m[1] - 1]) ? $args[$m[1] - 1] : $m[0];
        }, $text);
    }

    return $text;
}
}

//------------------------------------------------------------------------------
// JS 문구: __js()는 __()와 같은 규칙. alert/confirm은 메시지를 사전에서 찾아 바꾼다.
// 사전: lang/<lang>.js → kh_i18n = {"원문": "번역", "문맥|원문": "번역"};
//------------------------------------------------------------------------------
add_javascript('<script>
function __js(str) {
    var args = Array.prototype.slice.call(arguments, 1),
        dict = window.kh_i18n || {},
        has_param = /\{[0-9]+\}/.test(str),
        key = (!has_param && args.length && args[0] !== "") ? args[0] + "|" + str : str,
        text = (Object.prototype.hasOwnProperty.call(dict, key) && dict[key] !== "") ? dict[key] : str;
    if (has_param) {
        text = text.replace(/\{([0-9]+)\}/g, function (m, n) {
            return args[n - 1] !== undefined ? args[n - 1] : m;
        });
    }
    return text;
}
(function () {
    var alert_org = window.alert, confirm_org = window.confirm;
    window.alert = function (msg) { return alert_org.call(window, typeof msg === "string" ? __js(msg) : msg); };
    window.confirm = function (msg) { return confirm_org.call(window, typeof msg === "string" ? __js(msg) : msg); };
})();
</script>', -1);

if (is_file(G5_PATH.'/lang/'.kh_lang().'.js'))
    add_javascript('<script src="'.G5_URL.'/lang/'.kh_lang().'.js"></script>', -1);
