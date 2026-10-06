<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (de). 틀은 php lang/build.php de 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Bitte installieren Sie zuerst den Shop.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Zu viele Anfragen. Bitte versuchen Sie es später erneut.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Der Benutzername des Werbers darf nur Buchstaben, Zahlen und _ enthalten.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Der eingegebene Werber ist kein vorhandener Benutzername.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Bitte verwenden Sie den vorgesehenen Weg.',

// bbs/alert.php
'오류안내 페이지' => 'Fehlerseite',
'결과안내 페이지' => 'Ergebnisseite',
'다음 항목에 오류가 있습니다.' => 'Die folgenden Angaben sind fehlerhaft.',
'다음 내용을 확인해 주세요.' => 'Bitte prüfen Sie Folgendes.',
'돌아가기' => 'Zurück',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Bitte schließen Sie das neue Fenster und versuchen Sie es erneut.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Bitte schließen Sie das neue Fenster und fahren Sie fort.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Dieses Forum existiert nicht.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Es wurde kein bo_table-Wert übergeben.\\n\\nÜbergeben Sie ihn z. B. als board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Der Beitrag existiert nicht.\\n\\nEr wurde möglicherweise gelöscht oder verschoben.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gäste haben keinen Zugriff auf dieses Forum.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Sie haben keine Berechtigung, Beiträge zu lesen.\\n\\nBei Fragen wenden Sie sich bitte an den Administrator.',
'글을 읽을 권한이 없습니다.' => 'Sie haben keine Berechtigung, diesen Beitrag zu lesen.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung, diesen Beitrag zu lesen.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'In diesem Forum können nur Mitglieder mit Identitätsprüfung Beiträge lesen.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'In diesem Forum können nur Mitglieder mit Identitätsprüfung Beiträge lesen.\\n\\nBitte führen Sie die Identitätsprüfung unter „Profil bearbeiten“ durch.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'In diesem Forum können nur als volljährig verifizierte Mitglieder Beiträge lesen.\\n\\nWenn Sie volljährig sind und trotzdem nicht lesen können, führen Sie die Identitätsprüfung unter „Profil bearbeiten“ bitte erneut durch.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Sie haben nicht genügend Punkte ({1}), um diesen Beitrag zu lesen ({2}).\\n\\nBitte sammeln Sie weitere Punkte und versuchen Sie es erneut.',
'목록을 볼 권한이 없습니다.' => 'Sie haben keine Berechtigung, die Liste anzusehen.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung, die Liste anzusehen.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'{1} {2} 페이지' => '{1} – Seite {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Bitte wählen Sie mindestens einen Eintrag für {1} aus.',
'올바른 방법으로 이용해 주세요.' => 'Bitte verwenden Sie den vorgesehenen Weg.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Bitte prüfen Sie Folgendes.',
'확인' => 'OK',
'취소' => 'Abbrechen',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Bitte prüfen Sie zuerst im Adminbereich Forenverwaltung -> Inhaltsverwaltung.',
'등록된 내용이 없습니다.' => 'Es sind keine Inhalte vorhanden.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} existiert nicht.</p>',

// bbs/current_connect.php
'현재접속자' => 'Aktuelle Besucher',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Löschen wegen eines Token-Fehlers nicht möglich.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Sie können nicht löschen, da das Forum nicht zu einer von Ihnen verwalteten Gruppe gehört.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Beiträge von Mitgliedern mit höherer Stufe als Ihrer können Sie nicht löschen.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Sie können nicht löschen, da Sie dieses Forum nicht verwalten.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Sie können nicht löschen, da es nicht Ihr Beitrag ist.',
'로그인 후 삭제하세요.' => 'Bitte melden Sie sich zum Löschen an.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Löschen nicht möglich: Das Passwort ist falsch.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Dieser Beitrag kann nicht gelöscht werden, da Antworten darauf existieren.\\n\\nBitte löschen Sie zuerst die Antworten.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Dieser Beitrag kann nicht gelöscht werden, da Kommentare dazu existieren.\\n\\nBeiträge mit {1} oder mehr Kommentaren können nicht gelöscht werden.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Kein Zugriff.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Der Kommentar existiert nicht oder ist kein Kommentar.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Dieser Kommentar stammt von einem Mitglied mit höherer Stufe als der Gruppenadministrator und kann nicht gelöscht werden.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Sie können den Kommentar nicht löschen, da das Forum nicht zu einer von Ihnen verwalteten Gruppe gehört.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Dieser Kommentar stammt von einem Mitglied mit höherer Stufe als der Forenadministrator und kann nicht gelöscht werden.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Sie können den Kommentar nicht löschen, da Sie dieses Forum nicht verwalten.',
'비밀번호가 틀립니다.' => 'Das Passwort ist falsch.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Dieser Kommentar kann nicht gelöscht werden, da Antworten darauf existieren.',

// bbs/download.php
'잘못된 접근입니다.' => 'Ungültiger Zugriff.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung zum Herunterladen.\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'파일 정보가 존재하지 않습니다.' => 'Die Dateiinformationen existieren nicht.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Das Token ist abgelaufen oder ungültig.\\nBitte laden Sie die Seite neu und versuchen Sie es erneut.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Beim Herunterladen von {1} werden {2} Punkte abgezogen.\\nPunkte werden pro Beitrag nur einmal abgezogen, auch wenn Sie später erneut herunterladen.\\nMöchten Sie trotzdem herunterladen?',
'다운로드 권한이 없습니다.' => 'Sie haben keine Berechtigung zum Herunterladen.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'파일이 존재하지 않습니다.' => 'Die Datei existiert nicht.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Sie haben nicht genügend Punkte ({1}) zum Herunterladen ({2}).\\n\\nBitte sammeln Sie weitere Punkte und versuchen Sie es erneut.',
'다운로드 &gt; {1}' => 'Download &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Das Mitglied existiert nicht.',
'탈퇴 또는 차단된 회원입니다.' => 'Dieses Mitglied ist ausgetreten oder gesperrt.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Diese E-Mail-Bestätigung wurde bereits verarbeitet oder ist ungültig.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Ihre E-Mail-Adresse wurde bestätigt.\\n\\nSie können sich jetzt mit dem Benutzernamen {1} anmelden.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Der Bestätigungslink ist abgelaufen. Bitte fordern Sie eine neue Bestätigungs-E-Mail an.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Die Anfrage zur E-Mail-Bestätigung ist ungültig.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Es wurden ungültige Werte übermittelt.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Sie haben Info-E-Mails abbestellt.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Bitte prüfen Sie zuerst im Adminbereich Forenverwaltung -> FAQ-Verwaltung.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'E-Mails können nur versendet werden, wenn in den Einstellungen „E-Mail-Versand verwenden“ aktiviert ist.\\n\\nBitte wenden Sie sich an den Administrator.',
'회원만 이용하실 수 있습니다.' => 'Nur für Mitglieder.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Ohne öffentliches Profil können Sie anderen keine E-Mails senden.\\n\\nDie Profilsichtbarkeit können Sie unter „Profil bearbeiten“ ändern.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Die Mitgliedsdaten existieren nicht.\\n\\nDas Mitglied ist möglicherweise ausgetreten.',
'정보공개를 하지 않았습니다.' => 'Das Profil ist nicht öffentlich.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Pro Sitzung kann nur eine begrenzte Anzahl E-Mails gesendet werden.\\n\\nUm weitere E-Mails zu senden, melden Sie sich bitte erneut an oder besuchen Sie die Seite erneut.',
'메일 쓰기' => 'E-Mail schreiben',
'이메일이 올바르지 않습니다.' => 'Die E-Mail-Adresse ist ungültig.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Sie haben das Limit für Formular-E-Mails überschritten.',
'자동등록방지 숫자가 틀렸습니다.' => 'Der Spamschutz-Code ist falsch.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Die E-Mail kann nicht gesendet werden, da die E-Mail-Adresse ungültig ist.',
'허용되지 않는 파일 확장자입니다.' => 'Diese Dateierweiterung ist nicht erlaubt.',
'메일보내기' => 'E-Mail senden',
'메일 발송중' => 'E-Mail wird gesendet',
'메일을 정상적으로 발송하였습니다.' => 'Die E-Mail wurde gesendet.',

// bbs/good.php
'회원만 가능합니다.' => 'Nur für Mitglieder.',
'값이 제대로 넘어오지 않았습니다.' => 'Ungültige Anfrage.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Sie können nur im Beitrag selbst bewerten.',
'존재하는 게시판이 아닙니다.' => 'Das Forum existiert nicht.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Sie können Ihren eigenen Beitrag nicht bewerten.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Dieses Forum verwendet keine „Gefällt mir“-Funktion.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Dieses Forum verwendet keine „Gefällt mir nicht“-Funktion.',
'추천' => 'Gefällt mir',
'비추천' => 'Gefällt mir nicht',
'이미 {1} 하신 글 입니다.' => 'Sie haben diesen Beitrag bereits bewertet ({1}).',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Sie haben diesen Beitrag bereits bewertet.',
'이 글을 {1} 하셨습니다.' => 'Sie haben diesen Beitrag bewertet: {1}.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Die Gruppe {1} ist nur mobil zugänglich.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Kein Link vorhanden.',

// bbs/list.php
'전체' => 'Alle',
'열린 분류' => 'Geöffnete Kategorie',
'이전검색' => 'Vorherige Suche',
'다음검색' => 'Nächste Suche',

// bbs/login.php
'로그인' => 'Anmelden',

// bbs/login_check.php
'로그인 검사' => 'Anmeldeprüfung',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Benutzername und Passwort dürfen nicht leer sein.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Der Benutzername ist nicht registriert oder das Passwort ist falsch.\\nBeim Passwort wird zwischen Groß- und Kleinschreibung unterschieden.',
'\\1년 \\2월 \\3일' => '\\3.\\2.\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Ihr Konto wurde gesperrt.\\nDatum: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Dieses Konto wurde gelöscht und kann nicht verwendet werden.\\nGelöscht am: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Sie müssen Ihre E-Mail-Adresse {1} bestätigen, bevor Sie sich anmelden können. Um eine andere E-Mail-Adresse zu bestätigen, klicken Sie auf „Abbrechen“.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Wenn der data-Ordner nicht beschreibbar oder der Speicher voll ist,\\nschlägt die Anmeldung möglicherweise fehl. Bitte prüfen Sie Speicherplatz und Schreibrechte.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'Die URL enthält ungültige Werte.',
'url에 도메인을 지정할 수 없습니다.' => 'In der URL darf keine Domain angegeben werden.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Die Identitätsprüfung ist nicht verfügbar. Bitte wenden Sie sich an den Administrator.',
'본인인증을 다시 해주세요.' => 'Bitte führen Sie die Identitätsprüfung erneut durch.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Bitte melden Sie sich zuerst an.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Der Wert w wurde nicht korrekt übergeben.',
'잘못된 접근입니다' => 'Ungültiger Zugriff',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Kein Benutzername angegeben. Bitte verwenden Sie den vorgesehenen Weg.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Mit den eingegebenen Identitätsdaten ist bereits ein Konto registriert.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Die geprüfte Identität stimmt nicht mit den eingegebenen Mitgliedsdaten überein. Bitte versuchen Sie es erneut.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Nur angemeldete Mitglieder haben Zugriff.',
'회원 비밀번호 확인' => 'Mitgliedspasswort bestätigen',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Nur für Mitglieder.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Der Hauptadministrator kann nicht austreten.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Ihr Austritt konnte nicht verarbeitet werden. Bitte prüfen Sie den Mitgliedsstatus.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} ist am {2} als Mitglied ausgetreten.',
'Y년 m월 d일' => 'd.m.Y',

// bbs/memo.php
'내 쪽지함' => 'Meine Nachrichten',
'kind 변수 값이 올바르지 않습니다.' => 'Der Wert kind ist ungültig.',
'받은' => 'Empfangen',
'보낸' => 'Gesendet',
'정보없음' => 'Keine Angaben',
'아직 읽지 않음' => 'Noch nicht gelesen',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Ohne öffentliches Profil können Sie anderen keine Nachrichten senden. Die Profilsichtbarkeit können Sie unter „Profil bearbeiten“ ändern.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Die Mitgliedsdaten existieren nicht.\\n\\nDas Mitglied ist möglicherweise ausgetreten.',
'쪽지 보내기' => 'Nachricht senden',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Der Benutzername „{1}“ existiert nicht (oder ist nicht öffentlich) oder ist ausgetreten bzw. gesperrt.\\nDie Nachricht wurde nicht gesendet.',
'해당 회원이 존재하지 않습니다.' => 'Das Mitglied existiert nicht.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Sie haben nicht genügend Punkte ({1}), um eine Nachricht zu senden.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Ihre Nachricht wurde an {1} gesendet.',
'회원아이디 오류 같습니다.' => 'Der Benutzername scheint falsch zu sein.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Bitte übergeben Sie den Wert {1}.',
'{1} 쪽지 보기' => 'Nachricht anzeigen ({1})',

// bbs/move.php
'이동' => 'Verschieben',
'복사' => 'Kopieren',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Der Wert sw wurde nicht korrekt übergeben.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Nur für Forenadministratoren oder höher.',
'게시물 {1}' => 'Beiträge {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Bitte wählen Sie mindestens ein Forum aus ({1}).',
'현재 페이지 게시판 전체' => 'Alle Foren auf dieser Seite',
'게시판' => 'Foren',
'현재' => 'Aktuell',
'창닫기' => 'Fenster schließen',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Bitte wählen Sie mindestens ein Forum aus ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1} in die ausgewählten Foren abgeschlossen.',

// bbs/new.php
'새글' => 'Neue Beiträge',
'그룹' => 'Gruppe',
'전체그룹' => 'Alle Gruppen',
'[코] ' => '[Kommentar] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Nur für den Hauptadministrator.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Popup-Hinweis',
'{1}시간 동안 다시 열람하지 않습니다.' => '{1} Stunden lang nicht mehr anzeigen.',
'닫기' => 'Schließen',
'팝업레이어 알림이 없습니다.' => 'Es gibt keine Popup-Hinweise.',

// bbs/password.php
'비밀번호 입력' => 'Passwort eingeben',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Sie sind bereits angemeldet.',
'회원정보 찾기' => 'Zugangsdaten wiederherstellen',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Ungültige E-Mail-Adresse.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Eine E-Mail zur Bestätigung von Benutzername und Passwort wurde an {1} gesendet.\\n\\nBitte prüfen Sie Ihr Postfach.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Ihre angeforderte E-Mail zur Wiederherstellung der Zugangsdaten',
'회원정보 찾기 안내' => 'Zugangsdaten wiederherstellen',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) hat am {3} die Wiederherstellung der Zugangsdaten angefordert.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Da selbst Administratoren Ihr Passwort nicht einsehen können, erstellen wir statt des alten Passworts ein neues für Sie.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Prüfen Sie unten das neue Passwort und <span style="color:#ff3061">klicken Sie dann auf den Link <strong>Passwort ändern</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Sobald die Änderung bestätigt wird, melden Sie sich auf der Website mit Ihrem Benutzernamen und dem neuen Passwort an.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Ändern Sie nach der Anmeldung das Passwort bitte unter „Profil bearbeiten“.',
'회원아이디' => 'Benutzername',
'변경될 비밀번호' => 'Neues Passwort',
'비밀번호 변경' => 'Passwort ändern',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Ihr Passwort wurde geändert.\\n\\nBitte melden Sie sich mit Ihrem Benutzernamen und dem neuen Passwort an.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Die Wiederherstellung von Benutzername/Passwort per Identitätsprüfung ist nicht verfügbar. Bitte wenden Sie sich an den Administrator.',
'패스워드 변경' => 'Passwort ändern',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Es wurde kein Passwort übermittelt.',
'비밀번호가 일치하지 않습니다.' => 'Die Passwörter stimmen nicht überein.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Nur Mitglieder können dies einsehen.',
'{1} 님의 포인트 내역' => 'Punkteverlauf von {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Der Wert po_id wurde nicht korrekt übergeben.',
'기타의견이 비활성화되어 있습니다.' => 'Weitere Meinungen sind deaktiviert.',
'권한이 없습니다.' => 'Keine Berechtigung.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Die Umfrage existiert nicht.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Nur Mitglieder ab Stufe {1} können die Ergebnisse sehen.',
'설문조사 결과' => 'Umfrageergebnisse',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Nur Mitglieder ab Stufe {1} können abstimmen.',
'항목을 선택하세요.' => 'Bitte wählen Sie eine Option.',
'{1}에 이미 참여하셨습니다.' => 'Sie haben bereits an {1} teilgenommen.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Ohne öffentliches Profil können Sie die Profile anderer nicht ansehen.\\n\\nDie Profilsichtbarkeit können Sie unter „Profil bearbeiten“ ändern.',
'{1}님의 자기소개' => 'Über {1}',
'소개 내용이 없습니다.' => 'Keine Vorstellung vorhanden.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Wenn Sie Mitglied sind, melden Sie sich bitte zuerst an.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Bitte wählen Sie mindestens einen Beitrag zum Löschen aus.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Wenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'열린 분류 ' => 'Geöffnete Kategorie ',
'{1}이 존재하지 않습니다.' => '{1} existiert nicht.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Der Beitrag existiert nicht.\\nEr wurde gelöscht oder ist nicht Ihr Beitrag.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Bereits beantwortete Anfragen können nicht bearbeitet werden.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Sie haben keine Berechtigung, diesen Beitrag zu bearbeiten.\\n\\nBitte verwenden Sie den vorgesehenen Weg.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Bitte legen Sie in den 1:1-Anfrage-Einstellungen Kategorien an.',
'{1} 바이트' => '{1} Byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Bitte wählen Sie eine gültige Kategorie.',
'이메일을 입력하세요.' => 'Bitte geben Sie Ihre E-Mail-Adresse ein.',
'<strong>제목</strong>을 입력하세요.' => 'Bitte geben Sie einen <strong>Betreff</strong> ein.',
'<strong>내용</strong>을 입력하세요.' => 'Bitte geben Sie den <strong>Inhalt</strong> ein.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Der Inhalt enthält viel ungültigen Code.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Die Datei- oder Inhaltsgröße überschreitet das Serverlimit.\\npost_max_size={1} , upload_max_filesize={2}\\nBitte wenden Sie sich an den Forenadministrator oder Serveradministrator.',
'답변은 관리자만 등록할 수 있습니다.' => 'Nur Administratoren können Antworten verfassen.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Die Anfrage existiert nicht, daher kann keine Antwort verfasst werden.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Auf eine Antwort kann nicht erneut geantwortet werden.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Bitte laden Sie höchstens 2 Anhänge hoch.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => '„{1}“ kann nicht hochgeladen werden, da die Datei das Serverlimit ({2}) überschreitet.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => '„{1}“ wurde nicht korrekt hochgeladen.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => '„{1}“ ({2} Byte) wurde nicht hochgeladen, da die Datei das Forenlimit ({3} Byte) überschreitet.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => '„{1}“ kann nicht sicher gespeichert werden. Bitte prüfen Sie die Zufallsquelle und den Speicherpfad des Servers.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2}: Benachrichtigung über Antwort',

// bbs/register.php
'회원가입약관' => 'Nutzungsbedingungen',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'E-Mail-Adresse für die Bestätigung ändern',
'이미 메일인증 하신 회원입니다.' => 'Ihre E-Mail-Adresse ist bereits bestätigt.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Falls Sie keine Bestätigungs-E-Mail erhalten haben, können Sie die E-Mail-Adresse in Ihrem Konto ändern.',
'사이트 이용정보 입력' => 'Kontodaten',
'필수' => 'Erforderlich',
'자동등록방지' => 'Spamschutz',
'인증메일변경' => 'Bestätigungs-E-Mail ändern',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => '{1} wird bereits verwendet.\\n\\nBitte geben Sie eine andere E-Mail-Adresse ein.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Bestätigungs-E-Mail',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Die Bestätigungs-E-Mail wurde erneut an {1} gesendet.\\n\\nBitte prüfen Sie {1} in Kürze.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Sie müssen den Nutzungsbedingungen zustimmen, um sich zu registrieren.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Sie müssen der Erhebung und Nutzung personenbezogener Daten zustimmen, um sich zu registrieren.',
'회원 가입' => 'Registrieren',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Bitte bearbeiten Sie die Administratordaten im Adminbereich.',
'로그인 후 이용하여 주십시오.' => 'Bitte melden Sie sich zuerst an.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Die übermittelten Daten stimmen nicht mit dem angemeldeten Mitglied überein.',
'비밀번호를 입력해 주세요.' => 'Bitte geben Sie Ihr Passwort ein.',
'회원 정보 수정' => 'Profil bearbeiten',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Diese Aktion ist in der Demo nicht verfügbar.',
'이름을 올바르게 입력해 주십시오.' => 'Bitte geben Sie einen gültigen Namen ein.',
'닉네임을 올바르게 입력해 주십시오.' => 'Bitte geben Sie einen gültigen Spitznamen ein.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Für die Registrierung ist eine Identitätsprüfung erforderlich.',
'추천인이 존재하지 않습니다.' => 'Der Werber existiert nicht.',
'본인을 추천할 수 없습니다.' => 'Sie können sich nicht selbst werben.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Willkommen bei uns',
'로그인 되어 있지 않습니다.' => 'Sie sind nicht angemeldet.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Die übermittelten Daten stimmen nicht mit dem angemeldeten Konto überein und können nicht geändert werden.\\nFalls Sie einen unzulässigen Weg verwenden, beenden Sie dies bitte sofort.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Bitte laden Sie ein Mitgliedssymbol mit höchstens {1} Byte hoch.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} ist keine Bilddatei.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Bitte laden Sie ein Mitgliedsbild mit höchstens {1} Byte hoch.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} ist keine gif/jpg-Datei.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Ihr Profil wurde aktualisiert.\\n\\nDa sich Ihre E-Mail-Adresse geändert hat, müssen Sie sie erneut bestätigen.',
'회원정보수정' => 'Profil bearbeiten',
'회원 정보가 수정 되었습니다.' => 'Ihr Profil wurde aktualisiert.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Willkommens-E-Mail',
'회원가입을 축하합니다.' => 'Willkommen!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Herzlich willkommen, <b>{1}</b>, und vielen Dank für Ihre Registrierung.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Wir werden unser Bestes tun, um Ihnen gerecht zu werden.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klicken Sie unten auf <strong>E-Mail bestätigen</strong>, um die Registrierung abzuschließen.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Der Bestätigungslink ist nach dem Versand {1} Minuten gültig.',
'감사합니다.' => 'Vielen Dank.',
'메일인증' => 'E-Mail bestätigen',
'사이트바로가기' => 'Zur Website',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Bestätigungs-E-Mail für Mitglieder',
'회원 인증 메일입니다.' => 'Dies ist eine Bestätigungs-E-Mail für Mitglieder.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Die E-Mail-Adresse von <b>{1}</b> wurde geändert.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klicken Sie auf die folgende Adresse, um die Bestätigung abzuschließen.',
'{1} 로그인' => '{1} Anmeldung',

// bbs/register_result.php
'회원가입 완료' => 'Registrierung abgeschlossen',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS ist nur für Foren verfügbar, die Gäste lesen dürfen.',
'RSS 보기가 금지되어 있습니다.' => 'RSS ist deaktiviert.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Gemerkte Beiträge von {1}',
'[게시판 없음]' => '[Kein Forum]',
'[글 없음]' => '[Kein Beitrag]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Nur für Mitglieder.',
'로그인하기' => 'Anmelden',
'올바른 방법으로 사용해 주십시오.' => 'Bitte verwenden Sie den vorgesehenen Weg.',
'코멘트는 스크랩 할 수 없습니다.' => 'Kommentare können nicht gemerkt werden.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Sie haben diesen Beitrag bereits gemerkt.

Möchten Sie Ihre gemerkten Beiträge jetzt ansehen?',
'이미 스크랩하신 글 입니다.' => 'Sie haben diesen Beitrag bereits gemerkt.',
'스크랩 확인하기' => 'Gemerkte Beiträge ansehen',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Der Beitrag, den Sie merken möchten, existiert nicht.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Sie können nicht in so kurzer Zeit mehrfach hintereinander posten.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Dieser Beitrag wurde gemerkt.

Möchten Sie Ihre gemerkten Beiträge jetzt ansehen?',
'이 글을 스크랩 하였습니다.' => 'Dieser Beitrag wurde gemerkt.',

// bbs/search.php
'전체검색 결과' => 'Suchergebnisse',
'[비밀글 입니다.]' => '[Dies ist ein privater Beitrag.]',
'게시판 그룹선택' => 'Forengruppe auswählen',
'전체 분류' => 'Alle Kategorien',

// bbs/view_comment.php
'비밀글 입니다.' => 'Dies ist ein privater Beitrag.',
'댓글내용 확인' => 'Kommentar ansehen',

// bbs/view_image.php
'이미지 크게보기' => 'Bild vergrößern',
'이미지 확장자가 아닙니다.' => 'Keine Bilddateierweiterung.',
'이미지 파일이 아닙니다.' => 'Keine Bilddatei.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Es wurde kein bo_table-Wert übergeben.\\nÜbergeben Sie ihn z. B. als write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Der Beitrag existiert nicht.\\nEr wurde möglicherweise gelöscht oder verschoben.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Beim Schreiben eines neuen Beitrags wird der Wert $wr_id nicht verwendet.',
'글을 쓸 권한이 없습니다.' => 'Sie haben keine Berechtigung zum Schreiben.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung zum Schreiben.\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Sie haben nicht genügend Punkte ({1}), um einen Beitrag zu schreiben ({2}).\\n\\nBitte sammeln Sie weitere Punkte und versuchen Sie es erneut.',
'글쓰기' => 'Schreiben',
'글을 수정할 권한이 없습니다.' => 'Sie haben keine Berechtigung, diesen Beitrag zu bearbeiten.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung, diesen Beitrag zu bearbeiten.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Dieser Beitrag kann nicht bearbeitet werden, da Antworten darauf existieren.\\n\\nBeiträge mit Antworten können nicht bearbeitet werden.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Dieser Beitrag kann nicht bearbeitet werden, da Kommentare dazu existieren.\\n\\nBeiträge mit {1} oder mehr Kommentaren können nicht bearbeitet werden.',
'글수정' => 'Beitrag bearbeiten',
'글을 답변할 권한이 없습니다.' => 'Sie haben keine Berechtigung zu antworten.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Sie haben keine Berechtigung, eine Antwort zu schreiben.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Sie haben nicht genügend Punkte ({1}), um zu antworten ({2}).\\n\\nBitte sammeln Sie weitere Punkte und versuchen Sie es erneut.',
'공지에는 답변 할 수 없습니다.' => 'Auf Hinweise kann nicht geantwortet werden.',
'정상적인 접근이 아닙니다.' => 'Ungültiger Zugriff.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Auf private Beiträge können nur der Verfasser oder ein Administrator antworten.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Auf private Beiträge von Gästen kann nicht geantwortet werden.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Sie können nicht weiter antworten.\\n\\nAntworten sind auf 10 Ebenen begrenzt.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Sie können nicht weiter antworten.\\n\\nAntworten sind auf 26 begrenzt.',
'글답변' => 'Antworten',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Kein Zugriff.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Sie haben keine Berechtigung zum Schreiben.\\n\\nBei Fragen wenden Sie sich bitte an den Administrator.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'In diesem Forum können nur Mitglieder mit Identitätsprüfung schreiben.\\n\\nWenn Sie Mitglied sind, melden Sie sich bitte an und versuchen Sie es erneut.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'In diesem Forum können nur Mitglieder mit Identitätsprüfung schreiben.\\n\\nBitte führen Sie die Identitätsprüfung unter „Profil bearbeiten“ durch.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Der Name ist ein Pflichtfeld.',
'댓글을 쓸 권한이 없습니다.' => 'Sie haben keine Berechtigung zu kommentieren.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Der Beitrag existiert nicht.\\nEr wurde möglicherweise gelöscht oder verschoben.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Sie haben nicht genügend Punkte ({1}), um zu kommentieren ({2}).\\n\\nBitte sammeln Sie weitere Punkte und versuchen Sie es erneut.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Es gibt keinen Kommentar zum Beantworten.\\n\\nEr wurde möglicherweise während Ihrer Antwort gelöscht.',
'댓글을 등록할 수 없습니다.' => 'Der Kommentar kann nicht gespeichert werden.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Sie können nicht weiter antworten.\\n\\nAntworten sind auf 5 Ebenen begrenzt.',
'원글
{1}


댓글
{2}' => 'Originalbeitrag
{1}


Kommentar
{2}',
'입력' => 'Neu',
'수정' => 'Bearbeiten',
'답변' => 'Antworten',
'댓글 ' => 'Kommentar ',
'댓글 수정' => 'Kommentar bearbeiten',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Neuer Beitrag im Forum {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Dieser Kommentar stammt von einem Mitglied mit höherer Stufe als der Gruppenadministrator und kann nicht bearbeitet werden.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Sie können den Kommentar nicht bearbeiten, da das Forum nicht zu einer von Ihnen verwalteten Gruppe gehört.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Dieser Kommentar stammt von einem Mitglied mit höherer Stufe als der Forenadministrator und kann nicht bearbeitet werden.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Sie können den Kommentar nicht bearbeiten, da Sie dieses Forum nicht verwalten.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Sie können nicht bearbeiten, da es nicht Ihr Beitrag ist.',
'댓글을 수정할 권한이 없습니다.' => 'Sie haben keine Berechtigung, diesen Kommentar zu bearbeiten.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Dieser Kommentar kann nicht bearbeitet werden, da Antworten darauf existieren.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Die Foreninformationen sind ungültig.',

// bbs/write_update.php
'게시글 저장' => 'Beitrag speichern',
'<strong>분류</strong>를 선택하세요.' => 'Bitte wählen Sie eine <strong>Kategorie</strong>.',
'분류를 올바르게 입력하세요.' => 'Bitte geben Sie eine gültige Kategorie ein.',
'올바른 방법으로 수정하여 주십시오.' => 'Bitte bearbeiten Sie auf dem vorgesehenen Weg.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Sie können nicht bearbeiten, da das Forum nicht zu einer von Ihnen verwalteten Gruppe gehört.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Beiträge von Mitgliedern mit höherer Stufe als Ihrer können Sie nicht bearbeiten.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Sie können nicht bearbeiten, da Sie dieses Forum nicht verwalten.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Bitte bestätigen Sie Ihr Passwort und bearbeiten Sie erneut.',
'로그인 후 수정하세요.' => 'Bitte melden Sie sich zum Bearbeiten an.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Dieses Forum verwendet keine privaten Beiträge.',
'관리자만 공지할 수 있습니다.' => 'Nur Administratoren können Hinweise veröffentlichen.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Sie können nicht weiter antworten.\\nAntworten sind auf 10 Ebenen begrenzt.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Sie können nicht weiter antworten.\\nAntworten sind auf 26 begrenzt.',
'제목을 입력하여 주십시오.' => 'Bitte geben Sie einen Betreff ein.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Bitte löschen Sie vorhandene Dateien und laden Sie höchstens {1} Anhänge hoch.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Bitte laden Sie höchstens {1} Anhänge hoch.',
'코멘트' => 'Kommentar',
'코멘트 수정' => 'Kommentar bearbeiten',

// bbs/write_update_mail.php
'{1} 메일' => '{1} E-Mail',
'작성자 {1}' => 'Verfasser: {1}',
'사이트에서 게시물 확인하기' => 'Beitrag auf der Website ansehen',

// common.php
'접근이 가능하지 않습니다.' => 'Zugriff nicht möglich.',
'접근 불가합니다.' => 'Kein Zugriff.',

// head.php
'본문 바로가기' => 'Zum Inhalt springen',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Shop',
'접속자' => 'Besucher',
'사이트 내 전체검색' => 'Seitensuche',
'검색어 필수' => 'Suchbegriff (erforderlich)',
'검색어를 입력해주세요' => 'Suchbegriff eingeben',
'검색' => 'Suchen',
'검색어는 두글자 이상 입력하십시오.' => 'Bitte geben Sie mindestens zwei Zeichen ein.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Für eine schnellere Suche ist im Suchbegriff nur ein Leerzeichen erlaubt.',
'정보수정' => 'Profil bearbeiten',
'로그아웃' => 'Abmelden',
'회원가입' => 'Registrieren',
'메인메뉴' => 'Hauptmenü',
'전체메뉴' => 'Alle Menüs',
'전체메뉴열기' => 'Alle Menüs öffnen',
'하위분류' => 'Untermenü',
'메뉴 준비 중입니다.' => 'Das Menü wird vorbereitet.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} angemeldet ',

// lib/common.lib.php
'처음' => 'Anfang',
'이전' => 'Zurück',
'페이지' => 'Seite',
'열린' => 'Aktuell',
'다음' => 'Weiter',
'맨끝' => 'Ende',
'$url1 과 $url2 를 지정해 주세요.' => 'Bitte geben Sie $url1 und $url2 an.',
'답변글' => 'Antwort',
'{1} 자기소개' => 'Über {1}',
'{1} 이름으로 검색' => 'Nach Name {1} suchen',
'쪽지보내기' => 'Nachricht senden',
'홈페이지' => 'Website',
'자기소개' => 'Über mich',
'아이디로 검색' => 'Nach Benutzername suchen',
'이름으로 검색' => 'Nach Name suchen',
'전체게시물' => 'Alle Beiträge',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Die MySQL-Angaben zu Host, User, Password oder DB sind fehlerhaft.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL ist nicht installiert, daher ist die Funktion mysql_connect nicht verfügbar.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Die MySQL-Angaben zu Host, User oder Password sind fehlerhaft.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Bei der Datenbankverarbeitung ist ein Fehler aufgetreten.',
'yoil|일' => 'So',
'yoil|월' => 'Mo',
'yoil|화' => 'Di',
'yoil|수' => 'Mi',
'yoil|목' => 'Do',
'yoil|금' => 'Fr',
'yoil|토' => 'Sa',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Das Token ist abgelaufen. Bitte laden Sie die Seite neu.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Die Website-Adresse für die E-Mail-Bestätigung ist nicht eingerichtet. Bitte wenden Sie sich an den Website-Administrator.',
'올바른 경로로 접근해 주십시오.' => 'Bitte greifen Sie über den vorgesehenen Pfad zu.',
'PC 전용 게시판입니다.' => 'Dieses Forum ist nur für den PC.',
'모바일 전용 게시판입니다.' => 'Dieses Forum ist nur für Mobilgeräte.',
'간편인증' => 'Einfache Verifizierung',
'휴대폰' => 'Mobiltelefon',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Sie haben die Identitätsprüfung per {1} heute {2}-mal verwendet und können sie nicht mehr nutzen.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Nicht verfügbar, da die Funktion exec nicht ausgeführt werden kann.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Die Anzahl der vom Formular gesendeten Variablen überschreitet max_input_vars.\\nEinige Werte gehen beim Speichern in der DB möglicherweise verloren.\\n\\nÄndern Sie zur Behebung den Wert max_input_vars in der php.ini des Servers.',
'url에 타 도메인을 지정할 수 없습니다.' => 'In der URL darf keine fremde Domain angegeben werden.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Zugriff verweigert, da die URL Benutzerinformationen enthält.',
'bot 으로 판단되어 중지합니다.' => 'Abgebrochen, da ein Bot vermutet wird.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Bitte geben Sie den Inhalt ein.',

// lib/get_data.lib.php
'제목' => 'Betreff',
'내용' => 'Inhalt',
'제목+내용' => 'Betreff+Inhalt',
'글쓴이' => 'Autor',
'글쓴이(코)' => 'Autor (Kommentare)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Bitte geben Sie einen Benutzernamen ein.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Der Benutzername darf nur Buchstaben, Zahlen und _ enthalten.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Der Benutzername muss mindestens 3 Zeichen lang sein.',
'이미 사용중인 회원아이디 입니다.' => 'Dieser Benutzername wird bereits verwendet.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Dieser Benutzername ist ein reserviertes Wort und kann nicht verwendet werden.',
'닉네임을 입력해 주십시오.' => 'Bitte geben Sie einen Spitznamen ein.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Der Spitzname darf nur koreanische Zeichen, lateinische Buchstaben und Zahlen ohne Leerzeichen enthalten.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Der Spitzname muss mindestens 2 koreanische oder 4 lateinische Zeichen lang sein.',
'이미 존재하는 닉네임입니다.' => 'Dieser Spitzname existiert bereits.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Dieser Spitzname ist ein reserviertes Wort und kann nicht verwendet werden.',
'E-mail 주소를 입력해 주십시오.' => 'Bitte geben Sie eine E-Mail-Adresse ein.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Die E-Mail-Adresse ist ungültig.',
'{1} 메일은 사용할 수 없습니다.' => 'E-Mail-Adressen von {1} können nicht verwendet werden.',
'이미 사용중인 E-mail 주소입니다.' => 'Diese E-Mail-Adresse wird bereits verwendet.',
'이름을 입력해 주십시오.' => 'Bitte geben Sie Ihren Namen ein.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Der Name darf nur koreanische Zeichen ohne Leerzeichen enthalten.',
'휴대폰번호를 입력해 주십시오.' => 'Bitte geben Sie Ihre Mobilnummer ein.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Bitte geben Sie eine gültige Mobilnummer ein.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Diese Mobilnummer wird bereits verwendet. {1}',

// plugin/editor/cheditor5/editor.lib.php
'웹에디터 시작' => 'Beginn des Web-Editors',
'웹 에디터 끝' => 'Ende des Web-Editors',

// plugin/editor/smarteditor2/editor.lib.php
'단축키 일람' => 'Tastenkürzel',
'단축키 일람 닫기' => 'Tastenkürzel schließen',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Ungültige Anfrage.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Ungültige Verifizierung. Bitte verwenden Sie den vorgesehenen Weg.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Zu den verifizierten Daten ist kein Mitgliedskonto vorhanden.',
'코드 : {1}  {2}' => 'Code: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Ergebnis der einfachen Verifizierung über KG Inicis',
'본인인증이 완료되었습니다.' => 'Die Identitätsprüfung ist abgeschlossen.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Einfache Verifizierung über KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Dieses Konto wurde bereits auf den Namen einer anderen Person verifiziert.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Mit den eingegebenen Identitätsdaten ist bereits ein Konto registriert.\\nBenutzername: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Zahlen anhören',
'새로고침' => 'Neu laden',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Geben Sie die Spamschutz-Zahlen der Reihe nach ein.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Ergebnis der Verifizierung per Mobiltelefon',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Gefahr der Manipulation von dn_hash (prüfen Sie, ob {1} Ausführungsrechte hat.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Sie haben die Identitätsprüfung per Mobiltelefon abgebrochen.',
'up_hash 변조 위험있음' => 'Gefahr der Manipulation von up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Der Site-Code für die KCP-Identitätsprüfung per Mobiltelefon fehlt. Bitte geben Sie den KCP-Site-Code unter Admin > Grundeinstellungen ein.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Mit den eingegebenen Identitätsdaten ist bereits ein Konto registriert.\\nBenutzername: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Mit Ihrer eigenen Mobilnummer verifiziert.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Keine Antwort der Identitätsprüfung. Bitte beginnen Sie von vorn.',
'코드 : {1} {2}' => 'Code: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Die Sitzung der Identitätsprüfung ist abgelaufen. Bitte beginnen Sie von vorn.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Abruf des Prüfergebnisses fehlgeschlagen ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Das Modul KCP-Identitätsprüfung per Mobiltelefon V2 erfordert PHP 7.0 oder höher.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Die für das Modul KCP-Identitätsprüfung per Mobiltelefon V2 erforderlichen PHP-Erweiterungen (openssl/curl/hash_pbkdf2) sind nicht aktiviert.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Site-Code oder ENC_KEY für die KCP-Identitätsprüfung per Mobiltelefon V2 ist nicht eingerichtet.\\nBitte geben Sie diese unter Admin > Grundeinstellungen ein.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registrierung der Prüftransaktion fehlgeschlagen.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verifizierung per Mobiltelefon',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Die Anfragedaten für die KCP-Transaktionsregistrierung können nicht erstellt werden.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Die Anfragedaten für die KCP-Transaktionsregistrierung können nicht verschlüsselt werden.',
'KCP 거래등록 API 응답이 없습니다.' => 'Keine Antwort von der KCP-API zur Transaktionsregistrierung.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Die Antwort der KCP-API zur Transaktionsregistrierung kann nicht ausgewertet werden.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Die Anfragedaten für das KCP-Prüfergebnis können nicht erstellt werden.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Keine Antwort von der KCP-API für das Prüfergebnis.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Die Antwort der KCP-API für das Prüfergebnis kann nicht ausgewertet werden.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Die KCP-Prüfergebnisdaten können nicht entschlüsselt werden.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Die entschlüsselten KCP-Prüfdaten können nicht ausgewertet werden.',
'cURL 초기화에 실패했습니다.' => 'Die Initialisierung von cURL ist fehlgeschlagen.',
'KCP API 통신 실패: {1}' => 'KCP-API-Kommunikation fehlgeschlagen: {1}',
'KCP API HTTP 오류: {1}' => 'KCP-API-HTTP-Fehler: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Bei der Identitätsprüfung per Mobiltelefon ist ein Fehler aufgetreten. Fehlercode: {1}\\n\\nBei Fragen wenden Sie sich bitte an das Kundencenter von Korea Credit Bureau (KCB) unter 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Bitte prüfen Sie die Eingabewerte',
'KCB 휴대폰 본인확인' => 'KCB-Identitätsprüfung per Mobiltelefon',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Bei der i-PIN-Identitätsprüfung ist ein Fehler aufgetreten. Fehlercode: {1}\\n\\nBei Fragen wenden Sie sich bitte an das Kundencenter von Korea Credit Bureau (KCB) unter 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Bei der i-PIN-Identitätsprüfung ist ein Fehler aufgetreten. (Keine CI-Daten) Fehlercode: {1}\\n\\nBei Fragen wenden Sie sich bitte an das Kundencenter von Korea Credit Bureau (KCB) unter 02-708-1000.',
'KCB 아이핀 본인확인' => 'KCB-i-PIN-Identitätsprüfung',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Bitte wählen Sie in den Grundeinstellungen den KCB-Dienst zur Identitätsprüfung per Mobiltelefon.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Bitte geben Sie in den Grundeinstellungen die KCB-Mitglieds-ID ein.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Die ausführbare Moduldatei existiert nicht.\\n\\nDie Datei {1} muss sich in {2}/{3}/bin befinden.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Die ausführbare Moduldatei hat keine Ausführungsrechte.\\n\\nBitte vergeben Sie Ausführungsrechte, z. B. mit chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Die ausführbare Moduldatei hat keine Ausführungsrechte.\\n\\nBitte prüfen Sie, ob IUSER Ausführungsrechte für cmd.exe hat.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Bitte wählen Sie in den Grundeinstellungen den KCB-Dienst zur i-PIN-Identitätsprüfung.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Bitte erstellen Sie in {1}/{2} ein Verzeichnis key.\\n\\nVergeben Sie danach Schreibrechte, z. B.: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Bitte ändern Sie die Rechte des Verzeichnisses {1}/{2}/key auf 705.\\nchmod 705 key oder chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Bitte ändern Sie die Rechte des Verzeichnisses {1}/{2}/key auf 707.\\n\\nchmod 707 key oder chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter-Callback',
'트위터에 승인이 되었습니다.' => 'Bei Twitter autorisiert.',
'트위터에 승인이 되지 않았습니다.' => 'Bei Twitter nicht autorisiert.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Details anzeigen',
'페이스북으로 공유' => 'Auf Facebook teilen',
'페이스북 공유' => 'Auf Facebook teilen',
'트위터로  공유' => 'Auf Twitter teilen',
'트위터 공유' => 'Auf Twitter teilen',
'카카오톡으로 보내기' => 'Per KakaoTalk senden',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Auch auf Facebook veröffentlicht',
'트위터에도 등록됨' => 'Auch auf Twitter veröffentlicht',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Auch auf Twitter veröffentlichen',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Social Login - {1}',
'잠시후에 다시 시도해 주세요.' => 'Bitte versuchen Sie es später erneut.',
'홈으로' => 'Startseite',
'이 페이지 닫기' => 'Diese Seite schließen',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Sie können sich nicht erneut registrieren, da mit dieser {1}-ID bereits ein Konto verknüpft oder registriert ist. Wenn Sie Mitglied sind, melden Sie sich an und verknüpfen Sie das Konto unter „Profil bearbeiten“.',
'지정되지 않은 오류입니다.' => 'Nicht näher bestimmter Fehler.',
'설정 오류입니다.' => 'Konfigurationsfehler.',
'해당 provider 설정 오류입니다.' => 'Konfigurationsfehler des Anbieters.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Unbekannter oder deaktivierter Anbieter.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Sie haben keine Berechtigung für diesen Dienst.',
'인증이 실패되었습니다.. ' => 'Die Authentifizierung ist fehlgeschlagen. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Der Benutzer hat die Authentifizierung abgebrochen oder der Anbieter hat die Verbindung abgelehnt.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Die Abfrage des Benutzerprofils ist fehlgeschlagen. Möglicherweise ist der Benutzer nicht mit dem Dienst verbunden. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'In diesem Fall müssen Sie die Authentifizierung erneut anfordern.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Der Benutzer ist nicht mit dem Dienst verbunden.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Der Dienst unterstützt diese Funktion nicht.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Sie sind bereits angemeldet oder die Anfrage ist ungültig.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Es ist bereits eine ID verknüpft oder die Anfrage ist ungültig.',
'소셜 데이터 오류' => 'Fehler bei Social-Daten',
'SNS 사용자 인증에 실패하였습니다.' => 'Die SNS-Benutzerauthentifizierung ist fehlgeschlagen.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Mit diesem Konto ist bereits eine {1}-ID verknüpft. Bitte heben Sie die Verknüpfung auf und versuchen Sie es erneut.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Verbindung zu {1} wird hergestellt. Bitte warten Sie.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Social Login wird nicht verwendet.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Social Login ist deaktiviert.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Die Option für neue Fenster ist deaktiviert.',
'서비스 이름이 넘어오지 않았습니다.' => 'Der Dienstname wurde nicht übergeben.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Social Login wird nicht verwendet.',
'이미 회원가입 하였습니다.' => 'Sie sind bereits registriert.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Nur Benutzer, die sich per Social Login angemeldet haben, haben Zugriff.',
'소셜 회원 가입 - {1}' => 'Registrierung per Social Login - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Nur Benutzer, die sich per Social Login angemeldet haben, haben Zugriff.',
'이미 등록된 회원이 존재합니다.' => 'Es ist bereits ein Mitglied registriert.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Die geprüfte Identität stimmt nicht mit Ihren persönlichen Daten überein. Bitte versuchen Sie es erneut.',
'회원 가입 오류!' => 'Registrierungsfehler!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Kein Mitglied oder der Wert wurde nicht übergeben.',
'권한이 없거나 잘못된 요청입니다.' => 'Keine Berechtigung oder ungültige Anfrage.',

// js/autosave.js
'삭제' => 'Löschen',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'Beim Löschen des zwischengespeicherten Beitrags ist ein Fehler aufgetreten.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Sie haben Ihre Identität bereits per {1} bestätigt.

Die vorherige Verifizierung aufheben und erneut verifizieren?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Gelöschte Daten können nicht wiederhergestellt werden.

Möchten Sie wirklich löschen?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'Die KAKAO-Postleitzahldatei postcode.v2.js wurde nicht geladen.',
'토큰 정보가 올바르지 않습니다.' => 'Die Token-Informationen sind ungültig.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Bitte treffen Sie eine Auswahl.
',
'{1} : 필수 입력입니다.
' => '{1} : Pflichtfeld.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : Das Telefonnummernformat ist ungültig.

Bitte mit Bindestrichen (-) eingeben.
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Keine gültige E-Mail-Adresse.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Nur Koreanisch erlaubt. (Nur vollständige koreanische Silben)
',
'{1} : 한글이 아닙니다.
' => '{1} : Nur Koreanisch erlaubt.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Nur Koreanisch, lateinische Buchstaben und Ziffern erlaubt.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Nur Koreanisch und lateinische Buchstaben erlaubt.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Nur Ziffern erlaubt.
',
'{1} : 영문이 아닙니다.
' => '{1} : Nur lateinische Buchstaben erlaubt.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Nur lateinische Buchstaben oder Ziffern erlaubt.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Nur lateinische Buchstaben, Ziffern und _ erlaubt.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Bitte mindestens {2} Zeichen eingeben.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Keine Bilddatei.
Nur .gif-, .jpg- und .png-Dateien sind erlaubt.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Nur .{2}-Dateien sind erlaubt.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Leerzeichen sind nicht erlaubt.
',
);
