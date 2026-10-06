# gnu5-orz

코어 수정 없이 기능을 추가해 보려 했습니다.

안 됐습니다.

그래서 포크했습니다.

## 할 일

1. 코드 곳곳에 숨어 있는 하드코딩 문자열을 밖으로 꺼냅니다.
2. `common.lib.php` 등의 기본 함수를 필요에 따라 바꿀 수 있게 합니다.
3. 가능하면 원본 업데이트를 따라갑니다. 가능하면요.

## 원본 파일 수정 목록

원본 업데이트를 받을 때 충돌이 나면 이 목록을 보고 다시 적용합니다.

| 파일 | 위치 | 내용 | 이유 |
|---|---|---|---|
| `config.php` | `define('G5_URL', …)` 부분과 `G5_*_URL` 정의 | 환경변수 `KH_LANG`(없으면 `ko`)으로 `KH_LANG` 상수를 정함. 원래 `G5_URL`이던 기준 주소를 `G5_BASE_URL`(접두사 없음)로 두고, `G5_URL`은 `ko`가 아니면 끝에 `/<언어>`를 붙임. 자산·관리자 상수(`G5_ADMIN_URL`, `G5_CSS_URL`, `G5_DATA_URL`, `G5_IMG_URL`, `G5_JS_URL`, `G5_SKIN_URL`, `G5_EDITOR_URL`, `G5_MOBILE_URL`)는 `G5_BASE_URL`로 만듦 | 페이지 링크(`G5_URL`, `G5_BBS_URL`, `G5_PLUGIN_URL` …)는 같은 언어를 유지하고, 에디터 이미지처럼 DB에 저장되는 주소와 CSS·JS는 언어와 무관한 주소가 되게 하려고. `G5_DOMAIN`을 써도 접두사가 붙는다. 상수라 `extend/`에서 바꿀 수 없다 |
| `common.php` | `define('G5_THEME_URL', …)` | `G5_URL` → `G5_BASE_URL` | 테마 자산 주소는 언어와 무관하게 |
| `lib/common.lib.php` | `https_url()` | `G5_HTTPS_DOMAIN`·`G5_DOMAIN`을 쓸 때도 언어 접두사를 붙임 | 원래는 이 두 설정을 쓰면 로그인·회원가입 주소에서 언어가 빠졌다 |
| `extend/social_login.extend.php`, `plugin/social/includes/functions.php` | `G5_SOCIAL_LOGIN_BASE_URL`, hybridauth `base_url` | `G5_BASE_URL`로 만듦 (접두사 없음) | 네이버·카카오 등에 등록하는 콜백 주소는 하나라서, 언어마다 달라지면 로그인이 실패한다 |
| `common.php` | `uri.lib.php` include 바로 다음 | `lib/i18n.lib.php`(새 파일: `__()`, 사전 읽기) include 한 줄 | 코어 문구도 `__()`로 번역하므로 `extend/`보다 먼저 읽어야 한다 |
| `bbs/`, `lib/`, `plugin/`(본인인증·캡차·sns·social), `common.php`, `head.php`, `head.sub.php` | 문자열 | 사용자에게 보이는 문자열을 `__('…')`로 감쌈. 알림(`alert`, `alert_close`, `confirm`)도 호출하는 곳에서 `alert(__('…'))`, 값이 들어가면 `__('…{1}…', 값)`. JS 안이면 `get_js_safe_string(__('…'))` | 다국어. 관리자(`adm/`)·쇼핑몰·DB 저장값·비교값은 그대로 |
| `lib/get_data.lib.php` | `get_board_db()` | 게시판 이름(`bo_subject`, `bo_mobile_subject`)을 `__()`로 번역 (2줄) | DB 문구 번역. 사이트 이름·그룹 이름은 코어 훅(`get_config`, `get_group`)으로 해서 코어 수정 없음 |
| `lib/latest.lib.php` | `latest()` 캐시 파일 이름 | 이름에 `KH_LANG`을 넣음 | 최신글 캐시에 번역된 게시판 이름이 들어가므로 언어별로 나눔 |
| `bbs/new.php`, `bbs/search.php`, `bbs/scrap.php`, `bbs/content.php` | SQL로 직접 읽은 게시판·그룹 이름, 내용 제목 | `__()`로 감쌈 | `get_board_db()`를 거치지 않는 곳 |
| `adm/i18n.php`, `adm/i18n_update.php` | 새 파일 | 관리자 → 환경설정 → 다국어 문구 (메뉴는 `extend/`의 `admin_menu` 훅) | 번역 수정·DB 문구 번역. 저장은 `data/lang/<언어>.php` |

### 저장소 밖 설정 (서버 `.htaccess`)

`.htaccess`는 git 관리 대상이 아니므로 서버마다 직접 넣습니다. 그누보드 rewrite 블록의 `RewriteBase /` 바로 아래 (첫 줄은 관리자 화면 `/en/adm/…`을 `/adm/…`으로 이동):

```apache
RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/(adm(/.*)?)$ $2 [R=302,L]
RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/?$ index.php [E=KH_LANG:$1,L]
RewriteRule ^(en|de|ja|fr|zh-hans|zh-hant|nl|sv|da|nb|es|it|pt-br|pt-pt|ar|pl|tr|id|vi|hi)/(.+)$ $2 [E=KH_LANG:$1,L]
```

## 수명

자체 보드를 완성하는 날 폐기합니다.

그날이 언제 올지는 아직 모릅니다. orz
