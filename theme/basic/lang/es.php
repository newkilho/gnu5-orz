<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (es). 틀은 php lang/build.php es 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'Ir al contenido',
'커뮤니티' => 'Comunidad',
'쇼핑몰' => 'Tienda',
'새글' => 'Nuevas publicaciones',
'접속자' => 'Visitantes',
'사이트 내 전체검색' => 'Buscar en el sitio',
'검색어 필수' => 'Término de búsqueda (obligatorio)',
'검색어를 입력해주세요' => 'Introduzca un término de búsqueda',
'검색' => 'Buscar',
'검색어는 두글자 이상 입력하십시오.' => 'Introduzca al menos dos caracteres.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Para una búsqueda más rápida, solo se permite un espacio en el término de búsqueda.',
'정보수정' => 'Editar perfil',
'로그아웃' => 'Cerrar sesión',
'관리자' => 'Administración',
'회원가입' => 'Registrarse',
'로그인' => 'Iniciar sesión',
'메인메뉴' => 'Menú principal',
'전체메뉴' => 'Todos los menús',
'전체메뉴열기' => 'Abrir todos los menús',
'하위분류' => 'Submenú',
'메뉴 준비 중입니다.' => 'El menú está en preparación.',
'{1}에서 설정하실 수 있습니다.' => 'Puede configurarlo en {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Administración &gt; Configuración &gt; Menús',

// theme/basic/index.php
'최신글' => 'Últimas publicaciones',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'El grupo {1} solo es accesible desde un PC.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Abrir menú',
'메뉴 닫기' => 'Cerrar menú',
'{1}에서 설정하세요.' => 'Configúrelo en {1}.',
'1:1문의' => 'Consulta 1:1',
'사용자메뉴' => 'Menú de usuario',
'기본' => 'Normal',
'크게' => 'Grande',
'더크게' => 'Más grande',
'열기' => 'Abrir',
'닫기' => 'Cerrar',
'뒤로가기' => 'Volver',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Opciones de la lista',
'선택삭제' => 'Eliminar seleccionados',
'선택복사' => 'Copiar seleccionados',
'선택이동' => 'Mover seleccionados',
'글쓰기' => 'Escribir',
'카테고리' => 'Categoría',
'현재 페이지 게시물' => 'Publicaciones de esta página',
'전체선택' => 'Seleccionar todo',
'공지' => 'Aviso',
'댓글' => 'Comentarios',
'개' => ' ',
'작성자' => 'Autor',
'회' => ' visitas',
'추천' => 'Me gusta',
'비추천' => 'No me gusta',
'게시물이 없습니다.' => 'No hay publicaciones.',
'자바스크립트를 사용하지 않는 경우' => 'Si JavaScript está desactivado,',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'los elementos seleccionados se eliminan inmediatamente sin confirmación; tenga cuidado.',
'전체 {1}건' => 'Total {1}',
'페이지' => 'Página',
'게시물 검색' => 'Buscar publicaciones',
'검색대상' => 'Buscar en',
'검색어를 입력하세요' => 'Introduzca un término de búsqueda',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Seleccione al menos una publicación.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => '¿Seguro que desea eliminar las publicaciones seleccionadas?

Los datos eliminados no se pueden recuperar.

Si una publicación seleccionada tiene respuestas,
también debe seleccionar las respuestas para eliminarla.',
'복사' => 'Copiar',
'이동' => 'Mover',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Compartir',
'스크랩' => 'Guardar',
'답변' => 'Responder',
'수정' => 'Editar',
'삭제' => 'Eliminar',
'목록' => 'Lista',
'페이지 정보' => 'Información',
'작성일' => 'Fecha',
'조회' => 'Visitas',
'본문' => 'Contenido',
'이 글을 추천하셨습니다' => 'Le ha gustado esta publicación',
'첨부파일' => 'Archivos adjuntos',
'{1}회 다운로드' => '{1} descargas',
'관련링크' => 'Enlaces relacionados',
'{1}회 연결' => '{1} clics',
'이전글' => 'Publicación anterior',
'다음글' => 'Publicación siguiente',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'No tiene permiso para descargar.
Si es miembro, inicie sesión e inténtelo de nuevo.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Al descargar este archivo se descontarán {1} puntos.

Los puntos se descuentan solo una vez por publicación y no se volverán a descontar si lo descarga más tarde.

¿Desea descargarlo?',
'이 글을 비추천하셨습니다.' => 'No le ha gustado esta publicación.',
'이 글을 추천하셨습니다.' => 'Le ha gustado esta publicación.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Lista de comentarios',
'{1}님의 댓글' => 'Comentario de {1}',
'의 댓글' => ' (respuesta)',
'아이피' => 'IP',
'댓글 옵션' => 'Opciones del comentario',
'비밀글' => 'Secreto',
'등록된 댓글이 없습니다.' => 'Aún no hay comentarios.',
'댓글쓰기' => 'Escribir un comentario',
'글자' => ' caracteres',
'댓글 내용' => 'Comentario',
'댓글내용을 입력해주세요' => 'Escriba su comentario',
'이름' => 'Nombre',
'필수' => 'Obligatorio',
'비밀번호' => 'Contraseña',
'SNS 동시등록' => 'Publicar también en redes sociales',
'댓글등록' => 'Publicar comentario',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'El contenido contiene una palabra prohibida (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Los comentarios deben tener al menos {1} caracteres.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Los comentarios deben tener como máximo {1} caracteres.',
'댓글을 입력하여 주십시오.' => 'Escriba un comentario.',
'이름이 입력되지 않았습니다.' => 'Introduzca su nombre.',
'비밀번호가 입력되지 않았습니다.' => 'Introduzca una contraseña.',
'이 댓글을 삭제하시겠습니까?' => '¿Eliminar este comentario?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Recibir respuestas por correo',
'분류' => 'Categoría',
'선택하세요' => 'Seleccionar',
'이메일' => 'Correo electrónico',
'홈페이지' => 'Sitio web',
'옵션' => 'Opciones',
'제목' => 'Asunto',
'내용' => 'Contenido',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Las publicaciones de este foro deben tener entre {1} y {2} caracteres.',
'링크 #{1}' => 'Enlace n.º {1}',
'링크를 입력하세요' => 'Introduzca un enlace',
'파일을 첨부하세요' => 'Adjunte un archivo',
'파일 #{1}' => 'Archivo n.º {1}',
'파일첨부' => 'Adjuntar archivo',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Adjunto {1}: máx. {2}',
'파일 설명을 입력해주세요.' => 'Introduzca una descripción del archivo.',
'파일 삭제' => 'Eliminar archivo',
'자동등록방지' => 'Antispam',
'취소' => 'Cancelar',
'작성완료' => 'Enviar',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => '¿Usar saltos de línea automáticos?

Esta función convierte los saltos de línea de la publicación en etiquetas <br>.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'El asunto contiene una palabra prohibida (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'El contenido debe tener al menos {1} caracteres.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'El contenido debe tener como máximo {1} caracteres.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Lista de imágenes',
'열람중' => 'Viendo',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'No hay nadie conectado.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Término de búsqueda',
'자주하시는질문 분류' => 'Categorías de las preguntas frecuentes',
'열린 분류' => 'Categoría abierta',
'검색된 게시물이 없습니다.' => 'No se encontraron resultados.',
'등록된 FAQ가 없습니다.' => 'Aún no hay preguntas frecuentes.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Para añadir preguntas frecuentes, utilice la gestión de FAQ',
'메뉴를 이용하십시오.' => 'del panel de administración.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Página anterior',
'다음페이지' => 'Página siguiente',
'전체보기' => 'Ver todo',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Últimos comentarios',
'더보기' => 'Más',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Aviso',
'동의합니다' => 'Acepto',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Enviar correo a {1}',
'메일쓰기' => 'Redactar correo',
'형식' => 'Formato',
'첨부 파일 1' => 'Adjunto 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Los adjuntos pueden perderse; compruebe después del envío que el archivo se adjuntó.',
'첨부 파일 2' => 'Adjunto 2',
'메일발송' => 'Enviar correo',
'창닫기' => 'Cerrar ventana',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Los adjuntos grandes tardan más en enviarse.

No cierre ni actualice la ventana hasta que se haya enviado el correo.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Usuario',
'자동로그인' => 'Mantener la sesión iniciada',
'회원로그인 안내' => 'Acceso de miembros',
'아이디/비밀번호 찾기' => 'Recuperar usuario/contraseña',
'회원 가입' => 'Registrarse',
'비회원 구매' => 'Compra como invitado',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Los pedidos como invitado no acumulan puntos.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'He leído y acepto la recogida de datos personales.',
'비회원으로 구매하기' => 'Comprar como invitado',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Debe leer y aceptar la recogida de datos personales.',
'비회원 주문조회' => 'Consultar pedido de invitado',
'주문번호' => 'Número de pedido',
'확인' => 'Aceptar',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Introduzca el {1} del correo del pedido y la {2} que indicó al hacer el pedido.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Con el inicio de sesión automático no tendrá que introducir su usuario y contraseña la próxima vez.

Evite usarlo en ordenadores públicos, ya que sus datos personales podrían quedar expuestos.

¿Usar el inicio de sesión automático?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Obligatorio) Política de privacidad adicional',
'추가 개인정보처리방침 안내' => 'Política de privacidad adicional',
'목적' => 'Finalidad',
'항목' => 'Datos',
'보유기간' => 'Plazo de conservación',
'이용자 식별 및 본인여부 확인' => 'Identificación del usuario y verificación de identidad',
'생년월일' => 'Fecha de nacimiento',
', 휴대폰 번호(아이핀 제외)' => ', número de móvil (excepto i-PIN)',
', 암호화된 개인식별부호(CI)' => ', identificador personal cifrado (CI)',
'회원 탈퇴 시까지' => 'Hasta la baja como miembro',
'추가 개인정보처리방침에 동의합니다.' => 'Acepto la política de privacidad adicional.',
'인증수단 선택하기' => 'Elegir un método de verificación',
'간편인증' => 'Verificación simplificada',
'휴대폰 본인확인' => 'Verificación por móvil',
'아이핀 본인확인' => 'Verificación por i-PIN',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript debe estar activado para la verificación de identidad.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Configure la verificación por móvil en la configuración básica.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Debe aceptar la política de privacidad adicional para continuar con la verificación.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Introduzca de nuevo su contraseña.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Introduzca su contraseña para completar la baja.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'Para proteger su información, volvemos a comprobar su contraseña.',
'회원아이디' => 'Usuario',
'비밀번호(필수)' => 'Contraseña (obligatorio)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Total: {2} mensajes ({1})',
'받은쪽지' => 'Recibidos',
'보낸쪽지' => 'Enviados',
'쪽지쓰기' => 'Escribir mensaje',
'안 읽은 쪽지' => 'Mensaje no leído',
'자료가 없습니다.' => 'No hay datos.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Los mensajes se conservan un máximo de {1} días.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Enviar mensaje',
'받는 회원아이디' => 'Usuario del destinatario',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Separe varios destinatarios con comas (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Enviar un mensaje descuenta {1} puntos por destinatario.',
'보내기' => 'Enviar',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Enviado',
'받은' => 'Recibido',
'받는' => 'Para',
'쪽지 내용' => 'Mensaje',
'{1}시간' => '{1} el',
'이전쪽지' => 'Mensaje anterior',
'다음쪽지' => 'Mensaje siguiente',
'답장' => 'Responder',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Editar publicación',
'글 삭제' => 'Eliminar publicación',
'댓글 삭제' => 'Eliminar comentario',
'작성자만 글을 수정할 수 있습니다.' => 'Solo el autor puede editar esta publicación.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Si es el autor, introduzca la contraseña que usó al escribir la publicación para editarla.',
'작성자만 글을 삭제할 수 있습니다.' => 'Solo el autor puede eliminar esta publicación.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Si es el autor, introduzca la contraseña que usó al escribir la publicación para eliminarla.',
'비밀글 기능으로 보호된 글입니다.' => 'Esta publicación es secreta.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Solo el autor y los administradores pueden verla. Si es el autor, introduzca la contraseña.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Recuperar por correo',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Introduzca el correo electrónico con el que se registró.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Le enviaremos la información de usuario y contraseña a ese correo.',
'E-mail 주소' => 'Correo electrónico',
'인증메일 보내기' => 'Enviar correo de verificación',
'본인인증으로 찾기' => 'Recuperar mediante verificación de identidad',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Introduzca una nueva contraseña.',
'회원 아이디 :' => 'Usuario:',
'새 비밀번호' => 'Nueva contraseña',
'새 비밀번호 확인' => 'Confirmar nueva contraseña',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Su contraseña se ha cambiado. Inicie sesión de nuevo.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'La nueva contraseña y la confirmación no coinciden.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Saldo de puntos',
'y-m-d H시' => 'd/m/y H:00',
'만료' => 'Caducado',
'소계' => 'Subtotal',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => 'Perfil de {1}',
'회원권한' => 'Nivel de miembro',
'포인트' => 'Puntos',
'회원가입일' => 'Registro',
' ({1} 일)' => ' ({1} días)',
'알 수 없음' => 'Desconocido',
'최종접속일' => 'Última visita',
'인사말' => 'Saludo',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Debe aceptar las condiciones de uso y la recogida y el uso de datos personales para registrarse.',
'회원가입 약관에 모두 동의합니다' => 'Acepto todas las condiciones',
'(필수) 회원가입약관' => '(Obligatorio) Condiciones de uso',
'회원가입약관의 내용에 동의합니다.' => 'Acepto las condiciones de uso.',
'(필수) 개인정보 수집 및 이용' => '(Obligatorio) Recogida y uso de datos personales',
'개인정보 수집 및 이용' => 'Recogida y uso de datos personales',
'아이디, 이름, 비밀번호' => 'Usuario, nombre, contraseña',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', fecha de nacimiento, número de móvil (solo para la verificación de identidad, excepto i-PIN), identificador personal cifrado (CI)',
'고객서비스 이용에 관한 통지,' => 'Notificaciones sobre el servicio al cliente,',
'CS대응을 위한 이용자 식별' => 'identificación del usuario para la atención al cliente',
'연락처 (이메일, 휴대전화번호)' => 'Contacto (correo electrónico, número de móvil)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Acepto la recogida y el uso de datos personales.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Debe aceptar las condiciones de uso para registrarse.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Debe aceptar la recogida y el uso de datos personales para registrarse.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Información de la cuenta',
'아이디 (필수)' => 'Usuario (obligatorio)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Solo letras, números y _. Al menos 3 caracteres.',
'비밀번호 (필수)' => 'Contraseña (obligatorio)',
'비밀번호확인 (필수)' => 'Confirmar contraseña (obligatorio)',
'개인정보 입력' => 'Datos personales',
' - 본인확인 시 자동입력' => ' - se completa automáticamente al verificar',
'(필수)' => '(obligatorio)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Móvil',
'{1} 본인확인' => 'Verificación por {1}',
'{1} 및 {2} 완료' => '{1} y {2}: completado',
'성인인증' => 'verificación de edad',
'{1} 완료' => '{1}: completado',
'이름 (필수)' => 'Nombre (obligatorio)',
'닉네임 (필수)' => 'Apodo (obligatorio)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Solo coreano, letras latinas y números, sin espacios (al menos 2 caracteres coreanos o 4 letras latinas)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Si cambia su apodo, no podrá volver a cambiarlo durante {1} días.',
'E-mail (필수)' => 'Correo electrónico (obligatorio)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'El registro se completa tras verificar el correo que le enviaremos.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'Si cambia su correo electrónico, deberá verificarlo de nuevo.',
'전화번호' => 'Teléfono',
'휴대폰번호' => 'Número de móvil',
'주소' => 'Dirección',
'우편번호' => 'Código postal',
' (필수)' => ' (obligatorio)',
'주소검색' => 'Buscar dirección',
'상세주소' => 'Detalles de la dirección',
'참고항목' => 'Referencia',
'기타 개인설정' => 'Otros ajustes',
'서명' => 'Firma',
'자기소개' => 'Sobre mí',
'회원아이콘' => 'Icono de miembro',
'이미지선택' => 'Elegir imagen',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'La imagen debe medir como máximo {1} px de ancho y {2} px de alto.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Solo archivos gif, jpg y png de hasta {1} bytes.',
'회원이미지' => 'Imagen de miembro',
'정보공개' => 'Perfil público',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Permitir que otros vean mi información.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Si cambia este ajuste, no podrá volver a cambiarlo durante {1} días.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Este ajuste no se puede cambiar durante {1} días tras una modificación (hasta el {2}).',
'Y년 m월 j일' => 'd/m/Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Así se evita que los miembros envíen mensajes y luego oculten su perfil para no recibir respuestas.',
'추천인아이디' => 'Usuario que le recomendó',
'수신설정' => 'Ajustes de notificaciones',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Opcional) Recogida y uso de datos personales con fines de marketing',
'자세히보기' => 'Detalles',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Se trata de la recogida y el uso de datos personales con fines de marketing. Haga clic en Detalles para leer el texto completo.',
'(동의일자: {1})' => '(Aceptado el: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Finalidad: marketing y promociones del servicio',
'* 항목: 이름, 이메일' => '* Datos: nombre, correo electrónico',
', 휴대폰 번호' => ', número de móvil',
'* 보유기간: 회원 탈퇴 시까지' => '* Conservación: hasta la baja como miembro',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Puede usar el servicio básico aunque no acepte, pero las ventajas personalizadas pueden verse limitadas.',
'(선택) 광고성 정보 수신 동의' => '(Opcional) Consentimiento para recibir publicidad',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Este consentimiento abarca la recepción de publicidad (correo/SMS/KakaoTalk). Haga clic en Detalles para leer el texto completo.',
'광고성 이메일 수신 동의' => 'Recibir correos publicitarios',
'광고성 SMS/카카오톡 수신 동의' => 'Recibir SMS/KakaoTalk publicitarios',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Podemos enviarle publicidad por correo/SMS/KakaoTalk entre las 8:00 y las 21:00 usando los datos personales que aceptó facilitar.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Puede retirar su consentimiento en cualquier momento en Mi espacio.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Opcional) Consentimiento para ceder datos personales a terceros',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Se trata de la cesión de datos personales a terceros. Haga clic en Detalles para leer el texto completo.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Finalidad: avisos de marketing sobre productos/servicios, promociones y eventos (KakaoTalk, etc.)',
'* 항목: 이름, 휴대폰 번호' => '* Datos: nombre, número de móvil',
'* 제공받는 자:' => '* Destinatario:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Conservación: durante el servicio o hasta que se retire el consentimiento',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Ya ha verificado su identidad mediante {1}.

¿Cancelar la verificación anterior y verificar de nuevo?',
'비밀번호를 3글자 이상 입력하십시오.' => 'La contraseña debe tener al menos 3 caracteres.',
'비밀번호가 같지 않습니다.' => 'Las contraseñas no coinciden.',
'이름을 입력하십시오.' => 'Introduzca su nombre.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Se requiere verificación de identidad para registrarse.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'El icono de miembro no es un archivo de imagen.',
'회원이미지가 이미지 파일이 아닙니다.' => 'La imagen de miembro no es un archivo de imagen.',
'본인을 추천할 수 없습니다.' => 'No puede recomendarse a sí mismo.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Registro completado',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Enhorabuena por registrarse, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Se ha enviado un correo de verificación a la dirección indicada.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Consulte el correo y complete la verificación para usar el sitio.',
'이메일 주소' => 'Correo electrónico',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'Si introdujo un correo incorrecto, póngase en contacto con el administrador del sitio.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Su contraseña se almacena cifrada, por lo que nadie puede leerla.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Si olvida su usuario o contraseña, puede recuperarlos con el correo electrónico registrado.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Puede darse de baja en cualquier momento; su información se elimina tras un plazo determinado.',
'감사합니다.' => 'Gracias.',
'메인으로' => 'Ir al inicio',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Guardar',
'제목 확인 및 댓글 쓰기' => 'Comprobar el asunto y escribir un comentario',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Puede dejar un comentario de agradecimiento o ánimo al guardar la publicación.',
'스크랩 확인' => 'Confirmar guardado',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Búsqueda avanzada',
'전체게시물' => 'Todas las publicaciones',
'원글만' => 'Solo publicaciones',
'코멘트만' => 'Solo comentarios',
'회원 아이디만 검색 가능' => 'Búsqueda solo por usuario',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Acceso de miembros',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Mi cuenta',
'{1}님' => '{1}',
'안 읽은' => 'No leídos:',
'쪽지' => 'Mensajes',
'정말 회원에서 탈퇴 하시겠습니까?' => '¿Seguro que desea darse de baja?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Cerrar categorías',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Cupones',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Encuesta',
'결과보기' => 'Ver resultados',
'관리자 관리' => 'Administración',
'투표하기' => 'Votar',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Solo los miembros de nivel {1} o superior pueden votar.',
'투표하실 설문항목을 선택하세요' => 'Seleccione una opción',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Solo los miembros de nivel {1} o superior pueden ver los resultados.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Total: {1} votos',
'결과' => 'Resultados',
'{1} 표' => '{1} votos',
'이 설문에 대한 기타의견' => 'Otras opiniones sobre esta encuesta',
'님의 의견' => ' (opinión)',
'기타의견' => 'Otras opiniones',
'의견' => 'Opinión',
'의견을 입력해주세요' => 'Escriba su opinión',
'의견남기기' => 'Dejar una opinión',
'다른 투표 결과 보기' => 'Otras encuestas',
'해당 기타의견을 삭제하시겠습니까?' => '¿Eliminar esta opinión?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Búsquedas populares',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Nueva consulta',
'답변완료' => 'Respondida',
'답변대기' => 'En espera',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => '¿Seguro que desea eliminar las publicaciones seleccionadas?

Los datos eliminados no se pueden recuperar.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Editar respuesta',
'답변삭제' => 'Eliminar respuesta',
'추가질문' => 'Pregunta adicional',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Publicar respuesta',
'파일 #1' => 'Archivo n.º 1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Adjunto 1: máx. {1}',
'파일 #2' => 'Archivo n.º 2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Adjunto 2: máx. {1}',
'답변쓰기' => 'Escribir respuesta',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Estamos preparando una respuesta a su consulta.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Datos de contacto',
'첨부' => 'Adjunto',
'연관질문' => 'Preguntas relacionadas',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Recibir respuesta',
'답변등록 SMS알림 수신' => 'Recibir un SMS cuando se responda',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Introduzca el número de móvil solo con dígitos y guiones (-).',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Resultados de búsqueda',
'게시판' => 'Foros',
'{1}개' => '{1}',
'게시물' => 'Publicaciones',
'페이지 열람 중' => 'páginas',
'검색조건' => 'Opciones de búsqueda',
'제목+내용' => 'Asunto+Contenido',
'전체게시판' => 'Todos los foros',
'검색된 자료가 하나도 없습니다.' => 'No se encontraron resultados.',
'게시판 내 결과' => 'Resultados en el foro',
'{1} 결과 더보기' => 'Más resultados en {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Estadísticas de visitas',
'오늘' => 'Hoy',
'어제' => 'Ayer',
'최대' => 'Máx.',
'visit|전체' => 'Total',
'상세보기' => 'Detalles',

// theme/basic/mobile/tail.php
'회사소개' => 'Quiénes somos',
'개인정보처리방침' => 'Política de privacidad',
'서비스이용약관' => 'Condiciones de uso',
'소유하신 도메인.' => 'Su dominio.',
'사이트 정보' => 'Información del sitio',
'회사명 : 회사명 / 대표 : 대표자명' => 'Empresa: Nombre de la empresa / Director: Nombre del director',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Dirección: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'N.º de registro mercantil: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel.: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'N.º de registro de venta a distancia: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Responsable de privacidad: Nombre del responsable',
'상단으로' => 'Volver arriba',
'PC 버전으로 보기' => 'Versión para PC',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Total {1}',
'게시판 검색' => 'Buscar en el foro',
'현재 페이지 게시물  전체선택' => 'Seleccionar todas las publicaciones de esta página',
'번호' => 'N.º',
'글쓴이' => 'Autor',
'날짜' => 'Fecha',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} descargas | FECHA: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}:',
'댓글의' => '(respuesta)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Seleccione una categoría',
'임시 저장된 글 ({1})' => 'Borradores ({1})',
'임시 저장된 글 목록' => 'Lista de borradores',
'링크  #{1}' => 'Enlace n.º {1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Buscar en las preguntas frecuentes',
'FAQ 수정' => 'Editar preguntas frecuentes',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Publicaciones populares',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'No hay imágenes.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Miembro',
'ID/PW 찾기' => 'Recuperar usuario/contraseña',
'주문서번호' => 'Número de pedido',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Solo el autor y los administradores pueden verla.',
'본인이라면 비밀번호를 입력하세요.' => 'Si es el autor, introduzca la contraseña.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Ayuda',
'비밀번호 확인 (필수)' => 'Confirmar contraseña (obligatorio)',
'비밀번호 확인' => 'Confirmar contraseña',
'본인확인 시 자동입력' => 'Se completa automáticamente al verificar',
'닉네임' => 'Apodo',
'주소 검색' => 'Buscar dirección',
'기본주소' => 'Dirección',
' (동의일자: {1})' => ' (Aceptado el: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Escribir comentario',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Todo',
'그룹' => 'Grupo',
'일시' => 'Fecha',
'{1}번' => 'N.º {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => '¿Seguro que desea continuar con las publicaciones seleccionadas?

Los datos eliminados no se pueden recuperar.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Cuenta',
'마이페이지' => 'Mi espacio',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Gestionar encuesta',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Opción más votada',
'500 표' => '500 votos',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Fecha',
'상태' => 'Estado',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Opciones de la respuesta',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Opciones de la publicación',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Escribir consulta 1:1',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Resultados de búsqueda de {1}',
'게시판 {1}개' => '{1} foros',
'게시물 {1}개' => '{1} publicaciones',
'새창' => 'Nueva ventana',

// theme/basic/tail.php
'모바일버전' => 'Versión móvil',
);
