<?php
if (!defined('_GNUBOARD_')) exit;

//------------------------------------------------------------------------------
// 다국어 문구 (gnu5-orz). 현재 언어는 config.php의 KH_LANG 상수 (ko, en …)
// 사전: lang/<lang>.php (테마 밖 문구), theme/<테마>/lang/<lang>.php (테마 문구)
//       → return ['원문' => '번역', '문맥|원문' => '번역', ...]; 같은 키는 테마 사전이 우선
// 번역이 없으면 한국어 원문을 그대로 돌려준다.
// 코어에서도 쓰므로 common.php가 일찍 읽는다.
//------------------------------------------------------------------------------

// 현재 언어 사전 (한 번만 읽는다. 테마가 정해지기 전에 불리면 테마가 정해진 뒤 한 번 더 읽는다)
function kh_dict()
{
    static $dict = null, $has_theme = false;

    if ($dict === null || (!$has_theme && defined('G5_THEME_PATH'))) {
        $has_theme = defined('G5_THEME_PATH');
        $dict = array();
        foreach (array(G5_PATH, $has_theme ? G5_THEME_PATH : '') as $dir) {
            $file = $dir.'/lang/'.KH_LANG.'.php';
            if ($dir && is_file($file) && is_array($d = include($file)))
                $dict = $d + $dict;
        }
    }

    return $dict;
}

// __('안녕하세요?')
// __('{1}님 안녕하세요', $mb_nick)   원문에 {n}이 있으면 뒤 인자는 값
// __('처음', 'pager')                원문에 {n}이 없으면 두 번째 인자는 문맥 이름
function __($str)
{
    $args = array_slice(func_get_args(), 1);
    $dict = kh_dict();

    $has_param = (bool)preg_match('/\{[0-9]+\}/', $str);
    $key = (!$has_param && isset($args[0]) && $args[0] !== '') ? $args[0].'|'.$str : $str;

    $text = (isset($dict[$key]) && $dict[$key] !== '') ? $dict[$key] : $str;

    if ($has_param) {
        $map = array();
        foreach ($args as $i => $v)
            $map['{'.($i + 1).'}'] = $v;
        $text = strtr($text, $map);
    }

    return $text;
}
