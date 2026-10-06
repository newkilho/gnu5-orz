<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (tr). 틀은 php lang/build.php tr 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Lütfen önce mağazayı kurun.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Çok fazla istek gönderildi. Lütfen biraz sonra tekrar deneyin.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Referans kullanıcı adı yalnızca harf, rakam ve _ içerebilir.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Girdiğiniz referans kullanıcı adı mevcut değil.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Lütfen doğru yöntemle kullanın.',

// bbs/alert.php
'오류안내 페이지' => 'Hata bildirimi',
'결과안내 페이지' => 'Sonuç bildirimi',
'다음 항목에 오류가 있습니다.' => 'Aşağıdaki öğelerde hata var.',
'다음 내용을 확인해 주세요.' => 'Lütfen aşağıdakileri kontrol edin.',
'돌아가기' => 'Geri dön',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Lütfen yeni pencereyi kapatıp önceki işlemi tekrar deneyin.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Lütfen yeni pencereyi kapattıktan sonra hizmeti kullanın.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Böyle bir pano yok.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'bo_table değeri gönderilmedi.\\n\\nLütfen board.php?bo_table=code biçiminde gönderin.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Gönderi bulunamadı.\\n\\nGönderi silinmiş veya taşınmış olabilir.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Üye olmayanların bu panoya erişim izni yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Erişim izniniz olmadığı için gönderiyi okuyamazsınız.\\n\\nSorularınız için lütfen yöneticiye başvurun.',
'글을 읽을 권한이 없습니다.' => 'Gönderiyi okuma izniniz yok.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gönderiyi okuma izniniz yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bu panoda yalnızca kimliğini doğrulamış üyeler gönderi okuyabilir.\\n\\nÜyeyseniz lütfen giriş yapın.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Bu panoda yalnızca kimliğini doğrulamış üyeler gönderi okuyabilir.\\n\\nLütfen profil düzenleme sayfasından kimlik doğrulaması yapın.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Bu panoda yalnızca kimlik doğrulamasıyla yetişkin olduğu onaylanmış üyeler gönderi okuyabilir.\\n\\nYetişkin olduğunuz hâlde okuyamıyorsanız lütfen profil düzenleme sayfasından kimlik doğrulamasını yeniden yapın.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Puanınız ({1}) olmadığı veya yetersiz olduğu için gönderiyi okuyamazsınız ({2}).\\n\\nLütfen puan biriktirdikten sonra tekrar deneyin.',
'목록을 볼 권한이 없습니다.' => 'Listeyi görüntüleme izniniz yok.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Listeyi görüntüleme izniniz yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'{1} {2} 페이지' => '{1} - Sayfa {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => '{1} işlemi için en az bir öğe seçin.',
'올바른 방법으로 이용해 주세요.' => 'Lütfen doğru yöntemle kullanın.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Lütfen aşağıdakileri kontrol edin.',
'확인' => 'Tamam',
'취소' => 'İptal',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Lütfen önce yönetim panelinde Pano yönetimi->İçerik yönetimi bölümünü kontrol edin.',
'등록된 내용이 없습니다.' => 'Kayıtlı içerik yok.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} mevcut değil.</p>',

// bbs/current_connect.php
'현재접속자' => 'Çevrimiçi ziyaretçiler',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Token hatası nedeniyle silinemiyor.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Yönettiğiniz grubun panosu olmadığı için silemezsiniz.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Sizden daha yüksek yetkili bir üyenin yazdığı gönderiyi silemezsiniz.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Yönettiğiniz pano olmadığı için silemezsiniz.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Size ait olmayan bir gönderiyi silemezsiniz.',
'로그인 후 삭제하세요.' => 'Silmek için lütfen giriş yapın.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Şifre yanlış olduğu için silinemiyor.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Bu gönderiye ait yanıtlar olduğu için silinemiyor.\\n\\nLütfen önce yanıtları silin.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Bu gönderiye ait yorumlar olduğu için silinemiyor.\\n\\n{1} veya daha fazla yorum almış gönderiler silinemez.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Erişim izniniz yok.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Kayıtlı yorum yok veya bu bir yorum değil.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Grup yöneticisinden daha yüksek yetkili bir üyenin yorumu olduğu için silinemez.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Yönettiğiniz grubun panosu olmadığı için yorumu silemezsiniz.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Pano yöneticisinden daha yüksek yetkili bir üyenin yorumu olduğu için silinemez.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Yönettiğiniz pano olmadığı için yorumu silemezsiniz.',
'비밀번호가 틀립니다.' => 'Şifre yanlış.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Bu yoruma ait yanıt yorumları olduğu için silinemiyor.',

// bbs/download.php
'잘못된 접근입니다.' => 'Geçersiz erişim.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'İndirme izniniz yok.\\nÜyeyseniz lütfen giriş yapın.',
'파일 정보가 존재하지 않습니다.' => 'Dosya bilgisi bulunamadı.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Token süresi dolmuş veya token geçersiz.\\nLütfen tarayıcıyı yenileyip tekrar deneyin.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => '{1} dosyasını indirdiğinizde puanınızdan düşülür ({2} puan).\\nPuan her gönderi için yalnızca bir kez düşülür; daha sonra tekrar indirseniz de yeniden düşülmez.\\nYine de indirmek istiyor musunuz?',
'다운로드 권한이 없습니다.' => 'İndirme izniniz yok.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nÜyeyseniz lütfen giriş yapın.',
'파일이 존재하지 않습니다.' => 'Dosya bulunamadı.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Puanınız ({1}) olmadığı veya yetersiz olduğu için indiremezsiniz ({2}).\\n\\nLütfen puan biriktirdikten sonra tekrar indirin.',
'다운로드 &gt; {1}' => 'İndir &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Böyle bir üye yok.',
'탈퇴 또는 차단된 회원입니다.' => 'Üyeliği iptal edilmiş veya engellenmiş bir üye.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Zaten işlenmiş veya geçersiz bir e-posta doğrulama isteği.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'E-posta doğrulaması tamamlandı.\\n\\nArtık {1} kullanıcı adıyla giriş yapabilirsiniz.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'E-posta doğrulamasının süresi doldu. Lütfen doğrulama e-postasını yeniden isteyin.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'E-posta doğrulama isteği bilgileri geçersiz.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Doğru bir değer gönderilmedi.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Bilgilendirme e-postalarına aboneliğiniz iptal edildi.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Lütfen önce yönetim panelinde Pano yönetimi->SSS yönetimi bölümünü kontrol edin.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'E-posta gönderebilmek için ayarlarda "E-posta gönderimini kullan" seçeneği işaretlenmelidir.\\n\\nLütfen yöneticiye başvurun.',
'회원만 이용하실 수 있습니다.' => 'Yalnızca üyeler kullanabilir.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Kendi bilgilerinizi herkese açık yapmazsanız başkalarına e-posta gönderemezsiniz.\\n\\nBilgi paylaşım ayarını profil düzenleme sayfasından yapabilirsiniz.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Üye bilgisi bulunamadı.\\n\\nÜyeliğini iptal etmiş olabilir.',
'정보공개를 하지 않았습니다.' => 'Bilgilerini herkese açık yapmamış.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Her oturumda yalnızca belirli sayıda e-posta gönderebilirsiniz.\\n\\nE-posta göndermeye devam etmek için lütfen yeniden giriş yapın veya bağlanın.',
'메일 쓰기' => 'E-posta yaz',
'이메일이 올바르지 않습니다.' => 'E-posta adresi geçersiz.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Form e-postası gönderme sınırını aştınız.',
'자동등록방지 숫자가 틀렸습니다.' => 'Spam koruması sayısı yanlış.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'E-posta adresinin biçimi geçersiz olduğu için e-posta gönderilemiyor.',
'허용되지 않는 파일 확장자입니다.' => 'İzin verilmeyen dosya uzantısı.',
'메일보내기' => 'E-posta gönder',
'메일 발송중' => 'E-posta gönderiliyor',
'메일을 정상적으로 발송하였습니다.' => 'E-posta başarıyla gönderildi.',

// bbs/good.php
'회원만 가능합니다.' => 'Yalnızca üyeler yapabilir.',
'값이 제대로 넘어오지 않았습니다.' => 'Değer doğru şekilde gönderilmedi.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Beğenme veya beğenmeme yalnızca ilgili gönderide yapılabilir.',
'존재하는 게시판이 아닙니다.' => 'Böyle bir pano yok.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Kendi gönderinizi beğenemez veya beğenmeme olarak işaretleyemezsiniz.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Bu panoda beğenme özelliği kullanılmıyor.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Bu panoda beğenmeme özelliği kullanılmıyor.',
'추천' => 'Beğen',
'비추천' => 'Beğenme',
'이미 {1} 하신 글 입니다.' => 'Bu gönderi için zaten "{1}" seçtiniz.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Bu gönderiyi zaten beğendiniz veya beğenmediniz.',
'이 글을 {1} 하셨습니다.' => 'Bu gönderi için "{1}" seçtiniz.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => '{1} grubuna yalnızca mobil cihazlardan erişilebilir.',

// bbs/link.php
'링크' => 'Bağlantı',
'링크가 없습니다.' => 'Bağlantı yok.',

// bbs/list.php
'전체' => 'Tümü',
'열린 분류' => 'Açık kategori',
'이전검색' => 'Önceki arama',
'다음검색' => 'Sonraki arama',

// bbs/login.php
'로그인' => 'Giriş yap',

// bbs/login_check.php
'로그인 검사' => 'Giriş kontrolü',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Kullanıcı adı veya şifre boş bırakılamaz.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Kayıtlı bir kullanıcı adı değil veya şifre yanlış.\\nŞifre büyük/küçük harfe duyarlıdır.',
'\\1년 \\2월 \\3일' => '\\3.\\2.\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Kullanıcı adınızın erişimi engellenmiştir.\\nİşlem tarihi: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Üyeliği iptal edilmiş bir kullanıcı adı olduğu için erişemezsiniz.\\nİptal tarihi: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Giriş yapabilmek için {1} adresine gönderilen e-posta ile doğrulama yapmalısınız. Başka bir e-posta adresiyle doğrulamak istiyorsanız İptal düğmesine tıklayın.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'data klasöründe yazma izni yoksa veya web disk alanı dolmuşsa\\ngiriş yapılamayabilir; lütfen disk alanını ve yazma iznini kontrol edin.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'url geçersiz bir değer içeriyor.',
'url에 도메인을 지정할 수 없습니다.' => 'url içinde alan adı belirtilemez.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Kimlik doğrulaması kullanılamıyor. Lütfen yöneticiye başvurun.',
'본인인증을 다시 해주세요.' => 'Lütfen kimlik doğrulamasını yeniden yapın.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Lütfen giriş yaptıktan sonra kullanın.',
'w 값이 제대로 넘어오지 않았습니다.' => 'w değeri doğru şekilde gönderilmedi.',
'잘못된 접근입니다' => 'Geçersiz erişim',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Kullanıcı adı değeri yok. Lütfen doğru yöntemle kullanın.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Girdiğiniz kimlik doğrulama bilgileriyle yapılmış bir kayıt zaten var.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Doğrulanan kimlik bilgileri ile girilen üye bilgileri eşleşmiyor. Lütfen tekrar deneyin',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Yalnızca giriş yapmış üyeler erişebilir.',
'회원 비밀번호 확인' => 'Üye şifresi doğrulama',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Yalnızca üyeler erişebilir.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Süper yönetici üyeliğini iptal edemez',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Üyelik iptali işlenemedi. Lütfen üyelik durumunu kontrol edin.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} adlı üyenin üyeliği {2} tarihinde iptal edildi.',
'Y년 m월 d일' => 'd.m.Y',

// bbs/memo.php
'내 쪽지함' => 'Mesaj kutum',
'kind 변수 값이 올바르지 않습니다.' => 'kind değişkeninin değeri geçersiz.',
'받은' => 'Alınma',
'보낸' => 'Gönderilme',
'정보없음' => 'Bilgi yok',
'아직 읽지 않음' => 'Henüz okunmadı',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Kendi bilgilerinizi herkese açık yapmazsanız başkalarına mesaj gönderemezsiniz. Bilgi paylaşım ayarını profil düzenleme sayfasından yapabilirsiniz.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Üye bilgisi bulunamadı.\\n\\nÜyeliğini iptal etmiş olabilir.',
'쪽지 보내기' => 'Mesaj gönder',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => '\'{1}\' kullanıcı adı mevcut değil (veya bilgileri gizli) ya da üyeliği iptal edilmiş veya erişimi engellenmiş.\\nMesaj gönderilmedi.',
'해당 회원이 존재하지 않습니다.' => 'Böyle bir üye yok.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Puanınız ({1} puan) yetersiz olduğu için mesaj gönderemezsiniz.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Mesajınız {1} adlı üyeye iletildi.',
'회원아이디 오류 같습니다.' => 'Kullanıcı adında bir hata var gibi görünüyor.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Lütfen {1} değerini gönderin.',
'{1} 쪽지 보기' => '{1} mesajı görüntüle',

// bbs/move.php
'이동' => 'Taşı',
'복사' => 'Kopyala',
'sw 값이 제대로 넘어오지 않았습니다.' => 'sw değeri doğru şekilde gönderilmedi.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Yalnızca pano yöneticisi ve üzeri erişebilir.',
'게시물 {1}' => 'Gönderi - {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => '{1} işlemi için en az bir pano seçin.',
'현재 페이지 게시판 전체' => 'Bu sayfadaki tüm panolar',
'게시판' => 'Panolar',
'현재' => 'Mevcut',
'창닫기' => 'Pencereyi kapat',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Gönderiyi {1} işlemi için en az bir pano seçin.',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Gönderi için seçilen panoya {1} işlemi tamamlandı.',

// bbs/new.php
'새글' => 'Yeni gönderiler',
'그룹' => 'Grup',
'전체그룹' => 'Tüm gruplar',
'[코] ' => '[Yorum] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Yalnızca süper yönetici erişebilir.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Açılır bildirim',
'{1}시간 동안 다시 열람하지 않습니다.' => '{1} saat boyunca tekrar gösterme.',
'닫기' => 'Kapat',
'팝업레이어 알림이 없습니다.' => 'Açılır bildirim yok.',

// bbs/password.php
'비밀번호 입력' => 'Şifre girin',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Zaten giriş yapmış durumdasınız.',
'회원정보 찾기' => 'Hesap bilgilerini bul',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'E-posta adresi hatalı.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Kullanıcı adınızı ve şifrenizi doğrulayabileceğiniz bir e-posta {1} adresine gönderildi.\\n\\nLütfen e-postanızı kontrol edin.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Hesap bilgilerini bulma talebiniz hakkında bilgilendirme',
'회원정보 찾기 안내' => 'Hesap bilgilerini bulma bilgilendirmesi',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) adlı üye {3} tarihinde hesap bilgilerini bulma talebinde bulundu.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Sitemizde yöneticiler dahi üyelerin şifresini bilemez; bu nedenle şifrenizi bildirmek yerine yeni bir şifre oluşturup size iletiyoruz.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Aşağıda değiştirilecek şifreyi kontrol ettikten sonra <span style="color:#ff3061"><strong>Şifreyi değiştir</strong> bağlantısına tıklayın.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Şifrenin değiştirildiğine dair doğrulama mesajı görüntülendiğinde, sitede kullanıcı adınızı ve yeni şifrenizi girerek giriş yapın.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Giriş yaptıktan sonra lütfen profil düzenleme menüsünden şifrenizi yeni bir şifreyle değiştirin.',
'회원아이디' => 'Kullanıcı adı',
'변경될 비밀번호' => 'Değiştirilecek şifre',
'비밀번호 변경' => 'Şifreyi değiştir',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Şifreniz değiştirildi.\\n\\nLütfen kullanıcı adınız ve yeni şifrenizle giriş yapın.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Kimlik doğrulaması ile kullanıcı adı/şifre bulma kullanılamıyor. Lütfen yöneticiye başvurun.',
'패스워드 변경' => 'Şifre değiştir',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Şifre gönderilmedi.',
'비밀번호가 일치하지 않습니다.' => 'Şifreler eşleşmiyor.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Yalnızca üyeler görüntüleyebilir.',
'{1} 님의 포인트 내역' => '{1} adlı üyenin puan geçmişi',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'po_id değeri doğru şekilde gönderilmedi.',
'기타의견이 비활성화되어 있습니다.' => 'Diğer görüşler devre dışı bırakılmış.',
'권한이 없습니다.' => 'Yetkiniz yok.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Anket bilgisi yok.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Sonuçları yalnızca {1} veya üzeri seviyedeki üyeler görebilir.',
'설문조사 결과' => 'Anket sonuçları',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Oylamaya yalnızca {1} veya üzeri seviyedeki üyeler katılabilir.',
'항목을 선택하세요.' => 'Lütfen bir seçenek seçin.',
'{1}에 이미 참여하셨습니다.' => '"{1}" anketine zaten katıldınız.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Kendi bilgilerinizi herkese açık yapmazsanız başkalarının bilgilerini görüntüleyemezsiniz.\\n\\nBilgi paylaşım ayarını profil düzenleme sayfasından yapabilirsiniz.',
'{1}님의 자기소개' => '{1} - Hakkımda',
'소개 내용이 없습니다.' => 'Tanıtım yazısı yok.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Üyeyseniz lütfen giriş yapın.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Lütfen silinecek en az bir gönderi seçin.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Üyeyseniz lütfen giriş yapın.',
'열린 분류 ' => 'Seçili kategori ',
'{1}이 존재하지 않습니다.' => '{1} mevcut değil.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Gönderi bulunamadı.\\nSilinmiş veya size ait olmayan bir gönderi olabilir.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Yanıtlanmış bir soru düzenlenemez.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Gönderiyi düzenleme izniniz yok.\\n\\nLütfen doğru yöntemle kullanın.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Lütfen birebir destek ayarlarından kategorileri tanımlayın',
'{1} 바이트' => '{1} bayt',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Lütfen kategoriyi doğru şekilde belirtin.',
'이메일을 입력하세요.' => 'Lütfen e-posta adresinizi girin.',
'<strong>제목</strong>을 입력하세요.' => 'Lütfen <strong>başlık</strong> girin.',
'<strong>내용</strong>을 입력하세요.' => 'Lütfen <strong>içerik</strong> girin.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'İçerik çok sayıda geçersiz kod barındırıyor.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Dosya veya içerik boyutu sunucuda ayarlanan sınırı aştığı için hata oluştu.\\npost_max_size={1} , upload_max_filesize={2}\\nLütfen pano yöneticisine veya sunucu yöneticisine başvurun.',
'답변은 관리자만 등록할 수 있습니다.' => 'Yalnızca yöneticiler yanıt ekleyebilir.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Soru bulunamadığı için yanıt eklenemiyor.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Bir yanıta tekrar yanıt eklenemez.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Lütfen en fazla 2 ek dosya yükleyin.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => '"{1}" dosyasının boyutu sunucuda ayarlanan sınırdan ({2}) büyük olduğu için yüklenemiyor.\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => '"{1}" dosyası düzgün şekilde yüklenemedi.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => '"{1}" dosyasının boyutu ({2} bayt) panoda ayarlanan sınırdan ({3} bayt) büyük olduğu için yüklenmedi.\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => '"{1}" dosyası güvenli şekilde kaydedilemiyor. Lütfen sunucunun rastgele sayı kaynağını ve kayıt yolunu kontrol edin.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} yanıt bildirimi',

// bbs/register.php
'회원가입약관' => 'Kullanım koşulları',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Doğrulama e-posta adresini değiştir',
'이미 메일인증 하신 회원입니다.' => 'E-posta doğrulamanızı zaten tamamladınız.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Doğrulama e-postasını almadıysanız üye bilgilerinizdeki e-posta adresini değiştirebilirsiniz.',
'사이트 이용정보 입력' => 'Hesap bilgileri',
'필수' => 'Zorunlu',
'자동등록방지' => 'Spam koruması',
'인증메일변경' => 'Doğrulama e-postasını değiştir',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => '{1} e-posta adresi zaten kayıtlı.\\n\\nLütfen başka bir e-posta adresi girin.',
'[{1}] 인증확인 메일입니다.' => '[{1}] E-posta doğrulama',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Doğrulama e-postası {1} adresine yeniden gönderildi.\\n\\nLütfen birazdan {1} adresini kontrol edin.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Kayıt olmak için kullanım koşullarını kabul etmelisiniz.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Kayıt olmak için kişisel verilerin toplanmasını ve kullanılmasını kabul etmelisiniz.',
'회원 가입' => 'Kayıt ol',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Yönetici üye bilgileri yönetim panelinden düzenlenmelidir.',
'로그인 후 이용하여 주십시오.' => 'Lütfen giriş yaptıktan sonra kullanın.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Giriş yapmış üye ile gönderilen bilgiler eşleşmiyor.',
'비밀번호를 입력해 주세요.' => 'Lütfen şifrenizi girin.',
'회원 정보 수정' => 'Üye bilgilerini düzenle',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Bu işlem demo ekranında yapılamaz (görüntülenemez).',
'이름을 올바르게 입력해 주십시오.' => 'Lütfen adınızı doğru girin.',
'닉네임을 올바르게 입력해 주십시오.' => 'Lütfen takma adınızı doğru girin.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Kayıt için kimlik doğrulaması gereklidir.',
'추천인이 존재하지 않습니다.' => 'Referans kullanıcı mevcut değil.',
'본인을 추천할 수 없습니다.' => 'Kendinizi referans gösteremezsiniz.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Aramıza hoş geldiniz.',
'로그인 되어 있지 않습니다.' => 'Giriş yapmadınız.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Giriş bilgileri ile düzenlenmek istenen bilgiler farklı olduğu için düzenleme yapılamaz.\\nUygunsuz bir yöntem kullanıyorsanız lütfen hemen durdurun.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Lütfen üye simgesini {1} bayt veya daha küçük olacak şekilde yükleyin.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} bir resim dosyası değil.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Lütfen üye resmini {1} bayt veya daha küçük olacak şekilde yükleyin.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} bir gif/jpg dosyası değil.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Üye bilgileri güncellendi.\\n\\nE-posta adresiniz değiştiği için yeniden doğrulama yapmanız gerekiyor.',
'회원정보수정' => 'Profili düzenle',
'회원 정보가 수정 되었습니다.' => 'Üye bilgileri güncellendi.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Kayıt tebrik e-postası',
'회원가입을 축하합니다.' => 'Kaydınız için tebrikler.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => '<b>{1}</b>, aramıza katıldığınız için içtenlikle tebrik ederiz.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Desteğinize layık olmak için daha da çok çalışacağız.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Kaydınızı tamamlamak için aşağıdaki <strong>E-posta doğrulama</strong> bağlantısına tıklayın.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Doğrulama bağlantısı gönderildikten sonra {1} dakika geçerlidir.',
'감사합니다.' => 'Teşekkür ederiz.',
'메일인증' => 'E-posta doğrulama',
'사이트바로가기' => 'Siteye git',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Üye doğrulama e-postası',
'회원 인증 메일입니다.' => 'Bu bir üye doğrulama e-postasıdır.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => '<b>{1}</b> adlı üyenin e-posta adresi değiştirildi.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Doğrulamayı tamamlamak için aşağıdaki adrese tıklayın.',
'{1} 로그인' => '{1} - Giriş yap',

// bbs/register_result.php
'회원가입 완료' => 'Kayıt tamamlandı',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS yalnızca üye olmayanların okuyabildiği panolarda desteklenir.',
'RSS 보기가 금지되어 있습니다.' => 'RSS görüntüleme engellenmiş.',

// bbs/scrap.php
'{1}님의 스크랩' => '{1} - Kaydedilenler',
'[게시판 없음]' => '[Pano yok]',
'[글 없음]' => '[Gönderi yok]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Yalnızca üyeler erişebilir.',
'로그인하기' => 'Giriş yap',
'올바른 방법으로 사용해 주십시오.' => 'Lütfen doğru yöntemle kullanın.',
'코멘트는 스크랩 할 수 없습니다.' => 'Yorumlar kaydedilemez.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Bu gönderiyi zaten kaydettiniz.

Kaydedilenleri şimdi görüntülemek ister misiniz?',
'이미 스크랩하신 글 입니다.' => 'Bu gönderiyi zaten kaydettiniz.',
'스크랩 확인하기' => 'Kaydedilenleri görüntüle',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Kaydetmek istediğiniz gönderi bulunamadı.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Çok kısa süre içinde art arda gönderi paylaşamazsınız.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Bu gönderi kaydedildi.

Kaydedilenleri şimdi görüntülemek ister misiniz?',
'이 글을 스크랩 하였습니다.' => 'Bu gönderi kaydedildi.',

// bbs/search.php
'전체검색 결과' => 'Arama sonuçları',
'[비밀글 입니다.]' => '[Gizli gönderi.]',
'게시판 그룹선택' => 'Pano grubu seçin',
'전체 분류' => 'Tüm kategoriler',

// bbs/view_comment.php
'비밀글 입니다.' => 'Gizli gönderi.',
'댓글내용 확인' => 'Yorum içeriğini görüntüle',

// bbs/view_image.php
'이미지 크게보기' => 'Resmi büyük görüntüle',
'이미지 확장자가 아닙니다.' => 'Resim uzantısı değil.',
'이미지 파일이 아닙니다.' => 'Resim dosyası değil.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'bo_table değeri gönderilmedi.\\nLütfen write.php?bo_table=code biçiminde gönderin.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Gönderi bulunamadı.\\nSilinmiş veya taşınmış olabilir.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Gönderi yazarken \\$wr_id değeri kullanılmaz.',
'글을 쓸 권한이 없습니다.' => 'Gönderi yazma izniniz yok.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gönderi yazma izniniz yok.\\nÜyeyseniz lütfen giriş yapın.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Puanınız ({1}) olmadığı veya yetersiz olduğu için gönderi yazamazsınız ({2}).\\n\\nLütfen puan biriktirdikten sonra tekrar deneyin.',
'글쓰기' => 'Yaz',
'글을 수정할 권한이 없습니다.' => 'Gönderiyi düzenleme izniniz yok.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Gönderiyi düzenleme izniniz yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Bu gönderiye ait yanıtlar olduğu için düzenlenemiyor.\\n\\nYanıt almış gönderiler düzenlenemez.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Bu gönderiye ait yorumlar olduğu için düzenlenemiyor.\\n\\n{1} veya daha fazla yorum almış gönderiler düzenlenemez.',
'글수정' => 'Gönderiyi düzenle',
'글을 답변할 권한이 없습니다.' => 'Gönderiyi yanıtlama izniniz yok.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Yanıt yazma izniniz yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Puanınız ({1}) olmadığı veya yetersiz olduğu için yanıt yazamazsınız ({2}).\\n\\nLütfen puan biriktirdikten sonra tekrar deneyin.',
'공지에는 답변 할 수 없습니다.' => 'Duyurulara yanıt verilemez.',
'정상적인 접근이 아닙니다.' => 'Geçerli bir erişim değil.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Gizli gönderilere yalnızca yazarı veya yönetici yanıt verebilir.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Üye olmayanların gizli gönderilerine yanıt verilemez.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Daha fazla yanıt veremezsiniz.\\n\\nYanıtlar en fazla 10 seviyeye kadar olabilir.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Daha fazla yanıt veremezsiniz.\\n\\nEn fazla 26 yanıt verilebilir.',
'글답변' => 'Yanıt yaz',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Erişim izniniz yok.\\n\\nÜyeyseniz lütfen giriş yapın.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Erişim izniniz olmadığı için gönderi yazamazsınız.\\n\\nSorularınız için lütfen yöneticiye başvurun.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bu panoda yalnızca kimliğini doğrulamış üyeler gönderi yazabilir.\\n\\nÜyeyseniz lütfen giriş yapın.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Bu panoda yalnızca kimliğini doğrulamış üyeler gönderi yazabilir.\\n\\nLütfen profil düzenleme sayfasından kimlik doğrulaması yapın.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Ad alanı zorunludur.',
'댓글을 쓸 권한이 없습니다.' => 'Yorum yazma izniniz yok.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Gönderi bulunamadı.\\nGönderi silinmiş veya taşınmış olabilir.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Puanınız ({1}) olmadığı veya yetersiz olduğu için yorum yazamazsınız ({2}).\\n\\nLütfen puan biriktirdikten sonra tekrar deneyin.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Yanıtlanacak yorum yok.\\n\\nSiz yanıt yazarken yorum silinmiş olabilir.',
'댓글을 등록할 수 없습니다.' => 'Yorum eklenemiyor.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Daha fazla yanıt veremezsiniz.\\n\\nYanıtlar en fazla 5 seviyeye kadar olabilir.',
'원글
{1}


댓글
{2}' => 'Asıl gönderi
{1}


Yorum
{2}',
'입력' => 'Yeni',
'수정' => 'Düzenle',
'답변' => 'Yanıtla',
'댓글 ' => 'Yorum ',
'댓글 수정' => 'Yorum düzenleme',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] {2} panosunda yeni içerik ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Grup yöneticisinden daha yüksek yetkili bir üyenin yorumu olduğu için düzenlenemez.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Yönettiğiniz grubun panosu olmadığı için yorumu düzenleyemezsiniz.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Pano yöneticisinden daha yüksek yetkili bir üyenin yorumu olduğu için düzenlenemez.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Yönettiğiniz pano olmadığı için yorumu düzenleyemezsiniz.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Size ait olmayan bir gönderiyi düzenleyemezsiniz.',
'댓글을 수정할 권한이 없습니다.' => 'Yorumu düzenleme izniniz yok.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Bu yoruma ait yanıt yorumları olduğu için düzenlenemiyor.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Pano bilgileri geçersiz.',

// bbs/write_update.php
'게시글 저장' => 'Gönderiyi kaydet',
'<strong>분류</strong>를 선택하세요.' => 'Lütfen bir <strong>kategori</strong> seçin.',
'분류를 올바르게 입력하세요.' => 'Lütfen kategoriyi doğru girin.',
'올바른 방법으로 수정하여 주십시오.' => 'Lütfen doğru yöntemle düzenleyin.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Yönettiğiniz grubun panosu olmadığı için düzenleyemezsiniz.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Sizden daha yüksek yetkili bir üyenin yazdığı gönderiyi düzenleyemezsiniz.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Yönettiğiniz pano olmadığı için düzenleyemezsiniz.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Lütfen şifreyi doğruladıktan sonra tekrar düzenleyin.',
'로그인 후 수정하세요.' => 'Düzenlemek için lütfen giriş yapın.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Bu pano gizli gönderi kullanmadığı için gizli gönderi olarak kaydedilemez.',
'관리자만 공지할 수 있습니다.' => 'Yalnızca yöneticiler duyuru yapabilir.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Daha fazla yanıt veremezsiniz.\\nYanıtlar en fazla 10 seviyeye kadar olabilir.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Daha fazla yanıt veremezsiniz.\\nEn fazla 26 yanıt verilebilir.',
'제목을 입력하여 주십시오.' => 'Lütfen başlık girin.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Lütfen mevcut dosyaları sildikten sonra en fazla {1} ek dosya yükleyin.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Lütfen en fazla {1} ek dosya yükleyin.',
'코멘트' => 'Yorum',
'코멘트 수정' => 'Yorum düzenleme',

// bbs/write_update_mail.php
'{1} 메일' => '{1} e-postası',
'작성자 {1}' => 'Yazar: {1}',
'사이트에서 게시물 확인하기' => 'Gönderiyi sitede görüntüle',

// common.php
'접근이 가능하지 않습니다.' => 'Erişim mümkün değil.',
'접근 불가합니다.' => 'Erişilemez.',

// head.php
'본문 바로가기' => 'İçeriğe geç',
'커뮤니티' => 'Topluluk',
'쇼핑몰' => 'Mağaza',
'접속자' => 'Ziyaretçiler',
'사이트 내 전체검색' => 'Sitede ara',
'검색어 필수' => 'Arama terimi (zorunlu)',
'검색어를 입력해주세요' => 'Bir arama terimi girin',
'검색' => 'Ara',
'검색어는 두글자 이상 입력하십시오.' => 'Lütfen en az iki karakter girin.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Daha hızlı arama için arama teriminde yalnızca bir boşluk kullanılabilir.',
'정보수정' => 'Profili düzenle',
'로그아웃' => 'Çıkış yap',
'회원가입' => 'Kayıt ol',
'메인메뉴' => 'Ana menü',
'전체메뉴' => 'Tüm menüler',
'전체메뉴열기' => 'Tüm menüleri aç',
'하위분류' => 'Alt menü',
'메뉴 준비 중입니다.' => 'Menü hazırlanıyor.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} olarak giriş yapıldı ',

// lib/common.lib.php
'처음' => 'İlk',
'이전' => 'Önceki',
'페이지' => 'Sayfa',
'열린' => 'Geçerli',
'다음' => 'Sonraki',
'맨끝' => 'Son',
'답변글' => 'Yanıt',
'{1} 자기소개' => '{1} - Hakkımda',
'{1} 이름으로 검색' => '{1} adıyla ara',
'쪽지보내기' => 'Mesaj gönder',
'홈페이지' => 'Web sitesi',
'자기소개' => 'Hakkımda',
'아이디로 검색' => 'Kullanıcı adıyla ara',
'이름으로 검색' => 'Adla ara',
'전체게시물' => 'Tüm gönderiler',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'MySQL Host, User, Password, DB bilgilerinde hata var.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL kurulu olmadığı için mysql_connect fonksiyonu kullanılamıyor.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'MySQL Host, User, Password bilgilerinde hata var.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Veritabanı işlemi sırasında bir hata oluştu.',
'yoil|일' => 'Paz',
'yoil|월' => 'Pzt',
'yoil|화' => 'Sal',
'yoil|수' => 'Çar',
'yoil|목' => 'Per',
'yoil|금' => 'Cum',
'yoil|토' => 'Cmt',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Token süresi doldu. Lütfen sayfayı yenileyin.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'E-posta doğrulaması için site adresi ayarlanmamış. Lütfen site yöneticisine başvurun.',
'올바른 경로로 접근해 주십시오.' => 'Lütfen doğru yoldan erişin.',
'PC 전용 게시판입니다.' => 'Bu pano yalnızca bilgisayar içindir.',
'모바일 전용 게시판입니다.' => 'Bu pano yalnızca mobil içindir.',
'간편인증' => 'Basit doğrulama',
'휴대폰' => 'Cep telefonu',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Bugün {1} kimlik doğrulamasını {2} kez kullandığınız için daha fazla kullanamazsınız.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'exec fonksiyonu çalıştırılamadığı için kullanılamıyor.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Formdan gönderilen değişken sayısı max_input_vars değerinden büyük.\\nGönderilen değerlerin bir kısmı kaybolarak veritabanına kaydedilebilir.\\n\\nSorunu çözmek için sunucudaki php.ini dosyasında max_input_vars değerini değiştirin.',
'url에 타 도메인을 지정할 수 없습니다.' => 'url içinde başka bir alan adı belirtilemez.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'url kullanıcı bilgisi içerdiği için erişilemiyor.',
'bot 으로 판단되어 중지합니다.' => 'Bot olarak algılandığı için durduruldu.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Lütfen içerik girin.',

// lib/get_data.lib.php
'제목' => 'Başlık',
'내용' => 'İçerik',
'제목+내용' => 'Başlık+İçerik',
'글쓴이' => 'Yazar',
'글쓴이(코)' => 'Yazar (yorum)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Lütfen kullanıcı adınızı girin.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Kullanıcı adı yalnızca harf, rakam ve _ içerebilir.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Kullanıcı adı en az 3 karakter olmalıdır.',
'이미 사용중인 회원아이디 입니다.' => 'Bu kullanıcı adı zaten kullanılıyor.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Bu kullanıcı adı ayrılmış bir sözcük olduğu için kullanılamaz.',
'닉네임을 입력해 주십시오.' => 'Lütfen takma adınızı girin.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Takma ad boşluk içeremez; yalnızca Korece, Latin harfleri ve rakam kullanılabilir.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Takma ad en az 2 Korece veya 4 Latin karakter olmalıdır.',
'이미 존재하는 닉네임입니다.' => 'Bu takma ad zaten kullanılıyor.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Bu takma ad ayrılmış bir sözcük olduğu için kullanılamaz.',
'E-mail 주소를 입력해 주십시오.' => 'Lütfen e-posta adresinizi girin.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'E-posta adresi biçimi geçersiz.',
'{1} 메일은 사용할 수 없습니다.' => '{1} e-posta adresi kullanılamaz.',
'이미 사용중인 E-mail 주소입니다.' => 'Bu e-posta adresi zaten kullanılıyor.',
'이름을 입력해 주십시오.' => 'Lütfen adınızı girin.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Ad boşluk içeremez ve yalnızca Korece karakterlerden oluşmalıdır.',
'휴대폰번호를 입력해 주십시오.' => 'Lütfen cep telefonu numaranızı girin.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Lütfen cep telefonu numaranızı doğru girin.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Bu cep telefonu numarası zaten kullanılıyor. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Geçersiz istek.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Geçerli bir doğrulama değil. Lütfen doğru yöntemle kullanın.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Doğrulanan bilgilerle kayıtlı bir üye bulunamadı.',
'코드 : {1}  {2}' => 'Kod: {1}  {2}',
'KG이니시스 간편인증 결과' => 'KG Inicis basit doğrulama sonucu',
'본인인증이 완료되었습니다.' => 'Kimlik doğrulaması tamamlandı.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'KG Inicis basit doğrulama',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Bu hesap zaten başka bir kişi adına kimlik doğrulaması yapılmış bir hesap.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Girdiğiniz kimlik doğrulama bilgileriyle yapılmış bir kayıt zaten var.\\nKullanıcı adı: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Sayıları sesli dinle',
'새로고침' => 'Yenile',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Spam koruması sayılarını sırayla girin.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Cep telefonu doğrulama sonucu',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'dn_hash değiştirilmiş olabilir ({1} dosyasının çalıştırma izni olup olmadığını kontrol edin.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Cep telefonuyla kimlik doğrulamasını iptal ettiniz.',
'up_hash 변조 위험있음' => 'up_hash değiştirilmiş olabilir',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'KCP cep telefonu kimlik doğrulama hizmetinin site kodu yok. Lütfen Yönetici > Temel ayarlar bölümüne KCP site kodunu girin.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Girdiğiniz kimlik doğrulama bilgileriyle yapılmış bir kayıt zaten var.\\nKullanıcı adı: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Kendi cep telefonu numaranızla doğrulandı.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Kimlik doğrulama yanıt değeri yok. Lütfen baştan tekrar deneyin.',
'코드 : {1} {2}' => 'Kod: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Kimlik doğrulama oturumunun süresi doldu. Lütfen baştan tekrar deneyin.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Kimlik doğrulama sonucu sorgulanamadı ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'KCP cep telefonu kimlik doğrulama V2 modülü yalnızca PHP 7.0 veya üzeri ortamlarda çalışır.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'KCP cep telefonu kimlik doğrulama V2 modülü için gereken PHP eklentileri (openssl/curl/hash_pbkdf2) etkin değil.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'KCP cep telefonu kimlik doğrulama V2 site kodu veya ENC_KEY ayarlanmamış.\\nLütfen Yönetici > Temel ayarlar bölümünden girin.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Kimlik doğrulama işlem kaydı başarısız oldu.\\n({1} : {2})',
'휴대폰 본인확인' => 'Cep telefonuyla doğrulama',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'KCP işlem kaydı istek verisi oluşturulamıyor.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'KCP işlem kaydı istek verisi şifrelenemiyor.',
'KCP 거래등록 API 응답이 없습니다.' => 'KCP işlem kaydı API yanıt vermedi.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'KCP işlem kaydı API yanıtı çözümlenemiyor.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'KCP kimlik doğrulama sonucu sorgu istek verisi oluşturulamıyor.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'KCP kimlik doğrulama sonucu sorgu API yanıt vermedi.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'KCP kimlik doğrulama sonucu sorgu API yanıtı çözümlenemiyor.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'KCP kimlik doğrulama sonuç verisinin şifresi çözülemiyor.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'KCP kimlik doğrulama şifresi çözülmüş veri çözümlenemiyor.',
'cURL 초기화에 실패했습니다.' => 'cURL başlatılamadı.',
'KCP API 통신 실패: {1}' => 'KCP API iletişim hatası: {1}',
'KCP API HTTP 오류: {1}' => 'KCP API HTTP hatası: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Cep telefonuyla kimlik doğrulama sırasında bir hata oluştu. Hata kodu: {1}\\n\\nSorularınız için Korea Credit Bureau (KCB) müşteri hizmetlerine başvurun: 02-708-1000',
'입력 값 확인이 필요합니다' => 'Girilen değerlerin kontrol edilmesi gerekiyor',
'KCB 휴대폰 본인확인' => 'KCB cep telefonuyla doğrulama',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'i-PIN ile kimlik doğrulama sırasında bir hata oluştu. Hata kodu: {1}\\n\\nSorularınız için Korea Credit Bureau (KCB) müşteri hizmetlerine başvurun: 02-708-1000',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'i-PIN ile kimlik doğrulama sırasında bir hata oluştu. (ci bilgisi yok) Hata kodu: {1}\\n\\nSorularınız için Korea Credit Bureau (KCB) müşteri hizmetlerine başvurun: 02-708-1000',
'KCB 아이핀 본인확인' => 'KCB i-PIN ile doğrulama',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Lütfen temel ayarlarda cep telefonu kimlik doğrulama hizmeti olarak KCB\'yi seçin.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Lütfen temel ayarlarda KCB üye şirket kimliğini girin.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Modül çalıştırma dosyası bulunamadı.\\n\\n{1} dosyası {2}/{3}/bin içinde olmalıdır.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Modül çalıştırma dosyasının çalıştırma izni yok.\\n\\nLütfen chmod 755 {1} gibi bir komutla çalıştırma izni verin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Modül çalıştırma dosyasının çalıştırma izni yok.\\n\\nLütfen cmd.exe için IUSER çalıştırma izni olup olmadığını kontrol edin.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Lütfen temel ayarlarda i-PIN kimlik doğrulama hizmeti olarak KCB\'yi seçin.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Lütfen {1}/{2} içinde key dizinini oluşturun.\\n\\nDizini oluşturduktan sonra yazma izni verin. Örnek: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Lütfen {1}/{2}/key dizininin izinlerini 705 olarak değiştirin.\\nchmod 705 key veya chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Lütfen {1}/{2}/key dizininin izinlerini 707 olarak değiştirin.\\n\\nchmod 707 key veya chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter geri çağrısı',
'트위터에 승인이 되었습니다.' => 'Twitter onayı verildi.',
'트위터에 승인이 되지 않았습니다.' => 'Twitter onayı verilmedi.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Ayrıntıları gör',
'페이스북으로 공유' => 'Facebook\'ta paylaş',
'페이스북 공유' => 'Facebook paylaşımı',
'트위터로  공유' => 'Twitter\'da paylaş',
'트위터 공유' => 'Twitter paylaşımı',
'카카오톡으로 보내기' => 'KakaoTalk ile gönder',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Facebook\'ta da paylaşıldı',
'트위터에도 등록됨' => 'Twitter\'da da paylaşıldı',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Twitter\'da da paylaş',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Sosyal giriş - {1}',
'잠시후에 다시 시도해 주세요.' => 'Lütfen biraz sonra tekrar deneyin.',
'홈으로' => 'Ana sayfaya dön',
'이 페이지 닫기' => 'Bu sayfayı kapat',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Bu {1} kimliğiyle bağlantılı veya kayıtlı bir hesap olduğu için yeniden kayıt olamazsınız. Üyeyseniz giriş yaptıktan sonra profil düzenleme sayfasından hesap bağlantısı yapın.',
'지정되지 않은 오류입니다.' => 'Belirtilmemiş bir hata.',
'설정 오류입니다.' => 'Yapılandırma hatası.',
'해당 provider 설정 오류입니다.' => 'İlgili provider yapılandırma hatası.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Bilinmeyen veya devre dışı bir provider.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Bu hizmete erişim izniniz yok.',
'인증이 실패되었습니다.. ' => 'Kimlik doğrulama başarısız oldu. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Kullanıcı kimlik doğrulamayı iptal etti veya sağlayıcı bağlantıyı reddetti.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Kullanıcı profili isteği başarısız oldu. Kullanıcı bu hizmete bağlı olmayabilir. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'Bu durumda yeniden kimlik doğrulama isteğinde bulunulmalıdır.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Kullanıcı bu hizmete bağlı değil.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Bu hizmet bu özelliği desteklemiyor.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Zaten giriş yaptınız veya istek geçersiz.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Zaten bağlı bir hesap var veya istek geçersiz.',
'소셜 데이터 오류' => 'Sosyal veri hatası',
'SNS 사용자 인증에 실패하였습니다.' => 'SNS kullanıcı doğrulaması başarısız oldu.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Bu hesaba zaten bir {1} kimliği bağlı. Lütfen bağlantıyı kaldırıp tekrar deneyin.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'X (Twitter)',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => '{1} hizmetine bağlanılıyor. Lütfen bekleyin.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Sosyal giriş kullanılmıyor.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Sosyal giriş ayarı devre dışı.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Yeni pencere seçeneği devre dışı.',
'서비스 이름이 넘어오지 않았습니다.' => 'Hizmet adı gönderilmedi.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Sosyal giriş kullanılmıyor.',
'이미 회원가입 하였습니다.' => 'Zaten kayıt oldunuz.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Yalnızca sosyal giriş yapan kullanıcılar erişebilir.',
'소셜 회원 가입 - {1}' => 'Sosyal kayıt - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Yalnızca sosyal giriş yapan kullanıcılar erişebilir.',
'이미 등록된 회원이 존재합니다.' => 'Bu bilgilerle kayıtlı bir üye zaten var.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Doğrulanan kimlik bilgileri ile kişisel bilgiler eşleşmiyor. Lütfen tekrar deneyin',
'회원 가입 오류!' => 'Kayıt hatası!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Üye değilsiniz veya ilgili değer gönderilmedi.',
'권한이 없거나 잘못된 요청입니다.' => 'Yetkiniz yok veya istek geçersiz.',
);
