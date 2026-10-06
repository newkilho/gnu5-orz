<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (fr). 틀은 php lang/build.php fr 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Aller au contenu',
'커뮤니티' => 'Communauté',
'쇼핑몰' => 'Boutique',
'새글' => 'Nouveaux messages',
'접속자' => 'Visiteurs',
'사이트 내 전체검색' => 'Recherche sur le site',
'검색어 필수' => 'Terme de recherche (obligatoire)',
'검색어를 입력해주세요' => 'Saisissez un terme de recherche',
'검색' => 'Rechercher',
'검색어는 두글자 이상 입력하십시오.' => 'Veuillez saisir au moins deux caractères.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Pour une recherche plus rapide, un seul espace est autorisé dans le terme de recherche.',
'정보수정' => 'Modifier le profil',
'로그아웃' => 'Déconnexion',
'관리자' => 'Admin',
'회원가입' => 'S\'inscrire',
'로그인' => 'Connexion',
'메인메뉴' => 'Menu principal',
'전체메뉴' => 'Tous les menus',
'전체메뉴열기' => 'Ouvrir tous les menus',
'하위분류' => 'Sous-menu',
'메뉴 준비 중입니다.' => 'Le menu est en cours de préparation.',
'{1}에서 설정하실 수 있습니다.' => 'Vous pouvez le configurer dans {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Admin &gt; Configuration &gt; Menus',

// theme/basic/index.php
'최신글' => 'Derniers messages',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'Le groupe {1} n\'est accessible que sur PC.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Ouvrir le menu',
'메뉴 닫기' => 'Fermer le menu',
'{1}에서 설정하세요.' => 'Configurez-le dans {1}.',
'1:1문의' => 'Demande 1:1',
'사용자메뉴' => 'Menu utilisateur',
'기본' => 'Normal',
'크게' => 'Grand',
'더크게' => 'Plus grand',
'열기' => 'Ouvrir',
'닫기' => 'Fermer',
'뒤로가기' => 'Retour',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Options de la liste',
'선택삭제' => 'Supprimer la sélection',
'선택복사' => 'Copier la sélection',
'선택이동' => 'Déplacer la sélection',
'글쓰기' => 'Écrire',
'카테고리' => 'Catégorie',
'현재 페이지 게시물' => 'Messages de cette page',
'전체선택' => 'Tout sélectionner',
'공지' => 'Annonce',
'댓글' => 'Commentaires',
'개' => ' ',
'작성자' => 'Auteur',
'회' => ' vues',
'추천' => 'J\'aime',
'비추천' => 'Je n\'aime pas',
'게시물이 없습니다.' => 'Aucun message.',
'자바스크립트를 사용하지 않는 경우' => 'Si JavaScript est désactivé,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'les éléments sélectionnés sont supprimés immédiatement sans confirmation ; soyez prudent.',
'전체 {1}건' => 'Total {1}',
'페이지' => 'Page',
'게시물 검색' => 'Rechercher des messages',
'검색대상' => 'Rechercher dans',
'검색어를 입력하세요' => 'Saisissez un terme de recherche',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Veuillez sélectionner au moins un message.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Voulez-vous vraiment supprimer les messages sélectionnés ?

Les données supprimées ne peuvent pas être récupérées.

Si un message sélectionné a des réponses,
vous devez aussi sélectionner les réponses pour le supprimer.',
'복사' => 'Copier',
'이동' => 'Déplacer',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Partager',
'스크랩' => 'Enregistrer',
'답변' => 'Répondre',
'수정' => 'Modifier',
'삭제' => 'Supprimer',
'목록' => 'Liste',
'페이지 정보' => 'Informations',
'작성일' => 'Date',
'조회' => 'Vues',
'본문' => 'Contenu',
'이 글을 추천하셨습니다' => 'Vous avez aimé ce message',
'첨부파일' => 'Pièces jointes',
'{1}회 다운로드' => '{1} téléchargements',
'관련링크' => 'Liens associés',
'{1}회 연결' => '{1} clics',
'이전글' => 'Message précédent',
'다음글' => 'Message suivant',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Vous n\'avez pas l\'autorisation de télécharger.
Si vous êtes membre, veuillez vous connecter et réessayer.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Le téléchargement de ce fichier déduira {1} points.

Les points ne sont déduits qu\'une fois par message et ne le seront plus si vous téléchargez à nouveau plus tard.

Voulez-vous le télécharger ?',
'이 글을 비추천하셨습니다.' => 'Vous n\'avez pas aimé ce message.',
'이 글을 추천하셨습니다.' => 'Vous avez aimé ce message.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Liste des commentaires',
'{1}님의 댓글' => 'Commentaire de {1}',
'의 댓글' => ' (réponse)',
'아이피' => 'IP',
'댓글 옵션' => 'Options du commentaire',
'비밀글' => 'Secret',
'등록된 댓글이 없습니다.' => 'Aucun commentaire pour le moment.',
'댓글쓰기' => 'Écrire un commentaire',
'글자' => ' caractères',
'댓글 내용' => 'Commentaire',
'댓글내용을 입력해주세요' => 'Saisissez votre commentaire',
'이름' => 'Nom',
'필수' => 'Obligatoire',
'비밀번호' => 'Mot de passe',
'SNS 동시등록' => 'Publier aussi sur les réseaux sociaux',
'댓글등록' => 'Publier le commentaire',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'Le contenu contient un mot interdit (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Les commentaires doivent comporter au moins {1} caractères.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Les commentaires doivent comporter au maximum {1} caractères.',
'댓글을 입력하여 주십시오.' => 'Veuillez saisir un commentaire.',
'이름이 입력되지 않았습니다.' => 'Veuillez saisir votre nom.',
'비밀번호가 입력되지 않았습니다.' => 'Veuillez saisir un mot de passe.',
'이 댓글을 삭제하시겠습니까?' => 'Supprimer ce commentaire ?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Recevoir les réponses par e-mail',
'분류' => 'Catégorie',
'선택하세요' => 'Sélectionner',
'이메일' => 'E-mail',
'홈페이지' => 'Site web',
'옵션' => 'Options',
'제목' => 'Sujet',
'내용' => 'Contenu',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Les messages de ce forum doivent comporter entre {1} et {2} caractères.',
'링크 #{1}' => 'Lien n°{1}',
'링크를 입력하세요' => 'Saisissez un lien',
'파일을 첨부하세요' => 'Joignez un fichier',
'파일 #{1}' => 'Fichier n°{1}',
'파일첨부' => 'Joindre un fichier',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Pièce jointe {1} : {2} max.',
'파일 설명을 입력해주세요.' => 'Saisissez une description du fichier.',
'파일 삭제' => 'Supprimer le fichier',
'자동등록방지' => 'Anti-spam',
'취소' => 'Annuler',
'작성완료' => 'Envoyer',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Utiliser les retours à la ligne automatiques ?

Cette fonction convertit les retours à la ligne du message en balises <br>.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Le sujet contient un mot interdit (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Le contenu doit comporter au moins {1} caractères.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Le contenu doit comporter au maximum {1} caractères.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Liste des images',
'열람중' => 'En cours de lecture',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Personne n\'est en ligne.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Terme de recherche',
'자주하시는질문 분류' => 'Catégories de la FAQ',
'열린 분류' => 'Catégorie ouverte',
'검색된 게시물이 없습니다.' => 'Aucun résultat.',
'등록된 FAQ가 없습니다.' => 'Aucune FAQ pour le moment.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Pour ajouter des FAQ, utilisez la gestion des FAQ',
'메뉴를 이용하십시오.' => 'dans l\'administration.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Page précédente',
'다음페이지' => 'Page suivante',
'전체보기' => 'Tout voir',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Derniers commentaires',
'더보기' => 'Plus',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Information',
'동의합니다' => 'J\'accepte',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Envoyer un e-mail à {1}',
'메일쓰기' => 'Rédiger un e-mail',
'형식' => 'Format',
'첨부 파일 1' => 'Pièce jointe 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Les pièces jointes peuvent se perdre ; vérifiez bien après l\'envoi que le fichier a été joint.',
'첨부 파일 2' => 'Pièce jointe 2',
'메일발송' => 'Envoyer l\'e-mail',
'창닫기' => 'Fermer la fenêtre',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Les pièces jointes volumineuses prennent plus de temps à envoyer.

Ne fermez pas et n\'actualisez pas la fenêtre avant la fin de l\'envoi.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Identifiant',
'자동로그인' => 'Rester connecté',
'회원로그인 안내' => 'Connexion membre',
'아이디/비밀번호 찾기' => 'Identifiant / mot de passe oublié',
'회원 가입' => 'S\'inscrire',
'비회원 구매' => 'Achat sans compte',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Les commandes sans compte ne donnent pas droit à des points.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'J\'ai lu et j\'accepte la collecte des données personnelles.',
'비회원으로 구매하기' => 'Acheter sans compte',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Vous devez lire et accepter la collecte des données personnelles.',
'비회원 주문조회' => 'Suivi de commande sans compte',
'주문번호' => 'Numéro de commande',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Veuillez saisir le {1} figurant dans l\'e-mail de commande et le {2} saisi lors de la commande.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Avec la connexion automatique, vous n\'aurez plus à saisir votre identifiant et votre mot de passe.

Évitez de l\'utiliser sur un ordinateur public, vos données personnelles pourraient être exposées.

Utiliser la connexion automatique ?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Obligatoire) Politique de confidentialité complémentaire',
'추가 개인정보처리방침 안내' => 'Politique de confidentialité complémentaire',
'목적' => 'Finalité',
'항목' => 'Données',
'보유기간' => 'Durée de conservation',
'이용자 식별 및 본인여부 확인' => 'Identification de l\'utilisateur et vérification d\'identité',
'생년월일' => 'Date de naissance',
', 휴대폰 번호(아이핀 제외)' => ', numéro de mobile (sauf i-PIN)',
', 암호화된 개인식별부호(CI)' => ', identifiant personnel chiffré (CI)',
'회원 탈퇴 시까지' => 'Jusqu\'à la résiliation du compte',
'추가 개인정보처리방침에 동의합니다.' => 'J\'accepte la politique de confidentialité complémentaire.',
'인증수단 선택하기' => 'Choisir une méthode de vérification',
'간편인증' => 'Vérification simplifiée',
'휴대폰 본인확인' => 'Vérification par mobile',
'아이핀 본인확인' => 'Vérification par i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript doit être activé pour la vérification d\'identité.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Veuillez configurer la vérification par mobile dans les paramètres de base.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Vous devez accepter la politique de confidentialité complémentaire pour poursuivre la vérification.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Veuillez saisir à nouveau votre mot de passe.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Saisissez votre mot de passe pour finaliser la résiliation du compte.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'Pour protéger vos informations, nous vérifions à nouveau votre mot de passe.',
'회원아이디' => 'Identifiant',
'비밀번호(필수)' => 'Mot de passe (obligatoire)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => '{2} messages au total ({1})',
'받은쪽지' => 'Reçus',
'보낸쪽지' => 'Envoyés',
'쪽지쓰기' => 'Nouveau message',
'안 읽은 쪽지' => 'Message non lu',
'자료가 없습니다.' => 'Aucune donnée.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Les messages sont conservés {1} jours maximum.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Envoyer un message',
'받는 회원아이디' => 'Identifiant du destinataire',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Séparez les destinataires par des virgules (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'L\'envoi d\'un message coûte {1} points par destinataire.',
'보내기' => 'Envoyer',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Envoyé',
'받은' => 'Reçu',
'받는' => 'À',
'쪽지 내용' => 'Message',
'{1}시간' => '{1} le',
'이전쪽지' => 'Message précédent',
'다음쪽지' => 'Message suivant',
'답장' => 'Répondre',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Modifier le message',
'글 삭제' => 'Supprimer le message',
'댓글 삭제' => 'Supprimer le commentaire',
'작성자만 글을 수정할 수 있습니다.' => 'Seul l\'auteur peut modifier ce message.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Si vous êtes l\'auteur, saisissez le mot de passe utilisé lors de la rédaction pour le modifier.',
'작성자만 글을 삭제할 수 있습니다.' => 'Seul l\'auteur peut supprimer ce message.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Si vous êtes l\'auteur, saisissez le mot de passe utilisé lors de la rédaction pour le supprimer.',
'비밀글 기능으로 보호된 글입니다.' => 'Ce message est secret.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Seuls l\'auteur et les administrateurs peuvent le consulter. Si vous êtes l\'auteur, saisissez le mot de passe.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Retrouver par e-mail',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Saisissez l\'adresse e-mail utilisée lors de l\'inscription.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Nous enverrons vos identifiant et mot de passe à cette adresse.',
'E-mail 주소' => 'Adresse e-mail',
'인증메일 보내기' => 'Envoyer l\'e-mail de vérification',
'본인인증으로 찾기' => 'Retrouver par vérification d\'identité',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Saisissez un nouveau mot de passe.',
'회원 아이디 :' => 'Identifiant :',
'새 비밀번호' => 'Nouveau mot de passe',
'새 비밀번호 확인' => 'Confirmer le nouveau mot de passe',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Votre mot de passe a été modifié. Veuillez vous reconnecter.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Le nouveau mot de passe et sa confirmation ne correspondent pas.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Solde de points',
'y-m-d H시' => 'd/m/y H\\h',
'만료' => 'Expiré',
'소계' => 'Sous-total',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Profil de {1}',
'회원권한' => 'Niveau de membre',
'포인트' => 'Points',
'회원가입일' => 'Inscription',
' ({1} 일)' => ' ({1} jours)',
'알 수 없음' => 'Inconnu',
'최종접속일' => 'Dernière visite',
'인사말' => 'Message d\'accueil',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Vous devez accepter les conditions d\'utilisation et la collecte et l\'utilisation des données personnelles pour vous inscrire.',
'회원가입 약관에 모두 동의합니다' => 'J\'accepte toutes les conditions',
'(필수) 회원가입약관' => '(Obligatoire) Conditions d\'utilisation',
'회원가입약관의 내용에 동의합니다.' => 'J\'accepte les conditions d\'utilisation.',
'(필수) 개인정보 수집 및 이용' => '(Obligatoire) Collecte et utilisation des données personnelles',
'개인정보 수집 및 이용' => 'Collecte et utilisation des données personnelles',
'아이디, 이름, 비밀번호' => 'Identifiant, nom, mot de passe',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', date de naissance, numéro de mobile (uniquement pour la vérification d\'identité, sauf i-PIN), identifiant personnel chiffré (CI)',
'고객서비스 이용에 관한 통지,' => 'Notifications relatives au service client,',
'CS대응을 위한 이용자 식별' => 'identification de l\'utilisateur pour le support client',
'연락처 (이메일, 휴대전화번호)' => 'Coordonnées (e-mail, numéro de mobile)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'J\'accepte la collecte et l\'utilisation des données personnelles.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Vous devez accepter les conditions d\'utilisation pour vous inscrire.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Vous devez accepter la collecte et l\'utilisation des données personnelles pour vous inscrire.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Informations du compte',
'아이디 (필수)' => 'Identifiant (obligatoire)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Lettres, chiffres et _ uniquement. Au moins 3 caractères.',
'비밀번호 (필수)' => 'Mot de passe (obligatoire)',
'비밀번호확인 (필수)' => 'Confirmer le mot de passe (obligatoire)',
'개인정보 입력' => 'Informations personnelles',
' - 본인확인 시 자동입력' => ' - rempli automatiquement lors de la vérification',
'(필수)' => '(obligatoire)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobile',
'{1} 본인확인' => 'Vérification par {1}',
'{1} 및 {2} 완료' => '{1} et {2} : terminé',
'성인인증' => 'vérification de l\'âge',
'{1} 완료' => '{1} : terminé',
'이름 (필수)' => 'Nom (obligatoire)',
'닉네임 (필수)' => 'Pseudo (obligatoire)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Coréen, lettres latines et chiffres uniquement, sans espace (au moins 2 caractères coréens ou 4 lettres latines)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Si vous changez de pseudo, vous ne pourrez plus le modifier pendant {1} jours.',
'E-mail (필수)' => 'E-mail (obligatoire)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'L\'inscription sera finalisée après la validation de l\'e-mail que nous vous enverrons.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Si vous changez d\'adresse e-mail, vous devrez la valider à nouveau.',
'전화번호' => 'Téléphone',
'휴대폰번호' => 'Numéro de mobile',
'주소' => 'Adresse',
'우편번호' => 'Code postal',
' (필수)' => ' (obligatoire)',
'주소검색' => 'Rechercher une adresse',
'상세주소' => 'Complément d\'adresse',
'참고항목' => 'Référence',
'기타 개인설정' => 'Autres paramètres',
'서명' => 'Signature',
'자기소개' => 'À propos de moi',
'회원아이콘' => 'Icône de membre',
'이미지선택' => 'Choisir une image',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'L\'image doit mesurer au maximum {1} px de large et {2} px de haut.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Fichiers gif, jpg et png uniquement, {1} octets maximum.',
'회원이미지' => 'Image de membre',
'정보공개' => 'Profil public',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Permettre aux autres de voir mes informations.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Si vous modifiez ce paramètre, vous ne pourrez plus le changer pendant {1} jours.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Ce paramètre ne peut pas être modifié pendant {1} jours après un changement (jusqu\'au {2}).',
'Y년 m월 j일' => 'd/m/Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Cela empêche les membres d\'envoyer des messages puis de masquer leur profil pour éviter les réponses.',
'추천인아이디' => 'Identifiant du parrain',
'수신설정' => 'Paramètres de notification',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Facultatif) Collecte et utilisation des données personnelles à des fins marketing',
'자세히보기' => 'Détails',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Il s\'agit de la collecte et de l\'utilisation des données personnelles à des fins marketing. Cliquez sur Détails pour lire le texte complet.',
'(동의일자: {1})' => '(Accepté le : {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Finalité : marketing et promotions du service',
'* 항목: 이름, 이메일' => '* Données : nom, e-mail',
', 휴대폰 번호' => ', numéro de mobile',
'* 보유기간: 회원 탈퇴 시까지' => '* Conservation : jusqu\'à la résiliation du compte',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Vous pouvez utiliser le service de base même si vous refusez, mais les avantages personnalisés peuvent être limités.',
'(선택) 광고성 정보 수신 동의' => '(Facultatif) Consentement à recevoir de la publicité',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Ce consentement couvre la réception de publicité (e-mail/SMS/KakaoTalk). Cliquez sur Détails pour lire le texte complet.',
'광고성 이메일 수신 동의' => 'Recevoir des e-mails publicitaires',
'광고성 SMS/카카오톡 수신 동의' => 'Recevoir des SMS/KakaoTalk publicitaires',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Nous pouvons vous envoyer de la publicité par e-mail/SMS/KakaoTalk entre 8 h et 21 h en utilisant les données personnelles que vous avez accepté de fournir.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Vous pouvez retirer votre consentement à tout moment dans Mon espace.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Facultatif) Consentement à la communication des données personnelles à des tiers',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Il s\'agit de la communication des données personnelles à des tiers. Cliquez sur Détails pour lire le texte complet.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Finalité : informations marketing sur les produits/services, promotions et événements (KakaoTalk, etc.)',
'* 항목: 이름, 휴대폰 번호' => '* Données : nom, numéro de mobile',
'* 제공받는 자:' => '* Destinataire :',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Conservation : pendant la durée du service ou jusqu\'au retrait du consentement',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Vous avez déjà vérifié votre identité par {1}.

Annuler la vérification précédente et recommencer ?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Le mot de passe doit comporter au moins 3 caractères.',
'비밀번호가 같지 않습니다.' => 'Les mots de passe ne correspondent pas.',
'이름을 입력하십시오.' => 'Veuillez saisir votre nom.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Une vérification d\'identité est requise pour s\'inscrire.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'L\'icône de membre n\'est pas un fichier image.',
'회원이미지가 이미지 파일이 아닙니다.' => 'L\'image de membre n\'est pas un fichier image.',
'본인을 추천할 수 없습니다.' => 'Vous ne pouvez pas vous parrainer vous-même.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Inscription terminée',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Félicitations pour votre inscription, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Un e-mail de vérification a été envoyé à l\'adresse que vous avez saisie.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Veuillez consulter cet e-mail et terminer la vérification pour utiliser le site.',
'이메일 주소' => 'Adresse e-mail',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Si vous avez saisi une adresse e-mail erronée, veuillez contacter l\'administrateur du site.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Votre mot de passe est stocké chiffré : personne ne peut le lire.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'En cas d\'oubli de votre identifiant ou mot de passe, vous pouvez les retrouver grâce à l\'adresse e-mail enregistrée.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Vous pouvez résilier votre compte à tout moment ; vos informations sont supprimées après un certain délai.',
'감사합니다.' => 'Merci.',
'메인으로' => 'Retour à l\'accueil',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Enregistrer',
'제목 확인 및 댓글 쓰기' => 'Vérifier le sujet et écrire un commentaire',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Vous pouvez laisser un commentaire de remerciement ou d\'encouragement en enregistrant ce message.',
'스크랩 확인' => 'Confirmer l\'enregistrement',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Recherche avancée',
'전체게시물' => 'Tous les messages',
'원글만' => 'Messages uniquement',
'코멘트만' => 'Commentaires uniquement',
'회원 아이디만 검색 가능' => 'Recherche par identifiant uniquement',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Connexion membre',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Mon compte',
'{1}님' => '{1}',
'안 읽은' => 'Non lus :',
'쪽지' => 'Messages',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Voulez-vous vraiment résilier votre compte ?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Fermer les catégories',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Coupons',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Sondage',
'결과보기' => 'Voir les résultats',
'관리자 관리' => 'Admin',
'투표하기' => 'Voter',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Seuls les membres de niveau {1} ou plus peuvent voter.',
'투표하실 설문항목을 선택하세요' => 'Choisissez une option',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Seuls les membres de niveau {1} ou plus peuvent voir les résultats.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => '{1} votes au total',
'결과' => 'Résultats',
'{1} 표' => '{1} votes',
'이 설문에 대한 기타의견' => 'Autres avis sur ce sondage',
'님의 의견' => ' (avis)',
'기타의견' => 'Autres avis',
'의견' => 'Avis',
'의견을 입력해주세요' => 'Saisissez votre avis',
'의견남기기' => 'Donner son avis',
'다른 투표 결과 보기' => 'Autres sondages',
'해당 기타의견을 삭제하시겠습니까?' => 'Supprimer cet avis ?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Recherches populaires',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Nouvelle demande',
'답변완료' => 'Répondu',
'답변대기' => 'En attente',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Voulez-vous vraiment supprimer les messages sélectionnés ?

Les données supprimées ne peuvent pas être récupérées.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Modifier la réponse',
'답변삭제' => 'Supprimer la réponse',
'추가질문' => 'Question complémentaire',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Publier la réponse',
'파일 #1' => 'Fichier n°1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Pièce jointe 1 : {1} max.',
'파일 #2' => 'Fichier n°2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Pièce jointe 2 : {1} max.',
'답변쓰기' => 'Rédiger la réponse',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Nous préparons une réponse à votre demande.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Coordonnées',
'첨부' => 'Pièce jointe',
'연관질문' => 'Questions associées',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Recevoir la réponse',
'답변등록 SMS알림 수신' => 'Recevoir un SMS lors de la réponse',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Saisissez le numéro de mobile uniquement avec des chiffres et des tirets (-).',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Résultats de recherche',
'게시판' => 'Forums',
'{1}개' => '{1}',
'게시물' => 'Messages',
'페이지 열람 중' => 'pages',
'검색조건' => 'Options de recherche',
'제목+내용' => 'Sujet+Contenu',
'전체게시판' => 'Tous les forums',
'검색된 자료가 하나도 없습니다.' => 'Aucun résultat.',
'게시판 내 결과' => 'Résultats dans le forum',
'{1} 결과 더보기' => 'Plus de résultats dans {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Statistiques de visites',
'오늘' => 'Aujourd\'hui',
'어제' => 'Hier',
'최대' => 'Max',
'전체' => 'Total',
'상세보기' => 'Détails',

// theme/basic/mobile/tail.php
'회사소개' => 'À propos',
'개인정보처리방침' => 'Politique de confidentialité',
'서비스이용약관' => 'Conditions d\'utilisation',
'소유하신 도메인.' => 'Votre domaine.',
'사이트 정보' => 'Informations du site',
'회사명 : 회사명 / 대표 : 대표자명' => 'Société : Nom de la société / Directeur : Nom du directeur',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adresse : 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'N° d\'immatriculation : 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tél. : 02-123-4567  Fax : 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'N° de déclaration de vente à distance : OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Responsable des données personnelles : Nom du responsable',
'상단으로' => 'Haut de page',
'PC 버전으로 보기' => 'Version PC',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Total {1}',
'게시판 검색' => 'Rechercher dans le forum',
'현재 페이지 게시물  전체선택' => 'Sélectionner tous les messages de cette page',
'번호' => 'N°',
'글쓴이' => 'Auteur',
'날짜' => 'Date',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} téléchargements | DATE : {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1} :',
'댓글의' => '(réponse)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Choisissez une catégorie',
'임시 저장된 글 ({1})' => 'Brouillons ({1})',
'임시 저장된 글 목록' => 'Liste des brouillons',
'링크  #{1}' => 'Lien n°{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Rechercher dans la FAQ',
'FAQ 수정' => 'Modifier la FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Messages populaires',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Aucune image.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Membre',
'ID/PW 찾기' => 'Identifiant/mot de passe oublié',
'주문서번호' => 'Numéro de commande',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Seuls l\'auteur et les administrateurs peuvent le consulter.',
'본인이라면 비밀번호를 입력하세요.' => 'Si vous êtes l\'auteur, saisissez le mot de passe.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Aide',
'비밀번호 확인 (필수)' => 'Confirmer le mot de passe (obligatoire)',
'비밀번호 확인' => 'Confirmer le mot de passe',
'본인확인 시 자동입력' => 'Rempli automatiquement lors de la vérification',
'닉네임' => 'Pseudo',
'주소 검색' => 'Rechercher une adresse',
'기본주소' => 'Adresse',
' (동의일자: {1})' => ' (Accepté le : {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Écrire un commentaire',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Tout',
'그룹' => 'Groupe',
'일시' => 'Date',
'{1}번' => 'N° {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Voulez-vous vraiment continuer avec les messages sélectionnés ?

Les données supprimées ne peuvent pas être récupérées.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Compte',
'마이페이지' => 'Mon espace',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Gérer le sondage',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'En tête actuellement',
'500 표' => '500 votes',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Date',
'상태' => 'Statut',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Options de la réponse',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Options du message',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Rédiger une demande 1:1',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Résultats de recherche pour {1}',
'게시판 {1}개' => '{1} forums',
'게시물 {1}개' => '{1} messages',
'새창' => 'Nouvelle fenêtre',

// theme/basic/tail.php
'모바일버전' => 'Version mobile',
);
