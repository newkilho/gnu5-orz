<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (nl). 틀은 php lang/build.php nl 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'De groep {1} is alleen toegankelijk op mobiel.',

// theme/basic/head.php
'본문 바로가기' => 'Naar inhoud',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Winkel',
'새글' => 'Nieuwe berichten',
'접속자' => 'Bezoekers',
'사이트 내 전체검색' => 'Site doorzoeken',
'검색어 필수' => 'Zoekterm (verplicht)',
'검색어를 입력해주세요' => 'Voer een zoekterm in',
'검색' => 'Zoeken',
'검색어는 두글자 이상 입력하십시오.' => 'Voer ten minste twee tekens in.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Voor sneller zoeken is slechts één spatie in de zoekterm toegestaan.',
'정보수정' => 'Profiel bewerken',
'로그아웃' => 'Uitloggen',
'관리자' => 'Beheer',
'회원가입' => 'Registreren',
'로그인' => 'Inloggen',
'메인메뉴' => 'Hoofdmenu',
'전체메뉴' => 'Alle menu\'s',
'전체메뉴열기' => 'Alle menu\'s openen',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'Het menu wordt voorbereid.',
'{1}에서 설정하실 수 있습니다.' => 'U kunt dit instellen in {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Beheer &gt; Instellingen &gt; Menu-instellingen',

// theme/basic/index.php
'최신글' => 'Laatste berichten',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'De groep {1} is alleen toegankelijk op de pc.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Menu openen',
'메뉴 닫기' => 'Menu sluiten',
'{1}에서 설정하세요.' => 'Stel dit in via {1}.',
'1:1문의' => '1:1-vraag',
'사용자메뉴' => 'Gebruikersmenu',
'기본' => 'Standaard',
'크게' => 'Groot',
'더크게' => 'Groter',
'열기' => 'Openen',
'닫기' => 'Sluiten',
'뒤로가기' => 'Terug',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Opties berichtenlijst',
'선택삭제' => 'Selectie verwijderen',
'선택복사' => 'Selectie kopiëren',
'선택이동' => 'Selectie verplaatsen',
'글쓰기' => 'Schrijven',
'카테고리' => 'Categorie',
'현재 페이지 게시물' => 'Berichten op deze pagina',
'전체선택' => 'Alles selecteren',
'공지' => 'Mededeling',
'댓글' => 'Reacties',
'개' => ' ',
'작성자' => 'Auteur',
'회' => ' weergaven',
'추천' => 'Vind ik leuk',
'비추천' => 'Vind ik niet leuk',
'게시물이 없습니다.' => 'Geen berichten.',
'자바스크립트를 사용하지 않는 경우' => 'Als JavaScript is uitgeschakeld,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'worden geselecteerde items zonder bevestiging direct verwijderd. Wees dus voorzichtig.',
'전체 {1}건' => 'Totaal {1}',
'페이지' => 'Pagina',
'게시물 검색' => 'Berichten zoeken',
'검색대상' => 'Zoeken in',
'검색어를 입력하세요' => 'Voer een zoekterm in',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Selecteer ten minste één bericht.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Weet u zeker dat u de geselecteerde berichten wilt verwijderen?

Verwijderde gegevens kunnen niet worden hersteld.

Als een geselecteerd bericht antwoorden heeft,
moet u ook de antwoorden selecteren om het te verwijderen.',
'복사' => 'Kopiëren',
'이동' => 'Verplaatsen',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Delen',
'스크랩' => 'Bewaren',
'답변' => 'Beantwoorden',
'수정' => 'Bewerken',
'삭제' => 'Verwijderen',
'목록' => 'Lijst',
'페이지 정보' => 'Pagina-info',
'작성일' => 'Datum',
'조회' => 'Weergaven',
'본문' => 'Inhoud',
'이 글을 추천하셨습니다' => 'U vindt dit bericht leuk',
'첨부파일' => 'Bijlagen',
'{1}회 다운로드' => '{1} downloads',
'관련링크' => 'Gerelateerde links',
'{1}회 연결' => '{1} klikken',
'이전글' => 'Vorig bericht',
'다음글' => 'Volgend bericht',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'U hebt geen toestemming om te downloaden.
Als u lid bent, log dan in en probeer het opnieuw.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Bij het downloaden van dit bestand worden {1} punten afgetrokken.

Punten worden per bericht maar één keer afgetrokken, ook als u het later opnieuw downloadt.

Wilt u het bestand downloaden?',
'이 글을 비추천하셨습니다.' => 'U vindt dit bericht niet leuk.',
'이 글을 추천하셨습니다.' => 'U vindt dit bericht leuk.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Reactielijst',
'{1}님의 댓글' => 'Reactie van {1}',
'의 댓글' => ' (antwoord)',
'아이피' => 'IP',
'댓글 옵션' => 'Reactie-opties',
'비밀글' => 'Privé',
'등록된 댓글이 없습니다.' => 'Nog geen reacties.',
'댓글쓰기' => 'Reactie schrijven',
'글자' => ' tekens',
'댓글 내용' => 'Reactie',
'댓글내용을 입력해주세요' => 'Voer uw reactie in',
'이름' => 'Naam',
'필수' => 'Verplicht',
'비밀번호' => 'Wachtwoord',
'SNS 동시등록' => 'Ook op sociale media plaatsen',
'댓글등록' => 'Reactie plaatsen',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'De inhoud bevat een verboden woord (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Reacties moeten ten minste {1} tekens bevatten.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Reacties mogen maximaal {1} tekens bevatten.',
'댓글을 입력하여 주십시오.' => 'Voer een reactie in.',
'이름이 입력되지 않았습니다.' => 'Voer uw naam in.',
'비밀번호가 입력되지 않았습니다.' => 'Voer een wachtwoord in.',
'이 댓글을 삭제하시겠습니까?' => 'Deze reactie verwijderen?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Antwoorden per e-mail ontvangen',
'분류' => 'Categorie',
'선택하세요' => 'Selecteer',
'이메일' => 'E-mail',
'홈페이지' => 'Website',
'옵션' => 'Opties',
'제목' => 'Onderwerp',
'내용' => 'Inhoud',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Berichten op dit forum moeten tussen {1} en {2} tekens lang zijn.',
'링크 #{1}' => 'Link #{1}',
'링크를 입력하세요' => 'Voer een link in',
'파일을 첨부하세요' => 'Voeg een bestand toe',
'파일 #{1}' => 'Bestand #{1}',
'파일첨부' => 'Bestand toevoegen',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Bijlage {1}: max. {2}',
'파일 설명을 입력해주세요.' => 'Voer een bestandsbeschrijving in.',
'파일 삭제' => 'Bestand verwijderen',
'자동등록방지' => 'Spambeveiliging',
'취소' => 'Annuleren',
'작성완료' => 'Verzenden',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Automatische regeleinden gebruiken?

Automatische regeleinden zetten regeleinden in het bericht om in <br>-tags.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Het onderwerp bevat een verboden woord (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'De inhoud moet ten minste {1} tekens bevatten.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'De inhoud mag maximaal {1} tekens bevatten.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Afbeeldingenlijst',
'열람중' => 'Wordt bekeken',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Er is niemand online.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Zoekterm',
'자주하시는질문 분류' => 'FAQ-categorieën',
'열린 분류' => 'Geopende categorie',
'검색된 게시물이 없습니다.' => 'Geen resultaten gevonden.',
'등록된 FAQ가 없습니다.' => 'Nog geen FAQ\'s.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Gebruik om FAQ\'s toe te voegen het menu',
'메뉴를 이용하십시오.' => 'FAQ-beheer.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Vorige pagina',
'다음페이지' => 'Volgende pagina',
'전체보기' => 'Alles bekijken',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Laatste reacties',
'더보기' => 'Meer',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Mededeling',
'동의합니다' => 'Ik ga akkoord',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Mail sturen naar {1}',
'메일쓰기' => 'Mail schrijven',
'형식' => 'Formaat',
'첨부 파일 1' => 'Bijlage 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Bijlagen kunnen verloren gaan. Controleer na het verzenden of het bestand is meegestuurd.',
'첨부 파일 2' => 'Bijlage 2',
'메일발송' => 'Mail verzenden',
'창닫기' => 'Venster sluiten',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Grote bijlagen hebben meer tijd nodig om te verzenden.

Sluit of vernieuw het venster niet voordat de mail is verzonden.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Gebruikersnaam',
'자동로그인' => 'Ingelogd blijven',
'회원로그인 안내' => 'Inloggen voor leden',
'아이디/비밀번호 찾기' => 'Gebruikersnaam/wachtwoord vergeten',
'회원 가입' => 'Registreren',
'비회원 구매' => 'Kopen als gast',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Voor gastbestellingen worden geen punten toegekend.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Ik heb de informatie over het verzamelen van persoonsgegevens gelezen en ga akkoord.',
'비회원으로 구매하기' => 'Kopen als gast',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'U moet de informatie over het verzamelen van persoonsgegevens lezen en hiermee akkoord gaan.',
'비회원 주문조회' => 'Bestelling opzoeken als gast',
'주문번호' => 'Bestelnummer',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Voer het {1} uit de bestelmail in en het {2} dat u bij het bestellen hebt opgegeven.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Met automatisch inloggen hoeft u de volgende keer uw gebruikersnaam en wachtwoord niet in te voeren.

Gebruik dit niet op openbare computers, omdat uw persoonsgegevens dan zichtbaar kunnen worden.

Automatisch inloggen gebruiken?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Verplicht) Aanvullend privacybeleid',
'추가 개인정보처리방침 안내' => 'Aanvullend privacybeleid',
'목적' => 'Doel',
'항목' => 'Gegevens',
'보유기간' => 'Bewaartermijn',
'이용자 식별 및 본인여부 확인' => 'Identificatie van gebruikers en verificatie van identiteit',
'생년월일' => 'Geboortedatum',
', 휴대폰 번호(아이핀 제외)' => ', mobiel nummer (behalve i-PIN)',
', 암호화된 개인식별부호(CI)' => ', versleutelde persoonlijke identificatiecode (CI)',
'회원 탈퇴 시까지' => 'Tot opzegging van het lidmaatschap',
'추가 개인정보처리방침에 동의합니다.' => 'Ik ga akkoord met het aanvullende privacybeleid.',
'인증수단 선택하기' => 'Kies een verificatiemethode',
'간편인증' => 'Eenvoudige verificatie',
'휴대폰 본인확인' => 'Verificatie via mobiel',
'아이핀 본인확인' => 'Verificatie via i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'Voor identiteitsverificatie moet JavaScript zijn ingeschakeld.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Stel mobiele verificatie in bij de basisinstellingen.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'U moet akkoord gaan met het aanvullende privacybeleid om door te gaan met de verificatie.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Voer uw wachtwoord nogmaals in.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Voer uw wachtwoord in om het opzeggen van uw account te voltooien.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'Ter bescherming van uw gegevens controleren we uw wachtwoord nog een keer.',
'회원아이디' => 'Gebruikersnaam',
'비밀번호(필수)' => 'Wachtwoord (verplicht)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Totaal {2} berichten ({1})',
'받은쪽지' => 'Inbox',
'보낸쪽지' => 'Verzonden',
'쪽지쓰기' => 'Bericht schrijven',
'안 읽은 쪽지' => 'Ongelezen bericht',
'자료가 없습니다.' => 'Geen gegevens.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Berichten worden maximaal {1} dagen bewaard.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Bericht sturen',
'받는 회원아이디' => 'Gebruikersnaam ontvanger',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Scheid meerdere ontvangers met komma\'s (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Bij het verzenden van een bericht worden {1} punten per ontvanger afgetrokken.',
'보내기' => 'Verzenden',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Verzonden',
'받은' => 'Ontvangen',
'받는' => 'Aan',
'쪽지 내용' => 'Bericht',
'{1}시간' => '{1} op',
'이전쪽지' => 'Vorig bericht',
'다음쪽지' => 'Volgend bericht',
'답장' => 'Antwoorden',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Bericht bewerken',
'글 삭제' => 'Bericht verwijderen',
'댓글 삭제' => 'Reactie verwijderen',
'작성자만 글을 수정할 수 있습니다.' => 'Alleen de auteur kan dit bericht bewerken.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Bent u de auteur, voer dan het wachtwoord in dat u bij het schrijven hebt gebruikt om het bericht te bewerken.',
'작성자만 글을 삭제할 수 있습니다.' => 'Alleen de auteur kan dit bericht verwijderen.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Bent u de auteur, voer dan het wachtwoord in dat u bij het schrijven hebt gebruikt om het bericht te verwijderen.',
'비밀글 기능으로 보호된 글입니다.' => 'Dit is een privébericht.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Alleen de auteur en beheerders kunnen het bekijken. Bent u de auteur, voer dan het wachtwoord in.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Zoeken via e-mail',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Voer het e-mailadres in waarmee u zich hebt geregistreerd.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'We sturen uw gebruikersnaam en wachtwoordgegevens naar dat e-mailadres.',
'E-mail 주소' => 'E-mailadres',
'인증메일 보내기' => 'Verificatiemail sturen',
'본인인증으로 찾기' => 'Zoeken via identiteitsverificatie',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Voer een nieuw wachtwoord in.',
'회원 아이디 :' => 'Gebruikersnaam:',
'새 비밀번호' => 'Nieuw wachtwoord',
'새 비밀번호 확인' => 'Nieuw wachtwoord bevestigen',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Uw wachtwoord is gewijzigd. Log opnieuw in.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Het nieuwe wachtwoord en de bevestiging komen niet overeen.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Puntensaldo',
'y-m-d H시' => 'd-m-y H:00',
'만료' => 'Verlopen',
'소계' => 'Subtotaal',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Profiel van {1}',
'회원권한' => 'Lidmaatschapsniveau',
'포인트' => 'Punten',
'회원가입일' => 'Lid sinds',
' ({1} 일)' => ' ({1} dagen)',
'알 수 없음' => 'Onbekend',
'최종접속일' => 'Laatste bezoek',
'인사말' => 'Begroeting',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'U moet akkoord gaan met de gebruiksvoorwaarden en het verzamelen en gebruiken van persoonsgegevens om te registreren.',
'회원가입 약관에 모두 동의합니다' => 'Ik ga akkoord met alle voorwaarden',
'(필수) 회원가입약관' => '(Verplicht) Gebruiksvoorwaarden',
'회원가입약관의 내용에 동의합니다.' => 'Ik ga akkoord met de gebruiksvoorwaarden.',
'(필수) 개인정보 수집 및 이용' => '(Verplicht) Verzamelen en gebruiken van persoonsgegevens',
'개인정보 수집 및 이용' => 'Verzamelen en gebruiken van persoonsgegevens',
'아이디, 이름, 비밀번호' => 'Gebruikersnaam, naam, wachtwoord',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', geboortedatum, mobiel nummer (alleen bij identiteitsverificatie, behalve i-PIN), versleutelde persoonlijke identificatiecode (CI)',
'고객서비스 이용에 관한 통지,' => 'Mededelingen over de klantenservice,',
'CS대응을 위한 이용자 식별' => 'identificatie van gebruikers voor klantenondersteuning',
'연락처 (이메일, 휴대전화번호)' => 'Contact (e-mail, mobiel nummer)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Ik ga akkoord met het verzamelen en gebruiken van persoonsgegevens.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'U moet akkoord gaan met de gebruiksvoorwaarden om te registreren.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'U moet akkoord gaan met het verzamelen en gebruiken van persoonsgegevens om te registreren.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Accountgegevens',
'아이디 (필수)' => 'Gebruikersnaam (verplicht)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Alleen letters, cijfers en _. Ten minste 3 tekens.',
'비밀번호 (필수)' => 'Wachtwoord (verplicht)',
'비밀번호확인 (필수)' => 'Wachtwoord bevestigen (verplicht)',
'개인정보 입력' => 'Persoonsgegevens',
' - 본인확인 시 자동입력' => ' - wordt automatisch ingevuld bij verificatie',
'(필수)' => '(verplicht)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobiel',
'{1} 본인확인' => 'Verificatie via {1}',
'{1} 및 {2} 완료' => '{1} en {2} voltooid',
'성인인증' => 'leeftijdsverificatie',
'{1} 완료' => '{1} voltooid',
'이름 (필수)' => 'Naam (verplicht)',
'닉네임 (필수)' => 'Bijnaam (verplicht)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Alleen Koreaanse tekens, Latijnse letters en cijfers, zonder spaties (ten minste 2 Koreaanse of 4 Latijnse tekens)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Als u uw bijnaam wijzigt, kunt u deze {1} dagen lang niet opnieuw wijzigen.',
'E-mail (필수)' => 'E-mail (verplicht)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'De registratie is voltooid zodra u de e-mail die wij sturen hebt bevestigd.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Als u uw e-mailadres wijzigt, moet u het opnieuw bevestigen.',
'전화번호' => 'Telefoonnummer',
'휴대폰번호' => 'Mobiel nummer',
'주소' => 'Adres',
'우편번호' => 'Postcode',
' (필수)' => ' (verplicht)',
'주소검색' => 'Adres zoeken',
'상세주소' => 'Adresdetails',
'참고항목' => 'Aanvulling',
'기타 개인설정' => 'Overige instellingen',
'서명' => 'Handtekening',
'자기소개' => 'Over mij',
'회원아이콘' => 'Ledenpictogram',
'이미지선택' => 'Afbeelding kiezen',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'De afbeelding mag maximaal {1} px breed en {2} px hoog zijn.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Alleen gif-, jpg- en png-bestanden tot {1} bytes.',
'회원이미지' => 'Ledenafbeelding',
'정보공개' => 'Openbaar profiel',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Anderen toestaan mijn gegevens te zien.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Als u dit wijzigt, kunt u het {1} dagen lang niet opnieuw wijzigen.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Deze instelling kan na een wijziging {1} dagen niet worden gewijzigd (tot {2}).',
'Y년 m월 j일' => 'd-m-Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Zo wordt voorkomen dat leden berichten sturen en daarna hun profiel verbergen om antwoorden te ontlopen.',
'추천인아이디' => 'Gebruikersnaam van aanbrenger',
'수신설정' => 'Meldingsinstellingen',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Optioneel) Verzamelen en gebruiken van persoonsgegevens voor marketing',
'자세히보기' => 'Details',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informatie over het verzamelen en gebruiken van persoonsgegevens voor marketing. Klik op Details om de volledige tekst te lezen.',
'(동의일자: {1})' => '(Akkoord gegeven op: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Doel: marketing en promoties van de dienst',
'* 항목: 이름, 이메일' => '* Gegevens: naam, e-mail',
', 휴대폰 번호' => ', mobiel nummer',
'* 보유기간: 회원 탈퇴 시까지' => '* Bewaartermijn: tot opzegging van het lidmaatschap',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Als u weigert, kunt u de basisdienst nog steeds gebruiken, maar persoonlijke voordelen kunnen beperkt zijn.',
'(선택) 광고성 정보 수신 동의' => '(Optioneel) Toestemming voor het ontvangen van reclame',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Dit omvat toestemming voor het ontvangen van reclame (e-mail/sms/KakaoTalk). Klik op Details om de volledige tekst te lezen.',
'광고성 이메일 수신 동의' => 'Reclame per e-mail ontvangen',
'광고성 SMS/카카오톡 수신 동의' => 'Reclame per sms/KakaoTalk ontvangen',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Wij kunnen tussen 8.00 en 21.00 uur reclame sturen per e-mail/sms/KakaoTalk met de persoonsgegevens waarvoor u toestemming hebt gegeven.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'U kunt uw toestemming op elk moment intrekken via Mijn pagina.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Optioneel) Toestemming voor het verstrekken van persoonsgegevens aan derden',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informatie over het verstrekken van persoonsgegevens aan derden. Klik op Details om de volledige tekst te lezen.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Doel: marketingberichten over producten/diensten, acties en evenementen (KakaoTalk enz.)',
'* 항목: 이름, 휴대폰 번호' => '* Gegevens: naam, mobiel nummer',
'* 제공받는 자:' => '* Ontvanger:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Bewaartermijn: zolang de dienst duurt of tot de toestemming wordt ingetrokken',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'U hebt uw identiteit al geverifieerd via {1}.

De vorige verificatie annuleren en opnieuw verifiëren?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Het wachtwoord moet ten minste 3 tekens bevatten.',
'비밀번호가 같지 않습니다.' => 'De wachtwoorden komen niet overeen.',
'이름을 입력하십시오.' => 'Voer uw naam in.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Voor registratie is identiteitsverificatie vereist.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Het ledenpictogram is geen afbeeldingsbestand.',
'회원이미지가 이미지 파일이 아닙니다.' => 'De ledenafbeelding is geen afbeeldingsbestand.',
'본인을 추천할 수 없습니다.' => 'U kunt uzelf niet als aanbrenger opgeven.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Registratie voltooid',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Gefeliciteerd met uw registratie, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Er is een verificatiemail verzonden naar het opgegeven adres.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Controleer de e-mail en voltooi de verificatie om de site te gebruiken.',
'이메일 주소' => 'E-mailadres',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Als u een verkeerd e-mailadres hebt opgegeven, neem dan contact op met de beheerder van de site.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Uw wachtwoord wordt versleuteld opgeslagen, zodat niemand het kan lezen.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Als u uw gebruikersnaam of wachtwoord vergeet, kunt u deze herstellen met het geregistreerde e-mailadres.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'U kunt uw lidmaatschap op elk moment opzeggen; uw gegevens worden na een bepaalde periode verwijderd.',
'감사합니다.' => 'Bedankt.',
'메인으로' => 'Naar de startpagina',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Bewaren',
'제목 확인 및 댓글 쓰기' => 'Onderwerp controleren en reactie schrijven',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Bij het bewaren kunt u een reactie van dank of aanmoediging achterlaten.',
'스크랩 확인' => 'Bewaren bevestigen',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Uitgebreid zoeken',
'전체게시물' => 'Alle berichten',
'원글만' => 'Alleen berichten',
'코멘트만' => 'Alleen reacties',
'회원 아이디만 검색 가능' => 'Alleen zoeken op gebruikersnaam',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Inloggen voor leden',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Mijn account',
'{1}님' => '{1}',
'안 읽은' => 'Ongelezen',
'쪽지' => 'Berichten',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Weet u zeker dat u uw lidmaatschap wilt opzeggen?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Categorieën sluiten',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Coupons',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Peiling',
'결과보기' => 'Resultaten bekijken',
'관리자 관리' => 'Beheer',
'투표하기' => 'Stemmen',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Alleen leden van niveau {1} of hoger kunnen stemmen.',
'투표하실 설문항목을 선택하세요' => 'Kies een optie om op te stemmen',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Alleen leden van niveau {1} of hoger kunnen de resultaten bekijken.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Totaal {1} stemmen',
'결과' => 'Resultaten',
'{1} 표' => '{1} stemmen',
'이 설문에 대한 기타의견' => 'Andere meningen over deze peiling',
'님의 의견' => ': mening',
'기타의견' => 'Andere meningen',
'의견' => 'Mening',
'의견을 입력해주세요' => 'Voer uw mening in',
'의견남기기' => 'Mening geven',
'다른 투표 결과 보기' => 'Andere peilingsresultaten',
'해당 기타의견을 삭제하시겠습니까?' => 'Deze mening verwijderen?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Populaire zoektermen',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Nieuwe vraag',
'답변완료' => 'Beantwoord',
'답변대기' => 'In afwachting',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Weet u zeker dat u de geselecteerde berichten wilt verwijderen?

Verwijderde gegevens kunnen niet worden hersteld.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Antwoord bewerken',
'답변삭제' => 'Antwoord verwijderen',
'추가질문' => 'Vervolgvraag',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Antwoord plaatsen',
'파일 #1' => 'Bestand #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Bijlage 1: max. {1}',
'파일 #2' => 'Bestand #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Bijlage 2: max. {1}',
'답변쓰기' => 'Antwoord schrijven',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'We bereiden een antwoord op uw vraag voor.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Contactgegevens',
'첨부' => 'Bijlage',
'연관질문' => 'Gerelateerde vragen',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Antwoord ontvangen',
'답변등록 SMS알림 수신' => 'Sms ontvangen bij antwoord',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Voer het mobiele nummer in met alleen cijfers en -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Zoekresultaten',
'게시판' => 'Forums',
'{1}개' => '{1}',
'게시물' => 'Berichten',
'페이지 열람 중' => 'pagina\'s',
'검색조건' => 'Zoekopties',
'제목+내용' => 'Onderwerp+inhoud',
'전체게시판' => 'Alle forums',
'검색된 자료가 하나도 없습니다.' => 'Geen resultaten gevonden.',
'게시판 내 결과' => 'Resultaten in forum',
'{1} 결과 더보기' => 'Meer resultaten in {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Bezoekersstatistieken',
'오늘' => 'Vandaag',
'어제' => 'Gisteren',
'최대' => 'Maximum',
'visit|전체' => 'Totaal',
'상세보기' => 'Details',

// theme/basic/mobile/tail.php
'회사소개' => 'Over ons',
'개인정보처리방침' => 'Privacybeleid',
'서비스이용약관' => 'Gebruiksvoorwaarden',
'소유하신 도메인.' => 'Uw domein.',
'사이트 정보' => 'Site-informatie',
'회사명 : 회사명 / 대표 : 대표자명' => 'Bedrijf: Bedrijfsnaam / Directeur: Naam',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adres: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'KvK-nummer: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel.: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Registratienr. postorderbedrijf: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Privacyfunctionaris: Naam',
'상단으로' => 'Naar boven',
'PC 버전으로 보기' => 'Pc-versie',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Totaal {1}',
'게시판 검색' => 'Forum doorzoeken',
'현재 페이지 게시물  전체선택' => 'Alle berichten op deze pagina selecteren',
'번호' => 'Nr.',
'글쓴이' => 'Auteur',
'날짜' => 'Datum',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} downloads | DATUM: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}:',
'댓글의' => 'antwoord op',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Kies een categorie',
'임시 저장된 글 ({1})' => 'Concepten ({1})',
'임시 저장된 글 목록' => 'Conceptenlijst',
'링크  #{1}' => 'Link #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'FAQ doorzoeken',
'FAQ 수정' => 'FAQ bewerken',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Populaire berichten',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Geen afbeeldingen.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Lid',
'ID/PW 찾기' => 'ID/wachtwoord vergeten',
'주문서번호' => 'Bestelnummer',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Alleen de auteur en beheerders kunnen het bekijken.',
'본인이라면 비밀번호를 입력하세요.' => 'Bent u de auteur, voer dan het wachtwoord in.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Help',
'비밀번호 확인 (필수)' => 'Wachtwoord bevestigen (verplicht)',
'비밀번호 확인' => 'Wachtwoord bevestigen',
'본인확인 시 자동입력' => 'Wordt automatisch ingevuld bij verificatie',
'닉네임' => 'Bijnaam',
'주소 검색' => 'Adres zoeken',
'기본주소' => 'Adres',
' (동의일자: {1})' => ' (Akkoord gegeven op: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Reactie schrijven',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Alles',
'그룹' => 'Groep',
'일시' => 'Datum',
'{1}번' => 'Nr. {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Weet u zeker dat u deze actie wilt uitvoeren op de geselecteerde berichten?

Verwijderde gegevens kunnen niet worden hersteld.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Account',
'마이페이지' => 'Mijn pagina',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Peiling beheren',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Momenteel aan kop',
'500 표' => '500 stemmen',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Datum',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Antwoordopties',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Berichtopties',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => '1:1-vraag schrijven',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Zoekresultaten voor {1}',
'게시판 {1}개' => '{1} forums',
'게시물 {1}개' => '{1} berichten',
'새창' => 'Nieuw venster',

// theme/basic/tail.php
'모바일버전' => 'Mobiele versie',
);
