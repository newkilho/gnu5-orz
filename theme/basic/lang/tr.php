<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (tr). 틀은 php lang/build.php tr 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/head.php
'본문 바로가기' => 'İçeriğe geç',
'커뮤니티' => 'Topluluk',
'쇼핑몰' => 'Mağaza',
'새글' => 'Yeni gönderiler',
'접속자' => 'Ziyaretçiler',
'사이트 내 전체검색' => 'Sitede ara',
'검색어 필수' => 'Arama terimi (zorunlu)',
'검색어를 입력해주세요' => 'Bir arama terimi girin',
'검색' => 'Ara',
'검색어는 두글자 이상 입력하십시오.' => 'Lütfen en az iki karakter girin.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Daha hızlı arama için arama teriminde yalnızca bir boşluk kullanılabilir.',
'정보수정' => 'Profili düzenle',
'로그아웃' => 'Çıkış yap',
'관리자' => 'Yönetim',
'회원가입' => 'Kayıt ol',
'로그인' => 'Giriş yap',
'메인메뉴' => 'Ana menü',
'전체메뉴' => 'Tüm menüler',
'전체메뉴열기' => 'Tüm menüleri aç',
'하위분류' => 'Alt menü',
'메뉴 준비 중입니다.' => 'Menü hazırlanıyor.',
'{1}에서 설정하실 수 있습니다.' => 'Bunu şuradan ayarlayabilirsiniz: {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Yönetim &gt; Ayarlar &gt; Menü ayarları',

// theme/basic/index.php
'최신글' => 'Son gönderiler',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => '{1} grubuna yalnızca bilgisayardan erişilebilir.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Menüyü aç',
'메뉴 닫기' => 'Menüyü kapat',
'{1}에서 설정하세요.' => 'Şuradan ayarlayın: {1}.',
'1:1문의' => 'Birebir destek',
'사용자메뉴' => 'Kullanıcı menüsü',
'기본' => 'Varsayılan',
'크게' => 'Büyük',
'더크게' => 'Daha büyük',
'열기' => 'Aç',
'닫기' => 'Kapat',
'뒤로가기' => 'Geri',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Liste seçenekleri',
'선택삭제' => 'Seçilenleri sil',
'선택복사' => 'Seçilenleri kopyala',
'선택이동' => 'Seçilenleri taşı',
'글쓰기' => 'Yaz',
'카테고리' => 'Kategori',
'현재 페이지 게시물' => 'Bu sayfadaki gönderiler',
'전체선택' => 'Tümünü seç',
'공지' => 'Duyuru',
'댓글' => 'Yorumlar',
'개' => ' ',
'작성자' => 'Yazar',
'회' => ' görüntülenme',
'추천' => 'Beğen',
'비추천' => 'Beğenme',
'게시물이 없습니다.' => 'Gönderi yok.',
'자바스크립트를 사용하지 않는 경우' => 'JavaScript devre dışıysa',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'seçilen öğeler onay alınmadan hemen silinir, lütfen dikkatli olun.',
'전체 {1}건' => 'Toplam {1}',
'페이지' => 'Sayfa',
'게시물 검색' => 'Gönderilerde ara',
'검색대상' => 'Arama alanı',
'검색어를 입력하세요' => 'Bir arama terimi girin',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Lütfen en az bir gönderi seçin.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Seçilen gönderileri silmek istediğinizden emin misiniz?

Silinen veriler geri alınamaz.

Seçilen bir gönderinin yanıtları varsa,
silmek için yanıtları da seçmeniz gerekir.',
'복사' => 'Kopyala',
'이동' => 'Taşı',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Paylaş',
'스크랩' => 'Kaydet',
'답변' => 'Yanıtla',
'수정' => 'Düzenle',
'삭제' => 'Sil',
'목록' => 'Liste',
'페이지 정보' => 'Sayfa bilgisi',
'작성일' => 'Tarih',
'조회' => 'Görüntülenme',
'본문' => 'İçerik',
'이 글을 추천하셨습니다' => 'Bu gönderiyi beğendiniz',
'첨부파일' => 'Ekler',
'{1}회 다운로드' => '{1} indirme',
'관련링크' => 'İlgili bağlantılar',
'{1}회 연결' => '{1} tıklama',
'이전글' => 'Önceki gönderi',
'다음글' => 'Sonraki gönderi',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'İndirme izniniz yok.
Üyeyseniz lütfen giriş yapıp tekrar deneyin.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Bu dosyayı indirdiğinizde {1} puan düşülecektir.

Puanlar gönderi başına yalnızca bir kez düşülür; daha sonra tekrar indirirseniz yeniden düşülmez.

İndirmek istiyor musunuz?',
'이 글을 비추천하셨습니다.' => 'Bu gönderiyi beğenmediniz.',
'이 글을 추천하셨습니다.' => 'Bu gönderiyi beğendiniz.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Yorum listesi',
'{1}님의 댓글' => '{1} adlı kullanıcının yorumu',
'의 댓글' => ' (yanıt)',
'아이피' => 'IP',
'댓글 옵션' => 'Yorum seçenekleri',
'비밀글' => 'Gizli',
'등록된 댓글이 없습니다.' => 'Henüz yorum yok.',
'댓글쓰기' => 'Yorum yaz',
'글자' => ' karakter',
'댓글 내용' => 'Yorum',
'댓글내용을 입력해주세요' => 'Yorumunuzu girin',
'이름' => 'Ad',
'필수' => 'Zorunlu',
'비밀번호' => 'Şifre',
'SNS 동시등록' => 'Sosyal medyada da paylaş',
'댓글등록' => 'Yorumu gönder',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'İçerik yasaklı bir kelime içeriyor (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Yorum en az {1} karakter olmalıdır.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Yorum en fazla {1} karakter olabilir.',
'댓글을 입력하여 주십시오.' => 'Lütfen bir yorum girin.',
'이름이 입력되지 않았습니다.' => 'Lütfen adınızı girin.',
'비밀번호가 입력되지 않았습니다.' => 'Lütfen bir şifre girin.',
'이 댓글을 삭제하시겠습니까?' => 'Bu yorum silinsin mi?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Yanıtları e-postayla al',
'분류' => 'Kategori',
'선택하세요' => 'Seçin',
'이메일' => 'E-posta',
'홈페이지' => 'Web sitesi',
'옵션' => 'Seçenekler',
'제목' => 'Başlık',
'내용' => 'İçerik',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Bu panodaki gönderiler {1} ile {2} karakter arasında olmalıdır.',
'링크 #{1}' => 'Bağlantı #{1}',
'링크를 입력하세요' => 'Bir bağlantı girin',
'파일을 첨부하세요' => 'Bir dosya ekleyin',
'파일 #{1}' => 'Dosya #{1}',
'파일첨부' => 'Dosya ekle',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Ek {1}: en fazla {2}',
'파일 설명을 입력해주세요.' => 'Dosya açıklaması girin.',
'파일 삭제' => 'Dosyayı sil',
'자동등록방지' => 'Spam koruması',
'취소' => 'İptal',
'작성완료' => 'Gönder',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Otomatik satır sonu kullanılsın mı?

Otomatik satır sonu, gönderideki satır sonlarını <br> etiketlerine dönüştürür.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'Başlık yasaklı bir kelime içeriyor (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'İçerik en az {1} karakter olmalıdır.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'İçerik en fazla {1} karakter olabilir.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Görsel listesi',
'열람중' => 'Görüntüleniyor',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'Şu anda çevrimiçi kimse yok.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Arama terimi',
'자주하시는질문 분류' => 'SSS kategorileri',
'열린 분류' => 'Açık kategori',
'검색된 게시물이 없습니다.' => 'Sonuç bulunamadı.',
'등록된 FAQ가 없습니다.' => 'Henüz SSS yok.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'Yeni SSS eklemek için SSS Yönetimi',
'메뉴를 이용하십시오.' => 'menüsünü kullanın.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Önceki sayfa',
'다음페이지' => 'Sonraki sayfa',
'전체보기' => 'Tümünü gör',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Son yorumlar',
'더보기' => 'Daha fazla',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Bilgi',
'동의합니다' => 'Kabul ediyorum',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => '{1} adlı kullanıcıya e-posta gönder',
'메일쓰기' => 'E-posta yaz',
'형식' => 'Biçim',
'첨부 파일 1' => 'Ek 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Ekler gönderilmeyebilir; gönderdikten sonra dosyanın eklendiğinden mutlaka emin olun.',
'첨부 파일 2' => 'Ek 2',
'메일발송' => 'E-posta gönder',
'창닫기' => 'Pencereyi kapat',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Büyük eklerin gönderilmesi daha uzun sürer.

E-posta gönderilene kadar pencereyi kapatmayın veya yenilemeyin.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Kullanıcı adı',
'자동로그인' => 'Oturumu açık tut',
'회원로그인 안내' => 'Üye girişi',
'아이디/비밀번호 찾기' => 'Kullanıcı adımı/şifremi unuttum',
'회원 가입' => 'Kayıt ol',
'비회원 구매' => 'Üye olmadan satın alma',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Üye olmadan verilen siparişlere puan verilmez.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'Kişisel verilerin toplanmasına ilişkin metni okudum ve kabul ediyorum.',
'비회원으로 구매하기' => 'Üye olmadan satın al',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'Kişisel verilerin toplanmasına ilişkin metni okuyup kabul etmelisiniz.',
'비회원 주문조회' => 'Üye olmadan sipariş sorgula',
'주문번호' => 'Sipariş numarası',
'확인' => 'Tamam',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Sipariş e-postasındaki {1} bilgisini ve sipariş sırasında girdiğiniz {2} bilgisini doğru girin.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'Otomatik girişte bir sonraki sefer kullanıcı adınızı ve şifrenizi girmeniz gerekmez.

Kişisel bilgileriniz açığa çıkabileceğinden ortak bilgisayarlarda kullanmaktan kaçının.

Otomatik giriş kullanılsın mı?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Zorunlu) Ek gizlilik politikası',
'추가 개인정보처리방침 안내' => 'Ek gizlilik politikası',
'목적' => 'Amaç',
'항목' => 'Bilgiler',
'보유기간' => 'Saklama süresi',
'이용자 식별 및 본인여부 확인' => 'Kullanıcı tanımlama ve kimlik doğrulama',
'생년월일' => 'Doğum tarihi',
', 휴대폰 번호(아이핀 제외)' => ', cep telefonu numarası (i-PIN hariç)',
', 암호화된 개인식별부호(CI)' => ', şifrelenmiş kişisel tanımlayıcı (CI)',
'회원 탈퇴 시까지' => 'Üyelik iptal edilene kadar',
'추가 개인정보처리방침에 동의합니다.' => 'Ek gizlilik politikasını kabul ediyorum.',
'인증수단 선택하기' => 'Doğrulama yöntemi seçin',
'간편인증' => 'Basit doğrulama',
'휴대폰 본인확인' => 'Cep telefonuyla doğrulama',
'아이핀 본인확인' => 'i-PIN ile doğrulama',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'Kimlik doğrulama için JavaScript etkin olmalıdır.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Lütfen temel ayarlardan cep telefonu doğrulamasını yapılandırın.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'Doğrulamaya devam etmek için ek gizlilik politikasını kabul etmelisiniz.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Lütfen şifrenizi tekrar girin.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Üyelik iptalini tamamlamak için şifrenizi girin.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'Bilgilerinizi korumak için şifrenizi bir kez daha doğruluyoruz.',
'회원아이디' => 'Kullanıcı adı',
'비밀번호(필수)' => 'Şifre (zorunlu)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Toplam {2} mesaj ({1})',
'받은쪽지' => 'Gelen kutusu',
'보낸쪽지' => 'Gönderilenler',
'쪽지쓰기' => 'Mesaj yaz',
'안 읽은 쪽지' => 'Okunmamış mesaj',
'자료가 없습니다.' => 'Veri yok.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Mesajlar en fazla {1} gün saklanır.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Mesaj gönder',
'받는 회원아이디' => 'Alıcının kullanıcı adı',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Birden fazla alıcıyı virgülle (,) ayırın.',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Mesaj gönderildiğinde alıcı başına {1} puan düşülür.',
'보내기' => 'Gönder',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Gönderilme',
'받은' => 'Alınma',
'받는' => 'Alıcı',
'쪽지 내용' => 'Mesaj içeriği',
'{1}시간' => '{1} zamanı',
'이전쪽지' => 'Önceki mesaj',
'다음쪽지' => 'Sonraki mesaj',
'답장' => 'Yanıtla',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Gönderiyi düzenle',
'글 삭제' => 'Gönderiyi sil',
'댓글 삭제' => 'Yorumu sil',
'작성자만 글을 수정할 수 있습니다.' => 'Bu gönderiyi yalnızca yazarı düzenleyebilir.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'Yazarı sizseniz, gönderiyi düzenlemek için yazarken girdiğiniz şifreyi girin.',
'작성자만 글을 삭제할 수 있습니다.' => 'Bu gönderiyi yalnızca yazarı silebilir.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'Yazarı sizseniz, gönderiyi silmek için yazarken girdiğiniz şifreyi girin.',
'비밀글 기능으로 보호된 글입니다.' => 'Bu gizli bir gönderidir.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Yalnızca yazar ve yöneticiler görüntüleyebilir. Yazarı sizseniz şifreyi girin.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'E-postayla bul',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Kayıt olurken kullandığınız e-posta adresini girin.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'Kullanıcı adı ve şifre bilgilerinizi bu e-posta adresine göndereceğiz.',
'E-mail 주소' => 'E-posta adresi',
'인증메일 보내기' => 'Doğrulama e-postası gönder',
'본인인증으로 찾기' => 'Kimlik doğrulamayla bul',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Yeni bir şifre girin.',
'회원 아이디 :' => 'Kullanıcı adı:',
'새 비밀번호' => 'Yeni şifre',
'새 비밀번호 확인' => 'Yeni şifreyi onayla',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Şifreniz değiştirildi. Lütfen tekrar giriş yapın.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'Yeni şifre ile onayı eşleşmiyor.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Puan bakiyesi',
'y-m-d H시' => 'd.m.y H:00',
'만료' => 'Süresi doldu',
'소계' => 'Ara toplam',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => '{1} adlı kullanıcının profili',
'회원권한' => 'Üyelik seviyesi',
'포인트' => 'Puan',
'회원가입일' => 'Kayıt tarihi',
' ({1} 일)' => ' ({1} gün)',
'알 수 없음' => 'Bilinmiyor',
'최종접속일' => 'Son ziyaret',
'인사말' => 'Selamlama',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Kayıt olmak için kullanım koşullarını ve kişisel verilerin toplanıp kullanılmasını kabul etmelisiniz.',
'회원가입 약관에 모두 동의합니다' => 'Tüm koşulları kabul ediyorum',
'(필수) 회원가입약관' => '(Zorunlu) Kullanım koşulları',
'회원가입약관의 내용에 동의합니다.' => 'Kullanım koşullarını kabul ediyorum.',
'(필수) 개인정보 수집 및 이용' => '(Zorunlu) Kişisel verilerin toplanması ve kullanılması',
'개인정보 수집 및 이용' => 'Kişisel verilerin toplanması ve kullanılması',
'아이디, 이름, 비밀번호' => 'Kullanıcı adı, ad, şifre',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', doğum tarihi, cep telefonu numarası (yalnızca kimlik doğrulamada, i-PIN hariç), şifrelenmiş kişisel tanımlayıcı (CI)',
'고객서비스 이용에 관한 통지,' => 'Müşteri hizmetlerine ilişkin bildirimler,',
'CS대응을 위한 이용자 식별' => 'müşteri desteği için kullanıcı tanımlama',
'연락처 (이메일, 휴대전화번호)' => 'İletişim (e-posta, cep telefonu numarası)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'Kişisel verilerin toplanmasını ve kullanılmasını kabul ediyorum.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Kayıt olmak için kullanım koşullarını kabul etmelisiniz.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Kayıt olmak için kişisel verilerin toplanmasını ve kullanılmasını kabul etmelisiniz.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Hesap bilgileri',
'아이디 (필수)' => 'Kullanıcı adı (zorunlu)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Yalnızca harf, rakam ve _. En az 3 karakter.',
'비밀번호 (필수)' => 'Şifre (zorunlu)',
'비밀번호확인 (필수)' => 'Şifreyi onayla (zorunlu)',
'개인정보 입력' => 'Kişisel bilgiler',
' - 본인확인 시 자동입력' => ' - doğrulamada otomatik doldurulur',
'(필수)' => '(zorunlu)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Cep telefonu',
'{1} 본인확인' => '{1} doğrulaması',
'{1} 및 {2} 완료' => '{1} ve {2} tamamlandı',
'성인인증' => 'yetişkin doğrulaması',
'{1} 완료' => '{1} tamamlandı',
'이름 (필수)' => 'Ad (zorunlu)',
'닉네임 (필수)' => 'Takma ad (zorunlu)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Yalnızca Korece, Latin harfleri ve rakamlar, boşluksuz (en az 2 Korece veya 4 Latin karakter)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'Takma adınızı değiştirirseniz {1} gün boyunca tekrar değiştiremezsiniz.',
'E-mail (필수)' => 'E-posta (zorunlu)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Gönderdiğimiz e-postayı doğruladıktan sonra kaydınız tamamlanır.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'E-posta adresinizi değiştirirseniz yeniden doğrulamanız gerekir.',
'전화번호' => 'Telefon numarası',
'휴대폰번호' => 'Cep telefonu numarası',
'주소' => 'Adres',
'우편번호' => 'Posta kodu',
' (필수)' => ' (zorunlu)',
'주소검색' => 'Adres ara',
'상세주소' => 'Adres detayı',
'참고항목' => 'Ek bilgi',
'기타 개인설정' => 'Diğer ayarlar',
'서명' => 'İmza',
'자기소개' => 'Hakkımda',
'회원아이콘' => 'Üye simgesi',
'이미지선택' => 'Görsel seç',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Görsel en fazla {1} piksel genişliğinde ve {2} piksel yüksekliğinde olmalıdır.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Yalnızca en fazla {1} bayt boyutunda gif, jpg ve png dosyaları.',
'회원이미지' => 'Üye görseli',
'정보공개' => 'Herkese açık profil',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Bilgilerimi başkalarının görmesine izin ver.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'Bunu değiştirirseniz {1} gün boyunca tekrar değiştiremezsiniz.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'Bu ayar, değiştirildikten sonra {1} gün boyunca ({2} tarihine kadar) değiştirilemez.',
'Y년 m월 j일' => 'd.m.Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'Bu, üyelerin mesaj gönderip ardından yanıt almamak için profillerini gizlemesini önler.',
'추천인아이디' => 'Referans kullanıcı adı',
'수신설정' => 'Bildirim ayarları',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(İsteğe bağlı) Kişisel verilerin pazarlama amacıyla toplanması ve kullanılması',
'자세히보기' => 'Ayrıntılar',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Kişisel verilerin pazarlama amacıyla toplanması ve kullanılmasına ilişkin bilgilendirme. Tam metni okumak için Ayrıntılar\'a tıklayın.',
'(동의일자: {1})' => '(Onay tarihi: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Amaç: hizmet pazarlaması ve promosyonlar',
'* 항목: 이름, 이메일' => '* Bilgiler: ad, e-posta',
', 휴대폰 번호' => ', cep telefonu numarası',
'* 보유기간: 회원 탈퇴 시까지' => '* Saklama süresi: üyelik iptal edilene kadar',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'Reddetseniz de temel hizmeti kullanabilirsiniz, ancak kişiselleştirilmiş avantajlar sınırlanabilir.',
'(선택) 광고성 정보 수신 동의' => '(İsteğe bağlı) Reklam içerikli ileti alma onayı',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Reklam içerikli ileti (e-posta/SMS/KakaoTalk) alma onayını kapsar. Tam metni okumak için Ayrıntılar\'a tıklayın.',
'광고성 이메일 수신 동의' => 'Reklam e-postaları al',
'광고성 SMS/카카오톡 수신 동의' => 'Reklam SMS/KakaoTalk iletileri al',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'Onay verdiğiniz kişisel verileri kullanarak 08.00-21.00 saatleri arasında e-posta/SMS/KakaoTalk ile reklam içerikli ileti gönderebiliriz.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'Onayınızı istediğiniz zaman Hesabım sayfasından geri çekebilirsiniz.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(İsteğe bağlı) Kişisel verilerin üçüncü taraflarla paylaşılmasına onay',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'Kişisel verilerin üçüncü taraflarla paylaşılmasına ilişkin bilgilendirme. Tam metni okumak için Ayrıntılar\'a tıklayın.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Amaç: ürün/hizmet, promosyon ve etkinliklerle ilgili pazarlama bildirimleri (KakaoTalk vb.)',
'* 항목: 이름, 휴대폰 번호' => '* Bilgiler: ad, cep telefonu numarası',
'* 제공받는 자:' => '* Alıcı:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Saklama süresi: hizmet süresince veya onay geri çekilene kadar',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Kimliğinizi zaten {1} ile doğruladınız.

Önceki doğrulama iptal edilip yeniden doğrulama yapılsın mı?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Şifre en az 3 karakter olmalıdır.',
'비밀번호가 같지 않습니다.' => 'Şifreler eşleşmiyor.',
'이름을 입력하십시오.' => 'Lütfen adınızı girin.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Kayıt için kimlik doğrulaması gereklidir.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'Üye simgesi bir görsel dosyası değil.',
'회원이미지가 이미지 파일이 아닙니다.' => 'Üye görseli bir görsel dosyası değil.',
'본인을 추천할 수 없습니다.' => 'Kendinizi referans gösteremezsiniz.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Kayıt tamamlandı',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Tebrikler {1}, kaydınız başarıyla tamamlandı.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'Girdiğiniz adrese bir doğrulama e-postası gönderildi.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Siteyi kullanmak için e-postanızı kontrol edip doğrulamayı tamamlayın.',
'이메일 주소' => 'E-posta adresi',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'E-posta adresini yanlış girdiyseniz lütfen site yöneticisiyle iletişime geçin.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Şifreniz kimsenin okuyamayacağı şekilde şifrelenerek saklanır.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'Kullanıcı adınızı veya şifrenizi unutursanız kayıtlı e-posta adresinizle kurtarabilirsiniz.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'Üyeliğinizi istediğiniz zaman iptal edebilirsiniz; bilgileriniz belirli bir süre sonra silinir.',
'감사합니다.' => 'Teşekkür ederiz.',
'메인으로' => 'Ana sayfaya git',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Kaydet',
'제목 확인 및 댓글 쓰기' => 'Başlığı kontrol edin ve yorum yazın',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'Kaydederken teşekkür veya destek amaçlı bir yorum bırakabilirsiniz.',
'스크랩 확인' => 'Kaydetmeyi onayla',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Gelişmiş arama',
'전체게시물' => 'Tüm gönderiler',
'원글만' => 'Yalnızca gönderiler',
'코멘트만' => 'Yalnızca yorumlar',
'회원 아이디만 검색 가능' => 'Yalnızca kullanıcı adıyla arama yapılabilir',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Üye girişi',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'Hesabım',
'{1}님' => '{1}',
'안 읽은' => 'Okunmamış ',
'쪽지' => 'Mesajlar',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Üyeliğinizi iptal etmek istediğinizden emin misiniz?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Kategorileri kapat',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Kuponlar',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Anket',
'결과보기' => 'Sonuçları gör',
'관리자 관리' => 'Yönetim',
'투표하기' => 'Oy ver',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Yalnızca {1} veya üzeri seviyedeki üyeler oy verebilir.',
'투표하실 설문항목을 선택하세요' => 'Oy vermek için bir seçenek seçin',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Sonuçları yalnızca {1} veya üzeri seviyedeki üyeler görebilir.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Toplam {1} oy',
'결과' => 'Sonuçlar',
'{1} 표' => '{1} oy',
'이 설문에 대한 기타의견' => 'Bu anket hakkında diğer görüşler',
'님의 의견' => ' (görüş)',
'기타의견' => 'Diğer görüşler',
'의견' => 'Görüş',
'의견을 입력해주세요' => 'Görüşünüzü girin',
'의견남기기' => 'Görüş bildir',
'다른 투표 결과 보기' => 'Diğer anket sonuçları',
'해당 기타의견을 삭제하시겠습니까?' => 'Bu görüş silinsin mi?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Popüler aramalar',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'Yeni talep',
'답변완료' => 'Yanıtlandı',
'답변대기' => 'Bekliyor',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Seçilen gönderileri silmek istediğinizden emin misiniz?

Silinen veriler geri alınamaz.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Yanıtı düzenle',
'답변삭제' => 'Yanıtı sil',
'추가질문' => 'Ek soru',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Yanıtı gönder',
'파일 #1' => 'Dosya #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Ek 1: en fazla {1}',
'파일 #2' => 'Dosya #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Ek 2: en fazla {1}',
'답변쓰기' => 'Yanıt yaz',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'Talebinize yanıt hazırlanıyor.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'İletişim bilgileri',
'첨부' => 'Ek',
'연관질문' => 'İlgili sorular',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Yanıt al',
'답변등록 SMS알림 수신' => 'Yanıtlandığında SMS al',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Cep telefonu numarasını yalnızca rakam ve - kullanarak girin.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Arama sonuçları',
'게시판' => 'Panolar',
'{1}개' => '{1}',
'게시물' => 'Gönderiler',
'페이지 열람 중' => 'sayfa',
'검색조건' => 'Arama seçenekleri',
'제목+내용' => 'Başlık+İçerik',
'전체게시판' => 'Tüm panolar',
'검색된 자료가 하나도 없습니다.' => 'Sonuç bulunamadı.',
'게시판 내 결과' => 'Panodaki sonuçlar',
'{1} 결과 더보기' => '{1} içinde daha fazla sonuç',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Ziyaretçi istatistikleri',
'오늘' => 'Bugün',
'어제' => 'Dün',
'최대' => 'En yüksek',
'visit|전체' => 'Toplam',
'상세보기' => 'Ayrıntılar',

// theme/basic/mobile/tail.php
'회사소개' => 'Hakkımızda',
'개인정보처리방침' => 'Gizlilik politikası',
'서비스이용약관' => 'Kullanım koşulları',
'소유하신 도메인.' => 'Alan adınız.',
'사이트 정보' => 'Site bilgileri',
'회사명 : 회사명 / 대표 : 대표자명' => 'Şirket: Şirket adı / Yetkili: Yetkili adı',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Adres: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'İşletme kayıt no.: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel: 02-123-4567  Faks: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Uzaktan satış kayıt no.: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Veri sorumlusu: Sorumlu adı',
'상단으로' => 'Başa dön',
'PC 버전으로 보기' => 'Masaüstü sürümü',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Toplam {1}',
'게시판 검색' => 'Panoda ara',
'현재 페이지 게시물  전체선택' => 'Bu sayfadaki tüm gönderileri seç',
'번호' => 'No',
'글쓴이' => 'Yazar',
'날짜' => 'Tarih',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} indirme | TARİH: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1} –',
'댓글의' => '(yanıt)',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Bir kategori seçin',
'임시 저장된 글 ({1})' => 'Taslaklar ({1})',
'임시 저장된 글 목록' => 'Taslak listesi',
'링크  #{1}' => 'Bağlantı #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'SSS içinde ara',
'FAQ 수정' => 'SSS düzenle',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Popüler gönderiler',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'Görsel yok.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Üye',
'ID/PW 찾기' => 'Kullanıcı adımı/şifremi unuttum',
'주문서번호' => 'Sipariş numarası',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Yalnızca yazar ve yöneticiler görüntüleyebilir.',
'본인이라면 비밀번호를 입력하세요.' => 'Yazarı sizseniz şifreyi girin.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Yardım',
'비밀번호 확인 (필수)' => 'Şifreyi onayla (zorunlu)',
'비밀번호 확인' => 'Şifreyi onayla',
'본인확인 시 자동입력' => 'Doğrulamada otomatik doldurulur',
'닉네임' => 'Takma ad',
'주소 검색' => 'Adres ara',
'기본주소' => 'Adres',
' (동의일자: {1})' => ' (Onay tarihi: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Yorum yaz',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'Tümü',
'그룹' => 'Grup',
'일시' => 'Tarih',
'{1}번' => 'No. {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Seçilen gönderilerle devam etmek istediğinizden emin misiniz?

Silinen veriler geri alınamaz.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Hesap',
'마이페이지' => 'Hesabım',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Anketi yönet',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Şu anda önde',
'500 표' => '500 oy',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Tarih',
'상태' => 'Durum',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Yanıt seçenekleri',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Gönderi seçenekleri',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Destek talebi oluştur',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => '{1} için arama sonuçları',
'게시판 {1}개' => '{1} pano',
'게시물 {1}개' => '{1} gönderi',
'새창' => 'Yeni pencere',

// theme/basic/tail.php
'모바일버전' => 'Mobil sürüm',
);
