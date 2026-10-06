<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (da). 틀은 php lang/build.php da 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Installer venligst butikken før brug.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Der er for mange forespørgsler. Prøv igen om lidt.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Henviserens brugernavn må kun indeholde bogstaver, tal og _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Den angivne henviser findes ikke.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Brug venligst den korrekte fremgangsmåde.',

// bbs/alert.php
'오류안내 페이지' => 'Fejlside',
'결과안내 페이지' => 'Resultatside',
'다음 항목에 오류가 있습니다.' => 'Der er fejl i følgende felter.',
'다음 내용을 확인해 주세요.' => 'Kontrollér venligst følgende.',
'돌아가기' => 'Gå tilbage',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Luk det nye vindue, og prøv igen.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Luk det nye vindue, før du fortsætter.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Forummet findes ikke.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Værdien bo_table blev ikke sendt.\\n\\nSend den på formen board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Indlægget findes ikke.\\n\\nDet er muligvis blevet slettet eller flyttet.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gæster har ikke adgang til dette forum.\\n\\nEr du medlem, så log ind og prøv igen.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har ikke adgang til at læse indlæg.\\n\\nKontakt administratoren, hvis du har spørgsmål.',
'글을 읽을 권한이 없습니다.' => 'Du har ikke tilladelse til at læse indlægget.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at læse indlægget.\\n\\nEr du medlem, så log ind og prøv igen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Kun medlemmer med bekræftet identitet kan læse indlæg i dette forum.\\n\\nEr du medlem, så log ind og prøv igen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Kun medlemmer med bekræftet identitet kan læse indlæg i dette forum.\\n\\nBekræft din identitet under Rediger profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Kun medlemmer, der er bekræftet som voksne via identitetsbekræftelse, kan læse indlæg i dette forum.\\n\\nEr du voksen og kan ikke læse indlæg, så bekræft din identitet igen under Rediger profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Du har ingen eller for få point ({1}) til at læse indlægget ({2}).\\n\\nOptjen flere point, og prøv igen.',
'목록을 볼 권한이 없습니다.' => 'Du har ikke tilladelse til at se listen.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at se listen.\\n\\nEr du medlem, så log ind og prøv igen.',
'{1} {2} 페이지' => '{1} side {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => '{1}: vælg mindst ét element.',
'올바른 방법으로 이용해 주세요.' => 'Brug venligst den korrekte fremgangsmåde.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Kontrollér venligst nedenstående.',
'확인' => 'OK',
'취소' => 'Annuller',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontrollér først Forumadministration->Indholdsadministration i administratortilstand.',
'등록된 내용이 없습니다.' => 'Der er intet indhold.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} findes ikke.</p>',

// bbs/current_connect.php
'현재접속자' => 'Online brugere',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Kan ikke slettes på grund af en token-fejl.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, da forummet ikke tilhører en gruppe, du administrerer.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Du kan ikke slette indlæg skrevet af medlemmer med højere niveau end dit.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, da du ikke administrerer dette forum.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, da det ikke er dit indlæg.',
'로그인 후 삭제하세요.' => 'Log ind for at slette.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Adgangskoden er forkert, så der kan ikke slettes.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Indlægget kan ikke slettes, da der findes svar til det.\\n\\nSlet først svarene.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Indlægget kan ikke slettes, da der findes kommentarer til det.\\n\\nIndlæg med {1} eller flere kommentarer kan ikke slettes.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Du har ikke adgang.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Kommentaren findes ikke, eller det er ikke en kommentar.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren kan ikke slettes, da den er skrevet af et medlem med højere niveau end gruppeadministratoren.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan ikke slette kommentaren, da forummet ikke tilhører en gruppe, du administrerer.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren kan ikke slettes, da den er skrevet af et medlem med højere niveau end forumadministratoren.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan ikke slette kommentaren, da du ikke administrerer dette forum.',
'비밀번호가 틀립니다.' => 'Adgangskoden er forkert.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Kommentaren kan ikke slettes, da der findes svar til den.',

// bbs/download.php
'잘못된 접근입니다.' => 'Ugyldig adgang.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at downloade.\\nEr du medlem, så log ind og prøv igen.',
'파일 정보가 존재하지 않습니다.' => 'Filoplysningerne findes ikke.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Tokenet er udløbet eller ugyldigt.\\nGenindlæs siden, og prøv igen.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Når du downloader filen {1}, trækkes der point ({2} point).\\nPoint trækkes kun én gang pr. indlæg, også hvis du downloader igen senere.\\nVil du stadig downloade?',
'다운로드 권한이 없습니다.' => 'Du har ikke tilladelse til at downloade.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nEr du medlem, så log ind og prøv igen.',
'파일이 존재하지 않습니다.' => 'Filen findes ikke.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Du har ingen eller for få point ({1}) til at downloade ({2}).\\n\\nOptjen flere point, og prøv igen.',
'다운로드 &gt; {1}' => 'Download &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Medlemmet findes ikke.',
'탈퇴 또는 차단된 회원입니다.' => 'Medlemmet har opsagt sit medlemskab eller er blokeret.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Anmodningen om e-mailbekræftelse er allerede behandlet eller er ugyldig.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Din e-mail er bekræftet.\\n\\nDu kan nu logge ind med brugernavnet {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Bekræftelseslinket er udløbet. Anmod om en ny bekræftelsesmail.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Oplysningerne i anmodningen om e-mailbekræftelse er ugyldige.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Der blev ikke modtaget gyldige værdier.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Du er nu frameldt informationsmails.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontrollér først Forumadministration->FAQ-administration i administratortilstand.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => '"Brug e-mailafsendelse" skal være slået til i indstillingerne for at sende e-mail.\\n\\nKontakt administratoren.',
'회원만 이용하실 수 있습니다.' => 'Kun for medlemmer.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke sende e-mail til andre, medmindre din profil er offentlig.\\n\\nDu kan ændre dette under Rediger profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Medlemsoplysningerne findes ikke.\\n\\nMedlemmet kan have opsagt sit medlemskab.',
'정보공개를 하지 않았습니다.' => 'Medlemmet har ikke en offentlig profil.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Du kan kun sende et begrænset antal e-mails pr. session.\\n\\nLog ind eller besøg siden igen for at sende flere.',
'메일 쓰기' => 'Skriv e-mail',
'이메일이 올바르지 않습니다.' => 'E-mailadressen er ugyldig.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Du har overskredet det tilladte antal afsendelser via formularen.',
'자동등록방지 숫자가 틀렸습니다.' => 'Spambeskyttelseskoden er forkert.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'E-mailen kan ikke sendes, da e-mailadressen har et ugyldigt format.',
'허용되지 않는 파일 확장자입니다.' => 'Filtypen er ikke tilladt.',
'메일보내기' => 'Send e-mail',
'메일 발송중' => 'Sender e-mail',
'메일을 정상적으로 발송하였습니다.' => 'E-mailen er sendt.',

// bbs/good.php
'회원만 가능합니다.' => 'Kun for medlemmer.',
'값이 제대로 넘어오지 않았습니다.' => 'Der blev ikke modtaget korrekte værdier.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Du kan kun synes godt om eller ikke synes om fra selve indlægget.',
'존재하는 게시판이 아닙니다.' => 'Forummet findes ikke.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Du kan ikke synes godt om eller ikke synes om dit eget indlæg.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Dette forum bruger ikke funktionen Synes godt om.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Dette forum bruger ikke funktionen Synes ikke om.',
'추천' => 'Synes godt om',
'비추천' => 'Synes ikke om',
'이미 {1} 하신 글 입니다.' => 'Du har allerede valgt {1} for dette indlæg.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Du har allerede reageret på dette indlæg.',
'이 글을 {1} 하셨습니다.' => 'Du har valgt {1} for dette indlæg.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Gruppen {1} er kun tilgængelig på mobil.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Der er intet link.',

// bbs/list.php
'전체' => 'Alle',
'열린 분류' => 'Åben kategori',
'이전검색' => 'Forrige søgning',
'다음검색' => 'Næste søgning',

// bbs/login.php
'로그인' => 'Log ind',

// bbs/login_check.php
'로그인 검사' => 'Login-kontrol',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Brugernavn og adgangskode må ikke være tomme.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Brugernavnet findes ikke, eller adgangskoden er forkert.\\nAdgangskoden skelner mellem store og små bogstaver.',
'\\1년 \\2월 \\3일' => '\\3.\\2.\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Dit brugernavn er blokeret.\\nBlokeret den: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Du har ikke adgang, da medlemskabet er opsagt.\\nOpsagt den: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Du skal bekræfte din e-mail via {1} for at logge ind. Klik på Annuller, hvis du vil skifte til en anden e-mailadresse og bekræfte den.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Hvis data-mappen ikke er skrivbar, eller der ikke er mere lagerplads,\\nkan login mislykkes. Kontrollér lagerplads og skriverettigheder.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'URL\'en indeholder en ugyldig værdi.',
'url에 도메인을 지정할 수 없습니다.' => 'Der kan ikke angives et domæne i URL\'en.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Identitetsbekræftelse er ikke tilgængelig. Kontakt administratoren.',
'본인인증을 다시 해주세요.' => 'Bekræft venligst din identitet igen.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Log ind for at fortsætte.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Værdien w blev ikke modtaget korrekt.',
'잘못된 접근입니다' => 'Ugyldig adgang',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Brugernavn mangler. Brug venligst den korrekte fremgangsmåde.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Der findes allerede en konto med de angivne identitetsoplysninger.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'De bekræftede identitetsoplysninger stemmer ikke overens med de indtastede medlemsoplysninger. Prøv igen.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Kun indloggede medlemmer har adgang.',
'회원 비밀번호 확인' => 'Bekræft adgangskode',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Kun medlemmer har adgang.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Superadministratoren kan ikke opsige sit medlemskab.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Medlemskabet kunne ikke opsiges. Kontrollér medlemsstatus.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} har opsagt sit medlemskab den {2}.',
'Y년 m월 d일' => 'd.m.Y',

// bbs/memo.php
'내 쪽지함' => 'Mine beskeder',
'kind 변수 값이 올바르지 않습니다.' => 'Værdien af kind er ugyldig.',
'받은' => 'Modtaget',
'보낸' => 'Sendt',
'정보없음' => 'Ingen oplysninger',
'아직 읽지 않음' => 'Ikke læst endnu',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke sende beskeder til andre, medmindre din profil er offentlig. Du kan ændre dette under Rediger profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Medlemsoplysningerne findes ikke.\\n\\nMedlemmet kan have opsagt sit medlemskab.',
'쪽지 보내기' => 'Send besked',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Brugernavnet \'{1}\' findes ikke (eller har ikke en offentlig profil) eller tilhører et opsagt eller blokeret medlem.\\nBeskeden blev ikke sendt.',
'해당 회원이 존재하지 않습니다.' => 'Medlemmet findes ikke.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Du har for få point ({1} point) til at sende beskeden.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Beskeden er sendt til {1}.',
'회원아이디 오류 같습니다.' => 'Brugernavnet ser ud til at være forkert.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Send værdien {1}.',
'{1} 쪽지 보기' => 'Vis besked – {1}',

// bbs/move.php
'이동' => 'Flyt',
'복사' => 'Kopiér',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Værdien sw blev ikke modtaget korrekt.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Kun forumadministratorer og derover har adgang.',
'게시물 {1}' => 'Indlæg: {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => '{1}: vælg mindst ét forum.',
'현재 페이지 게시판 전체' => 'Alle fora på denne side',
'게시판' => 'Fora',
'현재' => 'Nuværende',
'창닫기' => 'Luk vindue',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => '{1}: vælg mindst ét forum til indlægget.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1}: indlægget er overført til de valgte fora.',

// bbs/new.php
'새글' => 'Nye indlæg',
'그룹' => 'Gruppe',
'전체그룹' => 'Alle grupper',
'[코] ' => '[Kommentar] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Kun superadministratoren har adgang.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Pop op-meddelelse',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Vis ikke igen i {1} timer.',
'닫기' => 'Luk',
'팝업레이어 알림이 없습니다.' => 'Der er ingen pop op-meddelelser.',

// bbs/password.php
'비밀번호 입력' => 'Indtast adgangskode',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Du er allerede logget ind.',
'회원정보 찾기' => 'Find kontooplysninger',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Fejl i e-mailadressen.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Der er sendt en e-mail til {1}, hvor du kan bekræfte dit brugernavn og din adgangskode.\\n\\nTjek din e-mail.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Dine kontooplysninger',
'회원정보 찾기 안내' => 'Find kontooplysninger',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) anmodede om kontooplysninger den {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Da selv administratorer ikke kan se din adgangskode, får du i stedet tilsendt en ny adgangskode.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Se den nye adgangskode nedenfor, og <span style="color:#ff3061">klik på linket <strong>Skift adgangskode</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Når der vises en besked om, at adgangskoden er ændret, kan du logge ind på hjemmesiden med dit brugernavn og den nye adgangskode.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Når du er logget ind, bør du skifte til en ny adgangskode under Rediger profil.',
'회원아이디' => 'Brugernavn',
'변경될 비밀번호' => 'Ny adgangskode',
'비밀번호 변경' => 'Skift adgangskode',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Adgangskoden er ændret.\\n\\nLog ind med dit brugernavn og den nye adgangskode.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Brugernavn/adgangskode kan ikke findes via identitetsbekræftelse. Kontakt administratoren.',
'패스워드 변경' => 'Skift adgangskode',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Adgangskoden blev ikke modtaget.',
'비밀번호가 일치하지 않습니다.' => 'Adgangskoderne stemmer ikke overens.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Kun medlemmer kan se dette.',
'{1} 님의 포인트 내역' => 'Pointhistorik for {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Værdien po_id blev ikke modtaget korrekt.',
'기타의견이 비활성화되어 있습니다.' => 'Andre kommentarer er deaktiveret.',
'권한이 없습니다.' => 'Du har ikke tilladelse.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Afstemningen findes ikke.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Kun medlemmer på niveau {1} eller højere kan se resultaterne.',
'설문조사 결과' => 'Afstemningsresultat',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Kun medlemmer på niveau {1} eller højere kan stemme.',
'항목을 선택하세요.' => 'Vælg en mulighed.',
'{1}에 이미 참여하셨습니다.' => 'Du har allerede deltaget i {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke se andres oplysninger, medmindre din profil er offentlig.\\n\\nDu kan ændre dette under Rediger profil.',
'{1}님의 자기소개' => 'Om {1}',
'소개 내용이 없습니다.' => 'Der er ingen præsentation.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Er du medlem, så log ind for at fortsætte.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Vælg mindst ét indlæg, der skal slettes.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Er du medlem, så log ind og prøv igen.',
'열린 분류 ' => 'Åben kategori ',
'{1}이 존재하지 않습니다.' => '{1} findes ikke.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Indlægget findes ikke.\\nDet er slettet eller ikke dit eget.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'En henvendelse, der allerede er besvaret, kan ikke redigeres.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Du har ikke tilladelse til at redigere indlægget.\\n\\nBrug venligst den korrekte fremgangsmåde.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Angiv kategorier i indstillingerne for 1:1-henvendelser.',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Angiv en gyldig kategori.',
'이메일을 입력하세요.' => 'Indtast din e-mailadresse.',
'<strong>제목</strong>을 입력하세요.' => 'Indtast et <strong>emne</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Indtast <strong>indhold</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Indholdet indeholder mange ugyldige koder.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Filen eller indholdet overstiger serverens grænse.\\npost_max_size={1} , upload_max_filesize={2}\\nKontakt forumadministratoren eller serveradministratoren.',
'답변은 관리자만 등록할 수 있습니다.' => 'Kun administratorer kan svare.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Der kan ikke svares, da henvendelsen ikke findes.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Et svar kan ikke besvares igen.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Upload højst 2 vedhæftede filer.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Filen "{1}" kan ikke uploades, da den er større end serverens grænse ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Filen "{1}" blev ikke uploadet korrekt.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Filen "{1}" ({2} byte) uploades ikke, da den er større end forummets grænse ({3} byte).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Filen "{1}" kan ikke gemmes sikkert. Kontrollér serverens kilde til tilfældige tal og lagringsstien.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} – meddelelse om svar',

// bbs/register.php
'회원가입약관' => 'Brugsbetingelser',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Skift e-mailadresse til bekræftelse',
'이미 메일인증 하신 회원입니다.' => 'Din e-mail er allerede bekræftet.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Hvis du ikke har modtaget bekræftelsesmailen, kan du ændre e-mailadressen i dine medlemsoplysninger.',
'사이트 이용정보 입력' => 'Kontooplysninger',
'필수' => 'Påkrævet',
'자동등록방지' => 'Spambeskyttelse',
'인증메일변경' => 'Skift bekræftelsesmail',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'E-mailadressen {1} er allerede i brug.\\n\\nIndtast en anden e-mailadresse.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Bekræft din e-mail',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Bekræftelsesmailen er sendt igen til {1}.\\n\\nTjek om lidt din e-mail på {1}.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du skal acceptere brugsbetingelserne for at oprette en konto.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du skal acceptere indsamling og brug af personoplysninger for at oprette en konto.',
'회원 가입' => 'Opret konto',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Administratorens oplysninger skal redigeres i administrationspanelet.',
'로그인 후 이용하여 주십시오.' => 'Log ind for at fortsætte.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Det indloggede medlem stemmer ikke overens med de modtagne oplysninger.',
'비밀번호를 입력해 주세요.' => 'Indtast din adgangskode.',
'회원 정보 수정' => 'Rediger medlemsoplysninger',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Denne handling er ikke tilgængelig i demoen.',
'이름을 올바르게 입력해 주십시오.' => 'Indtast et gyldigt navn.',
'닉네임을 올바르게 입력해 주십시오.' => 'Indtast et gyldigt kaldenavn.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetsbekræftelse er påkrævet for at oprette en konto.',
'추천인이 존재하지 않습니다.' => 'Henviseren findes ikke.',
'본인을 추천할 수 없습니다.' => 'Du kan ikke henvise dig selv.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Tillykke med din nye konto',
'로그인 되어 있지 않습니다.' => 'Du er ikke logget ind.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Oplysningerne kan ikke ændres, da de ikke stemmer overens med den indloggede konto.\\nHvis du bruger en uautoriseret fremgangsmåde, så stop straks.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Upload et medlemsikon på højst {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} er ikke en billedfil.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Upload et medlemsbillede på højst {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} er ikke en gif/jpg-fil.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Dine oplysninger er opdateret.\\n\\nDa din e-mailadresse er ændret, skal du bekræfte den igen.',
'회원정보수정' => 'Rediger profil',
'회원 정보가 수정 되었습니다.' => 'Dine oplysninger er opdateret.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Velkomstmail',
'회원가입을 축하합니다.' => 'Tillykke med din nye konto.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Hjertelig tillykke med din nye konto, <b>{1}</b>.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Vi vil gøre vores bedste for at leve op til din tillid.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klik på <strong>Bekræft e-mail</strong> nedenfor for at fuldføre oprettelsen.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Linket er gyldigt i {1} minutter efter afsendelse.',
'감사합니다.' => 'Tak.',
'메일인증' => 'Bekræft e-mail',
'사이트바로가기' => 'Gå til siden',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Bekræftelsesmail',
'회원 인증 메일입니다.' => 'Dette er en bekræftelsesmail til medlemmer.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'E-mailadressen for <b>{1}</b> er ændret.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klik på adressen nedenfor for at fuldføre bekræftelsen.',
'{1} 로그인' => '{1} login',

// bbs/register_result.php
'회원가입 완료' => 'Kontoen er oprettet',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS understøttes kun for fora, som gæster kan læse.',
'RSS 보기가 금지되어 있습니다.' => 'RSS er deaktiveret.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Gemte indlæg for {1}',
'[게시판 없음]' => '[Intet forum]',
'[글 없음]' => '[Intet indlæg]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Kun medlemmer har adgang.',
'로그인하기' => 'Log ind',
'올바른 방법으로 사용해 주십시오.' => 'Brug venligst den korrekte fremgangsmåde.',
'코멘트는 스크랩 할 수 없습니다.' => 'Kommentarer kan ikke gemmes.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Du har allerede gemt dette indlæg.

Vil du se dine gemte indlæg nu?',
'이미 스크랩하신 글 입니다.' => 'Du har allerede gemt dette indlæg.',
'스크랩 확인하기' => 'Se gemte indlæg',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Indlægget, du vil gemme, findes ikke.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Du kan ikke oprette indlæg så hurtigt efter hinanden.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Indlægget er gemt.

Vil du se dine gemte indlæg nu?',
'이 글을 스크랩 하였습니다.' => 'Indlægget er gemt.',

// bbs/search.php
'전체검색 결과' => 'Søgeresultater',
'[비밀글 입니다.]' => '[Privat indlæg]',
'게시판 그룹선택' => 'Vælg forumgruppe',
'전체 분류' => 'Alle kategorier',

// bbs/view_comment.php
'비밀글 입니다.' => 'Dette er et privat indlæg.',
'댓글내용 확인' => 'Vis kommentar',

// bbs/view_image.php
'이미지 크게보기' => 'Vis større billede',
'이미지 확장자가 아닙니다.' => 'Ikke en billedfiltype.',
'이미지 파일이 아닙니다.' => 'Ikke en billedfil.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Værdien bo_table blev ikke sendt.\\nSend den på formen write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Indlægget findes ikke.\\nDet er muligvis blevet slettet eller flyttet.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => '\\$wr_id bruges ikke ved oprettelse af indlæg.',
'글을 쓸 권한이 없습니다.' => 'Du har ikke tilladelse til at skrive indlæg.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at skrive indlæg.\\nEr du medlem, så log ind og prøv igen.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Du har ingen eller for få point ({1}) til at skrive indlæg ({2}).\\n\\nOptjen flere point, og prøv igen.',
'글쓰기' => 'Skriv',
'글을 수정할 권한이 없습니다.' => 'Du har ikke tilladelse til at redigere indlægget.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at redigere indlægget.\\n\\nEr du medlem, så log ind og prøv igen.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Indlægget kan ikke redigeres, da der findes svar til det.\\n\\nIndlæg med svar kan ikke redigeres.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Indlægget kan ikke redigeres, da der findes kommentarer til det.\\n\\nIndlæg med {1} eller flere kommentarer kan ikke redigeres.',
'글수정' => 'Rediger indlæg',
'글을 답변할 권한이 없습니다.' => 'Du har ikke tilladelse til at svare på indlægget.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilladelse til at skrive svar.\\n\\nEr du medlem, så log ind og prøv igen.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Du har ingen eller for få point ({1}) til at svare ({2}).\\n\\nOptjen flere point, og prøv igen.',
'공지에는 답변 할 수 없습니다.' => 'Meddelelser kan ikke besvares.',
'정상적인 접근이 아닙니다.' => 'Ugyldig adgang.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Kun forfatteren eller en administrator kan svare på private indlæg.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Private indlæg fra gæster kan ikke besvares.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Du kan ikke svare mere.\\n\\nSvar er kun muligt op til 10 niveauer.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Du kan ikke svare mere.\\n\\nDer kan højst være 26 svar.',
'글답변' => 'Svar på indlæg',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke adgang.\\n\\nEr du medlem, så log ind og prøv igen.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har ikke adgang til at skrive indlæg.\\n\\nKontakt administratoren, hvis du har spørgsmål.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Kun medlemmer med bekræftet identitet kan skrive i dette forum.\\n\\nEr du medlem, så log ind og prøv igen.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Kun medlemmer med bekræftet identitet kan skrive i dette forum.\\n\\nBekræft din identitet under Rediger profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Navn skal udfyldes.',
'댓글을 쓸 권한이 없습니다.' => 'Du har ikke tilladelse til at skrive kommentarer.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Indlægget findes ikke.\\nDet kan være slettet eller flyttet.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Du har ingen eller for få point ({1}) til at skrive kommentarer ({2}).\\n\\nOptjen flere point, og skriv kommentaren igen.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Kommentaren, du vil svare på, findes ikke.\\n\\nDen kan være slettet, mens du skrev.',
'댓글을 등록할 수 없습니다.' => 'Kommentaren kan ikke gemmes.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Du kan ikke svare mere.\\n\\nSvar er kun muligt op til 5 niveauer.',
'원글
{1}


댓글
{2}' => 'Oprindeligt indlæg
{1}


Kommentar
{2}',
'입력' => 'Nyt',
'수정' => 'Rediger',
'답변' => 'Svar',
'댓글 ' => 'Kommentar ',
'댓글 수정' => 'Rediger kommentar',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nyt indlæg i forummet {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren kan ikke redigeres, da den er skrevet af et medlem med højere niveau end gruppeadministratoren.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan ikke redigere kommentaren, da forummet ikke tilhører en gruppe, du administrerer.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren kan ikke redigeres, da den er skrevet af et medlem med højere niveau end forumadministratoren.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan ikke redigere kommentaren, da du ikke administrerer dette forum.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, da det ikke er dit indlæg.',
'댓글을 수정할 권한이 없습니다.' => 'Du har ikke tilladelse til at redigere kommentaren.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Kommentaren kan ikke redigeres, da der findes svar til den.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Forumoplysningerne er ugyldige.',

// bbs/write_update.php
'게시글 저장' => 'Gem indlæg',
'<strong>분류</strong>를 선택하세요.' => 'Vælg en <strong>kategori</strong>.',
'분류를 올바르게 입력하세요.' => 'Indtast en gyldig kategori.',
'올바른 방법으로 수정하여 주십시오.' => 'Rediger venligst på korrekt vis.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, da forummet ikke tilhører en gruppe, du administrerer.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Du kan ikke redigere indlæg skrevet af medlemmer med højere niveau end dit.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, da du ikke administrerer dette forum.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Bekræft adgangskoden, og rediger igen.',
'로그인 후 수정하세요.' => 'Log ind for at redigere.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Forummet tillader ikke private indlæg.',
'관리자만 공지할 수 있습니다.' => 'Kun administratorer kan oprette meddelelser.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Du kan ikke svare mere.\\nSvar er kun muligt op til 10 niveauer.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Du kan ikke svare mere.\\nDer kan højst være 26 svar.',
'제목을 입력하여 주십시오.' => 'Indtast et emne.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Slet eksisterende filer, og upload højst {1} vedhæftede filer.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Upload højst {1} vedhæftede filer.',
'코멘트' => 'Kommentar',
'코멘트 수정' => 'Rediger kommentar',

// bbs/write_update_mail.php
'{1} 메일' => '{1}-mail',
'작성자 {1}' => 'Forfatter: {1}',
'사이트에서 게시물 확인하기' => 'Se indlægget på siden',

// common.php
'접근이 가능하지 않습니다.' => 'Adgang er ikke mulig.',
'접근 불가합니다.' => 'Ingen adgang.',

// head.php
'본문 바로가기' => 'Gå til indhold',
'커뮤니티' => 'Fællesskab',
'쇼핑몰' => 'Butik',
'접속자' => 'Besøgende',
'사이트 내 전체검색' => 'Søg på siden',
'검색어 필수' => 'Søgeord (påkrævet)',
'검색어를 입력해주세요' => 'Indtast et søgeord',
'검색' => 'Søg',
'검색어는 두글자 이상 입력하십시오.' => 'Indtast mindst to tegn.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For hurtigere søgning må søgeordet kun indeholde ét mellemrum.',
'정보수정' => 'Rediger profil',
'로그아웃' => 'Log ud',
'회원가입' => 'Opret konto',
'메인메뉴' => 'Hovedmenu',
'전체메뉴' => 'Alle menuer',
'전체메뉴열기' => 'Åbn alle menuer',
'하위분류' => 'Undermenu',
'메뉴 준비 중입니다.' => 'Menuen er under forberedelse.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} er logget ind ',

// lib/common.lib.php
'처음' => 'Første',
'이전' => 'Forrige',
'페이지' => 'Side',
'열린' => 'Aktuel',
'다음' => 'Næste',
'맨끝' => 'Sidste',
'$url1 과 $url2 를 지정해 주세요.' => 'Angiv $url1 og $url2.',
'답변글' => 'Svar',
'{1} 자기소개' => 'Om {1}',
'{1} 이름으로 검색' => 'Søg efter navnet {1}',
'쪽지보내기' => 'Send besked',
'홈페이지' => 'Websted',
'자기소개' => 'Om mig',
'아이디로 검색' => 'Søg efter brugernavn',
'이름으로 검색' => 'Søg efter navn',
'전체게시물' => 'Alle indlæg',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Der er fejl i oplysningerne om MySQL Host, User, Password eller DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL er ikke installeret, så funktionen mysql_connect kan ikke bruges.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Der er fejl i oplysningerne om MySQL Host, User eller Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Der opstod en fejl under databasebehandlingen.',
'yoil|일' => 'søn',
'yoil|월' => 'man',
'yoil|화' => 'tir',
'yoil|수' => 'ons',
'yoil|목' => 'tor',
'yoil|금' => 'fre',
'yoil|토' => 'lør',
'요일' => 'dag',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Tokenet er udløbet. Genindlæs siden.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Sidens adresse til e-mailbekræftelse er ikke angivet. Kontakt sidens administrator.',
'올바른 경로로 접근해 주십시오.' => 'Brug venligst den korrekte adgangsvej.',
'PC 전용 게시판입니다.' => 'Dette forum er kun til pc.',
'모바일 전용 게시판입니다.' => 'Dette forum er kun til mobil.',
'간편인증' => 'Enkel bekræftelse',
'휴대폰' => 'Mobil',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Du har brugt identitetsbekræftelse {2} gange i dag ({1}) og kan ikke bruge den mere.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Kan ikke bruges, da funktionen exec ikke kan køres.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Antallet af variabler sendt fra formularen overstiger max_input_vars.\\nNogle værdier kan gå tabt, før de gemmes i databasen.\\n\\nLøs problemet ved at ændre max_input_vars i serverens php.ini.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Der kan ikke angives et andet domæne i URL\'en.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Adgang nægtet, da URL\'en indeholder brugeroplysninger.',
'bot 으로 판단되어 중지합니다.' => 'Stoppet, da forespørgslen blev vurderet som en bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Indtast indhold.',

// lib/get_data.lib.php
'제목' => 'Emne',
'내용' => 'Indhold',
'제목+내용' => 'Emne+indhold',
'글쓴이' => 'Forfatter',
'글쓴이(코)' => 'Forfatter (kommentar)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Indtast et brugernavn.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Brugernavnet må kun indeholde bogstaver, tal og _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Brugernavnet skal være på mindst 3 tegn.',
'이미 사용중인 회원아이디 입니다.' => 'Brugernavnet er allerede i brug.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Brugernavnet er et reserveret ord og kan ikke bruges.',
'닉네임을 입력해 주십시오.' => 'Indtast et kaldenavn.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Kaldenavnet må kun indeholde koreanske bogstaver, latinske bogstaver og tal uden mellemrum.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Kaldenavnet skal være på mindst 2 koreanske eller 4 latinske tegn.',
'이미 존재하는 닉네임입니다.' => 'Kaldenavnet findes allerede.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Kaldenavnet er et reserveret ord og kan ikke bruges.',
'E-mail 주소를 입력해 주십시오.' => 'Indtast en e-mailadresse.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'E-mailadressen har et ugyldigt format.',
'{1} 메일은 사용할 수 없습니다.' => 'E-mailadressen {1} kan ikke bruges.',
'이미 사용중인 E-mail 주소입니다.' => 'E-mailadressen er allerede i brug.',
'이름을 입력해 주십시오.' => 'Indtast et navn.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Navnet må kun indeholde koreanske bogstaver uden mellemrum.',
'휴대폰번호를 입력해 주십시오.' => 'Indtast et mobilnummer.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Indtast et gyldigt mobilnummer.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Mobilnummeret er allerede i brug. {1}',

// plugin/editor/cheditor5/editor.lib.php
'웹에디터 시작' => 'Webeditor start',
'웹 에디터 끝' => 'Webeditor slut',

// plugin/editor/smarteditor2/editor.lib.php
'단축키 일람' => 'Tastaturgenveje',
'단축키 일람 닫기' => 'Luk tastaturgenveje',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Ugyldig anmodning.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Ugyldig bekræftelse. Brug venligst den korrekte fremgangsmåde.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Der findes ingen konto med de bekræftede oplysninger.',
'코드 : {1}  {2}' => 'Kode: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultat af KG Inicis enkel bekræftelse',
'본인인증이 완료되었습니다.' => 'Identitetsbekræftelsen er gennemført.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'KG Inicis enkel bekræftelse',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Kontoen er allerede identitetsbekræftet i en anden persons navn.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Der findes allerede en konto med de angivne identitetsoplysninger.\\nBrugernavn: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Hør tallene',
'새로고침' => 'Genindlæs',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Indtast spambeskyttelsestallene i rækkefølge.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultat af mobilbekræftelse',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risiko for manipulation af dn_hash (kontrollér, om filen {1} har kørselsrettigheder.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Du har annulleret mobilbekræftelsen.',
'up_hash 변조 위험있음' => 'Risiko for manipulation af up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Der er ingen sitekode til KCP\'s mobilbekræftelse. Indtast KCP-sitekoden under Administrator > Grundlæggende indstillinger.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Der findes allerede en konto med de angivne identitetsoplysninger.\\nBrugernavn: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Bekræftet med dit eget mobilnummer.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Der er intet svar fra identitetsbekræftelsen. Start forfra, og prøv igen.',
'코드 : {1} {2}' => 'Kode: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Sessionen for identitetsbekræftelse er udløbet. Start forfra, og prøv igen.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Hentning af bekræftelsesresultat mislykkedes ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'KCP\'s mobilbekræftelsesmodul V2 kræver PHP 7.0 eller nyere.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'De PHP-udvidelser (openssl/curl/hash_pbkdf2), som KCP\'s mobilbekræftelsesmodul V2 kræver, er ikke aktiveret.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Sitekode eller ENC_KEY til KCP\'s mobilbekræftelse V2 er ikke angivet.\\nIndtast dem under Administrator > Grundlæggende indstillinger.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registrering af bekræftelsestransaktionen mislykkedes.\\n({1} : {2})',
'휴대폰 본인확인' => 'Bekræftelse via mobil',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Kan ikke oprette data til KCP-transaktionsregistrering.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Kan ikke kryptere data til KCP-transaktionsregistrering.',
'KCP 거래등록 API 응답이 없습니다.' => 'Intet svar fra KCP\'s API til transaktionsregistrering.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Kan ikke fortolke svaret fra KCP\'s API til transaktionsregistrering.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Kan ikke oprette data til forespørgsel om KCP-bekræftelsesresultat.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Intet svar fra KCP\'s API til bekræftelsesresultat.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Kan ikke fortolke svaret fra KCP\'s API til bekræftelsesresultat.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Kan ikke dekryptere KCP\'s bekræftelsesdata.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Kan ikke fortolke KCP\'s dekrypterede bekræftelsesdata.',
'cURL 초기화에 실패했습니다.' => 'Initialisering af cURL mislykkedes.',
'KCP API 통신 실패: {1}' => 'KCP API-kommunikation mislykkedes: {1}',
'KCP API HTTP 오류: {1}' => 'KCP API HTTP-fejl: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Der opstod en fejl under mobilbekræftelsen. Fejlkode: {1}\\n\\nKontakt Korea Credit Bureau (KCB) kundeservice på 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Inputværdierne skal kontrolleres',
'KCB 휴대폰 본인확인' => 'KCB mobilbekræftelse',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Der opstod en fejl under i-PIN-bekræftelsen. Fejlkode: {1}\\n\\nKontakt Korea Credit Bureau (KCB) kundeservice på 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Der opstod en fejl under i-PIN-bekræftelsen (ingen CI-oplysninger). Fejlkode: {1}\\n\\nKontakt Korea Credit Bureau (KCB) kundeservice på 02-708-1000.',
'KCB 아이핀 본인확인' => 'KCB i-PIN-bekræftelse',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Vælg KCB\'s mobilbekræftelse under Grundlæggende indstillinger.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Indtast KCB-medlems-ID under Grundlæggende indstillinger.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Modulets programfil findes ikke.\\n\\nFilen {1} skal ligge i {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Modulets programfil har ikke kørselsrettigheder.\\n\\nGiv kørselsrettigheder, f.eks. med chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Modulets programfil har ikke kørselsrettigheder.\\n\\nKontrollér, at IUSER har kørselsrettigheder til cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Vælg KCB\'s i-PIN-bekræftelse under Grundlæggende indstillinger.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Opret mappen key i {1}/{2}.\\n\\nGiv derefter skriverettigheder. F.eks.: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Skift rettighederne for mappen {1}/{2}/key til 705.\\nchmod 705 key eller chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Skift rettighederne for mappen {1}/{2}/key til 707.\\n\\nchmod 707 key eller chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter-callback',
'트위터에 승인이 되었습니다.' => 'Godkendt af Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Ikke godkendt af Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Se mere',
'페이스북으로 공유' => 'Del på Facebook',
'페이스북 공유' => 'Del på Facebook',
'트위터로  공유' => 'Del på Twitter',
'트위터 공유' => 'Del på Twitter',
'카카오톡으로 보내기' => 'Send via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Også slået op på Facebook',
'트위터에도 등록됨' => 'Også slået op på Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Slå også op på Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Socialt login - {1}',
'잠시후에 다시 시도해 주세요.' => 'Prøv igen om lidt.',
'홈으로' => 'Til forsiden',
'이 페이지 닫기' => 'Luk denne side',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Du kan ikke oprette en ny konto, da dette {1}-ID allerede er tilknyttet eller registreret. Er du medlem, så log ind og tilknyt kontoen under Rediger profil.',
'지정되지 않은 오류입니다.' => 'Ukendt fejl.',
'설정 오류입니다.' => 'Konfigurationsfejl.',
'해당 provider 설정 오류입니다.' => 'Konfigurationsfejl for denne udbyder.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Ukendt eller deaktiveret udbyder.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Du har ikke adgang til denne tjeneste.',
'인증이 실패되었습니다.. ' => 'Godkendelsen mislykkedes.. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Brugeren annullerede godkendelsen, eller udbyderen afviste forbindelsen.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Anmodningen om brugerprofilen mislykkedes. Brugeren er muligvis ikke forbundet til tjenesten. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'I så fald skal du anmode om godkendelse igen.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Brugeren er ikke forbundet til tjenesten.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Tjenesten understøtter ikke denne funktion.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Du er allerede logget ind, eller anmodningen er ugyldig.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Der er allerede et tilknyttet ID, eller anmodningen er ugyldig.',
'소셜 데이터 오류' => 'Fejl i sociale data',
'SNS 사용자 인증에 실패하였습니다.' => 'SNS-brugergodkendelse mislykkedes.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Kontoen er allerede tilknyttet et {1}-ID. Fjern tilknytningen, og prøv igen.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Forbinder til {1}. Vent venligst.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Socialt login bruges ikke.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Socialt login er deaktiveret.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Indstillingen for nyt vindue er deaktiveret.',
'서비스 이름이 넘어오지 않았습니다.' => 'Tjenestens navn blev ikke modtaget.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Socialt login bruges ikke.',
'이미 회원가입 하였습니다.' => 'Du er allerede registreret.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Kun brugere, der har logget ind via socialt login, har adgang.',
'소셜 회원 가입 - {1}' => 'Social tilmelding - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Kun brugere, der har logget ind via socialt login, har adgang.',
'이미 등록된 회원이 존재합니다.' => 'Medlemmet er allerede registreret.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'De bekræftede identitetsoplysninger stemmer ikke overens med dine personoplysninger. Prøv igen.',
'회원 가입 오류!' => 'Fejl ved oprettelse af konto!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Du er ikke medlem, eller værdien blev ikke modtaget.',
'권한이 없거나 잘못된 요청입니다.' => 'Du har ikke tilladelse, eller anmodningen er ugyldig.',

// js/autosave.js
'삭제' => 'Slet',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'Der opstod en fejl under sletning af det midlertidigt gemte indlæg.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Du har allerede bekræftet din identitet via {1}.

Vil du annullere den tidligere bekræftelse og bekræfte igen?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Slettede data kan ikke gendannes.

Vil du virkelig slette?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'KAKAO-postnummertjenestens fil postcode.v2.js er ikke indlæst.',
'토큰 정보가 올바르지 않습니다.' => 'Tokenoplysningerne er ugyldige.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Du skal foretage et valg.
',
'{1} : 필수 입력입니다.
' => '{1} : Obligatorisk felt.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : Telefonnummerets format er ugyldigt.

Indtast det med bindestreger (-).
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Ikke en gyldig e-mailadresse.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Kun koreansk er tilladt. (Kun fuldstændige koreanske stavelser)
',
'{1} : 한글이 아닙니다.
' => '{1} : Kun koreansk er tilladt.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Kun koreansk, latinske bogstaver og tal er tilladt.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Kun koreansk og latinske bogstaver er tilladt.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Kun tal er tilladt.
',
'{1} : 영문이 아닙니다.
' => '{1} : Kun latinske bogstaver er tilladt.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Kun latinske bogstaver eller tal er tilladt.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Kun latinske bogstaver, tal og _ er tilladt.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Indtast mindst {2} tegn.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Ikke en billedfil.
Kun .gif-, .jpg- og .png-filer er tilladt.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Kun .{2}-filer er tilladt.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Mellemrum er ikke tilladt.
',
);
