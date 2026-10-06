<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (nl). 틀은 php lang/build.php nl 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Installeer eerst de winkel.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Te veel verzoeken. Probeer het later opnieuw.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'De gebruikersnaam van de aanbrenger mag alleen letters, cijfers en _ bevatten.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'De ingevoerde aanbrenger is geen bestaande gebruikersnaam.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Gebruik de juiste methode.',

// bbs/alert.php
'오류안내 페이지' => 'Foutpagina',
'결과안내 페이지' => 'Resultaatpagina',
'다음 항목에 오류가 있습니다.' => 'De volgende onderdelen bevatten fouten.',
'다음 내용을 확인해 주세요.' => 'Controleer het volgende.',
'돌아가기' => 'Terug',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Sluit het nieuwe venster en probeer het opnieuw.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Sluit het nieuwe venster en ga verder.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Dit forum bestaat niet.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Er is geen bo_table-waarde doorgegeven.\\n\\nGeef deze door zoals board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Het bericht bestaat niet.\\n\\nHet is mogelijk verwijderd of verplaatst.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gasten hebben geen toegang tot dit forum.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'U hebt geen toestemming om berichten te lezen.\\n\\nNeem bij vragen contact op met de beheerder.',
'글을 읽을 권한이 없습니다.' => 'U hebt geen toestemming om dit bericht te lezen.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om dit bericht te lezen.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Op dit forum kunnen alleen leden met identiteitsverificatie berichten lezen.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Op dit forum kunnen alleen leden met identiteitsverificatie berichten lezen.\\n\\nVoer de identiteitsverificatie uit via Profiel bewerken.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Op dit forum kunnen alleen leden die als meerderjarig zijn geverifieerd berichten lezen.\\n\\nAls u meerderjarig bent en toch niet kunt lezen, voer de identiteitsverificatie dan opnieuw uit via Profiel bewerken.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'U hebt niet genoeg punten ({1}) om dit bericht te lezen ({2}).\\n\\nVerzamel meer punten en probeer het opnieuw.',
'목록을 볼 권한이 없습니다.' => 'U hebt geen toestemming om de lijst te bekijken.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om de lijst te bekijken.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'{1} {2} 페이지' => '{1} – pagina {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Selecteer ten minste één item voor {1}.',
'올바른 방법으로 이용해 주세요.' => 'Gebruik de juiste methode.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Controleer het volgende.',
'확인' => 'OK',
'취소' => 'Annuleren',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Controleer eerst in de beheermodus Forumbeheer -> Inhoudsbeheer.',
'등록된 내용이 없습니다.' => 'Er is geen inhoud.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} bestaat niet.</p>',

// bbs/current_connect.php
'현재접속자' => 'Huidige bezoekers',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Verwijderen niet mogelijk door een tokenfout.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'U kunt dit niet verwijderen, omdat het forum niet tot een groep behoort die u beheert.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'U kunt geen berichten verwijderen van leden met een hoger niveau dan het uwe.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'U kunt dit niet verwijderen, omdat u dit forum niet beheert.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'U kunt dit niet verwijderen, omdat het niet uw bericht is.',
'로그인 후 삭제하세요.' => 'Log in om te verwijderen.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Verwijderen niet mogelijk: het wachtwoord is onjuist.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Dit bericht kan niet worden verwijderd, omdat er antwoorden op zijn.\\n\\nVerwijder eerst de antwoorden.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Dit bericht kan niet worden verwijderd, omdat er reacties op zijn.\\n\\nBerichten met {1} of meer reacties kunnen niet worden verwijderd.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Geen toegang.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'De reactie bestaat niet of is geen reactie.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Deze reactie is geschreven door een lid met een hoger niveau dan de groepsbeheerder en kan niet worden verwijderd.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'U kunt de reactie niet verwijderen, omdat het forum niet tot een groep behoort die u beheert.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Deze reactie is geschreven door een lid met een hoger niveau dan de forumbeheerder en kan niet worden verwijderd.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'U kunt de reactie niet verwijderen, omdat u dit forum niet beheert.',
'비밀번호가 틀립니다.' => 'Het wachtwoord is onjuist.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Deze reactie kan niet worden verwijderd, omdat er antwoorden op zijn.',

// bbs/download.php
'잘못된 접근입니다.' => 'Ongeldige toegang.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om te downloaden.\\nAls u lid bent, log dan in en probeer het opnieuw.',
'파일 정보가 존재하지 않습니다.' => 'De bestandsgegevens bestaan niet.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Het token is verlopen of ongeldig.\\nVernieuw de pagina en probeer het opnieuw.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Bij het downloaden van {1} worden {2} punten afgeschreven.\\nPunten worden per bericht maar één keer afgeschreven, ook als u later opnieuw downloadt.\\nWilt u downloaden?',
'다운로드 권한이 없습니다.' => 'U hebt geen toestemming om te downloaden.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nAls u lid bent, log dan in en probeer het opnieuw.',
'파일이 존재하지 않습니다.' => 'Het bestand bestaat niet.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'U hebt niet genoeg punten ({1}) om te downloaden ({2}).\\n\\nVerzamel meer punten en probeer het opnieuw.',
'다운로드 &gt; {1}' => 'Downloaden &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Het lid bestaat niet.',
'탈퇴 또는 차단된 회원입니다.' => 'Dit lid heeft het lidmaatschap opgezegd of is geblokkeerd.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Dit e-mailverificatieverzoek is al verwerkt of ongeldig.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Uw e-mailadres is geverifieerd.\\n\\nU kunt nu inloggen met de gebruikersnaam {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'De verificatielink is verlopen. Vraag een nieuwe verificatie-e-mail aan.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Het e-mailverificatieverzoek is ongeldig.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Er zijn ongeldige waarden verzonden.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'U bent afgemeld voor informatieve e-mails.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Controleer eerst in de beheermodus Forumbeheer -> FAQ-beheer.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'E-mails kunnen alleen worden verzonden als "E-mail verzenden gebruiken" is ingeschakeld in de configuratie.\\n\\nNeem contact op met de beheerder.',
'회원만 이용하실 수 있습니다.' => 'Alleen voor leden.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Zonder openbaar profiel kunt u anderen geen e-mail sturen.\\n\\nU kunt de zichtbaarheid van uw profiel wijzigen via Profiel bewerken.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'De ledengegevens bestaan niet.\\n\\nHet lid heeft mogelijk het lidmaatschap opgezegd.',
'정보공개를 하지 않았습니다.' => 'Het profiel is niet openbaar.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Per sessie kan slechts een beperkt aantal e-mails worden verzonden.\\n\\nLog opnieuw in of bezoek de site opnieuw om meer e-mails te verzenden.',
'메일 쓰기' => 'E-mail schrijven',
'이메일이 올바르지 않습니다.' => 'Het e-mailadres is ongeldig.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'U hebt de limiet voor formuliermails overschreden.',
'자동등록방지 숫자가 틀렸습니다.' => 'De spambeveiligingscode is onjuist.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'De e-mail kan niet worden verzonden, omdat het e-mailadres ongeldig is.',
'허용되지 않는 파일 확장자입니다.' => 'Deze bestandsextensie is niet toegestaan.',
'메일보내기' => 'E-mail verzenden',
'메일 발송중' => 'E-mail wordt verzonden',
'메일을 정상적으로 발송하였습니다.' => 'De e-mail is verzonden.',

// bbs/good.php
'회원만 가능합니다.' => 'Alleen voor leden.',
'값이 제대로 넘어오지 않았습니다.' => 'Ongeldig verzoek.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'U kunt alleen vanuit het bericht zelf een waardering geven.',
'존재하는 게시판이 아닙니다.' => 'Het forum bestaat niet.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'U kunt uw eigen bericht niet waarderen.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Dit forum gebruikt geen \'Vind ik leuk\'.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Dit forum gebruikt geen \'Vind ik niet leuk\'.',
'추천' => 'Vind ik leuk',
'비추천' => 'Vind ik niet leuk',
'이미 {1} 하신 글 입니다.' => 'U hebt dit bericht al gewaardeerd ({1}).',
'이미 추천 또는 비추천 하신 글 입니다.' => 'U hebt dit bericht al gewaardeerd.',
'이 글을 {1} 하셨습니다.' => 'U hebt dit bericht gewaardeerd: {1}.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'De groep {1} is alleen toegankelijk op mobiel.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Er is geen link.',

// bbs/list.php
'전체' => 'Alle',
'열린 분류' => 'Geopende categorie',
'이전검색' => 'Vorige zoekopdracht',
'다음검색' => 'Volgende zoekopdracht',

// bbs/login.php
'로그인' => 'Inloggen',

// bbs/login_check.php
'로그인 검사' => 'Inlogcontrole',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Gebruikersnaam en wachtwoord mogen niet leeg zijn.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'De gebruikersnaam is niet geregistreerd of het wachtwoord is onjuist.\\nWachtwoorden zijn hoofdlettergevoelig.',
'\\1년 \\2월 \\3일' => '\\3-\\2-\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Uw account is geblokkeerd.\\nDatum: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Dit account is opgezegd en kan niet worden gebruikt.\\nOpgezegd op: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'U moet uw e-mailadres {1} verifiëren voordat u kunt inloggen. Klik op Annuleren om een ander e-mailadres te verifiëren.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Als de map data niet beschrijfbaar is of de schijf vol is,\\nkan het inloggen mislukken. Controleer de schijfruimte en schrijfrechten.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'De URL bevat ongeldige waarden.',
'url에 도메인을 지정할 수 없습니다.' => 'In de URL kan geen domein worden opgegeven.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Identiteitsverificatie is niet beschikbaar. Neem contact op met de beheerder.',
'본인인증을 다시 해주세요.' => 'Voer de identiteitsverificatie opnieuw uit.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Log eerst in.',
'w 값이 제대로 넘어오지 않았습니다.' => 'De waarde w is niet correct doorgegeven.',
'잘못된 접근입니다' => 'Ongeldige toegang',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Geen gebruikersnaam opgegeven. Gebruik de juiste methode.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Er is al een account geregistreerd met de ingevoerde identiteitsgegevens.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'De geverifieerde identiteit komt niet overeen met de ingevoerde ledengegevens. Probeer het opnieuw.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Alleen ingelogde leden hebben toegang.',
'회원 비밀번호 확인' => 'Wachtwoord van lid bevestigen',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Alleen voor leden.',
'최고 관리자는 탈퇴할 수 없습니다' => 'De hoofdbeheerder kan zijn lidmaatschap niet opzeggen.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Uw opzegging kon niet worden verwerkt. Controleer de status van het lid.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} heeft het lidmaatschap opgezegd op {2}.',
'Y년 m월 d일' => 'd-m-Y',

// bbs/memo.php
'내 쪽지함' => 'Mijn berichten',
'kind 변수 값이 올바르지 않습니다.' => 'De waarde kind is ongeldig.',
'받은' => 'Ontvangen',
'보낸' => 'Verzonden',
'정보없음' => 'Geen gegevens',
'아직 읽지 않음' => 'Nog niet gelezen',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Zonder openbaar profiel kunt u anderen geen berichten sturen. U kunt de zichtbaarheid van uw profiel wijzigen via Profiel bewerken.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'De ledengegevens bestaan niet.\\n\\nHet lid heeft mogelijk het lidmaatschap opgezegd.',
'쪽지 보내기' => 'Bericht sturen',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'De gebruikersnaam \'{1}\' bestaat niet (of is niet openbaar), of het lid heeft opgezegd of is geblokkeerd.\\nHet bericht is niet verzonden.',
'해당 회원이 존재하지 않습니다.' => 'Het lid bestaat niet.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'U hebt niet genoeg punten ({1}) om een bericht te sturen.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Uw bericht is naar {1} verzonden.',
'회원아이디 오류 같습니다.' => 'De gebruikersnaam lijkt onjuist te zijn.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Geef de waarde {1} door.',
'{1} 쪽지 보기' => 'Bericht bekijken ({1})',

// bbs/move.php
'이동' => 'Verplaatsen',
'복사' => 'Kopiëren',
'sw 값이 제대로 넘어오지 않았습니다.' => 'De waarde sw is niet correct doorgegeven.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Alleen voor forumbeheerders of hoger.',
'게시물 {1}' => 'Berichten {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Selecteer ten minste één forum ({1}).',
'현재 페이지 게시판 전체' => 'Alle forums op deze pagina',
'게시판' => 'Forums',
'현재' => 'Huidig',
'창닫기' => 'Venster sluiten',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Selecteer ten minste één forum ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1} naar de geselecteerde forums voltooid.',

// bbs/new.php
'새글' => 'Nieuwe berichten',
'그룹' => 'Groep',
'전체그룹' => 'Alle groepen',
'[코] ' => '[Reactie] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Alleen voor de hoofdbeheerder.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Pop-upmelding',
'{1}시간 동안 다시 열람하지 않습니다.' => '{1} uur niet meer tonen.',
'닫기' => 'Sluiten',
'팝업레이어 알림이 없습니다.' => 'Er zijn geen pop-upmeldingen.',

// bbs/password.php
'비밀번호 입력' => 'Wachtwoord invoeren',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'U bent al ingelogd.',
'회원정보 찾기' => 'Accountgegevens opvragen',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Ongeldig e-mailadres.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Er is een e-mail om uw gebruikersnaam en wachtwoord te verifiëren verzonden naar {1}.\\n\\nControleer uw e-mail.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] De door u aangevraagde e-mail voor het opvragen van accountgegevens',
'회원정보 찾기 안내' => 'Accountgegevens opvragen',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) heeft op {3} gevraagd om accountgegevens.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Omdat zelfs beheerders uw wachtwoord niet kunnen zien, maken wij een nieuw wachtwoord voor u aan in plaats van het oude te sturen.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Controleer hieronder het nieuwe wachtwoord en <span style="color:#ff3061">klik daarna op de link <strong>Wachtwoord wijzigen</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Zodra wordt bevestigd dat het wachtwoord is gewijzigd, logt u op de website in met uw gebruikersnaam en het nieuwe wachtwoord.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Wijzig na het inloggen uw wachtwoord via Profiel bewerken.',
'회원아이디' => 'Gebruikersnaam',
'변경될 비밀번호' => 'Nieuw wachtwoord',
'비밀번호 변경' => 'Wachtwoord wijzigen',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Uw wachtwoord is gewijzigd.\\n\\nLog in met uw gebruikersnaam en het nieuwe wachtwoord.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Gebruikersnaam/wachtwoord opvragen via identiteitsverificatie is niet beschikbaar. Neem contact op met de beheerder.',
'패스워드 변경' => 'Wachtwoord wijzigen',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Er is geen wachtwoord verzonden.',
'비밀번호가 일치하지 않습니다.' => 'De wachtwoorden komen niet overeen.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Alleen leden kunnen dit bekijken.',
'{1} 님의 포인트 내역' => 'Puntenoverzicht van {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'De waarde po_id is niet correct doorgegeven.',
'기타의견이 비활성화되어 있습니다.' => 'Andere meningen zijn uitgeschakeld.',
'권한이 없습니다.' => 'Geen toestemming.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'De peiling bestaat niet.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Alleen leden van niveau {1} of hoger kunnen de resultaten bekijken.',
'설문조사 결과' => 'Peilingresultaten',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Alleen leden van niveau {1} of hoger kunnen stemmen.',
'항목을 선택하세요.' => 'Selecteer een optie.',
'{1}에 이미 참여하셨습니다.' => 'U hebt al deelgenomen aan {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Zonder openbaar profiel kunt u de profielen van anderen niet bekijken.\\n\\nU kunt de zichtbaarheid van uw profiel wijzigen via Profiel bewerken.',
'{1}님의 자기소개' => 'Over {1}',
'소개 내용이 없습니다.' => 'Geen introductie.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Als u lid bent, log dan eerst in.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Selecteer ten minste één bericht om te verwijderen.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Als u lid bent, log dan in en probeer het opnieuw.',
'열린 분류 ' => 'Geopende categorie ',
'{1}이 존재하지 않습니다.' => '{1} bestaat niet.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Het bericht bestaat niet.\\nHet is verwijderd of het is niet uw bericht.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Vragen die al beantwoord zijn, kunnen niet worden bewerkt.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'U hebt geen toestemming om dit bericht te bewerken.\\n\\nGebruik de juiste methode.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Stel categorieën in bij de instellingen voor 1:1-vragen.',
'{1} 바이트' => '{1} bytes',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Selecteer een geldige categorie.',
'이메일을 입력하세요.' => 'Voer uw e-mailadres in.',
'<strong>제목</strong>을 입력하세요.' => 'Voer een <strong>onderwerp</strong> in.',
'<strong>내용</strong>을 입력하세요.' => 'Voer de <strong>inhoud</strong> in.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'De inhoud bevat veel ongeldige code.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'De bestands- of inhoudsgrootte overschrijdt de serverlimiet.\\npost_max_size={1} , upload_max_filesize={2}\\nNeem contact op met de forumbeheerder of serverbeheerder.',
'답변은 관리자만 등록할 수 있습니다.' => 'Alleen beheerders kunnen antwoorden plaatsen.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'De vraag bestaat niet, dus er kan geen antwoord worden geplaatst.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Op een antwoord kan niet opnieuw worden geantwoord.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Upload maximaal 2 bijlagen.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => '"{1}" kan niet worden geüpload, omdat het de serverlimiet ({2}) overschrijdt.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => '"{1}" is niet correct geüpload.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => '"{1}" ({2} bytes) is niet geüpload, omdat het de forumlimiet ({3} bytes) overschrijdt.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => '"{1}" kan niet veilig worden opgeslagen. Controleer de willekeurigheidsbron en het opslagpad van de server.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2}: melding van antwoord',

// bbs/register.php
'회원가입약관' => 'Gebruiksvoorwaarden',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'E-mailadres voor verificatie wijzigen',
'이미 메일인증 하신 회원입니다.' => 'Uw e-mailadres is al geverifieerd.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Als u de verificatie-e-mail niet hebt ontvangen, kunt u het e-mailadres in uw account wijzigen.',
'사이트 이용정보 입력' => 'Accountgegevens',
'필수' => 'Verplicht',
'자동등록방지' => 'Spambeveiliging',
'인증메일변경' => 'Verificatie-e-mail wijzigen',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => '{1} is al in gebruik.\\n\\nVoer een ander e-mailadres in.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Verificatie-e-mail',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'De verificatie-e-mail is opnieuw verzonden naar {1}.\\n\\nControleer {1} over enkele ogenblikken.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'U moet akkoord gaan met de gebruiksvoorwaarden om te registreren.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'U moet akkoord gaan met het verzamelen en gebruiken van persoonsgegevens om te registreren.',
'회원 가입' => 'Registreren',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Bewerk de gegevens van de beheerder in het beheerpaneel.',
'로그인 후 이용하여 주십시오.' => 'Log eerst in.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'De verzonden gegevens komen niet overeen met het ingelogde lid.',
'비밀번호를 입력해 주세요.' => 'Voer uw wachtwoord in.',
'회원 정보 수정' => 'Profiel bewerken',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Deze actie is niet beschikbaar in de demo.',
'이름을 올바르게 입력해 주십시오.' => 'Voer een geldige naam in.',
'닉네임을 올바르게 입력해 주십시오.' => 'Voer een geldige bijnaam in.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Voor registratie is identiteitsverificatie vereist.',
'추천인이 존재하지 않습니다.' => 'De aanbrenger bestaat niet.',
'본인을 추천할 수 없습니다.' => 'U kunt uzelf niet als aanbrenger opgeven.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Welkom bij ons',
'로그인 되어 있지 않습니다.' => 'U bent niet ingelogd.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'De verzonden gegevens komen niet overeen met het ingelogde account en kunnen niet worden gewijzigd.\\nAls u een ongeoorloofde methode gebruikt, stop daar dan onmiddellijk mee.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Upload een ledenpictogram van maximaal {1} bytes.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} is geen afbeeldingsbestand.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Upload een ledenafbeelding van maximaal {1} bytes.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} is geen gif/jpg-bestand.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Uw profiel is bijgewerkt.\\n\\nUw e-mailadres is gewijzigd, dus u moet het opnieuw verifiëren.',
'회원정보수정' => 'Profiel bewerken',
'회원 정보가 수정 되었습니다.' => 'Uw profiel is bijgewerkt.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Welkomstmail',
'회원가입을 축하합니다.' => 'Welkom!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Hartelijk welkom, <b>{1}</b>, en bedankt voor uw registratie.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Wij doen ons uiterste best om u goed van dienst te zijn.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klik hieronder op <strong>E-mail verifiëren</strong> om uw registratie te voltooien.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'De verificatielink is {1} minuten na verzending geldig.',
'감사합니다.' => 'Bedankt.',
'메일인증' => 'E-mail verifiëren',
'사이트바로가기' => 'Naar de website',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Verificatie-e-mail voor leden',
'회원 인증 메일입니다.' => 'Dit is een verificatie-e-mail voor leden.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Het e-mailadres van <b>{1}</b> is gewijzigd.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klik op het onderstaande adres om de verificatie te voltooien.',
'{1} 로그인' => '{1} inloggen',

// bbs/register_result.php
'회원가입 완료' => 'Registratie voltooid',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS is alleen beschikbaar voor forums die gasten mogen lezen.',
'RSS 보기가 금지되어 있습니다.' => 'RSS is uitgeschakeld.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Bewaarde berichten van {1}',
'[게시판 없음]' => '[Geen forum]',
'[글 없음]' => '[Geen bericht]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Alleen voor leden.',
'로그인하기' => 'Inloggen',
'올바른 방법으로 사용해 주십시오.' => 'Gebruik de juiste methode.',
'코멘트는 스크랩 할 수 없습니다.' => 'Reacties kunnen niet worden bewaard.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'U hebt dit bericht al bewaard.

Wilt u uw bewaarde berichten nu bekijken?',
'이미 스크랩하신 글 입니다.' => 'U hebt dit bericht al bewaard.',
'스크랩 확인하기' => 'Bewaarde berichten bekijken',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Het bericht dat u wilt bewaren bestaat niet.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'U kunt niet zo snel achter elkaar berichten plaatsen.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Dit bericht is bewaard.

Wilt u uw bewaarde berichten nu bekijken?',
'이 글을 스크랩 하였습니다.' => 'Dit bericht is bewaard.',

// bbs/search.php
'전체검색 결과' => 'Zoekresultaten',
'[비밀글 입니다.]' => '[Dit is een privébericht.]',
'게시판 그룹선택' => 'Forumgroep selecteren',
'전체 분류' => 'Alle categorieën',

// bbs/view_comment.php
'비밀글 입니다.' => 'Dit is een privébericht.',
'댓글내용 확인' => 'Reactie bekijken',

// bbs/view_image.php
'이미지 크게보기' => 'Afbeelding vergroten',
'이미지 확장자가 아닙니다.' => 'Geen extensie van een afbeeldingsbestand.',
'이미지 파일이 아닙니다.' => 'Geen afbeeldingsbestand.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Er is geen bo_table-waarde doorgegeven.\\nGeef deze door zoals write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Het bericht bestaat niet.\\nHet is mogelijk verwijderd of verplaatst.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Bij het schrijven van een nieuw bericht wordt de waarde $wr_id niet gebruikt.',
'글을 쓸 권한이 없습니다.' => 'U hebt geen toestemming om te schrijven.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om te schrijven.\\nAls u lid bent, log dan in en probeer het opnieuw.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'U hebt niet genoeg punten ({1}) om een bericht te schrijven ({2}).\\n\\nVerzamel meer punten en probeer het opnieuw.',
'글쓰기' => 'Schrijven',
'글을 수정할 권한이 없습니다.' => 'U hebt geen toestemming om dit bericht te bewerken.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om dit bericht te bewerken.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Dit bericht kan niet worden bewerkt, omdat er antwoorden op zijn.\\n\\nBerichten met antwoorden kunnen niet worden bewerkt.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Dit bericht kan niet worden bewerkt, omdat er reacties op zijn.\\n\\nBerichten met {1} of meer reacties kunnen niet worden bewerkt.',
'글수정' => 'Bericht bewerken',
'글을 답변할 권한이 없습니다.' => 'U hebt geen toestemming om te antwoorden.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om een antwoord te schrijven.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'U hebt niet genoeg punten ({1}) om te antwoorden ({2}).\\n\\nVerzamel meer punten en probeer het opnieuw.',
'공지에는 답변 할 수 없습니다.' => 'Op een mededeling kan niet worden geantwoord.',
'정상적인 접근이 아닙니다.' => 'Ongeldige toegang.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Alleen de auteur of een beheerder kan op een privébericht antwoorden.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Op privéberichten van gasten kan niet worden geantwoord.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'U kunt niet verder antwoorden.\\n\\nAntwoorden zijn beperkt tot 10 niveaus.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'U kunt niet verder antwoorden.\\n\\nAntwoorden zijn beperkt tot 26.',
'글답변' => 'Beantwoorden',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Geen toegang.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'U hebt geen toestemming om te schrijven.\\n\\nNeem bij vragen contact op met de beheerder.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Op dit forum kunnen alleen leden met identiteitsverificatie schrijven.\\n\\nAls u lid bent, log dan in en probeer het opnieuw.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Op dit forum kunnen alleen leden met identiteitsverificatie schrijven.\\n\\nVoer de identiteitsverificatie uit via Profiel bewerken.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Naam is verplicht.',
'댓글을 쓸 권한이 없습니다.' => 'U hebt geen toestemming om te reageren.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Het bericht bestaat niet.\\nHet is mogelijk verwijderd of verplaatst.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'U hebt niet genoeg punten ({1}) om te reageren ({2}).\\n\\nVerzamel meer punten en probeer het opnieuw.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Er is geen reactie om op te antwoorden.\\n\\nDeze is mogelijk verwijderd terwijl u antwoordde.',
'댓글을 등록할 수 없습니다.' => 'De reactie kan niet worden geplaatst.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'U kunt niet verder antwoorden.\\n\\nAntwoorden zijn beperkt tot 5 niveaus.',
'원글
{1}


댓글
{2}' => 'Oorspronkelijk bericht
{1}


Reactie
{2}',
'입력' => 'Nieuw',
'수정' => 'Bewerken',
'답변' => 'Beantwoorden',
'댓글 ' => 'Reactie ',
'댓글 수정' => 'Reactie bewerken',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nieuw bericht op het forum {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Deze reactie is geschreven door een lid met een hoger niveau dan de groepsbeheerder en kan niet worden bewerkt.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'U kunt de reactie niet bewerken, omdat het forum niet tot een groep behoort die u beheert.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Deze reactie is geschreven door een lid met een hoger niveau dan de forumbeheerder en kan niet worden bewerkt.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'U kunt de reactie niet bewerken, omdat u dit forum niet beheert.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'U kunt dit niet bewerken, omdat het niet uw bericht is.',
'댓글을 수정할 권한이 없습니다.' => 'U hebt geen toestemming om deze reactie te bewerken.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Deze reactie kan niet worden bewerkt, omdat er antwoorden op zijn.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'De foruminformatie is ongeldig.',

// bbs/write_update.php
'게시글 저장' => 'Bericht opslaan',
'<strong>분류</strong>를 선택하세요.' => 'Selecteer een <strong>categorie</strong>.',
'분류를 올바르게 입력하세요.' => 'Voer een geldige categorie in.',
'올바른 방법으로 수정하여 주십시오.' => 'Bewerk via de juiste methode.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'U kunt dit niet bewerken, omdat het forum niet tot een groep behoort die u beheert.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'U kunt geen berichten bewerken van leden met een hoger niveau dan het uwe.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'U kunt dit niet bewerken, omdat u dit forum niet beheert.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Bevestig uw wachtwoord en bewerk opnieuw.',
'로그인 후 수정하세요.' => 'Log in om te bewerken.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Dit forum gebruikt geen privéberichten.',
'관리자만 공지할 수 있습니다.' => 'Alleen beheerders kunnen mededelingen plaatsen.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'U kunt niet verder antwoorden.\\nAntwoorden zijn beperkt tot 10 niveaus.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'U kunt niet verder antwoorden.\\nAntwoorden zijn beperkt tot 26.',
'제목을 입력하여 주십시오.' => 'Voer een onderwerp in.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Verwijder bestaande bestanden en upload maximaal {1} bijlagen.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Upload maximaal {1} bijlagen.',
'코멘트' => 'Reactie',
'코멘트 수정' => 'Reactie bewerken',

// bbs/write_update_mail.php
'{1} 메일' => '{1} e-mail',
'작성자 {1}' => 'Auteur: {1}',
'사이트에서 게시물 확인하기' => 'Bericht op de website bekijken',

// common.php
'접근이 가능하지 않습니다.' => 'Toegang is niet mogelijk.',
'접근 불가합니다.' => 'Geen toegang.',

// head.php
'본문 바로가기' => 'Naar inhoud',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Winkel',
'접속자' => 'Bezoekers',
'사이트 내 전체검색' => 'Site doorzoeken',
'검색어 필수' => 'Zoekterm (verplicht)',
'검색어를 입력해주세요' => 'Voer een zoekterm in',
'검색' => 'Zoeken',
'검색어는 두글자 이상 입력하십시오.' => 'Voer ten minste twee tekens in.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Voor sneller zoeken is slechts één spatie in de zoekterm toegestaan.',
'정보수정' => 'Profiel bewerken',
'로그아웃' => 'Uitloggen',
'회원가입' => 'Registreren',
'메인메뉴' => 'Hoofdmenu',
'전체메뉴' => 'Alle menu\'s',
'전체메뉴열기' => 'Alle menu\'s openen',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'Het menu wordt voorbereid.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} ingelogd ',

// lib/common.lib.php
'처음' => 'Eerste',
'이전' => 'Vorige',
'페이지' => 'Pagina',
'열린' => 'Huidige',
'다음' => 'Volgende',
'맨끝' => 'Laatste',
'답변글' => 'Antwoord',
'{1} 자기소개' => 'Over {1}',
'{1} 이름으로 검색' => 'Zoeken op naam {1}',
'쪽지보내기' => 'Bericht sturen',
'홈페이지' => 'Website',
'자기소개' => 'Over mij',
'아이디로 검색' => 'Zoeken op gebruikersnaam',
'이름으로 검색' => 'Zoeken op naam',
'전체게시물' => 'Alle berichten',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'De MySQL-gegevens voor Host, User, Password of DB zijn onjuist.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL is niet geïnstalleerd, dus de functie mysql_connect is niet beschikbaar.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'De MySQL-gegevens voor Host, User of Password zijn onjuist.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Er is een fout opgetreden bij de databaseverwerking.',
'yoil|일' => 'zo',
'yoil|월' => 'ma',
'yoil|화' => 'di',
'yoil|수' => 'wo',
'yoil|목' => 'do',
'yoil|금' => 'vr',
'yoil|토' => 'za',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Het token is verlopen. Vernieuw de pagina.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Het websiteadres voor e-mailverificatie is niet ingesteld. Neem contact op met de websitebeheerder.',
'올바른 경로로 접근해 주십시오.' => 'Gebruik de juiste route.',
'PC 전용 게시판입니다.' => 'Dit forum is alleen voor pc.',
'모바일 전용 게시판입니다.' => 'Dit forum is alleen voor mobiel.',
'간편인증' => 'Eenvoudige verificatie',
'휴대폰' => 'Mobiel',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'U hebt vandaag {2} keer identiteitsverificatie via {1} gebruikt en kunt deze niet meer gebruiken.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Niet beschikbaar, omdat de functie exec niet kan worden uitgevoerd.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Het aantal door het formulier verzonden variabelen overschrijdt max_input_vars.\\nSommige waarden kunnen verloren gaan bij het opslaan in de DB.\\n\\nWijzig de waarde max_input_vars in php.ini op de server om dit op te lossen.',
'url에 타 도메인을 지정할 수 없습니다.' => 'In de URL kan geen ander domein worden opgegeven.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Toegang geweigerd, omdat de URL gebruikersgegevens bevat.',
'bot 으로 판단되어 중지합니다.' => 'Gestopt, omdat u als bot bent herkend.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Voer de inhoud in.',

// lib/get_data.lib.php
'제목' => 'Onderwerp',
'내용' => 'Inhoud',
'제목+내용' => 'Onderwerp+inhoud',
'글쓴이' => 'Auteur',
'글쓴이(코)' => 'Auteur (reacties)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Voer een gebruikersnaam in.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'De gebruikersnaam mag alleen letters, cijfers en _ bevatten.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'De gebruikersnaam moet ten minste 3 tekens lang zijn.',
'이미 사용중인 회원아이디 입니다.' => 'Deze gebruikersnaam is al in gebruik.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Deze gebruikersnaam is een gereserveerd woord en kan niet worden gebruikt.',
'닉네임을 입력해 주십시오.' => 'Voer een bijnaam in.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'De bijnaam mag alleen Koreaanse tekens, Latijnse letters en cijfers bevatten, zonder spaties.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'De bijnaam moet ten minste 2 Koreaanse of 4 Latijnse tekens lang zijn.',
'이미 존재하는 닉네임입니다.' => 'Deze bijnaam bestaat al.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Deze bijnaam is een gereserveerd woord en kan niet worden gebruikt.',
'E-mail 주소를 입력해 주십시오.' => 'Voer een e-mailadres in.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Het e-mailadres is ongeldig.',
'{1} 메일은 사용할 수 없습니다.' => 'E-mailadressen van {1} kunnen niet worden gebruikt.',
'이미 사용중인 E-mail 주소입니다.' => 'Dit e-mailadres is al in gebruik.',
'이름을 입력해 주십시오.' => 'Voer uw naam in.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'De naam mag alleen Koreaanse tekens bevatten, zonder spaties.',
'휴대폰번호를 입력해 주십시오.' => 'Voer uw mobiele nummer in.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Voer een geldig mobiel nummer in.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Dit mobiele nummer is al in gebruik. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Ongeldig verzoek.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Ongeldige verificatie. Gebruik de juiste methode.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Er is geen ledenaccount gevonden bij de geverifieerde gegevens.',
'코드 : {1}  {2}' => 'Code: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultaat eenvoudige verificatie via KG Inicis',
'본인인증이 완료되었습니다.' => 'De identiteitsverificatie is voltooid.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Eenvoudige verificatie via KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Dit account is al geverifieerd op naam van een andere persoon.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Er is al een account geregistreerd met de ingevoerde identiteitsgegevens.\\nGebruikersnaam: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Cijfers beluisteren',
'새로고침' => 'Vernieuwen',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Voer de spambeveiligingscijfers in de juiste volgorde in.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultaat verificatie via mobiel',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risico op manipulatie van dn_hash (controleer of {1} uitvoerrechten heeft.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'U hebt de identiteitsverificatie via mobiel geannuleerd.',
'up_hash 변조 위험있음' => 'Risico op manipulatie van up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'De sitecode voor KCP-identiteitsverificatie via mobiel ontbreekt. Voer de KCP-sitecode in bij Beheer > Basisconfiguratie.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Er is al een account geregistreerd met de ingevoerde identiteitsgegevens.\\nGebruikersnaam: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Geverifieerd met uw eigen mobiele nummer.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Geen antwoord van de identiteitsverificatie. Begin opnieuw.',
'코드 : {1} {2}' => 'Code: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'De sessie voor identiteitsverificatie is verlopen. Begin opnieuw.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Ophalen van het verificatieresultaat mislukt ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'De module KCP-identiteitsverificatie via mobiel V2 vereist PHP 7.0 of hoger.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'De PHP-extensies die nodig zijn voor de module KCP-identiteitsverificatie via mobiel V2 (openssl/curl/hash_pbkdf2) zijn niet ingeschakeld.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'De sitecode of ENC_KEY voor KCP-identiteitsverificatie via mobiel V2 is niet ingesteld.\\nVoer deze in bij Beheer > Basisconfiguratie.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registratie van de verificatietransactie mislukt.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verificatie via mobiel',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'De aanvraaggegevens voor KCP-transactieregistratie kunnen niet worden aangemaakt.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'De aanvraaggegevens voor KCP-transactieregistratie kunnen niet worden versleuteld.',
'KCP 거래등록 API 응답이 없습니다.' => 'Geen antwoord van de KCP-API voor transactieregistratie.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Het antwoord van de KCP-API voor transactieregistratie kan niet worden verwerkt.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'De aanvraaggegevens voor het KCP-verificatieresultaat kunnen niet worden aangemaakt.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Geen antwoord van de KCP-API voor het verificatieresultaat.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Het antwoord van de KCP-API voor het verificatieresultaat kan niet worden verwerkt.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'De gegevens van het KCP-verificatieresultaat kunnen niet worden ontsleuteld.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'De ontsleutelde KCP-verificatiegegevens kunnen niet worden verwerkt.',
'cURL 초기화에 실패했습니다.' => 'Initialisatie van cURL mislukt.',
'KCP API 통신 실패: {1}' => 'KCP-API-communicatie mislukt: {1}',
'KCP API HTTP 오류: {1}' => 'KCP-API HTTP-fout: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Er is een fout opgetreden bij de identiteitsverificatie via mobiel. Foutcode: {1}\\n\\nNeem voor vragen contact op met het klantencentrum van Korea Credit Bureau (KCB) via 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Controleer de ingevoerde waarden',
'KCB 휴대폰 본인확인' => 'KCB-identiteitsverificatie via mobiel',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Er is een fout opgetreden bij de i-PIN-identiteitsverificatie. Foutcode: {1}\\n\\nNeem voor vragen contact op met het klantencentrum van Korea Credit Bureau (KCB) via 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Er is een fout opgetreden bij de i-PIN-identiteitsverificatie. (Geen CI-gegevens) Foutcode: {1}\\n\\nNeem voor vragen contact op met het klantencentrum van Korea Credit Bureau (KCB) via 02-708-1000.',
'KCB 아이핀 본인확인' => 'KCB-i-PIN-identiteitsverificatie',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Selecteer in de basisconfiguratie de KCB-dienst voor identiteitsverificatie via mobiel.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Voer in de basisconfiguratie het KCB-lid-ID in.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Het uitvoerbare modulebestand bestaat niet.\\n\\nHet bestand {1} moet in {2}/{3}/bin staan.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Het uitvoerbare modulebestand heeft geen uitvoerrechten.\\n\\nGeef uitvoerrechten, bijvoorbeeld met chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Het uitvoerbare modulebestand heeft geen uitvoerrechten.\\n\\nControleer of IUSER uitvoerrechten heeft voor cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Selecteer in de basisconfiguratie de KCB-dienst voor i-PIN-identiteitsverificatie.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Maak een map key aan in {1}/{2}.\\n\\nGeef daarna schrijfrechten, bijvoorbeeld: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Wijzig de rechten van de map {1}/{2}/key naar 705.\\nchmod 705 key of chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Wijzig de rechten van de map {1}/{2}/key naar 707.\\n\\nchmod 707 key of chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter-callback',
'트위터에 승인이 되었습니다.' => 'Geautoriseerd bij Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Niet geautoriseerd bij Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Details bekijken',
'페이스북으로 공유' => 'Delen op Facebook',
'페이스북 공유' => 'Delen op Facebook',
'트위터로  공유' => 'Delen op Twitter',
'트위터 공유' => 'Delen op Twitter',
'카카오톡으로 보내기' => 'Versturen via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Ook op Facebook geplaatst',
'트위터에도 등록됨' => 'Ook op Twitter geplaatst',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Ook op Twitter plaatsen',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Inloggen via sociale media - {1}',
'잠시후에 다시 시도해 주세요.' => 'Probeer het later opnieuw.',
'홈으로' => 'Home',
'이 페이지 닫기' => 'Deze pagina sluiten',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'U kunt zich niet opnieuw registreren, omdat er al een account is gekoppeld aan of geregistreerd met deze {1}-ID. Als u lid bent, log dan in en koppel het account via Profiel bewerken.',
'지정되지 않은 오류입니다.' => 'Niet-gespecificeerde fout.',
'설정 오류입니다.' => 'Configuratiefout.',
'해당 provider 설정 오류입니다.' => 'Configuratiefout van de provider.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Onbekende of uitgeschakelde provider.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'U hebt geen toegang tot deze dienst.',
'인증이 실패되었습니다.. ' => 'De authenticatie is mislukt. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'De gebruiker heeft de authenticatie geannuleerd of de provider heeft de verbinding geweigerd.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Het opvragen van het gebruikersprofiel is mislukt. Mogelijk is de gebruiker niet met de dienst verbonden. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'In dat geval moet u opnieuw authenticatie aanvragen.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'De gebruiker is niet met de dienst verbonden.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'De dienst ondersteunt deze functie niet.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'U bent al ingelogd of het verzoek is ongeldig.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Er is al een ID gekoppeld of het verzoek is ongeldig.',
'소셜 데이터 오류' => 'Fout in sociale-mediagegevens',
'SNS 사용자 인증에 실패하였습니다.' => 'Authenticatie van de SNS-gebruiker is mislukt.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Er is al een {1}-ID aan dit account gekoppeld. Ontkoppel deze en probeer het opnieuw.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Verbinding maken met {1}. Een ogenblik geduld.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Inloggen via sociale media wordt niet gebruikt.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Inloggen via sociale media is uitgeschakeld.',
'새창 옵션이 비활성화 되어 있습니다.' => 'De optie voor een nieuw venster is uitgeschakeld.',
'서비스 이름이 넘어오지 않았습니다.' => 'De naam van de dienst is niet doorgegeven.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Inloggen via sociale media wordt niet gebruikt.',
'이미 회원가입 하였습니다.' => 'U bent al geregistreerd.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Alleen gebruikers die via sociale media zijn ingelogd hebben toegang.',
'소셜 회원 가입 - {1}' => 'Registreren via sociale media - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Alleen gebruikers die via sociale media zijn ingelogd hebben toegang.',
'이미 등록된 회원이 존재합니다.' => 'Er is al een lid geregistreerd.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'De geverifieerde identiteit komt niet overeen met uw persoonsgegevens. Probeer het opnieuw.',
'회원 가입 오류!' => 'Registratiefout!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Geen lid of de waarde is niet doorgegeven.',
'권한이 없거나 잘못된 요청입니다.' => 'Geen toestemming of ongeldig verzoek.',
);
