<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (es). 틀은 php lang/build.php es 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Instale la tienda antes de usarla.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Se han producido demasiadas solicitudes. Inténtelo de nuevo en unos momentos.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'El usuario que le recomendó solo puede contener letras, números y _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'El usuario recomendante indicado no existe.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Utilice el procedimiento correcto.',

// bbs/alert.php
'오류안내 페이지' => 'Página de error',
'결과안내 페이지' => 'Página de resultado',
'다음 항목에 오류가 있습니다.' => 'Los siguientes campos contienen errores.',
'다음 내용을 확인해 주세요.' => 'Compruebe lo siguiente.',
'돌아가기' => 'Volver',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Cierre la ventana nueva e inténtelo de nuevo.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Cierre la ventana nueva antes de continuar.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'El foro no existe.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'No se ha recibido el valor bo_table.\\n\\nEnvíelo con el formato board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'La publicación no existe.\\n\\nEs posible que se haya eliminado o movido.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Los visitantes no tienen acceso a este foro.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'No tiene acceso para leer publicaciones.\\n\\nSi tiene alguna pregunta, contacte con el administrador.',
'글을 읽을 권한이 없습니다.' => 'No tiene permiso para leer la publicación.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para leer la publicación.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Solo los miembros con identidad verificada pueden leer publicaciones en este foro.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Solo los miembros con identidad verificada pueden leer publicaciones en este foro.\\n\\nVerifique su identidad en Editar perfil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Solo los miembros verificados como mayores de edad mediante la verificación de identidad pueden leer publicaciones en este foro.\\n\\nSi es mayor de edad y no puede leer publicaciones, vuelva a verificar su identidad en Editar perfil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'No tiene puntos suficientes ({1}) para leer la publicación ({2}).\\n\\nAcumule más puntos e inténtelo de nuevo.',
'목록을 볼 권한이 없습니다.' => 'No tiene permiso para ver la lista.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para ver la lista.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'{1} {2} 페이지' => '{1} página {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => '{1}: seleccione al menos un elemento.',
'올바른 방법으로 이용해 주세요.' => 'Utilice el procedimiento correcto.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Compruebe la información siguiente.',
'확인' => 'Aceptar',
'취소' => 'Cancelar',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Compruebe primero Gestión de foros->Gestión de contenido en el modo de administrador.',
'등록된 내용이 없습니다.' => 'No hay contenido.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} no existe.</p>',

// bbs/current_connect.php
'현재접속자' => 'Usuarios conectados',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'No se puede eliminar por un error de token.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'No puede eliminar porque el foro no pertenece a un grupo que usted administre.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'No puede eliminar publicaciones de miembros con un nivel superior al suyo.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'No puede eliminar porque no administra este foro.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'No puede eliminar porque no es su publicación.',
'로그인 후 삭제하세요.' => 'Inicie sesión para eliminar.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'La contraseña es incorrecta; no se puede eliminar.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'No se puede eliminar la publicación porque tiene respuestas.\\n\\nElimine primero las respuestas.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'No se puede eliminar la publicación porque tiene comentarios.\\n\\nNo se pueden eliminar publicaciones con {1} o más comentarios.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'No tiene acceso.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'El comentario no existe o no es un comentario.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'No se puede eliminar porque el comentario es de un miembro con nivel superior al del administrador del grupo.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'No puede eliminar el comentario porque el foro no pertenece a un grupo que usted administre.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'No se puede eliminar porque el comentario es de un miembro con nivel superior al del administrador del foro.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'No puede eliminar el comentario porque no administra este foro.',
'비밀번호가 틀립니다.' => 'La contraseña es incorrecta.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'No se puede eliminar el comentario porque tiene respuestas.',

// bbs/download.php
'잘못된 접근입니다.' => 'Acceso no válido.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para descargar.\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'파일 정보가 존재하지 않습니다.' => 'La información del archivo no existe.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'El token ha caducado o no es válido.\\nActualice la página e inténtelo de nuevo.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Al descargar el archivo {1} se descontarán puntos ({2} puntos).\\nLos puntos solo se descuentan una vez por publicación, aunque vuelva a descargarlo.\\n¿Desea descargarlo de todos modos?',
'다운로드 권한이 없습니다.' => 'No tiene permiso para descargar.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'파일이 존재하지 않습니다.' => 'El archivo no existe.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'No tiene puntos suficientes ({1}) para descargar ({2}).\\n\\nAcumule más puntos e inténtelo de nuevo.',
'다운로드 &gt; {1}' => 'Descarga &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'El miembro no existe.',
'탈퇴 또는 차단된 회원입니다.' => 'El miembro se ha dado de baja o está bloqueado.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'La solicitud de verificación de correo ya se ha procesado o no es válida.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Su correo electrónico se ha verificado.\\n\\nYa puede iniciar sesión con el usuario {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'El enlace de verificación ha caducado. Solicite un nuevo correo de verificación.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'La información de la solicitud de verificación de correo no es válida.',
'제대로 된 값이 넘어오지 않았습니다.' => 'No se han recibido valores válidos.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Se ha dado de baja de los correos informativos.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Compruebe primero Gestión de foros->Gestión de FAQ en el modo de administrador.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Para enviar correos debe activar «Usar envío de correo» en la configuración.\\n\\nContacte con el administrador.',
'회원만 이용하실 수 있습니다.' => 'Solo para miembros.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'No puede enviar correos a otros si su perfil no es público.\\n\\nPuede cambiarlo en Editar perfil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'La información del miembro no existe.\\n\\nEs posible que se haya dado de baja.',
'정보공개를 하지 않았습니다.' => 'El miembro no tiene un perfil público.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Solo puede enviar un número limitado de correos por sesión.\\n\\nPara enviar más, vuelva a iniciar sesión o a acceder al sitio.',
'메일 쓰기' => 'Escribir correo',
'이메일이 올바르지 않습니다.' => 'El correo electrónico no es válido.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Ha superado el número de envíos permitidos desde el formulario.',
'자동등록방지 숫자가 틀렸습니다.' => 'El código antispam es incorrecto.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'No se puede enviar el correo porque la dirección tiene un formato no válido.',
'허용되지 않는 파일 확장자입니다.' => 'Extensión de archivo no permitida.',
'메일보내기' => 'Enviar correo',
'메일 발송중' => 'Enviando correo',
'메일을 정상적으로 발송하였습니다.' => 'El correo se ha enviado correctamente.',

// bbs/good.php
'회원만 가능합니다.' => 'Solo para miembros.',
'값이 제대로 넘어오지 않았습니다.' => 'No se han recibido los valores correctamente.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Solo puede indicar Me gusta o No me gusta desde la propia publicación.',
'존재하는 게시판이 아닙니다.' => 'El foro no existe.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'No puede indicar Me gusta o No me gusta en su propia publicación.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Este foro no utiliza la función Me gusta.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Este foro no utiliza la función No me gusta.',
'추천' => 'Me gusta',
'비추천' => 'No me gusta',
'이미 {1} 하신 글 입니다.' => 'Ya ha marcado {1} en esta publicación.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Ya ha reaccionado a esta publicación.',
'이 글을 {1} 하셨습니다.' => 'Ha marcado {1} en esta publicación.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'El grupo {1} solo está disponible en móvil.',

// bbs/link.php
'링크' => 'Enlace',
'링크가 없습니다.' => 'No hay enlace.',

// bbs/list.php
'전체' => 'Todo',
'열린 분류' => 'Categoría abierta',
'이전검색' => 'Búsqueda anterior',
'다음검색' => 'Búsqueda siguiente',

// bbs/login.php
'로그인' => 'Iniciar sesión',

// bbs/login_check.php
'로그인 검사' => 'Comprobación de inicio de sesión',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'El usuario y la contraseña no pueden estar vacíos.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'El usuario no existe o la contraseña es incorrecta.\\nLa contraseña distingue entre mayúsculas y minúsculas.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Su usuario está bloqueado.\\nFecha de bloqueo: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'No puede acceder porque la cuenta se ha dado de baja.\\nFecha de baja: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Debe verificar su correo {1} para iniciar sesión. Si desea cambiar a otra dirección de correo y verificarla, haga clic en Cancelar.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Si la carpeta data no tiene permisos de escritura o no queda espacio en disco,\\nes posible que no pueda iniciar sesión. Compruebe el espacio y los permisos de escritura.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'La URL contiene un valor no válido.',
'url에 도메인을 지정할 수 없습니다.' => 'No se puede indicar un dominio en la URL.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'La verificación de identidad no está disponible. Contacte con el administrador.',
'본인인증을 다시 해주세요.' => 'Vuelva a verificar su identidad.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Inicie sesión para continuar.',
'w 값이 제대로 넘어오지 않았습니다.' => 'No se ha recibido correctamente el valor w.',
'잘못된 접근입니다' => 'Acceso no válido',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Falta el usuario. Utilice el procedimiento correcto.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Ya existe una cuenta con los datos de identidad indicados.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Los datos de identidad verificados no coinciden con los datos introducidos. Inténtelo de nuevo.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Solo los miembros que han iniciado sesión pueden acceder.',
'회원 비밀번호 확인' => 'Confirmar contraseña',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Solo los miembros pueden acceder.',
'최고 관리자는 탈퇴할 수 없습니다' => 'El superadministrador no puede darse de baja.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'No se ha podido procesar la baja. Compruebe el estado del miembro.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} se dio de baja el {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'Mis mensajes',
'kind 변수 값이 올바르지 않습니다.' => 'El valor de kind no es válido.',
'받은' => 'Recibido',
'보낸' => 'Enviado',
'정보없음' => 'Sin información',
'아직 읽지 않음' => 'Aún no leído',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'No puede enviar mensajes a otros si su perfil no es público. Puede cambiarlo en Editar perfil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'La información del miembro no existe.\\n\\nEs posible que se haya dado de baja.',
'쪽지 보내기' => 'Enviar mensaje',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'El usuario \'{1}\' no existe (o no tiene perfil público), o pertenece a un miembro dado de baja o bloqueado.\\nNo se ha enviado el mensaje.',
'해당 회원이 존재하지 않습니다.' => 'El miembro no existe.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'No tiene puntos suficientes ({1} puntos) para enviar el mensaje.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Mensaje enviado a {1}.',
'회원아이디 오류 같습니다.' => 'El usuario parece incorrecto.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Envíe el valor {1}.',
'{1} 쪽지 보기' => 'Ver mensaje – {1}',

// bbs/move.php
'이동' => 'Mover',
'복사' => 'Copiar',
'sw 값이 제대로 넘어오지 않았습니다.' => 'No se ha recibido correctamente el valor sw.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Solo pueden acceder administradores de foro o superiores.',
'게시물 {1}' => 'Publicación: {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => '{1}: seleccione al menos un foro.',
'현재 페이지 게시판 전체' => 'Todos los foros de esta página',
'게시판' => 'Foros',
'현재' => 'Actual',
'창닫기' => 'Cerrar ventana',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => '{1}: seleccione al menos un foro de destino para la publicación.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1}: la publicación se ha transferido a los foros seleccionados.',

// bbs/new.php
'새글' => 'Nuevas publicaciones',
'그룹' => 'Grupo',
'전체그룹' => 'Todos los grupos',
'[코] ' => '[Com.] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Solo puede acceder el superadministrador.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Aviso emergente',
'{1}시간 동안 다시 열람하지 않습니다.' => 'No volver a mostrar durante {1} horas.',
'닫기' => 'Cerrar',
'팝업레이어 알림이 없습니다.' => 'No hay avisos emergentes.',

// bbs/password.php
'비밀번호 입력' => 'Introducir contraseña',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Ya ha iniciado sesión.',
'회원정보 찾기' => 'Recuperar datos de la cuenta',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Error en la dirección de correo.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Se ha enviado a {1} un correo para verificar su usuario y contraseña.\\n\\nRevise su correo.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Recuperación de los datos de su cuenta',
'회원정보 찾기 안내' => 'Recuperación de datos de la cuenta',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) solicitó recuperar los datos de su cuenta el {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Como ni siquiera los administradores pueden conocer su contraseña, en lugar de comunicársela le enviamos una contraseña nueva.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Consulte abajo la nueva contraseña y <span style="color:#ff3061">haga clic en el enlace <strong>Cambiar contraseña</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Cuando aparezca el mensaje de que la contraseña se ha cambiado, inicie sesión en el sitio con su usuario y la nueva contraseña.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Después de iniciar sesión, cambie la contraseña por una nueva en Editar perfil.',
'회원아이디' => 'Usuario',
'변경될 비밀번호' => 'Nueva contraseña',
'비밀번호 변경' => 'Cambiar contraseña',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'La contraseña se ha cambiado.\\n\\nInicie sesión con su usuario y la nueva contraseña.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'No se pueden recuperar el usuario y la contraseña mediante verificación de identidad. Contacte con el administrador.',
'패스워드 변경' => 'Cambiar contraseña',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'No se ha recibido la contraseña.',
'비밀번호가 일치하지 않습니다.' => 'Las contraseñas no coinciden.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Solo los miembros pueden consultarlo.',
'{1} 님의 포인트 내역' => 'Historial de puntos de {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'No se ha recibido correctamente el valor po_id.',
'기타의견이 비활성화되어 있습니다.' => 'Los comentarios adicionales están desactivados.',
'권한이 없습니다.' => 'No tiene permiso.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'La encuesta no existe.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Solo los miembros de nivel {1} o superior pueden ver los resultados.',
'설문조사 결과' => 'Resultados de la encuesta',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Solo los miembros de nivel {1} o superior pueden votar.',
'항목을 선택하세요.' => 'Seleccione una opción.',
'{1}에 이미 참여하셨습니다.' => 'Ya ha participado en {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'No puede consultar la información de otros si su perfil no es público.\\n\\nPuede cambiarlo en Editar perfil.',
'{1}님의 자기소개' => 'Presentación de {1}',
'소개 내용이 없습니다.' => 'No hay presentación.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Si es miembro, inicie sesión para continuar.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Seleccione al menos una publicación para eliminar.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Si es miembro, inicie sesión e inténtelo de nuevo.',
'열린 분류 ' => 'Categoría abierta ',
'{1}이 존재하지 않습니다.' => '{1} no existe.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'La publicación no existe.\\nSe ha eliminado o no es suya.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'No se puede editar una consulta que ya tiene respuesta.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'No tiene permiso para editar la publicación.\\n\\nUtilice el procedimiento correcto.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Configure las categorías en la configuración de consultas 1:1.',
'{1} 바이트' => '{1} bytes',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Indique una categoría válida.',
'이메일을 입력하세요.' => 'Introduzca su correo electrónico.',
'<strong>제목</strong>을 입력하세요.' => 'Introduzca un <strong>asunto</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Introduzca el <strong>contenido</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'El contenido incluye numerosos códigos no válidos.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'El archivo o el contenido supera el límite configurado en el servidor.\\npost_max_size={1} , upload_max_filesize={2}\\nContacte con el administrador del foro o del servidor.',
'답변은 관리자만 등록할 수 있습니다.' => 'Solo los administradores pueden responder.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'No se puede responder porque la consulta no existe.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'No se puede responder a una respuesta.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Suba como máximo 2 archivos adjuntos.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'No se puede subir el archivo «{1}» porque supera el límite del servidor ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'El archivo «{1}» no se ha subido correctamente.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'No se sube el archivo «{1}» ({2} bytes) porque supera el límite del foro ({3} bytes).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'No se puede guardar de forma segura el archivo «{1}». Compruebe la fuente de números aleatorios y la ruta de almacenamiento del servidor.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} – aviso de respuesta',

// bbs/register.php
'회원가입약관' => 'Condiciones de uso',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Cambiar el correo de verificación',
'이미 메일인증 하신 회원입니다.' => 'Su correo electrónico ya está verificado.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Si no ha recibido el correo de verificación, puede cambiar la dirección de correo de su cuenta.',
'사이트 이용정보 입력' => 'Información de la cuenta',
'필수' => 'Obligatorio',
'자동등록방지' => 'Antispam',
'인증메일변경' => 'Cambiar correo de verificación',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'El correo {1} ya está en uso.\\n\\nIntroduzca otra dirección de correo.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Correo de verificación',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Se ha reenviado el correo de verificación a {1}.\\n\\nRevise el correo {1} en unos momentos.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Debe aceptar las condiciones de uso para registrarse.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Debe aceptar la recogida y el uso de datos personales para registrarse.',
'회원 가입' => 'Registrarse',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'La información del administrador debe editarse desde el panel de administración.',
'로그인 후 이용하여 주십시오.' => 'Inicie sesión para continuar.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'El miembro conectado no coincide con la información recibida.',
'비밀번호를 입력해 주세요.' => 'Introduzca su contraseña.',
'회원 정보 수정' => 'Editar información de la cuenta',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Esta acción no está disponible en la demostración.',
'이름을 올바르게 입력해 주십시오.' => 'Introduzca un nombre válido.',
'닉네임을 올바르게 입력해 주십시오.' => 'Introduzca un apodo válido.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Se requiere verificación de identidad para registrarse.',
'추천인이 존재하지 않습니다.' => 'El usuario recomendante no existe.',
'본인을 추천할 수 없습니다.' => 'No puede recomendarse a sí mismo.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Bienvenido/a, su registro se ha completado',
'로그인 되어 있지 않습니다.' => 'No ha iniciado sesión.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'No se puede modificar porque la información no coincide con la cuenta conectada.\\nSi está utilizando un método no autorizado, deténgase de inmediato.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Suba un icono de miembro de {1} bytes como máximo.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} no es un archivo de imagen.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Suba una imagen de miembro de {1} bytes como máximo.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} no es un archivo gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Sus datos se han actualizado.\\n\\nComo ha cambiado su correo electrónico, debe verificarlo de nuevo.',
'회원정보수정' => 'Editar perfil',
'회원 정보가 수정 되었습니다.' => 'Sus datos se han actualizado.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Correo de bienvenida',
'회원가입을 축하합니다.' => 'Bienvenido/a, su registro se ha completado.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Le damos una cordial bienvenida, <b>{1}</b>.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Haremos todo lo posible por corresponder a su confianza.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Haga clic en <strong>Verificar correo</strong> a continuación para completar el registro.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'El enlace es válido durante {1} minutos desde el envío.',
'감사합니다.' => 'Gracias.',
'메일인증' => 'Verificar correo',
'사이트바로가기' => 'Ir al sitio',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Correo de verificación',
'회원 인증 메일입니다.' => 'Este es un correo de verificación para miembros.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Se ha cambiado el correo electrónico de <b>{1}</b>.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Haga clic en la dirección siguiente para completar la verificación.',
'{1} 로그인' => 'Inicio de sesión de {1}',

// bbs/register_result.php
'회원가입 완료' => 'Registro completado',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'El RSS solo está disponible para foros que pueden leer los visitantes.',
'RSS 보기가 금지되어 있습니다.' => 'El RSS está desactivado.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Publicaciones guardadas de {1}',
'[게시판 없음]' => '[Sin foro]',
'[글 없음]' => '[Sin publicación]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Solo los miembros pueden acceder.',
'로그인하기' => 'Iniciar sesión',
'올바른 방법으로 사용해 주십시오.' => 'Utilice el procedimiento correcto.',
'코멘트는 스크랩 할 수 없습니다.' => 'Los comentarios no se pueden guardar.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Ya ha guardado esta publicación.

¿Desea ver sus publicaciones guardadas ahora?',
'이미 스크랩하신 글 입니다.' => 'Ya ha guardado esta publicación.',
'스크랩 확인하기' => 'Ver publicaciones guardadas',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'La publicación que desea guardar no existe.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'No puede publicar tan seguido.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Se ha guardado la publicación.

¿Desea ver sus publicaciones guardadas ahora?',
'이 글을 스크랩 하였습니다.' => 'Se ha guardado la publicación.',

// bbs/search.php
'전체검색 결과' => 'Resultados de búsqueda',
'[비밀글 입니다.]' => '[Publicación secreta]',
'게시판 그룹선택' => 'Seleccionar grupo de foros',
'전체 분류' => 'Todas las categorías',

// bbs/view_comment.php
'비밀글 입니다.' => 'Es una publicación secreta.',
'댓글내용 확인' => 'Ver comentario',

// bbs/view_image.php
'이미지 크게보기' => 'Ampliar imagen',
'이미지 확장자가 아닙니다.' => 'No es una extensión de imagen.',
'이미지 파일이 아닙니다.' => 'No es un archivo de imagen.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'No se ha recibido el valor bo_table.\\nEnvíelo con el formato write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'La publicación no existe.\\nEs posible que se haya eliminado o movido.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => '\\$wr_id no se utiliza al escribir una publicación.',
'글을 쓸 권한이 없습니다.' => 'No tiene permiso para escribir.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para escribir.\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'No tiene puntos suficientes ({1}) para escribir ({2}).\\n\\nAcumule más puntos e inténtelo de nuevo.',
'글쓰기' => 'Escribir',
'글을 수정할 권한이 없습니다.' => 'No tiene permiso para editar la publicación.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para editar la publicación.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'No se puede editar la publicación porque tiene respuestas.\\n\\nNo se pueden editar publicaciones con respuestas.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'No se puede editar la publicación porque tiene comentarios.\\n\\nNo se pueden editar publicaciones con {1} o más comentarios.',
'글수정' => 'Editar publicación',
'글을 답변할 권한이 없습니다.' => 'No tiene permiso para responder a la publicación.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para escribir respuestas.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'No tiene puntos suficientes ({1}) para responder ({2}).\\n\\nAcumule más puntos e inténtelo de nuevo.',
'공지에는 답변 할 수 없습니다.' => 'No se puede responder a un aviso.',
'정상적인 접근이 아닙니다.' => 'Acceso no válido.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Solo el autor o un administrador pueden responder a una publicación secreta.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'No se puede responder a publicaciones secretas de visitantes.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'No puede responder más.\\n\\nSolo se permiten respuestas hasta 10 niveles.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'No puede responder más.\\n\\nSolo se permiten hasta 26 respuestas.',
'글답변' => 'Responder publicación',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene acceso.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'No tiene acceso para escribir.\\n\\nSi tiene alguna pregunta, contacte con el administrador.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Solo los miembros con identidad verificada pueden escribir en este foro.\\n\\nSi es miembro, inicie sesión e inténtelo de nuevo.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Solo los miembros con identidad verificada pueden escribir en este foro.\\n\\nVerifique su identidad en Editar perfil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'El nombre es obligatorio.',
'댓글을 쓸 권한이 없습니다.' => 'No tiene permiso para comentar.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'La publicación no existe.\\nEs posible que se haya eliminado o movido.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'No tiene puntos suficientes ({1}) para comentar ({2}).\\n\\nAcumule más puntos y vuelva a comentar.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'El comentario al que responde no existe.\\n\\nEs posible que se haya eliminado mientras escribía.',
'댓글을 등록할 수 없습니다.' => 'No se puede guardar el comentario.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'No puede responder más.\\n\\nSolo se permiten respuestas hasta 5 niveles.',
'원글
{1}


댓글
{2}' => 'Publicación original
{1}


Comentario
{2}',
'입력' => 'Nueva',
'수정' => 'Editar',
'답변' => 'Responder',
'댓글 ' => 'Comentario ',
'댓글 수정' => 'Edición de comentario',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Nueva publicación en el foro {2} ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'No se puede editar porque el comentario es de un miembro con nivel superior al del administrador del grupo.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'No puede editar el comentario porque el foro no pertenece a un grupo que usted administre.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'No se puede editar porque el comentario es de un miembro con nivel superior al del administrador del foro.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'No puede editar el comentario porque no administra este foro.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'No puede editar porque no es su publicación.',
'댓글을 수정할 권한이 없습니다.' => 'No tiene permiso para editar el comentario.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'No se puede editar el comentario porque tiene respuestas.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'La información del foro no es válida.',

// bbs/write_update.php
'게시글 저장' => 'Guardar publicación',
'<strong>분류</strong>를 선택하세요.' => 'Seleccione una <strong>categoría</strong>.',
'분류를 올바르게 입력하세요.' => 'Introduzca una categoría válida.',
'올바른 방법으로 수정하여 주십시오.' => 'Edite siguiendo el procedimiento correcto.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'No puede editar porque el foro no pertenece a un grupo que usted administre.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'No puede editar publicaciones de miembros con un nivel superior al suyo.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'No puede editar porque no administra este foro.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Compruebe la contraseña y vuelva a editar.',
'로그인 후 수정하세요.' => 'Inicie sesión para editar.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Este foro no permite publicaciones secretas.',
'관리자만 공지할 수 있습니다.' => 'Solo los administradores pueden publicar avisos.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'No puede responder más.\\nSolo se permiten respuestas hasta 10 niveles.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'No puede responder más.\\nSolo se permiten hasta 26 respuestas.',
'제목을 입력하여 주십시오.' => 'Introduzca un asunto.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Elimine los archivos existentes y suba como máximo {1} archivos adjuntos.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Suba como máximo {1} archivos adjuntos.',
'코멘트' => 'Comentario',
'코멘트 수정' => 'Edición de comentario',

// bbs/write_update_mail.php
'{1} 메일' => 'Correo de {1}',
'작성자 {1}' => 'Autor: {1}',
'사이트에서 게시물 확인하기' => 'Ver la publicación en el sitio',

// common.php
'접근이 가능하지 않습니다.' => 'No es posible acceder.',
'접근 불가합니다.' => 'Acceso denegado.',

// head.php
'본문 바로가기' => 'Ir al contenido',
'커뮤니티' => 'Comunidad',
'쇼핑몰' => 'Tienda',
'접속자' => 'Visitantes',
'사이트 내 전체검색' => 'Buscar en el sitio',
'검색어 필수' => 'Término de búsqueda (obligatorio)',
'검색어를 입력해주세요' => 'Introduzca un término de búsqueda',
'검색' => 'Buscar',
'검색어는 두글자 이상 입력하십시오.' => 'Introduzca al menos dos caracteres.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Para una búsqueda más rápida, solo se permite un espacio en el término de búsqueda.',
'정보수정' => 'Editar perfil',
'로그아웃' => 'Cerrar sesión',
'회원가입' => 'Registrarse',
'메인메뉴' => 'Menú principal',
'전체메뉴' => 'Todos los menús',
'전체메뉴열기' => 'Abrir todos los menús',
'하위분류' => 'Submenú',
'메뉴 준비 중입니다.' => 'El menú está en preparación.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} ha iniciado sesión ',

// lib/common.lib.php
'처음' => 'Primera',
'이전' => 'Anterior',
'페이지' => 'Página',
'열린' => 'Actual',
'다음' => 'Siguiente',
'맨끝' => 'Última',
'답변글' => 'Respuesta',
'{1} 자기소개' => 'Presentación de {1}',
'{1} 이름으로 검색' => 'Buscar por el nombre {1}',
'쪽지보내기' => 'Enviar mensaje',
'홈페이지' => 'Sitio web',
'자기소개' => 'Sobre mí',
'아이디로 검색' => 'Buscar por usuario',
'이름으로 검색' => 'Buscar por nombre',
'전체게시물' => 'Todas las publicaciones',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Hay un error en los datos de MySQL Host, User, Password o DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL no está instalado, por lo que no se puede usar la función mysql_connect.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Hay un error en los datos de MySQL Host, User o Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Se ha producido un error al procesar la base de datos.',
'yoil|일' => 'dom',
'yoil|월' => 'lun',
'yoil|화' => 'mar',
'yoil|수' => 'mié',
'yoil|목' => 'jue',
'yoil|금' => 'vie',
'yoil|토' => 'sáb',
'요일' => '.',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'El token ha caducado. Actualice la página.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'No se ha configurado la dirección del sitio para la verificación de correo. Contacte con el administrador del sitio.',
'올바른 경로로 접근해 주십시오.' => 'Acceda por la ruta correcta.',
'PC 전용 게시판입니다.' => 'Este foro es solo para PC.',
'모바일 전용 게시판입니다.' => 'Este foro es solo para móvil.',
'간편인증' => 'Verificación simplificada',
'휴대폰' => 'Móvil',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Hoy ({1}) ya ha usado la verificación de identidad {2} veces y no puede usarla más.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'No se puede usar porque no es posible ejecutar la función exec.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'El número de variables enviadas desde el formulario supera max_input_vars.\\nAlgunos valores pueden perderse al guardarse en la base de datos.\\n\\nPara resolverlo, cambie el valor de max_input_vars en el php.ini del servidor.',
'url에 타 도메인을 지정할 수 없습니다.' => 'No se puede indicar otro dominio en la URL.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Acceso denegado porque la URL contiene información de usuario.',
'bot 으로 판단되어 중지합니다.' => 'Detenido porque la solicitud se ha identificado como un bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Introduzca el contenido.',

// lib/get_data.lib.php
'제목' => 'Asunto',
'내용' => 'Contenido',
'제목+내용' => 'Asunto+Contenido',
'글쓴이' => 'Autor',
'글쓴이(코)' => 'Autor (com.)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Introduzca un usuario.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'El usuario solo puede contener letras, números y _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'El usuario debe tener al menos 3 caracteres.',
'이미 사용중인 회원아이디 입니다.' => 'El usuario ya está en uso.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'El usuario es una palabra reservada y no se puede usar.',
'닉네임을 입력해 주십시오.' => 'Introduzca un apodo.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'El apodo solo puede contener letras coreanas, letras latinas y números, sin espacios.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'El apodo debe tener al menos 2 caracteres coreanos o 4 latinos.',
'이미 존재하는 닉네임입니다.' => 'El apodo ya existe.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'El apodo es una palabra reservada y no se puede usar.',
'E-mail 주소를 입력해 주십시오.' => 'Introduzca una dirección de correo electrónico.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'El formato de la dirección de correo no es válido.',
'{1} 메일은 사용할 수 없습니다.' => 'No se puede usar el correo {1}.',
'이미 사용중인 E-mail 주소입니다.' => 'La dirección de correo ya está en uso.',
'이름을 입력해 주십시오.' => 'Introduzca un nombre.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'El nombre solo puede contener caracteres coreanos, sin espacios.',
'휴대폰번호를 입력해 주십시오.' => 'Introduzca un número de móvil.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Introduzca un número de móvil válido.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' El número de móvil ya está en uso. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Solicitud no válida.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Verificación no válida. Utilice el procedimiento correcto.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'No hay ninguna cuenta con los datos verificados.',
'코드 : {1}  {2}' => 'Código: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Resultado de la verificación simplificada de KG Inicis',
'본인인증이 완료되었습니다.' => 'Se ha completado la verificación de identidad.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Verificación simplificada de KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Esta cuenta ya está verificada a nombre de otra persona.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Ya existe una cuenta con los datos de identidad indicados.\\nUsuario: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Escuchar los números',
'새로고침' => 'Actualizar',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Introduzca los números antispam en orden.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Resultado de la verificación por móvil',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Riesgo de manipulación de dn_hash (compruebe que el archivo {1} tenga permisos de ejecución.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Ha cancelado la verificación por móvil.',
'up_hash 변조 위험있음' => 'Riesgo de manipulación de up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'No hay código de sitio de KCP para la verificación por móvil. Introduzca el código de sitio de KCP en Administración > Configuración básica.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Ya existe una cuenta con los datos de identidad indicados.\\nUsuario: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Verificado con su propio número de móvil.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'No hay respuesta de la verificación de identidad. Vuelva a empezar desde el principio.',
'코드 : {1} {2}' => 'Código: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'La sesión de verificación de identidad ha caducado. Vuelva a empezar desde el principio.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Error al consultar el resultado de la verificación ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'El módulo de verificación por móvil KCP V2 requiere PHP 7.0 o superior.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Las extensiones de PHP (openssl/curl/hash_pbkdf2) necesarias para el módulo de verificación por móvil KCP V2 no están activadas.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'No se ha configurado el código de sitio o ENC_KEY de la verificación por móvil KCP V2.\\nIntrodúzcalos en Administración > Configuración básica.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Error al registrar la transacción de verificación.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verificación por móvil',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'No se pueden generar los datos de registro de transacción de KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'No se pueden cifrar los datos de registro de transacción de KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'No hay respuesta de la API de registro de transacciones de KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'No se puede interpretar la respuesta de la API de registro de transacciones de KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'No se pueden generar los datos de consulta del resultado de verificación de KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'No hay respuesta de la API de resultados de verificación de KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'No se puede interpretar la respuesta de la API de resultados de verificación de KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'No se pueden descifrar los datos del resultado de verificación de KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'No se pueden interpretar los datos descifrados de verificación de KCP.',
'cURL 초기화에 실패했습니다.' => 'Error al inicializar cURL.',
'KCP API 통신 실패: {1}' => 'Error de comunicación con la API de KCP: {1}',
'KCP API HTTP 오류: {1}' => 'Error HTTP de la API de KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Se ha producido un error en la verificación por móvil. Código de error: {1}\\n\\nPara consultas, contacte con el servicio de atención al cliente de Korea Credit Bureau (KCB) en el 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Es necesario comprobar los valores introducidos',
'KCB 휴대폰 본인확인' => 'Verificación por móvil de KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Se ha producido un error en la verificación i-PIN. Código de error: {1}\\n\\nPara consultas, contacte con el servicio de atención al cliente de Korea Credit Bureau (KCB) en el 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Se ha producido un error en la verificación i-PIN (sin información CI). Código de error: {1}\\n\\nPara consultas, contacte con el servicio de atención al cliente de Korea Credit Bureau (KCB) en el 02-708-1000.',
'KCB 아이핀 본인확인' => 'Verificación i-PIN de KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Seleccione el servicio de verificación por móvil de KCB en la configuración básica.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Introduzca el ID de miembro de KCB en la configuración básica.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'El archivo ejecutable del módulo no existe.\\n\\nEl archivo {1} debe estar en {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'El archivo ejecutable del módulo no tiene permisos de ejecución.\\n\\nConceda permisos de ejecución, por ejemplo con chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'El archivo ejecutable del módulo no tiene permisos de ejecución.\\n\\nCompruebe que IUSER tenga permisos de ejecución sobre cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Seleccione el servicio de verificación i-PIN de KCB en la configuración básica.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Cree el directorio key en {1}/{2}.\\n\\nDespués, conceda permisos de escritura. Ej.: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Cambie los permisos del directorio {1}/{2}/key a 705.\\nchmod 705 key o chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Cambie los permisos del directorio {1}/{2}/key a 707.\\n\\nchmod 707 key o chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback de Twitter',
'트위터에 승인이 되었습니다.' => 'Autorizado por Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'No autorizado por Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Ver más',
'페이스북으로 공유' => 'Compartir en Facebook',
'페이스북 공유' => 'Compartir en Facebook',
'트위터로  공유' => 'Compartir en Twitter',
'트위터 공유' => 'Compartir en Twitter',
'카카오톡으로 보내기' => 'Enviar por KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Publicado también en Facebook',
'트위터에도 등록됨' => 'Publicado también en Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Publicar también en Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Inicio de sesión social - {1}',
'잠시후에 다시 시도해 주세요.' => 'Inténtelo de nuevo en unos momentos.',
'홈으로' => 'Ir al inicio',
'이 페이지 닫기' => 'Cerrar esta página',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'No puede volver a registrarse porque este ID de {1} ya está vinculado o registrado. Si es miembro, inicie sesión y vincule la cuenta en Editar perfil.',
'지정되지 않은 오류입니다.' => 'Error no especificado.',
'설정 오류입니다.' => 'Error de configuración.',
'해당 provider 설정 오류입니다.' => 'Error de configuración de este proveedor.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Proveedor desconocido o desactivado.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'No tiene permiso para acceder a este servicio.',
'인증이 실패되었습니다.. ' => 'Error de autenticación.. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'El usuario canceló la autenticación o el proveedor rechazó la conexión.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Error al solicitar el perfil del usuario. Es posible que el usuario no esté conectado al servicio. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'En ese caso, debe volver a solicitar la autenticación.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'El usuario no está conectado al servicio.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'El servicio no admite esta función.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Ya ha iniciado sesión o la solicitud no es válida.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Ya hay un ID vinculado o la solicitud no es válida.',
'소셜 데이터 오류' => 'Error en los datos sociales',
'SNS 사용자 인증에 실패하였습니다.' => 'Error en la autenticación del usuario de la red social.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Esta cuenta ya está vinculada a un ID de {1}. Desvincúlelo e inténtelo de nuevo.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Conectando con {1}. Espere un momento.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'No se utiliza el inicio de sesión social.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'El inicio de sesión social está desactivado.',
'새창 옵션이 비활성화 되어 있습니다.' => 'La opción de ventana nueva está desactivada.',
'서비스 이름이 넘어오지 않았습니다.' => 'No se ha recibido el nombre del servicio.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'No se utiliza el inicio de sesión social.',
'이미 회원가입 하였습니다.' => 'Ya se ha registrado.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Solo pueden acceder quienes hayan iniciado sesión con una red social.',
'소셜 회원 가입 - {1}' => 'Registro social - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Solo pueden acceder quienes hayan iniciado sesión con una red social.',
'이미 등록된 회원이 존재합니다.' => 'Ya existe un miembro registrado.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Los datos de identidad verificados no coinciden con sus datos personales. Inténtelo de nuevo.',
'회원 가입 오류!' => '¡Error en el registro!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'No es miembro o no se ha recibido el valor.',
'권한이 없거나 잘못된 요청입니다.' => 'No tiene permiso o la solicitud no es válida.',
);
