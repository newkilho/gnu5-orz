<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (en). 틀은 php lang/build.php en 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// bbs/_common.php
'<p>쇼핑몰 설치 후 이용해 주십시오.</p>' => '<p>Please install the shop first.</p>',

// bbs/ajax.mb_id.php
'너무 많은 요청이 발생했습니다. 잠시 후 다시 시도해 주세요.' => 'Too many requests. Please try again later.',

// bbs/ajax.mb_recommend.php
'추천인의 아이디는 영문자, 숫자, _ 만 입력하세요.' => 'The referrer\'s username may contain only letters, numbers and _.',
'입력하신 추천인은 존재하지 않는 아이디 입니다.' => 'The referrer you entered is not an existing username.',

// bbs/ajax.write.token.php
'올바른 방법으로 이용해 주십시오.' => 'Please use the correct method.',

// bbs/alert.php
'오류안내 페이지' => 'Error page',
'결과안내 페이지' => 'Result page',
'다음 항목에 오류가 있습니다.' => 'The following items have errors.',
'다음 내용을 확인해 주세요.' => 'Please check the following.',
'돌아가기' => 'Go back',

// bbs/alert_close.php
'새창을 닫으시고 이전 작업을 다시 시도해 주세요.' => 'Please close the new window and try again.',
'새창을 닫으신 후 서비스를 이용해 주세요.' => 'Please close the new window and continue.',

// bbs/board.php
'존재하지 않는 게시판입니다.' => 'This board does not exist.',
'bo_table 값이 넘어오지 않았습니다.\\n\\nboard.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'No bo_table value was passed.\\n\\nPass it like board.php?bo_table=code.',
'글이 존재하지 않습니다.\\n\\n글이 삭제되었거나 이동된 경우입니다.' => 'The post does not exist.\\n\\nIt may have been deleted or moved.',
'비회원은 이 게시판에 접근할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Guests do not have access to this board.\\n\\nIf you are a member, please log in and try again.',
'접근 권한이 없으므로 글읽기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'You do not have permission to read posts.\\n\\nPlease contact the administrator if you have any questions.',
'글을 읽을 권한이 없습니다.' => 'You do not have permission to read this post.',
'글을 읽을 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to read this post.\\n\\nIf you are a member, please log in and try again.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Only identity-verified members can read posts on this board.\\n\\nIf you are a member, please log in and try again.',
'이 게시판은 본인확인 하신 회원님만 글읽기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Only identity-verified members can read posts on this board.\\n\\nPlease verify your identity in Edit profile.',
'이 게시판은 본인확인으로 성인인증 된 회원님만 글읽기가 가능합니다.\\n\\n현재 성인인데 글읽기가 안된다면 회원정보 수정에서 본인확인을 다시 해주시기 바랍니다.' => 'Only members verified as adults can read posts on this board.\\n\\nIf you are an adult and still cannot read posts, please verify your identity again in Edit profile.',
'보유하신 포인트({1})가 없거나 모자라서 글읽기({2})가 불가합니다.\\n\\n포인트를 모으신 후 다시 글읽기 해 주십시오.' => 'You do not have enough points ({1}) to read this post ({2}).\\n\\nPlease collect more points and try again.',
'목록을 볼 권한이 없습니다.' => 'You do not have permission to view the list.',
'목록을 볼 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to view the list.\\n\\nIf you are a member, please log in and try again.',
'{1} {2} 페이지' => '{1} page {2}',

// bbs/board_list_update.php
'{1} 하실 항목을 하나 이상 선택하세요.' => 'Please select at least one item for {1}.',
'올바른 방법으로 이용해 주세요.' => 'Please use the correct method.',

// bbs/confirm.php
'아래 내용을 확인해 주세요.' => 'Please check the following.',
'확인' => 'OK',
'취소' => 'Cancel',

// bbs/content.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->내용 관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Please check Board management -> Content management in admin mode first.',
'등록된 내용이 없습니다.' => 'No content has been registered.',
'<p>{1}이 존재하지 않습니다.</p>' => '<p>{1} does not exist.</p>',

// bbs/current_connect.php
'현재접속자' => 'Online users',

// bbs/delete.php
'토큰 에러로 삭제 불가합니다.' => 'Cannot delete due to a token error.',
'자신이 관리하는 그룹의 게시판이 아니므로 삭제할 수 없습니다.' => 'You cannot delete this because the board is not in a group you manage.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 삭제할 수 없습니다.' => 'You cannot delete a post written by a member with a higher level than yours.',
'자신이 관리하는 게시판이 아니므로 삭제할 수 없습니다.' => 'You cannot delete this because you do not manage this board.',
'자신의 글이 아니므로 삭제할 수 없습니다.' => 'You cannot delete this because it is not your post.',
'로그인 후 삭제하세요.' => 'Please log in to delete.',
'비밀번호가 틀리므로 삭제할 수 없습니다.' => 'Cannot delete: the password is incorrect.',
'이 글과 관련된 답변글이 존재하므로 삭제 할 수 없습니다.\\n\\n우선 답변글부터 삭제하여 주십시오.' => 'This post cannot be deleted because it has replies.\\n\\nPlease delete the replies first.',
'이 글과 관련된 코멘트가 존재하므로 삭제 할 수 없습니다.\\n\\n코멘트가 {1}건 이상 달린 원글은 삭제할 수 없습니다.' => 'This post cannot be deleted because it has comments.\\n\\nPosts with {1} or more comments cannot be deleted.',

// bbs/delete_all.php
'접근 권한이 없습니다.' => 'Access denied.',

// bbs/delete_comment.php
'등록된 코멘트가 없거나 코멘트 글이 아닙니다.' => 'The comment does not exist or this is not a comment.',
'그룹관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'You cannot delete this comment because it was written by a member with a higher level than the group admin.',
'자신이 관리하는 그룹의 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'You cannot delete the comment because the board is not in a group you manage.',
'게시판관리자의 권한보다 높은 회원의 코멘트이므로 삭제할 수 없습니다.' => 'You cannot delete this comment because it was written by a member with a higher level than the board admin.',
'자신이 관리하는 게시판이 아니므로 코멘트를 삭제할 수 없습니다.' => 'You cannot delete the comment because you do not manage this board.',
'비밀번호가 틀립니다.' => 'The password is incorrect.',
'이 코멘트와 관련된 답변코멘트가 존재하므로 삭제 할 수 없습니다.' => 'This comment cannot be deleted because it has replies.',

// bbs/download.php
'잘못된 접근입니다.' => 'Invalid access.',
'다운로드 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to download.\\nIf you are a member, please log in and try again.',
'파일 정보가 존재하지 않습니다.' => 'File information does not exist.',
'토큰 유효시간이 지났거나 토큰이 유효하지 않습니다.\\n브라우저를 새로고침 후 다시 시도해 주세요.' => 'The token has expired or is invalid.\\nPlease refresh the page and try again.',
'{1} 파일을 다운로드 하시면 포인트가 차감({2}점)됩니다.\\n포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.\\n그래도 다운로드 하시겠습니까?' => 'Downloading {1} will deduct {2} points.\\nPoints are deducted only once per post and will not be deducted again if you download it later.\\nDo you want to download it?',
'다운로드 권한이 없습니다.' => 'You do not have permission to download.',
'\\n회원이시라면 로그인 후 이용해 보십시오.' => '\\nIf you are a member, please log in and try again.',
'파일이 존재하지 않습니다.' => 'The file does not exist.',
'보유하신 포인트({1})가 없거나 모자라서 다운로드({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 다운로드 해 주십시오.' => 'You do not have enough points ({1}) to download ({2}).\\n\\nPlease collect more points and try again.',
'다운로드 &gt; {1}' => 'Download &gt; {1}',

// bbs/email_certify.php
'존재하는 회원이 아닙니다.' => 'The member does not exist.',
'탈퇴 또는 차단된 회원입니다.' => 'This member has left or been blocked.',
'이미 처리되었거나 올바르지 않은 메일인증 요청입니다.' => 'This email verification request has already been processed or is invalid.',
'메일인증 처리를 완료 하였습니다.\\n\\n지금부터 {1} 아이디로 로그인 가능합니다.' => 'Your email has been verified.\\n\\nYou can now log in with the username {1}.',
'메일인증 유효시간이 만료되었습니다. 인증메일을 다시 요청해 주십시오.' => 'The email verification link has expired. Please request a new verification email.',
'메일인증 요청 정보가 올바르지 않습니다.' => 'The email verification request is invalid.',
'제대로 된 값이 넘어오지 않았습니다.' => 'Invalid values were submitted.',

// bbs/email_stop.php
'정보메일을 보내지 않도록 수신거부 하였습니다.' => 'You have unsubscribed from informational emails.',

// bbs/faq.php
'<meta charset="utf-8">관리자 모드에서 게시판관리->FAQ관리를 먼저 확인해 주세요.' => '<meta charset="utf-8">Please check Board management -> FAQ management in admin mode first.',

// bbs/formmail.php
'환경설정에서 "메일발송 사용"에 체크하셔야 메일을 발송할 수 있습니다.\\n\\n관리자에게 문의하시기 바랍니다.' => '"Use email sending" must be checked in Configuration before emails can be sent.\\n\\nPlease contact the administrator.',
'회원만 이용하실 수 있습니다.' => 'Members only.',
'자신의 정보를 공개하지 않으면 다른분에게 메일을 보낼 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'You cannot send email to others unless your profile is public.\\n\\nYou can change your profile visibility in Edit profile.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴한 회원일 수 있습니다.' => 'The member information does not exist.\\n\\nThe member may have left.',
'정보공개를 하지 않았습니다.' => 'The profile is not public.',
'한번 접속후 일정수의 메일만 발송할 수 있습니다.\\n\\n계속해서 메일을 보내시려면 다시 로그인 또는 접속하여 주십시오.' => 'Only a limited number of emails can be sent per session.\\n\\nTo send more, please log in or visit again.',
'메일 쓰기' => 'Write email',
'이메일이 올바르지 않습니다.' => 'The email address is invalid.',

// bbs/formmail_send.php
'폼메일 발송 횟수를 초과하였습니다.' => 'You have exceeded the form mail sending limit.',
'자동등록방지 숫자가 틀렸습니다.' => 'The anti-spam code is incorrect.',
'E-mail 주소가 형식에 맞지 않아서, 메일을 보낼수 없습니다.' => 'The email cannot be sent because the email address is invalid.',
'허용되지 않는 파일 확장자입니다.' => 'This file extension is not allowed.',
'메일보내기' => 'Send email',
'메일 발송중' => 'Sending email',
'메일을 정상적으로 발송하였습니다.' => 'The email has been sent.',

// bbs/good.php
'회원만 가능합니다.' => 'Members only.',
'값이 제대로 넘어오지 않았습니다.' => 'Invalid request.',
'해당 게시물에서만 추천 또는 비추천 하실 수 있습니다.' => 'You can only like or dislike from the post itself.',
'존재하는 게시판이 아닙니다.' => 'The board does not exist.',
'자신의 글에는 추천 또는 비추천 하실 수 없습니다.' => 'You cannot like or dislike your own post.',
'이 게시판은 추천 기능을 사용하지 않습니다.' => 'This board does not use likes.',
'이 게시판은 비추천 기능을 사용하지 않습니다.' => 'This board does not use dislikes.',
'추천' => 'Like',
'비추천' => 'Dislike',
'이미 {1} 하신 글 입니다.' => 'You have already chosen {1} for this post.',
'이미 추천 또는 비추천 하신 글 입니다.' => 'You have already liked or disliked this post.',
'이 글을 {1} 하셨습니다.' => 'You chose {1} for this post.',

// bbs/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'The {1} group can only be accessed on mobile.',

// bbs/link.php
'링크' => 'Link',
'링크가 없습니다.' => 'There is no link.',

// bbs/list.php
'전체' => 'All',
'열린 분류' => 'Open category',
'이전검색' => 'Previous search',
'다음검색' => 'Next search',

// bbs/login.php
'로그인' => 'Log in',

// bbs/login_check.php
'로그인 검사' => 'Login check',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Username and password cannot be empty.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'The username is not registered or the password is incorrect.\\nPasswords are case-sensitive.',
'\\1년 \\2월 \\3일' => '\\1-\\2-\\3',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Your account has been blocked.\\nDate: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'This account has been cancelled and cannot be used.\\nCancelled on: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'You must verify your email at {1} before logging in. To verify with a different email address, click Cancel.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'If the data folder is not writable or the disk is full,\\nlogin may fail. Please check disk space and write permissions.',

// bbs/logout.php
'url 에 올바르지 않은 값이 포함되어 있습니다.' => 'The URL contains invalid values.',
'url에 도메인을 지정할 수 없습니다.' => 'A domain cannot be specified in the URL.',

// bbs/member_cert_refresh.php
'본인인증을 이용 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Identity verification is not available. Please contact the administrator.',
'본인인증을 다시 해주세요.' => 'Please verify your identity again.',

// bbs/member_cert_refresh_update.php
'로그인 후 이용해 주십시오.' => 'Please log in first.',
'w 값이 제대로 넘어오지 않았습니다.' => 'The w value was not passed correctly.',
'잘못된 접근입니다' => 'Invalid access',
'회원아이디 값이 없습니다. 올바른 방법으로 이용해 주십시오.' => 'No username was given. Please use the correct method.',
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.' => 'An account is already registered with the identity verification information you entered.',
'본인인증된 정보와 입력된 회원정보가 일치하지않습니다. 다시시도 해주세요' => 'The verified identity does not match the member information entered. Please try again.',

// bbs/member_confirm.php
'로그인 한 회원만 접근하실 수 있습니다.' => 'Only logged-in members can access this page.',
'회원 비밀번호 확인' => 'Confirm member password',

// bbs/member_leave.php
'회원만 접근하실 수 있습니다.' => 'Members only.',
'최고 관리자는 탈퇴할 수 없습니다' => 'The super admin cannot leave.',
'회원탈퇴를 처리하지 못했습니다. 회원 상태를 확인해 주십시오.' => 'Could not process your account cancellation. Please check the member status.',
'{1}님께서는 {2}에 회원에서 탈퇴 하셨습니다.' => '{1} left the site on {2}.',
'Y년 m월 d일' => 'M d, Y',

// bbs/memo.php
'내 쪽지함' => 'My messages',
'kind 변수 값이 올바르지 않습니다.' => 'The kind value is invalid.',
'받은' => 'Received',
'보낸' => 'Sent',
'정보없음' => 'No information',
'아직 읽지 않음' => 'Not read yet',

// bbs/memo_form.php
'자신의 정보를 공개하지 않으면 다른분에게 쪽지를 보낼 수 없습니다. 정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'You cannot send messages to others unless your profile is public. You can change your profile visibility in Edit profile.',
'회원정보가 존재하지 않습니다.\\n\\n탈퇴하였을 수 있습니다.' => 'The member information does not exist.\\n\\nThe member may have left.',
'쪽지 보내기' => 'Send message',

// bbs/memo_form_update.php
'회원아이디 \'{1}\' 은(는) 존재(또는 정보공개)하지 않는 회원아이디 이거나 탈퇴, 접근차단된 회원아이디 입니다.\\n쪽지를 발송하지 않았습니다.' => 'The username \'{1}\' does not exist (or is not public), or has left or been blocked.\\nThe message was not sent.',
'해당 회원이 존재하지 않습니다.' => 'The member does not exist.',
'보유하신 포인트({1}점)가 모자라서 쪽지를 보낼 수 없습니다.' => 'You do not have enough points ({1}) to send a message.',
'{1} 님께 쪽지를 전달하였습니다.' => 'Your message has been sent to {1}.',
'회원아이디 오류 같습니다.' => 'The username seems to be wrong.',

// bbs/memo_view.php
'{1} 값을 넘겨주세요.' => 'Please pass the {1} value.',
'{1} 쪽지 보기' => 'View {1} message',

// bbs/move.php
'이동' => 'Move',
'복사' => 'Copy',
'sw 값이 제대로 넘어오지 않았습니다.' => 'The sw value was not passed correctly.',
'게시판 관리자 이상 접근이 가능합니다.' => 'Board admins or higher only.',
'게시물 {1}' => '{1} posts',
'{1}할 게시판을 한개 이상 선택하여 주십시오.' => 'Please select at least one board ({1}).',
'현재 페이지 게시판 전체' => 'All boards on this page',
'게시판' => 'Boards',
'현재' => 'Current',
'창닫기' => 'Close window',
'게시물을 {1}할 게시판을 한개 이상 선택해 주십시오.' => 'Please select at least one board ({1}).',

// bbs/move_update.php
'해당 게시물을 선택한 게시판으로 {1} 하였습니다.' => '{1} to the selected boards completed.',

// bbs/new.php
'새글' => 'New posts',
'그룹' => 'Group',
'전체그룹' => 'All groups',
'[코] ' => '[Comment] ',

// bbs/new_delete.php
'최고관리자만 접근이 가능합니다.' => 'Super admin only.',

// bbs/newwin.inc.php
'팝업레이어 알림' => 'Popup notice',
'{1}시간 동안 다시 열람하지 않습니다.' => 'Do not show again for {1} hours.',
'닫기' => 'Close',
'팝업레이어 알림이 없습니다.' => 'There are no popup notices.',

// bbs/password.php
'비밀번호 입력' => 'Enter password',

// bbs/password_lost.php
'이미 로그인중입니다.' => 'You are already logged in.',
'회원정보 찾기' => 'Find account',

// bbs/password_lost2.php
'메일주소 오류입니다.' => 'Invalid email address.',
'{1} 메일로 회원아이디와 비밀번호를 인증할 수 있는 메일이 발송 되었습니다.\\n\\n메일을 확인하여 주십시오.' => 'An email to verify your username and password has been sent to {1}.\\n\\nPlease check your email.',
'[{1}] 요청하신 회원정보 찾기 안내 메일입니다.' => '[{1}] Account recovery email you requested',
'회원정보 찾기 안내' => 'Account recovery',
'{1} ({2}) 회원님은 {3} 에 회원정보 찾기 요청을 하셨습니다.<br>' => '{1} ({2}) requested account recovery on {3}.<br>',
'저희 사이트는 관리자라도 회원님의 비밀번호를 알 수 없기 때문에, 비밀번호를 알려드리는 대신 새로운 비밀번호를 생성하여 안내 해드리고 있습니다.<br>' => 'Since even administrators cannot see your password, we generate a new password for you instead of telling you the old one.<br>',
'아래에서 변경될 비밀번호를 확인하신 후, <span style="color:#ff3061"><strong>비밀번호 변경</strong> 링크를 클릭 하십시오.</span><br>' => 'Check the new password below, then <span style="color:#ff3061">click the <strong>Change password</strong> link.</span><br>',
'비밀번호가 변경되었다는 인증 메세지가 출력되면, 홈페이지에서 회원아이디와 변경된 비밀번호를 입력하시고 로그인 하십시오.<br>' => 'When a message confirms that the password has been changed, log in on the website with your username and the new password.<br>',
'로그인 후에는 정보수정 메뉴에서 새로운 비밀번호로 변경해 주십시오.' => 'After logging in, please change to a new password of your own in Edit profile.',
'회원아이디' => 'Username',
'변경될 비밀번호' => 'New password',
'비밀번호 변경' => 'Change password',

// bbs/password_lost_certify.php
'비밀번호가 변경됐습니다.\\n\\n회원아이디와 변경된 비밀번호로 로그인 하시기 바랍니다.' => 'Your password has been changed.\\n\\nPlease log in with your username and the new password.',

// bbs/password_reset.php
'본인인증을 이용하여 아이디/비밀번호 찾기를 할 수 없습니다. 관리자에게 문의 하십시오.' => 'Finding your username/password via identity verification is not available. Please contact the administrator.',
'패스워드 변경' => 'Change password',

// bbs/password_reset_update.php
'비밀번호가 넘어오지 않았습니다.' => 'No password was submitted.',
'비밀번호가 일치하지 않습니다.' => 'The passwords do not match.',

// bbs/point.php
'회원만 조회하실 수 있습니다.' => 'Only members can view this.',
'{1} 님의 포인트 내역' => 'Point history of {1}',

// bbs/poll_etc_update.php
'po_id 값이 제대로 넘어오지 않았습니다.' => 'The po_id value was not passed correctly.',
'기타의견이 비활성화되어 있습니다.' => 'Other opinions are disabled.',
'권한이 없습니다.' => 'You do not have permission.',

// bbs/poll_result.php
'설문조사 정보가 없습니다.' => 'The poll does not exist.',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Only members of level {1} or higher can view the results.',
'설문조사 결과' => 'Poll results',

// bbs/poll_update.php
'권한 {1} 이상 회원만 투표에 참여하실 수 있습니다.' => 'Only members of level {1} or higher can vote.',
'항목을 선택하세요.' => 'Please select an option.',
'{1}에 이미 참여하셨습니다.' => 'You have already voted in {1}.',

// bbs/profile.php
'자신의 정보를 공개하지 않으면 다른분의 정보를 조회할 수 없습니다.\\n\\n정보공개 설정은 회원정보수정에서 하실 수 있습니다.' => 'You cannot view others\' profiles unless your profile is public.\\n\\nYou can change your profile visibility in Edit profile.',
'{1}님의 자기소개' => 'About {1}',
'소개 내용이 없습니다.' => 'No introduction.',

// bbs/qadelete.php
'회원이시라면 로그인 후 이용해 주십시오.' => 'If you are a member, please log in first.',
'삭제할 게시글을 하나이상 선택해 주십시오.' => 'Please select at least one post to delete.',

// bbs/qalist.php
'회원이시라면 로그인 후 이용해 보십시오.' => 'If you are a member, please log in and try again.',
'열린 분류 ' => 'Open category ',
'{1}이 존재하지 않습니다.' => '{1} does not exist.',

// bbs/qaview.php
'게시글이 존재하지 않습니다.\\n삭제되었거나 자신의 글이 아닌 경우입니다.' => 'The post does not exist.\\nIt has been deleted or is not yours.',

// bbs/qawrite.php
'답변이 등록된 문의글은 수정할 수 없습니다.' => 'Inquiries that have been answered cannot be edited.',
'게시글을 수정할 권한이 없습니다.\\n\\n올바른 방법으로 이용해 주십시오.' => 'You do not have permission to edit this post.\\n\\nPlease use the correct method.',
'1:1문의 설정에서 분류를 설정해 주십시오' => 'Please set up categories in the 1:1 inquiry settings.',
'{1} 바이트' => '{1} bytes',

// bbs/qawrite_update.php
'분류를 올바르게 지정해 주십시오.' => 'Please select a valid category.',
'이메일을 입력하세요.' => 'Please enter your email.',
'<strong>제목</strong>을 입력하세요.' => 'Please enter a <strong>subject</strong>.',
'<strong>내용</strong>을 입력하세요.' => 'Please enter the <strong>content</strong>.',
'내용에 올바르지 않은 코드가 다수 포함되어 있습니다.' => 'The content contains a lot of invalid code.',
'파일 또는 글내용의 크기가 서버에서 설정한 값을 넘어 오류가 발생하였습니다.\\npost_max_size={1} , upload_max_filesize={2}\\n게시판관리자 또는 서버관리자에게 문의 바랍니다.' => 'The file or content size exceeds the server limit.\\npost_max_size={1} , upload_max_filesize={2}\\nPlease contact the board admin or server admin.',
'답변은 관리자만 등록할 수 있습니다.' => 'Only administrators can post answers.',
'문의글이 존재하지 않아 답변글을 등록할 수 없습니다.' => 'The inquiry does not exist, so an answer cannot be posted.',
'답변글에는 다시 답변을 등록할 수 없습니다.' => 'You cannot reply to an answer.',
'첨부파일을 2개 이하로 업로드 해주십시오.' => 'Please upload no more than 2 attachments.',
'"{1}" 파일의 용량이 서버에 설정({2})된 값보다 크므로 업로드 할 수 없습니다.\\n' => '"{1}" cannot be uploaded because it exceeds the server limit ({2}).\\n',
'"{1}" 파일이 정상적으로 업로드 되지 않았습니다.\\n' => '"{1}" was not uploaded correctly.\\n',
'"{1}" 파일의 용량({2} 바이트)이 게시판에 설정({3} 바이트)된 값보다 크므로 업로드 하지 않습니다.\\n' => '"{1}" ({2} bytes) was not uploaded because it exceeds the board limit ({3} bytes).\\n',
'"{1}" 파일을 안전하게 저장할 수 없습니다. 서버의 난수 소스와 저장 경로를 확인해 주십시오.\\n' => '"{1}" cannot be stored safely. Please check the server\'s random source and storage path.\\n',
'{1} {2} 답변 알림 메일' => '{1} {2} answer notification',

// bbs/register.php
'회원가입약관' => 'Terms of service',

// bbs/register_email.php
'메일인증 메일주소 변경' => 'Change verification email address',
'이미 메일인증 하신 회원입니다.' => 'You have already verified your email.',
'메일인증을 받지 못한 경우 회원정보의 메일주소를 변경 할 수 있습니다.' => 'If you did not receive the verification email, you can change the email address in your account.',
'사이트 이용정보 입력' => 'Account information',
'필수' => 'Required',
'자동등록방지' => 'Anti-spam',
'인증메일변경' => 'Change verification email',

// bbs/register_email_update.php
'{1} 메일은 이미 존재하는 메일주소 입니다.\\n\\n다른 메일주소를 입력해 주십시오.' => '{1} is already in use.\\n\\nPlease enter a different email address.',
'[{1}] 인증확인 메일입니다.' => '[{1}] Verification email',
'인증메일을 {1} 메일로 다시 보내 드렸습니다.\\n\\n잠시후 {1} 메일을 확인하여 주십시오.' => 'The verification email has been resent to {1}.\\n\\nPlease check {1} in a moment.',

// bbs/register_form.php
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'You must agree to the terms of service to sign up.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'You must agree to the collection and use of personal information to sign up.',
'회원 가입' => 'Sign up',
'관리자의 회원정보는 관리자 화면에서 수정해 주십시오.' => 'Please edit the administrator\'s information in the admin panel.',
'로그인 후 이용하여 주십시오.' => 'Please log in first.',
'로그인된 회원과 넘어온 정보가 서로 다릅니다.' => 'The submitted information does not match the logged-in member.',
'비밀번호를 입력해 주세요.' => 'Please enter your password.',
'회원 정보 수정' => 'Edit profile',

// bbs/register_form_update.php
'데모 화면에서는 하실(보실) 수 없는 작업입니다.' => 'This action is not available in the demo.',
'이름을 올바르게 입력해 주십시오.' => 'Please enter a valid name.',
'닉네임을 올바르게 입력해 주십시오.' => 'Please enter a valid nickname.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identity verification is required to sign up.',
'추천인이 존재하지 않습니다.' => 'The referrer does not exist.',
'본인을 추천할 수 없습니다.' => 'You cannot refer yourself.',
'[{1}] 회원가입을 축하드립니다.' => '[{1}] Welcome to our site',
'로그인 되어 있지 않습니다.' => 'You are not logged in.',
'로그인된 정보와 수정하려는 정보가 틀리므로 수정할 수 없습니다.\\n만약 올바르지 않은 방법을 사용하신다면 바로 중지하여 주십시오.' => 'The submitted information does not match the logged-in account, so it cannot be changed.\\nIf you are using an improper method, please stop immediately.',
'회원아이콘을 {1}바이트 이하로 업로드 해주십시오.' => 'Please upload a member icon of {1} bytes or less.',
'{1}은(는) 이미지 파일이 아닙니다.' => '{1} is not an image file.',
'회원이미지을 {1}바이트 이하로 업로드 해주십시오.' => 'Please upload a member image of {1} bytes or less.',
'{1}은(는) gif/jpg 파일이 아닙니다.' => '{1} is not a gif/jpg file.',
'회원 정보가 수정 되었습니다.\\n\\nE-mail 주소가 변경되었으므로 다시 인증하셔야 합니다.' => 'Your profile has been updated.\\n\\nYour email address has changed, so you need to verify it again.',
'회원정보수정' => 'Edit profile',
'회원 정보가 수정 되었습니다.' => 'Your profile has been updated.',

// bbs/register_form_update_mail1.php
'회원가입 축하 메일' => 'Welcome email',
'회원가입을 축하합니다.' => 'Welcome!',
'<b>{1}</b> 님의 회원가입을 진심으로 축하합니다.' => 'Thank you for joining, <b>{1}</b>.',
'회원님의 성원에 보답하고자 더욱 더 열심히 하겠습니다.' => 'We will do our best to serve you.',
'아래의 <strong>메일인증</strong>을 클릭하시면 회원가입이 완료됩니다.' => 'Click <strong>Verify email</strong> below to complete your registration.',
'인증 링크는 발송 후 {1}분 동안 유효합니다.' => 'The verification link is valid for {1} minutes after sending.',
'감사합니다.' => 'Thank you.',
'메일인증' => 'Verify email',
'사이트바로가기' => 'Go to the site',

// bbs/register_form_update_mail3.php
'회원 인증 메일' => 'Member verification email',
'회원 인증 메일입니다.' => 'This is a member verification email.',
'<b>{1}</b> 님의 E-mail 주소가 변경되었습니다.' => 'The email address of <b>{1}</b> has been changed.',
'아래의 주소를 클릭하시면 인증이 완료됩니다.' => 'Click the address below to complete verification.',
'{1} 로그인' => '{1} login',

// bbs/register_result.php
'회원가입 완료' => 'Registration complete',

// bbs/rss.php
'비회원 읽기가 가능한 게시판만 RSS 지원합니다.' => 'RSS is only available for boards that guests can read.',
'RSS 보기가 금지되어 있습니다.' => 'RSS is disabled.',

// bbs/scrap.php
'{1}님의 스크랩' => '{1}\'s scraps',
'[게시판 없음]' => '[No board]',
'[글 없음]' => '[No post]',

// bbs/scrap_popin.php
'회원만 접근 가능합니다.' => 'Members only.',
'로그인하기' => 'Log in',
'올바른 방법으로 사용해 주십시오.' => 'Please use the correct method.',
'코멘트는 스크랩 할 수 없습니다.' => 'Comments cannot be scrapped.',
'이미 스크랩하신 글 입니다.

지금 스크랩을 확인하시겠습니까?' => 'You have already scrapped this post.

Do you want to view your scraps now?',
'이미 스크랩하신 글 입니다.' => 'You have already scrapped this post.',
'스크랩 확인하기' => 'View scraps',

// bbs/scrap_popin_update.php
'스크랩하시려는 게시글이 존재하지 않습니다.' => 'The post you are trying to scrap does not exist.',
'너무 빠른 시간내에 게시물을 연속해서 올릴 수 없습니다.' => 'You cannot post repeatedly in such a short time.',
'이 글을 스크랩 하였습니다.

지금 스크랩을 확인하시겠습니까?' => 'This post has been scrapped.

Do you want to view your scraps now?',
'이 글을 스크랩 하였습니다.' => 'This post has been scrapped.',

// bbs/search.php
'전체검색 결과' => 'Search results',
'[비밀글 입니다.]' => '[This is a secret post.]',
'게시판 그룹선택' => 'Select board group',
'전체 분류' => 'All categories',

// bbs/view_comment.php
'비밀글 입니다.' => 'This is a secret post.',
'댓글내용 확인' => 'View comment',

// bbs/view_image.php
'이미지 크게보기' => 'View larger image',
'이미지 확장자가 아닙니다.' => 'Not an image file extension.',
'이미지 파일이 아닙니다.' => 'Not an image file.',

// bbs/write.php
'bo_table 값이 넘어오지 않았습니다.\\nwrite.php?bo_table=code 와 같은 방식으로 넘겨 주세요.' => 'No bo_table value was passed.\\nPass it like write.php?bo_table=code.',
'글이 존재하지 않습니다.\\n삭제되었거나 이동된 경우입니다.' => 'The post does not exist.\\nIt may have been deleted or moved.',
'글쓰기에는 \\$wr_id 값을 사용하지 않습니다.' => 'The $wr_id value is not used when writing a new post.',
'글을 쓸 권한이 없습니다.' => 'You do not have permission to write.',
'글을 쓸 권한이 없습니다.\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to write.\\nIf you are a member, please log in and try again.',
'보유하신 포인트({1})가 없거나 모자라서 글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글쓰기 해 주십시오.' => 'You do not have enough points ({1}) to write a post ({2}).\\n\\nPlease collect more points and try again.',
'글쓰기' => 'Write',
'글을 수정할 권한이 없습니다.' => 'You do not have permission to edit this post.',
'글을 수정할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to edit this post.\\n\\nIf you are a member, please log in and try again.',
'이 글과 관련된 답변글이 존재하므로 수정 할 수 없습니다.\\n\\n답변글이 있는 원글은 수정할 수 없습니다.' => 'This post cannot be edited because it has replies.\\n\\nPosts with replies cannot be edited.',
'이 글과 관련된 댓글이 존재하므로 수정 할 수 없습니다.\\n\\n댓글이 {1}건 이상 달린 원글은 수정할 수 없습니다.' => 'This post cannot be edited because it has comments.\\n\\nPosts with {1} or more comments cannot be edited.',
'글수정' => 'Edit post',
'글을 답변할 권한이 없습니다.' => 'You do not have permission to reply.',
'답변글을 작성할 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to write a reply.\\n\\nIf you are a member, please log in and try again.',
'보유하신 포인트({1})가 없거나 모자라서 글답변({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 글답변 해 주십시오.' => 'You do not have enough points ({1}) to reply ({2}).\\n\\nPlease collect more points and try again.',
'공지에는 답변 할 수 없습니다.' => 'You cannot reply to a notice.',
'정상적인 접근이 아닙니다.' => 'Invalid access.',
'비밀글에는 자신 또는 관리자만 답변이 가능합니다.' => 'Only the author or an administrator can reply to a secret post.',
'비회원의 비밀글에는 답변이 불가합니다.' => 'You cannot reply to a guest\'s secret post.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 10단계 까지만 가능합니다.' => 'You cannot reply any further.\\n\\nReplies are limited to 10 levels.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 26개 까지만 가능합니다.' => 'You cannot reply any further.\\n\\nReplies are limited to 26.',
'글답변' => 'Reply',
'접근 권한이 없습니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Access denied.\\n\\nIf you are a member, please log in and try again.',
'접근 권한이 없으므로 글쓰기가 불가합니다.\\n\\n궁금하신 사항은 관리자에게 문의 바랍니다.' => 'You do not have permission to write.\\n\\nPlease contact the administrator if you have any questions.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원이시라면 로그인 후 이용해 보십시오.' => 'Only identity-verified members can write on this board.\\n\\nIf you are a member, please log in and try again.',
'이 게시판은 본인확인 하신 회원님만 글쓰기가 가능합니다.\\n\\n회원정보 수정에서 본인확인을 해주시기 바랍니다.' => 'Only identity-verified members can write on this board.\\n\\nPlease verify your identity in Edit profile.',

// bbs/write_comment_update.php
'이름은 필히 입력하셔야 합니다.' => 'Name is required.',
'댓글을 쓸 권한이 없습니다.' => 'You do not have permission to comment.',
'글이 존재하지 않습니다.\\n글이 삭제되었거나 이동하였을 수 있습니다.' => 'The post does not exist.\\nIt may have been deleted or moved.',
'보유하신 포인트({1})가 없거나 모자라서 댓글쓰기({2})가 불가합니다.\\n\\n포인트를 적립하신 후 다시 댓글을 써 주십시오.' => 'You do not have enough points ({1}) to comment ({2}).\\n\\nPlease collect more points and try again.',
'답변할 댓글이 없습니다.\\n\\n답변하는 동안 댓글이 삭제되었을 수 있습니다.' => 'There is no comment to reply to.\\n\\nIt may have been deleted while you were replying.',
'댓글을 등록할 수 없습니다.' => 'The comment cannot be posted.',
'더 이상 답변하실 수 없습니다.\\n\\n답변은 5단계 까지만 가능합니다.' => 'You cannot reply any further.\\n\\nReplies are limited to 5 levels.',
'원글
{1}


댓글
{2}' => 'Original post
{1}


Comment
{2}',
'입력' => 'New',
'수정' => 'Edit',
'답변' => 'Reply',
'댓글 ' => 'Comment ',
'댓글 수정' => 'Edit comment',
'[{1}] {2} 게시판에 {3}글이 올라왔습니다.' => '[{1}] New post on the {2} board ({3})',
'그룹관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'You cannot edit this comment because it was written by a member with a higher level than the group admin.',
'자신이 관리하는 그룹의 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'You cannot edit the comment because the board is not in a group you manage.',
'게시판관리자의 권한보다 높은 회원의 댓글이므로 수정할 수 없습니다.' => 'You cannot edit this comment because it was written by a member with a higher level than the board admin.',
'자신이 관리하는 게시판이 아니므로 댓글을 수정할 수 없습니다.' => 'You cannot edit the comment because you do not manage this board.',
'자신의 글이 아니므로 수정할 수 없습니다.' => 'You cannot edit this because it is not your post.',
'댓글을 수정할 권한이 없습니다.' => 'You do not have permission to edit this comment.',
'이 댓글와 관련된 답변댓글이 존재하므로 수정 할 수 없습니다.' => 'This comment cannot be edited because it has replies.',

// bbs/write_token.php
'게시판 정보가 올바르지 않습니다.' => 'The board information is invalid.',

// bbs/write_update.php
'게시글 저장' => 'Save post',
'<strong>분류</strong>를 선택하세요.' => 'Please select a <strong>category</strong>.',
'분류를 올바르게 입력하세요.' => 'Please enter a valid category.',
'올바른 방법으로 수정하여 주십시오.' => 'Please edit using the correct method.',
'자신이 관리하는 그룹의 게시판이 아니므로 수정할 수 없습니다.' => 'You cannot edit this because the board is not in a group you manage.',
'자신의 권한보다 높은 권한의 회원이 작성한 글은 수정할 수 없습니다.' => 'You cannot edit a post written by a member with a higher level than yours.',
'자신이 관리하는 게시판이 아니므로 수정할 수 없습니다.' => 'You cannot edit this because you do not manage this board.',
'비밀번호 확인 후 다시 수정하여 주십시오.' => 'Please confirm your password and edit again.',
'로그인 후 수정하세요.' => 'Please log in to edit.',
'비밀글 미사용 게시판 이므로 비밀글로 등록할 수 없습니다.' => 'This board does not use secret posts, so you cannot post a secret post.',
'관리자만 공지할 수 있습니다.' => 'Only administrators can post notices.',
'더 이상 답변하실 수 없습니다.\\n답변은 10단계 까지만 가능합니다.' => 'You cannot reply any further.\\nReplies are limited to 10 levels.',
'더 이상 답변하실 수 없습니다.\\n답변은 26개 까지만 가능합니다.' => 'You cannot reply any further.\\nReplies are limited to 26.',
'제목을 입력하여 주십시오.' => 'Please enter a subject.',
'기존 파일을 삭제하신 후 첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Please delete existing files and upload no more than {1} attachments.',
'첨부파일을 {1}개 이하로 업로드 해주십시오.' => 'Please upload no more than {1} attachments.',
'코멘트' => 'Comment',
'코멘트 수정' => 'Edit comment',

// bbs/write_update_mail.php
'{1} 메일' => '{1} email',
'작성자 {1}' => 'Author: {1}',
'사이트에서 게시물 확인하기' => 'View the post on the site',

// common.php
'접근이 가능하지 않습니다.' => 'Access is not available.',
'접근 불가합니다.' => 'Access denied.',

// head.php
'본문 바로가기' => 'Skip to content',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Shop',
'접속자' => 'Visitors',
'사이트 내 전체검색' => 'Site search',
'검색어 필수' => 'Search term (required)',
'검색어를 입력해주세요' => 'Enter a search term',
'검색' => 'Search',
'검색어는 두글자 이상 입력하십시오.' => 'Please enter at least two characters.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For faster searching, only one space is allowed in the search term.',
'정보수정' => 'Edit profile',
'로그아웃' => 'Log out',
'회원가입' => 'Sign up',
'메인메뉴' => 'Main menu',
'전체메뉴' => 'All menus',
'전체메뉴열기' => 'Open all menus',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'The menu is being prepared.',

// head.sub.php
'{1}님 로그인 중 ' => '{1} logged in ',

// lib/common.lib.php
'처음' => 'First',
'이전' => 'Prev',
'페이지' => 'Page',
'열린' => 'Current',
'다음' => 'Next',
'맨끝' => 'Last',
'$url1 과 $url2 를 지정해 주세요.' => 'Please specify $url1 and $url2.',
'답변글' => 'Reply',
'{1} 자기소개' => 'About {1}',
'{1} 이름으로 검색' => 'Search by name {1}',
'쪽지보내기' => 'Send message',
'홈페이지' => 'Website',
'자기소개' => 'About me',
'아이디로 검색' => 'Search by username',
'이름으로 검색' => 'Search by name',
'전체게시물' => 'All posts',
'MySQL Host, User, Password, DB 정보에 오류가 있습니다.' => 'The MySQL Host, User, Password or DB information is incorrect.',
'MySQL이 설치되지 않아 mysql_connect 함수를 사용할 수 없습니다.' => 'MySQL is not installed, so the mysql_connect function is not available.',
'MySQL Host, User, Password 정보에 오류가 있습니다.' => 'The MySQL Host, User or Password information is incorrect.',
'데이터베이스 처리 중 오류가 발생했습니다.' => 'A database error occurred.',
'yoil|일' => 'Sun',
'yoil|월' => 'Mon',
'yoil|화' => 'Tue',
'yoil|수' => 'Wed',
'yoil|목' => 'Thu',
'yoil|금' => 'Fri',
'yoil|토' => 'Sat',
'요일' => ' ',
'토큰이 만료되었습니다. 페이지를 새로고침 해주십시오.' => 'The token has expired. Please refresh the page.',
'메일 인증을 위한 사이트 주소가 설정되지 않았습니다. 사이트 관리자에게 문의해 주십시오.' => 'The site URL for email verification is not set. Please contact the site administrator.',
'올바른 경로로 접근해 주십시오.' => 'Please access via the correct path.',
'PC 전용 게시판입니다.' => 'This board is for PC only.',
'모바일 전용 게시판입니다.' => 'This board is for mobile only.',
'간편인증' => 'Simple verification',
'휴대폰' => 'Mobile',
'아이핀' => 'i-PIN',
'오늘 {1} 본인확인을 {2}회 이용하셔서 더 이상 이용할 수 없습니다.' => 'You have used {1} identity verification {2} times today and cannot use it any more.',
'exec 함수실행이 불가능하므로 사용할수 없습니다.' => 'Not available because the exec function cannot be executed.',
'폼에서 전송된 변수의 개수가 max_input_vars 값보다 큽니다.\\n전송된 값중 일부는 유실되어 DB에 기록될 수 있습니다.\\n\\n문제를 해결하기 위해서는 서버 php.ini의 max_input_vars 값을 변경하십시오.' => 'The number of variables submitted by the form exceeds max_input_vars.\\nSome submitted values may be lost when saved to the DB.\\n\\nTo fix this, change the max_input_vars value in the server\'s php.ini.',
'url에 타 도메인을 지정할 수 없습니다.' => 'Other domains cannot be specified in the URL.',
'url에 사용자 정보가 포함되어 있어 접근할 수 없습니다.' => 'Access denied because the URL contains user information.',
'bot 으로 판단되어 중지합니다.' => 'Stopped because you appear to be a bot.',

// lib/editor.lib.php
'내용을 입력해 주십시오.' => 'Please enter the content.',

// lib/get_data.lib.php
'제목' => 'Subject',
'내용' => 'Content',
'제목+내용' => 'Subject+Content',
'글쓴이' => 'Author',
'글쓴이(코)' => 'Author (comments)',

// lib/register.lib.php
'회원아이디를 입력해 주십시오.' => 'Please enter a username.',
'회원아이디는 영문자, 숫자, _ 만 입력하세요.' => 'The username may contain only letters, numbers and _.',
'회원아이디는 최소 3글자 이상 입력하세요.' => 'The username must be at least 3 characters.',
'이미 사용중인 회원아이디 입니다.' => 'This username is already in use.',
'이미 예약된 단어로 사용할 수 없는 회원아이디 입니다.' => 'This username is a reserved word and cannot be used.',
'닉네임을 입력해 주십시오.' => 'Please enter a nickname.',
'닉네임은 공백없이 한글, 영문, 숫자만 입력 가능합니다.' => 'The nickname may contain only Korean, English letters and numbers, without spaces.',
'닉네임은 한글 2글자, 영문 4글자 이상 입력 가능합니다.' => 'The nickname must be at least 2 Korean or 4 English characters.',
'이미 존재하는 닉네임입니다.' => 'This nickname already exists.',
'이미 예약된 단어로 사용할 수 없는 닉네임 입니다.' => 'This nickname is a reserved word and cannot be used.',
'E-mail 주소를 입력해 주십시오.' => 'Please enter an email address.',
'E-mail 주소가 형식에 맞지 않습니다.' => 'The email address is invalid.',
'{1} 메일은 사용할 수 없습니다.' => '{1} email addresses cannot be used.',
'이미 사용중인 E-mail 주소입니다.' => 'This email address is already in use.',
'이름을 입력해 주십시오.' => 'Please enter your name.',
'이름은 공백없이 한글만 입력 가능합니다.' => 'The name may contain only Korean characters, without spaces.',
'휴대폰번호를 입력해 주십시오.' => 'Please enter your mobile number.',
'휴대폰번호를 올바르게 입력해 주십시오.' => 'Please enter a valid mobile number.',
' 이미 사용 중인 휴대폰번호입니다. {1}' => ' This mobile number is already in use. {1}',

// plugin/inicert/ini_find_result.php
'잘못된 요청입니다.' => 'Invalid request.',
'정상적인 인증이 아닙니다. 올바른 방법으로 이용해 주세요.' => 'Invalid verification. Please use the correct method.',
'인증하신 정보로 가입된 회원정보가 없습니다.' => 'No member account matches the verified information.',
'코드 : {1}  {2}' => 'Code: {1}  {2}',
'KG이니시스 간편인증 결과' => 'KG Inicis simple verification result',
'본인인증이 완료되었습니다.' => 'Identity verification completed.',

// plugin/inicert/ini_request.php
'KG이니시스 간편인증' => 'KG Inicis simple verification',

// plugin/inicert/ini_result.php
'해당 계정은 이미 다른명의로 본인인증 되어있는 계정입니다.' => 'This account has already been verified under another person\'s name.',
'입력하신 본인확인 정보로 이미 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'An account is already registered with the identity verification information you entered.\\nUsername: {1}',

// plugin/kcaptcha/kcaptcha.lib.php
'숫자음성듣기' => 'Listen to the numbers',
'새로고침' => 'Refresh',
'자동등록방지 숫자를 순서대로 입력하세요.' => 'Enter the anti-spam numbers in order.',

// plugin/kcpcert/find_kcpcert_result.php
'휴대폰인증 결과' => 'Mobile verification result',
'dn_hash 변조 위험있음 ({1} 파일에 실행권한이 있는지 확인하세요.)' => 'Risk of dn_hash tampering (check whether {1} has execute permission.)',
'휴대폰 본인확인을 취소 하셨습니다.' => 'You cancelled the mobile identity verification.',
'up_hash 변조 위험있음' => 'Risk of up_hash tampering',

// plugin/kcpcert/kcpcert_config.php
'KCP 휴대폰 본인확인 서비스 사이트코드가 없습니다.\\관리자 > 기본환경설정에 KCP 사이트코드를 입력해 주십시오.' => 'The KCP mobile identity verification site code is missing. Please enter the KCP site code in Admin > Basic configuration.',

// plugin/kcpcert/kcpcert_result.php
'입력하신 본인확인 정보로 가입된 내역이 존재합니다.\\n회원아이디 : {1}' => 'An account is already registered with the identity verification information you entered.\\nUsername: {1}',
'본인의 휴대폰번호로 확인 되었습니다.' => 'Verified with your own mobile number.',

// plugin/kcpcert_v2/find_kcpcert_result.php
'본인확인 응답값이 없습니다. 처음부터 다시 시도해 주세요.' => 'No identity verification response. Please start over.',
'코드 : {1} {2}' => 'Code: {1} {2}',
'본인확인 세션이 만료되었습니다. 처음부터 다시 시도해 주세요.' => 'The identity verification session has expired. Please start over.',
'본인확인 결과조회 실패 ({1} : {2})' => 'Failed to retrieve identity verification result ({1} : {2})',

// plugin/kcpcert_v2/kcpcert_config.php
'KCP 휴대폰 본인확인 V2 모듈은 PHP 7.0 이상 환경에서만 동작합니다.' => 'The KCP mobile identity verification V2 module requires PHP 7.0 or later.',
'KCP 휴대폰 본인확인 V2 모듈에 필요한 PHP 확장(openssl/curl/hash_pbkdf2)이 활성화되어 있지 않습니다.' => 'The PHP extensions required by the KCP mobile identity verification V2 module (openssl/curl/hash_pbkdf2) are not enabled.',
'KCP 휴대폰 본인확인 V2 사이트코드 또는 ENC_KEY 가 설정되지 않았습니다.\\n관리자 > 기본환경설정에서 입력해 주세요.' => 'The KCP mobile identity verification V2 site code or ENC_KEY is not set.\\nPlease enter it in Admin > Basic configuration.',

// plugin/kcpcert_v2/kcpcert_form.php
'본인확인 거래등록에 실패했습니다.\\n({1} : {2})' => 'Identity verification transaction registration failed.\\n({1} : {2})',
'휴대폰 본인확인' => 'Mobile verification',

// plugin/kcpcert_v2/lib/kcp_api.php
'KCP 거래등록 요청 데이터를 생성할 수 없습니다.' => 'Cannot create the KCP transaction registration request data.',
'KCP 거래등록 요청 데이터를 암호화할 수 없습니다.' => 'Cannot encrypt the KCP transaction registration request data.',
'KCP 거래등록 API 응답이 없습니다.' => 'No response from the KCP transaction registration API.',
'KCP 거래등록 API 응답을 해석할 수 없습니다.' => 'Cannot parse the KCP transaction registration API response.',
'KCP 본인확인 결과조회 요청 데이터를 생성할 수 없습니다.' => 'Cannot create the KCP identity verification result request data.',
'KCP 본인확인 결과조회 API 응답이 없습니다.' => 'No response from the KCP identity verification result API.',
'KCP 본인확인 결과조회 API 응답을 해석할 수 없습니다.' => 'Cannot parse the KCP identity verification result API response.',
'KCP 본인확인 결과 데이터를 복호화할 수 없습니다.' => 'Cannot decrypt the KCP identity verification result data.',
'KCP 본인확인 복호화 데이터를 해석할 수 없습니다.' => 'Cannot parse the decrypted KCP identity verification data.',
'cURL 초기화에 실패했습니다.' => 'cURL initialization failed.',
'KCP API 통신 실패: {1}' => 'KCP API communication failed: {1}',
'KCP API HTTP 오류: {1}' => 'KCP API HTTP error: {1}',

// plugin/okname/find_hpcert2.php
'휴대폰 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'An error occurred during mobile identity verification. Error code: {1}\\n\\nFor inquiries, please contact the Korea Credit Bureau (KCB) customer center at 02-708-1000.',
'입력 값 확인이 필요합니다' => 'Please check the input values',
'KCB 휴대폰 본인확인' => 'KCB mobile identity verification',

// plugin/okname/find_ipin2.php
'아이핀 본인확인 중 오류가 발생했습니다. 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'An error occurred during i-PIN identity verification. Error code: {1}\\n\\nFor inquiries, please contact the Korea Credit Bureau (KCB) customer center at 02-708-1000.',
'아이핀 본인확인 중 오류가 발생했습니다. (ci 정보 없음) 오류코드 : {1}\\n\\n문의는 코리아크레딧뷰로 고객센터 02-708-1000 로 해주십시오.' => 'An error occurred during i-PIN identity verification. (No CI information) Error code: {1}\\n\\nFor inquiries, please contact the Korea Credit Bureau (KCB) customer center at 02-708-1000.',
'KCB 아이핀 본인확인' => 'KCB i-PIN identity verification',

// plugin/okname/hpcert.config.php
'기본환경설정에서 KCB 휴대폰본인확인 서비스로 설정해 주십시오.' => 'Please select the KCB mobile identity verification service in Basic configuration.',
'기본환경설정에서 KCB 회원사ID를 입력해 주십시오.' => 'Please enter the KCB member ID in Basic configuration.',

// plugin/okname/hpcert1.php
'모듈실행 파일이 존재하지 않습니다.\\n\\n{1} 파일이 {2}/{3}/bin 안에 있어야 합니다.' => 'The module executable does not exist.\\n\\nThe {1} file must be in {2}/{3}/bin.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\nchmod 755 {1} 과 같이 실행권한을 부여해 주십시오.' => 'The module executable has no execute permission.\\n\\nPlease grant execute permission, e.g. chmod 755 {1}.',
'모듈실행 파일의 실행권한이 없습니다.\\n\\ncmd.exe의 IUSER 실행권한이 있는지 확인하여 주십시오.' => 'The module executable has no execute permission.\\n\\nPlease check that IUSER has execute permission for cmd.exe.',

// plugin/okname/ipin.config.php
'기본환경설정에서 KCB 아이핀 본인확인 서비스로 설정해 주십시오.' => 'Please select the KCB i-PIN identity verification service in Basic configuration.',

// plugin/okname/key_dir_check.php
'{1}/{2} 에 key 디렉토리를 생성해 주십시오.\\n\\n디렉토리 생성 후 쓰기권한을 부여해 주십시오. 예: chmod 707 key' => 'Please create a key directory in {1}/{2}.\\n\\nAfter creating it, grant write permission, e.g. chmod 707 key',
'{1}/{2}/key 디렉토리의 퍼미션을 705로 변경하여 주십시오.\\nchmod 705 key 또는 chmod uo+rx key' => 'Please change the permissions of the {1}/{2}/key directory to 705.\\nchmod 705 key or chmod uo+rx key',
'{1}/{2}/key 디렉토리의 퍼미션을 707로 변경하여 주십시오.\\n\\nchmod 707 key 또는 chmod uo+rwx key' => 'Please change the permissions of the {1}/{2}/key directory to 707.\\n\\nchmod 707 key or chmod uo+rwx key',

// plugin/sns/twitter/callback.php
'트위터 콜백' => 'Twitter callback',
'트위터에 승인이 되었습니다.' => 'Authorized on Twitter.',
'트위터에 승인이 되지 않았습니다.' => 'Not authorized on Twitter.',

// plugin/sns/view.sns.skin.php
'자세히 보기' => 'View details',
'페이스북으로 공유' => 'Share on Facebook',
'페이스북 공유' => 'Share on Facebook',
'트위터로  공유' => 'Share on Twitter',
'트위터 공유' => 'Share on Twitter',
'카카오톡으로 보내기' => 'Send via KakaoTalk',

// plugin/sns/view_comment_list.sns.skin.php
'페이스북에도 등록됨' => 'Also posted to Facebook',
'트위터에도 등록됨' => 'Also posted to Twitter',

// plugin/sns/view_comment_write.sns.skin.php
'트위터 동시 등록' => 'Also post to Twitter',

// plugin/social/error.php
'소셜 로그인 - {1}' => 'Social login - {1}',
'잠시후에 다시 시도해 주세요.' => 'Please try again later.',
'홈으로' => 'Home',
'이 페이지 닫기' => 'Close this page',

// plugin/social/includes/functions.php
'해당 {1} ID 로 연결 또는 가입된 내역이 있기 때문에 다시 가입할수 없습니다. 회원이시면 로그인 후 정보 수정에서 계정 연결을 해 주세요.' => 'You cannot sign up again because an account is already linked to or registered with this {1} ID. If you are a member, please log in and link the account in Edit profile.',
'지정되지 않은 오류입니다.' => 'Unspecified error.',
'설정 오류입니다.' => 'Configuration error.',
'해당 provider 설정 오류입니다.' => 'Provider configuration error.',
'알수 없거나 비활성화 된 provider 입니다.' => 'Unknown or disabled provider.',
'해당 서비스에 접근할수 있는 권한이 없습니다.' => 'You do not have permission to access this service.',
'인증이 실패되었습니다.. ' => 'Authentication failed. ',
'사용자가 인증을 취소했거나, 공급자가 연결을 거부했습니다.' => 'The user cancelled authentication or the provider refused the connection.',
'사용자 프로필 요청이 실패했습니다.사용자가 해당 서비스에 연결되어 있지 않을 경우도 있습니다. ' => 'The user profile request failed. The user may not be connected to the service. ',
'이 경우 다시 인증 요청을 해야 합니다.' => 'In this case, you must request authentication again.',
'사용자가 해당 서비스에 연결되어 있지 않습니다.' => 'The user is not connected to the service.',
'해당 서비스가 기능을 지원하지 않습니다.' => 'The service does not support this feature.',
'이미 로그인 하셨거나 잘못된 요청입니다.' => 'You are already logged in or the request is invalid.',
'이미 연결된 아이디가 있거나, 잘못된 요청입니다.' => 'An ID is already linked or the request is invalid.',
'소셜 데이터 오류' => 'Social data error',
'SNS 사용자 인증에 실패하였습니다.' => 'SNS user authentication failed.',
'해당 계정에 이미 {1} ID 가 연결되어 있습니다. 연결을 해제 후 다시 시도해 주세요.' => 'A {1} ID is already linked to this account. Please unlink it and try again.',
'네이버' => 'Naver',
'카카오' => 'Kakao',
'페이스북' => 'Facebook',
'구글' => 'Google',
'트위터' => 'Twitter',
'페이코' => 'PAYCO',

// plugin/social/includes/loading.php
'{1} 에 연결중입니다. 잠시만 기다려주세요.' => 'Connecting to {1}. Please wait.',

// plugin/social/index.php
'소셜로그인을 사용하지 않습니다.' => 'Social login is not used.',

// plugin/social/popup.php
'소셜 로그인 설정이 비활성화 되어 있습니다.' => 'Social login is disabled.',
'새창 옵션이 비활성화 되어 있습니다.' => 'The new window option is disabled.',
'서비스 이름이 넘어오지 않았습니다.' => 'The service name was not passed.',

// plugin/social/register_member.php
'소셜 로그인을 사용하지 않습니다.' => 'Social login is not used.',
'이미 회원가입 하였습니다.' => 'You have already signed up.',
'소셜로그인을 하신 분만 접근할 수 있습니다.' => 'Only users who logged in via social login can access this page.',
'소셜 회원 가입 - {1}' => 'Social sign-up - {1}',

// plugin/social/register_member_update.php
'소셜로그인 을 하신 분만 접근할 수 있습니다.' => 'Only users who logged in via social login can access this page.',
'이미 등록된 회원이 존재합니다.' => 'A member is already registered.',
'본인인증된 정보와 개인정보가 일치하지않습니다. 다시시도 해주세요' => 'The verified identity does not match your personal information. Please try again.',
'회원 가입 오류!' => 'Sign-up error!',

// plugin/social/unlink.php
'회원이 아니거나 해당값이 넘어오지 않았습니다.' => 'Not a member, or the value was not passed.',
'권한이 없거나 잘못된 요청입니다.' => 'No permission or invalid request.',

// js/autosave.js
'삭제' => 'Delete',
'임시 저장된글을 삭제중에 오류가 발생하였습니다.' => 'An error occurred while deleting the temporarily saved post.',

// js/certify.js
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'You have already verified your identity with {1}.

Cancel the previous verification and verify again?',

// js/common.js
'한번 삭제한 자료는 복구할 방법이 없습니다.

정말 삭제하시겠습니까?' => 'Deleted data cannot be recovered.

Are you sure you want to delete it?',
'KAKAO 우편번호 서비스 postcode.v2.js 파일이 로드되지 않았습니다.' => 'The KAKAO postcode service file postcode.v2.js has not been loaded.',
'토큰 정보가 올바르지 않습니다.' => 'The token is invalid.',

// js/wrest.js
'{1} : 필수 선택입니다.
' => '{1} : Please make a selection.
',
'{1} : 필수 입력입니다.
' => '{1} : This field is required.
',
'{1} : 전화번호 형식이 올바르지 않습니다.

하이픈(-)을 포함하여 입력하세요.
' => '{1} : The phone number format is invalid.

Please include hyphens (-).
',
'{1} : 이메일주소 형식이 아닙니다.
' => '{1} : Not a valid email address.
',
'{1} : 한글이 아닙니다. (자음, 모음 조합된 한글만 가능)
' => '{1} : Only Korean is allowed. (Complete Korean syllables only)
',
'{1} : 한글이 아닙니다.
' => '{1} : Only Korean is allowed.
',
'{1} : 한글, 영문, 숫자가 아닙니다.
' => '{1} : Only Korean, English letters and numbers are allowed.
',
'{1} : 한글, 영문이 아닙니다.
' => '{1} : Only Korean and English letters are allowed.
',
'{1} : 숫자가 아닙니다.
' => '{1} : Only numbers are allowed.
',
'{1} : 영문이 아닙니다.
' => '{1} : Only English letters are allowed.
',
'{1} : 영문 또는 숫자가 아닙니다.
' => '{1} : Only English letters or numbers are allowed.
',
'{1} : 영문, 숫자, _ 가 아닙니다.
' => '{1} : Only English letters, numbers and _ are allowed.
',
'{1} : 최소 {2}글자 이상 입력하세요.
' => '{1} : Please enter at least {2} characters.
',
'{1} : 이미지 파일이 아닙니다.
.gif .jpg .png 파일만 가능합니다.
' => '{1} : Not an image file.
Only .gif .jpg .png files are allowed.
',
'{1} : .{2} 파일만 가능합니다.
' => '{1} : Only .{2} files are allowed.
',
'{1} : 공백이 없어야 합니다.
' => '{1} : Spaces are not allowed.
',
);
