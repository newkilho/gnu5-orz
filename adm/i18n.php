<?php
// 다국어 문구 (gnu5-orz) — 저장은 i18n_update.php
// 사전(lang/, 테마 lang/)에 없는 문구만 data/lang/<언어>.php에 추가·수정·삭제한다.
$sub_menu = '100960';
require_once './_common.php';

auth_check_menu($auth, $sub_menu, 'r');
if ($is_admin != 'super')
    alert('최고관리자만 접근 가능합니다.');

$langs = kh_langs();
unset($langs['ko']);
$lang = (isset($_GET['lang']) && isset($langs[$_GET['lang']])) ? $_GET['lang'] : 'en';

$base  = kh_dict_file(G5_THEME_PATH, $lang) + kh_dict_file(G5_PATH, $lang);   // git 사전 (lang/, 테마 lang/) — 보여 주지 않는다
$saved = kh_dict_file(G5_DATA_PATH, $lang);                                    // 여기서 추가·수정한 것

// 사전에 없는 문구만: 여기서 추가한 것 + DB 문구(사이트 이름, 게시판·그룹·메뉴·내용 제목)
$keys = $saved;
foreach (array(
    "select cf_title as s from {$g5['config_table']}",
    "select bo_subject as s from {$g5['board_table']} union select bo_mobile_subject from {$g5['board_table']}",
    "select gr_subject as s from {$g5['group_table']}",
    "select me_name as s from {$g5['menu_table']}",
    "select co_subject as s from {$g5['content_table']}",
) as $sql) {
    $result = sql_query($sql, false);
    while ($result && $row = sql_fetch_array($result))
        $keys[$row['s']] = true;
}
unset($keys['']);
$keys = array_keys(array_diff_key($keys, $base));

$g5['title'] = '다국어 문구';
require_once './admin.head.php';
?>
<style>
.kh_i18n textarea {width:100%;box-sizing:border-box;height:auto;resize:vertical}
.kh_i18n textarea[readonly] {background:#f7f7f7;border:0}
.kh_i18n tr.hide {display:none}
#kh_i18n_tools {display:flex;gap:10px;align-items:center;margin:10px 0}
</style>

<div class="local_desc01 local_desc">
    <p>저장소 사전(<code>lang/</code>, 테마 <code>lang/</code>)에 없는 문구만 여기서 추가·수정·삭제합니다. 저장은 <code>data/lang/<?php echo $lang; ?>.php</code>.<br>
    사이트 이름, 게시판·그룹·메뉴·내용 제목은 자동으로 목록에 나옵니다. 번역을 비우면 저장하지 않습니다. 값 자리 <code>{1}</code>, HTML 태그는 그대로 두세요.</p>
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

<div class="tbl_head01 tbl_wrap">
    <table class="kh_i18n">
    <caption>다국어 문구</caption>
    <colgroup><col style="width:40%"><col><col style="width:60px"></colgroup>
    <thead><tr><th scope="col">한국어</th><th scope="col"><?php echo $langs[$lang]; ?></th><th scope="col">삭제</th></tr></thead>
    <tbody>
    <?php foreach ($keys as $key) {
        $val = isset($saved[$key]) ? $saved[$key] : '';
    ?>
    <tr>
        <td><textarea class="frm_input" rows="1" readonly><?php echo htmlspecialchars($key, ENT_QUOTES, 'UTF-8'); ?></textarea></td>
        <td><textarea class="frm_input" rows="<?php echo substr_count($val, "\n") + 1; ?>"><?php echo htmlspecialchars($val, ENT_QUOTES, 'UTF-8'); ?></textarea></td>
        <td class="td_mng"><button type="button" class="btn btn_02" onclick="kh_i18n_del(this)">삭제</button></td>
    </tr>
    <?php } ?>
    </tbody>
    </table>
</div>
<button type="button" class="btn btn_03" onclick="kh_i18n_add()">문구 추가</button>

<div class="btn_fixed_top">
    <input type="submit" value="확인" class="btn_submit btn" accesskey="s">
</div>
</form>

<script>
// 입력칸이 많으면 max_input_vars를 넘으므로 JSON 하나로 묶어 보낸다
function kh_i18n_submit(f) {
    var out = [];
    document.querySelectorAll('.kh_i18n tbody tr').forEach(function (r) {
        var t = r.querySelectorAll('textarea');
        out.push([t[0].value, t[1].value]);
    });
    f.dict_json.value = JSON.stringify(out);
    return true;
}
function kh_i18n_add() {
    var r = document.querySelector('.kh_i18n tbody').insertRow(-1);
    r.innerHTML = '<td><textarea class="frm_input" rows="1" placeholder="한국어 원문"></textarea></td>'
        + '<td><textarea class="frm_input" rows="1"></textarea></td>'
        + '<td class="td_mng"><button type="button" class="btn btn_02" onclick="kh_i18n_del(this)">삭제</button></td>';
    r.querySelector('textarea').focus();
}
function kh_i18n_del(b) {
    b.closest('tr').remove();
}
function kh_i18n_filter() {
    var q = document.getElementById('kh_i18n_q').value.trim().toLowerCase(),
        empty = document.getElementById('kh_i18n_empty').checked;
    document.querySelectorAll('.kh_i18n tbody tr').forEach(function (r) {
        var t = r.querySelectorAll('textarea'),
            hit = (t[0].value + ' ' + t[1].value).toLowerCase().indexOf(q) >= 0;
        r.classList.toggle('hide', (q !== '' && !hit) || (empty && t[1].value.trim() !== ''));
    });
}
</script>

<?php
require_once './admin.tail.php';
