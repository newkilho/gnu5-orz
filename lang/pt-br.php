<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (pt-br). 틀은 php lang/build.php pt-br 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Use esta função após instalar a loja.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Muitas solicitações. Tente novamente em instantes.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'O nome de usuário de quem indicou pode conter apenas letras, números e _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'O usuário indicado não existe.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Use o procedimento correto.',

// bbs/alert.php
'오류안내 페이지' => 'Página de erro',
'결과안내 페이지' => 'Página de resultado',
'다음 항목에 오류가 있습니다.' => 'Os itens a seguir contêm erros.',
'다음 내용을 확인해 주세요.' => 'Verifique as informações abaixo.',
'돌아가기' => 'Voltar',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Feche a nova janela e tente a operação anterior novamente.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Feche a nova janela e continue usando o serviço.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'O fórum não existe.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'O valor bo_table não foi recebido.\\n\\nEnvie no formato board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'A postagem não existe.\\n\\nEla pode ter sido excluída ou movida.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Visitantes não cadastrados não têm acesso a este fórum.\\n\\nSe você é membro, faça login.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Você não tem permissão para ler postagens.\\n\\nEm caso de dúvidas, entre em contato com o administrador.',
'글을 읽을 권한이 없습니다.' => 'Você não tem permissão para ler esta postagem.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para ler esta postagem.\\n\\nSe você é membro, faça login.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Neste fórum, somente membros com identidade verificada podem ler postagens.\\n\\nSe você é membro, faça login.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Neste fórum, somente membros com identidade verificada podem ler postagens.\\n\\nFaça a verificação de identidade em Editar perfil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Neste fórum, somente membros maiores de idade verificados podem ler postagens.\\n\\nSe você é maior de idade e não consegue ler, refaça a verificação de identidade em Editar perfil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Seus pontos ({1}) são insuficientes para ler a postagem ({2}).\\n\\nAcumule mais pontos e tente novamente.',
'목록을 볼 권한이 없습니다.' => 'Você não tem permissão para ver a lista.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para ver a lista.\\n\\nSe você é membro, faça login.',
'{1} {2} 페이지' => '{1} - página {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Selecione pelo menos um item para "{1}".',
'올바른 방법으로 이용해 주세요.' => 'Use o procedimento correto.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Verifique as informações abaixo.',
'확인' => 'OK',
'취소' => 'Cancelar',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Verifique primeiro Gerenciar fóruns->Gerenciar conteúdo no painel de administração.',
'등록된 내용이 없습니다.' => 'Nenhum conteúdo cadastrado.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} não existe.</p>',

// bbs/current_connect.php
'현재접속자' => 'Usuários online',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Não é possível excluir: erro de token.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Não é possível excluir: o fórum não pertence a um grupo que você administra.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Não é possível excluir uma postagem de um membro com nível superior ao seu.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Não é possível excluir: você não administra este fórum.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Não é possível excluir: a postagem não é sua.',
'로그인 후 삭제하세요.' => 'Faça login para excluir.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Senha incorreta. Não é possível excluir.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Não é possível excluir: existem respostas a esta postagem.\\n\\nExclua primeiro as respostas.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Não é possível excluir: existem comentários nesta postagem.\\n\\nNão é possível excluir uma postagem com {1} ou mais comentários.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Acesso não autorizado.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'O comentário não existe ou não é um comentário.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Não é possível excluir o comentário de um membro com nível superior ao do administrador do grupo.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Não é possível excluir o comentário: o fórum não pertence a um grupo que você administra.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Não é possível excluir o comentário de um membro com nível superior ao do administrador do fórum.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Não é possível excluir o comentário: você não administra este fórum.',
'비밀번호가 틀립니다.' => 'Senha incorreta.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Não é possível excluir: existem respostas a este comentário.',

// bbs/download.php
'잘못된 접근입니다.' => 'Acesso inválido.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para fazer download.\\nSe você é membro, faça login.',
'파일 정보가 존재하지 않습니다.' => 'As informações do arquivo não foram encontradas.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'O token expirou ou é inválido.\\nAtualize a página e tente novamente.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Ao baixar o arquivo {1}, serão descontados {2} pontos.\\nOs pontos são descontados apenas uma vez por postagem; baixar novamente não gera novo desconto.\\nDeseja fazer o download mesmo assim?',
'다운로드 권한이 없습니다.' => 'Você não tem permissão para fazer download.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nSe você é membro, faça login.',
'파일이 존재하지 않습니다.' => 'O arquivo não existe.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Seus pontos ({1}) são insuficientes para o download ({2}).\\n\\nAcumule mais pontos e tente novamente.',
'다운로드 &gt; {1}' => 'Download &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Membro inexistente.',
'탈퇴 또는 차단된 회원입니다.' => 'Membro desligado ou bloqueado.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Solicitação de verificação de e-mail já processada ou inválida.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Verificação de e-mail concluída.\\n\\nAgora você pode entrar com o nome de usuário {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'A verificação de e-mail expirou. Solicite o e-mail de verificação novamente.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Os dados da solicitação de verificação de e-mail são inválidos.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Os valores recebidos são inválidos.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Você cancelou o recebimento de e-mails informativos.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Verifique primeiro Gerenciar fóruns->Gerenciar FAQ no painel de administração.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Para enviar e-mails, é preciso marcar "Usar envio de e-mail" nas configurações.\\n\\nEntre em contato com o administrador.',
'회원만 이용하실 수 있습니다.' => 'Disponível somente para membros.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se o seu perfil não for público, você não pode enviar e-mails a outros membros.\\n\\nVocê pode tornar o perfil público em Editar perfil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'As informações do membro não foram encontradas.\\n\\nEle pode ter se desligado.',
'정보공개를 하지 않았습니다.' => 'O perfil não é público.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Só é possível enviar um número limitado de e-mails por sessão.\\n\\nPara continuar enviando, faça login ou acesse o site novamente.',
'메일 쓰기' => 'Escrever e-mail',
'이메일이 올바르지 않습니다.' => 'E-mail inválido.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Você excedeu o limite de envios pelo formulário de e-mail.',
'자동등록방지 숫자가 틀렸습니다.' => 'Código antispam incorreto.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Não é possível enviar: o formato do endereço de e-mail é inválido.',
'허용되지 않는 파일 확장자입니다.' => 'Extensão de arquivo não permitida.',
'메일보내기' => 'Enviar e-mail',
'메일 발송중' => 'Enviando e-mail',
'메일을 정상적으로 발송하였습니다.' => 'E-mail enviado com sucesso.',

// bbs/good.php
'회원만 가능합니다.' => 'Disponível somente para membros.',
'값이 제대로 넘어오지 않았습니다.' => 'Os valores não foram recebidos corretamente.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Só é possível curtir ou não curtir a partir da própria postagem.',
'존재하는 게시판이 아닙니다.' => 'O fórum não existe.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Você não pode curtir nem não curtir suas próprias postagens.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Este fórum não usa a função Curtir.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Este fórum não usa a função Não curtir.',
'추천' => 'Curtir',
'비추천' => 'Não curtir',
'이미 {1} 하신 글 입니다.' => 'Você já marcou "{1}" nesta postagem.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Você já curtiu ou não curtiu esta postagem.',
'이 글을 {1} 하셨습니다.' => 'Você marcou "{1}" nesta postagem.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'O grupo {1} só pode ser acessado pelo celular.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'Não há links.',

// bbs/list.php
'전체' => 'Todos',
'열린 분류' => 'Categoria aberta',
'이전검색' => 'Busca anterior',
'다음검색' => 'Próxima busca',

// bbs/login.php
'로그인' => 'Entrar',

// bbs/login_check.php
'로그인 검사' => 'Verificação de login',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'O nome de usuário e a senha não podem ficar em branco.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Nome de usuário não cadastrado ou senha incorreta.\\nA senha diferencia maiúsculas de minúsculas.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'O acesso do seu nome de usuário foi bloqueado.\\nData: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Este nome de usuário foi desligado e não pode acessar.\\nData do desligamento: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Para entrar, você precisa verificar o e-mail {1}. Para verificar outro endereço de e-mail, clique em Cancelar.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Se a pasta data não tiver permissão de gravação ou o espaço em disco tiver acabado,\\no login pode falhar. Verifique o espaço disponível e as permissões de gravação.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'A URL contém um valor inválido.',
'url에 도메인을 지정할 수 없습니다.' => 'Não é possível especificar um domínio na URL.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'A verificação de identidade não está disponível. Entre em contato com o administrador.',
'본인인증을 다시 해주세요.' => 'Faça a verificação de identidade novamente.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Faça login para continuar.',
'w 값이 제대로 넘어오지 않았습니다.' => 'O valor w não foi recebido corretamente.',
'잘못된 접근입니다' => 'Acesso inválido',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Nome de usuário ausente. Use o procedimento correto.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Já existe um cadastro com estes dados de verificação de identidade.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Os dados verificados não correspondem às informações informadas. Tente novamente.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Acesso permitido somente a membros conectados.',
'회원 비밀번호 확인' => 'Confirmar senha',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Acesso permitido somente a membros.',
'최고 관리자는 탈퇴할 수 없습니다' => 'O superadministrador não pode se desligar',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Não foi possível concluir o desligamento. Verifique o status da conta.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1}, seu desligamento foi realizado em {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'Minhas mensagens',
'kind 변수 값이 올바르지 않습니다.' => 'Valor da variável kind inválido.',
'받은' => 'Recebida',
'보낸' => 'Enviada',
'정보없음' => 'Sem informações',
'아직 읽지 않음' => 'Ainda não lida',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se o seu perfil não for público, você não pode enviar mensagens a outros membros. Você pode tornar o perfil público em Editar perfil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'As informações do membro não foram encontradas.\\n\\nEle pode ter se desligado.',
'쪽지 보내기' => 'Enviar mensagem',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'O nome de usuário \'{1}\' não existe (ou o perfil não é público), ou foi desligado ou bloqueado.\\nA mensagem não foi enviada.',
'해당 회원이 존재하지 않습니다.' => 'O membro não existe.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Seus pontos ({1}) são insuficientes para enviar a mensagem.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Mensagem enviada para {1}.',
'회원아이디 오류 같습니다.' => 'Parece haver um erro no nome de usuário.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Envie o valor {1}.',
'{1} 쪽지 보기' => 'Mensagem: {1}',

// bbs/move.php
'이동' => 'Mover',
'복사' => 'Copiar',
'sw 값이 제대로 넘어오지 않았습니다.' => 'O valor sw não foi recebido corretamente.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Acesso permitido somente a administradores de fórum ou superiores.',
'게시물 {1}' => '{1} postagem',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Selecione pelo menos um fórum para "{1}".',
'현재 페이지 게시판 전체' => 'Todos os fóruns desta página',
'게시판' => 'Fóruns',
'현재' => 'Atual',
'창닫기' => 'Fechar janela',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Selecione pelo menos um fórum de destino para "{1}".',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Operação "{1}" realizada nos fóruns selecionados.',

// bbs/new.php
'새글' => 'Novas postagens',
'그룹' => 'Grupo',
'전체그룹' => 'Todos os grupos',
'[코] ' => '[Com.]',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Acesso permitido somente ao superadministrador.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Aviso pop-up',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Não mostrar novamente por {1} horas.',
'닫기' => 'Fechar',
'팝업레이어 알림이 없습니다.' => 'Não há avisos pop-up.',

// bbs/password.php
'비밀번호 입력' => 'Digite a senha',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Você já está conectado.',
'회원정보 찾기' => 'Recuperar dados da conta',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Endereço de e-mail incorreto.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Um e-mail para confirmar seu nome de usuário e senha foi enviado para {1}.\\n\\nVerifique sua caixa de entrada.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Recuperação dos dados da conta solicitada',
'회원정보 찾기 안내' => 'Recuperação dos dados da conta',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}), você solicitou a recuperação dos dados da conta em {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Como nem os administradores do site podem saber sua senha, em vez de informá-la, geramos uma nova senha para você.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Confira abaixo a nova senha e depois <span style="color:#ff3061">clique no link <strong>Alterar senha</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Quando aparecer a mensagem confirmando a alteração da senha, entre no site com seu nome de usuário e a nova senha.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Depois de entrar, troque para uma senha nova em Editar perfil.',
'회원아이디' => 'Nome de usuário',
'변경될 비밀번호' => 'Nova senha',
'비밀번호 변경' => 'Alterar senha',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Sua senha foi alterada.\\n\\nEntre com seu nome de usuário e a nova senha.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Não é possível recuperar nome de usuário e senha pela verificação de identidade. Entre em contato com o administrador.',
'패스워드 변경' => 'Alterar senha',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'A senha não foi recebida.',
'비밀번호가 일치하지 않습니다.' => 'As senhas não coincidem.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Consulta disponível somente para membros.',
'{1} 님의 포인트 내역' => 'Histórico de pontos de {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'O valor po_id não foi recebido corretamente.',
'기타의견이 비활성화되어 있습니다.' => 'A opção "Outra opinião" está desativada.',
'권한이 없습니다.' => 'Você não tem permissão.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Enquete não encontrada.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Somente membros de nível {1} ou superior podem ver os resultados.',
'설문조사 결과' => 'Resultado da enquete',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Somente membros de nível {1} ou superior podem votar.',
'항목을 선택하세요.' => 'Selecione uma opção.',
'{1}에 이미 참여하셨습니다.' => 'Você já participou da enquete "{1}".',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Se o seu perfil não for público, você não pode ver as informações de outros membros.\\n\\nVocê pode tornar o perfil público em Editar perfil.',
'{1}님의 자기소개' => 'Apresentação de {1}',
'소개 내용이 없습니다.' => 'Nenhuma apresentação.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Se você é membro, faça login.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Selecione pelo menos uma postagem para excluir.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Se você é membro, faça login.',
'열린 분류 ' => 'Categoria aberta',
'{1}이 존재하지 않습니다.' => '{1} não existe.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'A postagem não existe.\\nEla pode ter sido excluída ou não ser sua.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Não é possível editar uma pergunta que já foi respondida.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Você não tem permissão para editar esta postagem.\\n\\nUse o procedimento correto.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Defina as categorias nas configurações do Atendimento 1:1',
'{1} 바이트' => '{1} bytes',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Especifique uma categoria válida.',
'이메일을 입력하세요.' => 'Digite o e-mail.',
'<strong>제목</strong>을 입력하세요.' => 'Digite o <strong>título</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Digite o <strong>conteúdo</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'O conteúdo contém muitos códigos inválidos.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'O tamanho do arquivo ou do conteúdo excede o limite definido no servidor.\\npost_max_size={1} , upload_max_filesize={2}\\nEntre em contato com o administrador do fórum ou do servidor.',
'답변은 관리자만 등록할 수 있습니다.' => 'Somente o administrador pode responder.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Não é possível responder: a pergunta não existe.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Não é possível responder a uma resposta.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Envie no máximo 2 anexos.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'O arquivo "{1}" excede o tamanho definido no servidor ({2}) e não pode ser enviado.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'O arquivo "{1}" não foi enviado corretamente.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'O arquivo "{1}" ({2} bytes) excede o tamanho definido no fórum ({3} bytes) e não será enviado.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Não é possível salvar o arquivo "{1}" com segurança. Verifique a fonte de números aleatórios e o caminho de armazenamento do servidor.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} - notificação de resposta',

// bbs/register.php
'회원가입약관' => 'Termos de uso',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Alterar e-mail de verificação',
'이미 메일인증 하신 회원입니다.' => 'Seu e-mail já foi verificado.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Se você não recebeu o e-mail de verificação, pode alterar o endereço de e-mail da sua conta.',
'사이트 이용정보 입력' => 'Dados da conta',
'필수' => 'Obrigatório',
'자동등록방지' => 'Antispam',
'인증메일변경' => 'Alterar e-mail de verificação',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'O e-mail {1} já está em uso.\\n\\nDigite outro endereço de e-mail.',
'[{1}] 인증확인 메일입니다.' => '[{1}] E-mail de verificação',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'O e-mail de verificação foi reenviado para {1}.\\n\\nVerifique o e-mail {1} em instantes.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Para se cadastrar, você precisa aceitar os termos de uso.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Para se cadastrar, você precisa aceitar a coleta e o uso de dados pessoais.',
'회원 가입' => 'Cadastre-se',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Edite os dados do administrador no painel de administração.',
'로그인 후 이용하여 주십시오.' => 'Faça login para continuar.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Os dados recebidos não correspondem ao membro conectado.',
'비밀번호를 입력해 주세요.' => 'Digite a senha.',
'회원 정보 수정' => 'Editar perfil',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Esta operação não está disponível na demonstração.',
'이름을 올바르게 입력해 주십시오.' => 'Digite um nome válido.',
'닉네임을 올바르게 입력해 주십시오.' => 'Digite um apelido válido.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'É necessário verificar a identidade para se cadastrar.',
'추천인이 존재하지 않습니다.' => 'O usuário indicado não existe.',
'본인을 추천할 수 없습니다.' => 'Você não pode indicar a si mesmo.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Parabéns pelo seu cadastro!',
'로그인 되어 있지 않습니다.' => 'Você não está conectado.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Não é possível editar: os dados enviados não correspondem à conta conectada.\\nSe estiver usando um método indevido, interrompa imediatamente.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Envie um ícone de membro com no máximo {1} bytes.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} não é um arquivo de imagem.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Envie uma imagem de membro com no máximo {1} bytes.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} não é um arquivo gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Seu perfil foi atualizado.\\n\\nComo o endereço de e-mail foi alterado, é preciso verificá-lo novamente.',
'회원정보수정' => 'Editar perfil',
'회원 정보가 수정 되었습니다.' => 'Seu perfil foi atualizado.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'E-mail de boas-vindas',
'회원가입을 축하합니다.' => 'Parabéns pelo seu cadastro!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Parabéns, <b>{1}</b>, pelo seu cadastro!',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Faremos o possível para retribuir o seu apoio.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Clique em <strong>Verificar e-mail</strong> abaixo para concluir o cadastro.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'O link de verificação é válido por {1} minutos após o envio.',
'감사합니다.' => 'Obrigado.',
'메일인증' => 'Verificar e-mail',
'사이트바로가기' => 'Ir para o site',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'E-mail de verificação da conta',
'회원 인증 메일입니다.' => 'Este é o e-mail de verificação da sua conta.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'O endereço de e-mail de <b>{1}</b> foi alterado.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Clique no endereço abaixo para concluir a verificação.',
'{1} 로그인' => 'Entrar em {1}',

// bbs/register_result.php
'회원가입 완료' => 'Cadastro concluído',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'O RSS está disponível apenas para fóruns que visitantes não cadastrados podem ler.',
'RSS 보기가 금지되어 있습니다.' => 'O RSS está desativado.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Postagens salvas de {1}',
'[게시판 없음]' => '[Fórum inexistente]',
'[글 없음]' => '[Postagem inexistente]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Acesso permitido somente a membros.',
'로그인하기' => 'Entrar',
'올바른 방법으로 사용해 주십시오.' => 'Use o procedimento correto.',
'코멘트는 스크랩 할 수 없습니다.' => 'Não é possível salvar comentários.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Você já salvou esta postagem.

Deseja ver suas postagens salvas agora?',
'이미 스크랩하신 글 입니다.' => 'Você já salvou esta postagem.',
'스크랩 확인하기' => 'Ver postagens salvas',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'A postagem que você quer salvar não existe.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Você não pode publicar postagens seguidas tão rapidamente.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Postagem salva.

Deseja ver suas postagens salvas agora?',
'이 글을 스크랩 하였습니다.' => 'Postagem salva.',

// bbs/search.php
'전체검색 결과' => 'Resultados da busca',
'[비밀글 입니다.]' => '[Postagem privada]',
'게시판 그룹선택' => 'Selecionar grupo de fóruns',
'전체 분류' => 'Todas as categorias',

// bbs/view_comment.php
'비밀글 입니다.' => 'Postagem privada.',
'댓글내용 확인' => 'Verificar conteúdo do comentário',

// bbs/view_image.php
'이미지 크게보기' => 'Ampliar imagem',
'이미지 확장자가 아닙니다.' => 'A extensão não é de imagem.',
'이미지 파일이 아닙니다.' => 'Não é um arquivo de imagem.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'O valor bo_table não foi recebido.\\nEnvie no formato write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'A postagem não existe.\\nEla pode ter sido excluída ou movida.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'O valor \\$wr_id não é usado ao escrever uma nova postagem.',
'글을 쓸 권한이 없습니다.' => 'Você não tem permissão para escrever.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para escrever.\\nSe você é membro, faça login.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Seus pontos ({1}) são insuficientes para escrever uma postagem ({2}).\\n\\nAcumule mais pontos e tente novamente.',
'글쓰기' => 'Escrever',
'글을 수정할 권한이 없습니다.' => 'Você não tem permissão para editar esta postagem.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para editar esta postagem.\\n\\nSe você é membro, faça login.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Não é possível editar: existem respostas a esta postagem.\\n\\nNão é possível editar uma postagem que tem respostas.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Não é possível editar: existem comentários nesta postagem.\\n\\nNão é possível editar uma postagem com {1} ou mais comentários.',
'글수정' => 'Editar postagem',
'글을 답변할 권한이 없습니다.' => 'Você não tem permissão para responder.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Você não tem permissão para escrever uma resposta.\\n\\nSe você é membro, faça login.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Seus pontos ({1}) são insuficientes para responder ({2}).\\n\\nAcumule mais pontos e tente novamente.',
'공지에는 답변 할 수 없습니다.' => 'Não é possível responder a um aviso.',
'정상적인 접근이 아닙니다.' => 'Acesso inválido.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Somente o autor ou o administrador podem responder a postagens privadas.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Não é possível responder a postagens privadas de visitantes não cadastrados.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Você não pode mais responder.\\n\\nAs respostas são permitidas até 10 níveis.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Você não pode mais responder.\\n\\nSão permitidas no máximo 26 respostas.',
'글답변' => 'Responder',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Acesso não autorizado.\\n\\nSe você é membro, faça login.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Você não tem permissão para escrever postagens.\\n\\nEm caso de dúvidas, entre em contato com o administrador.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Neste fórum, somente membros com identidade verificada podem escrever postagens.\\n\\nSe você é membro, faça login.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Neste fórum, somente membros com identidade verificada podem escrever postagens.\\n\\nFaça a verificação de identidade em Editar perfil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'O nome é obrigatório.',
'댓글을 쓸 권한이 없습니다.' => 'Você não tem permissão para comentar.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'A postagem não existe.\\nEla pode ter sido excluída ou movida.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Seus pontos ({1}) são insuficientes para comentar ({2}).\\n\\nAcumule mais pontos e tente novamente.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'O comentário a ser respondido não existe.\\n\\nEle pode ter sido excluído enquanto você respondia.',
'댓글을 등록할 수 없습니다.' => 'Não foi possível publicar o comentário.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Você não pode mais responder.\\n\\nAs respostas são permitidas até 5 níveis.',
'원글
{1}


댓글
{2}' => 'Postagem original
{1}


Comentário
{2}',
'입력' => 'Nova postagem',
'수정' => 'Editar',
'답변' => 'Responder',
'댓글 ' => 'Comentário',
'댓글 수정' => 'Editar comentário',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nova atividade no fórum {2}: {3}',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Não é possível editar o comentário de um membro com nível superior ao do administrador do grupo.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Não é possível editar o comentário: o fórum não pertence a um grupo que você administra.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Não é possível editar o comentário de um membro com nível superior ao do administrador do fórum.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Não é possível editar o comentário: você não administra este fórum.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Não é possível editar: a postagem não é sua.',
'댓글을 수정할 권한이 없습니다.' => 'Você não tem permissão para editar este comentário.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Não é possível editar: existem respostas a este comentário.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Os dados do fórum são inválidos.',

// bbs/write_update.php
'게시글 저장' => 'Salvar postagem',
'<strong>분류</strong>를 선택하세요.' => 'Selecione a <strong>categoria</strong>.',
'분류를 올바르게 입력하세요.' => 'Digite uma categoria válida.',
'올바른 방법으로 수정하여 주십시오.' => 'Edite usando o procedimento correto.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Não é possível editar: o fórum não pertence a um grupo que você administra.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Não é possível editar uma postagem de um membro com nível superior ao seu.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Não é possível editar: você não administra este fórum.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Confirme a senha e tente editar novamente.',
'로그인 후 수정하세요.' => 'Faça login para editar.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Este fórum não permite postagens privadas.',
'관리자만 공지할 수 있습니다.' => 'Somente o administrador pode publicar avisos.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Você não pode mais responder.\\nAs respostas são permitidas até 10 níveis.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Você não pode mais responder.\\nSão permitidas no máximo 26 respostas.',
'제목을 입력하여 주십시오.' => 'Digite o título.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Exclua os arquivos existentes e envie no máximo {1} anexos.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Envie no máximo {1} anexos.',
'코멘트' => 'Comentário',
'코멘트 수정' => 'Editar comentário',

// bbs/write_update_mail.php
'{1} 메일' => 'E-mail: {1}',
'작성자 {1}' => 'Autor: {1}',
'사이트에서 게시물 확인하기' => 'Ver a postagem no site',

// common.php
'접근이 가능하지 않습니다.' => 'Acesso não permitido.',
'접근 불가합니다.' => 'Acesso negado.',

// head.php
'본문 바로가기' => 'Ir para o conteúdo',
'커뮤니티' => 'Comunidade',
'쇼핑몰' => 'Loja',
'접속자' => 'Visitantes',
'사이트 내 전체검색' => 'Buscar no site',
'검색어 필수' => 'Termo de busca (obrigatório)',
'검색어를 입력해주세요' => 'Digite um termo de busca',
'검색' => 'Buscar',
'검색어는 두글자 이상 입력하십시오.' => 'Digite pelo menos dois caracteres.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Para uma busca mais rápida, só é permitido um espaço no termo de busca.',
'정보수정' => 'Editar perfil',
'로그아웃' => 'Sair',
'회원가입' => 'Cadastre-se',
'메인메뉴' => 'Menu principal',
'전체메뉴' => 'Todos os menus',
'전체메뉴열기' => 'Abrir todos os menus',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'O menu está em preparação.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} - conectado',

// lib/common.lib.php
'처음' => 'Primeira',
'이전' => 'Anterior',
'페이지' => 'Página',
'열린' => 'Atual',
'다음' => 'Próxima',
'맨끝' => 'Última',
'답변글' => 'Resposta',
'{1} 자기소개' => 'Apresentação de {1}',
'{1} 이름으로 검색' => 'Buscar pelo nome {1}',
'쪽지보내기' => 'Enviar mensagem',
'홈페이지' => 'Site',
'자기소개' => 'Sobre mim',
'아이디로 검색' => 'Buscar por nome de usuário',
'이름으로 검색' => 'Buscar por nome',
'전체게시물' => 'Todas as postagens',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Erro nos dados MySQL Host, User, Password ou DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'O MySQL não está instalado, por isso a função mysql_connect não pode ser usada.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Erro nos dados MySQL Host, User ou Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Ocorreu um erro ao processar o banco de dados.',
'yoil|일' => 'dom',
'yoil|월' => 'seg',
'yoil|화' => 'ter',
'yoil|수' => 'qua',
'yoil|목' => 'qui',
'yoil|금' => 'sex',
'yoil|토' => 'sáb',
'요일' => '.',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'O token expirou. Atualize a página.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'O endereço do site para a verificação de e-mail não está configurado. Entre em contato com o administrador do site.',
'올바른 경로로 접근해 주십시오.' => 'Acesse pelo caminho correto.',
'PC 전용 게시판입니다.' => 'Fórum exclusivo para computador.',
'모바일 전용 게시판입니다.' => 'Fórum exclusivo para celular.',
'간편인증' => 'Verificação simplificada',
'휴대폰' => 'Celular',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Você já usou a verificação de identidade ({1}) {2} vezes hoje e não pode usá-la novamente.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Indisponível: a função exec não pode ser executada.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'O número de variáveis enviadas pelo formulário excede max_input_vars.\\nParte dos valores enviados pode se perder ao ser gravada no DB.\\n\\nPara resolver, altere o valor max_input_vars no php.ini do servidor.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Não é possível especificar outro domínio na URL.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Acesso negado: a URL contém informações do usuário.',
'bot 으로 판단되어 중지합니다.' => 'Operação interrompida: identificado como bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Digite o conteúdo.',

// lib/get_data.lib.php
'제목' => 'Título',
'내용' => 'Conteúdo',
'제목+내용' => 'Título+Conteúdo',
'글쓴이' => 'Autor',
'글쓴이(코)' => 'Autor (com.)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Digite o nome de usuário.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'O nome de usuário pode conter apenas letras, números e _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'O nome de usuário deve ter pelo menos 3 caracteres.',
'이미 사용중인 회원아이디 입니다.' => 'Este nome de usuário já está em uso.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Este nome de usuário é uma palavra reservada e não pode ser usado.',
'닉네임을 입력해 주십시오.' => 'Digite o apelido.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'O apelido pode conter apenas caracteres coreanos, letras e números, sem espaços.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'O apelido deve ter pelo menos 2 caracteres coreanos ou 4 letras.',
'이미 존재하는 닉네임입니다.' => 'Este apelido já existe.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Este apelido é uma palavra reservada e não pode ser usado.',
'E-mail 주소를 입력해 주십시오.' => 'Digite o endereço de e-mail.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'O formato do endereço de e-mail é inválido.',
'{1} 메일은 사용할 수 없습니다.' => 'O e-mail {1} não pode ser usado.',
'이미 사용중인 E-mail 주소입니다.' => 'Este endereço de e-mail já está em uso.',
'이름을 입력해 주십시오.' => 'Digite o nome.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'O nome pode conter apenas caracteres coreanos, sem espaços.',
'휴대폰번호를 입력해 주십시오.' => 'Digite o número de celular.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Digite um número de celular válido.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Este número de celular já está em uso. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Solicitação inválida.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Verificação inválida. Use o procedimento correto.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Não há cadastro com os dados verificados.',
'코드 : {1}  {2}' => 'Código: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultado da verificação simplificada KG Inicis',
'본인인증이 완료되었습니다.' => 'Verificação de identidade concluída.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Verificação simplificada KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Esta conta já foi verificada com a identidade de outra pessoa.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Já existe um cadastro com estes dados de verificação de identidade.\\nNome de usuário: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Ouvir os números',
'새로고침' => 'Atualizar',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Digite os números antispam na ordem.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultado da verificação por celular',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risco de adulteração de dn_hash (verifique se o arquivo {1} tem permissão de execução.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Você cancelou a verificação de identidade por celular.',
'up_hash 변조 위험있음' => 'Risco de adulteração de up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Falta o código do site KCP do serviço de verificação por celular.\\Digite o código do site KCP em Administração > Configurações básicas.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Já existe um cadastro com estes dados de verificação de identidade.\\nNome de usuário: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Verificado com o seu número de celular.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Não há resposta da verificação de identidade. Tente novamente desde o início.',
'코드 : {1} {2}' => 'Código: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'A sessão de verificação de identidade expirou. Tente novamente desde o início.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Falha ao consultar o resultado da verificação ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'O módulo KCP de verificação por celular V2 funciona apenas com PHP 7.0 ou superior.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'As extensões PHP exigidas pelo módulo KCP de verificação por celular V2 (openssl/curl/hash_pbkdf2) não estão ativadas.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'O código do site ou a ENC_KEY da verificação por celular KCP V2 não está configurado.\\nInforme-os em Administração > Configurações básicas.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Falha ao registrar a transação de verificação.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verificação por celular',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Não foi possível gerar os dados da solicitação de registro de transação KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Não foi possível criptografar os dados da solicitação de registro de transação KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Não há resposta da API de registro de transação KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Não foi possível interpretar a resposta da API de registro de transação KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Não foi possível gerar os dados da solicitação de consulta do resultado da verificação KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Não há resposta da API de consulta do resultado da verificação KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Não foi possível interpretar a resposta da API de consulta do resultado da verificação KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Não foi possível descriptografar os dados do resultado da verificação KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Não foi possível interpretar os dados descriptografados da verificação KCP.',
'cURL 초기화에 실패했습니다.' => 'Falha ao inicializar o cURL.',
'KCP API 통신 실패: {1}' => 'Falha na comunicação com a API KCP: {1}',
'KCP API HTTP 오류: {1}' => 'Erro HTTP da API KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ocorreu um erro na verificação por celular. Código de erro: {1}\\n\\nPara dúvidas, entre em contato com a central de atendimento da Korea Credit Bureau (KCB) pelo telefone 02-708-1000.',
'입력 값 확인이 필요합니다' => 'É preciso verificar os valores informados',
'KCB 휴대폰 본인확인' => 'Verificação por celular KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ocorreu um erro na verificação i-PIN. Código de erro: {1}\\n\\nPara dúvidas, entre em contato com a central de atendimento da Korea Credit Bureau (KCB) pelo telefone 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Ocorreu um erro na verificação i-PIN (sem dados de CI). Código de erro: {1}\\n\\nPara dúvidas, entre em contato com a central de atendimento da Korea Credit Bureau (KCB) pelo telefone 02-708-1000.',
'KCB 아이핀 본인확인' => 'Verificação i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Selecione o serviço de verificação por celular KCB em Configurações básicas.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Informe o ID de afiliado KCB em Configurações básicas.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'O arquivo executável do módulo não existe.\\n\\nO arquivo {1} deve estar em {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'O arquivo executável do módulo não tem permissão de execução.\\n\\nConceda a permissão de execução, por exemplo com chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'O arquivo executável do módulo não tem permissão de execução.\\n\\nVerifique se o IUSER tem permissão de execução no cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Selecione o serviço de verificação i-PIN KCB em Configurações básicas.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Crie o diretório key em {1}/{2}.\\n\\nDepois de criá-lo, conceda permissão de gravação. Exemplo: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Altere as permissões do diretório {1}/{2}/key para 705.\\nchmod 705 key ou chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Altere as permissões do diretório {1}/{2}/key para 707.\\n\\nchmod 707 key ou chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback do Twitter',
'트위터에 승인이 되었습니다.' => 'Autorizado no Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Não autorizado no Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Ver detalhes',
'페이스북으로 공유' => 'Compartilhar no Facebook',
'페이스북 공유' => 'Compartilhar no Facebook',
'트위터로  공유' => 'Compartilhar no Twitter',
'트위터 공유' => 'Compartilhar no Twitter',
'카카오톡으로 보내기' => 'Enviar pelo KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Publicado também no Facebook',
'트위터에도 등록됨' => 'Publicado também no Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Publicar também no Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Login social - {1}',
'잠시후에 다시 시도해 주세요.' => 'Tente novamente em instantes.',
'홈으로' => 'Início',
'이 페이지 닫기' => 'Fechar esta página',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Não é possível se cadastrar novamente porque já existe uma conta vinculada ou cadastrada com este ID {1}. Se você é membro, faça login e vincule a conta em Editar perfil.',
'지정되지 않은 오류입니다.' => 'Erro não especificado.',
'설정 오류입니다.' => 'Erro de configuração.',
'해당 provider 설정 오류입니다.' => 'Erro de configuração do provedor.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Provedor desconhecido ou desativado.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Você não tem permissão para acessar este serviço.',
'인증이 실패되었습니다.. ' => 'Falha na autenticação..',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'O usuário cancelou a autenticação ou o provedor recusou a conexão.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Falha ao solicitar o perfil do usuário. O usuário pode não estar conectado a este serviço.',
'이 경우 다시 인증 요청을 해야 합니다.' => 'Nesse caso, é preciso solicitar a autenticação novamente.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'O usuário não está conectado a este serviço.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'O serviço não oferece suporte a esta função.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Você já está conectado ou a solicitação é inválida.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Já existe um ID vinculado ou a solicitação é inválida.',
'소셜 데이터 오류' => 'Erro nos dados sociais',
'SNS 사용자 인증에 실패하였습니다.' => 'Falha na autenticação do usuário da rede social.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Já existe um ID {1} vinculado a esta conta. Desvincule-o e tente novamente.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Conectando a {1}. Aguarde um momento.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'O login social não está em uso.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'O login social está desativado nas configurações.',
'새창 옵션이 비활성화 되어 있습니다.' => 'A opção de nova janela está desativada.',
'서비스 이름이 넘어오지 않았습니다.' => 'O nome do serviço não foi recebido.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'O login social não está em uso.',
'이미 회원가입 하였습니다.' => 'Você já se cadastrou.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Acesso permitido somente a quem entrou com login social.',
'소셜 회원 가입 - {1}' => 'Cadastro social - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Acesso permitido somente a quem entrou com login social.',
'이미 등록된 회원이 존재합니다.' => 'Já existe um membro cadastrado.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Os dados verificados não correspondem aos seus dados pessoais. Tente novamente.',
'회원 가입 오류!' => 'Erro no cadastro!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Você não é membro ou o valor não foi recebido.',
'권한이 없거나 잘못된 요청입니다.' => 'Você não tem permissão ou a solicitação é inválida.',
);
