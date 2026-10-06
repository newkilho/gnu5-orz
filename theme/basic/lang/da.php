<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (da). 틀은 php lang/build.php da 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Gå til indhold',
'커뮤니티' => 'Fællesskab',
'쇼핑몰' => 'Butik',
'새글' => 'Nye indlæg',
'접속자' => 'Besøgende',
'사이트 내 전체검색' => 'Søg på siden',
'검색어 필수' => 'Søgeord (påkrævet)',
'검색어를 입력해주세요' => 'Indtast et søgeord',
'검색' => 'Søg',
'검색어는 두글자 이상 입력하십시오.' => 'Indtast mindst to tegn.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For hurtigere søgning må søgeordet kun indeholde ét mellemrum.',
'정보수정' => 'Rediger profil',
'로그아웃' => 'Log ud',
'관리자' => 'Admin',
'회원가입' => 'Opret konto',
'로그인' => 'Log ind',
'메인메뉴' => 'Hovedmenu',
'전체메뉴' => 'Alle menuer',
'전체메뉴열기' => 'Åbn alle menuer',
'하위분류' => 'Undermenu',
'메뉴 준비 중입니다.' => 'Menuen er under forberedelse.',
'{1}에서 설정하실 수 있습니다.' => 'Du kan indstille den under {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Admin &gt; Indstillinger &gt; Menuindstillinger',

// theme/basic/index.php
'최신글' => 'Seneste indlæg',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'Gruppen {1} er kun tilgængelig på computer.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Åbn menu',
'메뉴 닫기' => 'Luk menu',
'{1}에서 설정하세요.' => 'Indstil den under {1}.',
'1:1문의' => '1:1-henvendelse',
'사용자메뉴' => 'Brugermenu',
'기본' => 'Standard',
'크게' => 'Stor',
'더크게' => 'Større',
'열기' => 'Åbn',
'닫기' => 'Luk',
'뒤로가기' => 'Tilbage',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Indstillinger for indlægsliste',
'선택삭제' => 'Slet valgte',
'선택복사' => 'Kopiér valgte',
'선택이동' => 'Flyt valgte',
'글쓰기' => 'Skriv',
'카테고리' => 'Kategori',
'현재 페이지 게시물' => 'Indlæg på denne side',
'전체선택' => 'Vælg alle',
'공지' => 'Meddelelse',
'댓글' => 'Kommentarer',
'개' => ' ',
'작성자' => 'Forfatter',
'회' => ' visninger',
'추천' => 'Synes godt om',
'비추천' => 'Synes ikke om',
'게시물이 없습니다.' => 'Ingen indlæg.',
'자바스크립트를 사용하지 않는 경우' => 'Hvis JavaScript er slået fra,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'slettes valgte elementer straks uden bekræftelse, så vær forsigtig.',
'전체 {1}건' => 'I alt {1}',
'페이지' => 'Side',
'게시물 검색' => 'Søg i indlæg',
'검색대상' => 'Søg i',
'검색어를 입력하세요' => 'Indtast et søgeord',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Vælg mindst ét indlæg.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Er du sikker på, at du vil slette de valgte indlæg?

Slettede data kan ikke gendannes.

Hvis et valgt indlæg har svar,
skal du også vælge svarene for at slette det.',
'복사' => 'Kopiér',
'이동' => 'Flyt',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Del',
'스크랩' => 'Gem',
'답변' => 'Svar',
'수정' => 'Rediger',
'삭제' => 'Slet',
'목록' => 'Liste',
'페이지 정보' => 'Sideinfo',
'작성일' => 'Dato',
'조회' => 'Visninger',
'본문' => 'Indhold',
'이 글을 추천하셨습니다' => 'Du synes godt om dette indlæg',
'첨부파일' => 'Vedhæftede filer',
'{1}회 다운로드' => '{1} downloads',
'관련링크' => 'Relaterede links',
'{1}회 연결' => '{1} klik',
'이전글' => 'Forrige indlæg',
'다음글' => 'Næste indlæg',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at downloade.
Hvis du er medlem, så log ind og prøv igen.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Når du downloader denne fil, trækkes der {1} point.

Point trækkes kun én gang pr. indlæg og trækkes ikke igen, hvis du downloader filen senere.

Vil du downloade filen?',
'이 글을 비추천하셨습니다.' => 'Du synes ikke om dette indlæg.',
'이 글을 추천하셨습니다.' => 'Du synes godt om dette indlæg.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Kommentarliste',
'{1}님의 댓글' => 'Kommentar fra {1}',
'의 댓글' => ' (svar)',
'아이피' => 'IP',
'댓글 옵션' => 'Kommentarindstillinger',
'비밀글' => 'Privat',
'등록된 댓글이 없습니다.' => 'Ingen kommentarer endnu.',
'댓글쓰기' => 'Skriv en kommentar',
'글자' => ' tegn',
'댓글 내용' => 'Kommentar',
'댓글내용을 입력해주세요' => 'Skriv din kommentar',
'이름' => 'Navn',
'필수' => 'Påkrævet',
'비밀번호' => 'Adgangskode',
'SNS 동시등록' => 'Del også på sociale medier',
'댓글등록' => 'Send kommentar',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'Indholdet indeholder et forbudt ord (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Kommentarer skal være på mindst {1} tegn.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Kommentarer må højst være på {1} tegn.',
'댓글을 입력하여 주십시오.' => 'Skriv en kommentar.',
'이름이 입력되지 않았습니다.' => 'Indtast dit navn.',
'비밀번호가 입력되지 않았습니다.' => 'Indtast en adgangskode.',
'이 댓글을 삭제하시겠습니까?' => 'Slet denne kommentar?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Modtag svar på e-mail',
'분류' => 'Kategori',
'선택하세요' => 'Vælg',
'이메일' => 'E-mail',
'홈페이지' => 'Websted',
'옵션' => 'Indstillinger',
'제목' => 'Emne',
'내용' => 'Indhold',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Indlæg i dette forum skal være på mellem {1} og {2} tegn.',
'링크 #{1}' => 'Link #{1}',
'링크를 입력하세요' => 'Indtast et link',
'파일을 첨부하세요' => 'Vedhæft en fil',
'파일 #{1}' => 'Fil #{1}',
'파일첨부' => 'Vedhæft fil',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Vedhæftning {1}: højst {2}',
'파일 설명을 입력해주세요.' => 'Indtast en filbeskrivelse.',
'파일 삭제' => 'Slet fil',
'자동등록방지' => 'Spambeskyttelse',
'취소' => 'Annuller',
'작성완료' => 'Send',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Brug automatiske linjeskift?

Automatiske linjeskift omdanner linjeskift i indlægget til <br>-tags.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Emnet indeholder et forbudt ord (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Indholdet skal være på mindst {1} tegn.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Indholdet må højst være på {1} tegn.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Billedliste',
'열람중' => 'Vises',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Ingen er online.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Søgeord',
'자주하시는질문 분류' => 'FAQ-kategorier',
'열린 분류' => 'Åben kategori',
'검색된 게시물이 없습니다.' => 'Ingen resultater fundet.',
'등록된 FAQ가 없습니다.' => 'Ingen ofte stillede spørgsmål endnu.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Tilføj ofte stillede spørgsmål via menuen',
'메뉴를 이용하십시오.' => 'FAQ-administration.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Forrige side',
'다음페이지' => 'Næste side',
'전체보기' => 'Vis alle',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Seneste kommentarer',
'더보기' => 'Mere',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Information',
'동의합니다' => 'Jeg accepterer',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Send e-mail til {1}',
'메일쓰기' => 'Skriv e-mail',
'형식' => 'Format',
'첨부 파일 1' => 'Vedhæftning 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Vedhæftede filer kan gå tabt, så kontrollér efter afsendelsen, at filen blev vedhæftet.',
'첨부 파일 2' => 'Vedhæftning 2',
'메일발송' => 'Send e-mail',
'창닫기' => 'Luk vindue',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Store vedhæftede filer tager længere tid at sende.

Luk eller opdater ikke vinduet, før e-mailen er sendt.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Brugernavn',
'자동로그인' => 'Forbliv logget ind',
'회원로그인 안내' => 'Medlemslogin',
'아이디/비밀번호 찾기' => 'Glemt brugernavn/adgangskode',
'회원 가입' => 'Opret konto',
'비회원 구매' => 'Køb som gæst',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Der gives ikke point for gæstebestillinger.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Jeg har læst og accepterer indsamlingen af personoplysninger.',
'비회원으로 구매하기' => 'Køb som gæst',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Du skal læse og acceptere indsamlingen af personoplysninger.',
'비회원 주문조회' => 'Find gæstebestilling',
'주문번호' => 'Ordrenummer',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Indtast {1} fra ordrebekræftelsen og den {2}, du angav ved bestillingen.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Med automatisk login behøver du ikke at indtaste brugernavn og adgangskode næste gang.

Undgå at bruge det på offentlige computere, da dine personoplysninger kan blive eksponeret.

Brug automatisk login?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Påkrævet) Supplerende privatlivspolitik',
'추가 개인정보처리방침 안내' => 'Supplerende privatlivspolitik',
'목적' => 'Formål',
'항목' => 'Oplysninger',
'보유기간' => 'Opbevaringsperiode',
'이용자 식별 및 본인여부 확인' => 'Identifikation af brugere og bekræftelse af identitet',
'생년월일' => 'Fødselsdato',
', 휴대폰 번호(아이핀 제외)' => ', mobilnummer (undtagen i-PIN)',
', 암호화된 개인식별부호(CI)' => ', krypteret personlig identifikator (CI)',
'회원 탈퇴 시까지' => 'Indtil medlemskabet opsiges',
'추가 개인정보처리방침에 동의합니다.' => 'Jeg accepterer den supplerende privatlivspolitik.',
'인증수단 선택하기' => 'Vælg bekræftelsesmetode',
'간편인증' => 'Enkel bekræftelse',
'휴대폰 본인확인' => 'Bekræftelse via mobil',
'아이핀 본인확인' => 'Bekræftelse via i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript skal være slået til for at bekræfte identitet.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Konfigurer mobilbekræftelse i de grundlæggende indstillinger.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Du skal acceptere den supplerende privatlivspolitik for at fortsætte med bekræftelsen.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Indtast din adgangskode igen.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Indtast din adgangskode for at gennemføre opsigelsen af din konto.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'For at beskytte dine oplysninger kontrollerer vi din adgangskode en gang til.',
'회원아이디' => 'Brugernavn',
'비밀번호(필수)' => 'Adgangskode (påkrævet)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'I alt {2} beskeder ({1})',
'받은쪽지' => 'Indbakke',
'보낸쪽지' => 'Sendt',
'쪽지쓰기' => 'Skriv besked',
'안 읽은 쪽지' => 'Ulæst besked',
'자료가 없습니다.' => 'Ingen data.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Beskeder gemmes i højst {1} dage.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Send besked',
'받는 회원아이디' => 'Modtagerens brugernavn',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Adskil flere modtagere med komma (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Når du sender en besked, trækkes der {1} point pr. modtager.',
'보내기' => 'Send',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Sendt',
'받은' => 'Modtaget',
'받는' => 'Til',
'쪽지 내용' => 'Besked',
'{1}시간' => '{1} den',
'이전쪽지' => 'Forrige besked',
'다음쪽지' => 'Næste besked',
'답장' => 'Svar',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Rediger indlæg',
'글 삭제' => 'Slet indlæg',
'댓글 삭제' => 'Slet kommentar',
'작성자만 글을 수정할 수 있습니다.' => 'Kun forfatteren kan redigere dette indlæg.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Hvis du er forfatteren, kan du redigere indlægget ved at indtaste den adgangskode, du brugte, da du skrev det.',
'작성자만 글을 삭제할 수 있습니다.' => 'Kun forfatteren kan slette dette indlæg.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Hvis du er forfatteren, kan du slette indlægget ved at indtaste den adgangskode, du brugte, da du skrev det.',
'비밀글 기능으로 보호된 글입니다.' => 'Dette er et privat indlæg.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Kun forfatteren og administratorer kan se det. Hvis du er forfatteren, så indtast adgangskoden.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Find via e-mail',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Indtast den e-mailadresse, du oprettede kontoen med.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Vi sender dit brugernavn og dine adgangskodeoplysninger til den e-mailadresse.',
'E-mail 주소' => 'E-mailadresse',
'인증메일 보내기' => 'Send bekræftelsesmail',
'본인인증으로 찾기' => 'Find via identitetsbekræftelse',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Indtast en ny adgangskode.',
'회원 아이디 :' => 'Brugernavn:',
'새 비밀번호' => 'Ny adgangskode',
'새 비밀번호 확인' => 'Bekræft ny adgangskode',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Din adgangskode er ændret. Log ind igen.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Den nye adgangskode og bekræftelsen stemmer ikke overens.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Pointsaldo',
'y-m-d H시' => 'd.m.y H:00',
'만료' => 'Udløbet',
'소계' => 'Subtotal',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => '{1}s profil',
'회원권한' => 'Medlemsniveau',
'포인트' => 'Point',
'회원가입일' => 'Medlem siden',
' ({1} 일)' => ' ({1} dage)',
'알 수 없음' => 'Ukendt',
'최종접속일' => 'Seneste besøg',
'인사말' => 'Hilsen',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du skal acceptere brugsbetingelserne samt indsamling og brug af personoplysninger for at oprette en konto.',
'회원가입 약관에 모두 동의합니다' => 'Jeg accepterer alle betingelser',
'(필수) 회원가입약관' => '(Påkrævet) Brugsbetingelser',
'회원가입약관의 내용에 동의합니다.' => 'Jeg accepterer brugsbetingelserne.',
'(필수) 개인정보 수집 및 이용' => '(Påkrævet) Indsamling og brug af personoplysninger',
'개인정보 수집 및 이용' => 'Indsamling og brug af personoplysninger',
'아이디, 이름, 비밀번호' => 'Brugernavn, navn, adgangskode',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', fødselsdato, mobilnummer (kun ved identitetsbekræftelse, undtagen i-PIN), krypteret personlig identifikator (CI)',
'고객서비스 이용에 관한 통지,' => 'Meddelelser om kundeservice,',
'CS대응을 위한 이용자 식별' => 'identifikation af brugere til kundesupport',
'연락처 (이메일, 휴대전화번호)' => 'Kontaktoplysninger (e-mail, mobilnummer)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Jeg accepterer indsamling og brug af personoplysninger.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du skal acceptere brugsbetingelserne for at oprette en konto.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du skal acceptere indsamling og brug af personoplysninger for at oprette en konto.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Kontooplysninger',
'아이디 (필수)' => 'Brugernavn (påkrævet)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Kun bogstaver, tal og _. Mindst 3 tegn.',
'비밀번호 (필수)' => 'Adgangskode (påkrævet)',
'비밀번호확인 (필수)' => 'Bekræft adgangskode (påkrævet)',
'개인정보 입력' => 'Personoplysninger',
' - 본인확인 시 자동입력' => ' - udfyldes automatisk ved bekræftelse',
'(필수)' => '(påkrævet)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobil',
'{1} 본인확인' => 'Bekræftelse via {1}',
'{1} 및 {2} 완료' => '{1} og {2} gennemført',
'성인인증' => 'aldersbekræftelse',
'{1} 완료' => '{1} gennemført',
'이름 (필수)' => 'Navn (påkrævet)',
'닉네임 (필수)' => 'Kaldenavn (påkrævet)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Kun koreanske tegn, latinske bogstaver og tal, uden mellemrum (mindst 2 koreanske eller 4 latinske tegn)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Hvis du ændrer dit kaldenavn, kan du ikke ændre det igen i {1} dage.',
'E-mail (필수)' => 'E-mail (påkrævet)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Oprettelsen er gennemført, når du har bekræftet den e-mail, vi sender dig.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Hvis du ændrer din e-mailadresse, skal du bekræfte den igen.',
'전화번호' => 'Telefonnummer',
'휴대폰번호' => 'Mobilnummer',
'주소' => 'Adresse',
'우편번호' => 'Postnummer',
' (필수)' => ' (påkrævet)',
'주소검색' => 'Find adresse',
'상세주소' => 'Adressedetaljer',
'참고항목' => 'Supplerende oplysninger',
'기타 개인설정' => 'Andre indstillinger',
'서명' => 'Signatur',
'자기소개' => 'Om mig',
'회원아이콘' => 'Medlemsikon',
'이미지선택' => 'Vælg billede',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Billedet må højst være {1} px bredt og {2} px højt.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Kun gif-, jpg- og png-filer på højst {1} byte.',
'회원이미지' => 'Medlemsbillede',
'정보공개' => 'Offentlig profil',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Lad andre se mine oplysninger.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Hvis du ændrer dette, kan du ikke ændre det igen i {1} dage.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Indstillingen kan ikke ændres i {1} dage efter en ændring (indtil {2}).',
'Y년 m월 j일' => 'd.m.Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Det forhindrer medlemmer i at sende beskeder og derefter skjule deres profil for at undgå svar.',
'추천인아이디' => 'Henviserens brugernavn',
'수신설정' => 'Notifikationsindstillinger',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Valgfrit) Indsamling og brug af personoplysninger til markedsføring',
'자세히보기' => 'Detaljer',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Information om indsamling og brug af personoplysninger til markedsføring. Klik på Detaljer for at læse hele teksten.',
'(동의일자: {1})' => '(Accepteret den: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Formål: markedsføring og kampagner for tjenesten',
'* 항목: 이름, 이메일' => '* Oplysninger: navn, e-mail',
', 휴대폰 번호' => ', mobilnummer',
'* 보유기간: 회원 탈퇴 시까지' => '* Opbevaring: indtil medlemskabet opsiges',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Du kan stadig bruge den grundlæggende tjeneste, hvis du afviser, men personlige fordele kan være begrænsede.',
'(선택) 광고성 정보 수신 동의' => '(Valgfrit) Samtykke til at modtage reklamer',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Dette dækker samtykke til at modtage reklamer (e-mail/sms/KakaoTalk). Klik på Detaljer for at læse hele teksten.',
'광고성 이메일 수신 동의' => 'Modtag reklamer på e-mail',
'광고성 SMS/카카오톡 수신 동의' => 'Modtag reklamer via sms/KakaoTalk',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Vi kan sende reklamer via e-mail/sms/KakaoTalk mellem kl. 8 og 21 ved hjælp af de personoplysninger, du har givet samtykke til.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Du kan til enhver tid trække dit samtykke tilbage under Min side.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Valgfrit) Samtykke til videregivelse af personoplysninger til tredjepart',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Information om videregivelse af personoplysninger til tredjepart. Klik på Detaljer for at læse hele teksten.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Formål: markedsføring af produkter/tjenester, kampagner og arrangementer (KakaoTalk m.m.)',
'* 항목: 이름, 휴대폰 번호' => '* Oplysninger: navn, mobilnummer',
'* 제공받는 자:' => '* Modtager:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Opbevaring: i tjenestens løbetid eller indtil samtykket trækkes tilbage',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Du har allerede bekræftet din identitet via {1}.

Vil du annullere den tidligere bekræftelse og bekræfte igen?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Adgangskoden skal være på mindst 3 tegn.',
'비밀번호가 같지 않습니다.' => 'Adgangskoderne stemmer ikke overens.',
'이름을 입력하십시오.' => 'Indtast dit navn.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetsbekræftelse er påkrævet for at oprette en konto.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Medlemsikonet er ikke en billedfil.',
'회원이미지가 이미지 파일이 아닙니다.' => 'Medlemsbilledet er ikke en billedfil.',
'본인을 추천할 수 없습니다.' => 'Du kan ikke henvise dig selv.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Oprettelsen er gennemført',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Tillykke med dit medlemskab, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Der er sendt en bekræftelsesmail til den adresse, du angav.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Kontrollér e-mailen, og gennemfør bekræftelsen for at bruge siden.',
'이메일 주소' => 'E-mailadresse',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Hvis du har angivet en forkert e-mailadresse, så kontakt sidens administrator.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Din adgangskode gemmes krypteret, så ingen kan læse den.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Hvis du glemmer dit brugernavn eller din adgangskode, kan du gendanne dem med den registrerede e-mailadresse.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Du kan til enhver tid opsige dit medlemskab; dine oplysninger slettes efter en vis periode.',
'감사합니다.' => 'Tak.',
'메인으로' => 'Til forsiden',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Gem',
'제목 확인 및 댓글 쓰기' => 'Kontrollér emnet og skriv en kommentar',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Du kan efterlade en kommentar med tak eller opmuntring, når du gemmer.',
'스크랩 확인' => 'Bekræft gem',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Avanceret søgning',
'전체게시물' => 'Alle indlæg',
'원글만' => 'Kun indlæg',
'코멘트만' => 'Kun kommentarer',
'회원 아이디만 검색 가능' => 'Søg kun på brugernavn',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Medlemslogin',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Min konto',
'{1}님' => '{1}',
'안 읽은' => 'Ulæste',
'쪽지' => 'Beskeder',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Er du sikker på, at du vil opsige dit medlemskab?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Luk kategorier',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Kuponer',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Afstemning',
'결과보기' => 'Se resultater',
'관리자 관리' => 'Admin',
'투표하기' => 'Stem',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Kun medlemmer på niveau {1} eller højere kan stemme.',
'투표하실 설문항목을 선택하세요' => 'Vælg en mulighed at stemme på',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Kun medlemmer på niveau {1} eller højere kan se resultaterne.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'I alt {1} stemmer',
'결과' => 'Resultater',
'{1} 표' => '{1} stemmer',
'이 설문에 대한 기타의견' => 'Andre meninger om afstemningen',
'님의 의견' => 's mening',
'기타의견' => 'Andre meninger',
'의견' => 'Mening',
'의견을 입력해주세요' => 'Skriv din mening',
'의견남기기' => 'Giv din mening',
'다른 투표 결과 보기' => 'Andre afstemningsresultater',
'해당 기타의견을 삭제하시겠습니까?' => 'Slet denne mening?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Populære søgninger',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Ny henvendelse',
'답변완료' => 'Besvaret',
'답변대기' => 'Afventer',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Er du sikker på, at du vil slette de valgte indlæg?

Slettede data kan ikke gendannes.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Rediger svar',
'답변삭제' => 'Slet svar',
'추가질문' => 'Opfølgende spørgsmål',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Send svar',
'파일 #1' => 'Fil #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Vedhæftning 1: højst {1}',
'파일 #2' => 'Fil #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Vedhæftning 2: højst {1}',
'답변쓰기' => 'Skriv svar',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Vi forbereder et svar på din henvendelse.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Kontaktoplysninger',
'첨부' => 'Vedhæftning',
'연관질문' => 'Relaterede spørgsmål',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Modtag svar',
'답변등록 SMS알림 수신' => 'Modtag sms, når der er svaret',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Indtast mobilnummeret med kun tal og -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Søgeresultater',
'게시판' => 'Fora',
'{1}개' => '{1}',
'게시물' => 'Indlæg',
'페이지 열람 중' => 'sider',
'검색조건' => 'Søgeindstillinger',
'제목+내용' => 'Emne+indhold',
'전체게시판' => 'Alle fora',
'검색된 자료가 하나도 없습니다.' => 'Ingen resultater fundet.',
'게시판 내 결과' => 'Resultater i forummet',
'{1} 결과 더보기' => 'Flere resultater i {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Besøgsstatistik',
'오늘' => 'I dag',
'어제' => 'I går',
'최대' => 'Maks.',
'전체' => 'I alt',
'상세보기' => 'Detaljer',

// theme/basic/mobile/tail.php
'회사소개' => 'Om os',
'개인정보처리방침' => 'Privatlivspolitik',
'서비스이용약관' => 'Brugsbetingelser',
'소유하신 도메인.' => 'Dit domæne.',
'사이트 정보' => 'Oplysninger om siden',
'회사명 : 회사명 / 대표 : 대표자명' => 'Firma: Firmanavn / Direktør: Navn',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adresse: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'CVR-nr.: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tlf.: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Postordre-registreringsnr.: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Databeskyttelsesansvarlig: Navn',
'상단으로' => 'Til toppen',
'PC 버전으로 보기' => 'Computerversion',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'I alt {1}',
'게시판 검색' => 'Søg i forummet',
'현재 페이지 게시물  전체선택' => 'Vælg alle indlæg på denne side',
'번호' => 'Nr.',
'글쓴이' => 'Forfatter',
'날짜' => 'Dato',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} downloads | DATO: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}:',
'댓글의' => 'svar på',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Vælg en kategori',
'임시 저장된 글 ({1})' => 'Kladder ({1})',
'임시 저장된 글 목록' => 'Kladdeliste',
'링크  #{1}' => 'Link #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Søg i FAQ',
'FAQ 수정' => 'Rediger FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Populære indlæg',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Ingen billeder.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Medlem',
'ID/PW 찾기' => 'Glemt ID/adgangskode',
'주문서번호' => 'Ordrenummer',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Kun forfatteren og administratorer kan se det.',
'본인이라면 비밀번호를 입력하세요.' => 'Hvis du er forfatteren, så indtast adgangskoden.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Hjælp',
'비밀번호 확인 (필수)' => 'Bekræft adgangskode (påkrævet)',
'비밀번호 확인' => 'Bekræft adgangskode',
'본인확인 시 자동입력' => 'Udfyldes automatisk ved bekræftelse',
'닉네임' => 'Kaldenavn',
'주소 검색' => 'Find adresse',
'기본주소' => 'Adresse',
' (동의일자: {1})' => ' (Accepteret den: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Skriv kommentar',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Alle',
'그룹' => 'Gruppe',
'일시' => 'Dato',
'{1}번' => 'Nr. {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Er du sikker på, at du vil udføre handlingen på de valgte indlæg?

Slettede data kan ikke gendannes.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Konto',
'마이페이지' => 'Min side',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Administrer afstemning',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Fører lige nu',
'500 표' => '500 stemmer',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Dato',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Svarindstillinger',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Indlægsindstillinger',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Skriv 1:1-henvendelse',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Søgeresultater for {1}',
'게시판 {1}개' => '{1} fora',
'게시물 {1}개' => '{1} indlæg',
'새창' => 'Nyt vindue',

// theme/basic/tail.php
'모바일버전' => 'Mobilversion',
);
