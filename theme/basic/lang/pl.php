<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (pl). 틀은 php lang/build.php pl 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Przejdź do treści',
'커뮤니티' => 'Społeczność',
'쇼핑몰' => 'Sklep',
'새글' => 'Nowe wpisy',
'접속자' => 'Odwiedzający',
'사이트 내 전체검색' => 'Szukaj w witrynie',
'검색어 필수' => 'Wyszukiwana fraza (wymagane)',
'검색어를 입력해주세요' => 'Wpisz wyszukiwaną frazę',
'검색' => 'Szukaj',
'검색어는 두글자 이상 입력하십시오.' => 'Wpisz co najmniej dwa znaki.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Aby przyspieszyć wyszukiwanie, wyszukiwana fraza może zawierać tylko jedną spację.',
'정보수정' => 'Edytuj profil',
'로그아웃' => 'Wyloguj się',
'관리자' => 'Administracja',
'회원가입' => 'Zarejestruj się',
'로그인' => 'Zaloguj się',
'메인메뉴' => 'Menu główne',
'전체메뉴' => 'Wszystkie menu',
'전체메뉴열기' => 'Otwórz wszystkie menu',
'하위분류' => 'Podmenu',
'메뉴 준비 중입니다.' => 'Menu jest w przygotowaniu.',
'{1}에서 설정하실 수 있습니다.' => 'Możesz to skonfigurować tutaj: {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Administracja &gt; Ustawienia &gt; Ustawienia menu',

// theme/basic/index.php
'최신글' => 'Najnowsze wpisy',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'Grupa {1} jest dostępna tylko na komputerze.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Otwórz menu',
'메뉴 닫기' => 'Zamknij menu',
'{1}에서 설정하세요.' => 'Skonfiguruj to tutaj: {1}.',
'1:1문의' => 'Zapytania 1:1',
'사용자메뉴' => 'Menu użytkownika',
'기본' => 'Domyślny',
'크게' => 'Duży',
'더크게' => 'Większy',
'열기' => 'Otwórz',
'닫기' => 'Zamknij',
'뒤로가기' => 'Wstecz',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Opcje listy',
'선택삭제' => 'Usuń zaznaczone',
'선택복사' => 'Kopiuj zaznaczone',
'선택이동' => 'Przenieś zaznaczone',
'글쓰기' => 'Napisz',
'카테고리' => 'Kategoria',
'현재 페이지 게시물' => 'Wpisy na tej stronie',
'전체선택' => 'Zaznacz wszystko',
'공지' => 'Ogłoszenie',
'댓글' => 'Komentarze',
'개' => ' ',
'작성자' => 'Autor',
'회' => ' wyświetleń',
'추천' => 'Lubię to',
'비추천' => 'Nie lubię',
'게시물이 없습니다.' => 'Brak wpisów.',
'자바스크립트를 사용하지 않는 경우' => 'Jeśli JavaScript jest wyłączony,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'zaznaczone elementy zostaną usunięte natychmiast, bez potwierdzenia, więc zachowaj ostrożność.',
'전체 {1}건' => 'Łącznie: {1}',
'페이지' => 'Strona',
'게시물 검색' => 'Szukaj wpisów',
'검색대상' => 'Szukaj w',
'검색어를 입력하세요' => 'Wpisz wyszukiwaną frazę',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Zaznacz co najmniej jeden wpis.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Czy na pewno chcesz usunąć zaznaczone wpisy?

Usuniętych danych nie można odzyskać.

Jeśli zaznaczony wpis ma odpowiedzi,
musisz zaznaczyć także odpowiedzi, aby go usunąć.',
'복사' => 'Kopiuj',
'이동' => 'Przenieś',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Udostępnij',
'스크랩' => 'Zapisz',
'답변' => 'Odpowiedz',
'수정' => 'Edytuj',
'삭제' => 'Usuń',
'목록' => 'Lista',
'페이지 정보' => 'Informacje o stronie',
'작성일' => 'Data',
'조회' => 'Wyświetlenia',
'본문' => 'Treść',
'이 글을 추천하셨습니다' => 'Polubiono ten wpis',
'첨부파일' => 'Załączniki',
'{1}회 다운로드' => 'Pobrania: {1}',
'관련링크' => 'Powiązane linki',
'{1}회 연결' => 'Kliknięcia: {1}',
'이전글' => 'Poprzedni wpis',
'다음글' => 'Następny wpis',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Nie masz uprawnień do pobierania.
Jeśli masz konto, zaloguj się i spróbuj ponownie.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Pobranie tego pliku spowoduje odjęcie {1} pkt.

Punkty są odejmowane tylko raz za wpis i nie zostaną odjęte ponownie przy kolejnym pobraniu.

Czy chcesz pobrać plik?',
'이 글을 비추천하셨습니다.' => 'Oznaczono ten wpis jako nielubiany.',
'이 글을 추천하셨습니다.' => 'Polubiono ten wpis.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Lista komentarzy',
'{1}님의 댓글' => 'Komentarz użytkownika {1}',
'의 댓글' => ' (odpowiedź)',
'아이피' => 'IP',
'댓글 옵션' => 'Opcje komentarza',
'비밀글' => 'Prywatny',
'등록된 댓글이 없습니다.' => 'Brak komentarzy.',
'댓글쓰기' => 'Napisz komentarz',
'글자' => ' znaków',
'댓글 내용' => 'Komentarz',
'댓글내용을 입력해주세요' => 'Wpisz komentarz',
'이름' => 'Imię',
'필수' => 'Wymagane',
'비밀번호' => 'Hasło',
'SNS 동시등록' => 'Opublikuj także w mediach społecznościowych',
'댓글등록' => 'Dodaj komentarz',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'Treść zawiera zabronione słowo (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Komentarz musi mieć co najmniej {1} znaków.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Komentarz może mieć maksymalnie {1} znaków.',
'댓글을 입력하여 주십시오.' => 'Wpisz komentarz.',
'이름이 입력되지 않았습니다.' => 'Wpisz imię.',
'비밀번호가 입력되지 않았습니다.' => 'Wpisz hasło.',
'이 댓글을 삭제하시겠습니까?' => 'Usunąć ten komentarz?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Powiadamiaj e-mailem o odpowiedziach',
'분류' => 'Kategoria',
'선택하세요' => 'Wybierz',
'이메일' => 'E-mail',
'홈페이지' => 'Strona WWW',
'옵션' => 'Opcje',
'제목' => 'Tytuł',
'내용' => 'Treść',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Wpisy na tym forum muszą mieć od {1} do {2} znaków.',
'링크 #{1}' => 'Link #{1}',
'링크를 입력하세요' => 'Wpisz link',
'파일을 첨부하세요' => 'Załącz plik',
'파일 #{1}' => 'Plik #{1}',
'파일첨부' => 'Załącz plik',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Załącznik {1}: maks. {2}',
'파일 설명을 입력해주세요.' => 'Wpisz opis pliku.',
'파일 삭제' => 'Usuń plik',
'자동등록방지' => 'Ochrona antyspamowa',
'취소' => 'Anuluj',
'작성완료' => 'Opublikuj',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Użyć automatycznego łamania wierszy?

Automatyczne łamanie wierszy zamienia znaki nowego wiersza we wpisie na znaczniki <br>.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Tytuł zawiera zabronione słowo (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Treść musi mieć co najmniej {1} znaków.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Treść może mieć maksymalnie {1} znaków.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Lista obrazów',
'열람중' => 'Przeglądasz',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Nikt nie jest teraz online.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Wyszukiwana fraza',
'자주하시는질문 분류' => 'Kategorie FAQ',
'열린 분류' => 'Otwarta kategoria',
'검색된 게시물이 없습니다.' => 'Nie znaleziono wyników.',
'등록된 FAQ가 없습니다.' => 'Brak pytań FAQ.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Aby dodać pytania FAQ, użyj menu Zarządzanie FAQ',
'메뉴를 이용하십시오.' => 'w panelu administracyjnym.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Poprzednia strona',
'다음페이지' => 'Następna strona',
'전체보기' => 'Zobacz wszystko',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Najnowsze komentarze',
'더보기' => 'Więcej',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Informacja',
'동의합니다' => 'Zgadzam się',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Wyślij e-mail: {1}',
'메일쓰기' => 'Napisz e-mail',
'형식' => 'Format',
'첨부 파일 1' => 'Załącznik 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Załączniki mogą zostać pominięte, dlatego po wysłaniu sprawdź, czy plik został dołączony.',
'첨부 파일 2' => 'Załącznik 2',
'메일발송' => 'Wyślij e-mail',
'창닫기' => 'Zamknij okno',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Wysyłanie dużych załączników trwa dłużej.

Nie zamykaj ani nie odświeżaj okna, dopóki wiadomość nie zostanie wysłana.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Nazwa użytkownika',
'자동로그인' => 'Nie wylogowuj mnie',
'회원로그인 안내' => 'Logowanie',
'아이디/비밀번호 찾기' => 'Odzyskaj nazwę użytkownika/hasło',
'회원 가입' => 'Zarejestruj się',
'비회원 구매' => 'Zakup bez rejestracji',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Za zamówienia bez rejestracji nie są przyznawane punkty.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Akceptuję zasady zbierania danych osobowych.',
'비회원으로 구매하기' => 'Kup bez rejestracji',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Musisz zapoznać się z zasadami zbierania danych osobowych i je zaakceptować.',
'비회원 주문조회' => 'Sprawdź zamówienie bez rejestracji',
'주문번호' => 'Numer zamówienia',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Wpisz dokładnie: {1} z wiadomości e-mail z zamówieniem oraz {2} podane przy składaniu zamówienia.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Przy automatycznym logowaniu następnym razem nie trzeba będzie wpisywać nazwy użytkownika i hasła.

Nie używaj tej funkcji na komputerach publicznych, ponieważ Twoje dane osobowe mogą zostać ujawnione.

Włączyć automatyczne logowanie?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Wymagane) Dodatkowa polityka prywatności',
'추가 개인정보처리방침 안내' => 'Dodatkowa polityka prywatności',
'목적' => 'Cel',
'항목' => 'Zakres danych',
'보유기간' => 'Okres przechowywania',
'이용자 식별 및 본인여부 확인' => 'Identyfikacja użytkownika i weryfikacja tożsamości',
'생년월일' => 'Data urodzenia',
', 휴대폰 번호(아이핀 제외)' => ', numer telefonu komórkowego (z wyjątkiem i-PIN)',
', 암호화된 개인식별부호(CI)' => ', zaszyfrowany identyfikator osobisty (CI)',
'회원 탈퇴 시까지' => 'Do momentu usunięcia konta',
'추가 개인정보처리방침에 동의합니다.' => 'Akceptuję dodatkową politykę prywatności.',
'인증수단 선택하기' => 'Wybierz metodę weryfikacji',
'간편인증' => 'Uproszczona weryfikacja',
'휴대폰 본인확인' => 'Weryfikacja przez telefon',
'아이핀 본인확인' => 'Weryfikacja przez i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'Weryfikacja tożsamości wymaga włączonej obsługi JavaScript.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Skonfiguruj weryfikację przez telefon w ustawieniach podstawowych.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Aby przejść do weryfikacji, musisz zaakceptować dodatkową politykę prywatności.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Wpisz ponownie hasło.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Wpisz hasło, aby dokończyć usuwanie konta.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'W celu ochrony Twoich danych prosimy o ponowne potwierdzenie hasła.',
'회원아이디' => 'Nazwa użytkownika',
'비밀번호(필수)' => 'Hasło (wymagane)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Łącznie wiadomości: {2} ({1})',
'받은쪽지' => 'Odebrane',
'보낸쪽지' => 'Wysłane',
'쪽지쓰기' => 'Napisz wiadomość',
'안 읽은 쪽지' => 'Nieprzeczytana wiadomość',
'자료가 없습니다.' => 'Brak danych.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Wiadomości są przechowywane maksymalnie przez {1} dni.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Wyślij wiadomość',
'받는 회원아이디' => 'Nazwa użytkownika odbiorcy',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Wielu odbiorców oddziel przecinkami (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Wysłanie wiadomości kosztuje {1} pkt za każdego odbiorcę.',
'보내기' => 'Wyślij',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Wysłano',
'받은' => 'Odebrano',
'받는' => 'Do',
'쪽지 내용' => 'Treść wiadomości',
'{1}시간' => '{1}:',
'이전쪽지' => 'Poprzednia wiadomość',
'다음쪽지' => 'Następna wiadomość',
'답장' => 'Odpowiedz',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Edytuj wpis',
'글 삭제' => 'Usuń wpis',
'댓글 삭제' => 'Usuń komentarz',
'작성자만 글을 수정할 수 있습니다.' => 'Tylko autor może edytować ten wpis.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Jeśli jesteś autorem, wpisz hasło podane przy tworzeniu wpisu, aby go edytować.',
'작성자만 글을 삭제할 수 있습니다.' => 'Tylko autor może usunąć ten wpis.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Jeśli jesteś autorem, wpisz hasło podane przy tworzeniu wpisu, aby go usunąć.',
'비밀글 기능으로 보호된 글입니다.' => 'To jest wpis prywatny.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Mogą go wyświetlić tylko autor i administratorzy. Jeśli jesteś autorem, wpisz hasło.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Odzyskaj przez e-mail',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Wpisz adres e-mail podany podczas rejestracji.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Wyślemy na ten adres informacje o nazwie użytkownika i haśle.',
'E-mail 주소' => 'Adres e-mail',
'인증메일 보내기' => 'Wyślij e-mail weryfikacyjny',
'본인인증으로 찾기' => 'Odzyskaj przez weryfikację tożsamości',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Wpisz nowe hasło.',
'회원 아이디 :' => 'Nazwa użytkownika:',
'새 비밀번호' => 'Nowe hasło',
'새 비밀번호 확인' => 'Potwierdź nowe hasło',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Hasło zostało zmienione. Zaloguj się ponownie.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Nowe hasło i jego potwierdzenie nie są zgodne.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Saldo punktów',
'y-m-d H시' => 'd.m.y H:00',
'만료' => 'Wygasłe',
'소계' => 'Suma częściowa',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Profil użytkownika {1}',
'회원권한' => 'Poziom użytkownika',
'포인트' => 'Punkty',
'회원가입일' => 'Data rejestracji',
' ({1} 일)' => ' ({1} dni)',
'알 수 없음' => 'Nieznane',
'최종접속일' => 'Ostatnia wizyta',
'인사말' => 'Powitanie',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Aby się zarejestrować, musisz zaakceptować regulamin oraz zbieranie i wykorzystywanie danych osobowych.',
'회원가입 약관에 모두 동의합니다' => 'Akceptuję wszystkie warunki',
'(필수) 회원가입약관' => '(Wymagane) Regulamin',
'회원가입약관의 내용에 동의합니다.' => 'Akceptuję regulamin.',
'(필수) 개인정보 수집 및 이용' => '(Wymagane) Zbieranie i wykorzystywanie danych osobowych',
'개인정보 수집 및 이용' => 'Zbieranie i wykorzystywanie danych osobowych',
'아이디, 이름, 비밀번호' => 'Nazwa użytkownika, imię i nazwisko, hasło',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', data urodzenia, numer telefonu komórkowego (tylko przy weryfikacji tożsamości, z wyjątkiem i-PIN), zaszyfrowany identyfikator osobisty (CI)',
'고객서비스 이용에 관한 통지,' => 'Powiadomienia dotyczące obsługi klienta,',
'CS대응을 위한 이용자 식별' => 'identyfikacja użytkownika na potrzeby obsługi klienta',
'연락처 (이메일, 휴대전화번호)' => 'Dane kontaktowe (e-mail, numer telefonu komórkowego)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Akceptuję zbieranie i wykorzystywanie danych osobowych.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Aby się zarejestrować, musisz zaakceptować regulamin.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Aby się zarejestrować, musisz zaakceptować zbieranie i wykorzystywanie danych osobowych.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Dane konta',
'아이디 (필수)' => 'Nazwa użytkownika (wymagane)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Tylko litery, cyfry i _. Co najmniej 3 znaki.',
'비밀번호 (필수)' => 'Hasło (wymagane)',
'비밀번호확인 (필수)' => 'Potwierdź hasło (wymagane)',
'개인정보 입력' => 'Dane osobowe',
' - 본인확인 시 자동입력' => ' - wypełniane automatycznie po weryfikacji',
'(필수)' => '(wymagane)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Telefon komórkowy',
'{1} 본인확인' => 'Weryfikacja: {1}',
'{1} 및 {2} 완료' => 'Zakończono: {1} i {2}',
'성인인증' => 'weryfikacja pełnoletności',
'{1} 완료' => 'Zakończono: {1}',
'이름 (필수)' => 'Imię i nazwisko (wymagane)',
'닉네임 (필수)' => 'Pseudonim (wymagane)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Tylko litery koreańskie, łacińskie i cyfry, bez spacji (co najmniej 2 znaki koreańskie lub 4 łacińskie)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Po zmianie pseudonimu nie będzie można go ponownie zmienić przez {1} dni.',
'E-mail (필수)' => 'E-mail (wymagane)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Rejestracja zostanie zakończona po potwierdzeniu wysłanej wiadomości e-mail.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Po zmianie adresu e-mail trzeba go ponownie zweryfikować.',
'전화번호' => 'Numer telefonu',
'휴대폰번호' => 'Numer telefonu komórkowego',
'주소' => 'Adres',
'우편번호' => 'Kod pocztowy',
' (필수)' => ' (wymagane)',
'주소검색' => 'Znajdź adres',
'상세주소' => 'Szczegóły adresu',
'참고항목' => 'Informacje dodatkowe',
'기타 개인설정' => 'Inne ustawienia',
'서명' => 'Podpis',
'자기소개' => 'O mnie',
'회원아이콘' => 'Ikona użytkownika',
'이미지선택' => 'Wybierz obraz',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Obraz może mieć maksymalnie {1} px szerokości i {2} px wysokości.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Tylko pliki gif, jpg i png do {1} bajtów.',
'회원이미지' => 'Zdjęcie użytkownika',
'정보공개' => 'Profil publiczny',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Pozwól innym zobaczyć moje dane.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Po zmianie tego ustawienia nie będzie można go ponownie zmienić przez {1} dni.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Tego ustawienia nie można zmienić przez {1} dni od ostatniej zmiany (do {2}).',
'Y년 m월 j일' => 'd.m.Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Zapobiega to sytuacjom, w których użytkownik wysyła wiadomość, a następnie ukrywa profil, aby uniknąć odpowiedzi.',
'추천인아이디' => 'Nazwa użytkownika polecającego',
'수신설정' => 'Ustawienia powiadomień',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Opcjonalne) Zbieranie i wykorzystywanie danych osobowych w celach marketingowych',
'자세히보기' => 'Szczegóły',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informacje o zbieraniu i wykorzystywaniu danych osobowych w celach marketingowych. Kliknij Szczegóły, aby przeczytać pełną treść.',
'(동의일자: {1})' => '(Data zgody: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Cel: marketing i promocje usług',
'* 항목: 이름, 이메일' => '* Zakres danych: imię i nazwisko, e-mail',
', 휴대폰 번호' => ', numer telefonu komórkowego',
'* 보유기간: 회원 탈퇴 시까지' => '* Okres przechowywania: do momentu usunięcia konta',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Odmowa zgody nie uniemożliwia korzystania z podstawowych usług, ale może ograniczyć spersonalizowane korzyści.',
'(선택) 광고성 정보 수신 동의' => '(Opcjonalne) Zgoda na otrzymywanie informacji reklamowych',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Obejmuje zgodę na otrzymywanie informacji reklamowych (e-mail/SMS/KakaoTalk). Kliknij Szczegóły, aby przeczytać pełną treść.',
'광고성 이메일 수신 동의' => 'Otrzymuj e-maile reklamowe',
'광고성 SMS/카카오톡 수신 동의' => 'Otrzymuj reklamy przez SMS/KakaoTalk',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Możemy wysyłać informacje reklamowe przez e-mail/SMS/KakaoTalk w godzinach 8:00–21:00, wykorzystując dane osobowe objęte udzieloną zgodą.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Zgodę możesz wycofać w dowolnym momencie w sekcji Moje konto.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Opcjonalne) Zgoda na udostępnianie danych osobowych podmiotom trzecim',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informacje o udostępnianiu danych osobowych podmiotom trzecim. Kliknij Szczegóły, aby przeczytać pełną treść.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Cel: informacje marketingowe o produktach/usługach, promocjach i wydarzeniach (KakaoTalk itp.)',
'* 항목: 이름, 휴대폰 번호' => '* Zakres danych: imię i nazwisko, numer telefonu komórkowego',
'* 제공받는 자:' => '* Odbiorca:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Okres przechowywania: przez czas świadczenia usługi lub do wycofania zgody',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Tożsamość została już zweryfikowana ({1}).

Anulować poprzednią weryfikację i zweryfikować ponownie?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Hasło musi mieć co najmniej 3 znaki.',
'비밀번호가 같지 않습니다.' => 'Hasła nie są zgodne.',
'이름을 입력하십시오.' => 'Wpisz imię i nazwisko.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Rejestracja wymaga weryfikacji tożsamości.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Ikona użytkownika nie jest plikiem graficznym.',
'회원이미지가 이미지 파일이 아닙니다.' => 'Zdjęcie użytkownika nie jest plikiem graficznym.',
'본인을 추천할 수 없습니다.' => 'Nie możesz polecić samego siebie.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Rejestracja zakończona',
'{1}님의 회원가입을 진심으로 축하합니다.' => '{1}, gratulujemy rejestracji!',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Na podany adres wysłano wiadomość weryfikacyjną.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Sprawdź pocztę i dokończ weryfikację, aby korzystać z witryny.',
'이메일 주소' => 'Adres e-mail',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Jeśli podano błędny adres e-mail, skontaktuj się z administratorem witryny.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Twoje hasło jest przechowywane w postaci zaszyfrowanej, więc nikt nie może go odczytać.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Jeśli zapomnisz nazwy użytkownika lub hasła, możesz je odzyskać za pomocą adresu e-mail podanego przy rejestracji.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Konto możesz usunąć w dowolnym momencie; Twoje dane zostaną usunięte po określonym czasie.',
'감사합니다.' => 'Dziękujemy.',
'메인으로' => 'Strona główna',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Zapisz',
'제목 확인 및 댓글 쓰기' => 'Sprawdź tytuł i napisz komentarz',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Zapisując wpis, możesz zostawić komentarz z podziękowaniem lub słowami zachęty.',
'스크랩 확인' => 'Potwierdź zapisanie',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Wyszukiwanie zaawansowane',
'전체게시물' => 'Wszystkie wpisy',
'원글만' => 'Tylko wpisy',
'코멘트만' => 'Tylko komentarze',
'회원 아이디만 검색 가능' => 'Wyszukiwanie tylko po nazwie użytkownika',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Logowanie',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Moje konto',
'{1}님' => '{1}',
'안 읽은' => 'Nieprzeczytane ',
'쪽지' => 'Wiadomości',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Czy na pewno chcesz usunąć konto?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Zamknij kategorie',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Kupony',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Ankieta',
'결과보기' => 'Zobacz wyniki',
'관리자 관리' => 'Administracja',
'투표하기' => 'Głosuj',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Głosować mogą tylko użytkownicy z poziomem {1} lub wyższym.',
'투표하실 설문항목을 선택하세요' => 'Wybierz opcję, na którą chcesz zagłosować',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Wyniki mogą zobaczyć tylko użytkownicy z poziomem {1} lub wyższym.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Łącznie głosów: {1}',
'결과' => 'Wyniki',
'{1} 표' => 'Głosy: {1}',
'이 설문에 대한 기타의견' => 'Inne opinie o tej ankiecie',
'님의 의견' => ' (opinia)',
'기타의견' => 'Inne opinie',
'의견' => 'Opinia',
'의견을 입력해주세요' => 'Wpisz swoją opinię',
'의견남기기' => 'Dodaj opinię',
'다른 투표 결과 보기' => 'Wyniki innych ankiet',
'해당 기타의견을 삭제하시겠습니까?' => 'Usunąć tę opinię?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Popularne wyszukiwania',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Nowe zapytanie',
'답변완료' => 'Odpowiedziano',
'답변대기' => 'Oczekuje',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Czy na pewno chcesz usunąć zaznaczone wpisy?

Usuniętych danych nie można odzyskać.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Edytuj odpowiedź',
'답변삭제' => 'Usuń odpowiedź',
'추가질문' => 'Dodatkowe pytanie',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Dodaj odpowiedź',
'파일 #1' => 'Plik #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Załącznik 1: maks. {1}',
'파일 #2' => 'Plik #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Załącznik 2: maks. {1}',
'답변쓰기' => 'Napisz odpowiedź',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Przygotowujemy odpowiedź na Twoje zapytanie.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Dane kontaktowe',
'첨부' => 'Załącznik',
'연관질문' => 'Powiązane pytania',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Powiadom o odpowiedzi',
'답변등록 SMS알림 수신' => 'Powiadom mnie SMS-em o odpowiedzi',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Wpisz numer telefonu komórkowego, używając tylko cyfr i znaku -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Wyniki wyszukiwania',
'게시판' => 'Fora',
'{1}개' => '{1}',
'게시물' => 'Wpisy',
'페이지 열람 중' => 'str.',
'검색조건' => 'Opcje wyszukiwania',
'제목+내용' => 'Tytuł+Treść',
'전체게시판' => 'Wszystkie fora',
'검색된 자료가 하나도 없습니다.' => 'Nie znaleziono wyników.',
'게시판 내 결과' => 'Wyniki na forum',
'{1} 결과 더보기' => 'Więcej wyników: {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Statystyki odwiedzin',
'오늘' => 'Dzisiaj',
'어제' => 'Wczoraj',
'최대' => 'Maks.',
'visit|전체' => 'Łącznie',
'상세보기' => 'Szczegóły',

// theme/basic/mobile/tail.php
'회사소개' => 'O nas',
'개인정보처리방침' => 'Polityka prywatności',
'서비스이용약관' => 'Regulamin',
'소유하신 도메인.' => 'Twoja domena.',
'사이트 정보' => 'Informacje o witrynie',
'회사명 : 회사명 / 대표 : 대표자명' => 'Firma: Nazwa firmy / Prezes: Imię i nazwisko prezesa',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adres: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'Numer rejestracyjny firmy: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel.: 02-123-4567  Faks: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Nr rejestru sprzedaży wysyłkowej: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Inspektor ochrony danych: Imię i nazwisko inspektora',
'상단으로' => 'Do góry',
'PC 버전으로 보기' => 'Wersja na komputer',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Łącznie: {1}',
'게시판 검색' => 'Szukaj na forum',
'현재 페이지 게시물  전체선택' => 'Zaznacz wszystkie wpisy na tej stronie',
'번호' => 'Nr',
'글쓴이' => 'Autor',
'날짜' => 'Data',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => 'Pobrania: {1} | DATA: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1} –',
'댓글의' => '(odpowiedź)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Wybierz kategorię',
'임시 저장된 글 ({1})' => 'Wersje robocze ({1})',
'임시 저장된 글 목록' => 'Lista wersji roboczych',
'링크  #{1}' => 'Link #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Szukaj w FAQ',
'FAQ 수정' => 'Edytuj FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Popularne wpisy',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Brak obrazów.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Użytkownik',
'ID/PW 찾기' => 'Odzyskaj login/hasło',
'주문서번호' => 'Numer zamówienia',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Mogą go wyświetlić tylko autor i administratorzy.',
'본인이라면 비밀번호를 입력하세요.' => 'Jeśli jesteś autorem, wpisz hasło.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Pomoc',
'비밀번호 확인 (필수)' => 'Potwierdź hasło (wymagane)',
'비밀번호 확인' => 'Potwierdź hasło',
'본인확인 시 자동입력' => 'Wypełniane automatycznie po weryfikacji',
'닉네임' => 'Pseudonim',
'주소 검색' => 'Znajdź adres',
'기본주소' => 'Adres',
' (동의일자: {1})' => ' (Data zgody: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Napisz komentarz',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Wszystkie',
'그룹' => 'Grupa',
'일시' => 'Data',
'{1}번' => 'Nr {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Czy na pewno chcesz kontynuować dla zaznaczonych wpisów?

Usuniętych danych nie można odzyskać.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Konto',
'마이페이지' => 'Moje konto',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Zarządzaj ankietą',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Obecnie prowadzi',
'500 표' => '500 głosów',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Data',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Opcje odpowiedzi',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Opcje wpisu',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Napisz zapytanie 1:1',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Wyniki wyszukiwania dla: {1}',
'게시판 {1}개' => 'Fora: {1}',
'게시물 {1}개' => 'Wpisy: {1}',
'새창' => 'Nowe okno',

// theme/basic/tail.php
'모바일버전' => 'Wersja mobilna',
);
