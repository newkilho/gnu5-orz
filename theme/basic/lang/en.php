<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (en). 틀은 php lang/build.php en 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

// theme/basic/group.php
'{1} 그룹은 모바일에서만 접근할 수 있습니다.' => 'The {1} group can only be accessed on mobile.',

// theme/basic/head.php
'본문 바로가기' => 'Skip to content',
'커뮤니티' => 'Community',
'쇼핑몰' => 'Shop',
'새글' => 'New posts',
'접속자' => 'Visitors',
'사이트 내 전체검색' => 'Site search',
'검색어 필수' => 'Search term (required)',
'검색어를 입력해주세요' => 'Enter a search term',
'검색' => 'Search',
'검색어는 두글자 이상 입력하십시오.' => 'Please enter at least two characters.',
'빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.' => 'For faster searching, only one space is allowed in the search term.',
'정보수정' => 'Edit profile',
'로그아웃' => 'Log out',
'관리자' => 'Admin',
'회원가입' => 'Sign up',
'로그인' => 'Log in',
'메인메뉴' => 'Main menu',
'전체메뉴' => 'All menus',
'전체메뉴열기' => 'Open all menus',
'하위분류' => 'Submenu',
'메뉴 준비 중입니다.' => 'The menu is being prepared.',
'{1}에서 설정하실 수 있습니다.' => 'You can set it up in {1}.',
'관리자모드 &gt; 환경설정 &gt; 메뉴설정' => 'Admin &gt; Settings &gt; Menu settings',

// theme/basic/index.php
'최신글' => 'Latest posts',

// theme/basic/lang_select.php
'언어' => 'Language',

// theme/basic/mobile/group.php
'{1} 그룹은 PC에서만 접근할 수 있습니다.' => 'The {1} group is only accessible on PC.',

// theme/basic/mobile/head.php
'메뉴열기' => 'Open menu',
'메뉴 닫기' => 'Close menu',
'{1}에서 설정하세요.' => 'Set it up in {1}.',
'1:1문의' => '1:1 Inquiry',
'사용자메뉴' => 'User menu',
'기본' => 'Default',
'크게' => 'Large',
'더크게' => 'Larger',
'열기' => 'Open',
'닫기' => 'Close',
'뒤로가기' => 'Back',

// theme/basic/mobile/skin/board/basic/list.skin.php
'게시판 리스트 옵션' => 'Board list options',
'선택삭제' => 'Delete selected',
'선택복사' => 'Copy selected',
'선택이동' => 'Move selected',
'글쓰기' => 'Write',
'카테고리' => 'Category',
'현재 페이지 게시물' => 'Posts on this page',
'전체선택' => 'Select all',
'공지' => 'Notice',
'댓글' => 'Comments',
'개' => ' ',
'작성자' => 'Author',
'회' => ' views',
'추천' => 'Like',
'비추천' => 'Dislike',
'게시물이 없습니다.' => 'No posts.',
'자바스크립트를 사용하지 않는 경우' => 'If JavaScript is disabled',
'별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.' => 'selected items are deleted immediately without confirmation, so please be careful.',
'전체 {1}건' => 'Total {1}',
'페이지' => 'Page',
'게시물 검색' => 'Search posts',
'검색대상' => 'Search in',
'검색어를 입력하세요' => 'Enter a search term',
'{1}할 게시물을 하나 이상 선택하세요.' => 'Please select at least one post.',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다

답변글이 있는 게시글을 선택하신 경우
답변글도 선택하셔야 게시글이 삭제됩니다.' => 'Are you sure you want to delete the selected posts?

Deleted data cannot be recovered.

If a selected post has replies,
you must also select the replies to delete it.',
'복사' => 'Copy',
'이동' => 'Move',

// theme/basic/mobile/skin/board/basic/view.skin.php
'공유' => 'Share',
'스크랩' => 'Scrap',
'답변' => 'Reply',
'수정' => 'Edit',
'삭제' => 'Delete',
'목록' => 'List',
'페이지 정보' => 'Page info',
'작성일' => 'Date',
'조회' => 'Views',
'본문' => 'Content',
'이 글을 추천하셨습니다' => 'You liked this post',
'첨부파일' => 'Attachments',
'{1}회 다운로드' => '{1} downloads',
'관련링크' => 'Related links',
'{1}회 연결' => '{1} clicks',
'이전글' => 'Previous post',
'다음글' => 'Next post',
'다운로드 권한이 없습니다.
회원이시라면 로그인 후 이용해 보십시오.' => 'You do not have permission to download.
If you are a member, please log in and try again.',
'파일을 다운로드 하시면 포인트가 차감({1}점)됩니다.

포인트는 게시물당 한번만 차감되며 다음에 다시 다운로드 하셔도 중복하여 차감하지 않습니다.

그래도 다운로드 하시겠습니까?' => 'Downloading this file will deduct {1} points.

Points are deducted only once per post, and will not be deducted again if you download it later.

Do you want to download it?',
'이 글을 비추천하셨습니다.' => 'You disliked this post.',
'이 글을 추천하셨습니다.' => 'You liked this post.',

// theme/basic/mobile/skin/board/basic/view_comment.skin.php
'댓글목록' => 'Comment list',
'{1}님의 댓글' => 'Comment by {1}',
'의 댓글' => ' (reply)',
'아이피' => 'IP',
'댓글 옵션' => 'Comment options',
'비밀글' => 'Secret',
'등록된 댓글이 없습니다.' => 'No comments yet.',
'댓글쓰기' => 'Write a comment',
'글자' => ' characters',
'댓글 내용' => 'Comment',
'댓글내용을 입력해주세요' => 'Enter your comment',
'이름' => 'Name',
'필수' => 'Required',
'비밀번호' => 'Password',
'SNS 동시등록' => 'Also post to SNS',
'댓글등록' => 'Post comment',
'내용에 금지단어(\'{1}\')가 포함되어있습니다' => 'The content contains a forbidden word (\'{1}\')',
'댓글은 {1}글자 이상 쓰셔야 합니다.' => 'Comments must be at least {1} characters.',
'댓글은 {1}글자 이하로 쓰셔야 합니다.' => 'Comments must be {1} characters or fewer.',
'댓글을 입력하여 주십시오.' => 'Please enter a comment.',
'이름이 입력되지 않았습니다.' => 'Please enter your name.',
'비밀번호가 입력되지 않았습니다.' => 'Please enter a password.',
'이 댓글을 삭제하시겠습니까?' => 'Delete this comment?',

// theme/basic/mobile/skin/board/basic/write.skin.php
'답변메일받기' => 'Email me replies',
'분류' => 'Category',
'선택하세요' => 'Select',
'이메일' => 'Email',
'홈페이지' => 'Website',
'옵션' => 'Options',
'제목' => 'Subject',
'내용' => 'Content',
'이 게시판은 최소 {1}글자 이상, 최대 {2}글자 이하까지 글을 쓰실 수 있습니다.' => 'Posts on this board must be between {1} and {2} characters.',
'링크 #{1}' => 'Link #{1}',
'링크를 입력하세요' => 'Enter a link',
'파일을 첨부하세요' => 'Attach a file',
'파일 #{1}' => 'File #{1}',
'파일첨부' => 'Attach file',
'파일첨부 {1} : 용량 {2} 이하만 업로드 가능' => 'Attachment {1}: up to {2}',
'파일 설명을 입력해주세요.' => 'Enter a file description.',
'파일 삭제' => 'Delete file',
'자동등록방지' => 'Anti-spam',
'취소' => 'Cancel',
'작성완료' => 'Submit',
'자동 줄바꿈을 하시겠습니까?

자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.' => 'Use automatic line breaks?

Automatic line breaks convert line breaks in the post into <br> tags.',
'제목에 금지단어(\'{1}\')가 포함되어있습니다' => 'The subject contains a forbidden word (\'{1}\')',
'내용은 {1}글자 이상 쓰셔야 합니다.' => 'Content must be at least {1} characters.',
'내용은 {1}글자 이하로 쓰셔야 합니다.' => 'Content must be {1} characters or fewer.',

// theme/basic/mobile/skin/board/gallery/list.skin.php
'이미지 목록' => 'Image list',
'열람중' => 'Viewing',

// theme/basic/mobile/skin/connect/basic/current_connect.skin.php
'현재 접속자가 없습니다.' => 'No one is online.',

// theme/basic/mobile/skin/faq/basic/list.skin.php
'검색어' => 'Search term',
'자주하시는질문 분류' => 'FAQ categories',
'열린 분류' => 'Open category',
'검색된 게시물이 없습니다.' => 'No results found.',
'등록된 FAQ가 없습니다.' => 'No FAQs yet.',
'FAQ를 새로 등록하시려면 FAQ관리' => 'To add FAQs, use the FAQ management',
'메뉴를 이용하십시오.' => 'menu.',

// theme/basic/mobile/skin/latest/basic/latest.skin.php
'이전페이지' => 'Previous page',
'다음페이지' => 'Next page',
'전체보기' => 'View all',

// theme/basic/mobile/skin/latest/comment/latest.skin.php
'최신댓글' => 'Latest comments',
'더보기' => 'More',

// theme/basic/mobile/skin/member/basic/consent_modal.inc.php
'안내' => 'Notice',
'동의합니다' => 'I agree',

// theme/basic/mobile/skin/member/basic/formmail.skin.php
'{1}님께 메일보내기' => 'Send mail to {1}',
'메일쓰기' => 'Write mail',
'형식' => 'Format',
'첨부 파일 1' => 'Attachment 1',
'첨부 파일은 누락될 수 있으므로 메일을 보낸 후 파일이 첨부 되었는지 반드시 확인해 주시기 바랍니다.' => 'Attachments may be dropped, so please make sure the file was attached after sending.',
'첨부 파일 2' => 'Attachment 2',
'메일발송' => 'Send mail',
'창닫기' => 'Close window',
'첨부파일의 용량이 큰경우 전송시간이 오래 걸립니다.

메일보내기가 완료되기 전에 창을 닫거나 새로고침 하지 마십시오.' => 'Large attachments take longer to send.

Do not close or refresh the window until the mail has been sent.',

// theme/basic/mobile/skin/member/basic/login.skin.php
'아이디' => 'Username',
'자동로그인' => 'Keep me logged in',
'회원로그인 안내' => 'Member login',
'아이디/비밀번호 찾기' => 'Find username/password',
'회원 가입' => 'Sign up',
'비회원 구매' => 'Guest purchase',
'비회원으로 주문하시는 경우 포인트는 지급하지 않습니다.' => 'Points are not awarded for guest orders.',
'개인정보수집에 대한 내용을 읽었으며 이에 동의합니다.' => 'I have read and agree to the collection of personal information.',
'비회원으로 구매하기' => 'Buy as guest',
'개인정보수집에 대한 내용을 읽고 이에 동의하셔야 합니다.' => 'You must read and agree to the collection of personal information.',
'비회원 주문조회' => 'Guest order lookup',
'주문번호' => 'Order number',
'확인' => 'OK',
'메일로 발송해드린 주문서의 {1} 및 주문 시 입력하신 {2}를 정확히 입력해주십시오.' => 'Please enter the {1} from the order email and the {2} you entered when ordering.',
'자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.

공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.

자동로그인을 사용하시겠습니까?' => 'With automatic login, you will not need to enter your username and password next time.

Please avoid using it on public computers, as your personal information may be exposed.

Use automatic login?',

// theme/basic/mobile/skin/member/basic/member_cert_refresh.skin.php
'(필수) 추가 개인정보처리방침 안내' => '(Required) Additional privacy policy',
'추가 개인정보처리방침 안내' => 'Additional privacy policy',
'목적' => 'Purpose',
'항목' => 'Items',
'보유기간' => 'Retention period',
'이용자 식별 및 본인여부 확인' => 'User identification and identity verification',
'생년월일' => 'Date of birth',
', 휴대폰 번호(아이핀 제외)' => ', mobile number (except i-PIN)',
', 암호화된 개인식별부호(CI)' => ', encrypted personal identifier (CI)',
'회원 탈퇴 시까지' => 'Until membership is cancelled',
'추가 개인정보처리방침에 동의합니다.' => 'I agree to the additional privacy policy.',
'인증수단 선택하기' => 'Choose a verification method',
'간편인증' => 'Simple verification',
'휴대폰 본인확인' => 'Mobile verification',
'아이핀 본인확인' => 'i-PIN verification',
'본인확인을 위해서는 자바스크립트 사용이 가능해야합니다.' => 'JavaScript must be enabled for identity verification.',
'기본환경설정에서 휴대폰 본인확인 설정을 해주십시오' => 'Please configure mobile verification in the basic settings.',
'추가 개인정보처리방침에 동의하셔야 인증을 진행하실 수 있습니다.' => 'You must agree to the additional privacy policy to proceed with verification.',

// theme/basic/mobile/skin/member/basic/member_confirm.skin.php
'비밀번호를 한번 더 입력해주세요.' => 'Please enter your password again.',
'비밀번호를 입력하시면 회원탈퇴가 완료됩니다.' => 'Enter your password to complete account cancellation.',
'회원님의 정보를 안전하게 보호하기 위해 비밀번호를 한번 더 확인합니다.' => 'To protect your information, we will check your password once more.',
'회원아이디' => 'Username',
'비밀번호(필수)' => 'Password (required)',

// theme/basic/mobile/skin/member/basic/memo.skin.php
'전체 {1}쪽지 {2}통' => 'Total {2} messages ({1})',
'받은쪽지' => 'Inbox',
'보낸쪽지' => 'Sent',
'쪽지쓰기' => 'Write message',
'안 읽은 쪽지' => 'Unread message',
'자료가 없습니다.' => 'No data.',
'쪽지 보관일수는 최장 {1}일 입니다.' => 'Messages are kept for up to {1} days.',

// theme/basic/mobile/skin/member/basic/memo_form.skin.php
'쪽지 보내기' => 'Send message',
'받는 회원아이디' => 'Recipient username',
'여러 회원에게 보낼때는 컴마(,)로 구분하세요.' => 'Separate multiple recipients with commas (,).',
'쪽지 보낼때 회원당 {1}점의 포인트를 차감합니다.' => 'Sending a message deducts {1} points per recipient.',
'보내기' => 'Send',

// theme/basic/mobile/skin/member/basic/memo_view.skin.php
'보낸' => 'Sent',
'받은' => 'Received',
'받는' => 'To',
'쪽지 내용' => 'Message',
'{1}시간' => '{1} time',
'이전쪽지' => 'Previous message',
'다음쪽지' => 'Next message',
'답장' => 'Reply',

// theme/basic/mobile/skin/member/basic/password.skin.php
'글 수정' => 'Edit post',
'글 삭제' => 'Delete post',
'댓글 삭제' => 'Delete comment',
'작성자만 글을 수정할 수 있습니다.' => 'Only the author can edit this post.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 수정할 수 있습니다.' => 'If you are the author, enter the password you used when writing the post to edit it.',
'작성자만 글을 삭제할 수 있습니다.' => 'Only the author can delete this post.',
'작성자 본인이라면, 글 작성시 입력한 비밀번호를 입력하여 글을 삭제할 수 있습니다.' => 'If you are the author, enter the password you used when writing the post to delete it.',
'비밀글 기능으로 보호된 글입니다.' => 'This is a secret post.',
'작성자와 관리자만 열람하실 수 있습니다. 본인이라면 비밀번호를 입력하세요.' => 'Only the author and administrators can view it. If you are the author, enter the password.',

// theme/basic/mobile/skin/member/basic/password_lost.skin.php
'이메일로 찾기' => 'Find by email',
'회원가입 시 등록하신 이메일 주소를 입력해 주세요.' => 'Enter the email address you registered with.',
'해당 이메일로 아이디와 비밀번호 정보를 보내드립니다.' => 'We will send your username and password information to that email.',
'E-mail 주소' => 'Email address',
'인증메일 보내기' => 'Send verification email',
'본인인증으로 찾기' => 'Find by identity verification',

// theme/basic/mobile/skin/member/basic/password_reset.skin.php
'새로운 비밀번호를 입력해주세요.' => 'Enter a new password.',
'회원 아이디 :' => 'Username:',
'새 비밀번호' => 'New password',
'새 비밀번호 확인' => 'Confirm new password',
'비밀번호 변경되었습니다. 다시 로그인해 주세요.' => 'Your password has been changed. Please log in again.',
'새 비밀번호와 비밀번호 확인이 일치하지 않습니다.' => 'The new password and confirmation do not match.',

// theme/basic/mobile/skin/member/basic/point.skin.php
'보유포인트' => 'Points balance',
'y-m-d H시' => 'y-m-d H:00',
'만료' => 'Expired',
'소계' => 'Subtotal',

// theme/basic/mobile/skin/member/basic/profile.skin.php
'{1}님의 프로필' => '{1}\'s profile',
'회원권한' => 'Member level',
'포인트' => 'Points',
'회원가입일' => 'Joined',
' ({1} 일)' => ' ({1} days)',
'알 수 없음' => 'Unknown',
'최종접속일' => 'Last visit',
'인사말' => 'Greeting',

// theme/basic/mobile/skin/member/basic/register.skin.php
'회원가입약관 및 개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'You must agree to the terms of service and the collection and use of personal information to sign up.',
'회원가입 약관에 모두 동의합니다' => 'I agree to all terms',
'(필수) 회원가입약관' => '(Required) Terms of service',
'회원가입약관의 내용에 동의합니다.' => 'I agree to the terms of service.',
'(필수) 개인정보 수집 및 이용' => '(Required) Collection and use of personal information',
'개인정보 수집 및 이용' => 'Collection and use of personal information',
'아이디, 이름, 비밀번호' => 'Username, name, password',
', 생년월일, 휴대폰 번호(본인인증 할 때만, 아이핀 제외), 암호화된 개인식별부호(CI)' => ', date of birth, mobile number (only for identity verification, except i-PIN), encrypted personal identifier (CI)',
'고객서비스 이용에 관한 통지,' => 'Notices about customer service,',
'CS대응을 위한 이용자 식별' => 'user identification for customer support',
'연락처 (이메일, 휴대전화번호)' => 'Contact (email, mobile number)',
'개인정보 수집 및 이용의 내용에 동의합니다.' => 'I agree to the collection and use of personal information.',
'회원가입약관의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'You must agree to the terms of service to sign up.',
'개인정보 수집 및 이용의 내용에 동의하셔야 회원가입 하실 수 있습니다.' => 'You must agree to the collection and use of personal information to sign up.',

// theme/basic/mobile/skin/member/basic/register_form.skin.php
'사이트 이용정보 입력' => 'Account information',
'아이디 (필수)' => 'Username (required)',
'영문자, 숫자, _ 만 입력 가능. 최소 3자이상 입력하세요.' => 'Letters, numbers and _ only. At least 3 characters.',
'비밀번호 (필수)' => 'Password (required)',
'비밀번호확인 (필수)' => 'Confirm password (required)',
'개인정보 입력' => 'Personal information',
' - 본인확인 시 자동입력' => ' - filled in automatically on verification',
'(필수)' => '(required)',
'아이핀' => 'i-PIN',
'휴대폰' => 'Mobile',
'{1} 본인확인' => '{1} verification',
'{1} 및 {2} 완료' => '{1} and {2} completed',
'성인인증' => 'adult verification',
'{1} 완료' => '{1} completed',
'이름 (필수)' => 'Name (required)',
'닉네임 (필수)' => 'Nickname (required)',
'공백없이 한글,영문,숫자만 입력 가능 (한글2자, 영문4자 이상)' => 'Korean, English letters and numbers only, no spaces (at least 2 Korean or 4 English characters)',
'닉네임을 바꾸시면 앞으로 {1}일 이내에는 변경 할 수 없습니다.' => 'If you change your nickname, you cannot change it again for {1} days.',
'E-mail (필수)' => 'Email (required)',
'E-mail 로 발송된 내용을 확인한 후 인증하셔야 회원가입이 완료됩니다.' => 'Sign-up is complete after you verify the email we send you.',
'E-mail 주소를 변경하시면 다시 인증하셔야 합니다.' => 'If you change your email address, you must verify it again.',
'전화번호' => 'Phone number',
'휴대폰번호' => 'Mobile number',
'주소' => 'Address',
'우편번호' => 'Postal code',
' (필수)' => ' (required)',
'주소검색' => 'Find address',
'상세주소' => 'Address details',
'참고항목' => 'Reference',
'기타 개인설정' => 'Other settings',
'서명' => 'Signature',
'자기소개' => 'About me',
'회원아이콘' => 'Member icon',
'이미지선택' => 'Choose image',
'이미지 크기는 가로 {1}픽셀, 세로 {2}픽셀 이하로 해주세요.' => 'Image must be {1}px wide and {2}px high or smaller.',
'gif, jpg, png파일만 가능하며 용량 {1}바이트 이하만 등록됩니다.' => 'Only gif, jpg and png files up to {1} bytes.',
'회원이미지' => 'Member image',
'정보공개' => 'Public profile',
'다른분들이 나의 정보를 볼 수 있도록 합니다.' => 'Allow others to see my information.',
'정보공개를 바꾸시면 앞으로 {1}일 이내에는 변경이 안됩니다.' => 'If you change this, you cannot change it again for {1} days.',
'정보공개는 수정후 {1}일 이내, {2} 까지는 변경이 안됩니다.' => 'This setting cannot be changed for {1} days after a change (until {2}).',
'Y년 m월 j일' => 'M j, Y',
'이렇게 하는 이유는 잦은 정보공개 수정으로 인하여 쪽지를 보낸 후 받지 않는 경우를 막기 위해서 입니다.' => 'This prevents members from sending messages and then hiding their profile to avoid replies.',
'추천인아이디' => 'Referrer username',
'수신설정' => 'Notification settings',
'(선택) 마케팅 목적의 개인정보 수집 및 이용' => '(Optional) Collection and use of personal information for marketing',
'자세히보기' => 'Details',
'마케팅 목적의 개인정보 수집·이용에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'This is about collecting and using personal information for marketing. Click Details to read the full text.',
'(동의일자: {1})' => '(Agreed on: {1})',
'* 목적: 서비스 마케팅 및 프로모션' => '* Purpose: service marketing and promotions',
'* 항목: 이름, 이메일' => '* Items: name, email',
', 휴대폰 번호' => ', mobile number',
'* 보유기간: 회원 탈퇴 시까지' => '* Retention: until membership is cancelled',
'동의를 거부하셔도 서비스 기본 이용은 가능하나, 맞춤형 혜택 제공은 제한될 수 있습니다.' => 'You can still use the basic service if you decline, but personalized benefits may be limited.',
'(선택) 광고성 정보 수신 동의' => '(Optional) Consent to receive advertising',
'광고성 정보(이메일/SMS·카카오톡) 수신 동의의 상위 항목입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'This covers consent to receive advertising (email/SMS/KakaoTalk). Click Details to read the full text.',
'광고성 이메일 수신 동의' => 'Receive advertising emails',
'광고성 SMS/카카오톡 수신 동의' => 'Receive advertising SMS/KakaoTalk',
'수집·이용에 동의한 개인정보를 이용하여 이메일/SMS/카카오톡 등으로 오전 8시~오후 9시에 광고성 정보를 전송할 수 있습니다.' => 'We may send advertising by email/SMS/KakaoTalk between 8 AM and 9 PM using the personal information you agreed to provide.',
'동의는 언제든지 마이페이지에서 철회할 수 있습니다.' => 'You can withdraw your consent at any time on My Page.',
'아이코드' => 'icode',
'(선택) 개인정보 제3자 제공 동의' => '(Optional) Consent to provide personal information to third parties',
'개인정보 제3자 제공 동의에 대한 안내입니다. 자세히보기를 눌러 전문을 확인할 수 있습니다.' => 'This is about providing personal information to third parties. Click Details to read the full text.',
'* 목적: 상품/서비스, 사은/판촉행사, 이벤트 등의 마케팅 안내(카카오톡 등)' => '* Purpose: marketing notices about products/services, promotions and events (KakaoTalk, etc.)',
'* 항목: 이름, 휴대폰 번호' => '* Items: name, mobile number',
'* 제공받는 자:' => '* Recipient:',
'* 보유기간: 제공 목적 서비스 기간 또는 동의 철회 시까지' => '* Retention: for the duration of the service or until consent is withdrawn',
'이미 {1}으로 본인확인을 완료하셨습니다.

이전 인증을 취소하고 다시 인증하시겠습니까?' => 'You have already verified your identity with {1}.

Cancel the previous verification and verify again?',
'비밀번호를 3글자 이상 입력하십시오.' => 'Password must be at least 3 characters.',
'비밀번호가 같지 않습니다.' => 'Passwords do not match.',
'이름을 입력하십시오.' => 'Please enter your name.',
'회원가입을 위해서는 본인확인을 해주셔야 합니다.' => 'Identity verification is required to sign up.',
'회원아이콘이 이미지 파일이 아닙니다.' => 'The member icon is not an image file.',
'회원이미지가 이미지 파일이 아닙니다.' => 'The member image is not an image file.',
'본인을 추천할 수 없습니다.' => 'You cannot refer yourself.',

// theme/basic/mobile/skin/member/basic/register_result.skin.php
'{1}되었습니다.' => '{1}.',
'회원가입이 완료' => 'Sign-up complete',
'{1}님의 회원가입을 진심으로 축하합니다.' => 'Congratulations on joining, {1}.',
'회원 가입 시 입력하신 이메일 주소로 인증메일이 발송되었습니다.' => 'A verification email has been sent to the address you entered.',
'발송된 인증메일을 확인하신 후 인증처리를 하시면 사이트를 원활하게 이용하실 수 있습니다.' => 'Please check the email and complete verification to use the site.',
'이메일 주소' => 'Email address',
'이메일 주소를 잘못 입력하셨다면, 사이트 관리자에게 문의해주시기 바랍니다.' => 'If you entered the wrong email address, please contact the site administrator.',
'회원님의 비밀번호는 아무도 알 수 없는 암호화 코드로 저장되므로 안심하셔도 좋습니다.' => 'Your password is stored encrypted, so no one can read it.',
'아이디, 비밀번호 분실시에는 회원가입시 입력하신 이메일 주소를 이용하여 찾을 수 있습니다.' => 'If you forget your username or password, you can recover them with the email address you registered.',
'회원 탈퇴는 언제든지 가능하며 일정기간이 지난 후, 회원님의 정보는 삭제하고 있습니다.' => 'You can cancel your membership at any time; your information is deleted after a set period.',
'감사합니다.' => 'Thank you.',
'메인으로' => 'Go to home',

// theme/basic/mobile/skin/member/basic/scrap_popin.skin.php
'스크랩하기' => 'Scrap',
'제목 확인 및 댓글 쓰기' => 'Check subject and write a comment',
'스크랩을 하시면서 감사 혹은 격려의 댓글을 남기실 수 있습니다.' => 'You can leave a comment of thanks or encouragement while scrapping.',
'스크랩 확인' => 'Confirm scrap',

// theme/basic/mobile/skin/new/basic/new.skin.php
'상세검색' => 'Advanced search',
'전체게시물' => 'All posts',
'원글만' => 'Posts only',
'코멘트만' => 'Comments only',
'회원 아이디만 검색 가능' => 'Search by username only',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.1.php
'회원로그인' => 'Member login',

// theme/basic/mobile/skin/outlogin/basic/outlogin.skin.2.php
'나의 회원정보' => 'My account',
'{1}님' => '{1}',
'안 읽은' => 'Unread',
'쪽지' => 'Messages',
'정말 회원에서 탈퇴 하시겠습니까?' => 'Are you sure you want to cancel your membership?',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.1.php
'카테고리닫기' => 'Close categories',

// theme/basic/mobile/skin/outlogin/shop_basic/outlogin.skin.2.php
'쿠폰' => 'Coupons',

// theme/basic/mobile/skin/poll/basic/poll.skin.php
'설문조사' => 'Poll',
'결과보기' => 'View results',
'관리자 관리' => 'Admin',
'투표하기' => 'Vote',
'권한 {1} 이상의 회원만 투표에 참여하실 수 있습니다.' => 'Only members of level {1} or higher can vote.',
'투표하실 설문항목을 선택하세요' => 'Select an option to vote for',
'권한 {1} 이상의 회원만 결과를 보실 수 있습니다.' => 'Only members of level {1} or higher can view the results.',

// theme/basic/mobile/skin/poll/basic/poll_result.skin.php
'전체 {1}표' => 'Total {1} votes',
'결과' => 'Results',
'{1} 표' => '{1} votes',
'이 설문에 대한 기타의견' => 'Other opinions on this poll',
'님의 의견' => '\'s opinion',
'기타의견' => 'Other opinions',
'의견' => 'Opinion',
'의견을 입력해주세요' => 'Enter your opinion',
'의견남기기' => 'Leave an opinion',
'다른 투표 결과 보기' => 'Other poll results',
'해당 기타의견을 삭제하시겠습니까?' => 'Delete this opinion?',

// theme/basic/mobile/skin/popular/basic/popular.skin.php
'인기검색어' => 'Popular searches',

// theme/basic/mobile/skin/qa/basic/list.skin.php
'문의등록' => 'New inquiry',
'답변완료' => 'Answered',
'답변대기' => 'Waiting',
'선택한 게시물을 정말 삭제하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Are you sure you want to delete the selected posts?

Deleted data cannot be recovered.',

// theme/basic/mobile/skin/qa/basic/view.answer.skin.php
'답변수정' => 'Edit answer',
'답변삭제' => 'Delete answer',
'추가질문' => 'Follow-up question',

// theme/basic/mobile/skin/qa/basic/view.answerform.skin.php
'답변등록' => 'Post answer',
'파일 #1' => 'File #1',
'파일첨부 1 :  용량 {1} 이하만 업로드 가능' => 'Attachment 1: up to {1}',
'파일 #2' => 'File #2',
'파일첨부 2 :  용량 {1} 이하만 업로드 가능' => 'Attachment 2: up to {1}',
'답변쓰기' => 'Write answer',
'고객님의 문의에 대한 답변을 준비 중입니다.' => 'We are preparing an answer to your inquiry.',

// theme/basic/mobile/skin/qa/basic/view.skin.php
'연락처정보' => 'Contact information',
'첨부' => 'Attachment',
'연관질문' => 'Related questions',

// theme/basic/mobile/skin/qa/basic/write.skin.php
'답변받기' => 'Receive answer',
'답변등록 SMS알림 수신' => 'Receive an SMS when answered',
'휴대폰번호는 숫자, - 으로만 입력해 주십시오.' => 'Enter the mobile number using only digits and -.',

// theme/basic/mobile/skin/search/basic/search.skin.php
'전체검색 결과' => 'Search results',
'게시판' => 'Boards',
'{1}개' => '{1}',
'게시물' => 'Posts',
'페이지 열람 중' => 'pages',
'검색조건' => 'Search options',
'제목+내용' => 'Subject+Content',
'전체게시판' => 'All boards',
'검색된 자료가 하나도 없습니다.' => 'No results found.',
'게시판 내 결과' => 'Results in board',
'{1} 결과 더보기' => 'More results in {1}',

// theme/basic/mobile/skin/visit/basic/visit.skin.php
'접속자집계' => 'Visitor stats',
'오늘' => 'Today',
'어제' => 'Yesterday',
'최대' => 'Max',
'visit|전체' => 'Total',
'상세보기' => 'Details',

// theme/basic/mobile/tail.php
'회사소개' => 'About us',
'개인정보처리방침' => 'Privacy policy',
'서비스이용약관' => 'Terms of service',
'소유하신 도메인.' => 'Your domain.',
'사이트 정보' => 'Site information',
'회사명 : 회사명 / 대표 : 대표자명' => 'Company: Company name / CEO: CEO name',
'주소  : OO도 OO시 OO구 OO동 123-45' => 'Address: 123-45, OO-dong, OO-gu, OO-si, OO-do',
'사업자 등록번호  : 123-45-67890' => 'Business registration no.: 123-45-67890',
'전화 :  02-123-4567  팩스  : 02-123-4568' => 'Tel: 02-123-4567  Fax: 02-123-4568',
'통신판매업신고번호 :  제 OO구 - 123호' => 'Mail-order business no.: OO-gu 123',
'개인정보관리책임자 :  정보책임자명' => 'Privacy officer: Officer name',
'상단으로' => 'Back to top',
'PC 버전으로 보기' => 'PC version',

// theme/basic/skin/board/basic/list.skin.php
'Total {1}건' => 'Total {1}',
'게시판 검색' => 'Search board',
'현재 페이지 게시물  전체선택' => 'Select all posts on this page',
'번호' => 'No.',
'글쓴이' => 'Author',
'날짜' => 'Date',

// theme/basic/skin/board/basic/view.skin.php
'{1}건' => '{1}',
'{1}회' => '{1}',
'{1}회 다운로드 | DATE : {2}' => '{1} downloads | DATE: {2}',

// theme/basic/skin/board/basic/view_comment.skin.php
'{1}님의' => '{1}\'s',
'댓글의' => 'reply',

// theme/basic/skin/board/basic/write.skin.php
'분류를 선택하세요' => 'Select a category',
'임시 저장된 글 ({1})' => 'Drafts ({1})',
'임시 저장된 글 목록' => 'Draft list',
'링크  #{1}' => 'Link #{1}',

// theme/basic/skin/faq/basic/list.skin.php
'FAQ 검색' => 'Search FAQ',
'FAQ 수정' => 'Edit FAQ',

// theme/basic/skin/latest/basic/latest.skin.php
'인기글' => 'Popular posts',

// theme/basic/skin/latest/pic_basic/latest.skin.php
'이미지가 없습니다.' => 'No images.',

// theme/basic/skin/member/basic/login.skin.php
'회원' => 'Member',
'ID/PW 찾기' => 'Find ID/PW',
'주문서번호' => 'Order number',

// theme/basic/skin/member/basic/password.skin.php
'작성자와 관리자만 열람하실 수 있습니다.' => 'Only the author and administrators can view it.',
'본인이라면 비밀번호를 입력하세요.' => 'If you are the author, enter the password.',

// theme/basic/skin/member/basic/register_form.skin.php
'설명보기' => 'Help',
'비밀번호 확인 (필수)' => 'Confirm password (required)',
'비밀번호 확인' => 'Confirm password',
'본인확인 시 자동입력' => 'Filled in automatically on verification',
'닉네임' => 'Nickname',
'주소 검색' => 'Find address',
'기본주소' => 'Address',
' (동의일자: {1})' => ' (Agreed on: {1})',

// theme/basic/skin/member/basic/scrap_popin.skin.php
'댓글작성' => 'Write comment',

// theme/basic/skin/new/basic/new.skin.php
'목록 전체' => 'All',
'그룹' => 'Group',
'일시' => 'Date',
'{1}번' => 'No. {1}',
'선택한 게시물을 정말 {1} 하시겠습니까?

한번 삭제한 자료는 복구할 수 없습니다' => 'Are you sure you want to proceed with the selected posts?

Deleted data cannot be recovered.',

// theme/basic/skin/outlogin/shop_basic/outlogin.skin.2.php
'회원정보' => 'Account',
'마이페이지' => 'My Page',

// theme/basic/skin/poll/basic/poll.skin.php
'설문관리' => 'Manage poll',

// theme/basic/skin/poll/shop_basic/poll_result.skin.php
'현재 가장 높은 득표율' => 'Currently leading',
'500 표' => '500 votes',

// theme/basic/skin/qa/basic/list.skin.php
'등록일' => 'Date',
'상태' => 'Status',

// theme/basic/skin/qa/basic/view.answer.skin.php
'답변 옵션' => 'Answer options',

// theme/basic/skin/qa/basic/view.skin.php
'게시판 읽기 옵션' => 'Post options',

// theme/basic/skin/qa/basic/write.skin.php
'1:1문의 작성' => 'Write 1:1 inquiry',

// theme/basic/skin/search/basic/search.skin.php
'{1} 전체검색 결과' => 'Search results for {1}',
'게시판 {1}개' => '{1} boards',
'게시물 {1}개' => '{1} posts',
'새창' => 'New window',

// theme/basic/tail.php
'모바일버전' => 'Mobile version',
);
