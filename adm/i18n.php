<?php
// 다국어 문구 (gnu5-orz) — 저장은 i18n_update.php
// 고친 번역만 data/lang/<언어>.php에 둔다. git 사전(lang/, 테마 lang/)보다 우선한다.
$sub_menu = '100960';
require_once './_common.php';

auth_check_menu($auth, $sub_menu, 'r');
if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$langs = kh_langs();
unset($langs['ko']);
$lang = (isset($_GET['lang']) && isset($langs[$_GET['lang']])) ? $_GET['lang'] : 'en';

$base  = kh_dict_file(G5_THEME_PATH, $lang) + kh_dict_file(G5_PATH, $lang);   // git 사전 (테마 우선)
$saved = kh_dict_file(G5_DATA_PATH, $lang);                                    // 관리자에서 고친 것

// DB 문구: 사이트 이름, 게시판·그룹·메뉴·내용 제목
$db_keys = array($config['cf_title'] => true);
foreach (array(
    "select bo_subject as s from {$g5['board_table']} union select bo_mobile_subject from {$g5['board_table']}",
    "select gr_subject as s from {$g5['group_table']}",
    "select me_name as s from {$g5['menu_table']}",
    "select co_subject as s from {$g5['content_table']}",
) as $sql) {
    $result = sql_query($sql, false);
    while ($result && $row = sql_fetch_array($result))
        $db_keys[$row['s']] = true;
}
unset($db_keys['']);

$sections = array(
    'DB 문구 (사이트 이름, 게시판·그룹·메뉴·내용 제목)' => array_keys($db_keys),
    '화면 문구' => array_keys(array_diff_key($base, $db_keys)),
);

$g5['title'] = '다국어 문구';
require_once './admin.head.php';
?>
<style>
.kh_i18n td.ko {white-space:pre-wrap;word-break:keep-all;text-align:left}
.kh_i18n textarea {width:100%;box-sizing:border-box;height:auto;resize:vertical}
.kh_i18n tr.saved textarea {background:#fff8e1}
.kh_i18n tr.hide {display:none}
#kh_i18n_tools {display:flex;gap:10px;align-items:center;margin:10px 0}
</style>

<div class="local_desc01 local_desc">
    <p>고친 번역은 <code>data/lang/<?php echo $lang; ?>.php</code>에 저장되고, 저장소의 사전보다 우선합니다. 노란 칸이 고친 번역입니다.<br>
    칸을 비우면 저장소 사전의 번역으로 돌아갑니다. 줄바꿈 표시 <code>\n</code>, 값 자리 <code>{1}</code>, HTML 태그는 그대로 두세요.</p>
</div>

<form name="fi18n" method="post" action="./i18n_update.php" onsubmit="return kh_i18n_submit(this);">
<input type="hidden" name="token" value="<?php echo get_admin_token(); ?>">
<input type="hidden" name="lang" value="<?php echo $lang; ?>">
<input type="hidden" name="dict_json" value="">

<div id="kh_i18n_tools">
    <select onchange="location.href='./i18n.php?lang='+this.value">
        <?php foreach ($langs as $code => $name) { ?>
        <option value="<?php echo $code; ?>"<?php echo get_selected($lang, $code); ?>><?php echo $name; ?> (<?php echo $code; ?>)</option>
        <?php } ?>
    </select>
    <input type="text" id="kh_i18n_q" class="frm_input" size="40" placeholder="찾기" oninput="kh_i18n_filter()">
    <label><input type="checkbox" id="kh_i18n_empty" onclick="kh_i18n_filter()"> 번역 없음만</label>
    <a href="<?php echo G5_URL; ?>/<?php echo $lang; ?>/" target="_blank" rel="noopener">화면 보기</a>
</div>

<?php foreach ($sections as $title => $keys) { ?>
<section>
    <h2 class="h2_frm"><?php echo $title; ?> (<?php echo count($keys); ?>)</h2>
    <div class="tbl_head01 tbl_wrap">
        <table class="kh_i18n">
        <caption><?php echo $title; ?></caption>
        <colgroup><col style="width:40%"><col></colgroup>
        <thead><tr><th scope="col">한국어</th><th scope="col"><?php echo $langs[$lang]; ?></th></tr></thead>
        <tbody>
        <?php foreach ($keys as $key) {
            $is_saved = isset($saved[$key]) && $saved[$key] !== '';
            $val = $is_saved ? $saved[$key] : (isset($base[$key]) ? $base[$key] : '');
        ?>
        <tr<?php echo $is_saved ? ' class="saved"' : ''; ?>>
            <td class="ko"><?php echo get_text($key); ?></td>
            <td><textarea class="frm_input" rows="<?php echo substr_count($val, "\n") + 1; ?>" data-key="<?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?>"><?php echo htmlspecialchars($val, ENT_QUOTES, 'UTF-8'); ?></textarea></td>
        </tr>
        <?php } ?>
        </tbody>
        </table>
    </div>
</section>
<?php } ?>

<div class="btn_fixed_top">
    <input type="submit" value="확인" class="btn_submit btn" accesskey="s">
</div>
</form>

<script>
// 입력칸이 천 개가 넘어 max_input_vars를 넘으므로 JSON 하나로 묶어 보낸다
function kh_i18n_submit(f) {
    var out = [];
    document.querySelectorAll('.kh_i18n textarea').forEach(function (t) {
        out.push([t.getAttribute('data-key'), t.value]);
    });
    f.dict_json.value = JSON.stringify(out);
    return true;
}
function kh_i18n_filter() {
    var q = document.getElementById('kh_i18n_q').value.trim().toLowerCase(),
        empty = document.getElementById('kh_i18n_empty').checked;
    document.querySelectorAll('.kh_i18n tbody tr').forEach(function (r) {
        var t = r.querySelector('textarea'),
            hit = (r.textContent + ' ' + t.value).toLowerCase().indexOf(q) >= 0;
        r.classList.toggle('hide', (q !== '' && !hit) || (empty && t.value.trim() !== ''));
    });
}
</script>

<?php
require_once './admin.tail.php';
