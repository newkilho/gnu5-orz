<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (nb). 틀은 php lang/build.php nb 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Gå til innhold',
'커뮤니티' => 'Fellesskap',
'쇼핑몰' => 'Butikk',
'새글' => 'Nye innlegg',
'접속자' => 'Besøkende',
'사이트 내 전체검색' => 'Søk på nettstedet',
'검색어 필수' => 'Søkeord (påkrevd)',
'검색어를 입력해주세요' => 'Skriv inn et søkeord',
'검색' => 'Søk',
'검색어는 두글자 이상 입력하십시오.' => 'Skriv inn minst to tegn.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For raskere søk er bare ett mellomrom tillatt i søkeordet.',
'정보수정' => 'Rediger profil',
'로그아웃' => 'Logg ut',
'관리자' => 'Admin',
'회원가입' => 'Registrer deg',
'로그인' => 'Logg inn',
'메인메뉴' => 'Hovedmeny',
'전체메뉴' => 'Alle menyer',
'전체메뉴열기' => 'Åpne alle menyer',
'하위분류' => 'Undermeny',
'메뉴 준비 중입니다.' => 'Menyen er under arbeid.',
'{1}에서 설정하실 수 있습니다.' => 'Du kan sette det opp i {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Admin &gt; Innstillinger &gt; Menyinnstillinger',

// theme/basic/index.php
'최신글' => 'Siste innlegg',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'Gruppen {1} er bare tilgjengelig på PC.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Åpne meny',
'메뉴 닫기' => 'Lukk meny',
'{1}에서 설정하세요.' => 'Sett det opp i {1}.',
'1:1문의' => '1:1-henvendelse',
'사용자메뉴' => 'Brukermeny',
'기본' => 'Normal',
'크게' => 'Stor',
'더크게' => 'Større',
'열기' => 'Åpne',
'닫기' => 'Lukk',
'뒤로가기' => 'Tilbake',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Listealternativer',
'선택삭제' => 'Slett valgte',
'선택복사' => 'Kopier valgte',
'선택이동' => 'Flytt valgte',
'글쓰기' => 'Skriv',
'카테고리' => 'Kategori',
'현재 페이지 게시물' => 'Innlegg på denne siden',
'전체선택' => 'Velg alle',
'공지' => 'Kunngjøring',
'댓글' => 'Kommentarer',
'개' => ' ',
'작성자' => 'Forfatter',
'회' => ' visninger',
'추천' => 'Liker',
'비추천' => 'Liker ikke',
'게시물이 없습니다.' => 'Ingen innlegg.',
'자바스크립트를 사용하지 않는 경우' => 'Hvis JavaScript er slått av,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'slettes valgte elementer umiddelbart uten bekreftelse, så vær forsiktig.',
'전체 {1}건' => 'Totalt {1}',
'페이지' => 'Side',
'게시물 검색' => 'Søk i innlegg',
'검색대상' => 'Søk i',
'검색어를 입력하세요' => 'Skriv inn et søkeord',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Velg minst ett innlegg.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Er du sikker på at du vil slette de valgte innleggene?

Slettede data kan ikke gjenopprettes.

Hvis et valgt innlegg har svar,
må du også velge svarene for å slette det.',
'복사' => 'Kopier',
'이동' => 'Flytt',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Del',
'스크랩' => 'Lagre',
'답변' => 'Svar',
'수정' => 'Rediger',
'삭제' => 'Slett',
'목록' => 'Liste',
'페이지 정보' => 'Sideinformasjon',
'작성일' => 'Dato',
'조회' => 'Visninger',
'본문' => 'Innhold',
'이 글을 추천하셨습니다' => 'Du liker dette innlegget',
'첨부파일' => 'Vedlegg',
'{1}회 다운로드' => '{1} nedlastinger',
'관련링크' => 'Relaterte lenker',
'{1}회 연결' => '{1} klikk',
'이전글' => 'Forrige innlegg',
'다음글' => 'Neste innlegg',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å laste ned.
Hvis du er medlem, logg inn og prøv igjen.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Nedlasting av denne filen trekker {1} poeng.

Poeng trekkes bare én gang per innlegg, og trekkes ikke igjen om du laster ned senere.

Vil du laste den ned?',
'이 글을 비추천하셨습니다.' => 'Du liker ikke dette innlegget.',
'이 글을 추천하셨습니다.' => 'Du liker dette innlegget.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Kommentarliste',
'{1}님의 댓글' => 'Kommentar fra {1}',
'의 댓글' => ' (svar)',
'아이피' => 'IP',
'댓글 옵션' => 'Kommentaralternativer',
'비밀글' => 'Hemmelig',
'등록된 댓글이 없습니다.' => 'Ingen kommentarer ennå.',
'댓글쓰기' => 'Skriv en kommentar',
'글자' => ' tegn',
'댓글 내용' => 'Kommentar',
'댓글내용을 입력해주세요' => 'Skriv kommentaren din',
'이름' => 'Navn',
'필수' => 'Påkrevd',
'비밀번호' => 'Passord',
'SNS 동시등록' => 'Del også på sosiale medier',
'댓글등록' => 'Publiser kommentar',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'Innholdet inneholder et forbudt ord (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Kommentarer må ha minst {1} tegn.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Kommentarer kan ha maks {1} tegn.',
'댓글을 입력하여 주십시오.' => 'Skriv en kommentar.',
'이름이 입력되지 않았습니다.' => 'Skriv inn navnet ditt.',
'비밀번호가 입력되지 않았습니다.' => 'Skriv inn et passord.',
'이 댓글을 삭제하시겠습니까?' => 'Slette denne kommentaren?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Få svar på e-post',
'분류' => 'Kategori',
'선택하세요' => 'Velg',
'이메일' => 'E-post',
'홈페이지' => 'Nettsted',
'옵션' => 'Alternativer',
'제목' => 'Emne',
'내용' => 'Innhold',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Innlegg på dette forumet må ha mellom {1} og {2} tegn.',
'링크 #{1}' => 'Lenke {1}',
'링크를 입력하세요' => 'Skriv inn en lenke',
'파일을 첨부하세요' => 'Legg ved en fil',
'파일 #{1}' => 'Fil {1}',
'파일첨부' => 'Legg ved fil',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Vedlegg {1}: maks {2}',
'파일 설명을 입력해주세요.' => 'Skriv inn en filbeskrivelse.',
'파일 삭제' => 'Slett fil',
'자동등록방지' => 'Spambeskyttelse',
'취소' => 'Avbryt',
'작성완료' => 'Send inn',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Bruke automatiske linjeskift?

Automatiske linjeskift gjør om linjeskift i innlegget til <br>-tagger.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Emnet inneholder et forbudt ord (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Innholdet må ha minst {1} tegn.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Innholdet kan ha maks {1} tegn.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Bildeliste',
'열람중' => 'Vises nå',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Ingen er pålogget.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Søkeord',
'자주하시는질문 분류' => 'FAQ-kategorier',
'열린 분류' => 'Åpen kategori',
'검색된 게시물이 없습니다.' => 'Ingen resultater.',
'등록된 FAQ가 없습니다.' => 'Ingen FAQ ennå.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'For å legge til FAQ, bruk FAQ-administrasjonen',
'메뉴를 이용하십시오.' => 'i adminpanelet.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Forrige side',
'다음페이지' => 'Neste side',
'전체보기' => 'Vis alle',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Siste kommentarer',
'더보기' => 'Mer',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Informasjon',
'동의합니다' => 'Jeg godtar',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Send e-post til {1}',
'메일쓰기' => 'Skriv e-post',
'형식' => 'Format',
'첨부 파일 1' => 'Vedlegg 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Vedlegg kan falle bort, så kontroller at filen ble lagt ved etter at du har sendt.',
'첨부 파일 2' => 'Vedlegg 2',
'메일발송' => 'Send e-post',
'창닫기' => 'Lukk vinduet',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Store vedlegg tar lengre tid å sende.

Ikke lukk eller oppdater vinduet før e-posten er sendt.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Brukernavn',
'자동로그인' => 'Hold meg innlogget',
'회원로그인 안내' => 'Medlemsinnlogging',
'아이디/비밀번호 찾기' => 'Glemt brukernavn/passord',
'회원 가입' => 'Registrer deg',
'비회원 구매' => 'Kjøp som gjest',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Gjestebestillinger gir ikke poeng.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Jeg har lest og godtar innsamlingen av personopplysninger.',
'비회원으로 구매하기' => 'Kjøp som gjest',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Du må lese og godta innsamlingen av personopplysninger.',
'비회원 주문조회' => 'Finn gjestebestilling',
'주문번호' => 'Ordrenummer',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Skriv inn {1} fra ordre-e-posten og {2} du oppga ved bestilling.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Med automatisk innlogging trenger du ikke skrive inn brukernavn og passord neste gang.

Unngå å bruke det på offentlige datamaskiner, da personopplysningene dine kan bli eksponert.

Bruke automatisk innlogging?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Påkrevd) Tilleggserklæring om personvern',
'추가 개인정보처리방침 안내' => 'Tilleggserklæring om personvern',
'목적' => 'Formål',
'항목' => 'Opplysninger',
'보유기간' => 'Lagringstid',
'이용자 식별 및 본인여부 확인' => 'Identifisering av brukeren og identitetsbekreftelse',
'생년월일' => 'Fødselsdato',
', 휴대폰 번호(아이핀 제외)' => ', mobilnummer (unntatt i-PIN)',
', 암호화된 개인식별부호(CI)' => ', kryptert personidentifikator (CI)',
'회원 탈퇴 시까지' => 'Til medlemskapet avsluttes',
'추가 개인정보처리방침에 동의합니다.' => 'Jeg godtar tilleggserklæringen om personvern.',
'인증수단 선택하기' => 'Velg verifiseringsmetode',
'간편인증' => 'Enkel verifisering',
'휴대폰 본인확인' => 'Verifisering med mobil',
'아이핀 본인확인' => 'Verifisering med i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript må være slått på for identitetsbekreftelse.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Konfigurer verifisering med mobil i grunninnstillingene.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Du må godta tilleggserklæringen om personvern for å fortsette verifiseringen.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Skriv inn passordet ditt på nytt.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Skriv inn passordet for å fullføre avslutningen av medlemskapet.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'For å beskytte opplysningene dine bekrefter vi passordet ditt én gang til.',
'회원아이디' => 'Brukernavn',
'비밀번호(필수)' => 'Passord (påkrevd)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Totalt {2} meldinger ({1})',
'받은쪽지' => 'Innboks',
'보낸쪽지' => 'Sendt',
'쪽지쓰기' => 'Skriv melding',
'안 읽은 쪽지' => 'Ulest melding',
'자료가 없습니다.' => 'Ingen data.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Meldinger lagres i opptil {1} dager.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Send melding',
'받는 회원아이디' => 'Mottakers brukernavn',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Skill flere mottakere med komma (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Å sende en melding trekker {1} poeng per mottaker.',
'보내기' => 'Send',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Sendt',
'받은' => 'Mottatt',
'받는' => 'Til',
'쪽지 내용' => 'Melding',
'{1}시간' => '{1}:',
'이전쪽지' => 'Forrige melding',
'다음쪽지' => 'Neste melding',
'답장' => 'Svar',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Rediger innlegg',
'글 삭제' => 'Slett innlegg',
'댓글 삭제' => 'Slett kommentar',
'작성자만 글을 수정할 수 있습니다.' => 'Bare forfatteren kan redigere dette innlegget.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Hvis du er forfatteren, skriv inn passordet du brukte da du skrev innlegget, for å redigere det.',
'작성자만 글을 삭제할 수 있습니다.' => 'Bare forfatteren kan slette dette innlegget.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Hvis du er forfatteren, skriv inn passordet du brukte da du skrev innlegget, for å slette det.',
'비밀글 기능으로 보호된 글입니다.' => 'Dette er et hemmelig innlegg.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Bare forfatteren og administratorer kan se det. Hvis du er forfatteren, skriv inn passordet.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Finn med e-post',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Skriv inn e-postadressen du registrerte deg med.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Vi sender brukernavn og passord til den e-postadressen.',
'E-mail 주소' => 'E-postadresse',
'인증메일 보내기' => 'Send bekreftelses-e-post',
'본인인증으로 찾기' => 'Finn med identitetsbekreftelse',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Skriv inn et nytt passord.',
'회원 아이디 :' => 'Brukernavn:',
'새 비밀번호' => 'Nytt passord',
'새 비밀번호 확인' => 'Bekreft nytt passord',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Passordet ditt er endret. Logg inn på nytt.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Det nye passordet og bekreftelsen stemmer ikke overens.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Poengsaldo',
'y-m-d H시' => 'd.m.y H:00',
'만료' => 'Utløpt',
'소계' => 'Delsum',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Profilen til {1}',
'회원권한' => 'Medlemsnivå',
'포인트' => 'Poeng',
'회원가입일' => 'Medlem siden',
' ({1} 일)' => ' ({1} dager)',
'알 수 없음' => 'Ukjent',
'최종접속일' => 'Siste besøk',
'인사말' => 'Hilsen',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du må godta vilkårene for bruk og innsamling og bruk av personopplysninger for å registrere deg.',
'회원가입 약관에 모두 동의합니다' => 'Jeg godtar alle vilkår',
'(필수) 회원가입약관' => '(Påkrevd) Vilkår for bruk',
'회원가입약관의 내용에 동의합니다.' => 'Jeg godtar vilkårene for bruk.',
'(필수) 개인정보 수집 및 이용' => '(Påkrevd) Innsamling og bruk av personopplysninger',
'개인정보 수집 및 이용' => 'Innsamling og bruk av personopplysninger',
'아이디, 이름, 비밀번호' => 'Brukernavn, navn, passord',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', fødselsdato, mobilnummer (bare ved identitetsbekreftelse, unntatt i-PIN), kryptert personidentifikator (CI)',
'고객서비스 이용에 관한 통지,' => 'Varsler om kundeservice,',
'CS대응을 위한 이용자 식별' => 'identifisering av brukeren for kundestøtte',
'연락처 (이메일, 휴대전화번호)' => 'Kontaktinformasjon (e-post, mobilnummer)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Jeg godtar innsamling og bruk av personopplysninger.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du må godta vilkårene for bruk for å registrere deg.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du må godta innsamling og bruk av personopplysninger for å registrere deg.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Kontoinformasjon',
'아이디 (필수)' => 'Brukernavn (påkrevd)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Bare bokstaver, tall og _. Minst 3 tegn.',
'비밀번호 (필수)' => 'Passord (påkrevd)',
'비밀번호확인 (필수)' => 'Bekreft passord (påkrevd)',
'개인정보 입력' => 'Personopplysninger',
' - 본인확인 시 자동입력' => ' - fylles ut automatisk ved verifisering',
'(필수)' => '(påkrevd)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobil',
'{1} 본인확인' => 'Verifisering med {1}',
'{1} 및 {2} 완료' => '{1} og {2} fullført',
'성인인증' => 'aldersverifisering',
'{1} 완료' => '{1} fullført',
'이름 (필수)' => 'Navn (påkrevd)',
'닉네임 (필수)' => 'Kallenavn (påkrevd)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Bare koreansk, latinske bokstaver og tall, uten mellomrom (minst 2 koreanske eller 4 latinske tegn)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Hvis du endrer kallenavnet, kan du ikke endre det igjen før om {1} dager.',
'E-mail (필수)' => 'E-post (påkrevd)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Registreringen fullføres når du har bekreftet e-posten vi sender deg.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Hvis du endrer e-postadressen, må du bekrefte den på nytt.',
'전화번호' => 'Telefonnummer',
'휴대폰번호' => 'Mobilnummer',
'주소' => 'Adresse',
'우편번호' => 'Postnummer',
' (필수)' => ' (påkrevd)',
'주소검색' => 'Finn adresse',
'상세주소' => 'Adressedetaljer',
'참고항목' => 'Referanse',
'기타 개인설정' => 'Andre innstillinger',
'서명' => 'Signatur',
'자기소개' => 'Om meg',
'회원아이콘' => 'Medlemsikon',
'이미지선택' => 'Velg bilde',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Bildet kan være maks {1} px bredt og {2} px høyt.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Bare gif-, jpg- og png-filer på maks {1} byte.',
'회원이미지' => 'Medlemsbilde',
'정보공개' => 'Offentlig profil',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'La andre se informasjonen min.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Hvis du endrer dette, kan du ikke endre det igjen før om {1} dager.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Denne innstillingen kan ikke endres på {1} dager etter en endring (til {2}).',
'Y년 m월 j일' => 'd.m.Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Dette hindrer medlemmer i å sende meldinger og så skjule profilen for å unngå svar.',
'추천인아이디' => 'Brukernavn til verver',
'수신설정' => 'Varslingsinnstillinger',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Valgfritt) Innsamling og bruk av personopplysninger til markedsføring',
'자세히보기' => 'Detaljer',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Dette gjelder innsamling og bruk av personopplysninger til markedsføring. Klikk Detaljer for å lese hele teksten.',
'(동의일자: {1})' => '(Godtatt: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Formål: markedsføring og kampanjer for tjenesten',
'* 항목: 이름, 이메일' => '* Opplysninger: navn, e-post',
', 휴대폰 번호' => ', mobilnummer',
'* 보유기간: 회원 탈퇴 시까지' => '* Lagringstid: til medlemskapet avsluttes',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Du kan fortsatt bruke grunntjenesten om du takker nei, men tilpassede fordeler kan bli begrenset.',
'(선택) 광고성 정보 수신 동의' => '(Valgfritt) Samtykke til å motta reklame',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Dette samtykket gjelder mottak av reklame (e-post/SMS/KakaoTalk). Klikk Detaljer for å lese hele teksten.',
'광고성 이메일 수신 동의' => 'Motta reklame på e-post',
'광고성 SMS/카카오톡 수신 동의' => 'Motta reklame på SMS/KakaoTalk',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Vi kan sende deg reklame på e-post/SMS/KakaoTalk mellom kl. 8 og 21 ved hjelp av personopplysningene du har samtykket til.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Du kan trekke tilbake samtykket når som helst under Min side.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Valgfritt) Samtykke til utlevering av personopplysninger til tredjeparter',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Dette gjelder utlevering av personopplysninger til tredjeparter. Klikk Detaljer for å lese hele teksten.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Formål: markedsføring av produkter/tjenester, kampanjer og arrangementer (KakaoTalk o.l.)',
'* 항목: 이름, 휴대폰 번호' => '* Opplysninger: navn, mobilnummer',
'* 제공받는 자:' => '* Mottaker:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Lagringstid: så lenge tjenesten varer eller til samtykket trekkes tilbake',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Du har allerede bekreftet identiteten din med {1}.

Avbryte forrige verifisering og verifisere på nytt?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Passordet må ha minst 3 tegn.',
'비밀번호가 같지 않습니다.' => 'Passordene stemmer ikke overens.',
'이름을 입력하십시오.' => 'Skriv inn navnet ditt.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetsbekreftelse kreves for å registrere seg.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Medlemsikonet er ikke en bildefil.',
'회원이미지가 이미지 파일이 아닙니다.' => 'Medlemsbildet er ikke en bildefil.',
'본인을 추천할 수 없습니다.' => 'Du kan ikke verve deg selv.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Registreringen er fullført',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Gratulerer med medlemskapet, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'En bekreftelses-e-post er sendt til adressen du oppga.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Sjekk e-posten og fullfør bekreftelsen for å bruke nettstedet.',
'이메일 주소' => 'E-postadresse',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Hvis du skrev feil e-postadresse, kontakt administratoren av nettstedet.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Passordet ditt lagres kryptert, så ingen kan lese det.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Hvis du glemmer brukernavn eller passord, kan du finne dem igjen med e-postadressen du registrerte.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Du kan avslutte medlemskapet når som helst; opplysningene dine slettes etter en viss tid.',
'감사합니다.' => 'Takk.',
'메인으로' => 'Til forsiden',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Lagre',
'제목 확인 및 댓글 쓰기' => 'Sjekk emnet og skriv en kommentar',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Du kan legge igjen en takk eller oppmuntring når du lagrer innlegget.',
'스크랩 확인' => 'Bekreft lagring',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Avansert søk',
'전체게시물' => 'Alle innlegg',
'원글만' => 'Bare innlegg',
'코멘트만' => 'Bare kommentarer',
'회원 아이디만 검색 가능' => 'Søk bare etter brukernavn',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Medlemsinnlogging',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Min konto',
'{1}님' => '{1}',
'안 읽은' => 'Uleste',
'쪽지' => 'Meldinger',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Er du sikker på at du vil avslutte medlemskapet?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Lukk kategorier',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Kuponger',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Avstemning',
'결과보기' => 'Vis resultater',
'관리자 관리' => 'Admin',
'투표하기' => 'Stem',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Bare medlemmer på nivå {1} eller høyere kan stemme.',
'투표하실 설문항목을 선택하세요' => 'Velg et alternativ',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Bare medlemmer på nivå {1} eller høyere kan se resultatene.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Totalt {1} stemmer',
'결과' => 'Resultater',
'{1} 표' => '{1} stemmer',
'이 설문에 대한 기타의견' => 'Andre meninger om denne avstemningen',
'님의 의견' => ' (mening)',
'기타의견' => 'Andre meninger',
'의견' => 'Mening',
'의견을 입력해주세요' => 'Skriv meningen din',
'의견남기기' => 'Legg igjen en mening',
'다른 투표 결과 보기' => 'Andre avstemninger',
'해당 기타의견을 삭제하시겠습니까?' => 'Slette denne meningen?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Populære søk',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Ny henvendelse',
'답변완료' => 'Besvart',
'답변대기' => 'Venter',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Er du sikker på at du vil slette de valgte innleggene?

Slettede data kan ikke gjenopprettes.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Rediger svar',
'답변삭제' => 'Slett svar',
'추가질문' => 'Oppfølgingsspørsmål',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Publiser svar',
'파일 #1' => 'Fil 1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Vedlegg 1: maks {1}',
'파일 #2' => 'Fil 2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Vedlegg 2: maks {1}',
'답변쓰기' => 'Skriv svar',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Vi forbereder et svar på henvendelsen din.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Kontaktinformasjon',
'첨부' => 'Vedlegg',
'연관질문' => 'Relaterte spørsmål',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Motta svar',
'답변등록 SMS알림 수신' => 'Få SMS når det er besvart',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Skriv inn mobilnummeret med bare sifre og bindestrek (-).',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Søkeresultater',
'게시판' => 'Forum',
'{1}개' => '{1}',
'게시물' => 'Innlegg',
'페이지 열람 중' => 'sider',
'검색조건' => 'Søkealternativer',
'제목+내용' => 'Emne+Innhold',
'전체게시판' => 'Alle forum',
'검색된 자료가 하나도 없습니다.' => 'Ingen resultater.',
'게시판 내 결과' => 'Resultater i forumet',
'{1} 결과 더보기' => 'Flere resultater i {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Besøksstatistikk',
'오늘' => 'I dag',
'어제' => 'I går',
'최대' => 'Maks',
'visit|전체' => 'Totalt',
'상세보기' => 'Detaljer',

// theme/basic/mobile/tail.php
'회사소개' => 'Om oss',
'개인정보처리방침' => 'Personvernerklæring',
'서비스이용약관' => 'Vilkår for bruk',
'소유하신 도메인.' => 'Ditt domene.',
'사이트 정보' => 'Om nettstedet',
'회사명 : 회사명 / 대표 : 대표자명' => 'Firma: Firmanavn / Daglig leder: Navn på daglig leder',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adresse: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'Organisasjonsnummer: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tlf.: 02-123-4567  Faks: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Registreringsnr. for netthandel: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Personvernansvarlig: Navn på ansvarlig',
'상단으로' => 'Til toppen',
'PC 버전으로 보기' => 'PC-versjon',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Totalt {1}',
'게시판 검색' => 'Søk i forumet',
'현재 페이지 게시물  전체선택' => 'Velg alle innlegg på denne siden',
'번호' => 'Nr.',
'글쓴이' => 'Forfatter',
'날짜' => 'Dato',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} nedlastinger | DATO: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}:',
'댓글의' => '(svar)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Velg en kategori',
'임시 저장된 글 ({1})' => 'Utkast ({1})',
'임시 저장된 글 목록' => 'Utkastliste',
'링크  #{1}' => 'Lenke {1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Søk i FAQ',
'FAQ 수정' => 'Rediger FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Populære innlegg',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Ingen bilder.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Medlem',
'ID/PW 찾기' => 'Glemt ID/passord',
'주문서번호' => 'Ordrenummer',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Bare forfatteren og administratorer kan se det.',
'본인이라면 비밀번호를 입력하세요.' => 'Hvis du er forfatteren, skriv inn passordet.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Hjelp',
'비밀번호 확인 (필수)' => 'Bekreft passord (påkrevd)',
'비밀번호 확인' => 'Bekreft passord',
'본인확인 시 자동입력' => 'Fylles ut automatisk ved verifisering',
'닉네임' => 'Kallenavn',
'주소 검색' => 'Finn adresse',
'기본주소' => 'Adresse',
' (동의일자: {1})' => ' (Godtatt: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Skriv kommentar',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Alle',
'그룹' => 'Gruppe',
'일시' => 'Dato',
'{1}번' => 'Nr. {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Er du sikker på at du vil fortsette med de valgte innleggene?

Slettede data kan ikke gjenopprettes.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Konto',
'마이페이지' => 'Min side',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Administrer avstemning',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Leder nå',
'500 표' => '500 stemmer',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Dato',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Svaralternativer',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Innleggsalternativer',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Skriv 1:1-henvendelse',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Søkeresultater for {1}',
'게시판 {1}개' => '{1} forum',
'게시물 {1}개' => '{1} innlegg',
'새창' => 'Nytt vindu',

// theme/basic/tail.php
'모바일버전' => 'Mobilversjon',
);
