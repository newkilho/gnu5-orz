<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (vi). 틀은 php lang/build.php vi 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Vui lòng cài đặt cửa hàng trước khi sử dụng.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Có quá nhiều yêu cầu. Vui lòng thử lại sau giây lát.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Tên đăng nhập của người giới thiệu chỉ được chứa chữ cái Latinh, chữ số và _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'Tên đăng nhập người giới thiệu bạn nhập không tồn tại.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Vui lòng sử dụng đúng cách.',

// bbs/alert.php
'오류안내 페이지' => 'Trang thông báo lỗi',
'결과안내 페이지' => 'Trang thông báo kết quả',
'다음 항목에 오류가 있습니다.' => 'Các mục sau có lỗi.',
'다음 내용을 확인해 주세요.' => 'Vui lòng kiểm tra nội dung sau.',
'돌아가기' => 'Quay lại',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Vui lòng đóng cửa sổ mới và thử lại thao tác trước đó.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Vui lòng đóng cửa sổ mới rồi sử dụng dịch vụ.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'Bảng tin không tồn tại.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Không nhận được giá trị bo_table.\\n\\nVui lòng truyền theo dạng board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'Bài viết không tồn tại.\\n\\nBài viết có thể đã bị xóa hoặc di chuyển.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Khách không có quyền truy cập bảng tin này.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Bạn không thể đọc bài viết vì không có quyền truy cập.\\n\\nNếu có thắc mắc, vui lòng liên hệ quản trị viên.',
'글을 읽을 권한이 없습니다.' => 'Bạn không có quyền đọc bài viết.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền đọc bài viết.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Chỉ thành viên đã xác minh danh tính mới có thể đọc bài trên bảng tin này.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Chỉ thành viên đã xác minh danh tính mới có thể đọc bài trên bảng tin này.\\n\\nVui lòng xác minh danh tính trong phần sửa hồ sơ.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Chỉ thành viên đã được xác minh là người trưởng thành qua xác minh danh tính mới có thể đọc bài trên bảng tin này.\\n\\nNếu bạn đã trưởng thành mà vẫn không đọc được, vui lòng xác minh danh tính lại trong phần sửa hồ sơ.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'Bạn không thể đọc bài ({2}) vì điểm hiện có ({1}) không đủ.\\n\\nVui lòng tích lũy điểm rồi thử lại.',
'목록을 볼 권한이 없습니다.' => 'Bạn không có quyền xem danh sách.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền xem danh sách.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'{1} {2} 페이지' => '{1} - Trang {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Vui lòng chọn ít nhất một mục để thực hiện: {1}.',
'올바른 방법으로 이용해 주세요.' => 'Vui lòng sử dụng đúng cách.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Vui lòng kiểm tra nội dung bên dưới.',
'확인' => 'OK',
'취소' => 'Hủy',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Vui lòng kiểm tra Quản lý bảng tin->Quản lý nội dung trong chế độ quản trị trước.',
'등록된 내용이 없습니다.' => 'Chưa có nội dung nào.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} không tồn tại.</p>',

// bbs/current_connect.php
'현재접속자' => 'Người đang truy cập',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Không thể xóa do lỗi token.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'Bạn không thể xóa vì bảng tin này không thuộc nhóm bạn quản lý.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'Bạn không thể xóa bài viết của thành viên có cấp quyền cao hơn bạn.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'Bạn không thể xóa vì đây không phải bảng tin bạn quản lý.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'Bạn không thể xóa vì đây không phải bài viết của bạn.',
'로그인 후 삭제하세요.' => 'Vui lòng đăng nhập để xóa.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Không thể xóa vì mật khẩu không đúng.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'Không thể xóa vì bài viết này có bài trả lời.\\n\\nVui lòng xóa các bài trả lời trước.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'Không thể xóa vì bài viết này có bình luận.\\n\\nKhông thể xóa bài viết có từ {1} bình luận trở lên.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Bạn không có quyền truy cập.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'Bình luận không tồn tại hoặc đây không phải là bình luận.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Không thể xóa vì bình luận này của thành viên có cấp quyền cao hơn quản trị nhóm.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Bạn không thể xóa bình luận vì bảng tin này không thuộc nhóm bạn quản lý.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'Không thể xóa vì bình luận này của thành viên có cấp quyền cao hơn quản trị bảng tin.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'Bạn không thể xóa bình luận vì đây không phải bảng tin bạn quản lý.',
'비밀번호가 틀립니다.' => 'Mật khẩu không đúng.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'Không thể xóa vì bình luận này có phản hồi.',

// bbs/download.php
'잘못된 접근입니다.' => 'Truy cập không hợp lệ.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền tải xuống.\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'파일 정보가 존재하지 않습니다.' => 'Không có thông tin tệp.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'Token đã hết hạn hoặc không hợp lệ.\\nVui lòng tải lại trình duyệt và thử lại.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Tải xuống tệp {1} sẽ bị trừ điểm ({2} điểm).\\nĐiểm chỉ bị trừ một lần cho mỗi bài viết, lần tải sau sẽ không bị trừ lại.\\nBạn vẫn muốn tải xuống?',
'다운로드 권한이 없습니다.' => 'Bạn không có quyền tải xuống.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'파일이 존재하지 않습니다.' => 'Tệp không tồn tại.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'Bạn không thể tải xuống ({2}) vì điểm hiện có ({1}) không đủ.\\n\\nVui lòng tích lũy điểm rồi tải lại.',
'다운로드 &gt; {1}' => 'Tải xuống &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'Thành viên không tồn tại.',
'탈퇴 또는 차단된 회원입니다.' => 'Thành viên này đã rời khỏi hoặc bị chặn.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'Yêu cầu xác minh email đã được xử lý hoặc không hợp lệ.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Xác minh email đã hoàn tất.\\n\\nGiờ bạn có thể đăng nhập bằng tên đăng nhập {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'Liên kết xác minh email đã hết hạn. Vui lòng yêu cầu gửi lại email xác minh.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'Thông tin yêu cầu xác minh email không hợp lệ.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Không nhận được giá trị hợp lệ.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'Bạn đã hủy nhận email thông tin.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Vui lòng kiểm tra Quản lý bảng tin->Quản lý FAQ trong chế độ quản trị trước.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => 'Để gửi email, cần bật tùy chọn "Sử dụng gửi email" trong cài đặt.\\n\\nVui lòng liên hệ quản trị viên.',
'회원만 이용하실 수 있습니다.' => 'Chỉ dành cho thành viên.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Bạn không thể gửi email cho người khác nếu không công khai hồ sơ của mình.\\n\\nBạn có thể cài đặt công khai hồ sơ trong phần sửa hồ sơ.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'Không có thông tin thành viên.\\n\\nThành viên này có thể đã rời khỏi.',
'정보공개를 하지 않았습니다.' => 'Hồ sơ không được công khai.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Mỗi phiên truy cập chỉ có thể gửi một số email nhất định.\\n\\nĐể tiếp tục gửi email, vui lòng đăng nhập hoặc truy cập lại.',
'메일 쓰기' => 'Viết email',
'이메일이 올바르지 않습니다.' => 'Email không hợp lệ.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'Đã vượt quá số lần gửi email qua biểu mẫu.',
'자동등록방지 숫자가 틀렸습니다.' => 'Mã chống spam không đúng.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'Không thể gửi email vì địa chỉ email không đúng định dạng.',
'허용되지 않는 파일 확장자입니다.' => 'Phần mở rộng tệp không được phép.',
'메일보내기' => 'Gửi email',
'메일 발송중' => 'Đang gửi email',
'메일을 정상적으로 발송하였습니다.' => 'Đã gửi email thành công.',

// bbs/good.php
'회원만 가능합니다.' => 'Chỉ dành cho thành viên.',
'값이 제대로 넘어오지 않았습니다.' => 'Không nhận được giá trị hợp lệ.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'Bạn chỉ có thể thích hoặc không thích từ chính trang bài viết đó.',
'존재하는 게시판이 아닙니다.' => 'Bảng tin không tồn tại.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'Bạn không thể thích hoặc không thích bài viết của chính mình.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'Bảng tin này không sử dụng chức năng thích.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'Bảng tin này không sử dụng chức năng không thích.',
'추천' => 'Thích',
'비추천' => 'Không thích',
'이미 {1} 하신 글 입니다.' => 'Bạn đã {1} bài viết này rồi.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'Bạn đã thích hoặc không thích bài viết này rồi.',
'이 글을 {1} 하셨습니다.' => 'Bạn đã {1} bài viết này.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'Nhóm {1} chỉ có thể truy cập trên thiết bị di động.',

// bbs/link.php
'링크' => 'Liên kết',
'링크가 없습니다.' => 'Không có liên kết.',

// bbs/list.php
'전체' => 'Tất cả',
'열린 분류' => 'Danh mục đang mở',
'이전검색' => 'Tìm kiếm trước',
'다음검색' => 'Tìm kiếm tiếp',

// bbs/login.php
'로그인' => 'Đăng nhập',

// bbs/login_check.php
'로그인 검사' => 'Kiểm tra đăng nhập',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Tên đăng nhập và mật khẩu không được để trống.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'Tên đăng nhập chưa được đăng ký hoặc mật khẩu không đúng.\\nMật khẩu phân biệt chữ hoa và chữ thường.',
'\\1년 \\2월 \\3일' => '\\3/\\2/\\1',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Tài khoản của bạn đã bị chặn truy cập.\\nNgày xử lý: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'Bạn không thể truy cập vì tài khoản này đã rời khỏi.\\nNgày rời khỏi: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'Bạn cần xác minh email qua {1} để có thể đăng nhập. Để đổi sang địa chỉ email khác và xác minh, hãy nhấn Hủy.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'Nếu thư mục data không có quyền ghi hoặc ổ đĩa hết dung lượng\\nthì có thể không đăng nhập được, vui lòng kiểm tra dung lượng và quyền ghi.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'url chứa giá trị không hợp lệ.',
'url에 도메인을 지정할 수 없습니다.' => 'Không thể chỉ định tên miền trong url.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Không thể sử dụng xác minh danh tính. Vui lòng liên hệ quản trị viên.',
'본인인증을 다시 해주세요.' => 'Vui lòng xác minh danh tính lại.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Vui lòng đăng nhập trước.',
'w 값이 제대로 넘어오지 않았습니다.' => 'Không nhận được giá trị w hợp lệ.',
'잘못된 접근입니다' => 'Truy cập không hợp lệ',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'Không có tên đăng nhập. Vui lòng sử dụng đúng cách.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'Đã có tài khoản đăng ký với thông tin xác minh danh tính bạn nhập.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'Thông tin đã xác minh không khớp với thông tin thành viên đã nhập. Vui lòng thử lại',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Chỉ thành viên đã đăng nhập mới có thể truy cập.',
'회원 비밀번호 확인' => 'Xác nhận mật khẩu thành viên',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Chỉ thành viên mới có thể truy cập.',
'최고 관리자는 탈퇴할 수 없습니다' => 'Quản trị viên cấp cao nhất không thể rời khỏi',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Không thể xử lý việc rời khỏi thành viên. Vui lòng kiểm tra trạng thái thành viên.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} đã rời khỏi thành viên vào ngày {2}.',
'Y년 m월 d일' => 'd/m/Y',

// bbs/memo.php
'내 쪽지함' => 'Hộp tin nhắn của tôi',
'kind 변수 값이 올바르지 않습니다.' => 'Giá trị biến kind không hợp lệ.',
'받은' => 'Nhận',
'보낸' => 'Gửi',
'정보없음' => 'Không có thông tin',
'아직 읽지 않음' => 'Chưa đọc',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Bạn không thể gửi tin nhắn cho người khác nếu không công khai hồ sơ của mình. Bạn có thể cài đặt công khai hồ sơ trong phần sửa hồ sơ.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'Không có thông tin thành viên.\\n\\nThành viên này có thể đã rời khỏi.',
'쪽지 보내기' => 'Gửi tin nhắn',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'Tên đăng nhập \'{1}\' không tồn tại (hoặc không công khai hồ sơ), hoặc đã rời khỏi hay bị chặn.\\nTin nhắn chưa được gửi.',
'해당 회원이 존재하지 않습니다.' => 'Thành viên này không tồn tại.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'Bạn không thể gửi tin nhắn vì điểm hiện có ({1} điểm) không đủ.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Đã gửi tin nhắn đến {1}.',
'회원아이디 오류 같습니다.' => 'Có vẻ tên đăng nhập bị lỗi.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Vui lòng truyền giá trị {1}.',
'{1} 쪽지 보기' => 'Xem tin nhắn ({1})',

// bbs/move.php
'이동' => 'Di chuyển',
'복사' => 'Sao chép',
'sw 값이 제대로 넘어오지 않았습니다.' => 'Không nhận được giá trị sw hợp lệ.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Chỉ quản trị bảng tin trở lên mới có thể truy cập.',
'게시물 {1}' => 'Bài viết: {1}',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Vui lòng chọn ít nhất một bảng tin để thực hiện: {1}.',
'현재 페이지 게시판 전체' => 'Tất cả bảng tin trên trang này',
'게시판' => 'Bảng tin',
'현재' => 'Hiện tại',
'창닫기' => 'Đóng cửa sổ',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Vui lòng chọn ít nhất một bảng tin đích cho bài viết ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => 'Đã thực hiện ({1}) bài viết sang bảng tin đã chọn.',

// bbs/new.php
'새글' => 'Bài viết mới',
'그룹' => 'Nhóm',
'전체그룹' => 'Tất cả nhóm',
'[코] ' => '[Bình luận] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Chỉ quản trị viên cấp cao nhất mới có thể truy cập.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Thông báo popup',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Không hiển thị lại trong {1} giờ',
'닫기' => 'Đóng',
'팝업레이어 알림이 없습니다.' => 'Không có thông báo popup.',

// bbs/password.php
'비밀번호 입력' => 'Nhập mật khẩu',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'Bạn đã đăng nhập rồi.',
'회원정보 찾기' => 'Tìm thông tin tài khoản',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Địa chỉ email không hợp lệ.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'Email xác minh tên đăng nhập và mật khẩu đã được gửi đến {1}.\\n\\nVui lòng kiểm tra email.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Hướng dẫn tìm thông tin tài khoản bạn đã yêu cầu',
'회원정보 찾기 안내' => 'Hướng dẫn tìm thông tin tài khoản',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => 'Thành viên {1} ({2}) đã yêu cầu tìm thông tin tài khoản vào lúc {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Trên trang của chúng tôi, ngay cả quản trị viên cũng không thể biết mật khẩu của bạn, vì vậy chúng tôi tạo mật khẩu mới thay vì cho bạn biết mật khẩu cũ.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Kiểm tra mật khẩu mới bên dưới, sau đó <span style="color:#ff3061">nhấn vào liên kết <strong>Đổi mật khẩu</strong>.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'Khi thông báo xác nhận đổi mật khẩu hiện ra, hãy đăng nhập trên trang web bằng tên đăng nhập và mật khẩu mới.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'Sau khi đăng nhập, vui lòng đổi sang mật khẩu mới trong mục sửa hồ sơ.',
'회원아이디' => 'Tên đăng nhập',
'변경될 비밀번호' => 'Mật khẩu mới',
'비밀번호 변경' => 'Đổi mật khẩu',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Mật khẩu đã được thay đổi.\\n\\nVui lòng đăng nhập bằng tên đăng nhập và mật khẩu mới.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Không thể tìm tên đăng nhập/mật khẩu bằng xác minh danh tính. Vui lòng liên hệ quản trị viên.',
'패스워드 변경' => 'Đổi mật khẩu',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'Không nhận được mật khẩu.',
'비밀번호가 일치하지 않습니다.' => 'Mật khẩu không khớp.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Chỉ thành viên mới có thể xem.',
'{1} 님의 포인트 내역' => 'Lịch sử điểm của {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'Không nhận được giá trị po_id hợp lệ.',
'기타의견이 비활성화되어 있습니다.' => 'Ý kiến khác đã bị tắt.',
'권한이 없습니다.' => 'Bạn không có quyền.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'Không có thông tin bình chọn.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Chỉ thành viên cấp {1} trở lên mới có thể xem kết quả.',
'설문조사 결과' => 'Kết quả bình chọn',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Chỉ thành viên cấp {1} trở lên mới có thể bình chọn.',
'항목을 선택하세요.' => 'Vui lòng chọn một mục.',
'{1}에 이미 참여하셨습니다.' => 'Bạn đã tham gia {1} rồi.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'Bạn không thể xem thông tin của người khác nếu không công khai hồ sơ của mình.\\n\\nBạn có thể cài đặt công khai hồ sơ trong phần sửa hồ sơ.',
'{1}님의 자기소개' => 'Giới thiệu của {1}',
'소개 내용이 없습니다.' => 'Chưa có nội dung giới thiệu.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'Nếu bạn là thành viên, vui lòng đăng nhập.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Vui lòng chọn ít nhất một bài viết để xóa.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'Nếu bạn là thành viên, vui lòng đăng nhập.',
'열린 분류 ' => 'Danh mục đang mở ',
'{1}이 존재하지 않습니다.' => '{1} không tồn tại.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'Bài viết không tồn tại.\\nBài viết có thể đã bị xóa hoặc không phải của bạn.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Không thể sửa câu hỏi đã được trả lời.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'Bạn không có quyền sửa bài viết.\\n\\nVui lòng sử dụng đúng cách.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Vui lòng thiết lập danh mục trong cài đặt Hỏi đáp 1:1',
'{1} 바이트' => '{1} byte',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Vui lòng chọn danh mục đúng.',
'이메일을 입력하세요.' => 'Vui lòng nhập email.',
'<strong>제목</strong>을 입력하세요.' => 'Vui lòng nhập <strong>tiêu đề</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Vui lòng nhập <strong>nội dung</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'Nội dung chứa nhiều mã không hợp lệ.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'Đã xảy ra lỗi do kích thước tệp hoặc nội dung vượt quá giới hạn của máy chủ.\\npost_max_size={1} , upload_max_filesize={2}\\nVui lòng liên hệ quản trị bảng tin hoặc quản trị máy chủ.',
'답변은 관리자만 등록할 수 있습니다.' => 'Chỉ quản trị viên mới có thể đăng câu trả lời.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'Không thể đăng câu trả lời vì câu hỏi không tồn tại.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'Không thể trả lời một câu trả lời.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Vui lòng tải lên tối đa 2 tệp đính kèm.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => 'Không thể tải lên tệp "{1}" vì dung lượng vượt quá giới hạn của máy chủ ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => 'Tệp "{1}" chưa được tải lên đúng cách.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => 'Tệp "{1}" không được tải lên vì dung lượng ({2} byte) vượt quá giới hạn của bảng tin ({3} byte).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => 'Không thể lưu tệp "{1}" an toàn. Vui lòng kiểm tra nguồn số ngẫu nhiên và đường dẫn lưu trên máy chủ.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} - Thông báo trả lời',

// bbs/register.php
'회원가입약관' => 'Điều khoản dịch vụ',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Đổi email xác minh',
'이미 메일인증 하신 회원입니다.' => 'Email của bạn đã được xác minh.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'Nếu chưa nhận được email xác minh, bạn có thể đổi địa chỉ email trong thông tin tài khoản.',
'사이트 이용정보 입력' => 'Thông tin tài khoản',
'필수' => 'Bắt buộc',
'자동등록방지' => 'Chống spam',
'인증메일변경' => 'Đổi email xác minh',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => 'Email {1} đã tồn tại.\\n\\nVui lòng nhập địa chỉ email khác.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Email xác minh',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'Email xác minh đã được gửi lại đến {1}.\\n\\nVui lòng kiểm tra {1} sau giây lát.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Bạn phải đồng ý với điều khoản dịch vụ để đăng ký.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'Bạn phải đồng ý với việc thu thập và sử dụng thông tin cá nhân để đăng ký.',
'회원 가입' => 'Đăng ký',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Vui lòng sửa thông tin quản trị viên trong trang quản trị.',
'로그인 후 이용하여 주십시오.' => 'Vui lòng đăng nhập trước.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'Thông tin nhận được không khớp với thành viên đang đăng nhập.',
'비밀번호를 입력해 주세요.' => 'Vui lòng nhập mật khẩu.',
'회원 정보 수정' => 'Sửa hồ sơ',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'Không thể thực hiện (hoặc xem) thao tác này trong chế độ demo.',
'이름을 올바르게 입력해 주십시오.' => 'Vui lòng nhập tên đúng.',
'닉네임을 올바르게 입력해 주십시오.' => 'Vui lòng nhập biệt danh đúng.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Cần xác minh danh tính để đăng ký.',
'추천인이 존재하지 않습니다.' => 'Người giới thiệu không tồn tại.',
'본인을 추천할 수 없습니다.' => 'Bạn không thể tự giới thiệu chính mình.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Chúc mừng bạn đã đăng ký thành công.',
'로그인 되어 있지 않습니다.' => 'Bạn chưa đăng nhập.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'Không thể sửa vì thông tin muốn sửa không khớp với tài khoản đang đăng nhập.\\nNếu bạn đang dùng cách không hợp lệ, vui lòng dừng lại ngay.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Vui lòng tải lên biểu tượng thành viên tối đa {1} byte.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} không phải là tệp hình ảnh.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Vui lòng tải lên ảnh thành viên tối đa {1} byte.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} không phải là tệp gif/jpg.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Thông tin tài khoản đã được cập nhật.\\n\\nBạn cần xác minh lại vì địa chỉ email đã thay đổi.',
'회원정보수정' => 'Sửa hồ sơ',
'회원 정보가 수정 되었습니다.' => 'Thông tin tài khoản đã được cập nhật.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Email chúc mừng đăng ký',
'회원가입을 축하합니다.' => 'Chúc mừng bạn đã đăng ký.',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Chân thành chúc mừng <b>{1}</b> đã đăng ký thành viên.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'Chúng tôi sẽ cố gắng hơn nữa để đáp lại sự ủng hộ của bạn.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Nhấn <strong>Xác minh email</strong> bên dưới để hoàn tất đăng ký.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'Liên kết xác minh có hiệu lực trong {1} phút kể từ khi gửi.',
'감사합니다.' => 'Xin cảm ơn.',
'메일인증' => 'Xác minh email',
'사이트바로가기' => 'Đi đến trang web',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Email xác minh thành viên',
'회원 인증 메일입니다.' => 'Đây là email xác minh thành viên.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'Địa chỉ email của <b>{1}</b> đã được thay đổi.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Nhấn vào liên kết bên dưới để hoàn tất xác minh.',
'{1} 로그인' => 'Đăng nhập {1}',

// bbs/register_result.php
'회원가입 완료' => 'Đăng ký hoàn tất',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS chỉ hỗ trợ các bảng tin mà khách có thể đọc.',
'RSS 보기가 금지되어 있습니다.' => 'Xem RSS không được phép.',

// bbs/scrap.php
'{1}님의 스크랩' => 'Bài đã lưu của {1}',
'[게시판 없음]' => '[Không có bảng tin]',
'[글 없음]' => '[Không có bài viết]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Chỉ thành viên mới có thể truy cập.',
'로그인하기' => 'Đăng nhập',
'올바른 방법으로 사용해 주십시오.' => 'Vui lòng sử dụng đúng cách.',
'코멘트는 스크랩 할 수 없습니다.' => 'Không thể lưu bình luận.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'Bạn đã lưu bài viết này rồi.

Bạn có muốn xem bài đã lưu ngay bây giờ không?',
'이미 스크랩하신 글 입니다.' => 'Bạn đã lưu bài viết này rồi.',
'스크랩 확인하기' => 'Xem bài đã lưu',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'Bài viết bạn muốn lưu không tồn tại.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'Bạn không thể đăng bài liên tiếp trong thời gian quá ngắn.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'Đã lưu bài viết này.

Bạn có muốn xem bài đã lưu ngay bây giờ không?',
'이 글을 스크랩 하였습니다.' => 'Đã lưu bài viết này.',

// bbs/search.php
'전체검색 결과' => 'Kết quả tìm kiếm',
'[비밀글 입니다.]' => '[Đây là bài viết bí mật.]',
'게시판 그룹선택' => 'Chọn nhóm bảng tin',
'전체 분류' => 'Tất cả danh mục',

// bbs/view_comment.php
'비밀글 입니다.' => 'Đây là bài viết bí mật.',
'댓글내용 확인' => 'Xem nội dung bình luận',

// bbs/view_image.php
'이미지 크게보기' => 'Xem ảnh lớn hơn',
'이미지 확장자가 아닙니다.' => 'Không phải phần mở rộng hình ảnh.',
'이미지 파일이 아닙니다.' => 'Không phải tệp hình ảnh.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'Không nhận được giá trị bo_table.\\nVui lòng truyền theo dạng write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'Bài viết không tồn tại.\\nBài viết có thể đã bị xóa hoặc di chuyển.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'Không sử dụng giá trị \\$wr_id khi viết bài mới.',
'글을 쓸 권한이 없습니다.' => 'Bạn không có quyền viết bài.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền viết bài.\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'Bạn không thể viết bài ({2}) vì điểm hiện có ({1}) không đủ.\\n\\nVui lòng tích lũy điểm rồi thử lại.',
'글쓰기' => 'Viết bài',
'글을 수정할 권한이 없습니다.' => 'Bạn không có quyền sửa bài viết.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền sửa bài viết.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'Không thể sửa vì bài viết này có bài trả lời.\\n\\nKhông thể sửa bài viết gốc đã có bài trả lời.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'Không thể sửa vì bài viết này có bình luận.\\n\\nKhông thể sửa bài viết có từ {1} bình luận trở lên.',
'글수정' => 'Sửa bài viết',
'글을 답변할 권한이 없습니다.' => 'Bạn không có quyền trả lời bài viết.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền viết bài trả lời.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'Bạn không thể trả lời ({2}) vì điểm hiện có ({1}) không đủ.\\n\\nVui lòng tích lũy điểm rồi thử lại.',
'공지에는 답변 할 수 없습니다.' => 'Không thể trả lời thông báo.',
'정상적인 접근이 아닙니다.' => 'Truy cập không hợp lệ.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Chỉ người viết hoặc quản trị viên mới có thể trả lời bài viết bí mật.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'Không thể trả lời bài viết bí mật của khách.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'Bạn không thể trả lời thêm.\\n\\nChỉ có thể trả lời tối đa 10 cấp.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'Bạn không thể trả lời thêm.\\n\\nChỉ có thể có tối đa 26 bài trả lời.',
'글답변' => 'Trả lời bài viết',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Bạn không có quyền truy cập.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'Bạn không thể viết bài vì không có quyền truy cập.\\n\\nNếu có thắc mắc, vui lòng liên hệ quản trị viên.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Chỉ thành viên đã xác minh danh tính mới có thể viết bài trên bảng tin này.\\n\\nNếu bạn là thành viên, vui lòng đăng nhập.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Chỉ thành viên đã xác minh danh tính mới có thể viết bài trên bảng tin này.\\n\\nVui lòng xác minh danh tính trong phần sửa hồ sơ.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Bắt buộc phải nhập tên.',
'댓글을 쓸 권한이 없습니다.' => 'Bạn không có quyền viết bình luận.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'Bài viết không tồn tại.\\nBài viết có thể đã bị xóa hoặc di chuyển.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'Bạn không thể viết bình luận ({2}) vì điểm hiện có ({1}) không đủ.\\n\\nVui lòng tích lũy điểm rồi thử lại.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'Không có bình luận để trả lời.\\n\\nBình luận có thể đã bị xóa trong lúc bạn trả lời.',
'댓글을 등록할 수 없습니다.' => 'Không thể đăng bình luận.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'Bạn không thể trả lời thêm.\\n\\nChỉ có thể trả lời tối đa 5 cấp.',
'원글
{1}


댓글
{2}' => 'Bài viết gốc
{1}


Bình luận
{2}',
'입력' => 'Mới',
'수정' => 'Sửa',
'답변' => 'Trả lời',
'댓글 ' => 'Bình luận ',
'댓글 수정' => 'Sửa bình luận',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] Có bài viết trên bảng tin {2} ({3}).',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Không thể sửa vì bình luận này của thành viên có cấp quyền cao hơn quản trị nhóm.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Bạn không thể sửa bình luận vì bảng tin này không thuộc nhóm bạn quản lý.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'Không thể sửa vì bình luận này của thành viên có cấp quyền cao hơn quản trị bảng tin.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'Bạn không thể sửa bình luận vì đây không phải bảng tin bạn quản lý.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'Bạn không thể sửa vì đây không phải bài viết của bạn.',
'댓글을 수정할 권한이 없습니다.' => 'Bạn không có quyền sửa bình luận.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'Không thể sửa vì bình luận này có phản hồi.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'Thông tin bảng tin không hợp lệ.',

// bbs/write_update.php
'게시글 저장' => 'Lưu bài viết',
'<strong>분류</strong>를 선택하세요.' => 'Vui lòng chọn <strong>danh mục</strong>.',
'분류를 올바르게 입력하세요.' => 'Vui lòng nhập danh mục đúng.',
'올바른 방법으로 수정하여 주십시오.' => 'Vui lòng sửa đúng cách.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'Bạn không thể sửa vì bảng tin này không thuộc nhóm bạn quản lý.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'Bạn không thể sửa bài viết của thành viên có cấp quyền cao hơn bạn.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'Bạn không thể sửa vì đây không phải bảng tin bạn quản lý.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Vui lòng xác nhận mật khẩu rồi sửa lại.',
'로그인 후 수정하세요.' => 'Vui lòng đăng nhập để sửa.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'Không thể đăng dưới dạng bài viết bí mật vì bảng tin này không sử dụng bài bí mật.',
'관리자만 공지할 수 있습니다.' => 'Chỉ quản trị viên mới có thể đăng thông báo.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'Bạn không thể trả lời thêm.\\nChỉ có thể trả lời tối đa 10 cấp.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'Bạn không thể trả lời thêm.\\nChỉ có thể có tối đa 26 bài trả lời.',
'제목을 입력하여 주십시오.' => 'Vui lòng nhập tiêu đề.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Vui lòng xóa các tệp hiện có rồi tải lên tối đa {1} tệp đính kèm.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Vui lòng tải lên tối đa {1} tệp đính kèm.',
'코멘트' => 'Bình luận',
'코멘트 수정' => 'Sửa bình luận',

// bbs/write_update_mail.php
'{1} 메일' => 'Email: {1}',
'작성자 {1}' => 'Tác giả: {1}',
'사이트에서 게시물 확인하기' => 'Xem bài viết trên trang web',

// common.php
'접근이 가능하지 않습니다.' => 'Không thể truy cập.',
'접근 불가합니다.' => 'Không được phép truy cập.',

// head.php
'본문 바로가기' => 'Chuyển đến nội dung',
'커뮤니티' => 'Cộng đồng',
'쇼핑몰' => 'Cửa hàng',
'접속자' => 'Khách truy cập',
'사이트 내 전체검색' => 'Tìm kiếm trên trang',
'검색어 필수' => 'Từ khóa (bắt buộc)',
'검색어를 입력해주세요' => 'Nhập từ khóa',
'검색' => 'Tìm kiếm',
'검색어는 두글자 이상 입력하십시오.' => 'Vui lòng nhập ít nhất hai ký tự.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'Để tìm kiếm nhanh hơn, từ khóa chỉ được chứa một khoảng trắng.',
'정보수정' => 'Sửa hồ sơ',
'로그아웃' => 'Đăng xuất',
'회원가입' => 'Đăng ký',
'메인메뉴' => 'Menu chính',
'전체메뉴' => 'Tất cả menu',
'전체메뉴열기' => 'Mở tất cả menu',
'하위분류' => 'Menu con',
'메뉴 준비 중입니다.' => 'Menu đang được chuẩn bị.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} đang đăng nhập ',

// lib/common.lib.php
'처음' => 'Đầu',
'이전' => 'Trước',
'페이지' => 'Trang',
'열린' => 'Hiện tại',
'다음' => 'Sau',
'맨끝' => 'Cuối',
'$url1 과 $url2 를 지정해 주세요.' => 'Vui lòng chỉ định $url1 và $url2.',
'답변글' => 'Bài trả lời',
'{1} 자기소개' => 'Giới thiệu của {1}',
'{1} 이름으로 검색' => 'Tìm theo tên {1}',
'쪽지보내기' => 'Gửi tin nhắn',
'홈페이지' => 'Trang web',
'자기소개' => 'Giới thiệu bản thân',
'아이디로 검색' => 'Tìm theo tên đăng nhập',
'이름으로 검색' => 'Tìm theo tên',
'전체게시물' => 'Tất cả bài viết',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'Thông tin MySQL Host, User, Password, DB có lỗi.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'Không thể dùng hàm mysql_connect vì MySQL chưa được cài đặt.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'Thông tin MySQL Host, User, Password có lỗi.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'Đã xảy ra lỗi khi xử lý cơ sở dữ liệu.',
'yoil|일' => 'CN',
'yoil|월' => 'T2',
'yoil|화' => 'T3',
'yoil|수' => 'T4',
'yoil|목' => 'T5',
'yoil|금' => 'T6',
'yoil|토' => 'T7',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'Token đã hết hạn. Vui lòng tải lại trang.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'Chưa thiết lập địa chỉ trang web để xác minh email. Vui lòng liên hệ quản trị viên trang.',
'올바른 경로로 접근해 주십시오.' => 'Vui lòng truy cập đúng đường dẫn.',
'PC 전용 게시판입니다.' => 'Bảng tin này chỉ dành cho máy tính.',
'모바일 전용 게시판입니다.' => 'Bảng tin này chỉ dành cho thiết bị di động.',
'간편인증' => 'Xác minh nhanh',
'휴대폰' => 'Điện thoại',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'Hôm nay bạn đã dùng xác minh danh tính ({1}) {2} lần nên không thể dùng thêm.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Không thể sử dụng vì không thể thực thi hàm exec.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'Số biến gửi từ biểu mẫu lớn hơn giá trị max_input_vars.\\nMột số giá trị đã gửi có thể bị mất khi ghi vào DB.\\n\\nĐể khắc phục, hãy thay đổi giá trị max_input_vars trong php.ini của máy chủ.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Không thể chỉ định tên miền khác trong url.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Không thể truy cập vì url chứa thông tin người dùng.',
'bot 으로 판단되어 중지합니다.' => 'Đã dừng vì bị nhận diện là bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Vui lòng nhập nội dung.',

// lib/get_data.lib.php
'제목' => 'Tiêu đề',
'내용' => 'Nội dung',
'제목+내용' => 'Tiêu đề+Nội dung',
'글쓴이' => 'Tác giả',
'글쓴이(코)' => 'Tác giả (bình luận)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Vui lòng nhập tên đăng nhập.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'Tên đăng nhập chỉ được chứa chữ cái Latinh, chữ số và _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'Tên đăng nhập phải có ít nhất 3 ký tự.',
'이미 사용중인 회원아이디 입니다.' => 'Tên đăng nhập đã được sử dụng.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'Không thể dùng tên đăng nhập này vì đây là từ đã được dành riêng.',
'닉네임을 입력해 주십시오.' => 'Vui lòng nhập biệt danh.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'Biệt danh chỉ được chứa chữ Hàn, chữ Latinh và chữ số, không có khoảng trắng.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'Biệt danh phải có ít nhất 2 chữ Hàn hoặc 4 chữ Latinh.',
'이미 존재하는 닉네임입니다.' => 'Biệt danh đã tồn tại.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'Không thể dùng biệt danh này vì đây là từ đã được dành riêng.',
'E-mail 주소를 입력해 주십시오.' => 'Vui lòng nhập địa chỉ email.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'Địa chỉ email không đúng định dạng.',
'{1} 메일은 사용할 수 없습니다.' => 'Không thể sử dụng email {1}.',
'이미 사용중인 E-mail 주소입니다.' => 'Địa chỉ email đã được sử dụng.',
'이름을 입력해 주십시오.' => 'Vui lòng nhập tên.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'Tên chỉ được nhập bằng chữ Hàn, không có khoảng trắng.',
'휴대폰번호를 입력해 주십시오.' => 'Vui lòng nhập số điện thoại di động.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Vui lòng nhập đúng số điện thoại di động.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' Số điện thoại di động đã được sử dụng. {1}',

// plugin/editor/cheditor5/editor.lib.php
'웹에디터 시작' => 'Bắt đầu trình soạn thảo web',
'웹 에디터 끝' => 'Kết thúc trình soạn thảo web',

// plugin/editor/smarteditor2/editor.lib.php
'단축키 일람' => 'Phím tắt',
'단축키 일람 닫기' => 'Đóng phím tắt',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Yêu cầu không hợp lệ.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Xác minh không hợp lệ. Vui lòng sử dụng đúng cách.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'Không có tài khoản nào đăng ký với thông tin đã xác minh.',
'코드 : {1}  {2}' => 'Mã: {1}  {2}',
'KG이니시스 간편인증 결과' => 'Kết quả xác minh nhanh KG Inicis',
'본인인증이 완료되었습니다.' => 'Xác minh danh tính đã hoàn tất.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'Xác minh nhanh KG Inicis',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'Tài khoản này đã được xác minh danh tính dưới tên người khác.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Đã có tài khoản đăng ký với thông tin xác minh danh tính bạn nhập.\\nTên đăng nhập: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Nghe đọc số',
'새로고침' => 'Làm mới',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Vui lòng nhập các số chống spam theo thứ tự.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Kết quả xác minh qua điện thoại',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Có nguy cơ dn_hash bị giả mạo (hãy kiểm tra tệp {1} có quyền thực thi không.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'Bạn đã hủy xác minh danh tính qua điện thoại.',
'up_hash 변조 위험있음' => 'Có nguy cơ up_hash bị giả mạo',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'Không có mã trang web cho dịch vụ xác minh qua điện thoại KCP. Vui lòng nhập mã trang KCP trong Quản trị > Cài đặt cơ bản.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'Đã có tài khoản đăng ký với thông tin xác minh danh tính bạn nhập.\\nTên đăng nhập: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Đã được xác minh bằng số điện thoại của bạn.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'Không có phản hồi xác minh danh tính. Vui lòng thử lại từ đầu.',
'코드 : {1} {2}' => 'Mã: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'Phiên xác minh danh tính đã hết hạn. Vui lòng thử lại từ đầu.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Truy vấn kết quả xác minh danh tính thất bại ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'Mô-đun xác minh qua điện thoại KCP V2 chỉ hoạt động trên PHP 7.0 trở lên.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'Các phần mở rộng PHP cần cho mô-đun xác minh qua điện thoại KCP V2 (openssl/curl/hash_pbkdf2) chưa được bật.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'Chưa thiết lập mã trang hoặc ENC_KEY cho xác minh qua điện thoại KCP V2.\\nVui lòng nhập trong Quản trị > Cài đặt cơ bản.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Đăng ký giao dịch xác minh danh tính thất bại.\\n({1} : {2})',
'휴대폰 본인확인' => 'Xác minh qua điện thoại',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Không thể tạo dữ liệu yêu cầu đăng ký giao dịch KCP.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Không thể mã hóa dữ liệu yêu cầu đăng ký giao dịch KCP.',
'KCP 거래등록 API 응답이 없습니다.' => 'Không có phản hồi từ API đăng ký giao dịch KCP.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Không thể phân tích phản hồi API đăng ký giao dịch KCP.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Không thể tạo dữ liệu yêu cầu truy vấn kết quả xác minh KCP.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'Không có phản hồi từ API truy vấn kết quả xác minh KCP.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Không thể phân tích phản hồi API truy vấn kết quả xác minh KCP.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Không thể giải mã dữ liệu kết quả xác minh KCP.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Không thể phân tích dữ liệu xác minh KCP đã giải mã.',
'cURL 초기화에 실패했습니다.' => 'Khởi tạo cURL thất bại.',
'KCP API 통신 실패: {1}' => 'Giao tiếp API KCP thất bại: {1}',
'KCP API HTTP 오류: {1}' => 'Lỗi HTTP API KCP: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Đã xảy ra lỗi khi xác minh danh tính qua điện thoại. Mã lỗi: {1}\\n\\nVui lòng liên hệ trung tâm khách hàng Korea Credit Bureau (KCB) theo số 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Cần kiểm tra giá trị đã nhập',
'KCB 휴대폰 본인확인' => 'Xác minh danh tính qua điện thoại KCB',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Đã xảy ra lỗi khi xác minh danh tính i-PIN. Mã lỗi: {1}\\n\\nVui lòng liên hệ trung tâm khách hàng Korea Credit Bureau (KCB) theo số 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'Đã xảy ra lỗi khi xác minh danh tính i-PIN. (Không có thông tin ci) Mã lỗi: {1}\\n\\nVui lòng liên hệ trung tâm khách hàng Korea Credit Bureau (KCB) theo số 02-708-1000.',
'KCB 아이핀 본인확인' => 'Xác minh danh tính i-PIN KCB',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Vui lòng chọn dịch vụ xác minh qua điện thoại KCB trong Cài đặt cơ bản.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Vui lòng nhập ID đối tác KCB trong Cài đặt cơ bản.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'Không tìm thấy tệp thực thi mô-đun.\\n\\nTệp {1} phải nằm trong {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'Tệp thực thi mô-đun không có quyền thực thi.\\n\\nVui lòng cấp quyền thực thi, ví dụ chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'Tệp thực thi mô-đun không có quyền thực thi.\\n\\nVui lòng kiểm tra IUSER có quyền thực thi cmd.exe không.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Vui lòng chọn dịch vụ xác minh i-PIN KCB trong Cài đặt cơ bản.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Vui lòng tạo thư mục key trong {1}/{2}.\\n\\nSau khi tạo, hãy cấp quyền ghi. Ví dụ: chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Vui lòng đổi quyền của thư mục {1}/{2}/key thành 705.\\nchmod 705 key hoặc chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Vui lòng đổi quyền của thư mục {1}/{2}/key thành 707.\\n\\nchmod 707 key hoặc chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Callback X (Twitter)',
'트위터에 승인이 되었습니다.' => 'Đã được X (Twitter) cấp quyền.',
'트위터에 승인이 되지 않았습니다.' => 'Chưa được X (Twitter) cấp quyền.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'Xem chi tiết',
'페이스북으로 공유' => 'Chia sẻ lên Facebook',
'페이스북 공유' => 'Chia sẻ Facebook',
'트위터로  공유' => 'Chia sẻ lên X (Twitter)',
'트위터 공유' => 'Chia sẻ X (Twitter)',
'카카오톡으로 보내기' => 'Gửi qua KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Đã đăng cả lên Facebook',
'트위터에도 등록됨' => 'Đã đăng cả lên X (Twitter)',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Đăng đồng thời lên X (Twitter)',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Đăng nhập mạng xã hội - {1}',
'잠시후에 다시 시도해 주세요.' => 'Vui lòng thử lại sau giây lát.',
'홈으로' => 'Về trang chủ',
'이 페이지 닫기' => 'Đóng trang này',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'Bạn không thể đăng ký lại vì ID {1} này đã được liên kết hoặc đăng ký. Nếu bạn là thành viên, hãy đăng nhập và liên kết tài khoản trong phần sửa hồ sơ.',
'지정되지 않은 오류입니다.' => 'Lỗi không xác định.',
'설정 오류입니다.' => 'Lỗi cấu hình.',
'해당 provider 설정 오류입니다.' => 'Lỗi cấu hình provider này.',
'알수 없거나 비활성화 된 provider 입니다.' => 'provider không xác định hoặc đã bị tắt.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'Bạn không có quyền truy cập dịch vụ này.',
'인증이 실패되었습니다.. ' => 'Xác thực thất bại. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'Người dùng đã hủy xác thực hoặc nhà cung cấp đã từ chối kết nối.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'Yêu cầu hồ sơ người dùng thất bại. Có thể người dùng chưa kết nối với dịch vụ này. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'Trong trường hợp này, cần yêu cầu xác thực lại.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'Người dùng chưa kết nối với dịch vụ này.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'Dịch vụ này không hỗ trợ chức năng đó.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'Bạn đã đăng nhập hoặc yêu cầu không hợp lệ.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'Đã có tài khoản được liên kết hoặc yêu cầu không hợp lệ.',
'소셜 데이터 오류' => 'Lỗi dữ liệu mạng xã hội',
'SNS 사용자 인증에 실패하였습니다.' => 'Xác thực người dùng mạng xã hội thất bại.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'Tài khoản này đã được liên kết với ID {1}. Vui lòng hủy liên kết rồi thử lại.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'X (Twitter)',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Đang kết nối với {1}. Vui lòng chờ trong giây lát.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Đăng nhập mạng xã hội không được sử dụng.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Cài đặt đăng nhập mạng xã hội đang bị tắt.',
'새창 옵션이 비활성화 되어 있습니다.' => 'Tùy chọn cửa sổ mới đang bị tắt.',
'서비스 이름이 넘어오지 않았습니다.' => 'Không nhận được tên dịch vụ.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Đăng nhập mạng xã hội không được sử dụng.',
'이미 회원가입 하였습니다.' => 'Bạn đã đăng ký rồi.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Chỉ người đã đăng nhập bằng mạng xã hội mới có thể truy cập.',
'소셜 회원 가입 - {1}' => 'Đăng ký bằng mạng xã hội - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Chỉ người đã đăng nhập bằng mạng xã hội mới có thể truy cập.',
'이미 등록된 회원이 존재합니다.' => 'Thành viên đã được đăng ký.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'Thông tin đã xác minh không khớp với thông tin cá nhân. Vui lòng thử lại',
'회원 가입 오류!' => 'Lỗi đăng ký!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Bạn không phải thành viên hoặc không nhận được giá trị cần thiết.',
'권한이 없거나 잘못된 요청입니다.' => 'Bạn không có quyền hoặc yêu cầu không hợp lệ.',

// js/autosave.js
'삭제' => 'Xóa',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'Đã xảy ra lỗi khi xóa bài viết đã lưu tạm.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'Bạn đã xác minh danh tính qua {1}.

Hủy xác minh trước đó và xác minh lại?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Dữ liệu đã xóa không thể khôi phục.

Bạn có chắc chắn muốn xóa?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'Chưa tải tệp postcode.v2.js của dịch vụ mã bưu chính KAKAO.',
'토큰 정보가 올바르지 않습니다.' => 'Thông tin token không hợp lệ.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Bắt buộc chọn.
',
'{1} : 필수 입력입니다.
' => '{1} : Bắt buộc nhập.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : Định dạng số điện thoại không hợp lệ.

Vui lòng nhập kèm dấu gạch nối (-).
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Không phải địa chỉ email hợp lệ.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Chỉ cho phép tiếng Hàn. (Chỉ âm tiết tiếng Hàn hoàn chỉnh)
',
'{1} : 한글이 아닙니다.
' => '{1} : Chỉ cho phép tiếng Hàn.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Chỉ cho phép tiếng Hàn, chữ Latinh và số.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Chỉ cho phép tiếng Hàn và chữ Latinh.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Chỉ cho phép số.
',
'{1} : 영문이 아닙니다.
' => '{1} : Chỉ cho phép chữ Latinh.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Chỉ cho phép chữ Latinh hoặc số.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Chỉ cho phép chữ Latinh, số và _.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Vui lòng nhập ít nhất {2} ký tự.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Không phải tệp hình ảnh.
Chỉ cho phép tệp .gif .jpg .png.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Chỉ cho phép tệp .{2}.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Không được có khoảng trắng.
',
);
