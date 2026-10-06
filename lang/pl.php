<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (pl). 틀은 php lang/build.php pl 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Skorzystaj z tej funkcji po zainstalowaniu sklepu.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Zbyt wiele żądań. Spróbuj ponownie za chwilę.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Nazwa użytkownika polecającego może zawierać tylko litery, cyfry i _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Podany polecający nie istnieje.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Skorzystaj z właściwej procedury.',

// bbs/alert.php
'오류안내 페이지' => 'Strona błędu',
'결과안내 페이지' => 'Strona wyniku',
'다음 항목에 오류가 있습니다.' => 'Następujące pola zawierają błędy.',
'다음 내용을 확인해 주세요.' => 'Sprawdź poniższe informacje.',
'돌아가기' => 'Wróć',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Zamknij nowe okno i ponów poprzednią operację.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Zamknij nowe okno i kontynuuj korzystanie z serwisu.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Forum nie istnieje.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Nie otrzymano wartości bo_table.\\n\\nPrzekaż ją w formacie board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Wpis nie istnieje.\\n\\nMógł zostać usunięty lub przeniesiony.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Niezarejestrowani goście nie mają dostępu do tego forum.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Nie masz uprawnień do czytania wpisów.\\n\\nW razie pytań skontaktuj się z administratorem.',
'글을 읽을 권한이 없습니다.' => 'Nie masz uprawnień do czytania tego wpisu.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do czytania tego wpisu.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Na tym forum wpisy mogą czytać tylko użytkownicy ze zweryfikowaną tożsamością.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Na tym forum wpisy mogą czytać tylko użytkownicy ze zweryfikowaną tożsamością.\\n\\nZweryfikuj tożsamość w sekcji Edytuj profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Na tym forum wpisy mogą czytać tylko pełnoletni użytkownicy ze zweryfikowaną tożsamością.\\n\\nJeśli jesteś pełnoletni, a nie możesz czytać wpisów, ponów weryfikację tożsamości w sekcji Edytuj profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Masz za mało punktów ({1}), aby przeczytać wpis ({2}).\\n\\nZbierz więcej punktów i spróbuj ponownie.',
'목록을 볼 권한이 없습니다.' => 'Nie masz uprawnień do przeglądania listy.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do przeglądania listy.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'{1} {2} 페이지' => '{1} - strona {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Zaznacz co najmniej jeden element dla operacji „{1}”.',
'올바른 방법으로 이용해 주세요.' => 'Skorzystaj z właściwej procedury.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Sprawdź poniższe informacje.',
'확인' => 'OK',
'취소' => 'Anuluj',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Najpierw sprawdź Zarządzanie forami->Zarządzanie treścią w panelu administracyjnym.',
'등록된 내용이 없습니다.' => 'Brak treści.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} nie istnieje.</p>',

// bbs/current_connect.php
'현재접속자' => 'Użytkownicy online',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Nie można usunąć: błąd tokenu.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Nie można usunąć: forum nie należy do grupy, którą zarządzasz.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Nie można usunąć wpisu użytkownika o wyższym poziomie niż Twój.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Nie można usunąć: nie zarządzasz tym forum.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Nie można usunąć: to nie jest Twój wpis.',
'로그인 후 삭제하세요.' => 'Zaloguj się, aby usunąć.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Nieprawidłowe hasło. Nie można usunąć.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Nie można usunąć: do tego wpisu istnieją odpowiedzi.\\n\\nNajpierw usuń odpowiedzi.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Nie można usunąć: do tego wpisu istnieją komentarze.\\n\\nNie można usunąć wpisu, który ma {1} lub więcej komentarzy.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Brak uprawnień dostępu.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Komentarz nie istnieje lub nie jest komentarzem.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Nie można usunąć komentarza użytkownika o wyższym poziomie niż administrator grupy.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Nie można usunąć komentarza: forum nie należy do grupy, którą zarządzasz.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Nie można usunąć komentarza użytkownika o wyższym poziomie niż administrator forum.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Nie można usunąć komentarza: nie zarządzasz tym forum.',
'비밀번호가 틀립니다.' => 'Nieprawidłowe hasło.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Nie można usunąć: do tego komentarza istnieją odpowiedzi.',

// bbs/download.php
'잘못된 접근입니다.' => 'Nieprawidłowy dostęp.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do pobierania.\\nJeśli jesteś użytkownikiem, zaloguj się.',
'파일 정보가 존재하지 않습니다.' => 'Nie znaleziono informacji o pliku.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Token wygasł lub jest nieprawidłowy.\\nOdśwież stronę i spróbuj ponownie.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Pobranie pliku {1} spowoduje odjęcie {2} pkt.\\nPunkty są odejmowane tylko raz na wpis — ponowne pobranie nie spowoduje kolejnego odjęcia.\\nCzy mimo to chcesz pobrać plik?',
'다운로드 권한이 없습니다.' => 'Nie masz uprawnień do pobierania.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nJeśli jesteś użytkownikiem, zaloguj się.',
'파일이 존재하지 않습니다.' => 'Plik nie istnieje.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Masz za mało punktów ({1}), aby pobrać plik ({2}).\\n\\nZbierz więcej punktów i spróbuj ponownie.',
'다운로드 &gt; {1}' => 'Pobieranie &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Taki użytkownik nie istnieje.',
'탈퇴 또는 차단된 회원입니다.' => 'Konto zostało usunięte lub zablokowane.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Żądanie weryfikacji e-mail zostało już przetworzone lub jest nieprawidłowe.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Weryfikacja e-mail zakończona.\\n\\nMożesz teraz zalogować się jako {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Czas na weryfikację e-mail minął. Poproś ponownie o wiadomość weryfikacyjną.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Dane żądania weryfikacji e-mail są nieprawidłowe.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Otrzymano nieprawidłowe wartości.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Zrezygnowano z otrzymywania wiadomości informacyjnych.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Najpierw sprawdź Zarządzanie forami->Zarządzanie FAQ w panelu administracyjnym.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Aby wysyłać e-maile, zaznacz opcję „Używaj wysyłki e-mail” w konfiguracji.\\n\\nSkontaktuj się z administratorem.',
'회원만 이용하실 수 있습니다.' => 'Dostępne tylko dla użytkowników.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Jeśli Twój profil nie jest publiczny, nie możesz wysyłać e-maili do innych użytkowników.\\n\\nProfil możesz upublicznić w sekcji Edytuj profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Nie znaleziono danych użytkownika.\\n\\nKonto mogło zostać usunięte.',
'정보공개를 하지 않았습니다.' => 'Profil nie jest publiczny.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'W ramach jednej sesji można wysłać tylko ograniczoną liczbę e-maili.\\n\\nAby wysyłać dalej, zaloguj się lub połącz ponownie.',
'메일 쓰기' => 'Napisz e-mail',
'이메일이 올바르지 않습니다.' => 'Nieprawidłowy adres e-mail.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Przekroczono limit wysyłek przez formularz e-mail.',
'자동등록방지 숫자가 틀렸습니다.' => 'Nieprawidłowy kod antyspamowy.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Nie można wysłać: adres e-mail ma nieprawidłowy format.',
'허용되지 않는 파일 확장자입니다.' => 'Niedozwolone rozszerzenie pliku.',
'메일보내기' => 'Wyślij e-mail',
'메일 발송중' => 'Wysyłanie e-maila',
'메일을 정상적으로 발송하였습니다.' => 'E-mail został wysłany.',

// bbs/good.php
'회원만 가능합니다.' => 'Dostępne tylko dla użytkowników.',
'값이 제대로 넘어오지 않았습니다.' => 'Wartości nie zostały poprawnie przekazane.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Polubienie lub niepolubienie można dodać tylko z poziomu wpisu.',
'존재하는 게시판이 아닙니다.' => 'Forum nie istnieje.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Nie możesz oceniać własnych wpisów.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'To forum nie korzysta z funkcji Lubię to.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'To forum nie korzysta z funkcji Nie lubię.',
'추천' => 'Lubię to',
'비추천' => 'Nie lubię',
'이미 {1} 하신 글 입니다.' => 'Już wybrałeś „{1}” dla tego wpisu.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Już oceniłeś ten wpis.',
'이 글을 {1} 하셨습니다.' => 'Wybrano „{1}” dla tego wpisu.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Grupa {1} jest dostępna tylko na urządzeniach mobilnych.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Brak linków.',

// bbs/list.php
'전체' => 'Wszystkie',
'열린 분류' => 'Otwarta kategoria',
'이전검색' => 'Poprzednie wyszukiwanie',
'다음검색' => 'Następne wyszukiwanie',

// bbs/login.php
'로그인' => 'Zaloguj się',

// bbs/login_check.php
'로그인 검사' => 'Sprawdzanie logowania',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Nazwa użytkownika i hasło nie mogą być puste.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Nazwa użytkownika nie jest zarejestrowana lub hasło jest nieprawidłowe.\\nW haśle rozróżniane są wielkie i małe litery.',
'\\1년 \\2월 \\3일' => '\\3.\\2.\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Dostęp dla Twojej nazwy użytkownika został zablokowany.\\nData: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'To konto zostało usunięte, więc dostęp jest niemożliwy.\\nData usunięcia: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Aby się zalogować, musisz zweryfikować adres e-mail {1}. Aby zweryfikować inny adres e-mail, kliknij Anuluj.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Jeśli folder data nie ma uprawnień do zapisu lub brakuje miejsca na dysku,\\nlogowanie może się nie udać. Sprawdź wolne miejsce i uprawnienia do zapisu.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'Adres URL zawiera nieprawidłową wartość.',
'url에 도메인을 지정할 수 없습니다.' => 'W adresie URL nie można podać domeny.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Weryfikacja tożsamości jest niedostępna. Skontaktuj się z administratorem.',
'본인인증을 다시 해주세요.' => 'Ponów weryfikację tożsamości.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Zaloguj się, aby kontynuować.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Wartość w nie została poprawnie przekazana.',
'잘못된 접근입니다' => 'Nieprawidłowy dostęp',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Brak nazwy użytkownika. Skorzystaj z właściwej procedury.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Istnieje już konto zarejestrowane z tymi danymi weryfikacji tożsamości.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Zweryfikowane dane nie zgadzają się z wprowadzonymi informacjami. Spróbuj ponownie.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Dostępne tylko dla zalogowanych użytkowników.',
'회원 비밀번호 확인' => 'Potwierdź hasło',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Dostępne tylko dla użytkowników.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Główny administrator nie może usunąć konta',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Nie udało się usunąć konta. Sprawdź stan konta.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1}, Twoje konto zostało usunięte dnia {2}.',
'Y년 m월 d일' => 'd.m.Y',

// bbs/memo.php
'내 쪽지함' => 'Moje wiadomości',
'kind 변수 값이 올바르지 않습니다.' => 'Nieprawidłowa wartość zmiennej kind.',
'받은' => 'Odebrano',
'보낸' => 'Wysłano',
'정보없음' => 'Brak informacji',
'아직 읽지 않음' => 'Jeszcze nieprzeczytana',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Jeśli Twój profil nie jest publiczny, nie możesz wysyłać wiadomości do innych użytkowników. Profil możesz upublicznić w sekcji Edytuj profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Nie znaleziono danych użytkownika.\\n\\nKonto mogło zostać usunięte.',
'쪽지 보내기' => 'Wyślij wiadomość',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Nazwa użytkownika \'{1}\' nie istnieje (lub profil nie jest publiczny) albo konto zostało usunięte lub zablokowane.\\nWiadomość nie została wysłana.',
'해당 회원이 존재하지 않습니다.' => 'Taki użytkownik nie istnieje.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Masz za mało punktów ({1}), aby wysłać wiadomość.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Wiadomość została wysłana do: {1}.',
'회원아이디 오류 같습니다.' => 'Prawdopodobnie nazwa użytkownika jest błędna.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Przekaż wartość {1}.',
'{1} 쪽지 보기' => 'Wiadomość: {1}',

// bbs/move.php
'이동' => 'Przenieś',
'복사' => 'Kopiuj',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Wartość sw nie została poprawnie przekazana.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Dostępne tylko dla administratorów forum i wyższych.',
'게시물 {1}' => '{1} wpis',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Wybierz co najmniej jedno forum dla operacji „{1}”.',
'현재 페이지 게시판 전체' => 'Wszystkie fora na tej stronie',
'게시판' => 'Fora',
'현재' => 'Bieżąca',
'창닫기' => 'Zamknij okno',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Wybierz co najmniej jedno forum docelowe dla operacji „{1}”.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Operacja „{1}” została wykonana na wybranych forach.',

// bbs/new.php
'새글' => 'Nowe wpisy',
'그룹' => 'Grupa',
'전체그룹' => 'Wszystkie grupy',
'[코] ' => '[Kom.]',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Dostępne tylko dla głównego administratora.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Powiadomienie wyskakujące',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Nie pokazuj ponownie przez {1} godz.',
'닫기' => 'Zamknij',
'팝업레이어 알림이 없습니다.' => 'Brak powiadomień wyskakujących.',

// bbs/password.php
'비밀번호 입력' => 'Wprowadź hasło',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Jesteś już zalogowany.',
'회원정보 찾기' => 'Odzyskiwanie danych konta',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Nieprawidłowy adres e-mail.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Na adres {1} wysłano wiadomość umożliwiającą potwierdzenie nazwy użytkownika i hasła.\\n\\nSprawdź swoją skrzynkę pocztową.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Odzyskiwanie danych konta, o które prosiłeś',
'회원정보 찾기 안내' => 'Odzyskiwanie danych konta',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}), dnia {3} poprosiłeś o odzyskanie danych konta.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Ponieważ nawet administratorzy serwisu nie znają Twojego hasła, zamiast je podawać, generujemy dla Ciebie nowe hasło.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Sprawdź poniżej nowe hasło, a następnie <span style="color:#ff3061">kliknij link <strong>Zmień hasło</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Gdy pojawi się komunikat potwierdzający zmianę hasła, zaloguj się w serwisie, podając nazwę użytkownika i nowe hasło.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Po zalogowaniu ustaw nowe hasło w sekcji Edytuj profil.',
'회원아이디' => 'Nazwa użytkownika',
'변경될 비밀번호' => 'Nowe hasło',
'비밀번호 변경' => 'Zmień hasło',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Hasło zostało zmienione.\\n\\nZaloguj się, podając nazwę użytkownika i nowe hasło.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Nie można odzyskać nazwy użytkownika i hasła za pomocą weryfikacji tożsamości. Skontaktuj się z administratorem.',
'패스워드 변경' => 'Zmień hasło',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Nie otrzymano hasła.',
'비밀번호가 일치하지 않습니다.' => 'Hasła nie są zgodne.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Dostępne tylko dla użytkowników.',
'{1} 님의 포인트 내역' => 'Historia punktów: {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Wartość po_id nie została poprawnie przekazana.',
'기타의견이 비활성화되어 있습니다.' => 'Opcja „Inna odpowiedź” jest wyłączona.',
'권한이 없습니다.' => 'Brak uprawnień.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Nie znaleziono ankiety.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Wyniki mogą zobaczyć tylko użytkownicy z poziomem {1} lub wyższym.',
'설문조사 결과' => 'Wyniki ankiety',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Głosować mogą tylko użytkownicy z poziomem {1} lub wyższym.',
'항목을 선택하세요.' => 'Wybierz odpowiedź.',
'{1}에 이미 참여하셨습니다.' => 'Już wziąłeś udział w ankiecie „{1}”.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Jeśli Twój profil nie jest publiczny, nie możesz przeglądać danych innych użytkowników.\\n\\nProfil możesz upublicznić w sekcji Edytuj profil.',
'{1}님의 자기소개' => 'O użytkowniku {1}',
'소개 내용이 없습니다.' => 'Brak opisu.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Jeśli jesteś użytkownikiem, zaloguj się.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Wybierz co najmniej jeden wpis do usunięcia.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Jeśli jesteś użytkownikiem, zaloguj się.',
'열린 분류 ' => 'Otwarta kategoria',
'{1}이 존재하지 않습니다.' => '{1} nie istnieje.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Wpis nie istnieje.\\nMógł zostać usunięty lub nie jest Twój.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Nie można edytować zapytania, na które udzielono już odpowiedzi.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Nie masz uprawnień do edycji tego wpisu.\\n\\nSkorzystaj z właściwej procedury.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Ustaw kategorie w ustawieniach zapytań 1:1',
'{1} 바이트' => '{1} B',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Wybierz prawidłową kategorię.',
'이메일을 입력하세요.' => 'Wpisz adres e-mail.',
'<strong>제목</strong>을 입력하세요.' => 'Wpisz <strong>tytuł</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Wpisz <strong>treść</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Treść zawiera wiele nieprawidłowych kodów.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Rozmiar pliku lub treści przekracza limit ustawiony na serwerze.\\npost_max_size={1} , upload_max_filesize={2}\\nSkontaktuj się z administratorem forum lub serwera.',
'답변은 관리자만 등록할 수 있습니다.' => 'Odpowiadać może tylko administrator.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Nie można odpowiedzieć: zapytanie nie istnieje.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Nie można odpowiedzieć na odpowiedź.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Prześlij maksymalnie 2 załączniki.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Plik „{1}” przekracza rozmiar ustawiony na serwerze ({2}) i nie może zostać przesłany.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Plik „{1}” nie został poprawnie przesłany.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Plik „{1}” ({2} B) przekracza rozmiar ustawiony dla forum ({3} B) i nie zostanie przesłany.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Nie można bezpiecznie zapisać pliku „{1}”. Sprawdź źródło liczb losowych i ścieżkę zapisu na serwerze.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} - powiadomienie o odpowiedzi',

// bbs/register.php
'회원가입약관' => 'Regulamin',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Zmiana adresu e-mail do weryfikacji',
'이미 메일인증 하신 회원입니다.' => 'Twój adres e-mail jest już zweryfikowany.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Jeśli nie otrzymałeś wiadomości weryfikacyjnej, możesz zmienić adres e-mail w danych konta.',
'사이트 이용정보 입력' => 'Dane konta',
'필수' => 'Wymagane',
'자동등록방지' => 'Ochrona antyspamowa',
'인증메일변경' => 'Zmień adres weryfikacyjny',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'Adres {1} jest już używany.\\n\\nWpisz inny adres e-mail.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Wiadomość weryfikacyjna',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Wiadomość weryfikacyjna została ponownie wysłana na adres {1}.\\n\\nZa chwilę sprawdź skrzynkę {1}.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Aby się zarejestrować, musisz zaakceptować regulamin.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Aby się zarejestrować, musisz zaakceptować zbieranie i wykorzystywanie danych osobowych.',
'회원 가입' => 'Zarejestruj się',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Dane administratora edytuj w panelu administracyjnym.',
'로그인 후 이용하여 주십시오.' => 'Zaloguj się, aby kontynuować.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Przekazane dane nie zgadzają się z zalogowanym użytkownikiem.',
'비밀번호를 입력해 주세요.' => 'Wpisz hasło.',
'회원 정보 수정' => 'Edytuj profil',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Ta operacja jest niedostępna w wersji demonstracyjnej.',
'이름을 올바르게 입력해 주십시오.' => 'Wpisz prawidłowe imię i nazwisko.',
'닉네임을 올바르게 입력해 주십시오.' => 'Wpisz prawidłowy pseudonim.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Rejestracja wymaga weryfikacji tożsamości.',
'추천인이 존재하지 않습니다.' => 'Polecający nie istnieje.',
'본인을 추천할 수 없습니다.' => 'Nie możesz polecić samego siebie.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Gratulujemy rejestracji!',
'로그인 되어 있지 않습니다.' => 'Nie jesteś zalogowany.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Nie można edytować: dane do zmiany nie zgadzają się z zalogowanym kontem.\\nJeśli używasz niedozwolonej metody, natychmiast przestań.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Prześlij ikonę użytkownika o rozmiarze maksymalnie {1} B.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} nie jest plikiem graficznym.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Prześlij obraz użytkownika o rozmiarze maksymalnie {1} B.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} nie jest plikiem gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Profil został zaktualizowany.\\n\\nAdres e-mail został zmieniony, więc musisz go ponownie zweryfikować.',
'회원정보수정' => 'Edytuj profil',
'회원 정보가 수정 되었습니다.' => 'Profil został zaktualizowany.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Wiadomość powitalna',
'회원가입을 축하합니다.' => 'Gratulujemy rejestracji!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => '<b>{1}</b>, serdecznie gratulujemy rejestracji!',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Dołożymy wszelkich starań, aby odwdzięczyć się za Twoje wsparcie.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Kliknij poniżej <strong>Zweryfikuj e-mail</strong>, aby dokończyć rejestrację.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Link weryfikacyjny jest ważny przez {1} min od wysłania.',
'감사합니다.' => 'Dziękujemy.',
'메일인증' => 'Zweryfikuj e-mail',
'사이트바로가기' => 'Przejdź do serwisu',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Wiadomość weryfikacyjna konta',
'회원 인증 메일입니다.' => 'To jest wiadomość weryfikacyjna Twojego konta.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Adres e-mail użytkownika <b>{1}</b> został zmieniony.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Kliknij poniższy adres, aby dokończyć weryfikację.',
'{1} 로그인' => 'Zaloguj się do {1}',

// bbs/register_result.php
'회원가입 완료' => 'Rejestracja zakończona',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'Kanał RSS jest dostępny tylko dla forów, które mogą czytać niezarejestrowani goście.',
'RSS 보기가 금지되어 있습니다.' => 'Kanał RSS jest wyłączony.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Zapisane wpisy: {1}',
'[게시판 없음]' => '[Brak forum]',
'[글 없음]' => '[Brak wpisu]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Dostępne tylko dla użytkowników.',
'로그인하기' => 'Zaloguj się',
'올바른 방법으로 사용해 주십시오.' => 'Skorzystaj z właściwej procedury.',
'코멘트는 스크랩 할 수 없습니다.' => 'Nie można zapisywać komentarzy.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Ten wpis jest już zapisany.

Czy chcesz teraz zobaczyć zapisane wpisy?',
'이미 스크랩하신 글 입니다.' => 'Ten wpis jest już zapisany.',
'스크랩 확인하기' => 'Zobacz zapisane wpisy',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Wpis, który chcesz zapisać, nie istnieje.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Nie możesz publikować wpisów jeden po drugim w tak krótkim czasie.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Wpis został zapisany.

Czy chcesz teraz zobaczyć zapisane wpisy?',
'이 글을 스크랩 하였습니다.' => 'Wpis został zapisany.',

// bbs/search.php
'전체검색 결과' => 'Wyniki wyszukiwania',
'[비밀글 입니다.]' => '[Wpis prywatny]',
'게시판 그룹선택' => 'Wybierz grupę forów',
'전체 분류' => 'Wszystkie kategorie',

// bbs/view_comment.php
'비밀글 입니다.' => 'Wpis prywatny.',
'댓글내용 확인' => 'Sprawdź treść komentarza',

// bbs/view_image.php
'이미지 크게보기' => 'Powiększ obraz',
'이미지 확장자가 아닙니다.' => 'To nie jest rozszerzenie pliku graficznego.',
'이미지 파일이 아닙니다.' => 'To nie jest plik graficzny.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Nie otrzymano wartości bo_table.\\nPrzekaż ją w formacie write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Wpis nie istnieje.\\nMógł zostać usunięty lub przeniesiony.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Przy pisaniu nowego wpisu nie używa się wartości \\$wr_id.',
'글을 쓸 권한이 없습니다.' => 'Nie masz uprawnień do pisania.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do pisania.\\nJeśli jesteś użytkownikiem, zaloguj się.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Masz za mało punktów ({1}), aby napisać wpis ({2}).\\n\\nZbierz więcej punktów i spróbuj ponownie.',
'글쓰기' => 'Napisz',
'글을 수정할 권한이 없습니다.' => 'Nie masz uprawnień do edycji tego wpisu.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do edycji tego wpisu.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Nie można edytować: do tego wpisu istnieją odpowiedzi.\\n\\nNie można edytować wpisu, który ma odpowiedzi.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Nie można edytować: do tego wpisu istnieją komentarze.\\n\\nNie można edytować wpisu, który ma {1} lub więcej komentarzy.',
'글수정' => 'Edytuj wpis',
'글을 답변할 권한이 없습니다.' => 'Nie masz uprawnień do odpowiadania.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do pisania odpowiedzi.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Masz za mało punktów ({1}), aby odpowiedzieć ({2}).\\n\\nZbierz więcej punktów i spróbuj ponownie.',
'공지에는 답변 할 수 없습니다.' => 'Nie można odpowiadać na ogłoszenia.',
'정상적인 접근이 아닙니다.' => 'Nieprawidłowy dostęp.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Na wpisy prywatne może odpowiadać tylko autor lub administrator.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Nie można odpowiadać na prywatne wpisy niezarejestrowanych gości.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Nie możesz już odpowiedzieć.\\n\\nOdpowiedzi są dozwolone do 10 poziomów.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Nie możesz już odpowiedzieć.\\n\\nDozwolonych jest maksymalnie 26 odpowiedzi.',
'글답변' => 'Odpowiedz',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Brak uprawnień dostępu.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Nie masz uprawnień do pisania wpisów.\\n\\nW razie pytań skontaktuj się z administratorem.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Na tym forum wpisy mogą pisać tylko użytkownicy ze zweryfikowaną tożsamością.\\n\\nJeśli jesteś użytkownikiem, zaloguj się.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Na tym forum wpisy mogą pisać tylko użytkownicy ze zweryfikowaną tożsamością.\\n\\nZweryfikuj tożsamość w sekcji Edytuj profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Imię i nazwisko jest wymagane.',
'댓글을 쓸 권한이 없습니다.' => 'Nie masz uprawnień do komentowania.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Wpis nie istnieje.\\nMógł zostać usunięty lub przeniesiony.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Masz za mało punktów ({1}), aby dodać komentarz ({2}).\\n\\nZbierz więcej punktów i spróbuj ponownie.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Komentarz, na który chcesz odpowiedzieć, nie istnieje.\\n\\nMógł zostać usunięty w międzyczasie.',
'댓글을 등록할 수 없습니다.' => 'Nie można dodać komentarza.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Nie możesz już odpowiedzieć.\\n\\nOdpowiedzi są dozwolone do 5 poziomów.',
'원글
{1}


댓글
{2}' => 'Wpis oryginalny
{1}


Komentarz
{2}',
'입력' => 'Nowy wpis',
'수정' => 'Edytuj',
'답변' => 'Odpowiedz',
'댓글 ' => 'Komentarz',
'댓글 수정' => 'Edycja komentarza',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nowa aktywność na forum {2}: {3}',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Nie można edytować komentarza użytkownika o wyższym poziomie niż administrator grupy.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Nie można edytować komentarza: forum nie należy do grupy, którą zarządzasz.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Nie można edytować komentarza użytkownika o wyższym poziomie niż administrator forum.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Nie można edytować komentarza: nie zarządzasz tym forum.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Nie można edytować: to nie jest Twój wpis.',
'댓글을 수정할 권한이 없습니다.' => 'Nie masz uprawnień do edycji tego komentarza.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Nie można edytować: do tego komentarza istnieją odpowiedzi.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Nieprawidłowe dane forum.',

// bbs/write_update.php
'게시글 저장' => 'Zapisywanie wpisu',
'<strong>분류</strong>를 선택하세요.' => 'Wybierz <strong>kategorię</strong>.',
'분류를 올바르게 입력하세요.' => 'Wpisz prawidłową kategorię.',
'올바른 방법으로 수정하여 주십시오.' => 'Edytuj za pomocą właściwej procedury.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Nie można edytować: forum nie należy do grupy, którą zarządzasz.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Nie można edytować wpisu użytkownika o wyższym poziomie niż Twój.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Nie można edytować: nie zarządzasz tym forum.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Potwierdź hasło i spróbuj edytować ponownie.',
'로그인 후 수정하세요.' => 'Zaloguj się, aby edytować.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'To forum nie pozwala na wpisy prywatne.',
'관리자만 공지할 수 있습니다.' => 'Ogłoszenia może publikować tylko administrator.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Nie możesz już odpowiedzieć.\\nOdpowiedzi są dozwolone do 10 poziomów.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Nie możesz już odpowiedzieć.\\nDozwolonych jest maksymalnie 26 odpowiedzi.',
'제목을 입력하여 주십시오.' => 'Wpisz tytuł.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Usuń istniejące pliki i prześlij maksymalnie {1} załączników.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Prześlij maksymalnie {1} załączników.',
'코멘트' => 'Komentarz',
'코멘트 수정' => 'Edycja komentarza',

// bbs/write_update_mail.php
'{1} 메일' => 'E-mail: {1}',
'작성자 {1}' => 'Autor: {1}',
'사이트에서 게시물 확인하기' => 'Zobacz wpis w serwisie',

// common.php
'접근이 가능하지 않습니다.' => 'Dostęp jest niemożliwy.',
'접근 불가합니다.' => 'Brak dostępu.',

// head.php
'본문 바로가기' => 'Przejdź do treści',
'커뮤니티' => 'Społeczność',
'쇼핑몰' => 'Sklep',
'접속자' => 'Odwiedzający',
'사이트 내 전체검색' => 'Szukaj w witrynie',
'검색어 필수' => 'Wyszukiwana fraza (wymagane)',
'검색어를 입력해주세요' => 'Wpisz wyszukiwaną frazę',
'검색' => 'Szukaj',
'검색어는 두글자 이상 입력하십시오.' => 'Wpisz co najmniej dwa znaki.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Aby przyspieszyć wyszukiwanie, wyszukiwana fraza może zawierać tylko jedną spację.',
'정보수정' => 'Edytuj profil',
'로그아웃' => 'Wyloguj się',
'회원가입' => 'Zarejestruj się',
'메인메뉴' => 'Menu główne',
'전체메뉴' => 'Wszystkie menu',
'전체메뉴열기' => 'Otwórz wszystkie menu',
'하위분류' => 'Podmenu',
'메뉴 준비 중입니다.' => 'Menu jest w przygotowaniu.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} - zalogowano',

// lib/common.lib.php
'처음' => 'Pierwsza',
'이전' => 'Poprzednia',
'페이지' => 'Strona',
'열린' => 'Bieżąca',
'다음' => 'Następna',
'맨끝' => 'Ostatnia',
'답변글' => 'Odpowiedź',
'{1} 자기소개' => 'O użytkowniku {1}',
'{1} 이름으로 검색' => 'Szukaj po imieniu {1}',
'쪽지보내기' => 'Wyślij wiadomość',
'홈페이지' => 'Strona WWW',
'자기소개' => 'O mnie',
'아이디로 검색' => 'Szukaj po nazwie użytkownika',
'이름으로 검색' => 'Szukaj po imieniu',
'전체게시물' => 'Wszystkie wpisy',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Błąd w danych MySQL Host, User, Password lub DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL nie jest zainstalowany, dlatego nie można użyć funkcji mysql_connect.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Błąd w danych MySQL Host, User lub Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Wystąpił błąd podczas przetwarzania bazy danych.',
'yoil|일' => 'nd',
'yoil|월' => 'pon',
'yoil|화' => 'wt',
'yoil|수' => 'śr',
'yoil|목' => 'czw',
'yoil|금' => 'pt',
'yoil|토' => 'sob',
'요일' => '.',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Token wygasł. Odśwież stronę.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Nie skonfigurowano adresu serwisu do weryfikacji e-mail. Skontaktuj się z administratorem serwisu.',
'올바른 경로로 접근해 주십시오.' => 'Wejdź właściwą ścieżką.',
'PC 전용 게시판입니다.' => 'Forum tylko dla komputerów.',
'모바일 전용 게시판입니다.' => 'Forum tylko dla urządzeń mobilnych.',
'간편인증' => 'Uproszczona weryfikacja',
'휴대폰' => 'Telefon komórkowy',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Dziś skorzystałeś już z weryfikacji tożsamości ({1}) {2} razy i nie możesz zrobić tego ponownie.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Niedostępne: nie można wykonać funkcji exec.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Liczba zmiennych przesłanych z formularza przekracza max_input_vars.\\nCzęść przesłanych wartości może zostać utracona przy zapisie do DB.\\n\\nAby rozwiązać problem, zmień wartość max_input_vars w pliku php.ini na serwerze.',
'url에 타 도메인을 지정할 수 없습니다.' => 'W adresie URL nie można podać innej domeny.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Brak dostępu: adres URL zawiera dane użytkownika.',
'bot 으로 판단되어 중지합니다.' => 'Przerwano: wykryto bota.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Wpisz treść.',

// lib/get_data.lib.php
'제목' => 'Tytuł',
'내용' => 'Treść',
'제목+내용' => 'Tytuł+Treść',
'글쓴이' => 'Autor',
'글쓴이(코)' => 'Autor (kom.)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Wpisz nazwę użytkownika.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Nazwa użytkownika może zawierać tylko litery, cyfry i _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Nazwa użytkownika musi mieć co najmniej 3 znaki.',
'이미 사용중인 회원아이디 입니다.' => 'Ta nazwa użytkownika jest już zajęta.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Tej nazwy użytkownika nie można użyć, ponieważ jest słowem zastrzeżonym.',
'닉네임을 입력해 주십시오.' => 'Wpisz pseudonim.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Pseudonim może zawierać tylko znaki koreańskie, litery i cyfry, bez spacji.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Pseudonim musi mieć co najmniej 2 znaki koreańskie lub 4 litery.',
'이미 존재하는 닉네임입니다.' => 'Taki pseudonim już istnieje.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Tego pseudonimu nie można użyć, ponieważ jest słowem zastrzeżonym.',
'E-mail 주소를 입력해 주십시오.' => 'Wpisz adres e-mail.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Adres e-mail ma nieprawidłowy format.',
'{1} 메일은 사용할 수 없습니다.' => 'Adresu {1} nie można użyć.',
'이미 사용중인 E-mail 주소입니다.' => 'Ten adres e-mail jest już używany.',
'이름을 입력해 주십시오.' => 'Wpisz imię i nazwisko.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Imię i nazwisko może zawierać tylko znaki koreańskie, bez spacji.',
'휴대폰번호를 입력해 주십시오.' => 'Wpisz numer telefonu komórkowego.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Wpisz prawidłowy numer telefonu komórkowego.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Ten numer telefonu komórkowego jest już używany. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Nieprawidłowe żądanie.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Nieprawidłowa weryfikacja. Skorzystaj z właściwej procedury.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Brak konta zarejestrowanego ze zweryfikowanymi danymi.',
'코드 : {1}  {2}' => 'Kod: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Wynik uproszczonej weryfikacji KG Inicis',
'본인인증이 완료되었습니다.' => 'Weryfikacja tożsamości zakończona.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Uproszczona weryfikacja KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'To konto zostało już zweryfikowane danymi innej osoby.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Istnieje już konto zarejestrowane z tymi danymi weryfikacji tożsamości.\\nNazwa użytkownika: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Odsłuchaj cyfry',
'새로고침' => 'Odśwież',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Wpisz cyfry antyspamowe w podanej kolejności.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Wynik weryfikacji przez telefon',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Ryzyko manipulacji dn_hash (sprawdź, czy plik {1} ma uprawnienia do wykonywania.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Anulowano weryfikację tożsamości przez telefon.',
'up_hash 변조 위험있음' => 'Ryzyko manipulacji up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Brak kodu witryny KCP dla usługi weryfikacji przez telefon.\\Wpisz kod witryny KCP w Administracja > Konfiguracja podstawowa.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Istnieje już konto zarejestrowane z tymi danymi weryfikacji tożsamości.\\nNazwa użytkownika: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Zweryfikowano Twoim numerem telefonu komórkowego.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Brak odpowiedzi z weryfikacji tożsamości. Spróbuj ponownie od początku.',
'코드 : {1} {2}' => 'Kod: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Sesja weryfikacji tożsamości wygasła. Spróbuj ponownie od początku.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Nie udało się pobrać wyniku weryfikacji ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Moduł weryfikacji przez telefon KCP V2 działa tylko w PHP 7.0 lub nowszym.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Rozszerzenia PHP wymagane przez moduł weryfikacji przez telefon KCP V2 (openssl/curl/hash_pbkdf2) nie są włączone.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Nie skonfigurowano kodu witryny lub ENC_KEY dla weryfikacji przez telefon KCP V2.\\nWpisz je w Administracja > Konfiguracja podstawowa.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Nie udało się zarejestrować transakcji weryfikacji.\\n({1} : {2})',
'휴대폰 본인확인' => 'Weryfikacja przez telefon',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Nie można utworzyć danych żądania rejestracji transakcji KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Nie można zaszyfrować danych żądania rejestracji transakcji KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Brak odpowiedzi API rejestracji transakcji KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Nie można zinterpretować odpowiedzi API rejestracji transakcji KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Nie można utworzyć danych żądania wyniku weryfikacji KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Brak odpowiedzi API wyniku weryfikacji KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Nie można zinterpretować odpowiedzi API wyniku weryfikacji KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Nie można odszyfrować danych wyniku weryfikacji KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Nie można zinterpretować odszyfrowanych danych weryfikacji KCP.',
'cURL 초기화에 실패했습니다.' => 'Nie udało się zainicjować cURL.',
'KCP API 통신 실패: {1}' => 'Błąd komunikacji z API KCP: {1}',
'KCP API HTTP 오류: {1}' => 'Błąd HTTP API KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Wystąpił błąd podczas weryfikacji przez telefon. Kod błędu: {1}\\n\\nW razie pytań skontaktuj się z biurem obsługi klienta Korea Credit Bureau (KCB) pod numerem 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Sprawdź wprowadzone wartości',
'KCB 휴대폰 본인확인' => 'Weryfikacja przez telefon KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Wystąpił błąd podczas weryfikacji i-PIN. Kod błędu: {1}\\n\\nW razie pytań skontaktuj się z biurem obsługi klienta Korea Credit Bureau (KCB) pod numerem 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Wystąpił błąd podczas weryfikacji i-PIN (brak danych CI). Kod błędu: {1}\\n\\nW razie pytań skontaktuj się z biurem obsługi klienta Korea Credit Bureau (KCB) pod numerem 02-708-1000.',
'KCB 아이핀 본인확인' => 'Weryfikacja i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Wybierz usługę weryfikacji przez telefon KCB w Konfiguracji podstawowej.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Wpisz identyfikator partnera KCB w Konfiguracji podstawowej.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Plik wykonywalny modułu nie istnieje.\\n\\nPlik {1} musi znajdować się w {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Plik wykonywalny modułu nie ma uprawnień do wykonywania.\\n\\nNadaj uprawnienia do wykonywania, np. chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Plik wykonywalny modułu nie ma uprawnień do wykonywania.\\n\\nSprawdź, czy IUSER ma uprawnienia do wykonywania cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Wybierz usługę weryfikacji i-PIN KCB w Konfiguracji podstawowej.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Utwórz katalog key w {1}/{2}.\\n\\nPo jego utworzeniu nadaj uprawnienia do zapisu. Przykład: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Zmień uprawnienia katalogu {1}/{2}/key na 705.\\nchmod 705 key lub chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Zmień uprawnienia katalogu {1}/{2}/key na 707.\\n\\nchmod 707 key lub chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback Twittera',
'트위터에 승인이 되었습니다.' => 'Autoryzacja w Twitterze zakończona.',
'트위터에 승인이 되지 않았습니다.' => 'Autoryzacja w Twitterze nie powiodła się.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Zobacz szczegóły',
'페이스북으로 공유' => 'Udostępnij na Facebooku',
'페이스북 공유' => 'Udostępnij na Facebooku',
'트위터로  공유' => 'Udostępnij na Twitterze',
'트위터 공유' => 'Udostępnij na Twitterze',
'카카오톡으로 보내기' => 'Wyślij przez KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Opublikowano także na Facebooku',
'트위터에도 등록됨' => 'Opublikowano także na Twitterze',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Opublikuj także na Twitterze',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Logowanie społecznościowe - {1}',
'잠시후에 다시 시도해 주세요.' => 'Spróbuj ponownie za chwilę.',
'홈으로' => 'Strona główna',
'이 페이지 닫기' => 'Zamknij tę stronę',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Nie możesz zarejestrować się ponownie, ponieważ z tym identyfikatorem {1} jest już połączone lub zarejestrowane konto. Jeśli jesteś użytkownikiem, zaloguj się i połącz konto w sekcji Edytuj profil.',
'지정되지 않은 오류입니다.' => 'Nieokreślony błąd.',
'설정 오류입니다.' => 'Błąd konfiguracji.',
'해당 provider 설정 오류입니다.' => 'Błąd konfiguracji dostawcy.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Nieznany lub wyłączony dostawca.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Nie masz uprawnień dostępu do tej usługi.',
'인증이 실패되었습니다.. ' => 'Uwierzytelnianie nie powiodło się..',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Użytkownik anulował uwierzytelnianie lub dostawca odrzucił połączenie.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Pobranie profilu użytkownika nie powiodło się. Użytkownik może nie być połączony z tą usługą.',
'이 경우 다시 인증 요청을 해야 합니다.' => 'W takim przypadku należy ponownie poprosić o uwierzytelnienie.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Użytkownik nie jest połączony z tą usługą.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Ta usługa nie obsługuje tej funkcji.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Jesteś już zalogowany lub żądanie jest nieprawidłowe.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Istnieje już połączony identyfikator lub żądanie jest nieprawidłowe.',
'소셜 데이터 오류' => 'Błąd danych społecznościowych',
'SNS 사용자 인증에 실패하였습니다.' => 'Uwierzytelnienie użytkownika serwisu społecznościowego nie powiodło się.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Z tym kontem jest już połączony identyfikator {1}. Odłącz go i spróbuj ponownie.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Łączenie z {1}. Proszę czekać.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Logowanie społecznościowe nie jest używane.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Logowanie społecznościowe jest wyłączone w ustawieniach.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Opcja nowego okna jest wyłączona.',
'서비스 이름이 넘어오지 않았습니다.' => 'Nie otrzymano nazwy usługi.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Logowanie społecznościowe nie jest używane.',
'이미 회원가입 하였습니다.' => 'Rejestracja została już zakończona.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Dostępne tylko dla osób zalogowanych przez serwis społecznościowy.',
'소셜 회원 가입 - {1}' => 'Rejestracja społecznościowa - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Dostępne tylko dla osób zalogowanych przez serwis społecznościowy.',
'이미 등록된 회원이 존재합니다.' => 'Taki użytkownik jest już zarejestrowany.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Zweryfikowane dane nie zgadzają się z Twoimi danymi osobowymi. Spróbuj ponownie.',
'회원 가입 오류!' => 'Błąd rejestracji!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Nie jesteś użytkownikiem lub nie przekazano wartości.',
'권한이 없거나 잘못된 요청입니다.' => 'Brak uprawnień lub nieprawidłowe żądanie.',
);
