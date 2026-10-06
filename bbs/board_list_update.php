<?php
include_once('./_common.php');

if (function_exists('check_request_origin')) check_request_origin(G5_BBS_URL);

$count = (isset($_POST['chk_wr_id']) && is_array($_POST['chk_wr_id'])) ? count($_POST['chk_wr_id']) : 0;
$post_btn_submit = isset($_POST['btn_submit']) ? clean_xss_tags($_POST['btn_submit'], 1, 1) : '';

if(!$count) {
    alert(__('{1} 하실 항목을 하나 이상 선택하세요.', in_array($post_btn_submit, array('선택삭제', '선택복사', '선택이동'), true) ? __($post_btn_submit) : $post_btn_submit));
}

if($post_btn_submit === '선택삭제') {
    include './delete_all.php';
} else if($post_btn_submit === '선택복사') {
    $sw = 'copy';
    include './move.php';
} else if($post_btn_submit === '선택이동') {
    $sw = 'move';
    include './move.php';
} else {
    alert(__('올바른 방법으로 이용해 주세요.'));
}
