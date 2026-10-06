<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (nb). 틀은 php lang/build.php nb 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Installer nettbutikken før bruk.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Det er for mange forespørsler. Prøv igjen om litt.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Brukernavnet til ververen kan bare inneholde bokstaver, tall og _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Den oppgitte ververen finnes ikke.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Bruk riktig fremgangsmåte.',

// bbs/alert.php
'오류안내 페이지' => 'Feilside',
'결과안내 페이지' => 'Resultatside',
'다음 항목에 오류가 있습니다.' => 'Følgende felt inneholder feil.',
'다음 내용을 확인해 주세요.' => 'Kontroller følgende.',
'돌아가기' => 'Gå tilbake',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Lukk det nye vinduet og prøv igjen.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Lukk det nye vinduet før du fortsetter.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Forumet finnes ikke.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Verdien bo_table ble ikke sendt.\\n\\nSend den på formen board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Innlegget finnes ikke.\\n\\nDet kan ha blitt slettet eller flyttet.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gjester har ikke tilgang til dette forumet.\\n\\nEr du medlem, logg inn og prøv igjen.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har ikke tilgang til å lese innlegg.\\n\\nKontakt administratoren hvis du har spørsmål.',
'글을 읽을 권한이 없습니다.' => 'Du har ikke tillatelse til å lese innlegget.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å lese innlegget.\\n\\nEr du medlem, logg inn og prøv igjen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bare medlemmer med bekreftet identitet kan lese innlegg i dette forumet.\\n\\nEr du medlem, logg inn og prøv igjen.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Bare medlemmer med bekreftet identitet kan lese innlegg i dette forumet.\\n\\nBekreft identiteten din under Rediger profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Bare medlemmer som er bekreftet som voksne via identitetsbekreftelse, kan lese innlegg i dette forumet.\\n\\nEr du voksen og får ikke lest innlegg, bekreft identiteten din på nytt under Rediger profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Du har ingen eller for få poeng ({1}) til å lese innlegget ({2}).\\n\\nSamle flere poeng og prøv igjen.',
'목록을 볼 권한이 없습니다.' => 'Du har ikke tillatelse til å se listen.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å se listen.\\n\\nEr du medlem, logg inn og prøv igjen.',
'{1} {2} 페이지' => '{1} side {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => '{1}: velg minst ett element.',
'올바른 방법으로 이용해 주세요.' => 'Bruk riktig fremgangsmåte.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Kontroller informasjonen nedenfor.',
'확인' => 'OK',
'취소' => 'Avbryt',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontroller først Forumadministrasjon->Innholdsadministrasjon i administratormodus.',
'등록된 내용이 없습니다.' => 'Det finnes ikke noe innhold.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} finnes ikke.</p>',

// bbs/current_connect.php
'현재접속자' => 'Pålogget nå',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Kan ikke slettes på grunn av en token-feil.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, fordi forumet ikke tilhører en gruppe du administrerer.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Du kan ikke slette innlegg skrevet av medlemmer med høyere nivå enn deg.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, fordi du ikke administrerer dette forumet.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Du kan ikke slette, fordi det ikke er ditt innlegg.',
'로그인 후 삭제하세요.' => 'Logg inn for å slette.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Passordet er feil, så det kan ikke slettes.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Innlegget kan ikke slettes fordi det finnes svar på det.\\n\\nSlett svarene først.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Innlegget kan ikke slettes fordi det finnes kommentarer til det.\\n\\nInnlegg med {1} eller flere kommentarer kan ikke slettes.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Du har ikke tilgang.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Kommentaren finnes ikke, eller det er ikke en kommentar.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren kan ikke slettes fordi den er skrevet av et medlem med høyere nivå enn gruppeadministratoren.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan ikke slette kommentaren, fordi forumet ikke tilhører en gruppe du administrerer.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Kommentaren kan ikke slettes fordi den er skrevet av et medlem med høyere nivå enn forumadministratoren.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Du kan ikke slette kommentaren, fordi du ikke administrerer dette forumet.',
'비밀번호가 틀립니다.' => 'Passordet er feil.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Kommentaren kan ikke slettes fordi det finnes svar på den.',

// bbs/download.php
'잘못된 접근입니다.' => 'Ugyldig tilgang.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å laste ned.\\nEr du medlem, logg inn og prøv igjen.',
'파일 정보가 존재하지 않습니다.' => 'Filinformasjonen finnes ikke.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Tokenet er utløpt eller ugyldig.\\nLast inn siden på nytt og prøv igjen.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Når du laster ned filen {1}, trekkes det poeng ({2} poeng).\\nPoeng trekkes bare én gang per innlegg, også om du laster ned på nytt senere.\\nVil du fortsatt laste ned?',
'다운로드 권한이 없습니다.' => 'Du har ikke tillatelse til å laste ned.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nEr du medlem, logg inn og prøv igjen.',
'파일이 존재하지 않습니다.' => 'Filen finnes ikke.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Du har ingen eller for få poeng ({1}) til å laste ned ({2}).\\n\\nSamle flere poeng og prøv igjen.',
'다운로드 &gt; {1}' => 'Last ned &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Medlemmet finnes ikke.',
'탈퇴 또는 차단된 회원입니다.' => 'Medlemmet har avsluttet medlemskapet eller er blokkert.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Forespørselen om e-postbekreftelse er allerede behandlet eller er ugyldig.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'E-postadressen din er bekreftet.\\n\\nDu kan nå logge inn med brukernavnet {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Bekreftelseslenken er utløpt. Be om en ny bekreftelses-e-post.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Informasjonen i forespørselen om e-postbekreftelse er ugyldig.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Det ble ikke mottatt gyldige verdier.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Du er nå avmeldt fra informasjons-e-post.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Kontroller først Forumadministrasjon->FAQ-administrasjon i administratormodus.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => '«Bruk e-postutsending» må være slått på i innstillingene for å sende e-post.\\n\\nKontakt administratoren.',
'회원만 이용하실 수 있습니다.' => 'Bare for medlemmer.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke sende e-post til andre med mindre profilen din er offentlig.\\n\\nDu kan endre dette under Rediger profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Medlemsinformasjonen finnes ikke.\\n\\nMedlemmet kan ha avsluttet medlemskapet.',
'정보공개를 하지 않았습니다.' => 'Medlemmet har ikke offentlig profil.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Du kan bare sende et begrenset antall e-poster per økt.\\n\\nLogg inn eller besøk siden på nytt for å sende flere.',
'메일 쓰기' => 'Skriv e-post',
'이메일이 올바르지 않습니다.' => 'E-postadressen er ugyldig.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Du har overskredet tillatt antall utsendinger via skjemaet.',
'자동등록방지 숫자가 틀렸습니다.' => 'Spambeskyttelseskoden er feil.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'E-posten kan ikke sendes fordi e-postadressen har ugyldig format.',
'허용되지 않는 파일 확장자입니다.' => 'Filtypen er ikke tillatt.',
'메일보내기' => 'Send e-post',
'메일 발송중' => 'Sender e-post',
'메일을 정상적으로 발송하였습니다.' => 'E-posten er sendt.',

// bbs/good.php
'회원만 가능합니다.' => 'Bare for medlemmer.',
'값이 제대로 넘어오지 않았습니다.' => 'Det ble ikke mottatt riktige verdier.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Du kan bare like eller ikke like fra selve innlegget.',
'존재하는 게시판이 아닙니다.' => 'Forumet finnes ikke.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Du kan ikke like eller ikke like ditt eget innlegg.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Dette forumet bruker ikke Liker-funksjonen.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Dette forumet bruker ikke Liker ikke-funksjonen.',
'추천' => 'Liker',
'비추천' => 'Liker ikke',
'이미 {1} 하신 글 입니다.' => 'Du har allerede valgt {1} for dette innlegget.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Du har allerede reagert på dette innlegget.',
'이 글을 {1} 하셨습니다.' => 'Du har valgt {1} for dette innlegget.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Gruppen {1} er bare tilgjengelig på mobil.',

// bbs/link.php
'링크' => 'Lenke',
'링크가 없습니다.' => 'Det finnes ingen lenke.',

// bbs/list.php
'전체' => 'Alle',
'열린 분류' => 'Åpen kategori',
'이전검색' => 'Forrige søk',
'다음검색' => 'Neste søk',

// bbs/login.php
'로그인' => 'Logg inn',

// bbs/login_check.php
'로그인 검사' => 'Innloggingskontroll',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Brukernavn og passord kan ikke være tomme.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Brukernavnet finnes ikke, eller passordet er feil.\\nPassordet skiller mellom store og små bokstaver.',
'\\1년 \\2월 \\3일' => '\\3.\\2.\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Brukernavnet ditt er blokkert.\\nBlokkert dato: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Du har ikke tilgang fordi medlemskapet er avsluttet.\\nAvsluttet dato: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Du må bekrefte e-postadressen via {1} for å logge inn. Klikk Avbryt hvis du vil bytte til en annen e-postadresse og bekrefte den.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Hvis data-mappen ikke er skrivbar, eller det ikke er mer lagringsplass,\\nkan innloggingen mislykkes. Kontroller lagringsplass og skrivetillatelser.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'URL-en inneholder en ugyldig verdi.',
'url에 도메인을 지정할 수 없습니다.' => 'Du kan ikke angi et domene i URL-en.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Identitetsbekreftelse er ikke tilgjengelig. Kontakt administratoren.',
'본인인증을 다시 해주세요.' => 'Bekreft identiteten din på nytt.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Logg inn for å fortsette.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Verdien w ble ikke mottatt riktig.',
'잘못된 접근입니다' => 'Ugyldig tilgang',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Brukernavn mangler. Bruk riktig fremgangsmåte.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Det finnes allerede en konto med den oppgitte identitetsinformasjonen.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Den bekreftede identitetsinformasjonen stemmer ikke med medlemsinformasjonen du har oppgitt. Prøv igjen.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Bare innloggede medlemmer har tilgang.',
'회원 비밀번호 확인' => 'Bekreft passord',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Bare medlemmer har tilgang.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Superadministratoren kan ikke avslutte medlemskapet.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Medlemskapet kunne ikke avsluttes. Kontroller medlemsstatusen.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} avsluttet medlemskapet {2}.',
'Y년 m월 d일' => 'd.m.Y',

// bbs/memo.php
'내 쪽지함' => 'Mine meldinger',
'kind 변수 값이 올바르지 않습니다.' => 'Verdien av kind er ugyldig.',
'받은' => 'Mottatt',
'보낸' => 'Sendt',
'정보없음' => 'Ingen informasjon',
'아직 읽지 않음' => 'Ikke lest ennå',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke sende meldinger til andre med mindre profilen din er offentlig. Du kan endre dette under Rediger profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Medlemsinformasjonen finnes ikke.\\n\\nMedlemmet kan ha avsluttet medlemskapet.',
'쪽지 보내기' => 'Send melding',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Brukernavnet \'{1}\' finnes ikke (eller har ikke offentlig profil) eller tilhører et avsluttet eller blokkert medlem.\\nMeldingen ble ikke sendt.',
'해당 회원이 존재하지 않습니다.' => 'Medlemmet finnes ikke.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Du har for få poeng ({1} poeng) til å sende meldingen.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Meldingen er sendt til {1}.',
'회원아이디 오류 같습니다.' => 'Brukernavnet ser ut til å være feil.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Send verdien {1}.',
'{1} 쪽지 보기' => 'Vis melding – {1}',

// bbs/move.php
'이동' => 'Flytt',
'복사' => 'Kopier',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Verdien sw ble ikke mottatt riktig.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Bare forumadministratorer og høyere har tilgang.',
'게시물 {1}' => 'Innlegg: {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => '{1}: velg minst ett forum.',
'현재 페이지 게시판 전체' => 'Alle forum på denne siden',
'게시판' => 'Forum',
'현재' => 'Nåværende',
'창닫기' => 'Lukk vinduet',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => '{1}: velg minst ett forum for innlegget.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1}: innlegget er overført til de valgte forumene.',

// bbs/new.php
'새글' => 'Nye innlegg',
'그룹' => 'Gruppe',
'전체그룹' => 'Alle grupper',
'[코] ' => '[Kommentar] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Bare superadministratoren har tilgang.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Popup-varsel',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Ikke vis igjen på {1} timer.',
'닫기' => 'Lukk',
'팝업레이어 알림이 없습니다.' => 'Det finnes ingen popup-varsler.',

// bbs/password.php
'비밀번호 입력' => 'Skriv inn passord',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Du er allerede logget inn.',
'회원정보 찾기' => 'Finn kontoinformasjon',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Feil i e-postadressen.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Det er sendt en e-post til {1} der du kan bekrefte brukernavnet og passordet ditt.\\n\\nSjekk e-posten din.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Kontoinformasjonen din',
'회원정보 찾기 안내' => 'Finn kontoinformasjon',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) ba om kontoinformasjon {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Siden ikke engang administratorer kan se passordet ditt, får du i stedet tilsendt et nytt passord.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Se det nye passordet nedenfor, og <span style="color:#ff3061">klikk på lenken <strong>Endre passord</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Når det vises en melding om at passordet er endret, kan du logge inn på nettstedet med brukernavnet ditt og det nye passordet.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Når du er logget inn, bør du bytte til et nytt passord under Rediger profil.',
'회원아이디' => 'Brukernavn',
'변경될 비밀번호' => 'Nytt passord',
'비밀번호 변경' => 'Endre passord',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Passordet er endret.\\n\\nLogg inn med brukernavnet ditt og det nye passordet.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Brukernavn/passord kan ikke finnes via identitetsbekreftelse. Kontakt administratoren.',
'패스워드 변경' => 'Endre passord',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Passordet ble ikke mottatt.',
'비밀번호가 일치하지 않습니다.' => 'Passordene stemmer ikke overens.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Bare medlemmer kan se dette.',
'{1} 님의 포인트 내역' => 'Poenghistorikk for {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Verdien po_id ble ikke mottatt riktig.',
'기타의견이 비활성화되어 있습니다.' => 'Andre kommentarer er deaktivert.',
'권한이 없습니다.' => 'Du har ikke tillatelse.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Avstemningen finnes ikke.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Bare medlemmer på nivå {1} eller høyere kan se resultatene.',
'설문조사 결과' => 'Avstemningsresultat',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Bare medlemmer på nivå {1} eller høyere kan stemme.',
'항목을 선택하세요.' => 'Velg et alternativ.',
'{1}에 이미 참여하셨습니다.' => 'Du har allerede deltatt i {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Du kan ikke se andres informasjon med mindre profilen din er offentlig.\\n\\nDu kan endre dette under Rediger profil.',
'{1}님의 자기소개' => 'Om {1}',
'소개 내용이 없습니다.' => 'Det finnes ingen presentasjon.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Er du medlem, logg inn for å fortsette.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Velg minst ett innlegg som skal slettes.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Er du medlem, logg inn og prøv igjen.',
'열린 분류 ' => 'Åpen kategori ',
'{1}이 존재하지 않습니다.' => '{1} finnes ikke.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Innlegget finnes ikke.\\nDet er slettet eller ikke ditt eget.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'En henvendelse som allerede er besvart, kan ikke redigeres.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Du har ikke tillatelse til å redigere innlegget.\\n\\nBruk riktig fremgangsmåte.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Angi kategorier i innstillingene for 1:1-henvendelser.',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Angi en gyldig kategori.',
'이메일을 입력하세요.' => 'Skriv inn e-postadressen din.',
'<strong>제목</strong>을 입력하세요.' => 'Skriv inn et <strong>emne</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Skriv inn <strong>innhold</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Innholdet inneholder mange ugyldige koder.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Filen eller innholdet overskrider grensen på serveren.\\npost_max_size={1} , upload_max_filesize={2}\\nKontakt forumadministratoren eller serveradministratoren.',
'답변은 관리자만 등록할 수 있습니다.' => 'Bare administratorer kan svare.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Kan ikke svare fordi henvendelsen ikke finnes.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Et svar kan ikke besvares igjen.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Last opp maks 2 vedlegg.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Filen «{1}» kan ikke lastes opp fordi den er større enn grensen på serveren ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Filen «{1}» ble ikke lastet opp riktig.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Filen «{1}» ({2} byte) lastes ikke opp fordi den er større enn grensen for forumet ({3} byte).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Filen «{1}» kan ikke lagres sikkert. Kontroller serverens kilde for tilfeldige tall og lagringsbanen.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} – varsel om svar',

// bbs/register.php
'회원가입약관' => 'Vilkår for bruk',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Endre e-postadresse for bekreftelse',
'이미 메일인증 하신 회원입니다.' => 'E-postadressen din er allerede bekreftet.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Hvis du ikke har mottatt bekreftelses-e-posten, kan du endre e-postadressen i medlemsinformasjonen.',
'사이트 이용정보 입력' => 'Kontoinformasjon',
'필수' => 'Påkrevd',
'자동등록방지' => 'Spambeskyttelse',
'인증메일변경' => 'Endre bekreftelses-e-post',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'E-postadressen {1} er allerede i bruk.\\n\\nSkriv inn en annen e-postadresse.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Bekreft e-postadressen din',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Bekreftelses-e-posten er sendt på nytt til {1}.\\n\\nSjekk e-posten på {1} om litt.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du må godta vilkårene for bruk for å registrere deg.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Du må godta innsamling og bruk av personopplysninger for å registrere deg.',
'회원 가입' => 'Registrer deg',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Administratorens informasjon må redigeres i administrasjonspanelet.',
'로그인 후 이용하여 주십시오.' => 'Logg inn for å fortsette.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Det innloggede medlemmet stemmer ikke med informasjonen som ble mottatt.',
'비밀번호를 입력해 주세요.' => 'Skriv inn passordet ditt.',
'회원 정보 수정' => 'Rediger medlemsinformasjon',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Denne handlingen er ikke tilgjengelig i demoen.',
'이름을 올바르게 입력해 주십시오.' => 'Skriv inn et gyldig navn.',
'닉네임을 올바르게 입력해 주십시오.' => 'Skriv inn et gyldig kallenavn.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identitetsbekreftelse kreves for å registrere seg.',
'추천인이 존재하지 않습니다.' => 'Ververen finnes ikke.',
'본인을 추천할 수 없습니다.' => 'Du kan ikke verve deg selv.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Gratulerer med registreringen',
'로그인 되어 있지 않습니다.' => 'Du er ikke logget inn.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Informasjonen kan ikke endres fordi den ikke stemmer med den innloggede kontoen.\\nHvis du bruker en uautorisert fremgangsmåte, stopp umiddelbart.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Last opp et medlemsikon på maks {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} er ikke en bildefil.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Last opp et medlemsbilde på maks {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} er ikke en gif/jpg-fil.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Informasjonen din er oppdatert.\\n\\nSiden e-postadressen er endret, må du bekrefte den på nytt.',
'회원정보수정' => 'Rediger profil',
'회원 정보가 수정 되었습니다.' => 'Informasjonen din er oppdatert.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Velkomst-e-post',
'회원가입을 축하합니다.' => 'Gratulerer med registreringen.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Hjertelig gratulerer med registreringen, <b>{1}</b>.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Vi skal gjøre vårt beste for å leve opp til tilliten din.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klikk på <strong>Bekreft e-post</strong> nedenfor for å fullføre registreringen.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Lenken er gyldig i {1} minutter etter at den ble sendt.',
'감사합니다.' => 'Takk.',
'메일인증' => 'Bekreft e-post',
'사이트바로가기' => 'Gå til nettstedet',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Bekreftelses-e-post',
'회원 인증 메일입니다.' => 'Dette er en bekreftelses-e-post for medlemmer.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'E-postadressen til <b>{1}</b> er endret.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klikk på adressen nedenfor for å fullføre bekreftelsen.',
'{1} 로그인' => '{1} innlogging',

// bbs/register_result.php
'회원가입 완료' => 'Registreringen er fullført',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS støttes bare for forum som gjester kan lese.',
'RSS 보기가 금지되어 있습니다.' => 'RSS er deaktivert.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Lagrede innlegg for {1}',
'[게시판 없음]' => '[Intet forum]',
'[글 없음]' => '[Intet innlegg]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Bare medlemmer har tilgang.',
'로그인하기' => 'Logg inn',
'올바른 방법으로 사용해 주십시오.' => 'Bruk riktig fremgangsmåte.',
'코멘트는 스크랩 할 수 없습니다.' => 'Kommentarer kan ikke lagres.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Du har allerede lagret dette innlegget.

Vil du se de lagrede innleggene nå?',
'이미 스크랩하신 글 입니다.' => 'Du har allerede lagret dette innlegget.',
'스크랩 확인하기' => 'Se lagrede innlegg',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Innlegget du vil lagre, finnes ikke.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Du kan ikke publisere innlegg så raskt etter hverandre.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Innlegget er lagret.

Vil du se de lagrede innleggene nå?',
'이 글을 스크랩 하였습니다.' => 'Innlegget er lagret.',

// bbs/search.php
'전체검색 결과' => 'Søkeresultater',
'[비밀글 입니다.]' => '[Hemmelig innlegg]',
'게시판 그룹선택' => 'Velg forumgruppe',
'전체 분류' => 'Alle kategorier',

// bbs/view_comment.php
'비밀글 입니다.' => 'Dette er et hemmelig innlegg.',
'댓글내용 확인' => 'Vis kommentar',

// bbs/view_image.php
'이미지 크게보기' => 'Vis større bilde',
'이미지 확장자가 아닙니다.' => 'Ikke en bildefiltype.',
'이미지 파일이 아닙니다.' => 'Ikke en bildefil.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Verdien bo_table ble ikke sendt.\\nSend den på formen write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Innlegget finnes ikke.\\nDet kan ha blitt slettet eller flyttet.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => '\\$wr_id brukes ikke når du skriver et nytt innlegg.',
'글을 쓸 권한이 없습니다.' => 'Du har ikke tillatelse til å skrive innlegg.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å skrive innlegg.\\nEr du medlem, logg inn og prøv igjen.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Du har ingen eller for få poeng ({1}) til å skrive innlegg ({2}).\\n\\nSamle flere poeng og prøv igjen.',
'글쓰기' => 'Skriv',
'글을 수정할 권한이 없습니다.' => 'Du har ikke tillatelse til å redigere innlegget.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å redigere innlegget.\\n\\nEr du medlem, logg inn og prøv igjen.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Innlegget kan ikke redigeres fordi det finnes svar på det.\\n\\nInnlegg med svar kan ikke redigeres.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Innlegget kan ikke redigeres fordi det finnes kommentarer til det.\\n\\nInnlegg med {1} eller flere kommentarer kan ikke redigeres.',
'글수정' => 'Rediger innlegg',
'글을 답변할 권한이 없습니다.' => 'Du har ikke tillatelse til å svare på innlegget.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tillatelse til å skrive svar.\\n\\nEr du medlem, logg inn og prøv igjen.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Du har ingen eller for få poeng ({1}) til å svare ({2}).\\n\\nSamle flere poeng og prøv igjen.',
'공지에는 답변 할 수 없습니다.' => 'Kunngjøringer kan ikke besvares.',
'정상적인 접근이 아닙니다.' => 'Ugyldig tilgang.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Bare forfatteren eller en administrator kan svare på hemmelige innlegg.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Hemmelige innlegg fra gjester kan ikke besvares.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Du kan ikke svare mer.\\n\\nSvar er bare mulig ned til 10 nivåer.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Du kan ikke svare mer.\\n\\nDet kan maks være 26 svar.',
'글답변' => 'Svar på innlegg',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Du har ikke tilgang.\\n\\nEr du medlem, logg inn og prøv igjen.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Du har ikke tilgang til å skrive innlegg.\\n\\nKontakt administratoren hvis du har spørsmål.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bare medlemmer med bekreftet identitet kan skrive i dette forumet.\\n\\nEr du medlem, logg inn og prøv igjen.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Bare medlemmer med bekreftet identitet kan skrive i dette forumet.\\n\\nBekreft identiteten din under Rediger profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Navn må fylles ut.',
'댓글을 쓸 권한이 없습니다.' => 'Du har ikke tillatelse til å skrive kommentarer.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Innlegget finnes ikke.\\nDet kan ha blitt slettet eller flyttet.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Du har ingen eller for få poeng ({1}) til å skrive kommentarer ({2}).\\n\\nSamle flere poeng og skriv kommentaren på nytt.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Kommentaren du vil svare på, finnes ikke.\\n\\nDen kan ha blitt slettet mens du skrev.',
'댓글을 등록할 수 없습니다.' => 'Kommentaren kan ikke lagres.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Du kan ikke svare mer.\\n\\nSvar er bare mulig ned til 5 nivåer.',
'원글
{1}


댓글
{2}' => 'Opprinnelig innlegg
{1}


Kommentar
{2}',
'입력' => 'Nytt',
'수정' => 'Rediger',
'답변' => 'Svar',
'댓글 ' => 'Kommentar ',
'댓글 수정' => 'Rediger kommentar',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nytt innlegg i forumet {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren kan ikke redigeres fordi den er skrevet av et medlem med høyere nivå enn gruppeadministratoren.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan ikke redigere kommentaren, fordi forumet ikke tilhører en gruppe du administrerer.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Kommentaren kan ikke redigeres fordi den er skrevet av et medlem med høyere nivå enn forumadministratoren.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Du kan ikke redigere kommentaren, fordi du ikke administrerer dette forumet.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, fordi det ikke er ditt innlegg.',
'댓글을 수정할 권한이 없습니다.' => 'Du har ikke tillatelse til å redigere kommentaren.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Kommentaren kan ikke redigeres fordi det finnes svar på den.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Foruminformasjonen er ugyldig.',

// bbs/write_update.php
'게시글 저장' => 'Lagre innlegg',
'<strong>분류</strong>를 선택하세요.' => 'Velg en <strong>kategori</strong>.',
'분류를 올바르게 입력하세요.' => 'Skriv inn en gyldig kategori.',
'올바른 방법으로 수정하여 주십시오.' => 'Rediger på riktig måte.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, fordi forumet ikke tilhører en gruppe du administrerer.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Du kan ikke redigere innlegg skrevet av medlemmer med høyere nivå enn deg.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Du kan ikke redigere, fordi du ikke administrerer dette forumet.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Bekreft passordet og rediger på nytt.',
'로그인 후 수정하세요.' => 'Logg inn for å redigere.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Forumet tillater ikke hemmelige innlegg.',
'관리자만 공지할 수 있습니다.' => 'Bare administratorer kan publisere kunngjøringer.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Du kan ikke svare mer.\\nSvar er bare mulig ned til 10 nivåer.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Du kan ikke svare mer.\\nDet kan maks være 26 svar.',
'제목을 입력하여 주십시오.' => 'Skriv inn et emne.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Slett eksisterende filer og last opp maks {1} vedlegg.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Last opp maks {1} vedlegg.',
'코멘트' => 'Kommentar',
'코멘트 수정' => 'Rediger kommentar',

// bbs/write_update_mail.php
'{1} 메일' => '{1}-e-post',
'작성자 {1}' => 'Forfatter: {1}',
'사이트에서 게시물 확인하기' => 'Se innlegget på nettstedet',

// common.php
'접근이 가능하지 않습니다.' => 'Tilgang er ikke mulig.',
'접근 불가합니다.' => 'Ingen tilgang.',

// head.php
'본문 바로가기' => 'Gå til innhold',
'커뮤니티' => 'Fellesskap',
'쇼핑몰' => 'Butikk',
'접속자' => 'Besøkende',
'사이트 내 전체검색' => 'Søk på nettstedet',
'검색어 필수' => 'Søkeord (påkrevd)',
'검색어를 입력해주세요' => 'Skriv inn et søkeord',
'검색' => 'Søk',
'검색어는 두글자 이상 입력하십시오.' => 'Skriv inn minst to tegn.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For raskere søk er bare ett mellomrom tillatt i søkeordet.',
'정보수정' => 'Rediger profil',
'로그아웃' => 'Logg ut',
'회원가입' => 'Registrer deg',
'메인메뉴' => 'Hovedmeny',
'전체메뉴' => 'Alle menyer',
'전체메뉴열기' => 'Åpne alle menyer',
'하위분류' => 'Undermeny',
'메뉴 준비 중입니다.' => 'Menyen er under arbeid.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} er logget inn ',

// lib/common.lib.php
'처음' => 'Første',
'이전' => 'Forrige',
'페이지' => 'Side',
'열린' => 'Gjeldende',
'다음' => 'Neste',
'맨끝' => 'Siste',
'$url1 과 $url2 를 지정해 주세요.' => 'Angi $url1 og $url2.',
'답변글' => 'Svar',
'{1} 자기소개' => 'Om {1}',
'{1} 이름으로 검색' => 'Søk etter navnet {1}',
'쪽지보내기' => 'Send melding',
'홈페이지' => 'Nettsted',
'자기소개' => 'Om meg',
'아이디로 검색' => 'Søk etter brukernavn',
'이름으로 검색' => 'Søk etter navn',
'전체게시물' => 'Alle innlegg',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Det er feil i informasjonen om MySQL Host, User, Password eller DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL er ikke installert, så funksjonen mysql_connect kan ikke brukes.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Det er feil i informasjonen om MySQL Host, User eller Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Det oppstod en feil under databasebehandlingen.',
'yoil|일' => 'søn',
'yoil|월' => 'man',
'yoil|화' => 'tir',
'yoil|수' => 'ons',
'yoil|목' => 'tor',
'yoil|금' => 'fre',
'yoil|토' => 'lør',
'요일' => 'dag',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Tokenet er utløpt. Last inn siden på nytt.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Nettstedsadressen for e-postbekreftelse er ikke angitt. Kontakt nettstedets administrator.',
'올바른 경로로 접근해 주십시오.' => 'Bruk riktig tilgangsvei.',
'PC 전용 게시판입니다.' => 'Dette forumet er bare for PC.',
'모바일 전용 게시판입니다.' => 'Dette forumet er bare for mobil.',
'간편인증' => 'Enkel verifisering',
'휴대폰' => 'Mobil',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Du har brukt identitetsbekreftelse {2} ganger i dag ({1}) og kan ikke bruke den mer.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Kan ikke brukes fordi funksjonen exec ikke kan kjøres.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Antall variabler sendt fra skjemaet overskrider max_input_vars.\\nNoen verdier kan gå tapt før de lagres i databasen.\\n\\nLøs problemet ved å endre max_input_vars i serverens php.ini.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Du kan ikke angi et annet domene i URL-en.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Tilgang nektet fordi URL-en inneholder brukerinformasjon.',
'bot 으로 판단되어 중지합니다.' => 'Stoppet fordi forespørselen ble vurdert som en bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Skriv inn innhold.',

// lib/get_data.lib.php
'제목' => 'Emne',
'내용' => 'Innhold',
'제목+내용' => 'Emne+Innhold',
'글쓴이' => 'Forfatter',
'글쓴이(코)' => 'Forfatter (kommentar)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Skriv inn et brukernavn.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Brukernavnet kan bare inneholde bokstaver, tall og _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Brukernavnet må ha minst 3 tegn.',
'이미 사용중인 회원아이디 입니다.' => 'Brukernavnet er allerede i bruk.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Brukernavnet er et reservert ord og kan ikke brukes.',
'닉네임을 입력해 주십시오.' => 'Skriv inn et kallenavn.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Kallenavnet kan bare inneholde koreanske bokstaver, latinske bokstaver og tall uten mellomrom.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Kallenavnet må ha minst 2 koreanske eller 4 latinske tegn.',
'이미 존재하는 닉네임입니다.' => 'Kallenavnet finnes allerede.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Kallenavnet er et reservert ord og kan ikke brukes.',
'E-mail 주소를 입력해 주십시오.' => 'Skriv inn en e-postadresse.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'E-postadressen har ugyldig format.',
'{1} 메일은 사용할 수 없습니다.' => 'E-postadressen {1} kan ikke brukes.',
'이미 사용중인 E-mail 주소입니다.' => 'E-postadressen er allerede i bruk.',
'이름을 입력해 주십시오.' => 'Skriv inn et navn.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Navnet kan bare inneholde koreanske bokstaver uten mellomrom.',
'휴대폰번호를 입력해 주십시오.' => 'Skriv inn et mobilnummer.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Skriv inn et gyldig mobilnummer.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Mobilnummeret er allerede i bruk. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Ugyldig forespørsel.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Ugyldig bekreftelse. Bruk riktig fremgangsmåte.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Det finnes ingen konto med den bekreftede informasjonen.',
'코드 : {1}  {2}' => 'Kode: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultat av KG Inicis enkel verifisering',
'본인인증이 완료되었습니다.' => 'Identitetsbekreftelsen er fullført.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'KG Inicis enkel verifisering',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Kontoen er allerede identitetsbekreftet i en annen persons navn.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Det finnes allerede en konto med den oppgitte identitetsinformasjonen.\\nBrukernavn: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Hør tallene',
'새로고침' => 'Last inn på nytt',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Skriv inn spambeskyttelsestallene i rekkefølge.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultat av mobilbekreftelse',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risiko for manipulering av dn_hash (kontroller om filen {1} har kjøretillatelse.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Du har avbrutt mobilbekreftelsen.',
'up_hash 변조 위험있음' => 'Risiko for manipulering av up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Det finnes ingen nettstedskode for KCPs mobilbekreftelse. Skriv inn KCP-nettstedskoden under Administrator > Grunnleggende innstillinger.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Det finnes allerede en konto med den oppgitte identitetsinformasjonen.\\nBrukernavn: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Bekreftet med ditt eget mobilnummer.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Ingen svar fra identitetsbekreftelsen. Start på nytt og prøv igjen.',
'코드 : {1} {2}' => 'Kode: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Økten for identitetsbekreftelse er utløpt. Start på nytt og prøv igjen.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Henting av bekreftelsesresultat mislyktes ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'KCPs mobilbekreftelsesmodul V2 krever PHP 7.0 eller nyere.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'PHP-utvidelsene (openssl/curl/hash_pbkdf2) som KCPs mobilbekreftelsesmodul V2 krever, er ikke aktivert.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Nettstedskode eller ENC_KEY for KCPs mobilbekreftelse V2 er ikke angitt.\\nSkriv dem inn under Administrator > Grunnleggende innstillinger.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registrering av bekreftelsestransaksjonen mislyktes.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verifisering med mobil',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Kan ikke opprette data for KCP-transaksjonsregistrering.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Kan ikke kryptere data for KCP-transaksjonsregistrering.',
'KCP 거래등록 API 응답이 없습니다.' => 'Ingen svar fra KCPs API for transaksjonsregistrering.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Kan ikke tolke svaret fra KCPs API for transaksjonsregistrering.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Kan ikke opprette data for forespørsel om KCP-bekreftelsesresultat.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Ingen svar fra KCPs API for bekreftelsesresultat.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Kan ikke tolke svaret fra KCPs API for bekreftelsesresultat.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Kan ikke dekryptere KCPs bekreftelsesdata.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Kan ikke tolke KCPs dekrypterte bekreftelsesdata.',
'cURL 초기화에 실패했습니다.' => 'Initialisering av cURL mislyktes.',
'KCP API 통신 실패: {1}' => 'KCP API-kommunikasjon mislyktes: {1}',
'KCP API HTTP 오류: {1}' => 'KCP API HTTP-feil: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Det oppstod en feil under mobilbekreftelsen. Feilkode: {1}\\n\\nKontakt kundeservice hos Korea Credit Bureau (KCB) på 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Inndataverdiene må kontrolleres',
'KCB 휴대폰 본인확인' => 'KCB mobilbekreftelse',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Det oppstod en feil under i-PIN-bekreftelsen. Feilkode: {1}\\n\\nKontakt kundeservice hos Korea Credit Bureau (KCB) på 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Det oppstod en feil under i-PIN-bekreftelsen (ingen CI-informasjon). Feilkode: {1}\\n\\nKontakt kundeservice hos Korea Credit Bureau (KCB) på 02-708-1000.',
'KCB 아이핀 본인확인' => 'KCB i-PIN-bekreftelse',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Velg KCBs mobilbekreftelse under Grunnleggende innstillinger.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Skriv inn KCB-medlems-ID under Grunnleggende innstillinger.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Modulens kjørbare fil finnes ikke.\\n\\nFilen {1} må ligge i {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Modulens kjørbare fil har ikke kjøretillatelse.\\n\\nGi kjøretillatelse, for eksempel med chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Modulens kjørbare fil har ikke kjøretillatelse.\\n\\nKontroller at IUSER har kjøretillatelse for cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Velg KCBs i-PIN-bekreftelse under Grunnleggende innstillinger.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Opprett mappen key i {1}/{2}.\\n\\nGi deretter skrivetillatelse. Eksempel: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Endre tillatelsene for mappen {1}/{2}/key til 705.\\nchmod 705 key eller chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Endre tillatelsene for mappen {1}/{2}/key til 707.\\n\\nchmod 707 key eller chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter-tilbakekall',
'트위터에 승인이 되었습니다.' => 'Godkjent av Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Ikke godkjent av Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Se mer',
'페이스북으로 공유' => 'Del på Facebook',
'페이스북 공유' => 'Del på Facebook',
'트위터로  공유' => 'Del på Twitter',
'트위터 공유' => 'Del på Twitter',
'카카오톡으로 보내기' => 'Send via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Også publisert på Facebook',
'트위터에도 등록됨' => 'Også publisert på Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Publiser også på Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Sosial innlogging - {1}',
'잠시후에 다시 시도해 주세요.' => 'Prøv igjen om litt.',
'홈으로' => 'Til forsiden',
'이 페이지 닫기' => 'Lukk denne siden',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Du kan ikke registrere deg på nytt fordi denne {1}-ID-en allerede er koblet til eller registrert. Er du medlem, logg inn og koble til kontoen under Rediger profil.',
'지정되지 않은 오류입니다.' => 'Ukjent feil.',
'설정 오류입니다.' => 'Konfigurasjonsfeil.',
'해당 provider 설정 오류입니다.' => 'Konfigurasjonsfeil for denne leverandøren.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Ukjent eller deaktivert leverandør.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Du har ikke tilgang til denne tjenesten.',
'인증이 실패되었습니다.. ' => 'Autentiseringen mislyktes.. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Brukeren avbrøt autentiseringen, eller leverandøren avviste tilkoblingen.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Forespørselen om brukerprofilen mislyktes. Brukeren er kanskje ikke koblet til tjenesten. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'I så fall må du be om autentisering på nytt.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Brukeren er ikke koblet til tjenesten.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Tjenesten støtter ikke denne funksjonen.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Du er allerede logget inn, eller forespørselen er ugyldig.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Det finnes allerede en tilkoblet ID, eller forespørselen er ugyldig.',
'소셜 데이터 오류' => 'Feil i sosiale data',
'SNS 사용자 인증에 실패하였습니다.' => 'SNS-brukerautentisering mislyktes.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Kontoen er allerede koblet til en {1}-ID. Fjern koblingen og prøv igjen.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Kobler til {1}. Vent litt.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Sosial innlogging brukes ikke.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Sosial innlogging er deaktivert.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Innstillingen for nytt vindu er deaktivert.',
'서비스 이름이 넘어오지 않았습니다.' => 'Tjenestenavnet ble ikke mottatt.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Sosial innlogging brukes ikke.',
'이미 회원가입 하였습니다.' => 'Du er allerede registrert.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Bare brukere som har logget inn med sosial innlogging, har tilgang.',
'소셜 회원 가입 - {1}' => 'Sosial registrering - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Bare brukere som har logget inn med sosial innlogging, har tilgang.',
'이미 등록된 회원이 존재합니다.' => 'Medlemmet er allerede registrert.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Den bekreftede identitetsinformasjonen stemmer ikke med personopplysningene dine. Prøv igjen.',
'회원 가입 오류!' => 'Feil ved registrering!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Du er ikke medlem, eller verdien ble ikke mottatt.',
'권한이 없거나 잘못된 요청입니다.' => 'Du har ikke tillatelse, eller forespørselen er ugyldig.',
);
