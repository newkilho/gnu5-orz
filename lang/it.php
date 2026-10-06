<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (it). 틀은 php lang/build.php it 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Utilizzi questa funzione dopo aver installato il negozio.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Troppe richieste. Riprovi tra qualche istante.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Il nome utente del referente può contenere solo lettere, numeri e _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Il referente indicato non esiste.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Utilizzi la procedura corretta.',

// bbs/alert.php
'오류안내 페이지' => 'Pagina di errore',
'결과안내 페이지' => 'Pagina dei risultati',
'다음 항목에 오류가 있습니다.' => 'Si sono verificati errori nei seguenti campi.',
'다음 내용을 확인해 주세요.' => 'Verifichi quanto segue.',
'돌아가기' => 'Indietro',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Chiuda la finestra e riprovi l\'operazione precedente.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Chiuda la finestra e continui a utilizzare il servizio.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'La bacheca non esiste.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Valore bo_table non ricevuto.\\n\\nLo passi nel formato board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Il post non esiste.\\n\\nPotrebbe essere stato eliminato o spostato.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'I visitatori non registrati non possono accedere a questa bacheca.\\n\\nSe è un membro, effettui l\'accesso.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Non ha i permessi per leggere i post.\\n\\nPer informazioni contatti l\'amministratore.',
'글을 읽을 권한이 없습니다.' => 'Non ha i permessi per leggere questo post.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per leggere questo post.\\n\\nSe è un membro, effettui l\'accesso.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'In questa bacheca solo i membri con identità verificata possono leggere i post.\\n\\nSe è un membro, effettui l\'accesso.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'In questa bacheca solo i membri con identità verificata possono leggere i post.\\n\\nEffettui la verifica dell\'identità in Modifica profilo.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'In questa bacheca solo i membri maggiorenni verificati possono leggere i post.\\n\\nSe è maggiorenne e non riesce a leggere, ripeta la verifica dell\'identità in Modifica profilo.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'I suoi punti ({1}) sono insufficienti per leggere il post ({2}).\\n\\nAccumuli altri punti e riprovi.',
'목록을 볼 권한이 없습니다.' => 'Non ha i permessi per vedere l\'elenco.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per vedere l\'elenco.\\n\\nSe è un membro, effettui l\'accesso.',
'{1} {2} 페이지' => '{1} - pagina {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Selezioni almeno un elemento per «{1}».',
'올바른 방법으로 이용해 주세요.' => 'Utilizzi la procedura corretta.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Verifichi quanto segue.',
'확인' => 'OK',
'취소' => 'Annulla',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Verifichi prima Gestione bacheche->Gestione contenuti nel pannello di amministrazione.',
'등록된 내용이 없습니다.' => 'Nessun contenuto registrato.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} non esiste.</p>',

// bbs/current_connect.php
'현재접속자' => 'Utenti connessi',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Impossibile eliminare: errore del token.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Impossibile eliminare: la bacheca non appartiene a un gruppo da lei gestito.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Non è possibile eliminare un post scritto da un membro con un livello superiore al suo.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Impossibile eliminare: non è una bacheca da lei gestita.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Impossibile eliminare: il post non è suo.',
'로그인 후 삭제하세요.' => 'Effettui l\'accesso per eliminare.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Password errata: impossibile eliminare.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Impossibile eliminare: esistono risposte a questo post.\\n\\nElimini prima le risposte.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Impossibile eliminare: esistono commenti a questo post.\\n\\nNon è possibile eliminare un post con {1} o più commenti.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Accesso non autorizzato.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Il commento non esiste oppure non è un commento.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Non è possibile eliminare il commento di un membro con livello superiore a quello dell\'amministratore del gruppo.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Impossibile eliminare il commento: la bacheca non appartiene a un gruppo da lei gestito.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Non è possibile eliminare il commento di un membro con livello superiore a quello dell\'amministratore della bacheca.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Impossibile eliminare il commento: non è una bacheca da lei gestita.',
'비밀번호가 틀립니다.' => 'Password errata.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Impossibile eliminare: esistono risposte a questo commento.',

// bbs/download.php
'잘못된 접근입니다.' => 'Accesso non valido.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per scaricare.\\nSe è un membro, effettui l\'accesso.',
'파일 정보가 존재하지 않습니다.' => 'Informazioni sul file non trovate.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Il token è scaduto o non è valido.\\nAggiorni la pagina e riprovi.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Scaricando il file {1} verranno detratti {2} punti.\\nI punti vengono detratti una sola volta per post: scaricandolo di nuovo non verranno detratti ancora.\\nVuole procedere con il download?',
'다운로드 권한이 없습니다.' => 'Non ha i permessi per scaricare.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nSe è un membro, effettui l\'accesso.',
'파일이 존재하지 않습니다.' => 'Il file non esiste.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'I suoi punti ({1}) sono insufficienti per il download ({2}).\\n\\nAccumuli altri punti e riprovi.',
'다운로드 &gt; {1}' => 'Download &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Membro inesistente.',
'탈퇴 또는 차단된 회원입니다.' => 'Membro cancellato o bloccato.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Richiesta di verifica e-mail già elaborata o non valida.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Verifica e-mail completata.\\n\\nOra può accedere con il nome utente {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'La verifica e-mail è scaduta. Richieda di nuovo l\'e-mail di verifica.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'I dati della richiesta di verifica e-mail non sono validi.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Valori ricevuti non validi.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Ha disattivato la ricezione delle e-mail informative.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Verifichi prima Gestione bacheche->Gestione FAQ nel pannello di amministrazione.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Per inviare e-mail occorre attivare "Usa invio e-mail" nella configurazione.\\n\\nContatti l\'amministratore.',
'회원만 이용하실 수 있습니다.' => 'Riservato ai membri.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se il suo profilo non è pubblico, non può inviare e-mail ad altri membri.\\n\\nPuò rendere pubblico il profilo in Modifica profilo.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Dati del membro non trovati.\\n\\nIl membro potrebbe essersi cancellato.',
'정보공개를 하지 않았습니다.' => 'Il profilo non è pubblico.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Per ogni sessione è possibile inviare solo un numero limitato di e-mail.\\n\\nPer continuare, effettui di nuovo l\'accesso o si riconnetta.',
'메일 쓰기' => 'Scrivi e-mail',
'이메일이 올바르지 않습니다.' => 'Indirizzo e-mail non valido.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Ha superato il numero massimo di invii tramite il modulo e-mail.',
'자동등록방지 숫자가 틀렸습니다.' => 'Codice antispam errato.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Impossibile inviare: il formato dell\'indirizzo e-mail non è valido.',
'허용되지 않는 파일 확장자입니다.' => 'Estensione del file non consentita.',
'메일보내기' => 'Invia e-mail',
'메일 발송중' => 'Invio e-mail in corso',
'메일을 정상적으로 발송하였습니다.' => 'E-mail inviata correttamente.',

// bbs/good.php
'회원만 가능합니다.' => 'Riservato ai membri.',
'값이 제대로 넘어오지 않았습니다.' => 'Valori non ricevuti correttamente.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'È possibile esprimere Mi piace o Non mi piace solo dal post stesso.',
'존재하는 게시판이 아닙니다.' => 'La bacheca non esiste.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Non può esprimere Mi piace o Non mi piace sui propri post.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Questa bacheca non usa la funzione Mi piace.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Questa bacheca non usa la funzione Non mi piace.',
'추천' => 'Mi piace',
'비추천' => 'Non mi piace',
'이미 {1} 하신 글 입니다.' => 'Ha già espresso «{1}» per questo post.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Ha già espresso Mi piace o Non mi piace per questo post.',
'이 글을 {1} 하셨습니다.' => 'Ha espresso «{1}» per questo post.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Il gruppo {1} è accessibile solo da dispositivi mobili.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Nessun link.',

// bbs/list.php
'전체' => 'Tutti',
'열린 분류' => 'Categoria aperta',
'이전검색' => 'Ricerca precedente',
'다음검색' => 'Ricerca successiva',

// bbs/login.php
'로그인' => 'Accedi',

// bbs/login_check.php
'로그인 검사' => 'Verifica accesso',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Nome utente e password non possono essere vuoti.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Nome utente non registrato o password errata.\\nLa password distingue tra maiuscole e minuscole.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'L\'accesso con il suo nome utente è stato bloccato.\\nData: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Il nome utente è stato cancellato e non può accedere.\\nData di cancellazione: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Per accedere deve verificare l\'indirizzo e-mail {1}. Per verificare un indirizzo diverso, faccia clic su Annulla.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Se la cartella data non ha permessi di scrittura o lo spazio su disco è esaurito,\\nl\'accesso potrebbe non riuscire: verifichi lo spazio disponibile e i permessi di scrittura.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'L\'URL contiene un valore non valido.',
'url에 도메인을 지정할 수 없습니다.' => 'Non è possibile specificare un dominio nell\'URL.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'La verifica dell\'identità non è disponibile. Contatti l\'amministratore.',
'본인인증을 다시 해주세요.' => 'Ripeta la verifica dell\'identità.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Effettui l\'accesso per continuare.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Valore w non ricevuto correttamente.',
'잘못된 접근입니다' => 'Accesso non valido',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Nome utente mancante. Utilizzi la procedura corretta.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Esiste già un account registrato con questi dati di verifica dell\'identità.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'I dati della verifica dell\'identità non corrispondono ai dati inseriti. Riprovi.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Accessibile solo ai membri che hanno effettuato l\'accesso.',
'회원 비밀번호 확인' => 'Conferma password',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Accessibile solo ai membri.',
'최고 관리자는 탈퇴할 수 없습니다' => 'L\'amministratore principale non può cancellarsi',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Impossibile completare la cancellazione. Verifichi lo stato dell\'account.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1}, la sua cancellazione è avvenuta il {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'I miei messaggi',
'kind 변수 값이 올바르지 않습니다.' => 'Valore della variabile kind non valido.',
'받은' => 'Ricevuto',
'보낸' => 'Inviato',
'정보없음' => 'Nessuna informazione',
'아직 읽지 않음' => 'Non ancora letto',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se il suo profilo non è pubblico, non può inviare messaggi ad altri membri. Può rendere pubblico il profilo in Modifica profilo.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Dati del membro non trovati.\\n\\nIl membro potrebbe essersi cancellato.',
'쪽지 보내기' => 'Invia messaggio',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Il nome utente \'{1}\' non esiste (o il profilo non è pubblico), oppure è stato cancellato o bloccato.\\nIl messaggio non è stato inviato.',
'해당 회원이 존재하지 않습니다.' => 'Il membro non esiste.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'I suoi punti ({1}) sono insufficienti per inviare il messaggio.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Messaggio inviato a {1}.',
'회원아이디 오류 같습니다.' => 'Sembra esserci un errore nel nome utente.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Invii il valore {1}.',
'{1} 쪽지 보기' => 'Messaggio: {1}',

// bbs/move.php
'이동' => 'Sposta',
'복사' => 'Copia',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Valore sw non ricevuto correttamente.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Accessibile solo agli amministratori di bacheca o superiori.',
'게시물 {1}' => '{1} post',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Selezioni almeno una bacheca per «{1}».',
'현재 페이지 게시판 전체' => 'Tutte le bacheche di questa pagina',
'게시판' => 'Bacheche',
'현재' => 'Attuale',
'창닫기' => 'Chiudi finestra',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Selezioni almeno una bacheca di destinazione per «{1}».',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Operazione «{1}» eseguita sulle bacheche selezionate.',

// bbs/new.php
'새글' => 'Nuovi post',
'그룹' => 'Gruppo',
'전체그룹' => 'Tutti i gruppi',
'[코] ' => '[Comm.]',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Accessibile solo all\'amministratore principale.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Avviso popup',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Non mostrare più per {1} ore.',
'닫기' => 'Chiudi',
'팝업레이어 알림이 없습니다.' => 'Nessun avviso popup.',

// bbs/password.php
'비밀번호 입력' => 'Inserimento password',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Ha già effettuato l\'accesso.',
'회원정보 찾기' => 'Recupero dati account',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Indirizzo e-mail errato.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'È stata inviata un\'e-mail a {1} per verificare il nome utente e la password.\\n\\nControlli la sua casella di posta.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Recupero dei dati dell\'account richiesto',
'회원정보 찾기 안내' => 'Recupero dati account',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}), il {3} ha richiesto il recupero dei dati del suo account.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Poiché nemmeno gli amministratori del sito possono conoscere la sua password, anziché comunicargliela ne generiamo una nuova.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Controlli qui sotto la nuova password, quindi <span style="color:#ff3061">faccia clic sul link <strong>Cambia password</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Quando compare il messaggio di conferma del cambio password, acceda al sito con il suo nome utente e la nuova password.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Dopo l\'accesso, imposti una nuova password in Modifica profilo.',
'회원아이디' => 'Nome utente',
'변경될 비밀번호' => 'Nuova password',
'비밀번호 변경' => 'Cambia password',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'La password è stata cambiata.\\n\\nAcceda con il suo nome utente e la nuova password.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Non è possibile recuperare nome utente e password tramite verifica dell\'identità. Contatti l\'amministratore.',
'패스워드 변경' => 'Cambia password',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Password non ricevuta.',
'비밀번호가 일치하지 않습니다.' => 'Le password non corrispondono.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Consultabile solo dai membri.',
'{1} 님의 포인트 내역' => 'Storico punti di {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Valore po_id non ricevuto correttamente.',
'기타의견이 비활성화되어 있습니다.' => 'Le altre opinioni sono disattivate.',
'권한이 없습니다.' => 'Non ha i permessi.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Sondaggio non trovato.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Solo i membri di livello {1} o superiore possono vedere i risultati.',
'설문조사 결과' => 'Risultati del sondaggio',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Solo i membri di livello {1} o superiore possono votare.',
'항목을 선택하세요.' => 'Selezioni un\'opzione.',
'{1}에 이미 참여하셨습니다.' => 'Ha già partecipato al sondaggio «{1}».',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se il suo profilo non è pubblico, non può vedere i dati degli altri membri.\\n\\nPuò rendere pubblico il profilo in Modifica profilo.',
'{1}님의 자기소개' => 'Presentazione di {1}',
'소개 내용이 없습니다.' => 'Nessuna presentazione.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Se è un membro, effettui l\'accesso.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Selezioni almeno un post da eliminare.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Se è un membro, effettui l\'accesso.',
'열린 분류 ' => 'Categoria aperta',
'{1}이 존재하지 않습니다.' => '{1} non esiste.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Il post non esiste.\\nPotrebbe essere stato eliminato o non essere suo.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Non è possibile modificare una richiesta che ha già ricevuto risposta.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Non ha i permessi per modificare il post.\\n\\nUtilizzi la procedura corretta.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Imposti le categorie nelle impostazioni delle richieste 1:1',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Specifichi una categoria valida.',
'이메일을 입력하세요.' => 'Inserisca l\'e-mail.',
'<strong>제목</strong>을 입력하세요.' => 'Inserisca l\'<strong>oggetto</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Inserisca il <strong>contenuto</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Il contenuto include numerosi codici non validi.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Le dimensioni del file o del contenuto superano il limite impostato sul server.\\npost_max_size={1} , upload_max_filesize={2}\\nContatti l\'amministratore della bacheca o del server.',
'답변은 관리자만 등록할 수 있습니다.' => 'Solo l\'amministratore può rispondere.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Impossibile rispondere: la richiesta non esiste.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Non è possibile rispondere a una risposta.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Carichi al massimo 2 allegati.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Il file "{1}" supera la dimensione massima impostata sul server ({2}) e non può essere caricato.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Il file "{1}" non è stato caricato correttamente.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Il file "{1}" ({2} byte) supera la dimensione impostata per la bacheca ({3} byte) e non verrà caricato.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Impossibile salvare il file "{1}" in modo sicuro. Verifichi la fonte di numeri casuali del server e il percorso di salvataggio.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} - notifica di risposta',

// bbs/register.php
'회원가입약관' => 'Termini di servizio',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Modifica indirizzo e-mail di verifica',
'이미 메일인증 하신 회원입니다.' => 'Ha già verificato l\'indirizzo e-mail.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Se non ha ricevuto l\'e-mail di verifica, può modificare l\'indirizzo e-mail del suo account.',
'사이트 이용정보 입력' => 'Dati dell\'account',
'필수' => 'Obbligatorio',
'자동등록방지' => 'Antispam',
'인증메일변경' => 'Cambia e-mail di verifica',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'L\'indirizzo {1} è già in uso.\\n\\nInserisca un altro indirizzo e-mail.',
'[{1}] 인증확인 메일입니다.' => '[{1}] E-mail di verifica',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'L\'e-mail di verifica è stata inviata di nuovo a {1}.\\n\\nControlli tra poco la casella {1}.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Per registrarsi deve accettare i termini di servizio.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Per registrarsi deve accettare la raccolta e l\'uso dei dati personali.',
'회원 가입' => 'Registrati',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Modifichi i dati dell\'amministratore dal pannello di amministrazione.',
'로그인 후 이용하여 주십시오.' => 'Effettui l\'accesso per continuare.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'I dati ricevuti non corrispondono al membro connesso.',
'비밀번호를 입력해 주세요.' => 'Inserisca la password.',
'회원 정보 수정' => 'Modifica profilo',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Operazione non disponibile nella demo.',
'이름을 올바르게 입력해 주십시오.' => 'Inserisca un nome valido.',
'닉네임을 올바르게 입력해 주십시오.' => 'Inserisca un nickname valido.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Per registrarsi è necessaria la verifica dell\'identità.',
'추천인이 존재하지 않습니다.' => 'Il referente non esiste.',
'본인을 추천할 수 없습니다.' => 'Non può indicare sé stesso come referente.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Benvenuto! La registrazione è completata.',
'로그인 되어 있지 않습니다.' => 'Non ha effettuato l\'accesso.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Impossibile modificare: i dati da modificare non corrispondono a quelli dell\'account connesso.\\nSe sta usando un metodo non consentito, smetta immediatamente.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Carichi un\'icona membro di massimo {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} non è un file immagine.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Carichi un\'immagine membro di massimo {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} non è un file gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Profilo aggiornato.\\n\\nPoiché l\'indirizzo e-mail è cambiato, deve verificarlo di nuovo.',
'회원정보수정' => 'Modifica profilo',
'회원 정보가 수정 되었습니다.' => 'Profilo aggiornato.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'E-mail di benvenuto',
'회원가입을 축하합니다.' => 'Benvenuto! La registrazione è completata.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Benvenuto, <b>{1}</b>! Grazie per essersi registrato.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Faremo del nostro meglio per ricambiare il suo sostegno.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Faccia clic su <strong>Verifica e-mail</strong> qui sotto per completare la registrazione.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Il link di verifica è valido per {1} minuti dall\'invio.',
'감사합니다.' => 'Grazie.',
'메일인증' => 'Verifica e-mail',
'사이트바로가기' => 'Vai al sito',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'E-mail di verifica account',
'회원 인증 메일입니다.' => 'Questa è l\'e-mail di verifica dell\'account.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'L\'indirizzo e-mail di <b>{1}</b> è stato modificato.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Faccia clic sull\'indirizzo qui sotto per completare la verifica.',
'{1} 로그인' => 'Accedi a {1}',

// bbs/register_result.php
'회원가입 완료' => 'Registrazione completata',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'Il feed RSS è disponibile solo per le bacheche leggibili dai visitatori non registrati.',
'RSS 보기가 금지되어 있습니다.' => 'Il feed RSS è disattivato.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Post salvati di {1}',
'[게시판 없음]' => '[Bacheca inesistente]',
'[글 없음]' => '[Post inesistente]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Accessibile solo ai membri.',
'로그인하기' => 'Accedi',
'올바른 방법으로 사용해 주십시오.' => 'Utilizzi la procedura corretta.',
'코멘트는 스크랩 할 수 없습니다.' => 'Non è possibile salvare i commenti.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Ha già salvato questo post.

Vuole vedere i post salvati ora?',
'이미 스크랩하신 글 입니다.' => 'Ha già salvato questo post.',
'스크랩 확인하기' => 'Vedi post salvati',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Il post da salvare non esiste.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Non può pubblicare post in successione così rapidamente.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Post salvato.

Vuole vedere i post salvati ora?',
'이 글을 스크랩 하였습니다.' => 'Post salvato.',

// bbs/search.php
'전체검색 결과' => 'Risultati della ricerca',
'[비밀글 입니다.]' => '[Post segreto]',
'게시판 그룹선택' => 'Seleziona gruppo di bacheche',
'전체 분류' => 'Tutte le categorie',

// bbs/view_comment.php
'비밀글 입니다.' => 'Post segreto.',
'댓글내용 확인' => 'Verifica contenuto del commento',

// bbs/view_image.php
'이미지 크게보기' => 'Ingrandisci immagine',
'이미지 확장자가 아닙니다.' => 'Estensione non valida per un\'immagine.',
'이미지 파일이 아닙니다.' => 'Non è un file immagine.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Valore bo_table non ricevuto.\\nLo passi nel formato write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Il post non esiste.\\nPotrebbe essere stato eliminato o spostato.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Il valore \\$wr_id non si usa per scrivere un nuovo post.',
'글을 쓸 권한이 없습니다.' => 'Non ha i permessi per scrivere.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per scrivere.\\nSe è un membro, effettui l\'accesso.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'I suoi punti ({1}) sono insufficienti per scrivere un post ({2}).\\n\\nAccumuli altri punti e riprovi.',
'글쓰기' => 'Scrivi',
'글을 수정할 권한이 없습니다.' => 'Non ha i permessi per modificare il post.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per modificare il post.\\n\\nSe è un membro, effettui l\'accesso.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Impossibile modificare: esistono risposte a questo post.\\n\\nNon è possibile modificare un post che ha ricevuto risposte.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Impossibile modificare: esistono commenti a questo post.\\n\\nNon è possibile modificare un post con {1} o più commenti.',
'글수정' => 'Modifica post',
'글을 답변할 권한이 없습니다.' => 'Non ha i permessi per rispondere.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Non ha i permessi per scrivere una risposta.\\n\\nSe è un membro, effettui l\'accesso.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'I suoi punti ({1}) sono insufficienti per rispondere ({2}).\\n\\nAccumuli altri punti e riprovi.',
'공지에는 답변 할 수 없습니다.' => 'Non è possibile rispondere a un avviso.',
'정상적인 접근이 아닙니다.' => 'Accesso non valido.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Ai post segreti possono rispondere solo l\'autore o l\'amministratore.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Non è possibile rispondere ai post segreti dei visitatori non registrati.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Non può più rispondere.\\n\\nLe risposte sono consentite fino a 10 livelli.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Non può più rispondere.\\n\\nSono consentite al massimo 26 risposte.',
'글답변' => 'Rispondi',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Accesso non autorizzato.\\n\\nSe è un membro, effettui l\'accesso.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Non ha i permessi per scrivere post.\\n\\nPer informazioni contatti l\'amministratore.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'In questa bacheca solo i membri con identità verificata possono scrivere post.\\n\\nSe è un membro, effettui l\'accesso.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'In questa bacheca solo i membri con identità verificata possono scrivere post.\\n\\nEffettui la verifica dell\'identità in Modifica profilo.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Il nome è obbligatorio.',
'댓글을 쓸 권한이 없습니다.' => 'Non ha i permessi per commentare.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Il post non esiste.\\nPotrebbe essere stato eliminato o spostato.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'I suoi punti ({1}) sono insufficienti per commentare ({2}).\\n\\nAccumuli altri punti e riprovi.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Il commento a cui rispondere non esiste.\\n\\nPotrebbe essere stato eliminato nel frattempo.',
'댓글을 등록할 수 없습니다.' => 'Impossibile pubblicare il commento.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Non può più rispondere.\\n\\nLe risposte sono consentite fino a 5 livelli.',
'원글
{1}


댓글
{2}' => 'Post originale
{1}


Commento
{2}',
'입력' => 'Nuovo post',
'수정' => 'Modifica',
'답변' => 'Rispondi',
'댓글 ' => 'Commento',
'댓글 수정' => 'Modifica commento',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nuova attività nella bacheca {2}: {3}',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Non è possibile modificare il commento di un membro con livello superiore a quello dell\'amministratore del gruppo.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Impossibile modificare il commento: la bacheca non appartiene a un gruppo da lei gestito.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Non è possibile modificare il commento di un membro con livello superiore a quello dell\'amministratore della bacheca.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Impossibile modificare il commento: non è una bacheca da lei gestita.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Impossibile modificare: il post non è suo.',
'댓글을 수정할 권한이 없습니다.' => 'Non ha i permessi per modificare il commento.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Impossibile modificare: esistono risposte a questo commento.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Dati della bacheca non validi.',

// bbs/write_update.php
'게시글 저장' => 'Salvataggio post',
'<strong>분류</strong>를 선택하세요.' => 'Selezioni la <strong>categoria</strong>.',
'분류를 올바르게 입력하세요.' => 'Inserisca una categoria valida.',
'올바른 방법으로 수정하여 주십시오.' => 'Modifichi utilizzando la procedura corretta.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Impossibile modificare: la bacheca non appartiene a un gruppo da lei gestito.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Non è possibile modificare un post scritto da un membro con un livello superiore al suo.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Impossibile modificare: non è una bacheca da lei gestita.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Verifichi la password e riprovi a modificare.',
'로그인 후 수정하세요.' => 'Effettui l\'accesso per modificare.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Questa bacheca non consente i post segreti.',
'관리자만 공지할 수 있습니다.' => 'Solo l\'amministratore può pubblicare avvisi.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Non può più rispondere.\\nLe risposte sono consentite fino a 10 livelli.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Non può più rispondere.\\nSono consentite al massimo 26 risposte.',
'제목을 입력하여 주십시오.' => 'Inserisca l\'oggetto.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Elimini i file esistenti e carichi al massimo {1} allegati.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Carichi al massimo {1} allegati.',
'코멘트' => 'Commento',
'코멘트 수정' => 'Modifica commento',

// bbs/write_update_mail.php
'{1} 메일' => 'E-mail: {1}',
'작성자 {1}' => 'Autore: {1}',
'사이트에서 게시물 확인하기' => 'Visualizza il post sul sito',

// common.php
'접근이 가능하지 않습니다.' => 'Accesso non consentito.',
'접근 불가합니다.' => 'Accesso negato.',

// head.php
'본문 바로가기' => 'Vai al contenuto',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Negozio',
'접속자' => 'Visitatori',
'사이트 내 전체검색' => 'Cerca nel sito',
'검색어 필수' => 'Termine di ricerca (obbligatorio)',
'검색어를 입력해주세요' => 'Inserisca un termine di ricerca',
'검색' => 'Cerca',
'검색어는 두글자 이상 입력하십시오.' => 'Inserisca almeno due caratteri.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Per una ricerca più veloce, è consentito un solo spazio nel termine di ricerca.',
'정보수정' => 'Modifica profilo',
'로그아웃' => 'Esci',
'회원가입' => 'Registrati',
'메인메뉴' => 'Menu principale',
'전체메뉴' => 'Tutti i menu',
'전체메뉴열기' => 'Apri tutti i menu',
'하위분류' => 'Sottomenu',
'메뉴 준비 중입니다.' => 'Il menu è in preparazione.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} - accesso effettuato',

// lib/common.lib.php
'처음' => 'Prima',
'이전' => 'Precedente',
'페이지' => 'Pagina',
'열린' => 'Attuale',
'다음' => 'Successiva',
'맨끝' => 'Ultima',
'답변글' => 'Risposta',
'{1} 자기소개' => 'Presentazione di {1}',
'{1} 이름으로 검색' => 'Cerca per nome {1}',
'쪽지보내기' => 'Invia messaggio',
'홈페이지' => 'Sito web',
'자기소개' => 'Su di me',
'아이디로 검색' => 'Cerca per nome utente',
'이름으로 검색' => 'Cerca per nome',
'전체게시물' => 'Tutti i post',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Errore nei dati MySQL Host, User, Password o DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL non è installato: impossibile usare la funzione mysql_connect.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Errore nei dati MySQL Host, User o Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Si è verificato un errore durante l\'elaborazione del database.',
'yoil|일' => 'dom',
'yoil|월' => 'lun',
'yoil|화' => 'mar',
'yoil|수' => 'mer',
'yoil|목' => 'gio',
'yoil|금' => 'ven',
'yoil|토' => 'sab',
'요일' => '.',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Il token è scaduto. Aggiorni la pagina.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'L\'indirizzo del sito per la verifica e-mail non è configurato. Contatti l\'amministratore del sito.',
'올바른 경로로 접근해 주십시오.' => 'Acceda tramite il percorso corretto.',
'PC 전용 게시판입니다.' => 'Bacheca riservata ai PC.',
'모바일 전용 게시판입니다.' => 'Bacheca riservata ai dispositivi mobili.',
'간편인증' => 'Verifica semplificata',
'휴대폰' => 'Cellulare',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Oggi ha già usato la verifica dell\'identità ({1}) {2} volte e non può più utilizzarla.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Non disponibile: la funzione exec non può essere eseguita.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Il numero di variabili inviate dal modulo supera max_input_vars.\\nAlcuni valori potrebbero andare persi prima della registrazione nel DB.\\n\\nPer risolvere, modifichi il valore max_input_vars nel php.ini del server.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Non è possibile specificare un altro dominio nell\'URL.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Accesso negato: l\'URL contiene dati dell\'utente.',
'bot 으로 판단되어 중지합니다.' => 'Operazione interrotta: rilevato un bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Inserisca il contenuto.',

// lib/get_data.lib.php
'제목' => 'Oggetto',
'내용' => 'Contenuto',
'제목+내용' => 'Oggetto+Contenuto',
'글쓴이' => 'Autore',
'글쓴이(코)' => 'Autore (comm.)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Inserisca il nome utente.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Il nome utente può contenere solo lettere, numeri e _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Il nome utente deve contenere almeno 3 caratteri.',
'이미 사용중인 회원아이디 입니다.' => 'Nome utente già in uso.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Nome utente non disponibile: è una parola riservata.',
'닉네임을 입력해 주십시오.' => 'Inserisca il nickname.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Il nickname può contenere solo caratteri coreani, lettere e numeri, senza spazi.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Il nickname deve contenere almeno 2 caratteri coreani o 4 lettere.',
'이미 존재하는 닉네임입니다.' => 'Nickname già esistente.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Nickname non disponibile: è una parola riservata.',
'E-mail 주소를 입력해 주십시오.' => 'Inserisca l\'indirizzo e-mail.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Formato dell\'indirizzo e-mail non valido.',
'{1} 메일은 사용할 수 없습니다.' => 'L\'indirizzo {1} non può essere utilizzato.',
'이미 사용중인 E-mail 주소입니다.' => 'Indirizzo e-mail già in uso.',
'이름을 입력해 주십시오.' => 'Inserisca il nome.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Il nome può contenere solo caratteri coreani, senza spazi.',
'휴대폰번호를 입력해 주십시오.' => 'Inserisca il numero di cellulare.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Inserisca un numero di cellulare valido.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Numero di cellulare già in uso. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Richiesta non valida.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Verifica non valida. Utilizzi la procedura corretta.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Nessun account registrato con i dati verificati.',
'코드 : {1}  {2}' => 'Codice: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Risultato della verifica semplificata KG Inicis',
'본인인증이 완료되었습니다.' => 'Verifica dell\'identità completata.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Verifica semplificata KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Questo account è già stato verificato con l\'identità di un\'altra persona.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Esiste già un account registrato con questi dati di verifica dell\'identità.\\nNome utente: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Ascolta i numeri',
'새로고침' => 'Aggiorna',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Inserisca i numeri antispam nell\'ordine indicato.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Risultato della verifica tramite cellulare',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Rischio di manomissione di dn_hash (verifichi che il file {1} abbia i permessi di esecuzione.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Ha annullato la verifica dell\'identità tramite cellulare.',
'up_hash 변조 위험있음' => 'Rischio di manomissione di up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Manca il codice sito KCP per il servizio di verifica tramite cellulare.\\Inserisca il codice sito KCP in Amministrazione > Configurazione di base.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Esiste già un account registrato con questi dati di verifica dell\'identità.\\nNome utente: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Verifica completata con il suo numero di cellulare.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Nessuna risposta dalla verifica dell\'identità. Ricominci dall\'inizio.',
'코드 : {1} {2}' => 'Codice: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'La sessione di verifica dell\'identità è scaduta. Ricominci dall\'inizio.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Recupero del risultato della verifica non riuscito ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Il modulo KCP di verifica tramite cellulare V2 funziona solo con PHP 7.0 o superiore.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Le estensioni PHP richieste dal modulo KCP di verifica tramite cellulare V2 (openssl/curl/hash_pbkdf2) non sono attive.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Il codice sito o la ENC_KEY della verifica tramite cellulare KCP V2 non sono configurati.\\nLi inserisca in Amministrazione > Configurazione di base.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Registrazione della transazione di verifica non riuscita.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verifica tramite cellulare',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Impossibile generare i dati della richiesta di registrazione transazione KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Impossibile cifrare i dati della richiesta di registrazione transazione KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Nessuna risposta dall\'API di registrazione transazione KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Impossibile interpretare la risposta dell\'API di registrazione transazione KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Impossibile generare i dati della richiesta del risultato della verifica KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Nessuna risposta dall\'API del risultato della verifica KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Impossibile interpretare la risposta dell\'API del risultato della verifica KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Impossibile decifrare i dati del risultato della verifica KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Impossibile interpretare i dati decifrati della verifica KCP.',
'cURL 초기화에 실패했습니다.' => 'Inizializzazione di cURL non riuscita.',
'KCP API 통신 실패: {1}' => 'Comunicazione con l\'API KCP non riuscita: {1}',
'KCP API HTTP 오류: {1}' => 'Errore HTTP dell\'API KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Si è verificato un errore durante la verifica tramite cellulare. Codice di errore: {1}\\n\\nPer assistenza contatti il servizio clienti di Korea Credit Bureau (KCB) al numero 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Verifichi i valori inseriti',
'KCB 휴대폰 본인확인' => 'Verifica tramite cellulare KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Si è verificato un errore durante la verifica i-PIN. Codice di errore: {1}\\n\\nPer assistenza contatti il servizio clienti di Korea Credit Bureau (KCB) al numero 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Si è verificato un errore durante la verifica i-PIN (dati CI mancanti). Codice di errore: {1}\\n\\nPer assistenza contatti il servizio clienti di Korea Credit Bureau (KCB) al numero 02-708-1000.',
'KCB 아이핀 본인확인' => 'Verifica i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Imposti il servizio di verifica tramite cellulare KCB in Configurazione di base.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Inserisca l\'ID membro KCB in Configurazione di base.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Il file eseguibile del modulo non esiste.\\n\\nIl file {1} deve trovarsi in {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Il file eseguibile del modulo non ha i permessi di esecuzione.\\n\\nAssegni i permessi di esecuzione, ad esempio con chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Il file eseguibile del modulo non ha i permessi di esecuzione.\\n\\nVerifichi che IUSER abbia i permessi di esecuzione su cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Imposti il servizio di verifica i-PIN KCB in Configurazione di base.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Crei la directory key in {1}/{2}.\\n\\nDopo averla creata, assegni i permessi di scrittura. Esempio: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Cambi i permessi della directory {1}/{2}/key in 705.\\nchmod 705 key oppure chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Cambi i permessi della directory {1}/{2}/key in 707.\\n\\nchmod 707 key oppure chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback di Twitter',
'트위터에 승인이 되었습니다.' => 'Autorizzazione Twitter concessa.',
'트위터에 승인이 되지 않았습니다.' => 'Autorizzazione Twitter non concessa.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Dettagli',
'페이스북으로 공유' => 'Condividi su Facebook',
'페이스북 공유' => 'Condividi su Facebook',
'트위터로  공유' => 'Condividi su Twitter',
'트위터 공유' => 'Condividi su Twitter',
'카카오톡으로 보내기' => 'Invia con KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Pubblicato anche su Facebook',
'트위터에도 등록됨' => 'Pubblicato anche su Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Pubblica anche su Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Accesso social - {1}',
'잠시후에 다시 시도해 주세요.' => 'Riprovi tra qualche istante.',
'홈으로' => 'Home',
'이 페이지 닫기' => 'Chiudi questa pagina',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Non può registrarsi di nuovo perché esiste già un account collegato o registrato con questo ID {1}. Se è un membro, effettui l\'accesso e colleghi l\'account in Modifica profilo.',
'지정되지 않은 오류입니다.' => 'Errore non specificato.',
'설정 오류입니다.' => 'Errore di configurazione.',
'해당 provider 설정 오류입니다.' => 'Errore di configurazione del provider.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Provider sconosciuto o disattivato.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Non ha i permessi per accedere a questo servizio.',
'인증이 실패되었습니다.. ' => 'Autenticazione non riuscita..',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'L\'utente ha annullato l\'autenticazione oppure il provider ha rifiutato la connessione.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Richiesta del profilo utente non riuscita. L\'utente potrebbe non essere collegato a questo servizio.',
'이 경우 다시 인증 요청을 해야 합니다.' => 'In questo caso occorre ripetere la richiesta di autenticazione.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'L\'utente non è collegato a questo servizio.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Il servizio non supporta questa funzione.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Ha già effettuato l\'accesso oppure la richiesta non è valida.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Esiste già un ID collegato oppure la richiesta non è valida.',
'소셜 데이터 오류' => 'Errore nei dati social',
'SNS 사용자 인증에 실패하였습니다.' => 'Autenticazione dell\'utente social non riuscita.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'A questo account è già collegato un ID {1}. Scolleghi l\'account e riprovi.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Connessione a {1} in corso. Attenda un momento.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'L\'accesso social non è attivo.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'L\'accesso social è disattivato nella configurazione.',
'새창 옵션이 비활성화 되어 있습니다.' => 'L\'opzione della nuova finestra è disattivata.',
'서비스 이름이 넘어오지 않았습니다.' => 'Nome del servizio non ricevuto.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'L\'accesso social non è attivo.',
'이미 회원가입 하였습니다.' => 'La registrazione è già stata effettuata.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Accessibile solo a chi ha effettuato l\'accesso social.',
'소셜 회원 가입 - {1}' => 'Registrazione social - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Accessibile solo a chi ha effettuato l\'accesso social.',
'이미 등록된 회원이 존재합니다.' => 'Esiste già un membro registrato.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'I dati della verifica dell\'identità non corrispondono ai dati personali. Riprovi.',
'회원 가입 오류!' => 'Errore di registrazione!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Non è un membro oppure il valore non è stato ricevuto.',
'권한이 없거나 잘못된 요청입니다.' => 'Non ha i permessi oppure la richiesta non è valida.',
);
