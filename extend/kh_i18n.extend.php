<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 다국어: __()와 사전은 lib/i18n.lib.php, 현재 언어는 config.php의 KH_LANG 상수
// .htaccess 그누보드 rewrite 블록의 RewriteBase 바로 아래 (FORK.md에 같은 규칙):
//   RewriteCond %{DOCUMENT_ROOT}/$2 -d
//   RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/(.*[^/])$ /$1/$2/ [R=301,L]   /en/폴더 → /en/폴더/ (Apache가 언어를 뺀 주소로 보내지 않게)
//   RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/(adm(/.*)?)$ $2 [R=302,L]   관리자 화면은 접두사 없는 주소로 이동
//   RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/?$ index.php [E=KH_LANG:$1,L]
//   RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/(.+)$ $2 [E=KH_LANG:$1,L]

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

if (is_file(G5_PATH.'/lang/'.KH_LANG.'.js'))
    add_javascript('<script src="'.G5_BASE_URL.'/lang/'.KH_LANG.'.js"></script>', -1);

//------------------------------------------------------------------------------
// 지금 화면의 다른 언어 주소: kh_lang_url('en') → https://도메인/en/free?page=2
// 언어 선택 버튼은 kh_langs()와 이 함수로 그리면 된다
//------------------------------------------------------------------------------
function kh_lang_url($lang)
{
    $uri = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : '/';
    $base_path = rtrim((string)parse_url(G5_BASE_URL, PHP_URL_PATH), '/');
    if ($base_path !== '' && strpos($uri, $base_path) === 0)
        $uri = substr($uri, strlen($base_path));
    if (KH_LANG !== 'ko')
        $uri = preg_replace('#^/'.preg_quote(KH_LANG, '#').'(?=[/?]|$)#', '', $uri);
    if ($uri === '' || $uri[0] !== '/')
        $uri = '/'.$uri;

    return G5_BASE_URL.($lang === 'ko' ? '' : '/'.$lang).$uri;
}

// 검색용 canonical, hreflang, og:locale. 관리자 화면 제외.
// 테마가 직접 넣는다면 theme.config.php에서 define('KH_NO_I18N_HEAD', true);
if (!defined('G5_IS_ADMIN') && !defined('KH_NO_I18N_HEAD')) {
    $kh_head = '<link rel="canonical" href="'.htmlspecialchars(kh_lang_url(KH_LANG)).'">';
    foreach (array_keys(kh_langs()) as $kh_code)
        $kh_head .= PHP_EOL.'<link rel="alternate" hreflang="'.$kh_code.'" href="'.htmlspecialchars(kh_lang_url($kh_code)).'">';
    $kh_head .= PHP_EOL.'<link rel="alternate" hreflang="x-default" href="'.htmlspecialchars(kh_lang_url('ko')).'">';
    $kh_locale = array('ko' => 'ko_KR', 'en' => 'en_US', 'de' => 'de_DE', 'ja' => 'ja_JP', 'fr' => 'fr_FR',
        'zh-hans' => 'zh_CN', 'zh-hant' => 'zh_TW', 'nl' => 'nl_NL', 'sv' => 'sv_SE', 'da' => 'da_DK',
        'nb' => 'nb_NO', 'es' => 'es_ES', 'it' => 'it_IT', 'pt-br' => 'pt_BR', 'pt-pt' => 'pt_PT',
        'ar' => 'ar_AR', 'pl' => 'pl_PL', 'tr' => 'tr_TR', 'id' => 'id_ID', 'vi' => 'vi_VN', 'hi' => 'hi_IN');
    if (isset($kh_locale[KH_LANG]))
        $kh_head .= PHP_EOL.'<meta property="og:locale" content="'.$kh_locale[KH_LANG].'">';
    add_stylesheet($kh_head, 0);
    unset($kh_head, $kh_code, $kh_locale);
}

// 관리자 메뉴: 환경설정 → 다국어 문구 (adm/i18n.php)
add_replace('admin_menu', 'kh_i18n_admin_menu', G5_HOOK_DEFAULT_PRIORITY, 1);
function kh_i18n_admin_menu($menu)
{
    if (isset($menu['menu100']))
        $menu['menu100'][] = array('100960', '다국어 문구', G5_ADMIN_URL.'/i18n.php', 'cf_i18n');
    return $menu;
}
