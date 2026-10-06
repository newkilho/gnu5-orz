<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (sv). 틀은 php lang/build.php sv 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Installera butiken först.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'För många förfrågningar. Försök igen senare.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Värvarens användarnamn får bara innehålla bokstäver, siffror och _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Värvaren du angav är inget befintligt användarnamn.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Använd rätt tillvägagångssätt.',

// bbs/alert.php
'오류안내 페이지' => 'Felsida',
'결과안내 페이지' => 'Resultatsida',
'다음 항목에 오류가 있습니다.' => 'Följande fält innehåller fel.',
'다음 내용을 확인해 주세요.' => 'Kontrollera följande.',
'돌아가기' => 'Tillbaka',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Stäng det nya fönstret och försök igen.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Stäng det nya fönstret och fortsätt.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Forumet finns inte.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Inget bo_table-värde skickades.\\n\\nSkicka det till exempel som board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Inlägget finns inte.\\n\\nDet kan ha tagits bort eller flyttats.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gäster har inte åtkomst till det här forumet.\\n\\nOm du är medlem, logga in och försök igen.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har inte behörighet att läsa inlägg.\\n\\nKontakta administratören om du har frågor.',
'글을 읽을 권한이 없습니다.' => 'Du har inte behörighet att läsa det här inlägget.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att läsa det här inlägget.\\n\\nOm du är medlem, logga in och försök igen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'I det här forumet kan endast identitetskontrollerade medlemmar läsa inlägg.\\n\\nOm du är medlem, logga in och försök igen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'I det här forumet kan endast identitetskontrollerade medlemmar läsa inlägg.\\n\\nGör identitetskontrollen under Redigera profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'I det här forumet kan endast medlemmar som verifierats som myndiga läsa inlägg.\\n\\nOm du är myndig men ändå inte kan läsa, gör om identitetskontrollen under Redigera profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Du har inte tillräckligt med poäng ({1}) för att läsa inlägget ({2}).\\n\\nSamla fler poäng och försök igen.',
'목록을 볼 권한이 없습니다.' => 'Du har inte behörighet att visa listan.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att visa listan.\\n\\nOm du är medlem, logga in och försök igen.',
'{1} {2} 페이지' => '{1} – sida {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Välj minst ett objekt för {1}.',
'올바른 방법으로 이용해 주세요.' => 'Använd rätt tillvägagångssätt.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Kontrollera följande.',
'확인' => 'OK',
'취소' => 'Avbryt',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontrollera först Forumhantering -> Innehållshantering i administratörsläget.',
'등록된 내용이 없습니다.' => 'Det finns inget innehåll.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} finns inte.</p>',

// bbs/current_connect.php
'현재접속자' => 'Aktuella besökare',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Kan inte tas bort på grund av ett tokenfel.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan inte ta bort detta eftersom forumet inte tillhör en grupp som du administrerar.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Du kan inte ta bort inlägg som skrivits av medlemmar med högre nivå än din.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan inte ta bort detta eftersom du inte administrerar det här forumet.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Du kan inte ta bort detta eftersom det inte är ditt inlägg.',
'로그인 후 삭제하세요.' => 'Logga in för att ta bort.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Kan inte tas bort: lösenordet är fel.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Inlägget kan inte tas bort eftersom det har svar.\\n\\nTa bort svaren först.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Inlägget kan inte tas bort eftersom det har kommentarer.\\n\\nInlägg med {1} eller fler kommentarer kan inte tas bort.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Åtkomst nekad.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Kommentaren finns inte eller är ingen kommentar.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren har skrivits av en medlem med högre nivå än gruppadministratören och kan inte tas bort.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan inte ta bort kommentaren eftersom forumet inte tillhör en grupp som du administrerar.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren har skrivits av en medlem med högre nivå än forumadministratören och kan inte tas bort.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan inte ta bort kommentaren eftersom du inte administrerar det här forumet.',
'비밀번호가 틀립니다.' => 'Lösenordet är fel.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Kommentaren kan inte tas bort eftersom den har svar.',

// bbs/download.php
'잘못된 접근입니다.' => 'Ogiltig åtkomst.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att ladda ner.\\nOm du är medlem, logga in och försök igen.',
'파일 정보가 존재하지 않습니다.' => 'Filinformationen finns inte.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Token har gått ut eller är ogiltig.\\nUppdatera sidan och försök igen.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'När du laddar ner {1} dras {2} poäng.\\nPoäng dras bara en gång per inlägg, även om du laddar ner igen senare.\\nVill du ladda ner?',
'다운로드 권한이 없습니다.' => 'Du har inte behörighet att ladda ner.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nOm du är medlem, logga in och försök igen.',
'파일이 존재하지 않습니다.' => 'Filen finns inte.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Du har inte tillräckligt med poäng ({1}) för att ladda ner ({2}).\\n\\nSamla fler poäng och försök igen.',
'다운로드 &gt; {1}' => 'Ladda ner &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Medlemmen finns inte.',
'탈퇴 또는 차단된 회원입니다.' => 'Medlemmen har avslutat sitt konto eller är spärrad.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Den här e-postverifieringen har redan behandlats eller är ogiltig.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Din e-postadress har verifierats.\\n\\nDu kan nu logga in med användarnamnet {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Verifieringslänken har gått ut. Begär ett nytt verifieringsmejl.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Begäran om e-postverifiering är ogiltig.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Ogiltiga värden skickades.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Du har avregistrerat dig från informationsmejl.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontrollera först Forumhantering -> FAQ-hantering i administratörsläget.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'E-post kan bara skickas om "Använd e-postutskick" är markerat i inställningarna.\\n\\nKontakta administratören.',
'회원만 이용하실 수 있습니다.' => 'Endast för medlemmar.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan inte skicka e-post till andra om din profil inte är offentlig.\\n\\nDu kan ändra profilens synlighet under Redigera profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Medlemsuppgifterna finns inte.\\n\\nMedlemmen kan ha avslutat sitt konto.',
'정보공개를 하지 않았습니다.' => 'Profilen är inte offentlig.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Endast ett begränsat antal e-postmeddelanden kan skickas per session.\\n\\nLogga in igen eller besök webbplatsen på nytt för att skicka fler.',
'메일 쓰기' => 'Skriv e-post',
'이메일이 올바르지 않습니다.' => 'E-postadressen är ogiltig.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Du har överskridit gränsen för formulärmejl.',
'자동등록방지 숫자가 틀렸습니다.' => 'Skräppostskyddskoden är fel.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'E-postmeddelandet kan inte skickas eftersom e-postadressen är ogiltig.',
'허용되지 않는 파일 확장자입니다.' => 'Filtillägget är inte tillåtet.',
'메일보내기' => 'Skicka e-post',
'메일 발송중' => 'Skickar e-post',
'메일을 정상적으로 발송하였습니다.' => 'E-postmeddelandet har skickats.',

// bbs/good.php
'회원만 가능합니다.' => 'Endast för medlemmar.',
'값이 제대로 넘어오지 않았습니다.' => 'Ogiltig begäran.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Du kan bara gilla eller ogilla från själva inlägget.',
'존재하는 게시판이 아닙니다.' => 'Forumet finns inte.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Du kan inte gilla eller ogilla ditt eget inlägg.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Det här forumet använder inte gilla-funktionen.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Det här forumet använder inte ogilla-funktionen.',
'추천' => 'Gilla',
'비추천' => 'Ogilla',
'이미 {1} 하신 글 입니다.' => 'Du har redan valt {1} för det här inlägget.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Du har redan gillat eller ogillat det här inlägget.',
'이 글을 {1} 하셨습니다.' => 'Du valde {1} för det här inlägget.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Gruppen {1} är bara tillgänglig på mobil.',

// bbs/link.php
'링크' => 'Länk',
'링크가 없습니다.' => 'Det finns ingen länk.',

// bbs/list.php
'전체' => 'Alla',
'열린 분류' => 'Öppen kategori',
'이전검색' => 'Föregående sökning',
'다음검색' => 'Nästa sökning',

// bbs/login.php
'로그인' => 'Logga in',

// bbs/login_check.php
'로그인 검사' => 'Inloggningskontroll',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Användarnamn och lösenord får inte vara tomma.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Användarnamnet är inte registrerat eller lösenordet är fel.\\nLösenordet är skiftlägeskänsligt.',
'\\1년 \\2월 \\3일' => '\\1-\\2-\\3',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Ditt konto har spärrats.\\nDatum: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Kontot har avslutats och kan inte användas.\\nAvslutat: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Du måste verifiera e-postadressen {1} innan du kan logga in. Klicka på Avbryt om du vill verifiera en annan e-postadress.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Om mappen data inte är skrivbar eller disken är full\\nkan inloggningen misslyckas. Kontrollera diskutrymme och skrivbehörighet.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'URL:en innehåller ogiltiga värden.',
'url에 도메인을 지정할 수 없습니다.' => 'En domän kan inte anges i URL:en.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Identitetskontroll är inte tillgänglig. Kontakta administratören.',
'본인인증을 다시 해주세요.' => 'Gör om identitetskontrollen.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Logga in först.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Värdet w skickades inte korrekt.',
'잘못된 접근입니다' => 'Ogiltig åtkomst',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Inget användarnamn angavs. Använd rätt tillvägagångssätt.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Det finns redan ett konto registrerat med de identitetsuppgifter du angav.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Den kontrollerade identiteten stämmer inte med de angivna medlemsuppgifterna. Försök igen.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Endast inloggade medlemmar har åtkomst.',
'회원 비밀번호 확인' => 'Bekräfta medlemslösenord',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Endast för medlemmar.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Huvudadministratören kan inte avsluta sitt medlemskap.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Det gick inte att avsluta medlemskapet. Kontrollera medlemsstatusen.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} avslutade sitt medlemskap {2}.',
'Y년 m월 d일' => 'Y-m-d',

// bbs/memo.php
'내 쪽지함' => 'Mina meddelanden',
'kind 변수 값이 올바르지 않습니다.' => 'Värdet kind är ogiltigt.',
'받은' => 'Mottaget',
'보낸' => 'Skickat',
'정보없음' => 'Ingen information',
'아직 읽지 않음' => 'Inte läst ännu',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan inte skicka meddelanden till andra om din profil inte är offentlig. Du kan ändra profilens synlighet under Redigera profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Medlemsuppgifterna finns inte.\\n\\nMedlemmen kan ha avslutat sitt konto.',
'쪽지 보내기' => 'Skicka meddelande',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Användarnamnet \'{1}\' finns inte (eller är inte offentligt), eller har avslutats eller spärrats.\\nMeddelandet skickades inte.',
'해당 회원이 존재하지 않습니다.' => 'Medlemmen finns inte.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Du har inte tillräckligt med poäng ({1}) för att skicka ett meddelande.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Ditt meddelande har skickats till {1}.',
'회원아이디 오류 같습니다.' => 'Användarnamnet verkar vara fel.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Skicka med värdet {1}.',
'{1} 쪽지 보기' => 'Visa meddelande ({1})',

// bbs/move.php
'이동' => 'Flytta',
'복사' => 'Kopiera',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Värdet sw skickades inte korrekt.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Endast för forumadministratörer eller högre.',
'게시물 {1}' => '{1} inlägg',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Välj minst ett forum ({1}).',
'현재 페이지 게시판 전체' => 'Alla forum på den här sidan',
'게시판' => 'Forum',
'현재' => 'Aktuellt',
'창닫기' => 'Stäng fönstret',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Välj minst ett forum ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1} till de valda forumen slutförd.',

// bbs/new.php
'새글' => 'Nya inlägg',
'그룹' => 'Grupp',
'전체그룹' => 'Alla grupper',
'[코] ' => '[Kommentar] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Endast för huvudadministratören.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Popup-meddelande',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Visa inte igen på {1} timmar.',
'닫기' => 'Stäng',
'팝업레이어 알림이 없습니다.' => 'Det finns inga popup-meddelanden.',

// bbs/password.php
'비밀번호 입력' => 'Ange lösenord',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Du är redan inloggad.',
'회원정보 찾기' => 'Återställ kontouppgifter',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Ogiltig e-postadress.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Ett e-postmeddelande för att verifiera användarnamn och lösenord har skickats till {1}.\\n\\nKontrollera din e-post.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] E-post för återställning av kontouppgifter som du begärt',
'회원정보 찾기 안내' => 'Återställning av kontouppgifter',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) begärde återställning av kontouppgifter {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Eftersom inte ens administratörer kan se ditt lösenord skapar vi ett nytt lösenord åt dig i stället för att skicka det gamla.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Kontrollera det nya lösenordet nedan och <span style="color:#ff3061">klicka sedan på länken <strong>Byt lösenord</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'När ett meddelande bekräftar att lösenordet har bytts loggar du in på webbplatsen med ditt användarnamn och det nya lösenordet.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Byt sedan till ett eget lösenord under Redigera profil.',
'회원아이디' => 'Användarnamn',
'변경될 비밀번호' => 'Nytt lösenord',
'비밀번호 변경' => 'Byt lösenord',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Ditt lösenord har bytts.\\n\\nLogga in med ditt användarnamn och det nya lösenordet.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Det går inte att återställa användarnamn/lösenord via identitetskontroll. Kontakta administratören.',
'패스워드 변경' => 'Byt lösenord',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Inget lösenord skickades.',
'비밀번호가 일치하지 않습니다.' => 'Lösenorden stämmer inte överens.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Endast medlemmar kan se detta.',
'{1} 님의 포인트 내역' => 'Poänghistorik för {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Värdet po_id skickades inte korrekt.',
'기타의견이 비활성화되어 있습니다.' => 'Andra åsikter är inaktiverade.',
'권한이 없습니다.' => 'Du saknar behörighet.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Omröstningen finns inte.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Endast medlemmar på nivå {1} eller högre kan se resultaten.',
'설문조사 결과' => 'Omröstningsresultat',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Endast medlemmar på nivå {1} eller högre kan rösta.',
'항목을 선택하세요.' => 'Välj ett alternativ.',
'{1}에 이미 참여하셨습니다.' => 'Du har redan deltagit i {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan inte se andras profiler om din profil inte är offentlig.\\n\\nDu kan ändra profilens synlighet under Redigera profil.',
'{1}님의 자기소개' => 'Om {1}',
'소개 내용이 없습니다.' => 'Ingen presentation.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Om du är medlem, logga in först.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Välj minst ett inlägg att ta bort.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Om du är medlem, logga in och försök igen.',
'열린 분류 ' => 'Öppen kategori ',
'{1}이 존재하지 않습니다.' => '{1} finns inte.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Inlägget finns inte.\\nDet har tagits bort eller är inte ditt.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Förfrågningar som redan har besvarats kan inte redigeras.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Du har inte behörighet att redigera inlägget.\\n\\nAnvänd rätt tillvägagångssätt.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Ställ in kategorier i inställningarna för 1:1-förfrågningar.',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Välj en giltig kategori.',
'이메일을 입력하세요.' => 'Ange din e-postadress.',
'<strong>제목</strong>을 입력하세요.' => 'Ange ett <strong>ämne</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Ange <strong>innehåll</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Innehållet innehåller mycket ogiltig kod.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Filens eller innehållets storlek överskrider servergränsen.\\npost_max_size={1} , upload_max_filesize={2}\\nKontakta forumadministratören eller serveradministratören.',
'답변은 관리자만 등록할 수 있습니다.' => 'Endast administratörer kan skriva svar.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Förfrågan finns inte, så inget svar kan skrivas.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Det går inte att svara på ett svar.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Ladda upp högst 2 bilagor.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => '"{1}" kan inte laddas upp eftersom den överskrider servergränsen ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => '"{1}" laddades inte upp korrekt.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => '"{1}" ({2} byte) laddades inte upp eftersom den överskrider forumets gräns ({3} byte).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => '"{1}" kan inte sparas säkert. Kontrollera serverns slumpkälla och lagringssökväg.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2}: avisering om svar',

// bbs/register.php
'회원가입약관' => 'Användarvillkor',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Byt e-postadress för verifiering',
'이미 메일인증 하신 회원입니다.' => 'Din e-postadress är redan verifierad.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Om du inte har fått verifieringsmejlet kan du byta e-postadress i ditt konto.',
'사이트 이용정보 입력' => 'Kontouppgifter',
'필수' => 'Obligatoriskt',
'자동등록방지' => 'Skräppostskydd',
'인증메일변경' => 'Byt verifieringsmejl',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => '{1} används redan.\\n\\nAnge en annan e-postadress.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Verifieringsmejl',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Verifieringsmejlet har skickats igen till {1}.\\n\\nKontrollera {1} om en stund.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du måste godkänna användarvillkoren för att bli medlem.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du måste godkänna insamling och användning av personuppgifter för att bli medlem.',
'회원 가입' => 'Bli medlem',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Redigera administratörens uppgifter i administrationspanelen.',
'로그인 후 이용하여 주십시오.' => 'Logga in först.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'De skickade uppgifterna stämmer inte med den inloggade medlemmen.',
'비밀번호를 입력해 주세요.' => 'Ange ditt lösenord.',
'회원 정보 수정' => 'Redigera profil',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Den här åtgärden är inte tillgänglig i demon.',
'이름을 올바르게 입력해 주십시오.' => 'Ange ett giltigt namn.',
'닉네임을 올바르게 입력해 주십시오.' => 'Ange ett giltigt smeknamn.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetskontroll krävs för att bli medlem.',
'추천인이 존재하지 않습니다.' => 'Värvaren finns inte.',
'본인을 추천할 수 없습니다.' => 'Du kan inte värva dig själv.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Välkommen som medlem',
'로그인 되어 있지 않습니다.' => 'Du är inte inloggad.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'De skickade uppgifterna stämmer inte med det inloggade kontot och kan inte ändras.\\nOm du använder ett otillåtet tillvägagångssätt, sluta omedelbart.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Ladda upp en medlemsikon på högst {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} är ingen bildfil.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Ladda upp en medlemsbild på högst {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} är ingen gif/jpg-fil.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Din profil har uppdaterats.\\n\\nDin e-postadress har ändrats, så du måste verifiera den igen.',
'회원정보수정' => 'Redigera profil',
'회원 정보가 수정 되었습니다.' => 'Din profil har uppdaterats.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Välkomstmejl',
'회원가입을 축하합니다.' => 'Välkommen!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Hjärtligt välkommen som medlem, <b>{1}</b>.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Vi gör vårt bästa för att du ska trivas.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klicka på <strong>Verifiera e-post</strong> nedan för att slutföra registreringen.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Verifieringslänken gäller i {1} minuter efter att den skickats.',
'감사합니다.' => 'Tack.',
'메일인증' => 'Verifiera e-post',
'사이트바로가기' => 'Gå till webbplatsen',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Verifieringsmejl för medlemmar',
'회원 인증 메일입니다.' => 'Det här är ett verifieringsmejl för medlemmar.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'E-postadressen för <b>{1}</b> har ändrats.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klicka på adressen nedan för att slutföra verifieringen.',
'{1} 로그인' => '{1} inloggning',

// bbs/register_result.php
'회원가입 완료' => 'Registreringen är klar',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS är bara tillgängligt för forum som gäster får läsa.',
'RSS 보기가 금지되어 있습니다.' => 'RSS är inaktiverat.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Sparade inlägg för {1}',
'[게시판 없음]' => '[Inget forum]',
'[글 없음]' => '[Inget inlägg]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Endast för medlemmar.',
'로그인하기' => 'Logga in',
'올바른 방법으로 사용해 주십시오.' => 'Använd rätt tillvägagångssätt.',
'코멘트는 스크랩 할 수 없습니다.' => 'Kommentarer kan inte sparas.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Du har redan sparat det här inlägget.

Vill du visa dina sparade inlägg nu?',
'이미 스크랩하신 글 입니다.' => 'Du har redan sparat det här inlägget.',
'스크랩 확인하기' => 'Visa sparade inlägg',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Inlägget du försöker spara finns inte.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Du kan inte publicera flera inlägg i så snabb följd.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Inlägget har sparats.

Vill du visa dina sparade inlägg nu?',
'이 글을 스크랩 하였습니다.' => 'Inlägget har sparats.',

// bbs/search.php
'전체검색 결과' => 'Sökresultat',
'[비밀글 입니다.]' => '[Det här är ett privat inlägg.]',
'게시판 그룹선택' => 'Välj forumgrupp',
'전체 분류' => 'Alla kategorier',

// bbs/view_comment.php
'비밀글 입니다.' => 'Det här är ett privat inlägg.',
'댓글내용 확인' => 'Visa kommentar',

// bbs/view_image.php
'이미지 크게보기' => 'Visa större bild',
'이미지 확장자가 아닙니다.' => 'Inget filtillägg för bilder.',
'이미지 파일이 아닙니다.' => 'Ingen bildfil.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Inget bo_table-värde skickades.\\nSkicka det till exempel som write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Inlägget finns inte.\\nDet kan ha tagits bort eller flyttats.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Värdet $wr_id används inte när ett nytt inlägg skrivs.',
'글을 쓸 권한이 없습니다.' => 'Du har inte behörighet att skriva.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att skriva.\\nOm du är medlem, logga in och försök igen.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Du har inte tillräckligt med poäng ({1}) för att skriva ett inlägg ({2}).\\n\\nSamla fler poäng och försök igen.',
'글쓰기' => 'Skriv',
'글을 수정할 권한이 없습니다.' => 'Du har inte behörighet att redigera inlägget.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att redigera inlägget.\\n\\nOm du är medlem, logga in och försök igen.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Inlägget kan inte redigeras eftersom det har svar.\\n\\nInlägg med svar kan inte redigeras.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Inlägget kan inte redigeras eftersom det har kommentarer.\\n\\nInlägg med {1} eller fler kommentarer kan inte redigeras.',
'글수정' => 'Redigera inlägg',
'글을 답변할 권한이 없습니다.' => 'Du har inte behörighet att svara.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att skriva ett svar.\\n\\nOm du är medlem, logga in och försök igen.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Du har inte tillräckligt med poäng ({1}) för att svara ({2}).\\n\\nSamla fler poäng och försök igen.',
'공지에는 답변 할 수 없습니다.' => 'Det går inte att svara på ett anslag.',
'정상적인 접근이 아닙니다.' => 'Ogiltig åtkomst.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Endast författaren eller en administratör kan svara på ett privat inlägg.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Det går inte att svara på gästers privata inlägg.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Du kan inte svara fler gånger.\\n\\nSvar är begränsade till 10 nivåer.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Du kan inte svara fler gånger.\\n\\nSvar är begränsade till 26.',
'글답변' => 'Svara',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Åtkomst nekad.\\n\\nOm du är medlem, logga in och försök igen.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har inte behörighet att skriva.\\n\\nKontakta administratören om du har frågor.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'I det här forumet kan endast identitetskontrollerade medlemmar skriva.\\n\\nOm du är medlem, logga in och försök igen.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'I det här forumet kan endast identitetskontrollerade medlemmar skriva.\\n\\nGör identitetskontrollen under Redigera profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Namn är obligatoriskt.',
'댓글을 쓸 권한이 없습니다.' => 'Du har inte behörighet att kommentera.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Inlägget finns inte.\\nDet kan ha tagits bort eller flyttats.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Du har inte tillräckligt med poäng ({1}) för att kommentera ({2}).\\n\\nSamla fler poäng och försök igen.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Det finns ingen kommentar att svara på.\\n\\nDen kan ha tagits bort medan du svarade.',
'댓글을 등록할 수 없습니다.' => 'Kommentaren kan inte publiceras.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Du kan inte svara fler gånger.\\n\\nSvar är begränsade till 5 nivåer.',
'원글
{1}


댓글
{2}' => 'Ursprungligt inlägg
{1}


Kommentar
{2}',
'입력' => 'Ny',
'수정' => 'Redigera',
'답변' => 'Svara',
'댓글 ' => 'Kommentar ',
'댓글 수정' => 'Redigera kommentar',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nytt inlägg i forumet {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren har skrivits av en medlem med högre nivå än gruppadministratören och kan inte redigeras.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan inte redigera kommentaren eftersom forumet inte tillhör en grupp som du administrerar.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren har skrivits av en medlem med högre nivå än forumadministratören och kan inte redigeras.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan inte redigera kommentaren eftersom du inte administrerar det här forumet.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Du kan inte redigera detta eftersom det inte är ditt inlägg.',
'댓글을 수정할 권한이 없습니다.' => 'Du har inte behörighet att redigera kommentaren.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Kommentaren kan inte redigeras eftersom den har svar.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Foruminformationen är ogiltig.',

// bbs/write_update.php
'게시글 저장' => 'Spara inlägg',
'<strong>분류</strong>를 선택하세요.' => 'Välj en <strong>kategori</strong>.',
'분류를 올바르게 입력하세요.' => 'Ange en giltig kategori.',
'올바른 방법으로 수정하여 주십시오.' => 'Redigera på rätt sätt.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan inte redigera detta eftersom forumet inte tillhör en grupp som du administrerar.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Du kan inte redigera inlägg som skrivits av medlemmar med högre nivå än din.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan inte redigera detta eftersom du inte administrerar det här forumet.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Bekräfta ditt lösenord och redigera igen.',
'로그인 후 수정하세요.' => 'Logga in för att redigera.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Det här forumet använder inte privata inlägg.',
'관리자만 공지할 수 있습니다.' => 'Endast administratörer kan publicera anslag.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Du kan inte svara fler gånger.\\nSvar är begränsade till 10 nivåer.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Du kan inte svara fler gånger.\\nSvar är begränsade till 26.',
'제목을 입력하여 주십시오.' => 'Ange ett ämne.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Ta bort befintliga filer och ladda upp högst {1} bilagor.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Ladda upp högst {1} bilagor.',
'코멘트' => 'Kommentar',
'코멘트 수정' => 'Redigera kommentar',

// bbs/write_update_mail.php
'{1} 메일' => '{1} e-post',
'작성자 {1}' => 'Författare: {1}',
'사이트에서 게시물 확인하기' => 'Visa inlägget på webbplatsen',

// common.php
'접근이 가능하지 않습니다.' => 'Åtkomst är inte möjlig.',
'접근 불가합니다.' => 'Åtkomst nekad.',

// head.php
'본문 바로가기' => 'Hoppa till innehållet',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Butik',
'접속자' => 'Besökare',
'사이트 내 전체검색' => 'Sök på webbplatsen',
'검색어 필수' => 'Sökord (obligatoriskt)',
'검색어를 입력해주세요' => 'Ange ett sökord',
'검색' => 'Sök',
'검색어는 두글자 이상 입력하십시오.' => 'Ange minst två tecken.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'För snabbare sökning får sökordet bara innehålla ett mellanslag.',
'정보수정' => 'Redigera profil',
'로그아웃' => 'Logga ut',
'회원가입' => 'Bli medlem',
'메인메뉴' => 'Huvudmeny',
'전체메뉴' => 'Alla menyer',
'전체메뉴열기' => 'Öppna alla menyer',
'하위분류' => 'Undermeny',
'메뉴 준비 중입니다.' => 'Menyn förbereds.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} inloggad ',

// lib/common.lib.php
'처음' => 'Första',
'이전' => 'Föregående',
'페이지' => 'Sida',
'열린' => 'Aktuell',
'다음' => 'Nästa',
'맨끝' => 'Sista',
'$url1 과 $url2 를 지정해 주세요.' => 'Ange $url1 och $url2.',
'답변글' => 'Svar',
'{1} 자기소개' => 'Om {1}',
'{1} 이름으로 검색' => 'Sök på namnet {1}',
'쪽지보내기' => 'Skicka meddelande',
'홈페이지' => 'Webbplats',
'자기소개' => 'Om mig',
'아이디로 검색' => 'Sök på användarnamn',
'이름으로 검색' => 'Sök på namn',
'전체게시물' => 'Alla inlägg',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'MySQL-uppgifterna för Host, User, Password eller DB är felaktiga.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL är inte installerat, så funktionen mysql_connect är inte tillgänglig.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'MySQL-uppgifterna för Host, User eller Password är felaktiga.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Ett fel uppstod vid databasbehandlingen.',
'yoil|일' => 'sön',
'yoil|월' => 'mån',
'yoil|화' => 'tis',
'yoil|수' => 'ons',
'yoil|목' => 'tor',
'yoil|금' => 'fre',
'yoil|토' => 'lör',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Token har gått ut. Uppdatera sidan.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Webbplatsadressen för e-postverifiering är inte inställd. Kontakta webbplatsens administratör.',
'올바른 경로로 접근해 주십시오.' => 'Använd rätt sökväg.',
'PC 전용 게시판입니다.' => 'Det här forumet är endast för dator.',
'모바일 전용 게시판입니다.' => 'Det här forumet är endast för mobil.',
'간편인증' => 'Enkel verifiering',
'휴대폰' => 'Mobil',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Du har använt identitetskontroll via {1} {2} gånger i dag och kan inte använda den mer.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Inte tillgängligt eftersom funktionen exec inte kan köras.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Antalet variabler som skickats från formuläret överskrider max_input_vars.\\nVissa värden kan gå förlorade när de sparas i databasen.\\n\\nÄndra värdet max_input_vars i serverns php.ini för att åtgärda detta.',
'url에 타 도메인을 지정할 수 없습니다.' => 'En annan domän kan inte anges i URL:en.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Åtkomst nekad eftersom URL:en innehåller användaruppgifter.',
'bot 으로 판단되어 중지합니다.' => 'Stoppad eftersom du bedöms vara en bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Ange innehåll.',

// lib/get_data.lib.php
'제목' => 'Ämne',
'내용' => 'Innehåll',
'제목+내용' => 'Ämne+innehåll',
'글쓴이' => 'Författare',
'글쓴이(코)' => 'Författare (kommentarer)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Ange ett användarnamn.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Användarnamnet får bara innehålla bokstäver, siffror och _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Användarnamnet måste vara minst 3 tecken långt.',
'이미 사용중인 회원아이디 입니다.' => 'Användarnamnet används redan.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Användarnamnet är ett reserverat ord och kan inte användas.',
'닉네임을 입력해 주십시오.' => 'Ange ett smeknamn.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Smeknamnet får bara innehålla koreanska tecken, latinska bokstäver och siffror, utan mellanslag.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Smeknamnet måste vara minst 2 koreanska eller 4 latinska tecken långt.',
'이미 존재하는 닉네임입니다.' => 'Smeknamnet finns redan.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Smeknamnet är ett reserverat ord och kan inte användas.',
'E-mail 주소를 입력해 주십시오.' => 'Ange en e-postadress.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'E-postadressen är ogiltig.',
'{1} 메일은 사용할 수 없습니다.' => 'E-postadresser från {1} kan inte användas.',
'이미 사용중인 E-mail 주소입니다.' => 'E-postadressen används redan.',
'이름을 입력해 주십시오.' => 'Ange ditt namn.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Namnet får bara innehålla koreanska tecken, utan mellanslag.',
'휴대폰번호를 입력해 주십시오.' => 'Ange ditt mobilnummer.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Ange ett giltigt mobilnummer.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Mobilnumret används redan. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Ogiltig begäran.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Ogiltig verifiering. Använd rätt tillvägagångssätt.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Det finns inget medlemskonto med de verifierade uppgifterna.',
'코드 : {1}  {2}' => 'Kod: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultat av enkel verifiering via KG Inicis',
'본인인증이 완료되었습니다.' => 'Identitetskontrollen är klar.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Enkel verifiering via KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Kontot har redan verifierats i en annan persons namn.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Det finns redan ett konto registrerat med de identitetsuppgifter du angav.\\nAnvändarnamn: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Lyssna på siffrorna',
'새로고침' => 'Uppdatera',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Ange skräppostskyddets siffror i ordning.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultat av verifiering via mobil',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risk för manipulering av dn_hash (kontrollera om {1} har körbehörighet.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Du avbröt identitetskontrollen via mobil.',
'up_hash 변조 위험있음' => 'Risk för manipulering av up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Platskoden för KCP:s identitetskontroll via mobil saknas. Ange KCP-platskoden under Admin > Grundinställningar.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Det finns redan ett konto registrerat med de identitetsuppgifter du angav.\\nAnvändarnamn: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Verifierad med ditt eget mobilnummer.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Inget svar från identitetskontrollen. Börja om från början.',
'코드 : {1} {2}' => 'Kod: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Sessionen för identitetskontrollen har gått ut. Börja om från början.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Det gick inte att hämta resultatet av identitetskontrollen ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Modulen för KCP:s identitetskontroll via mobil V2 kräver PHP 7.0 eller senare.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'De PHP-tillägg som krävs för modulen för KCP:s identitetskontroll via mobil V2 (openssl/curl/hash_pbkdf2) är inte aktiverade.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Platskod eller ENC_KEY för KCP:s identitetskontroll via mobil V2 är inte inställd.\\nAnge dem under Admin > Grundinställningar.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registreringen av kontrolltransaktionen misslyckades.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verifiering via mobil',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Det går inte att skapa begärandedata för KCP-transaktionsregistrering.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Det går inte att kryptera begärandedata för KCP-transaktionsregistrering.',
'KCP 거래등록 API 응답이 없습니다.' => 'Inget svar från KCP:s API för transaktionsregistrering.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Det går inte att tolka svaret från KCP:s API för transaktionsregistrering.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Det går inte att skapa begärandedata för KCP:s kontrollresultat.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Inget svar från KCP:s API för kontrollresultat.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Det går inte att tolka svaret från KCP:s API för kontrollresultat.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Det går inte att dekryptera KCP:s resultatdata.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Det går inte att tolka KCP:s dekrypterade kontrolldata.',
'cURL 초기화에 실패했습니다.' => 'Initieringen av cURL misslyckades.',
'KCP API 통신 실패: {1}' => 'Kommunikationen med KCP:s API misslyckades: {1}',
'KCP API HTTP 오류: {1}' => 'HTTP-fel från KCP:s API: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ett fel uppstod vid identitetskontrollen via mobil. Felkod: {1}\\n\\nKontakta Korea Credit Bureau (KCB) kundcenter på 02-708-1000 vid frågor.',
'입력 값 확인이 필요합니다' => 'Kontrollera de angivna värdena',
'KCB 휴대폰 본인확인' => 'KCB identitetskontroll via mobil',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ett fel uppstod vid identitetskontrollen via i-PIN. Felkod: {1}\\n\\nKontakta Korea Credit Bureau (KCB) kundcenter på 02-708-1000 vid frågor.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ett fel uppstod vid identitetskontrollen via i-PIN. (Ingen CI-information) Felkod: {1}\\n\\nKontakta Korea Credit Bureau (KCB) kundcenter på 02-708-1000 vid frågor.',
'KCB 아이핀 본인확인' => 'KCB identitetskontroll via i-PIN',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Välj KCB:s tjänst för identitetskontroll via mobil i grundinställningarna.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Ange KCB-medlems-ID i grundinställningarna.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Modulens körbara fil finns inte.\\n\\nFilen {1} måste finnas i {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Modulens körbara fil saknar körbehörighet.\\n\\nGe körbehörighet, till exempel med chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Modulens körbara fil saknar körbehörighet.\\n\\nKontrollera att IUSER har körbehörighet för cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Välj KCB:s tjänst för identitetskontroll via i-PIN i grundinställningarna.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Skapa en katalog key i {1}/{2}.\\n\\nGe den sedan skrivbehörighet, till exempel: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Ändra behörigheten för katalogen {1}/{2}/key till 705.\\nchmod 705 key eller chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Ändra behörigheten för katalogen {1}/{2}/key till 707.\\n\\nchmod 707 key eller chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter-återanrop',
'트위터에 승인이 되었습니다.' => 'Auktoriserad hos Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Inte auktoriserad hos Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Visa detaljer',
'페이스북으로 공유' => 'Dela på Facebook',
'페이스북 공유' => 'Dela på Facebook',
'트위터로  공유' => 'Dela på Twitter',
'트위터 공유' => 'Dela på Twitter',
'카카오톡으로 보내기' => 'Skicka via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Även publicerat på Facebook',
'트위터에도 등록됨' => 'Även publicerat på Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Publicera även på Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Social inloggning - {1}',
'잠시후에 다시 시도해 주세요.' => 'Försök igen senare.',
'홈으로' => 'Startsida',
'이 페이지 닫기' => 'Stäng sidan',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Du kan inte registrera dig igen eftersom ett konto redan är kopplat till eller registrerat med detta {1}-ID. Om du är medlem, logga in och koppla kontot under Redigera profil.',
'지정되지 않은 오류입니다.' => 'Ospecificerat fel.',
'설정 오류입니다.' => 'Konfigurationsfel.',
'해당 provider 설정 오류입니다.' => 'Konfigurationsfel för leverantören.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Okänd eller inaktiverad leverantör.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Du har inte behörighet till tjänsten.',
'인증이 실패되었습니다.. ' => 'Autentiseringen misslyckades. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Användaren avbröt autentiseringen eller leverantören nekade anslutningen.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Begäran om användarprofilen misslyckades. Användaren kanske inte är ansluten till tjänsten. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'I så fall måste du begära autentisering igen.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Användaren är inte ansluten till tjänsten.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Tjänsten stöder inte funktionen.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Du är redan inloggad eller begäran är ogiltig.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Ett ID är redan kopplat eller begäran är ogiltig.',
'소셜 데이터 오류' => 'Fel i sociala data',
'SNS 사용자 인증에 실패하였습니다.' => 'Autentiseringen av SNS-användaren misslyckades.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Ett {1}-ID är redan kopplat till kontot. Ta bort kopplingen och försök igen.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Ansluter till {1}. Vänta en stund.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Social inloggning används inte.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Social inloggning är inaktiverad.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Alternativet för nytt fönster är inaktiverat.',
'서비스 이름이 넘어오지 않았습니다.' => 'Tjänstens namn skickades inte.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Social inloggning används inte.',
'이미 회원가입 하였습니다.' => 'Du är redan medlem.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Endast användare som loggat in via social inloggning har åtkomst.',
'소셜 회원 가입 - {1}' => 'Bli medlem via social inloggning - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Endast användare som loggat in via social inloggning har åtkomst.',
'이미 등록된 회원이 존재합니다.' => 'Det finns redan en registrerad medlem.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Den kontrollerade identiteten stämmer inte med dina personuppgifter. Försök igen.',
'회원 가입 오류!' => 'Fel vid registrering!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Inte medlem eller så skickades inte värdet.',
'권한이 없거나 잘못된 요청입니다.' => 'Ingen behörighet eller ogiltig begäran.',

// js/autosave.js
'삭제' => 'Radera',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'Ett fel uppstod när det tillfälligt sparade inlägget skulle tas bort.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Du har redan verifierat din identitet via {1}.

Vill du avbryta den tidigare verifieringen och verifiera igen?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Borttagna data kan inte återställas.

Vill du verkligen ta bort?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'KAKAO-postnummertjänstens fil postcode.v2.js har inte laddats.',
'토큰 정보가 올바르지 않습니다.' => 'Tokeninformationen är ogiltig.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Du måste göra ett val.
',
'{1} : 필수 입력입니다.
' => '{1} : Obligatoriskt fält.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : Telefonnumrets format är ogiltigt.

Ange det med bindestreck (-).
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Ingen giltig e-postadress.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Endast koreanska tillåts. (Endast fullständiga koreanska stavelser)
',
'{1} : 한글이 아닙니다.
' => '{1} : Endast koreanska tillåts.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Endast koreanska, latinska bokstäver och siffror tillåts.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Endast koreanska och latinska bokstäver tillåts.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Endast siffror tillåts.
',
'{1} : 영문이 아닙니다.
' => '{1} : Endast latinska bokstäver tillåts.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Endast latinska bokstäver eller siffror tillåts.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Endast latinska bokstäver, siffror och _ tillåts.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Ange minst {2} tecken.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Ingen bildfil.
Endast .gif-, .jpg- och .png-filer tillåts.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Endast .{2}-filer tillåts.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Mellanslag är inte tillåtna.
',
);
