<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 언어 선택 (gnu5-orz). 목록은 kh_langs(), 주소는 kh_lang_url() — extend/kh_i18n.extend.php
?>
<div class="kh_lang">
    <label for="kh_lang_select" class="sound_only"><?php echo __('언어') ?></label>
    <select id="kh_lang_select" onchange="location.href=this.value">
        <?php foreach (kh_langs() as $kh_code => $kh_name) { ?>
        <option value="<?php echo get_text(kh_lang_url($kh_code)) ?>" lang="<?php echo $kh_code ?>"<?php echo $kh_code === KH_LANG ? ' selected' : '' ?>><?php echo $kh_name ?></option>
        <?php } ?>
    </select>
</div>
