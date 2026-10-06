<?php
if (!defined('_GNUBOARD_')) exit;

//------------------------------------------------------------------------------
// 다국어 문구 (gnu5-orz). 현재 언어는 config.php의 KH_LANG 상수 (ko, en …)
// 사전: lang/<lang>.php (테마 밖 문구), theme/<테마>/lang/<lang>.php (테마 문구),
//       data/lang/<lang>.php (관리자 → 환경설정 → 다국어 문구에서 고친 것·DB 문구)
//       → return ['원문' => '번역', '문맥|원문' => '번역', ...]; 같은 키는 뒤의 사전이 우선
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
        foreach (array(G5_PATH, $has_theme ? G5_THEME_PATH : '', G5_DATA_PATH) as $dir) {
            if ($dir)
                $dict = kh_dict_file($dir, KH_LANG) + $dict;
        }
    }

    return $dict;
}

// 사전 파일 하나 (<dir>/lang/<lang>.php, 없으면 빈 배열)
function kh_dict_file($dir, $lang)
{
    $file = $dir.'/lang/'.$lang.'.php';
    $d = is_file($file) ? include($file) : array();
    return is_array($d) ? $d : array();
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

// 지원 언어 (코드 => 그 언어로 쓴 이름). 주소 접두사는 .htaccess 규칙과 같아야 한다
function kh_langs()
{
    return array(
        'ko' => '한국어', 'en' => 'English', 'de' => 'Deutsch', 'ja' => '日本語', 'fr' => 'Français',
        'zh-hans' => '简体中文', 'zh-hant' => '繁體中文', 'nl' => 'Nederlands', 'sv' => 'Svenska', 'da' => 'Dansk',
        'nb' => 'Norsk bokmål', 'es' => 'Español', 'it' => 'Italiano', 'pt-br' => 'Português (Brasil)',
        'pt-pt' => 'Português (Portugal)', 'ar' => 'العربية', 'pl' => 'Polski', 'tr' => 'Türkçe',
        'id' => 'Bahasa Indonesia', 'vi' => 'Tiếng Việt', 'hi' => 'हिन्दी',
    );
}

// DB에 저장된 사이트 이름·그룹 이름 번역 (게시판 이름은 get_board_db()에서)
add_replace('get_config', 'kh_i18n_config', G5_HOOK_DEFAULT_PRIORITY, 1);
function kh_i18n_config($config)
{
    if (is_array($config) && isset($config['cf_title']))
        $config['cf_title'] = __($config['cf_title']);
    return $config;
}

add_replace('get_group', 'kh_i18n_group', G5_HOOK_DEFAULT_PRIORITY, 1);
function kh_i18n_group($group)
{
    if (is_array($group) && isset($group['gr_subject']))
        $group['gr_subject'] = __($group['gr_subject']);
    return $group;
}
