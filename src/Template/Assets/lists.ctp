<script type="text/javascript">
$(document).ready(function() {
    $("#order_type,#order_by").on("change", function() {
        var current_url = document.URL;
        var params = current_url.split('&order');
        sort(params[0]);
    });
});

function sort(current_url) {
    var order_type = document.getElementById("order_type").value;
    var order_by = document.getElementById("order_by").value;
    current_url = current_url + "&order=" + order_type + "&by=" + order_by;
    window.location.href = current_url;
}

</script>
<section class="g-bg-gray-light-v5 g-py-10 g-mb-20">
    <div class="container g-bg-cover__inner">
        <ul class="u-list-inline font-mitr400 " style="font-size: 18px !important;">
            <li class="list-inline-item g-mr-7">
                <?= $this->Html->link('หน้าหลัก', HOME_URL, ['class'=>'u-link-v5 g-color-main']); ?>
                    <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-mr-7">
                <?= $this->Html->link('เลือกโซน', '/assets/', ['class'=>'u-link-v5 g-color-main']); ?>
                    <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-color-primary">
                <span>รายการทรัพย์สิน</span>
            </li>
        </ul>
    </div>
</section>
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <?= $this->Html->image('banner_select_asset.png', ['alt' => '', 'class' => 'img-fluid']) ?>
    </div>
</div>
<header class="section-title">
    <h2 class="font-mitr400">รายการทรัพย์สิน<?php echo is_null($page_title) ? '' : ' : ' . $page_title ?></h2>
</header>
<div class="row">
    <div class="col-md-12">
        <?= $this->Form->create('', ['url' => ['controller' => 'assets', 'action' => 'lists'], 'class' => 'form-inline']) ?>
            <div class="form-group">
                <label for="">เรียงโดย </label>
                <select class="form-control" name="order_type" id="order_type">
                    <option value="P" <?php echo $order_type=='P' ? 'selected="selected"' : '' ?> >ราคา</option>
                    <option value="D" <?php echo $order_type=='D' ? 'selected="selected"' : '' ?> >วันที่ประกาศ</option>
                </select>
            </div>
            <div class="form-group">
                <label for="">จัดลำดับโดย </label>
                <select class="form-control" name="order_by" id="order_by">
                    <option value="DESC" <?php echo $order_by=='DESC' ? 'selected="selected"' : '' ?> >เรียงจากมากไปน้อย</option>
                    <option value="ASC" <?php echo $order_by=='ASC' ? 'selected="selected"' : '' ?> >เรียงจากน้อยไปมาก</option>
                </select>
            </div>
            <?= $this->Form->end() ?>
    </div>
</div>


<?= $this->element('asset_list'); ?>

<div class="row property-list-area">
    <?php if (sizeof($assets) == 0) { ?>
    <div class="col-md-12 text-center">
        <h3 class="f-color-gray font-mitr400">-ขออภัยค่ะ ไม่พบรายการ กรุณาลองใหม่อีกครั้ง -</h3>
    </div>
    <?php } ?>
</div>
<div class="row">
    <div class="col-md-12 g-pt-11">
        <?= $this->element('pagination'); ?>
    </div>
</div>
