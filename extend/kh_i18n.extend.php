<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 다국어: __()와 사전은 lib/i18n.lib.php, 현재 언어는 config.php의 KH_LANG 상수
// .htaccess 그누보드 rewrite 블록의 RewriteBase 바로 아래:
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
    add_javascript('<script src="'.G5_URL.'/lang/'.KH_LANG.'.js"></script>', -1);
