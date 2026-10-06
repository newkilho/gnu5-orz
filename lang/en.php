<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 사전 (en). 틀은 php lang/build.php en 로 만든다. 값이 ''이면 원문을 쓴다.
return array(

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

// bbs/login_check.php
'로그인 검사' => 'Login check',
'회원아이디나 비밀번호가 공백이면 안됩니다.' => 'Username and password cannot be empty.',
'가입된 회원아이디가 아니거나 비밀번호가 틀립니다.\\n비밀번호는 대소문자를 구분합니다.' => 'The username is not registered or the password is incorrect.\\nPasswords are case-sensitive.',
'\\1년 \\2월 \\3일' => '\\1-\\2-\\3',
'회원님의 아이디는 접근이 금지되어 있습니다.\\n처리일 : {1}' => 'Your account has been blocked.\\nDate: {1}',
'탈퇴한 아이디이므로 접근하실 수 없습니다.\\n탈퇴일 : {1}' => 'This account has been cancelled and cannot be used.\\nCancelled on: {1}',
'{1} 메일로 메일인증을 받으셔야 로그인 가능합니다. 다른 메일주소로 변경하여 인증하시려면 취소를 클릭하시기 바랍니다.' => 'You must verify your email at {1} before logging in. To verify with a different email address, click Cancel.',
'data 폴더에 쓰기권한이 없거나 또는 웹하드 용량이 없는 경우\\n로그인을 못할수도 있으니, 용량 체크 및 쓰기 권한을 확인해 주세요.' => 'If the data folder is not writable or the disk is full,\\nlogin may fail. Please check disk space and write permissions.',
);
