<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (pt-br). 틀은 php lang/build.php pt-br 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Ir para o conteúdo',
'커뮤니티' => 'Comunidade',
'쇼핑몰' => 'Loja',
'새글' => 'Novas postagens',
'접속자' => 'Visitantes',
'사이트 내 전체검색' => 'Buscar no site',
'검색어 필수' => 'Termo de busca (obrigatório)',
'검색어를 입력해주세요' => 'Digite um termo de busca',
'검색' => 'Buscar',
'검색어는 두글자 이상 입력하십시오.' => 'Digite pelo menos dois caracteres.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Para uma busca mais rápida, só é permitido um espaço no termo de busca.',
'정보수정' => 'Editar perfil',
'로그아웃' => 'Sair',
'관리자' => 'Administração',
'회원가입' => 'Cadastre-se',
'로그인' => 'Entrar',
'메인메뉴' => 'Menu principal',
'전체메뉴' => 'Todos os menus',
'전체메뉴열기' => 'Abrir todos os menus',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'O menu está em preparação.',
'{1}에서 설정하실 수 있습니다.' => 'Você pode configurá-lo em {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Administração &gt; Configurações &gt; Configurações do menu',

// theme/basic/index.php
'최신글' => 'Postagens recentes',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'O grupo {1} só pode ser acessado pelo computador.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Abrir menu',
'메뉴 닫기' => 'Fechar menu',
'{1}에서 설정하세요.' => 'Configure em {1}.',
'1:1문의' => 'Atendimento 1:1',
'사용자메뉴' => 'Menu do usuário',
'기본' => 'Padrão',
'크게' => 'Grande',
'더크게' => 'Maior',
'열기' => 'Abrir',
'닫기' => 'Fechar',
'뒤로가기' => 'Voltar',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Opções da lista',
'선택삭제' => 'Excluir selecionados',
'선택복사' => 'Copiar selecionados',
'선택이동' => 'Mover selecionados',
'글쓰기' => 'Escrever',
'카테고리' => 'Categoria',
'현재 페이지 게시물' => 'Postagens desta página',
'전체선택' => 'Selecionar tudo',
'공지' => 'Aviso',
'댓글' => 'Comentários',
'개' => ' ',
'작성자' => 'Autor',
'회' => ' visualizações',
'추천' => 'Curtir',
'비추천' => 'Não curtir',
'게시물이 없습니다.' => 'Nenhuma postagem.',
'자바스크립트를 사용하지 않는 경우' => 'Se o JavaScript estiver desativado,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'os itens selecionados são excluídos imediatamente, sem confirmação. Tenha cuidado.',
'전체 {1}건' => 'Total: {1}',
'페이지' => 'Página',
'게시물 검색' => 'Buscar postagens',
'검색대상' => 'Buscar em',
'검색어를 입력하세요' => 'Digite um termo de busca',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Selecione pelo menos uma postagem.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Tem certeza de que deseja excluir as postagens selecionadas?

Os dados excluídos não podem ser recuperados.

Se uma postagem selecionada tiver respostas,
selecione também as respostas para excluí-la.',
'복사' => 'Copiar',
'이동' => 'Mover',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Compartilhar',
'스크랩' => 'Salvar',
'답변' => 'Responder',
'수정' => 'Editar',
'삭제' => 'Excluir',
'목록' => 'Lista',
'페이지 정보' => 'Informações da página',
'작성일' => 'Data',
'조회' => 'Visualizações',
'본문' => 'Conteúdo',
'이 글을 추천하셨습니다' => 'Você curtiu esta postagem',
'첨부파일' => 'Anexos',
'{1}회 다운로드' => '{1} downloads',
'관련링크' => 'Links relacionados',
'{1}회 연결' => '{1} cliques',
'이전글' => 'Postagem anterior',
'다음글' => 'Próxima postagem',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para baixar.
Se você é membro, faça login e tente novamente.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Baixar este arquivo descontará {1} pontos.

Os pontos são descontados apenas uma vez por postagem e não serão descontados novamente se você baixá-lo depois.

Deseja baixá-lo?',
'이 글을 비추천하셨습니다.' => 'Você não curtiu esta postagem.',
'이 글을 추천하셨습니다.' => 'Você curtiu esta postagem.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Lista de comentários',
'{1}님의 댓글' => 'Comentário de {1}',
'의 댓글' => ' (resposta)',
'아이피' => 'IP',
'댓글 옵션' => 'Opções do comentário',
'비밀글' => 'Privado',
'등록된 댓글이 없습니다.' => 'Nenhum comentário ainda.',
'댓글쓰기' => 'Escrever comentário',
'글자' => ' caracteres',
'댓글 내용' => 'Comentário',
'댓글내용을 입력해주세요' => 'Digite seu comentário',
'이름' => 'Nome',
'필수' => 'Obrigatório',
'비밀번호' => 'Senha',
'SNS 동시등록' => 'Publicar também nas redes sociais',
'댓글등록' => 'Publicar comentário',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'O conteúdo contém uma palavra proibida (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'O comentário deve ter pelo menos {1} caracteres.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'O comentário deve ter no máximo {1} caracteres.',
'댓글을 입력하여 주십시오.' => 'Digite um comentário.',
'이름이 입력되지 않았습니다.' => 'Digite seu nome.',
'비밀번호가 입력되지 않았습니다.' => 'Digite uma senha.',
'이 댓글을 삭제하시겠습니까?' => 'Excluir este comentário?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Receber respostas por e-mail',
'분류' => 'Categoria',
'선택하세요' => 'Selecione',
'이메일' => 'E-mail',
'홈페이지' => 'Site',
'옵션' => 'Opções',
'제목' => 'Título',
'내용' => 'Conteúdo',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'As postagens deste fórum devem ter entre {1} e {2} caracteres.',
'링크 #{1}' => 'Link #{1}',
'링크를 입력하세요' => 'Digite um link',
'파일을 첨부하세요' => 'Anexe um arquivo',
'파일 #{1}' => 'Arquivo #{1}',
'파일첨부' => 'Anexar arquivo',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Anexo {1}: até {2}',
'파일 설명을 입력해주세요.' => 'Digite uma descrição para o arquivo.',
'파일 삭제' => 'Excluir arquivo',
'자동등록방지' => 'Antispam',
'취소' => 'Cancelar',
'작성완료' => 'Publicar',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Usar quebra de linha automática?

A quebra de linha automática converte as quebras de linha da postagem em tags <br>.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'O título contém uma palavra proibida (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'O conteúdo deve ter pelo menos {1} caracteres.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'O conteúdo deve ter no máximo {1} caracteres.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Lista de imagens',
'열람중' => 'Visualizando',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Ninguém online no momento.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Termo de busca',
'자주하시는질문 분류' => 'Categorias de FAQ',
'열린 분류' => 'Categoria aberta',
'검색된 게시물이 없습니다.' => 'Nenhum resultado encontrado.',
'등록된 FAQ가 없습니다.' => 'Ainda não há FAQs.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Para adicionar FAQs, use o menu Gerenciar FAQ',
'메뉴를 이용하십시오.' => 'do painel de administração.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Página anterior',
'다음페이지' => 'Próxima página',
'전체보기' => 'Ver tudo',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Comentários recentes',
'더보기' => 'Mais',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Aviso',
'동의합니다' => 'Concordo',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Enviar e-mail para {1}',
'메일쓰기' => 'Escrever e-mail',
'형식' => 'Formato',
'첨부 파일 1' => 'Anexo 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Os anexos podem não ser enviados; depois do envio, verifique se o arquivo foi anexado.',
'첨부 파일 2' => 'Anexo 2',
'메일발송' => 'Enviar e-mail',
'창닫기' => 'Fechar janela',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Anexos grandes demoram mais para serem enviados.

Não feche nem atualize a janela até que o e-mail seja enviado.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Nome de usuário',
'자동로그인' => 'Manter conectado',
'회원로그인 안내' => 'Login de membro',
'아이디/비밀번호 찾기' => 'Recuperar usuário/senha',
'회원 가입' => 'Cadastre-se',
'비회원 구매' => 'Compra sem cadastro',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Pedidos sem cadastro não acumulam pontos.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Li e concordo com a coleta de dados pessoais.',
'비회원으로 구매하기' => 'Comprar sem cadastro',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Você precisa ler e aceitar a coleta de dados pessoais.',
'비회원 주문조회' => 'Consultar pedido sem cadastro',
'주문번호' => 'Número do pedido',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Digite corretamente o {1} indicado no e-mail do pedido e a {2} informada ao fazer o pedido.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Com o login automático, você não precisará digitar seu nome de usuário e senha da próxima vez.

Evite usá-lo em computadores públicos, pois seus dados pessoais podem ser expostos.

Usar login automático?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Obrigatório) Política de privacidade adicional',
'추가 개인정보처리방침 안내' => 'Política de privacidade adicional',
'목적' => 'Finalidade',
'항목' => 'Itens',
'보유기간' => 'Período de retenção',
'이용자 식별 및 본인여부 확인' => 'Identificação do usuário e verificação de identidade',
'생년월일' => 'Data de nascimento',
', 휴대폰 번호(아이핀 제외)' => ', número de celular (exceto i-PIN)',
', 암호화된 개인식별부호(CI)' => ', identificador pessoal criptografado (CI)',
'회원 탈퇴 시까지' => 'Até o cancelamento da conta',
'추가 개인정보처리방침에 동의합니다.' => 'Concordo com a política de privacidade adicional.',
'인증수단 선택하기' => 'Escolha um método de verificação',
'간편인증' => 'Verificação simplificada',
'휴대폰 본인확인' => 'Verificação por celular',
'아이핀 본인확인' => 'Verificação por i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'O JavaScript precisa estar ativado para a verificação de identidade.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Configure a verificação por celular nas configurações básicas.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Você precisa aceitar a política de privacidade adicional para continuar com a verificação.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Digite sua senha novamente.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Digite sua senha para concluir o cancelamento da conta.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'Para proteger suas informações, confirmaremos sua senha mais uma vez.',
'회원아이디' => 'Nome de usuário',
'비밀번호(필수)' => 'Senha (obrigatório)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Total: {2} mensagens ({1})',
'받은쪽지' => 'Caixa de entrada',
'보낸쪽지' => 'Enviadas',
'쪽지쓰기' => 'Escrever mensagem',
'안 읽은 쪽지' => 'Mensagem não lida',
'자료가 없습니다.' => 'Nenhum registro.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'As mensagens são mantidas por até {1} dias.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Enviar mensagem',
'받는 회원아이디' => 'Nome de usuário do destinatário',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Separe vários destinatários com vírgulas (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'O envio de mensagens desconta {1} pontos por destinatário.',
'보내기' => 'Enviar',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Enviada',
'받은' => 'Recebida',
'받는' => 'Para',
'쪽지 내용' => 'Mensagem',
'{1}시간' => '{1} em',
'이전쪽지' => 'Mensagem anterior',
'다음쪽지' => 'Próxima mensagem',
'답장' => 'Responder',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Editar postagem',
'글 삭제' => 'Excluir postagem',
'댓글 삭제' => 'Excluir comentário',
'작성자만 글을 수정할 수 있습니다.' => 'Somente o autor pode editar esta postagem.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Se você é o autor, digite a senha usada ao escrever a postagem para editá-la.',
'작성자만 글을 삭제할 수 있습니다.' => 'Somente o autor pode excluir esta postagem.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Se você é o autor, digite a senha usada ao escrever a postagem para excluí-la.',
'비밀글 기능으로 보호된 글입니다.' => 'Esta é uma postagem privada.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Somente o autor e os administradores podem visualizá-la. Se você é o autor, digite a senha.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Recuperar por e-mail',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Digite o endereço de e-mail usado no cadastro.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Enviaremos as informações de usuário e senha para esse e-mail.',
'E-mail 주소' => 'Endereço de e-mail',
'인증메일 보내기' => 'Enviar e-mail de verificação',
'본인인증으로 찾기' => 'Recuperar por verificação de identidade',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Digite uma nova senha.',
'회원 아이디 :' => 'Nome de usuário:',
'새 비밀번호' => 'Nova senha',
'새 비밀번호 확인' => 'Confirmar nova senha',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Sua senha foi alterada. Faça login novamente.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'A nova senha e a confirmação não coincidem.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Saldo de pontos',
'y-m-d H시' => 'd/m/y H\\h',
'만료' => 'Expirado',
'소계' => 'Subtotal',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Perfil de {1}',
'회원권한' => 'Nível de membro',
'포인트' => 'Pontos',
'회원가입일' => 'Membro desde',
' ({1} 일)' => ' ({1} dias)',
'알 수 없음' => 'Desconhecido',
'최종접속일' => 'Último acesso',
'인사말' => 'Saudação',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Para se cadastrar, você precisa aceitar os termos de uso e a coleta e o uso de dados pessoais.',
'회원가입 약관에 모두 동의합니다' => 'Concordo com todos os termos',
'(필수) 회원가입약관' => '(Obrigatório) Termos de uso',
'회원가입약관의 내용에 동의합니다.' => 'Concordo com os termos de uso.',
'(필수) 개인정보 수집 및 이용' => '(Obrigatório) Coleta e uso de dados pessoais',
'개인정보 수집 및 이용' => 'Coleta e uso de dados pessoais',
'아이디, 이름, 비밀번호' => 'Nome de usuário, nome, senha',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', data de nascimento, número de celular (somente na verificação de identidade, exceto i-PIN), identificador pessoal criptografado (CI)',
'고객서비스 이용에 관한 통지,' => 'Avisos sobre o atendimento ao cliente,',
'CS대응을 위한 이용자 식별' => 'identificação do usuário para suporte ao cliente',
'연락처 (이메일, 휴대전화번호)' => 'Contato (e-mail, número de celular)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Concordo com a coleta e o uso de dados pessoais.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Para se cadastrar, você precisa aceitar os termos de uso.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Para se cadastrar, você precisa aceitar a coleta e o uso de dados pessoais.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Dados da conta',
'아이디 (필수)' => 'Nome de usuário (obrigatório)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Somente letras, números e _. Mínimo de 3 caracteres.',
'비밀번호 (필수)' => 'Senha (obrigatório)',
'비밀번호확인 (필수)' => 'Confirmar senha (obrigatório)',
'개인정보 입력' => 'Dados pessoais',
' - 본인확인 시 자동입력' => ' - preenchido automaticamente na verificação',
'(필수)' => '(obrigatório)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Celular',
'{1} 본인확인' => 'Verificação por {1}',
'{1} 및 {2} 완료' => 'Concluído: {1} e {2}',
'성인인증' => 'verificação de maioridade',
'{1} 완료' => 'Concluído: {1}',
'이름 (필수)' => 'Nome (obrigatório)',
'닉네임 (필수)' => 'Apelido (obrigatório)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Somente letras coreanas, letras latinas e números, sem espaços (mínimo de 2 caracteres coreanos ou 4 latinos)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Se você alterar o apelido, não poderá alterá-lo novamente por {1} dias.',
'E-mail (필수)' => 'E-mail (obrigatório)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'O cadastro será concluído depois que você confirmar o e-mail que enviaremos.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Se você alterar o endereço de e-mail, precisará verificá-lo novamente.',
'전화번호' => 'Telefone',
'휴대폰번호' => 'Número de celular',
'주소' => 'Endereço',
'우편번호' => 'CEP',
' (필수)' => ' (obrigatório)',
'주소검색' => 'Buscar endereço',
'상세주소' => 'Complemento',
'참고항목' => 'Referência',
'기타 개인설정' => 'Outras configurações',
'서명' => 'Assinatura',
'자기소개' => 'Sobre mim',
'회원아이콘' => 'Ícone de membro',
'이미지선택' => 'Escolher imagem',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'A imagem deve ter no máximo {1}px de largura e {2}px de altura.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Somente arquivos gif, jpg e png de até {1} bytes.',
'회원이미지' => 'Imagem de membro',
'정보공개' => 'Perfil público',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Permitir que outras pessoas vejam minhas informações.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Se você alterar esta opção, não poderá alterá-la novamente por {1} dias.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Esta opção não pode ser alterada por {1} dias após uma alteração (até {2}).',
'Y년 m월 j일' => 'd/m/Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Isso evita que membros enviem mensagens e depois ocultem o perfil para não receber respostas.',
'추천인아이디' => 'Usuário que indicou',
'수신설정' => 'Preferências de notificação',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Opcional) Coleta e uso de dados pessoais para marketing',
'자세히보기' => 'Detalhes',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informações sobre a coleta e o uso de dados pessoais para marketing. Clique em Detalhes para ler o texto completo.',
'(동의일자: {1})' => '(Aceito em: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Finalidade: marketing e promoções do serviço',
'* 항목: 이름, 이메일' => '* Itens: nome, e-mail',
', 휴대폰 번호' => ', número de celular',
'* 보유기간: 회원 탈퇴 시까지' => '* Retenção: até o cancelamento da conta',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Se você recusar, ainda poderá usar o serviço básico, mas os benefícios personalizados podem ser limitados.',
'(선택) 광고성 정보 수신 동의' => '(Opcional) Consentimento para receber publicidade',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Abrange o consentimento para receber publicidade (e-mail/SMS/KakaoTalk). Clique em Detalhes para ler o texto completo.',
'광고성 이메일 수신 동의' => 'Receber e-mails publicitários',
'광고성 SMS/카카오톡 수신 동의' => 'Receber SMS/KakaoTalk publicitários',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Podemos enviar publicidade por e-mail/SMS/KakaoTalk entre 8h e 21h, usando os dados pessoais que você autorizou.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Você pode retirar seu consentimento a qualquer momento em Minha conta.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Opcional) Consentimento para compartilhar dados pessoais com terceiros',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Informações sobre o compartilhamento de dados pessoais com terceiros. Clique em Detalhes para ler o texto completo.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Finalidade: comunicações de marketing sobre produtos/serviços, promoções e eventos (KakaoTalk etc.)',
'* 항목: 이름, 휴대폰 번호' => '* Itens: nome, número de celular',
'* 제공받는 자:' => '* Destinatário:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Retenção: durante a prestação do serviço ou até a retirada do consentimento',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Você já verificou sua identidade por {1}.

Cancelar a verificação anterior e verificar novamente?',
'비밀번호를 3글자 이상 입력하십시오.' => 'A senha deve ter pelo menos 3 caracteres.',
'비밀번호가 같지 않습니다.' => 'As senhas não coincidem.',
'이름을 입력하십시오.' => 'Digite seu nome.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'É necessário verificar a identidade para se cadastrar.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'O ícone de membro não é um arquivo de imagem.',
'회원이미지가 이미지 파일이 아닙니다.' => 'A imagem de membro não é um arquivo de imagem.',
'본인을 추천할 수 없습니다.' => 'Você não pode indicar a si mesmo.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Cadastro concluído',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Parabéns pelo cadastro, {1}!',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Um e-mail de verificação foi enviado para o endereço informado.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Verifique o e-mail e conclua a verificação para usar o site.',
'이메일 주소' => 'Endereço de e-mail',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Se você digitou o endereço de e-mail errado, entre em contato com o administrador do site.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Sua senha é armazenada de forma criptografada, e ninguém pode lê-la.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Se você esquecer seu nome de usuário ou senha, poderá recuperá-los com o e-mail cadastrado.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Você pode cancelar sua conta a qualquer momento; suas informações são excluídas após um determinado período.',
'감사합니다.' => 'Obrigado.',
'메인으로' => 'Ir para o início',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Salvar',
'제목 확인 및 댓글 쓰기' => 'Confira o título e escreva um comentário',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Ao salvar, você pode deixar um comentário de agradecimento ou incentivo.',
'스크랩 확인' => 'Confirmar e salvar',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Busca avançada',
'전체게시물' => 'Todas as postagens',
'원글만' => 'Somente postagens',
'코멘트만' => 'Somente comentários',
'회원 아이디만 검색 가능' => 'Busca somente por nome de usuário',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Login de membro',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Minha conta',
'{1}님' => '{1}',
'안 읽은' => 'Não lidas ',
'쪽지' => 'Mensagens',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Tem certeza de que deseja cancelar sua conta?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Fechar categorias',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Cupons',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Enquete',
'결과보기' => 'Ver resultados',
'관리자 관리' => 'Administração',
'투표하기' => 'Votar',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Somente membros de nível {1} ou superior podem votar.',
'투표하실 설문항목을 선택하세요' => 'Selecione uma opção para votar',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Somente membros de nível {1} ou superior podem ver os resultados.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Total: {1} votos',
'결과' => 'Resultados',
'{1} 표' => '{1} votos',
'이 설문에 대한 기타의견' => 'Outras opiniões sobre esta enquete',
'님의 의견' => ' (opinião)',
'기타의견' => 'Outras opiniões',
'의견' => 'Opinião',
'의견을 입력해주세요' => 'Digite sua opinião',
'의견남기기' => 'Deixar opinião',
'다른 투표 결과 보기' => 'Resultados de outras enquetes',
'해당 기타의견을 삭제하시겠습니까?' => 'Excluir esta opinião?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Buscas populares',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Nova solicitação',
'답변완료' => 'Respondido',
'답변대기' => 'Aguardando',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Tem certeza de que deseja excluir as postagens selecionadas?

Os dados excluídos não podem ser recuperados.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Editar resposta',
'답변삭제' => 'Excluir resposta',
'추가질문' => 'Pergunta adicional',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Publicar resposta',
'파일 #1' => 'Arquivo #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Anexo 1: até {1}',
'파일 #2' => 'Arquivo #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Anexo 2: até {1}',
'답변쓰기' => 'Escrever resposta',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Estamos preparando a resposta à sua solicitação.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Informações de contato',
'첨부' => 'Anexo',
'연관질문' => 'Perguntas relacionadas',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Receber resposta',
'답변등록 SMS알림 수신' => 'Receber SMS quando houver resposta',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Digite o número de celular usando apenas números e -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Resultados da busca',
'게시판' => 'Fóruns',
'{1}개' => '{1}',
'게시물' => 'Postagens',
'페이지 열람 중' => 'páginas',
'검색조건' => 'Opções de busca',
'제목+내용' => 'Título+Conteúdo',
'전체게시판' => 'Todos os fóruns',
'검색된 자료가 하나도 없습니다.' => 'Nenhum resultado encontrado.',
'게시판 내 결과' => 'Resultados no fórum',
'{1} 결과 더보기' => 'Mais resultados em {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Estatísticas de visitantes',
'오늘' => 'Hoje',
'어제' => 'Ontem',
'최대' => 'Máximo',
'visit|전체' => 'Total',
'상세보기' => 'Detalhes',

// theme/basic/mobile/tail.php
'회사소개' => 'Sobre nós',
'개인정보처리방침' => 'Política de privacidade',
'서비스이용약관' => 'Termos de uso',
'소유하신 도메인.' => 'Seu domínio.',
'사이트 정보' => 'Informações do site',
'회사명 : 회사명 / 대표 : 대표자명' => 'Empresa: Nome da empresa / Representante: Nome do representante',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Endereço: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'Nº de registro empresarial: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel.: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Nº de registro de vendas a distância: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Encarregado de dados (DPO): Nome do encarregado',
'상단으로' => 'Voltar ao topo',
'PC 버전으로 보기' => 'Versão para computador',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Total: {1}',
'게시판 검색' => 'Buscar no fórum',
'현재 페이지 게시물  전체선택' => 'Selecionar todas as postagens desta página',
'번호' => 'Nº',
'글쓴이' => 'Autor',
'날짜' => 'Data',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} downloads | DATA: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1} –',
'댓글의' => '(resposta)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Selecione uma categoria',
'임시 저장된 글 ({1})' => 'Rascunhos ({1})',
'임시 저장된 글 목록' => 'Lista de rascunhos',
'링크  #{1}' => 'Link #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Buscar FAQ',
'FAQ 수정' => 'Editar FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Postagens populares',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Nenhuma imagem.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Membro',
'ID/PW 찾기' => 'Recuperar usuário/senha',
'주문서번호' => 'Número do pedido',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Somente o autor e os administradores podem visualizá-la.',
'본인이라면 비밀번호를 입력하세요.' => 'Se você é o autor, digite a senha.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Ajuda',
'비밀번호 확인 (필수)' => 'Confirmar senha (obrigatório)',
'비밀번호 확인' => 'Confirmar senha',
'본인확인 시 자동입력' => 'Preenchido automaticamente na verificação',
'닉네임' => 'Apelido',
'주소 검색' => 'Buscar endereço',
'기본주소' => 'Endereço',
' (동의일자: {1})' => ' (Aceito em: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Escrever comentário',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Todos',
'그룹' => 'Grupo',
'일시' => 'Data',
'{1}번' => 'Nº {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Tem certeza de que deseja continuar com as postagens selecionadas?

Os dados excluídos não podem ser recuperados.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Conta',
'마이페이지' => 'Minha conta',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Gerenciar enquete',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Liderando no momento',
'500 표' => '500 votos',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Data',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Opções da resposta',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Opções da postagem',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Nova solicitação de atendimento',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Resultados da busca por {1}',
'게시판 {1}개' => '{1} fóruns',
'게시물 {1}개' => '{1} postagens',
'새창' => 'Nova janela',

// theme/basic/tail.php
'모바일버전' => 'Versão móvel',
);
