<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (sv). 틀은 php lang/build.php sv 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Hoppa till innehållet',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Butik',
'새글' => 'Nya inlägg',
'접속자' => 'Besökare',
'사이트 내 전체검색' => 'Sök på webbplatsen',
'검색어 필수' => 'Sökord (obligatoriskt)',
'검색어를 입력해주세요' => 'Ange ett sökord',
'검색' => 'Sök',
'검색어는 두글자 이상 입력하십시오.' => 'Ange minst två tecken.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'För snabbare sökning får sökordet bara innehålla ett mellanslag.',
'정보수정' => 'Redigera profil',
'로그아웃' => 'Logga ut',
'관리자' => 'Admin',
'회원가입' => 'Bli medlem',
'로그인' => 'Logga in',
'메인메뉴' => 'Huvudmeny',
'전체메뉴' => 'Alla menyer',
'전체메뉴열기' => 'Öppna alla menyer',
'하위분류' => 'Undermeny',
'메뉴 준비 중입니다.' => 'Menyn förbereds.',
'{1}에서 설정하실 수 있습니다.' => 'Du kan ställa in den under {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Admin &gt; Inställningar &gt; Menyinställningar',

// theme/basic/index.php
'최신글' => 'Senaste inläggen',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'Gruppen {1} är bara tillgänglig på dator.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Öppna meny',
'메뉴 닫기' => 'Stäng meny',
'{1}에서 설정하세요.' => 'Ställ in den under {1}.',
'1:1문의' => '1:1-förfrågan',
'사용자메뉴' => 'Användarmeny',
'기본' => 'Standard',
'크게' => 'Stor',
'더크게' => 'Större',
'열기' => 'Öppna',
'닫기' => 'Stäng',
'뒤로가기' => 'Tillbaka',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Alternativ för inläggslistan',
'선택삭제' => 'Radera markerade',
'선택복사' => 'Kopiera markerade',
'선택이동' => 'Flytta markerade',
'글쓰기' => 'Skriv',
'카테고리' => 'Kategori',
'현재 페이지 게시물' => 'Inlägg på den här sidan',
'전체선택' => 'Markera alla',
'공지' => 'Meddelande',
'댓글' => 'Kommentarer',
'개' => ' ',
'작성자' => 'Författare',
'회' => ' visningar',
'추천' => 'Gilla',
'비추천' => 'Ogilla',
'게시물이 없습니다.' => 'Inga inlägg.',
'자바스크립트를 사용하지 않는 경우' => 'Om JavaScript är avstängt',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'raderas markerade objekt direkt utan bekräftelse, så var försiktig.',
'전체 {1}건' => 'Totalt {1}',
'페이지' => 'Sida',
'게시물 검색' => 'Sök inlägg',
'검색대상' => 'Sök i',
'검색어를 입력하세요' => 'Ange ett sökord',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Markera minst ett inlägg.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Vill du verkligen radera de markerade inläggen?

Raderade data kan inte återställas.

Om ett markerat inlägg har svar
måste du även markera svaren för att radera det.',
'복사' => 'Kopiera',
'이동' => 'Flytta',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Dela',
'스크랩' => 'Spara',
'답변' => 'Svara',
'수정' => 'Redigera',
'삭제' => 'Radera',
'목록' => 'Lista',
'페이지 정보' => 'Sidinformation',
'작성일' => 'Datum',
'조회' => 'Visningar',
'본문' => 'Innehåll',
'이 글을 추천하셨습니다' => 'Du gillar det här inlägget',
'첨부파일' => 'Bilagor',
'{1}회 다운로드' => '{1} nedladdningar',
'관련링크' => 'Relaterade länkar',
'{1}회 연결' => '{1} klick',
'이전글' => 'Föregående inlägg',
'다음글' => 'Nästa inlägg',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Du har inte behörighet att ladda ner.
Om du är medlem, logga in och försök igen.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Om du laddar ner filen dras {1} poäng av.

Poäng dras bara en gång per inlägg och dras inte igen om du laddar ner filen senare.

Vill du ladda ner filen?',
'이 글을 비추천하셨습니다.' => 'Du ogillar det här inlägget.',
'이 글을 추천하셨습니다.' => 'Du gillar det här inlägget.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Kommentarlista',
'{1}님의 댓글' => 'Kommentar av {1}',
'의 댓글' => ' (svar)',
'아이피' => 'IP',
'댓글 옵션' => 'Kommentarsalternativ',
'비밀글' => 'Privat',
'등록된 댓글이 없습니다.' => 'Inga kommentarer ännu.',
'댓글쓰기' => 'Skriv en kommentar',
'글자' => ' tecken',
'댓글 내용' => 'Kommentar',
'댓글내용을 입력해주세요' => 'Skriv din kommentar',
'이름' => 'Namn',
'필수' => 'Obligatoriskt',
'비밀번호' => 'Lösenord',
'SNS 동시등록' => 'Publicera även i sociala medier',
'댓글등록' => 'Skicka kommentar',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'Innehållet innehåller ett förbjudet ord (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Kommentarer måste vara minst {1} tecken.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Kommentarer får vara högst {1} tecken.',
'댓글을 입력하여 주십시오.' => 'Skriv en kommentar.',
'이름이 입력되지 않았습니다.' => 'Ange ditt namn.',
'비밀번호가 입력되지 않았습니다.' => 'Ange ett lösenord.',
'이 댓글을 삭제하시겠습니까?' => 'Radera den här kommentaren?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Få svar via e-post',
'분류' => 'Kategori',
'선택하세요' => 'Välj',
'이메일' => 'E-post',
'홈페이지' => 'Webbplats',
'옵션' => 'Alternativ',
'제목' => 'Ämne',
'내용' => 'Innehåll',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Inlägg i det här forumet måste vara mellan {1} och {2} tecken.',
'링크 #{1}' => 'Länk #{1}',
'링크를 입력하세요' => 'Ange en länk',
'파일을 첨부하세요' => 'Bifoga en fil',
'파일 #{1}' => 'Fil #{1}',
'파일첨부' => 'Bifoga fil',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Bilaga {1}: högst {2}',
'파일 설명을 입력해주세요.' => 'Ange en filbeskrivning.',
'파일 삭제' => 'Radera fil',
'자동등록방지' => 'Skräppostskydd',
'취소' => 'Avbryt',
'작성완료' => 'Skicka',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Använda automatiska radbrytningar?

Automatiska radbrytningar omvandlar radbrytningar i inlägget till <br>-taggar.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Ämnet innehåller ett förbjudet ord (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Innehållet måste vara minst {1} tecken.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Innehållet får vara högst {1} tecken.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Bildlista',
'열람중' => 'Visas',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Ingen är online.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Sökord',
'자주하시는질문 분류' => 'FAQ-kategorier',
'열린 분류' => 'Öppen kategori',
'검색된 게시물이 없습니다.' => 'Inga resultat hittades.',
'등록된 FAQ가 없습니다.' => 'Inga vanliga frågor ännu.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Lägg till vanliga frågor via menyn',
'메뉴를 이용하십시오.' => 'FAQ-hantering.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Föregående sida',
'다음페이지' => 'Nästa sida',
'전체보기' => 'Visa alla',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Senaste kommentarerna',
'더보기' => 'Mer',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Information',
'동의합니다' => 'Jag godkänner',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Skicka e-post till {1}',
'메일쓰기' => 'Skriv e-post',
'형식' => 'Format',
'첨부 파일 1' => 'Bilaga 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Bilagor kan gå förlorade, så kontrollera efter sändningen att filen bifogades.',
'첨부 파일 2' => 'Bilaga 2',
'메일발송' => 'Skicka e-post',
'창닫기' => 'Stäng fönstret',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Stora bilagor tar längre tid att skicka.

Stäng eller uppdatera inte fönstret förrän e-postmeddelandet har skickats.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Användarnamn',
'자동로그인' => 'Håll mig inloggad',
'회원로그인 안내' => 'Medlemsinloggning',
'아이디/비밀번호 찾기' => 'Glömt användarnamn/lösenord',
'회원 가입' => 'Bli medlem',
'비회원 구매' => 'Köp som gäst',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Inga poäng ges för gästbeställningar.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Jag har läst och godkänner insamlingen av personuppgifter.',
'비회원으로 구매하기' => 'Köp som gäst',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Du måste läsa och godkänna insamlingen av personuppgifter.',
'비회원 주문조회' => 'Hitta gästbeställning',
'주문번호' => 'Ordernummer',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Ange {1} från orderbekräftelsen och {2} som du angav vid beställningen.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Med automatisk inloggning behöver du inte ange användarnamn och lösenord nästa gång.

Undvik att använda det på offentliga datorer, eftersom dina personuppgifter kan exponeras.

Använda automatisk inloggning?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Obligatoriskt) Ytterligare integritetspolicy',
'추가 개인정보처리방침 안내' => 'Ytterligare integritetspolicy',
'목적' => 'Syfte',
'항목' => 'Uppgifter',
'보유기간' => 'Lagringstid',
'이용자 식별 및 본인여부 확인' => 'Identifiering av användare och identitetskontroll',
'생년월일' => 'Födelsedatum',
', 휴대폰 번호(아이핀 제외)' => ', mobilnummer (utom i-PIN)',
', 암호화된 개인식별부호(CI)' => ', krypterad personlig identifierare (CI)',
'회원 탈퇴 시까지' => 'Tills medlemskapet avslutas',
'추가 개인정보처리방침에 동의합니다.' => 'Jag godkänner den ytterligare integritetspolicyn.',
'인증수단 선택하기' => 'Välj verifieringsmetod',
'간편인증' => 'Enkel verifiering',
'휴대폰 본인확인' => 'Verifiering via mobil',
'아이핀 본인확인' => 'Verifiering via i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript måste vara aktiverat för identitetskontroll.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Ställ in mobilverifiering i grundinställningarna.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Du måste godkänna den ytterligare integritetspolicyn för att fortsätta med verifieringen.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Ange ditt lösenord igen.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Ange ditt lösenord för att avsluta ditt konto.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'För att skydda dina uppgifter kontrollerar vi ditt lösenord en gång till.',
'회원아이디' => 'Användarnamn',
'비밀번호(필수)' => 'Lösenord (obligatoriskt)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Totalt {2} meddelanden ({1})',
'받은쪽지' => 'Inkorg',
'보낸쪽지' => 'Skickade',
'쪽지쓰기' => 'Skriv meddelande',
'안 읽은 쪽지' => 'Oläst meddelande',
'자료가 없습니다.' => 'Inga data.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Meddelanden sparas i högst {1} dagar.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Skicka meddelande',
'받는 회원아이디' => 'Mottagarens användarnamn',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Separera flera mottagare med kommatecken (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'När du skickar ett meddelande dras {1} poäng av per mottagare.',
'보내기' => 'Skicka',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Skickat',
'받은' => 'Mottaget',
'받는' => 'Till',
'쪽지 내용' => 'Meddelande',
'{1}시간' => '{1} den',
'이전쪽지' => 'Föregående meddelande',
'다음쪽지' => 'Nästa meddelande',
'답장' => 'Svara',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Redigera inlägg',
'글 삭제' => 'Radera inlägg',
'댓글 삭제' => 'Radera kommentar',
'작성자만 글을 수정할 수 있습니다.' => 'Endast författaren kan redigera det här inlägget.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Om du är författaren kan du redigera inlägget genom att ange lösenordet du använde när du skrev det.',
'작성자만 글을 삭제할 수 있습니다.' => 'Endast författaren kan radera det här inlägget.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Om du är författaren kan du radera inlägget genom att ange lösenordet du använde när du skrev det.',
'비밀글 기능으로 보호된 글입니다.' => 'Det här är ett privat inlägg.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Endast författaren och administratörer kan se det. Om du är författaren, ange lösenordet.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Sök via e-post',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Ange e-postadressen du registrerade dig med.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Vi skickar ditt användarnamn och din lösenordsinformation till den e-postadressen.',
'E-mail 주소' => 'E-postadress',
'인증메일 보내기' => 'Skicka verifieringsmejl',
'본인인증으로 찾기' => 'Sök via identitetskontroll',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Ange ett nytt lösenord.',
'회원 아이디 :' => 'Användarnamn:',
'새 비밀번호' => 'Nytt lösenord',
'새 비밀번호 확인' => 'Bekräfta nytt lösenord',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Ditt lösenord har ändrats. Logga in igen.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Det nya lösenordet och bekräftelsen matchar inte.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Poängsaldo',
'y-m-d H시' => 'y-m-d H:00',
'만료' => 'Utgått',
'소계' => 'Delsumma',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => '{1}s profil',
'회원권한' => 'Medlemsnivå',
'포인트' => 'Poäng',
'회원가입일' => 'Medlem sedan',
' ({1} 일)' => ' ({1} dagar)',
'알 수 없음' => 'Okänt',
'최종접속일' => 'Senaste besök',
'인사말' => 'Hälsning',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du måste godkänna användarvillkoren samt insamling och användning av personuppgifter för att bli medlem.',
'회원가입 약관에 모두 동의합니다' => 'Jag godkänner alla villkor',
'(필수) 회원가입약관' => '(Obligatoriskt) Användarvillkor',
'회원가입약관의 내용에 동의합니다.' => 'Jag godkänner användarvillkoren.',
'(필수) 개인정보 수집 및 이용' => '(Obligatoriskt) Insamling och användning av personuppgifter',
'개인정보 수집 및 이용' => 'Insamling och användning av personuppgifter',
'아이디, 이름, 비밀번호' => 'Användarnamn, namn, lösenord',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', födelsedatum, mobilnummer (endast vid identitetskontroll, utom i-PIN), krypterad personlig identifierare (CI)',
'고객서비스 이용에 관한 통지,' => 'Meddelanden om kundtjänst,',
'CS대응을 위한 이용자 식별' => 'identifiering av användare för kundsupport',
'연락처 (이메일, 휴대전화번호)' => 'Kontaktuppgifter (e-post, mobilnummer)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Jag godkänner insamling och användning av personuppgifter.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du måste godkänna användarvillkoren för att bli medlem.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du måste godkänna insamling och användning av personuppgifter för att bli medlem.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Kontouppgifter',
'아이디 (필수)' => 'Användarnamn (obligatoriskt)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Endast bokstäver, siffror och _. Minst 3 tecken.',
'비밀번호 (필수)' => 'Lösenord (obligatoriskt)',
'비밀번호확인 (필수)' => 'Bekräfta lösenord (obligatoriskt)',
'개인정보 입력' => 'Personuppgifter',
' - 본인확인 시 자동입력' => ' - fylls i automatiskt vid verifiering',
'(필수)' => '(obligatoriskt)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobil',
'{1} 본인확인' => 'Verifiering via {1}',
'{1} 및 {2} 완료' => '{1} och {2} slutförda',
'성인인증' => 'åldersverifiering',
'{1} 완료' => '{1} slutförd',
'이름 (필수)' => 'Namn (obligatoriskt)',
'닉네임 (필수)' => 'Smeknamn (obligatoriskt)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Endast koreanska tecken, latinska bokstäver och siffror, utan mellanslag (minst 2 koreanska eller 4 latinska tecken)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Om du ändrar ditt smeknamn kan du inte ändra det igen på {1} dagar.',
'E-mail (필수)' => 'E-post (obligatoriskt)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Registreringen är klar när du har verifierat e-postmeddelandet vi skickar.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Om du ändrar din e-postadress måste du verifiera den igen.',
'전화번호' => 'Telefonnummer',
'휴대폰번호' => 'Mobilnummer',
'주소' => 'Adress',
'우편번호' => 'Postnummer',
' (필수)' => ' (obligatoriskt)',
'주소검색' => 'Sök adress',
'상세주소' => 'Adressdetaljer',
'참고항목' => 'Övrigt',
'기타 개인설정' => 'Övriga inställningar',
'서명' => 'Signatur',
'자기소개' => 'Om mig',
'회원아이콘' => 'Medlemsikon',
'이미지선택' => 'Välj bild',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Bilden får vara högst {1} px bred och {2} px hög.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Endast gif-, jpg- och png-filer på högst {1} byte.',
'회원이미지' => 'Medlemsbild',
'정보공개' => 'Offentlig profil',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Låt andra se mina uppgifter.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Om du ändrar detta kan du inte ändra det igen på {1} dagar.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Inställningen kan inte ändras på {1} dagar efter en ändring (till {2}).',
'Y년 m월 j일' => 'Y-m-d',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Detta hindrar medlemmar från att skicka meddelanden och sedan dölja sin profil för att slippa svar.',
'추천인아이디' => 'Värvarens användarnamn',
'수신설정' => 'Aviseringsinställningar',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Valfritt) Insamling och användning av personuppgifter för marknadsföring',
'자세히보기' => 'Detaljer',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Information om insamling och användning av personuppgifter för marknadsföring. Klicka på Detaljer för att läsa hela texten.',
'(동의일자: {1})' => '(Godkänt den: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Syfte: marknadsföring och kampanjer för tjänsten',
'* 항목: 이름, 이메일' => '* Uppgifter: namn, e-post',
', 휴대폰 번호' => ', mobilnummer',
'* 보유기간: 회원 탈퇴 시까지' => '* Lagringstid: tills medlemskapet avslutas',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Du kan fortfarande använda grundtjänsten om du avböjer, men personliga förmåner kan begränsas.',
'(선택) 광고성 정보 수신 동의' => '(Valfritt) Samtycke till att ta emot reklam',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Detta gäller samtycke till att ta emot reklam (e-post/sms/KakaoTalk). Klicka på Detaljer för att läsa hela texten.',
'광고성 이메일 수신 동의' => 'Ta emot reklam via e-post',
'광고성 SMS/카카오톡 수신 동의' => 'Ta emot reklam via sms/KakaoTalk',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Vi kan skicka reklam via e-post/sms/KakaoTalk mellan kl. 8 och 21 med hjälp av de personuppgifter du har samtyckt till.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Du kan när som helst återkalla ditt samtycke under Mina sidor.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Valfritt) Samtycke till att lämna ut personuppgifter till tredje part',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Information om utlämnande av personuppgifter till tredje part. Klicka på Detaljer för att läsa hela texten.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Syfte: marknadsföring om produkter/tjänster, kampanjer och evenemang (KakaoTalk m.m.)',
'* 항목: 이름, 휴대폰 번호' => '* Uppgifter: namn, mobilnummer',
'* 제공받는 자:' => '* Mottagare:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Lagringstid: under tjänstens löptid eller tills samtycket återkallas',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Du har redan verifierat din identitet via {1}.

Vill du avbryta den tidigare verifieringen och verifiera igen?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Lösenordet måste vara minst 3 tecken.',
'비밀번호가 같지 않습니다.' => 'Lösenorden matchar inte.',
'이름을 입력하십시오.' => 'Ange ditt namn.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetskontroll krävs för att bli medlem.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Medlemsikonen är inte en bildfil.',
'회원이미지가 이미지 파일이 아닙니다.' => 'Medlemsbilden är inte en bildfil.',
'본인을 추천할 수 없습니다.' => 'Du kan inte värva dig själv.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Registreringen är klar',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Grattis till medlemskapet, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Ett verifieringsmejl har skickats till adressen du angav.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Kontrollera e-postmeddelandet och slutför verifieringen för att använda webbplatsen.',
'이메일 주소' => 'E-postadress',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Om du angav fel e-postadress, kontakta webbplatsens administratör.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Ditt lösenord lagras krypterat, så ingen kan läsa det.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Om du glömmer ditt användarnamn eller lösenord kan du återställa dem med den registrerade e-postadressen.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Du kan när som helst avsluta ditt medlemskap; dina uppgifter raderas efter en viss tid.',
'감사합니다.' => 'Tack.',
'메인으로' => 'Till startsidan',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Spara',
'제목 확인 및 댓글 쓰기' => 'Kontrollera ämnet och skriv en kommentar',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Du kan lämna en kommentar med tack eller uppmuntran när du sparar.',
'스크랩 확인' => 'Bekräfta sparande',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Avancerad sökning',
'전체게시물' => 'Alla inlägg',
'원글만' => 'Endast inlägg',
'코멘트만' => 'Endast kommentarer',
'회원 아이디만 검색 가능' => 'Sök endast på användarnamn',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Medlemsinloggning',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Mitt konto',
'{1}님' => '{1}',
'안 읽은' => 'Olästa',
'쪽지' => 'Meddelanden',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Vill du verkligen avsluta ditt medlemskap?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Stäng kategorier',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Kuponger',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Omröstning',
'결과보기' => 'Visa resultat',
'관리자 관리' => 'Admin',
'투표하기' => 'Rösta',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Endast medlemmar på nivå {1} eller högre kan rösta.',
'투표하실 설문항목을 선택하세요' => 'Välj ett alternativ att rösta på',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Endast medlemmar på nivå {1} eller högre kan se resultaten.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Totalt {1} röster',
'결과' => 'Resultat',
'{1} 표' => '{1} röster',
'이 설문에 대한 기타의견' => 'Andra åsikter om omröstningen',
'님의 의견' => 's åsikt',
'기타의견' => 'Andra åsikter',
'의견' => 'Åsikt',
'의견을 입력해주세요' => 'Skriv din åsikt',
'의견남기기' => 'Lämna en åsikt',
'다른 투표 결과 보기' => 'Andra omröstningsresultat',
'해당 기타의견을 삭제하시겠습니까?' => 'Radera den här åsikten?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Populära sökningar',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Ny förfrågan',
'답변완료' => 'Besvarad',
'답변대기' => 'Väntar',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Vill du verkligen radera de markerade inläggen?

Raderade data kan inte återställas.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Redigera svar',
'답변삭제' => 'Radera svar',
'추가질문' => 'Följdfråga',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Skicka svar',
'파일 #1' => 'Fil #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Bilaga 1: högst {1}',
'파일 #2' => 'Fil #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Bilaga 2: högst {1}',
'답변쓰기' => 'Skriv svar',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Vi förbereder ett svar på din förfrågan.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Kontaktuppgifter',
'첨부' => 'Bilaga',
'연관질문' => 'Relaterade frågor',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Ta emot svar',
'답변등록 SMS알림 수신' => 'Få sms när frågan besvaras',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Ange mobilnumret med endast siffror och -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Sökresultat',
'게시판' => 'Forum',
'{1}개' => '{1}',
'게시물' => 'Inlägg',
'페이지 열람 중' => 'sidor',
'검색조건' => 'Sökalternativ',
'제목+내용' => 'Ämne+innehåll',
'전체게시판' => 'Alla forum',
'검색된 자료가 하나도 없습니다.' => 'Inga resultat hittades.',
'게시판 내 결과' => 'Resultat i forumet',
'{1} 결과 더보기' => 'Fler resultat i {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Besöksstatistik',
'오늘' => 'Idag',
'어제' => 'Igår',
'최대' => 'Max',
'전체' => 'Totalt',
'상세보기' => 'Detaljer',

// theme/basic/mobile/tail.php
'회사소개' => 'Om oss',
'개인정보처리방침' => 'Integritetspolicy',
'서비스이용약관' => 'Användarvillkor',
'소유하신 도메인.' => 'Din domän.',
'사이트 정보' => 'Webbplatsinformation',
'회사명 : 회사명 / 대표 : 대표자명' => 'Företag: Företagsnamn / VD: Namn',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adress: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'Organisationsnummer: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Registreringsnr. för distanshandel: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Dataskyddsansvarig: Namn',
'상단으로' => 'Till toppen',
'PC 버전으로 보기' => 'Datorversion',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Totalt {1}',
'게시판 검색' => 'Sök i forumet',
'현재 페이지 게시물  전체선택' => 'Markera alla inlägg på den här sidan',
'번호' => 'Nr',
'글쓴이' => 'Författare',
'날짜' => 'Datum',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} nedladdningar | DATUM: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}:',
'댓글의' => 'svar på',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Välj en kategori',
'임시 저장된 글 ({1})' => 'Utkast ({1})',
'임시 저장된 글 목록' => 'Utkastlista',
'링크  #{1}' => 'Länk #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Sök i FAQ',
'FAQ 수정' => 'Redigera FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Populära inlägg',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Inga bilder.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Medlem',
'ID/PW 찾기' => 'Glömt ID/lösenord',
'주문서번호' => 'Ordernummer',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Endast författaren och administratörer kan se det.',
'본인이라면 비밀번호를 입력하세요.' => 'Om du är författaren, ange lösenordet.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Hjälp',
'비밀번호 확인 (필수)' => 'Bekräfta lösenord (obligatoriskt)',
'비밀번호 확인' => 'Bekräfta lösenord',
'본인확인 시 자동입력' => 'Fylls i automatiskt vid verifiering',
'닉네임' => 'Smeknamn',
'주소 검색' => 'Sök adress',
'기본주소' => 'Adress',
' (동의일자: {1})' => ' (Godkänt den: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Skriv kommentar',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Alla',
'그룹' => 'Grupp',
'일시' => 'Datum',
'{1}번' => 'Nr {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Vill du verkligen utföra åtgärden på de markerade inläggen?

Raderade data kan inte återställas.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Konto',
'마이페이지' => 'Mina sidor',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Hantera omröstning',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Leder just nu',
'500 표' => '500 röster',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Datum',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Svarsalternativ',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Inläggsalternativ',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Skriv 1:1-förfrågan',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Sökresultat för {1}',
'게시판 {1}개' => '{1} forum',
'게시물 {1}개' => '{1} inlägg',
'새창' => 'Nytt fönster',

// theme/basic/tail.php
'모바일버전' => 'Mobilversion',
);
