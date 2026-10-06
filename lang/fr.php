<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (fr). 틀은 php lang/build.php fr 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Veuillez installer la boutique avant de l\'utiliser.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Trop de requêtes. Veuillez réessayer dans un instant.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'L\'identifiant du parrain ne peut contenir que des lettres, des chiffres et _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Le parrain saisi n\'existe pas.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Veuillez utiliser la procédure appropriée.',

// bbs/alert.php
'오류안내 페이지' => 'Page d\'erreur',
'결과안내 페이지' => 'Page de résultat',
'다음 항목에 오류가 있습니다.' => 'Les éléments suivants contiennent des erreurs.',
'다음 내용을 확인해 주세요.' => 'Veuillez vérifier les points suivants.',
'돌아가기' => 'Retour',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Veuillez fermer la nouvelle fenêtre et réessayer.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Veuillez fermer la nouvelle fenêtre avant de continuer.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Ce forum n\'existe pas.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'La valeur bo_table n\'a pas été transmise.\\n\\nVeuillez la transmettre sous la forme board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Ce message n\'existe pas.\\n\\nIl a peut-être été supprimé ou déplacé.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Les visiteurs n\'ont pas accès à ce forum.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Vous n\'avez pas l\'autorisation de lire les messages.\\n\\nPour toute question, veuillez contacter l\'administrateur.',
'글을 읽을 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de lire ce message.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation de lire ce message.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Seuls les membres ayant vérifié leur identité peuvent lire les messages de ce forum.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Seuls les membres ayant vérifié leur identité peuvent lire les messages de ce forum.\\n\\nVeuillez vérifier votre identité dans Modifier le profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Seuls les membres dont la majorité a été vérifiée par la vérification d\'identité peuvent lire les messages de ce forum.\\n\\nSi vous êtes majeur et ne pouvez pas lire les messages, veuillez refaire la vérification d\'identité dans Modifier le profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Vous n\'avez pas assez de points ({1}) pour lire ce message ({2}).\\n\\nVeuillez accumuler des points et réessayer.',
'목록을 볼 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de voir la liste.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation de voir la liste.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'{1} {2} 페이지' => '{1} page {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => '{1} : veuillez sélectionner au moins un élément.',
'올바른 방법으로 이용해 주세요.' => 'Veuillez utiliser la procédure appropriée.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Veuillez vérifier les informations ci-dessous.',
'확인' => 'OK',
'취소' => 'Annuler',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Veuillez d\'abord vérifier Gestion des forums->Gestion du contenu en mode administrateur.',
'등록된 내용이 없습니다.' => 'Aucun contenu.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} n\'existe pas.</p>',

// bbs/current_connect.php
'현재접속자' => 'Connectés',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Suppression impossible en raison d\'une erreur de jeton.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Suppression impossible : ce forum n\'appartient pas à un groupe que vous gérez.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Vous ne pouvez pas supprimer un message écrit par un membre de niveau supérieur au vôtre.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Suppression impossible : vous ne gérez pas ce forum.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Suppression impossible : ce n\'est pas votre message.',
'로그인 후 삭제하세요.' => 'Veuillez vous connecter pour supprimer.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Mot de passe incorrect, suppression impossible.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Ce message ne peut pas être supprimé car il a des réponses.\\n\\nVeuillez d\'abord supprimer les réponses.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Ce message ne peut pas être supprimé car il a des commentaires.\\n\\nUn message ayant {1} commentaires ou plus ne peut pas être supprimé.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Accès non autorisé.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Le commentaire n\'existe pas ou ce n\'est pas un commentaire.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Suppression impossible : ce commentaire a été écrit par un membre de niveau supérieur à l\'administrateur du groupe.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Vous ne pouvez pas supprimer ce commentaire : ce forum n\'appartient pas à un groupe que vous gérez.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Suppression impossible : ce commentaire a été écrit par un membre de niveau supérieur à l\'administrateur du forum.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Vous ne pouvez pas supprimer ce commentaire : vous ne gérez pas ce forum.',
'비밀번호가 틀립니다.' => 'Mot de passe incorrect.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Ce commentaire ne peut pas être supprimé car il a des réponses.',

// bbs/download.php
'잘못된 접근입니다.' => 'Accès invalide.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation de télécharger.\\nSi vous êtes membre, veuillez vous connecter.',
'파일 정보가 존재하지 않습니다.' => 'Les informations du fichier n\'existent pas.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Le jeton a expiré ou n\'est pas valide.\\nVeuillez actualiser la page et réessayer.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Le téléchargement du fichier {1} déduit des points ({2} points).\\nLes points ne sont déduits qu\'une fois par message, même si vous le téléchargez à nouveau.\\nVoulez-vous quand même télécharger ?',
'다운로드 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de télécharger.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nSi vous êtes membre, veuillez vous connecter.',
'파일이 존재하지 않습니다.' => 'Le fichier n\'existe pas.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Vous n\'avez pas assez de points ({1}) pour télécharger ({2}).\\n\\nVeuillez accumuler des points et réessayer.',
'다운로드 &gt; {1}' => 'Téléchargement &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Ce membre n\'existe pas.',
'탈퇴 또는 차단된 회원입니다.' => 'Ce membre a résilié son compte ou est bloqué.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Cette demande de vérification d\'e-mail a déjà été traitée ou n\'est pas valide.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Votre adresse e-mail a été vérifiée.\\n\\nVous pouvez désormais vous connecter avec l\'identifiant {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Le lien de vérification a expiré. Veuillez demander un nouvel e-mail de vérification.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Les informations de la demande de vérification d\'e-mail ne sont pas valides.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Les valeurs attendues n\'ont pas été transmises.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Vous êtes désinscrit des e-mails d\'information.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Veuillez d\'abord vérifier Gestion des forums->Gestion de la FAQ en mode administrateur.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'L\'option « Utiliser l\'envoi d\'e-mails » doit être cochée dans la configuration pour envoyer des e-mails.\\n\\nVeuillez contacter l\'administrateur.',
'회원만 이용하실 수 있습니다.' => 'Réservé aux membres.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Vous ne pouvez pas envoyer d\'e-mail aux autres si votre profil n\'est pas public.\\n\\nVous pouvez le modifier dans Modifier le profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Les informations du membre n\'existent pas.\\n\\nLe membre a peut-être résilié son compte.',
'정보공개를 하지 않았습니다.' => 'Ce membre n\'a pas de profil public.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Vous ne pouvez envoyer qu\'un nombre limité d\'e-mails par session.\\n\\nPour en envoyer d\'autres, veuillez vous reconnecter ou revenir sur le site.',
'메일 쓰기' => 'Écrire un e-mail',
'이메일이 올바르지 않습니다.' => 'L\'adresse e-mail n\'est pas valide.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Vous avez dépassé le nombre d\'envois autorisés par le formulaire.',
'자동등록방지 숫자가 틀렸습니다.' => 'Le code anti-spam est incorrect.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Impossible d\'envoyer l\'e-mail : le format de l\'adresse e-mail n\'est pas valide.',
'허용되지 않는 파일 확장자입니다.' => 'Cette extension de fichier n\'est pas autorisée.',
'메일보내기' => 'Envoyer un e-mail',
'메일 발송중' => 'Envoi de l\'e-mail en cours',
'메일을 정상적으로 발송하였습니다.' => 'L\'e-mail a bien été envoyé.',

// bbs/good.php
'회원만 가능합니다.' => 'Réservé aux membres.',
'값이 제대로 넘어오지 않았습니다.' => 'Les valeurs n\'ont pas été correctement transmises.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Vous ne pouvez aimer ou ne pas aimer que depuis le message lui-même.',
'존재하는 게시판이 아닙니다.' => 'Ce forum n\'existe pas.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Vous ne pouvez pas aimer ou ne pas aimer votre propre message.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Ce forum n\'utilise pas la fonction J\'aime.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Ce forum n\'utilise pas la fonction Je n\'aime pas.',
'추천' => 'J\'aime',
'비추천' => 'Je n\'aime pas',
'이미 {1} 하신 글 입니다.' => 'Vous avez déjà choisi {1} pour ce message.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Vous avez déjà réagi à ce message.',
'이 글을 {1} 하셨습니다.' => 'Vous avez choisi {1} pour ce message.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Le groupe {1} n\'est accessible que sur mobile.',

// bbs/link.php
'링크' => 'Lien',
'링크가 없습니다.' => 'Aucun lien.',

// bbs/list.php
'전체' => 'Tout',
'열린 분류' => 'Catégorie ouverte',
'이전검색' => 'Recherche précédente',
'다음검색' => 'Recherche suivante',

// bbs/login.php
'로그인' => 'Connexion',

// bbs/login_check.php
'로그인 검사' => 'Vérification de connexion',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'L\'identifiant et le mot de passe ne peuvent pas être vides.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Identifiant inexistant ou mot de passe incorrect.\\nLe mot de passe est sensible à la casse.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Votre identifiant a été bloqué.\\nDate du blocage : {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Accès impossible : ce compte a été résilié.\\nDate de résiliation : {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Vous devez vérifier votre adresse e-mail {1} pour vous connecter. Pour utiliser une autre adresse e-mail, cliquez sur Annuler.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Si le dossier data n\'est pas accessible en écriture ou si l\'espace disque est plein,\\nla connexion peut échouer. Veuillez vérifier l\'espace disque et les droits d\'écriture.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'L\'URL contient une valeur non valide.',
'url에 도메인을 지정할 수 없습니다.' => 'Vous ne pouvez pas indiquer de domaine dans l\'URL.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'La vérification d\'identité n\'est pas disponible. Veuillez contacter l\'administrateur.',
'본인인증을 다시 해주세요.' => 'Veuillez refaire la vérification d\'identité.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Veuillez vous connecter pour continuer.',
'w 값이 제대로 넘어오지 않았습니다.' => 'La valeur w n\'a pas été correctement transmise.',
'잘못된 접근입니다' => 'Accès invalide',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Identifiant manquant. Veuillez utiliser la procédure appropriée.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Un compte existe déjà avec ces informations d\'identité.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Les informations d\'identité vérifiées ne correspondent pas aux informations saisies. Veuillez réessayer.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Réservé aux membres connectés.',
'회원 비밀번호 확인' => 'Confirmation du mot de passe',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Réservé aux membres.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Le super administrateur ne peut pas résilier son compte.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'La résiliation du compte a échoué. Veuillez vérifier l\'état du membre.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} a résilié son compte le {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'Mes messages',
'kind 변수 값이 올바르지 않습니다.' => 'La valeur de kind n\'est pas valide.',
'받은' => 'Reçu',
'보낸' => 'Envoyé',
'정보없음' => 'Aucune information',
'아직 읽지 않음' => 'Pas encore lu',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Vous ne pouvez pas envoyer de messages aux autres si votre profil n\'est pas public. Vous pouvez le modifier dans Modifier le profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Les informations du membre n\'existent pas.\\n\\nLe membre a peut-être résilié son compte.',
'쪽지 보내기' => 'Envoyer un message',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'L\'identifiant « {1} » n\'existe pas (ou n\'a pas de profil public), ou appartient à un membre résilié ou bloqué.\\nLe message n\'a pas été envoyé.',
'해당 회원이 존재하지 않습니다.' => 'Ce membre n\'existe pas.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Vous n\'avez pas assez de points ({1} points) pour envoyer ce message.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Message envoyé à {1}.',
'회원아이디 오류 같습니다.' => 'L\'identifiant semble incorrect.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Veuillez transmettre la valeur {1}.',
'{1} 쪽지 보기' => 'Message – {1}',

// bbs/move.php
'이동' => 'Déplacer',
'복사' => 'Copier',
'sw 값이 제대로 넘어오지 않았습니다.' => 'La valeur sw n\'a pas été correctement transmise.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Réservé aux administrateurs de forum et au-delà.',
'게시물 {1}' => 'Message : {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => '{1} : veuillez sélectionner au moins un forum.',
'현재 페이지 게시판 전체' => 'Tous les forums de cette page',
'게시판' => 'Forums',
'현재' => 'Actuel',
'창닫기' => 'Fermer la fenêtre',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => '{1} : veuillez sélectionner au moins un forum de destination.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1} : le message a été transféré vers les forums sélectionnés.',

// bbs/new.php
'새글' => 'Nouveaux messages',
'그룹' => 'Groupe',
'전체그룹' => 'Tous les groupes',
'[코] ' => '[Comm.] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Réservé au super administrateur.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Notification pop-up',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Ne plus afficher pendant {1} heures.',
'닫기' => 'Fermer',
'팝업레이어 알림이 없습니다.' => 'Aucune notification pop-up.',

// bbs/password.php
'비밀번호 입력' => 'Saisir le mot de passe',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Vous êtes déjà connecté.',
'회원정보 찾기' => 'Retrouver mes informations',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Adresse e-mail incorrecte.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Un e-mail permettant de vérifier votre identifiant et votre mot de passe a été envoyé à {1}.\\n\\nVeuillez consulter votre messagerie.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Récupération de vos informations de compte',
'회원정보 찾기 안내' => 'Récupération des informations de compte',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) a demandé la récupération de ses informations de compte le {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Même les administrateurs ne peuvent pas connaître votre mot de passe ; c\'est pourquoi nous vous envoyons un nouveau mot de passe.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Consultez ci-dessous le nouveau mot de passe, puis <span style="color:#ff3061">cliquez sur le lien <strong>Changer le mot de passe</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Lorsque le message confirmant le changement de mot de passe s\'affiche, connectez-vous sur le site avec votre identifiant et le nouveau mot de passe.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Une fois connecté, veuillez choisir un nouveau mot de passe dans Modifier le profil.',
'회원아이디' => 'Identifiant',
'변경될 비밀번호' => 'Nouveau mot de passe',
'비밀번호 변경' => 'Changer le mot de passe',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Le mot de passe a été changé.\\n\\nVeuillez vous connecter avec votre identifiant et le nouveau mot de passe.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Impossible de retrouver l\'identifiant ou le mot de passe par vérification d\'identité. Veuillez contacter l\'administrateur.',
'패스워드 변경' => 'Changer le mot de passe',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Le mot de passe n\'a pas été transmis.',
'비밀번호가 일치하지 않습니다.' => 'Les mots de passe ne correspondent pas.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Réservé aux membres.',
'{1} 님의 포인트 내역' => 'Historique des points de {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'La valeur po_id n\'a pas été correctement transmise.',
'기타의견이 비활성화되어 있습니다.' => 'Les autres avis sont désactivés.',
'권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Ce sondage n\'existe pas.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Seuls les membres de niveau {1} ou plus peuvent voir les résultats.',
'설문조사 결과' => 'Résultats du sondage',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Seuls les membres de niveau {1} ou supérieur peuvent voter.',
'항목을 선택하세요.' => 'Veuillez choisir une option.',
'{1}에 이미 참여하셨습니다.' => 'Vous avez déjà participé à {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Vous ne pouvez pas consulter les informations des autres si votre profil n\'est pas public.\\n\\nVous pouvez le modifier dans Modifier le profil.',
'{1}님의 자기소개' => 'Présentation de {1}',
'소개 내용이 없습니다.' => 'Aucune présentation.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Si vous êtes membre, veuillez vous connecter.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Veuillez sélectionner au moins un message à supprimer.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Si vous êtes membre, veuillez vous connecter.',
'열린 분류 ' => 'Catégorie ouverte ',
'{1}이 존재하지 않습니다.' => '{1} n\'existe pas.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Ce message n\'existe pas.\\nIl a été supprimé ou ne vous appartient pas.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Une demande ayant déjà reçu une réponse ne peut pas être modifiée.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Vous n\'avez pas l\'autorisation de modifier ce message.\\n\\nVeuillez utiliser la procédure appropriée.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Veuillez définir les catégories dans la configuration des demandes 1:1.',
'{1} 바이트' => '{1} octets',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Veuillez indiquer une catégorie valide.',
'이메일을 입력하세요.' => 'Veuillez saisir votre adresse e-mail.',
'<strong>제목</strong>을 입력하세요.' => 'Veuillez saisir un <strong>sujet</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Veuillez saisir le <strong>contenu</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Le contenu contient de nombreux codes non valides.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Le fichier ou le contenu dépasse la limite définie sur le serveur.\\npost_max_size={1} , upload_max_filesize={2}\\nVeuillez contacter l\'administrateur du forum ou du serveur.',
'답변은 관리자만 등록할 수 있습니다.' => 'Seuls les administrateurs peuvent répondre.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Impossible de répondre : la demande n\'existe pas.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Impossible de répondre à une réponse.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Veuillez envoyer au maximum 2 pièces jointes.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Le fichier « {1} » ne peut pas être envoyé car il dépasse la limite du serveur ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Le fichier « {1} » n\'a pas été envoyé correctement.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Le fichier « {1} » ({2} octets) n\'est pas envoyé car il dépasse la limite du forum ({3} octets).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Le fichier « {1} » ne peut pas être enregistré de manière sûre. Veuillez vérifier la source aléatoire et le chemin de stockage du serveur.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} – notification de réponse',

// bbs/register.php
'회원가입약관' => 'Conditions d\'utilisation',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Changer l\'adresse e-mail de vérification',
'이미 메일인증 하신 회원입니다.' => 'Votre adresse e-mail est déjà vérifiée.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Si vous n\'avez pas reçu l\'e-mail de vérification, vous pouvez modifier l\'adresse e-mail de votre compte.',
'사이트 이용정보 입력' => 'Informations du compte',
'필수' => 'Obligatoire',
'자동등록방지' => 'Anti-spam',
'인증메일변경' => 'Changer l\'e-mail de vérification',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'L\'adresse e-mail {1} est déjà utilisée.\\n\\nVeuillez saisir une autre adresse e-mail.',
'[{1}] 인증확인 메일입니다.' => '[{1}] E-mail de vérification',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'L\'e-mail de vérification a été renvoyé à {1}.\\n\\nVeuillez consulter la boîte {1} dans quelques instants.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Vous devez accepter la collecte et l\'utilisation des données personnelles pour vous inscrire.',
'회원 가입' => 'S\'inscrire',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Les informations de l\'administrateur doivent être modifiées depuis l\'interface d\'administration.',
'로그인 후 이용하여 주십시오.' => 'Veuillez vous connecter pour continuer.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Le membre connecté ne correspond pas aux informations transmises.',
'비밀번호를 입력해 주세요.' => 'Veuillez saisir votre mot de passe.',
'회원 정보 수정' => 'Modifier mes informations',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Cette action n\'est pas disponible en mode démo.',
'이름을 올바르게 입력해 주십시오.' => 'Veuillez saisir un nom valide.',
'닉네임을 올바르게 입력해 주십시오.' => 'Veuillez saisir un pseudo valide.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Une vérification d\'identité est requise pour s\'inscrire.',
'추천인이 존재하지 않습니다.' => 'Le parrain n\'existe pas.',
'본인을 추천할 수 없습니다.' => 'Vous ne pouvez pas vous parrainer vous-même.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Bienvenue parmi nos membres',
'로그인 되어 있지 않습니다.' => 'Vous n\'êtes pas connecté.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Modification impossible : les informations ne correspondent pas au compte connecté.\\nSi vous utilisez une méthode non autorisée, veuillez arrêter immédiatement.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Veuillez envoyer une icône de membre de {1} octets maximum.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} n\'est pas un fichier image.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Veuillez envoyer une image de membre de {1} octets maximum.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} n\'est pas un fichier gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Vos informations ont été mises à jour.\\n\\nVotre adresse e-mail ayant changé, vous devez la vérifier à nouveau.',
'회원정보수정' => 'Modifier le profil',
'회원 정보가 수정 되었습니다.' => 'Vos informations ont été mises à jour.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'E-mail de bienvenue',
'회원가입을 축하합니다.' => 'Bienvenue parmi nos membres.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Merci de votre inscription, <b>{1}</b> !',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Nous ferons de notre mieux pour mériter votre confiance.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Cliquez sur <strong>Vérifier l\'e-mail</strong> ci-dessous pour finaliser votre inscription.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Le lien est valable {1} minutes après l\'envoi.',
'감사합니다.' => 'Merci.',
'메일인증' => 'Vérifier l\'e-mail',
'사이트바로가기' => 'Aller sur le site',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'E-mail de vérification',
'회원 인증 메일입니다.' => 'Ceci est un e-mail de vérification pour les membres.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'L\'adresse e-mail de <b>{1}</b> a été modifiée.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Cliquez sur l\'adresse ci-dessous pour finaliser la vérification.',
'{1} 로그인' => 'Connexion {1}',

// bbs/register_result.php
'회원가입 완료' => 'Inscription terminée',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'Le RSS n\'est disponible que pour les forums lisibles par les visiteurs.',
'RSS 보기가 금지되어 있습니다.' => 'Le RSS est désactivé.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Messages enregistrés de {1}',
'[게시판 없음]' => '[Aucun forum]',
'[글 없음]' => '[Aucun message]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Réservé aux membres.',
'로그인하기' => 'Se connecter',
'올바른 방법으로 사용해 주십시오.' => 'Veuillez utiliser la procédure appropriée.',
'코멘트는 스크랩 할 수 없습니다.' => 'Les commentaires ne peuvent pas être enregistrés.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Vous avez déjà enregistré ce message.

Voulez-vous voir vos messages enregistrés maintenant ?',
'이미 스크랩하신 글 입니다.' => 'Vous avez déjà enregistré ce message.',
'스크랩 확인하기' => 'Voir les messages enregistrés',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Le message que vous voulez enregistrer n\'existe pas.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Vous ne pouvez pas publier des messages aussi rapidement.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Le message a été enregistré.

Voulez-vous voir vos messages enregistrés maintenant ?',
'이 글을 스크랩 하였습니다.' => 'Le message a été enregistré.',

// bbs/search.php
'전체검색 결과' => 'Résultats de recherche',
'[비밀글 입니다.]' => '[Message secret]',
'게시판 그룹선택' => 'Choisir un groupe de forums',
'전체 분류' => 'Toutes les catégories',

// bbs/view_comment.php
'비밀글 입니다.' => 'Message secret.',
'댓글내용 확인' => 'Voir le commentaire',

// bbs/view_image.php
'이미지 크게보기' => 'Agrandir l\'image',
'이미지 확장자가 아닙니다.' => 'Ce n\'est pas une extension d\'image.',
'이미지 파일이 아닙니다.' => 'Ce n\'est pas un fichier image.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'La valeur bo_table n\'a pas été transmise.\\nVeuillez la transmettre sous la forme write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Ce message n\'existe pas.\\nIl a peut-être été supprimé ou déplacé.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => '\\$wr_id n\'est pas utilisé pour écrire un nouveau message.',
'글을 쓸 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation d\'écrire.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation d\'écrire.\\nSi vous êtes membre, veuillez vous connecter.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Vous n\'avez pas assez de points ({1}) pour écrire ({2}).\\n\\nVeuillez accumuler des points et réessayer.',
'글쓰기' => 'Écrire',
'글을 수정할 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de modifier ce message.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation de modifier ce message.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Ce message ne peut pas être modifié car il a des réponses.\\n\\nUn message ayant des réponses ne peut pas être modifié.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Ce message ne peut pas être modifié car il a des commentaires.\\n\\nUn message ayant {1} commentaires ou plus ne peut pas être modifié.',
'글수정' => 'Modifier le message',
'글을 답변할 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de répondre à ce message.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation d\'écrire une réponse.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Vous n\'avez pas assez de points ({1}) pour répondre ({2}).\\n\\nVeuillez accumuler des points et réessayer.',
'공지에는 답변 할 수 없습니다.' => 'Impossible de répondre à une annonce.',
'정상적인 접근이 아닙니다.' => 'Accès non valide.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Seuls l\'auteur ou un administrateur peuvent répondre à un message secret.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Impossible de répondre au message secret d\'un visiteur.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Vous ne pouvez plus répondre.\\n\\nLes réponses sont limitées à 10 niveaux.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Vous ne pouvez plus répondre.\\n\\nLes réponses sont limitées à 26.',
'글답변' => 'Répondre au message',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Accès non autorisé.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Vous n\'avez pas l\'autorisation d\'écrire.\\n\\nPour toute question, veuillez contacter l\'administrateur.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Seuls les membres ayant vérifié leur identité peuvent écrire dans ce forum.\\n\\nSi vous êtes membre, veuillez vous connecter.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Seuls les membres ayant vérifié leur identité peuvent écrire dans ce forum.\\n\\nVeuillez vérifier votre identité dans Modifier le profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Le nom est obligatoire.',
'댓글을 쓸 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de commenter.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Ce message n\'existe pas.\\nIl a peut-être été supprimé ou déplacé.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Vous n\'avez pas assez de points ({1}) pour commenter ({2}).\\n\\nVeuillez accumuler des points et commenter à nouveau.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Le commentaire auquel vous répondez n\'existe pas.\\n\\nIl a peut-être été supprimé pendant votre saisie.',
'댓글을 등록할 수 없습니다.' => 'Impossible d\'enregistrer le commentaire.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Vous ne pouvez plus répondre.\\n\\nLes réponses sont limitées à 5 niveaux.',
'원글
{1}


댓글
{2}' => 'Message d\'origine
{1}


Commentaire
{2}',
'입력' => 'Nouveau',
'수정' => 'Modifier',
'답변' => 'Répondre',
'댓글 ' => 'Commentaire ',
'댓글 수정' => 'Modification de commentaire',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nouveau message dans le forum {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Modification impossible : ce commentaire a été écrit par un membre de niveau supérieur à l\'administrateur du groupe.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Vous ne pouvez pas modifier ce commentaire : ce forum n\'appartient pas à un groupe que vous gérez.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Modification impossible : ce commentaire a été écrit par un membre de niveau supérieur à l\'administrateur du forum.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Vous ne pouvez pas modifier ce commentaire : vous ne gérez pas ce forum.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Modification impossible : ce n\'est pas votre message.',
'댓글을 수정할 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation de modifier ce commentaire.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Ce commentaire ne peut pas être modifié car il a des réponses.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Les informations du forum ne sont pas valides.',

// bbs/write_update.php
'게시글 저장' => 'Enregistrement du message',
'<strong>분류</strong>를 선택하세요.' => 'Veuillez choisir une <strong>catégorie</strong>.',
'분류를 올바르게 입력하세요.' => 'Veuillez saisir une catégorie valide.',
'올바른 방법으로 수정하여 주십시오.' => 'Veuillez modifier selon la procédure appropriée.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Modification impossible : ce forum n\'appartient pas à un groupe que vous gérez.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Vous ne pouvez pas modifier un message écrit par un membre de niveau supérieur au vôtre.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Modification impossible : vous ne gérez pas ce forum.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Veuillez vérifier le mot de passe et modifier à nouveau.',
'로그인 후 수정하세요.' => 'Veuillez vous connecter pour modifier.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Ce forum n\'autorise pas les messages secrets.',
'관리자만 공지할 수 있습니다.' => 'Seuls les administrateurs peuvent publier des annonces.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Vous ne pouvez plus répondre.\\nLes réponses sont limitées à 10 niveaux.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Vous ne pouvez plus répondre.\\nLes réponses sont limitées à 26.',
'제목을 입력하여 주십시오.' => 'Veuillez saisir un sujet.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Veuillez supprimer les fichiers existants et envoyer au maximum {1} pièces jointes.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Veuillez envoyer au maximum {1} pièces jointes.',
'코멘트' => 'Commentaire',
'코멘트 수정' => 'Modification de commentaire',

// bbs/write_update_mail.php
'{1} 메일' => 'E-mail {1}',
'작성자 {1}' => 'Auteur : {1}',
'사이트에서 게시물 확인하기' => 'Voir le message sur le site',

// common.php
'접근이 가능하지 않습니다.' => 'Accès impossible.',
'접근 불가합니다.' => 'Accès refusé.',

// head.php
'본문 바로가기' => 'Aller au contenu',
'커뮤니티' => 'Communauté',
'쇼핑몰' => 'Boutique',
'접속자' => 'Visiteurs',
'사이트 내 전체검색' => 'Recherche sur le site',
'검색어 필수' => 'Terme de recherche (obligatoire)',
'검색어를 입력해주세요' => 'Saisissez un terme de recherche',
'검색' => 'Rechercher',
'검색어는 두글자 이상 입력하십시오.' => 'Veuillez saisir au moins deux caractères.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Pour une recherche plus rapide, un seul espace est autorisé dans le terme de recherche.',
'정보수정' => 'Modifier le profil',
'로그아웃' => 'Déconnexion',
'회원가입' => 'S\'inscrire',
'메인메뉴' => 'Menu principal',
'전체메뉴' => 'Tous les menus',
'전체메뉴열기' => 'Ouvrir tous les menus',
'하위분류' => 'Sous-menu',
'메뉴 준비 중입니다.' => 'Le menu est en cours de préparation.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} est connecté ',

// lib/common.lib.php
'처음' => 'Première',
'이전' => 'Précédente',
'페이지' => 'Page',
'열린' => 'Actuelle',
'다음' => 'Suivante',
'맨끝' => 'Dernière',
'$url1 과 $url2 를 지정해 주세요.' => 'Veuillez indiquer $url1 et $url2.',
'답변글' => 'Réponse',
'{1} 자기소개' => 'Présentation de {1}',
'{1} 이름으로 검색' => 'Rechercher par le nom {1}',
'쪽지보내기' => 'Envoyer un message',
'홈페이지' => 'Site web',
'자기소개' => 'À propos de moi',
'아이디로 검색' => 'Rechercher par identifiant',
'이름으로 검색' => 'Rechercher par nom',
'전체게시물' => 'Tous les messages',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Les informations MySQL Host, User, Password ou DB sont erronées.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL n\'est pas installé : la fonction mysql_connect n\'est pas disponible.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Les informations MySQL Host, User ou Password sont erronées.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Une erreur est survenue lors du traitement de la base de données.',
'yoil|일' => 'dim',
'yoil|월' => 'lun',
'yoil|화' => 'mar',
'yoil|수' => 'mer',
'yoil|목' => 'jeu',
'yoil|금' => 'ven',
'yoil|토' => 'sam',
'요일' => '.',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Le jeton a expiré. Veuillez actualiser la page.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'L\'adresse du site pour la vérification d\'e-mail n\'est pas configurée. Veuillez contacter l\'administrateur du site.',
'올바른 경로로 접근해 주십시오.' => 'Veuillez accéder par le chemin approprié.',
'PC 전용 게시판입니다.' => 'Ce forum est réservé aux ordinateurs.',
'모바일 전용 게시판입니다.' => 'Ce forum est réservé aux mobiles.',
'간편인증' => 'Vérification simplifiée',
'휴대폰' => 'Mobile',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Vous avez déjà utilisé la vérification d\'identité {2} fois aujourd\'hui ({1}) et ne pouvez plus l\'utiliser.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Indisponible car la fonction exec ne peut pas être exécutée.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Le nombre de variables envoyées par le formulaire dépasse max_input_vars.\\nCertaines valeurs peuvent être perdues avant leur enregistrement en base.\\n\\nPour résoudre le problème, modifiez max_input_vars dans le php.ini du serveur.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Vous ne pouvez pas indiquer un autre domaine dans l\'URL.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Accès refusé : l\'URL contient des informations d\'utilisateur.',
'bot 으로 판단되어 중지합니다.' => 'Arrêt : la requête a été identifiée comme provenant d\'un robot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Veuillez saisir le contenu.',

// lib/get_data.lib.php
'제목' => 'Sujet',
'내용' => 'Contenu',
'제목+내용' => 'Sujet+Contenu',
'글쓴이' => 'Auteur',
'글쓴이(코)' => 'Auteur (comm.)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Veuillez saisir un identifiant.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'L\'identifiant ne peut contenir que des lettres, des chiffres et _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'L\'identifiant doit comporter au moins 3 caractères.',
'이미 사용중인 회원아이디 입니다.' => 'Cet identifiant est déjà utilisé.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Cet identifiant est un mot réservé et ne peut pas être utilisé.',
'닉네임을 입력해 주십시오.' => 'Veuillez saisir un pseudo.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Le pseudo ne peut contenir que des lettres coréennes, des lettres latines et des chiffres, sans espace.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Le pseudo doit comporter au moins 2 caractères coréens ou 4 caractères latins.',
'이미 존재하는 닉네임입니다.' => 'Ce pseudo existe déjà.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Ce pseudo est un mot réservé et ne peut pas être utilisé.',
'E-mail 주소를 입력해 주십시오.' => 'Veuillez saisir une adresse e-mail.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Le format de l\'adresse e-mail n\'est pas valide.',
'{1} 메일은 사용할 수 없습니다.' => 'L\'adresse e-mail {1} ne peut pas être utilisée.',
'이미 사용중인 E-mail 주소입니다.' => 'Cette adresse e-mail est déjà utilisée.',
'이름을 입력해 주십시오.' => 'Veuillez saisir un nom.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Le nom ne peut contenir que des caractères coréens, sans espace.',
'휴대폰번호를 입력해 주십시오.' => 'Veuillez saisir un numéro de mobile.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Veuillez saisir un numéro de mobile valide.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Ce numéro de mobile est déjà utilisé. {1}',

// plugin/editor/cheditor5/editor.lib.php
'웹에디터 시작' => 'Début de l\'éditeur web',
'웹 에디터 끝' => 'Fin de l\'éditeur web',

// plugin/editor/smarteditor2/editor.lib.php
'단축키 일람' => 'Raccourcis clavier',
'단축키 일람 닫기' => 'Fermer les raccourcis clavier',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Requête non valide.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Vérification non valide. Veuillez utiliser la procédure appropriée.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Aucun compte ne correspond aux informations vérifiées.',
'코드 : {1}  {2}' => 'Code : {1}  {2}',
'KG이니시스 간편인증 결과' => 'Résultat de la vérification simplifiée KG Inicis',
'본인인증이 완료되었습니다.' => 'La vérification d\'identité est terminée.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Vérification simplifiée KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Ce compte a déjà été vérifié au nom d\'une autre personne.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Un compte existe déjà avec ces informations d\'identité.\\nIdentifiant : {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Écouter les chiffres',
'새로고침' => 'Actualiser',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Saisissez les chiffres anti-spam dans l\'ordre.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Résultat de la vérification par mobile',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risque de falsification de dn_hash (vérifiez que le fichier {1} a les droits d\'exécution.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Vous avez annulé la vérification par mobile.',
'up_hash 변조 위험있음' => 'Risque de falsification de up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Le code site KCP pour la vérification par mobile est manquant. Saisissez le code site KCP dans Administration > Configuration de base.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Un compte existe déjà avec ces informations d\'identité.\\nIdentifiant : {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Vérifié avec votre propre numéro de mobile.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Aucune réponse de la vérification d\'identité. Veuillez recommencer depuis le début.',
'코드 : {1} {2}' => 'Code : {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'La session de vérification d\'identité a expiré. Veuillez recommencer depuis le début.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Échec de la récupération du résultat de vérification ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Le module de vérification par mobile KCP V2 nécessite PHP 7.0 ou supérieur.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Les extensions PHP (openssl/curl/hash_pbkdf2) requises par le module de vérification par mobile KCP V2 ne sont pas activées.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Le code site ou l\'ENC_KEY de la vérification par mobile KCP V2 n\'est pas configuré.\\nVeuillez les saisir dans Administration > Configuration de base.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'L\'enregistrement de la transaction de vérification a échoué.\\n({1} : {2})',
'휴대폰 본인확인' => 'Vérification par mobile',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Impossible de générer les données d\'enregistrement de transaction KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Impossible de chiffrer les données d\'enregistrement de transaction KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Aucune réponse de l\'API d\'enregistrement de transaction KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Impossible d\'interpréter la réponse de l\'API d\'enregistrement de transaction KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Impossible de générer les données de requête du résultat de vérification KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Aucune réponse de l\'API de résultat de vérification KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Impossible d\'interpréter la réponse de l\'API de résultat de vérification KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Impossible de déchiffrer les données de résultat de vérification KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Impossible d\'interpréter les données déchiffrées de vérification KCP.',
'cURL 초기화에 실패했습니다.' => 'Échec de l\'initialisation de cURL.',
'KCP API 통신 실패: {1}' => 'Échec de la communication avec l\'API KCP : {1}',
'KCP API HTTP 오류: {1}' => 'Erreur HTTP de l\'API KCP : {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Une erreur est survenue lors de la vérification par mobile. Code d\'erreur : {1}\\n\\nPour toute question, contactez le service client de Korea Credit Bureau (KCB) au 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Les valeurs saisies doivent être vérifiées',
'KCB 휴대폰 본인확인' => 'Vérification par mobile KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Une erreur est survenue lors de la vérification i-PIN. Code d\'erreur : {1}\\n\\nPour toute question, contactez le service client de Korea Credit Bureau (KCB) au 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Une erreur est survenue lors de la vérification i-PIN (aucune information CI). Code d\'erreur : {1}\\n\\nPour toute question, contactez le service client de Korea Credit Bureau (KCB) au 02-708-1000.',
'KCB 아이핀 본인확인' => 'Vérification i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Veuillez choisir le service de vérification par mobile KCB dans la configuration de base.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Veuillez saisir l\'identifiant membre KCB dans la configuration de base.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Le fichier exécutable du module n\'existe pas.\\n\\nLe fichier {1} doit se trouver dans {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Le fichier exécutable du module n\'a pas les droits d\'exécution.\\n\\nAccordez-les par exemple avec chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Le fichier exécutable du module n\'a pas les droits d\'exécution.\\n\\nVérifiez que IUSER dispose des droits d\'exécution sur cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Veuillez choisir le service de vérification i-PIN KCB dans la configuration de base.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Veuillez créer le dossier key dans {1}/{2}.\\n\\nAccordez-lui ensuite les droits d\'écriture. Ex. : chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Veuillez changer les permissions du dossier {1}/{2}/key en 705.\\nchmod 705 key ou chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Veuillez changer les permissions du dossier {1}/{2}/key en 707.\\n\\nchmod 707 key ou chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback Twitter',
'트위터에 승인이 되었습니다.' => 'Autorisé par Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Non autorisé par Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Voir plus',
'페이스북으로 공유' => 'Partager sur Facebook',
'페이스북 공유' => 'Partager sur Facebook',
'트위터로  공유' => 'Partager sur Twitter',
'트위터 공유' => 'Partager sur Twitter',
'카카오톡으로 보내기' => 'Envoyer via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Publié aussi sur Facebook',
'트위터에도 등록됨' => 'Publié aussi sur Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Publier aussi sur Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Connexion sociale - {1}',
'잠시후에 다시 시도해 주세요.' => 'Veuillez réessayer dans un instant.',
'홈으로' => 'Accueil',
'이 페이지 닫기' => 'Fermer cette page',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Vous ne pouvez pas vous réinscrire car cet identifiant {1} est déjà associé ou inscrit. Si vous êtes membre, connectez-vous et associez le compte dans Modifier le profil.',
'지정되지 않은 오류입니다.' => 'Erreur non spécifiée.',
'설정 오류입니다.' => 'Erreur de configuration.',
'해당 provider 설정 오류입니다.' => 'Erreur de configuration de ce fournisseur.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Fournisseur inconnu ou désactivé.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Vous n\'avez pas l\'autorisation d\'accéder à ce service.',
'인증이 실패되었습니다.. ' => 'L\'authentification a échoué.. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'L\'utilisateur a annulé l\'authentification ou le fournisseur a refusé la connexion.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'La demande de profil utilisateur a échoué. L\'utilisateur n\'est peut-être pas connecté à ce service. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'Dans ce cas, il faut refaire la demande d\'authentification.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'L\'utilisateur n\'est pas connecté à ce service.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Ce service ne prend pas en charge cette fonctionnalité.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Vous êtes déjà connecté ou la requête n\'est pas valide.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Un identifiant est déjà associé ou la requête n\'est pas valide.',
'소셜 데이터 오류' => 'Erreur de données sociales',
'SNS 사용자 인증에 실패하였습니다.' => 'L\'authentification de l\'utilisateur SNS a échoué.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Ce compte est déjà associé à un identifiant {1}. Veuillez le dissocier et réessayer.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Connexion à {1} en cours. Veuillez patienter.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'La connexion sociale n\'est pas utilisée.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'La connexion sociale est désactivée.',
'새창 옵션이 비활성화 되어 있습니다.' => 'L\'option nouvelle fenêtre est désactivée.',
'서비스 이름이 넘어오지 않았습니다.' => 'Le nom du service n\'a pas été transmis.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'La connexion sociale n\'est pas utilisée.',
'이미 회원가입 하였습니다.' => 'Vous êtes déjà inscrit.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Réservé aux utilisateurs connectés via la connexion sociale.',
'소셜 회원 가입 - {1}' => 'Inscription sociale - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Réservé aux utilisateurs connectés via la connexion sociale.',
'이미 등록된 회원이 존재합니다.' => 'Ce membre est déjà inscrit.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Les informations d\'identité vérifiées ne correspondent pas à vos données personnelles. Veuillez réessayer.',
'회원 가입 오류!' => 'Erreur lors de l\'inscription !',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Vous n\'êtes pas membre ou la valeur n\'a pas été transmise.',
'권한이 없거나 잘못된 요청입니다.' => 'Vous n\'avez pas l\'autorisation ou la requête n\'est pas valide.',

// js/autosave.js
'삭제' => 'Supprimer',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'Une erreur s\'est produite lors de la suppression du brouillon enregistré.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Vous avez déjà vérifié votre identité par {1}.

Annuler la vérification précédente et recommencer ?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Les données supprimées ne peuvent pas être récupérées.

Voulez-vous vraiment supprimer ?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'Le fichier postcode.v2.js du service de code postal KAKAO n\'est pas chargé.',
'토큰 정보가 올바르지 않습니다.' => 'Les informations du jeton ne sont pas valides.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Sélection obligatoire.
',
'{1} : 필수 입력입니다.
' => '{1} : Champ obligatoire.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : Le format du numéro de téléphone n\'est pas valide.

Veuillez inclure les tirets (-).
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Adresse e-mail non valide.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Coréen uniquement. (Syllabes coréennes complètes uniquement)
',
'{1} : 한글이 아닙니다.
' => '{1} : Coréen uniquement.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Coréen, lettres latines et chiffres uniquement.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Coréen et lettres latines uniquement.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Chiffres uniquement.
',
'{1} : 영문이 아닙니다.
' => '{1} : Lettres latines uniquement.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Lettres latines ou chiffres uniquement.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Lettres latines, chiffres et _ uniquement.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Saisissez au moins {2} caractères.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Ce n\'est pas un fichier image.
Seuls les fichiers .gif .jpg .png sont autorisés.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Seuls les fichiers .{2} sont autorisés.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Les espaces ne sont pas autorisés.
',
);
