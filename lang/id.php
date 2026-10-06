<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (id). 틀은 php lang/build.php id 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Silakan instal toko terlebih dahulu sebelum digunakan.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Terlalu banyak permintaan. Silakan coba lagi nanti.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Nama pengguna perujuk hanya boleh berisi huruf Latin, angka, dan _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Nama pengguna perujuk yang Anda masukkan tidak ada.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Silakan gunakan dengan cara yang benar.',

// bbs/alert.php
'오류안내 페이지' => 'Halaman kesalahan',
'결과안내 페이지' => 'Halaman hasil',
'다음 항목에 오류가 있습니다.' => 'Terdapat kesalahan pada item berikut.',
'다음 내용을 확인해 주세요.' => 'Silakan periksa hal berikut.',
'돌아가기' => 'Kembali',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Silakan tutup jendela baru lalu coba lagi tindakan sebelumnya.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Silakan tutup jendela baru lalu gunakan layanan.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Papan tidak ditemukan.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Nilai bo_table tidak diterima.\\n\\nKirimkan dengan format board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Postingan tidak ditemukan.\\n\\nPostingan mungkin telah dihapus atau dipindahkan.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Tamu tidak memiliki izin untuk mengakses papan ini.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Anda tidak dapat membaca postingan karena tidak memiliki izin akses.\\n\\nUntuk pertanyaan, silakan hubungi administrator.',
'글을 읽을 권한이 없습니다.' => 'Anda tidak memiliki izin untuk membaca postingan.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk membaca postingan.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Hanya anggota yang telah verifikasi identitas yang dapat membaca postingan di papan ini.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Hanya anggota yang telah verifikasi identitas yang dapat membaca postingan di papan ini.\\n\\nSilakan lakukan verifikasi identitas di halaman ubah profil.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Hanya anggota dewasa yang telah diverifikasi melalui verifikasi identitas yang dapat membaca postingan di papan ini.\\n\\nJika Anda sudah dewasa tetapi tidak dapat membaca, silakan ulangi verifikasi identitas di halaman ubah profil.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Anda tidak dapat membaca postingan ({2}) karena poin Anda ({1}) tidak mencukupi.\\n\\nSilakan kumpulkan poin lalu coba lagi.',
'목록을 볼 권한이 없습니다.' => 'Anda tidak memiliki izin untuk melihat daftar.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk melihat daftar.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'{1} {2} 페이지' => '{1} - Halaman {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Pilih setidaknya satu item untuk: {1}.',
'올바른 방법으로 이용해 주세요.' => 'Silakan gunakan dengan cara yang benar.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Silakan periksa hal di bawah ini.',
'확인' => 'OK',
'취소' => 'Batal',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Silakan periksa terlebih dahulu Manajemen papan->Manajemen konten di mode admin.',
'등록된 내용이 없습니다.' => 'Belum ada konten.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} tidak ditemukan.</p>',

// bbs/current_connect.php
'현재접속자' => 'Pengunjung saat ini',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Tidak dapat menghapus karena kesalahan token.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus karena papan ini bukan milik grup yang Anda kelola.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus postingan yang ditulis oleh anggota dengan level lebih tinggi dari Anda.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus karena ini bukan papan yang Anda kelola.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus karena ini bukan postingan Anda.',
'로그인 후 삭제하세요.' => 'Silakan masuk terlebih dahulu untuk menghapus.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Tidak dapat menghapus karena kata sandi salah.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Tidak dapat menghapus karena ada balasan untuk postingan ini.\\n\\nSilakan hapus balasannya terlebih dahulu.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Tidak dapat menghapus karena ada komentar pada postingan ini.\\n\\nPostingan dengan {1} komentar atau lebih tidak dapat dihapus.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Anda tidak memiliki izin akses.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Komentar tidak ditemukan atau ini bukan komentar.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Tidak dapat menghapus karena komentar ini milik anggota dengan level lebih tinggi dari admin grup.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus komentar karena papan ini bukan milik grup yang Anda kelola.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Tidak dapat menghapus karena komentar ini milik anggota dengan level lebih tinggi dari admin papan.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Anda tidak dapat menghapus komentar karena ini bukan papan yang Anda kelola.',
'비밀번호가 틀립니다.' => 'Kata sandi salah.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Tidak dapat menghapus karena ada balasan untuk komentar ini.',

// bbs/download.php
'잘못된 접근입니다.' => 'Akses tidak valid.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk mengunduh.\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'파일 정보가 존재하지 않습니다.' => 'Informasi file tidak ditemukan.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Token telah kedaluwarsa atau tidak valid.\\nSilakan muat ulang browser lalu coba lagi.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Mengunduh file {1} akan memotong poin ({2} poin).\\nPoin hanya dipotong sekali per postingan dan tidak akan dipotong lagi jika Anda mengunduh ulang nanti.\\nTetap unduh?',
'다운로드 권한이 없습니다.' => 'Anda tidak memiliki izin untuk mengunduh.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'파일이 존재하지 않습니다.' => 'File tidak ditemukan.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Anda tidak dapat mengunduh ({2}) karena poin Anda ({1}) tidak mencukupi.\\n\\nSilakan kumpulkan poin lalu unduh lagi.',
'다운로드 &gt; {1}' => 'Unduh &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Anggota tidak ditemukan.',
'탈퇴 또는 차단된 회원입니다.' => 'Anggota ini telah keluar atau diblokir.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Permintaan verifikasi email sudah diproses atau tidak valid.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Verifikasi email berhasil.\\n\\nSekarang Anda dapat masuk dengan nama pengguna {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Waktu verifikasi email telah habis. Silakan minta email verifikasi lagi.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Informasi permintaan verifikasi email tidak valid.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Nilai yang diterima tidak valid.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Anda telah berhenti berlangganan email informasi.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Silakan periksa terlebih dahulu Manajemen papan->Manajemen FAQ di mode admin.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Untuk mengirim email, opsi "Gunakan pengiriman email" harus diaktifkan di pengaturan.\\n\\nSilakan hubungi administrator.',
'회원만 이용하실 수 있습니다.' => 'Hanya untuk anggota.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Anda tidak dapat mengirim email kepada orang lain jika profil Anda tidak publik.\\n\\nPengaturan profil publik dapat diubah di halaman ubah profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Informasi anggota tidak ditemukan.\\n\\nAnggota tersebut mungkin telah keluar.',
'정보공개를 하지 않았습니다.' => 'Profil tidak dipublikasikan.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Hanya sejumlah email tertentu yang dapat dikirim per sesi.\\n\\nUntuk terus mengirim email, silakan masuk atau akses kembali.',
'메일 쓰기' => 'Tulis email',
'이메일이 올바르지 않습니다.' => 'Email tidak valid.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Batas pengiriman email formulir telah terlampaui.',
'자동등록방지 숫자가 틀렸습니다.' => 'Kode anti-spam salah.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Email tidak dapat dikirim karena format alamat email tidak valid.',
'허용되지 않는 파일 확장자입니다.' => 'Ekstensi file tidak diizinkan.',
'메일보내기' => 'Kirim email',
'메일 발송중' => 'Mengirim email',
'메일을 정상적으로 발송하였습니다.' => 'Email berhasil dikirim.',

// bbs/good.php
'회원만 가능합니다.' => 'Hanya untuk anggota.',
'값이 제대로 넘어오지 않았습니다.' => 'Nilai tidak diterima dengan benar.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Anda hanya dapat menyukai atau tidak menyukai dari halaman postingan tersebut.',
'존재하는 게시판이 아닙니다.' => 'Papan tidak ditemukan.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Anda tidak dapat menyukai atau tidak menyukai postingan sendiri.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Papan ini tidak menggunakan fitur suka.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Papan ini tidak menggunakan fitur tidak suka.',
'추천' => 'Suka',
'비추천' => 'Tidak suka',
'이미 {1} 하신 글 입니다.' => 'Anda sudah memberi {1} pada postingan ini.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Anda sudah menyukai atau tidak menyukai postingan ini.',
'이 글을 {1} 하셨습니다.' => 'Anda telah memberi {1} pada postingan ini.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Grup {1} hanya dapat diakses dari perangkat seluler.',

// bbs/link.php
'링크' => 'Tautan',
'링크가 없습니다.' => 'Tidak ada tautan.',

// bbs/list.php
'전체' => 'Semua',
'열린 분류' => 'Kategori terbuka',
'이전검색' => 'Pencarian sebelumnya',
'다음검색' => 'Pencarian berikutnya',

// bbs/login.php
'로그인' => 'Masuk',

// bbs/login_check.php
'로그인 검사' => 'Pemeriksaan login',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Nama pengguna dan kata sandi tidak boleh kosong.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Nama pengguna tidak terdaftar atau kata sandi salah.\\nKata sandi membedakan huruf besar dan kecil.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Akun Anda diblokir.\\nTanggal pemblokiran: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Anda tidak dapat mengakses karena akun ini telah dihapus.\\nTanggal keluar: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Anda harus memverifikasi email melalui {1} sebelum dapat masuk. Untuk mengganti alamat email dan memverifikasinya, klik Batal.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Jika folder data tidak memiliki izin tulis atau ruang disk habis,\\nlogin mungkin gagal. Silakan periksa ruang disk dan izin tulis.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'url berisi nilai yang tidak valid.',
'url에 도메인을 지정할 수 없습니다.' => 'Domain tidak dapat ditentukan dalam url.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Verifikasi identitas tidak tersedia. Silakan hubungi administrator.',
'본인인증을 다시 해주세요.' => 'Silakan lakukan verifikasi identitas lagi.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Silakan masuk terlebih dahulu.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Nilai w tidak diterima dengan benar.',
'잘못된 접근입니다' => 'Akses tidak valid',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Nama pengguna tidak ada. Silakan gunakan dengan cara yang benar.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Sudah ada akun yang terdaftar dengan informasi verifikasi identitas yang Anda masukkan.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Informasi yang diverifikasi tidak cocok dengan informasi anggota yang dimasukkan. Silakan coba lagi',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Hanya anggota yang sudah masuk yang dapat mengakses.',
'회원 비밀번호 확인' => 'Konfirmasi kata sandi anggota',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Hanya anggota yang dapat mengakses.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Super admin tidak dapat keluar dari keanggotaan',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Gagal memproses penghapusan keanggotaan. Silakan periksa status anggota.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1}, Anda telah keluar dari keanggotaan pada {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'Kotak pesan saya',
'kind 변수 값이 올바르지 않습니다.' => 'Nilai variabel kind tidak valid.',
'받은' => 'Diterima',
'보낸' => 'Dikirim',
'정보없음' => 'Tidak ada informasi',
'아직 읽지 않음' => 'Belum dibaca',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Anda tidak dapat mengirim pesan kepada orang lain jika profil Anda tidak publik. Pengaturan profil publik dapat diubah di halaman ubah profil.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Informasi anggota tidak ditemukan.\\n\\nAnggota tersebut mungkin telah keluar.',
'쪽지 보내기' => 'Kirim pesan',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Nama pengguna \'{1}\' tidak ada (atau profilnya tidak publik), atau akunnya telah keluar atau diblokir.\\nPesan tidak dikirim.',
'해당 회원이 존재하지 않습니다.' => 'Anggota tersebut tidak ditemukan.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Anda tidak dapat mengirim pesan karena poin Anda ({1} poin) tidak mencukupi.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Pesan telah dikirim ke {1}.',
'회원아이디 오류 같습니다.' => 'Sepertinya terjadi kesalahan pada nama pengguna.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Silakan kirimkan nilai {1}.',
'{1} 쪽지 보기' => 'Lihat pesan ({1})',

// bbs/move.php
'이동' => 'Pindahkan',
'복사' => 'Salin',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Nilai sw tidak diterima dengan benar.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Hanya admin papan ke atas yang dapat mengakses.',
'게시물 {1}' => 'Postingan: {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Silakan pilih setidaknya satu papan untuk: {1}.',
'현재 페이지 게시판 전체' => 'Semua papan di halaman ini',
'게시판' => 'Papan',
'현재' => 'Saat ini',
'창닫기' => 'Tutup jendela',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Silakan pilih setidaknya satu papan tujuan untuk postingan ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Postingan telah diproses ({1}) ke papan yang dipilih.',

// bbs/new.php
'새글' => 'Postingan baru',
'그룹' => 'Grup',
'전체그룹' => 'Semua grup',
'[코] ' => '[Komentar] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Hanya super admin yang dapat mengakses.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Notifikasi pop-up',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Jangan tampilkan lagi selama {1} jam',
'닫기' => 'Tutup',
'팝업레이어 알림이 없습니다.' => 'Tidak ada notifikasi pop-up.',

// bbs/password.php
'비밀번호 입력' => 'Masukkan kata sandi',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Anda sudah masuk.',
'회원정보 찾기' => 'Cari informasi akun',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Alamat email salah.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Email untuk memverifikasi nama pengguna dan kata sandi telah dikirim ke {1}.\\n\\nSilakan periksa email Anda.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Informasi pemulihan akun yang Anda minta',
'회원정보 찾기 안내' => 'Panduan pemulihan akun',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) telah meminta pemulihan informasi akun pada {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Di situs kami, bahkan administrator tidak dapat mengetahui kata sandi Anda, jadi kami membuat kata sandi baru alih-alih memberitahukan kata sandi lama.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Periksa kata sandi baru di bawah ini, lalu <span style="color:#ff3061">klik tautan <strong>Ubah kata sandi</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Setelah muncul pesan bahwa kata sandi telah diubah, masuklah ke situs dengan nama pengguna dan kata sandi baru.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Setelah masuk, silakan ganti kata sandi melalui menu ubah profil.',
'회원아이디' => 'Nama pengguna',
'변경될 비밀번호' => 'Kata sandi baru',
'비밀번호 변경' => 'Ubah kata sandi',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Kata sandi telah diubah.\\n\\nSilakan masuk dengan nama pengguna dan kata sandi baru.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Tidak dapat mencari nama pengguna/kata sandi melalui verifikasi identitas. Silakan hubungi administrator.',
'패스워드 변경' => 'Ubah kata sandi',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Kata sandi tidak diterima.',
'비밀번호가 일치하지 않습니다.' => 'Kata sandi tidak cocok.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Hanya anggota yang dapat melihat.',
'{1} 님의 포인트 내역' => 'Riwayat poin {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Nilai po_id tidak diterima dengan benar.',
'기타의견이 비활성화되어 있습니다.' => 'Opini lainnya dinonaktifkan.',
'권한이 없습니다.' => 'Anda tidak memiliki izin.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Informasi jajak pendapat tidak ditemukan.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Hanya anggota level {1} ke atas yang dapat melihat hasilnya.',
'설문조사 결과' => 'Hasil jajak pendapat',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Hanya anggota level {1} ke atas yang dapat ikut memilih.',
'항목을 선택하세요.' => 'Silakan pilih item.',
'{1}에 이미 참여하셨습니다.' => 'Anda sudah berpartisipasi dalam {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Anda tidak dapat melihat profil orang lain jika profil Anda tidak publik.\\n\\nPengaturan profil publik dapat diubah di halaman ubah profil.',
'{1}님의 자기소개' => 'Tentang {1}',
'소개 내용이 없습니다.' => 'Belum ada perkenalan.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Jika Anda anggota, silakan masuk terlebih dahulu.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Silakan pilih setidaknya satu postingan untuk dihapus.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Jika Anda anggota, silakan masuk terlebih dahulu.',
'열린 분류 ' => 'Kategori terbuka ',
'{1}이 존재하지 않습니다.' => '{1} tidak ditemukan.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Postingan tidak ditemukan.\\nPostingan mungkin telah dihapus atau bukan milik Anda.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Pertanyaan yang sudah dijawab tidak dapat diubah.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Anda tidak memiliki izin untuk mengubah postingan.\\n\\nSilakan gunakan dengan cara yang benar.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Silakan atur kategori di pengaturan Pertanyaan 1:1',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Silakan pilih kategori dengan benar.',
'이메일을 입력하세요.' => 'Silakan masukkan email.',
'<strong>제목</strong>을 입력하세요.' => 'Silakan masukkan <strong>judul</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Silakan masukkan <strong>isi</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Isi mengandung banyak kode yang tidak valid.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Terjadi kesalahan karena ukuran file atau isi postingan melebihi batas yang diatur di server.\\npost_max_size={1} , upload_max_filesize={2}\\nSilakan hubungi admin papan atau admin server.',
'답변은 관리자만 등록할 수 있습니다.' => 'Hanya administrator yang dapat menambahkan jawaban.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Jawaban tidak dapat ditambahkan karena pertanyaan tidak ditemukan.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Tidak dapat membalas sebuah jawaban.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Silakan unggah paling banyak 2 lampiran.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'File "{1}" tidak dapat diunggah karena ukurannya melebihi batas server ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'File "{1}" tidak terunggah dengan benar.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'File "{1}" tidak diunggah karena ukurannya ({2} byte) melebihi batas papan ({3} byte).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'File "{1}" tidak dapat disimpan dengan aman. Silakan periksa sumber angka acak dan jalur penyimpanan di server.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} - Notifikasi jawaban',

// bbs/register.php
'회원가입약관' => 'Ketentuan layanan',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Ubah email verifikasi',
'이미 메일인증 하신 회원입니다.' => 'Email Anda sudah diverifikasi.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Jika Anda belum menerima email verifikasi, Anda dapat mengubah alamat email akun Anda.',
'사이트 이용정보 입력' => 'Informasi akun',
'필수' => 'Wajib',
'자동등록방지' => 'Anti-spam',
'인증메일변경' => 'Ubah email verifikasi',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'Email {1} sudah digunakan.\\n\\nSilakan masukkan alamat email lain.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Email verifikasi',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Email verifikasi telah dikirim ulang ke {1}.\\n\\nSilakan periksa {1} sebentar lagi.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Anda harus menyetujui ketentuan layanan untuk mendaftar.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Anda harus menyetujui pengumpulan dan penggunaan informasi pribadi untuk mendaftar.',
'회원 가입' => 'Daftar',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Silakan ubah informasi admin dari halaman admin.',
'로그인 후 이용하여 주십시오.' => 'Silakan masuk terlebih dahulu.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Informasi yang diterima tidak cocok dengan anggota yang sedang masuk.',
'비밀번호를 입력해 주세요.' => 'Silakan masukkan kata sandi.',
'회원 정보 수정' => 'Ubah profil',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Tindakan ini tidak dapat dilakukan (atau dilihat) dalam mode demo.',
'이름을 올바르게 입력해 주십시오.' => 'Silakan masukkan nama dengan benar.',
'닉네임을 올바르게 입력해 주십시오.' => 'Silakan masukkan nama panggilan dengan benar.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Verifikasi identitas diperlukan untuk mendaftar.',
'추천인이 존재하지 않습니다.' => 'Perujuk tidak ditemukan.',
'본인을 추천할 수 없습니다.' => 'Anda tidak dapat merujuk diri sendiri.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Selamat, pendaftaran Anda berhasil.',
'로그인 되어 있지 않습니다.' => 'Anda belum masuk.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Tidak dapat mengubah karena informasi yang akan diubah tidak cocok dengan akun yang sedang masuk.\\nJika Anda menggunakan cara yang tidak benar, harap segera hentikan.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Silakan unggah ikon anggota berukuran maksimal {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} bukan file gambar.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Silakan unggah gambar anggota berukuran maksimal {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} bukan file gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Informasi akun telah diperbarui.\\n\\nAnda harus memverifikasi ulang karena alamat email telah berubah.',
'회원정보수정' => 'Ubah profil',
'회원 정보가 수정 되었습니다.' => 'Informasi akun telah diperbarui.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Email selamat datang',
'회원가입을 축하합니다.' => 'Selamat atas pendaftaran Anda.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Selamat, <b>{1}</b>, atas pendaftaran Anda.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Kami akan bekerja lebih keras untuk membalas dukungan Anda.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Klik <strong>Verifikasi email</strong> di bawah untuk menyelesaikan pendaftaran.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Tautan verifikasi berlaku selama {1} menit setelah dikirim.',
'감사합니다.' => 'Terima kasih.',
'메일인증' => 'Verifikasi email',
'사이트바로가기' => 'Kunjungi situs',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Email verifikasi anggota',
'회원 인증 메일입니다.' => 'Ini adalah email verifikasi anggota.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Alamat email <b>{1}</b> telah diubah.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Klik tautan di bawah untuk menyelesaikan verifikasi.',
'{1} 로그인' => 'Masuk ke {1}',

// bbs/register_result.php
'회원가입 완료' => 'Pendaftaran selesai',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS hanya tersedia untuk papan yang dapat dibaca oleh tamu.',
'RSS 보기가 금지되어 있습니다.' => 'Tampilan RSS tidak diizinkan.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Simpanan {1}',
'[게시판 없음]' => '[Papan tidak ada]',
'[글 없음]' => '[Postingan tidak ada]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Hanya anggota yang dapat mengakses.',
'로그인하기' => 'Masuk',
'올바른 방법으로 사용해 주십시오.' => 'Silakan gunakan dengan cara yang benar.',
'코멘트는 스크랩 할 수 없습니다.' => 'Komentar tidak dapat disimpan.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Anda sudah menyimpan postingan ini.

Lihat simpanan Anda sekarang?',
'이미 스크랩하신 글 입니다.' => 'Anda sudah menyimpan postingan ini.',
'스크랩 확인하기' => 'Lihat simpanan',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Postingan yang ingin Anda simpan tidak ditemukan.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Anda tidak dapat mengirim postingan berturut-turut dalam waktu terlalu singkat.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Postingan ini telah disimpan.

Lihat simpanan Anda sekarang?',
'이 글을 스크랩 하였습니다.' => 'Postingan ini telah disimpan.',

// bbs/search.php
'전체검색 결과' => 'Hasil pencarian',
'[비밀글 입니다.]' => '[Ini postingan rahasia.]',
'게시판 그룹선택' => 'Pilih grup papan',
'전체 분류' => 'Semua kategori',

// bbs/view_comment.php
'비밀글 입니다.' => 'Ini postingan rahasia.',
'댓글내용 확인' => 'Lihat isi komentar',

// bbs/view_image.php
'이미지 크게보기' => 'Lihat gambar lebih besar',
'이미지 확장자가 아닙니다.' => 'Bukan ekstensi gambar.',
'이미지 파일이 아닙니다.' => 'Bukan file gambar.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Nilai bo_table tidak diterima.\\nKirimkan dengan format write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Postingan tidak ditemukan.\\nPostingan mungkin telah dihapus atau dipindahkan.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Nilai \\$wr_id tidak digunakan saat menulis postingan baru.',
'글을 쓸 권한이 없습니다.' => 'Anda tidak memiliki izin untuk menulis.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk menulis.\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Anda tidak dapat menulis ({2}) karena poin Anda ({1}) tidak mencukupi.\\n\\nSilakan kumpulkan poin lalu coba lagi.',
'글쓰기' => 'Tulis',
'글을 수정할 권한이 없습니다.' => 'Anda tidak memiliki izin untuk mengubah postingan.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk mengubah postingan.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Tidak dapat mengubah karena ada balasan untuk postingan ini.\\n\\nPostingan yang memiliki balasan tidak dapat diubah.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Tidak dapat mengubah karena ada komentar pada postingan ini.\\n\\nPostingan dengan {1} komentar atau lebih tidak dapat diubah.',
'글수정' => 'Ubah postingan',
'글을 답변할 권한이 없습니다.' => 'Anda tidak memiliki izin untuk membalas postingan.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin untuk menulis balasan.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Anda tidak dapat membalas ({2}) karena poin Anda ({1}) tidak mencukupi.\\n\\nSilakan kumpulkan poin lalu coba lagi.',
'공지에는 답변 할 수 없습니다.' => 'Tidak dapat membalas pengumuman.',
'정상적인 접근이 아닙니다.' => 'Akses tidak valid.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Hanya penulis atau administrator yang dapat membalas postingan rahasia.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Postingan rahasia dari tamu tidak dapat dibalas.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Anda tidak dapat membalas lagi.\\n\\nBalasan hanya dapat sampai 10 tingkat.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Anda tidak dapat membalas lagi.\\n\\nBalasan hanya dapat sampai 26.',
'글답변' => 'Balas postingan',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Anda tidak memiliki izin akses.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Anda tidak dapat menulis karena tidak memiliki izin akses.\\n\\nUntuk pertanyaan, silakan hubungi administrator.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Hanya anggota yang telah verifikasi identitas yang dapat menulis di papan ini.\\n\\nJika Anda anggota, silakan masuk terlebih dahulu.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Hanya anggota yang telah verifikasi identitas yang dapat menulis di papan ini.\\n\\nSilakan lakukan verifikasi identitas di halaman ubah profil.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Nama wajib diisi.',
'댓글을 쓸 권한이 없습니다.' => 'Anda tidak memiliki izin untuk menulis komentar.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Postingan tidak ditemukan.\\nPostingan mungkin telah dihapus atau dipindahkan.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Anda tidak dapat menulis komentar ({2}) karena poin Anda ({1}) tidak mencukupi.\\n\\nSilakan kumpulkan poin lalu coba lagi.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Tidak ada komentar untuk dibalas.\\n\\nKomentar mungkin telah dihapus saat Anda membalas.',
'댓글을 등록할 수 없습니다.' => 'Komentar tidak dapat ditambahkan.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Anda tidak dapat membalas lagi.\\n\\nBalasan hanya dapat sampai 5 tingkat.',
'원글
{1}


댓글
{2}' => 'Postingan asli
{1}


Komentar
{2}',
'입력' => 'Baru',
'수정' => 'Ubah',
'답변' => 'Balas',
'댓글 ' => 'Komentar ',
'댓글 수정' => 'Ubah komentar',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Ada postingan di papan {2} ({3}).',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Tidak dapat mengubah karena komentar ini milik anggota dengan level lebih tinggi dari admin grup.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Anda tidak dapat mengubah komentar karena papan ini bukan milik grup yang Anda kelola.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Tidak dapat mengubah karena komentar ini milik anggota dengan level lebih tinggi dari admin papan.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Anda tidak dapat mengubah komentar karena ini bukan papan yang Anda kelola.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Anda tidak dapat mengubah karena ini bukan postingan Anda.',
'댓글을 수정할 권한이 없습니다.' => 'Anda tidak memiliki izin untuk mengubah komentar.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Tidak dapat mengubah karena ada balasan untuk komentar ini.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Informasi papan tidak valid.',

// bbs/write_update.php
'게시글 저장' => 'Simpan postingan',
'<strong>분류</strong>를 선택하세요.' => 'Silakan pilih <strong>kategori</strong>.',
'분류를 올바르게 입력하세요.' => 'Silakan masukkan kategori dengan benar.',
'올바른 방법으로 수정하여 주십시오.' => 'Silakan ubah dengan cara yang benar.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Anda tidak dapat mengubah karena papan ini bukan milik grup yang Anda kelola.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Anda tidak dapat mengubah postingan yang ditulis oleh anggota dengan level lebih tinggi dari Anda.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Anda tidak dapat mengubah karena ini bukan papan yang Anda kelola.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Silakan konfirmasi kata sandi lalu ubah kembali.',
'로그인 후 수정하세요.' => 'Silakan masuk terlebih dahulu untuk mengubah.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Tidak dapat dikirim sebagai postingan rahasia karena papan ini tidak menggunakan postingan rahasia.',
'관리자만 공지할 수 있습니다.' => 'Hanya administrator yang dapat membuat pengumuman.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Anda tidak dapat membalas lagi.\\nBalasan hanya dapat sampai 10 tingkat.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Anda tidak dapat membalas lagi.\\nBalasan hanya dapat sampai 26.',
'제목을 입력하여 주십시오.' => 'Silakan masukkan judul.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Silakan hapus file yang ada, lalu unggah paling banyak {1} lampiran.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Silakan unggah paling banyak {1} lampiran.',
'코멘트' => 'Komentar',
'코멘트 수정' => 'Ubah komentar',

// bbs/write_update_mail.php
'{1} 메일' => 'Email: {1}',
'작성자 {1}' => 'Penulis: {1}',
'사이트에서 게시물 확인하기' => 'Lihat postingan di situs',

// common.php
'접근이 가능하지 않습니다.' => 'Akses tidak diizinkan.',
'접근 불가합니다.' => 'Akses ditolak.',

// head.php
'본문 바로가기' => 'Langsung ke konten',
'커뮤니티' => 'Komunitas',
'쇼핑몰' => 'Toko',
'접속자' => 'Pengunjung',
'사이트 내 전체검색' => 'Pencarian situs',
'검색어 필수' => 'Kata kunci (wajib)',
'검색어를 입력해주세요' => 'Masukkan kata kunci',
'검색' => 'Cari',
'검색어는 두글자 이상 입력하십시오.' => 'Masukkan minimal dua karakter.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Agar pencarian lebih cepat, kata kunci hanya boleh berisi satu spasi.',
'정보수정' => 'Ubah profil',
'로그아웃' => 'Keluar',
'회원가입' => 'Daftar',
'메인메뉴' => 'Menu utama',
'전체메뉴' => 'Semua menu',
'전체메뉴열기' => 'Buka semua menu',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'Menu sedang disiapkan.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} sedang masuk ',

// lib/common.lib.php
'처음' => 'Pertama',
'이전' => 'Sebelumnya',
'페이지' => 'Halaman',
'열린' => 'Saat ini',
'다음' => 'Berikutnya',
'맨끝' => 'Terakhir',
'답변글' => 'Balasan',
'{1} 자기소개' => 'Tentang {1}',
'{1} 이름으로 검색' => 'Cari berdasarkan nama {1}',
'쪽지보내기' => 'Kirim pesan',
'홈페이지' => 'Situs web',
'자기소개' => 'Tentang saya',
'아이디로 검색' => 'Cari berdasarkan nama pengguna',
'이름으로 검색' => 'Cari berdasarkan nama',
'전체게시물' => 'Semua postingan',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Terdapat kesalahan pada informasi MySQL Host, User, Password, atau DB.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'Fungsi mysql_connect tidak dapat digunakan karena MySQL tidak terinstal.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Terdapat kesalahan pada informasi MySQL Host, User, atau Password.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Terjadi kesalahan saat memproses database.',
'yoil|일' => 'Min',
'yoil|월' => 'Sen',
'yoil|화' => 'Sel',
'yoil|수' => 'Rab',
'yoil|목' => 'Kam',
'yoil|금' => 'Jum',
'yoil|토' => 'Sab',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Token telah kedaluwarsa. Silakan muat ulang halaman.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Alamat situs untuk verifikasi email belum diatur. Silakan hubungi administrator situs.',
'올바른 경로로 접근해 주십시오.' => 'Silakan akses melalui jalur yang benar.',
'PC 전용 게시판입니다.' => 'Papan ini khusus untuk PC.',
'모바일 전용 게시판입니다.' => 'Papan ini khusus untuk perangkat seluler.',
'간편인증' => 'Verifikasi sederhana',
'휴대폰' => 'Ponsel',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Anda telah menggunakan verifikasi identitas ({1}) sebanyak {2} kali hari ini dan tidak dapat menggunakannya lagi.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Tidak dapat digunakan karena fungsi exec tidak dapat dijalankan.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Jumlah variabel yang dikirim dari formulir melebihi nilai max_input_vars.\\nSebagian nilai yang dikirim mungkin hilang saat disimpan ke DB.\\n\\nUntuk mengatasinya, ubah nilai max_input_vars di php.ini server.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Domain lain tidak dapat ditentukan dalam url.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Tidak dapat diakses karena url berisi informasi pengguna.',
'bot 으로 판단되어 중지합니다.' => 'Dihentikan karena terdeteksi sebagai bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Silakan masukkan isi.',

// lib/get_data.lib.php
'제목' => 'Judul',
'내용' => 'Isi',
'제목+내용' => 'Judul+Isi',
'글쓴이' => 'Penulis',
'글쓴이(코)' => 'Penulis (komentar)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Silakan masukkan nama pengguna.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Nama pengguna hanya boleh berisi huruf Latin, angka, dan _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Nama pengguna minimal 3 karakter.',
'이미 사용중인 회원아이디 입니다.' => 'Nama pengguna sudah digunakan.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Nama pengguna ini tidak dapat digunakan karena merupakan kata yang dicadangkan.',
'닉네임을 입력해 주십시오.' => 'Silakan masukkan nama panggilan.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Nama panggilan hanya boleh berisi huruf Korea, huruf Latin, dan angka tanpa spasi.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Nama panggilan minimal 2 huruf Korea atau 4 huruf Latin.',
'이미 존재하는 닉네임입니다.' => 'Nama panggilan sudah ada.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Nama panggilan ini tidak dapat digunakan karena merupakan kata yang dicadangkan.',
'E-mail 주소를 입력해 주십시오.' => 'Silakan masukkan alamat email.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Format alamat email tidak valid.',
'{1} 메일은 사용할 수 없습니다.' => 'Email {1} tidak dapat digunakan.',
'이미 사용중인 E-mail 주소입니다.' => 'Alamat email sudah digunakan.',
'이름을 입력해 주십시오.' => 'Silakan masukkan nama.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Nama hanya boleh berisi huruf Korea tanpa spasi.',
'휴대폰번호를 입력해 주십시오.' => 'Silakan masukkan nomor ponsel.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Silakan masukkan nomor ponsel dengan benar.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Nomor ponsel sudah digunakan. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Permintaan tidak valid.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Verifikasi tidak valid. Silakan gunakan dengan cara yang benar.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Tidak ada akun yang terdaftar dengan informasi yang diverifikasi.',
'코드 : {1}  {2}' => 'Kode: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Hasil verifikasi sederhana KG Inicis',
'본인인증이 완료되었습니다.' => 'Verifikasi identitas selesai.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Verifikasi sederhana KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Akun ini sudah diverifikasi atas nama orang lain.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Sudah ada akun yang terdaftar dengan informasi verifikasi identitas yang Anda masukkan.\\nNama pengguna: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Dengarkan angka',
'새로고침' => 'Muat ulang',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Masukkan angka anti-spam secara berurutan.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Hasil verifikasi ponsel',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risiko manipulasi dn_hash (periksa apakah file {1} memiliki izin eksekusi.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Anda membatalkan verifikasi identitas ponsel.',
'up_hash 변조 위험있음' => 'Risiko manipulasi up_hash',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Kode situs layanan verifikasi ponsel KCP tidak ada. Silakan masukkan kode situs KCP di Admin > Pengaturan dasar.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Sudah ada akun yang terdaftar dengan informasi verifikasi identitas yang Anda masukkan.\\nNama pengguna: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Telah diverifikasi dengan nomor ponsel Anda.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Tidak ada respons verifikasi identitas. Silakan ulangi dari awal.',
'코드 : {1} {2}' => 'Kode: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Sesi verifikasi identitas telah berakhir. Silakan ulangi dari awal.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Gagal mengambil hasil verifikasi identitas ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Modul verifikasi ponsel KCP V2 hanya berjalan di PHP 7.0 ke atas.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Ekstensi PHP yang diperlukan modul verifikasi ponsel KCP V2 (openssl/curl/hash_pbkdf2) tidak aktif.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Kode situs atau ENC_KEY verifikasi ponsel KCP V2 belum diatur.\\nSilakan masukkan di Admin > Pengaturan dasar.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Gagal mendaftarkan transaksi verifikasi identitas.\\n({1} : {2})',
'휴대폰 본인확인' => 'Verifikasi ponsel',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Tidak dapat membuat data permintaan pendaftaran transaksi KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Tidak dapat mengenkripsi data permintaan pendaftaran transaksi KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Tidak ada respons dari API pendaftaran transaksi KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Tidak dapat mengurai respons API pendaftaran transaksi KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Tidak dapat membuat data permintaan hasil verifikasi KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Tidak ada respons dari API hasil verifikasi KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Tidak dapat mengurai respons API hasil verifikasi KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Tidak dapat mendekripsi data hasil verifikasi KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Tidak dapat mengurai data verifikasi KCP yang telah didekripsi.',
'cURL 초기화에 실패했습니다.' => 'Gagal menginisialisasi cURL.',
'KCP API 통신 실패: {1}' => 'Komunikasi API KCP gagal: {1}',
'KCP API HTTP 오류: {1}' => 'Kesalahan HTTP API KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Terjadi kesalahan saat verifikasi identitas ponsel. Kode kesalahan: {1}\\n\\nUntuk pertanyaan, hubungi layanan pelanggan Korea Credit Bureau (KCB) di 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Nilai yang dimasukkan perlu diperiksa',
'KCB 휴대폰 본인확인' => 'Verifikasi identitas ponsel KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Terjadi kesalahan saat verifikasi identitas i-PIN. Kode kesalahan: {1}\\n\\nUntuk pertanyaan, hubungi layanan pelanggan Korea Credit Bureau (KCB) di 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Terjadi kesalahan saat verifikasi identitas i-PIN. (Tidak ada informasi ci) Kode kesalahan: {1}\\n\\nUntuk pertanyaan, hubungi layanan pelanggan Korea Credit Bureau (KCB) di 02-708-1000.',
'KCB 아이핀 본인확인' => 'Verifikasi identitas i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Silakan atur layanan verifikasi ponsel KCB di Pengaturan dasar.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Silakan masukkan ID mitra KCB di Pengaturan dasar.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'File eksekusi modul tidak ditemukan.\\n\\nFile {1} harus berada di {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'File eksekusi modul tidak memiliki izin eksekusi.\\n\\nSilakan berikan izin eksekusi, misalnya chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'File eksekusi modul tidak memiliki izin eksekusi.\\n\\nSilakan periksa apakah IUSER memiliki izin eksekusi cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Silakan atur layanan verifikasi i-PIN KCB di Pengaturan dasar.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Silakan buat direktori key di {1}/{2}.\\n\\nSetelah dibuat, berikan izin tulis. Contoh: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Silakan ubah izin direktori {1}/{2}/key menjadi 705.\\nchmod 705 key atau chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Silakan ubah izin direktori {1}/{2}/key menjadi 707.\\n\\nchmod 707 key atau chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback X (Twitter)',
'트위터에 승인이 되었습니다.' => 'Telah disetujui oleh X (Twitter).',
'트위터에 승인이 되지 않았습니다.' => 'Tidak disetujui oleh X (Twitter).',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Lihat detail',
'페이스북으로 공유' => 'Bagikan ke Facebook',
'페이스북 공유' => 'Bagikan Facebook',
'트위터로  공유' => 'Bagikan ke X (Twitter)',
'트위터 공유' => 'Bagikan X (Twitter)',
'카카오톡으로 보내기' => 'Kirim lewat KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Juga diposting ke Facebook',
'트위터에도 등록됨' => 'Juga diposting ke X (Twitter)',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Posting juga ke X (Twitter)',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Login sosial - {1}',
'잠시후에 다시 시도해 주세요.' => 'Silakan coba lagi nanti.',
'홈으로' => 'Ke beranda',
'이 페이지 닫기' => 'Tutup halaman ini',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Anda tidak dapat mendaftar lagi karena ID {1} ini sudah terhubung atau terdaftar. Jika Anda anggota, silakan masuk lalu hubungkan akun di halaman ubah profil.',
'지정되지 않은 오류입니다.' => 'Kesalahan tidak spesifik.',
'설정 오류입니다.' => 'Kesalahan konfigurasi.',
'해당 provider 설정 오류입니다.' => 'Kesalahan konfigurasi provider ini.',
'알수 없거나 비활성화 된 provider 입니다.' => 'provider tidak dikenal atau dinonaktifkan.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Anda tidak memiliki izin untuk mengakses layanan ini.',
'인증이 실패되었습니다.. ' => 'Autentikasi gagal. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Pengguna membatalkan autentikasi atau penyedia menolak koneksi.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Permintaan profil pengguna gagal. Pengguna mungkin tidak terhubung ke layanan ini. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'Dalam hal ini, Anda harus meminta autentikasi lagi.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Pengguna tidak terhubung ke layanan ini.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Layanan ini tidak mendukung fitur tersebut.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Anda sudah masuk atau permintaan tidak valid.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Sudah ada akun yang terhubung atau permintaan tidak valid.',
'소셜 데이터 오류' => 'Kesalahan data sosial',
'SNS 사용자 인증에 실패하였습니다.' => 'Autentikasi pengguna SNS gagal.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Akun ini sudah terhubung dengan ID {1}. Silakan putuskan koneksi lalu coba lagi.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'X (Twitter)',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Menghubungkan ke {1}. Mohon tunggu sebentar.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Login sosial tidak digunakan.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Pengaturan login sosial dinonaktifkan.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Opsi jendela baru dinonaktifkan.',
'서비스 이름이 넘어오지 않았습니다.' => 'Nama layanan tidak diterima.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Login sosial tidak digunakan.',
'이미 회원가입 하였습니다.' => 'Anda sudah terdaftar.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Hanya pengguna yang masuk dengan login sosial yang dapat mengakses.',
'소셜 회원 가입 - {1}' => 'Pendaftaran sosial - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Hanya pengguna yang masuk dengan login sosial yang dapat mengakses.',
'이미 등록된 회원이 존재합니다.' => 'Anggota sudah terdaftar.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Informasi yang diverifikasi tidak cocok dengan informasi pribadi. Silakan coba lagi',
'회원 가입 오류!' => 'Kesalahan pendaftaran!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Anda bukan anggota atau nilai yang diperlukan tidak diterima.',
'권한이 없거나 잘못된 요청입니다.' => 'Anda tidak memiliki izin atau permintaan tidak valid.',
);
