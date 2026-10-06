<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가

global $is_admin;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$visit_skin_url.'/style.css">', 0);
?>

<aside id="visit">
    <h2><?php echo __('접속자집계') ?></h2>
    <dl>
        <dt><?php echo __('오늘') ?></dt>
        <dd><?php echo number_format($visit[1]) ?></dd>
        <dt><?php echo __('어제') ?></dt>
        <dd><?php echo number_format($visit[2]) ?></dd>
        <dt><?php echo __('최대') ?></dt>
        <dd><?php echo number_format($visit[3]) ?></dd>
        <dt><?php echo __('전체', 'visit') ?></dt>
        <dd><?php echo number_format($visit[4]) ?></dd>
    </dl>
    <?php if ($is_admin == "super") { ?><a href="<?php echo G5_ADMIN_URL ?>/visit_list.php" class="btn_admin btn"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only"><?php echo __('상세보기') ?></span></a></a><?php } ?>
</aside>
