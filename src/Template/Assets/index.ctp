<script>
    function submitform(vars) {
        var zone_id = vars.getAttribute('value');
        document.getElementById("zone_id").setAttribute('value', zone_id);
        document.forms["frm"].submit();
    }
</script>

<section class="g-bg-gray-light-v5 g-py-10 g-mb-20">
    <div class="container g-bg-cover__inner">
        <ul class="u-list-inline font-mitr400 " style="font-size: 18px !important;">
            <li class="list-inline-item g-mr-7">
                <?= $this->Html->link('หน้าหลัก', HOME_URL, ['class' => 'u-link-v5 g-color-main']); ?>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-color-primary">
                <span>เลือกโซน</span>
            </li>
        </ul>
    </div>
</section>

<div class="row">
    <div class="col-md-12 col-lg-12 col-12">
        <?= $this->Html->image('banner_zone.png', ['alt' => '', 'class' => 'img-fluid']) ?>
    </div>
</div>

<div class="row">
    
    <div class="col-md-12 padding-bottom-74">
        <h3 class="font-mitr400">เลือกประเภทสินทรัพย์</h3>
        <?= $this->Form->create('', ['class' => 'form-inline', 'name' => 'frm', 'id' => 'frm']) ?>
        <div class="col-md-12 col-lg-12 col-12 padding-bottom-20">
            <div class="form-group">
                <?= $this->Form->input('asset_type_id', ['options' => $assetTypes, 'empty' => 'ทั้งหมด', 'class' => 'form-control', 'label' => false, 'default' => $assetTypeId]); ?>
            </div>
        </div>
        <h3 class="font-mitr400 g-mt-20">เลือกโซนที่ต้องการ</h3>
        <div class="col-md-12 col-lg-12 col-12">
            <?= $this->Form->hidden('zone_id', ['value' => '', 'id' => 'zone_id']) ?>
            <?php foreach ($zones as $a): ?>
                <div class="col-md-12 col-12 col-lg-12 padding-bottom-20">
                    <?= $this->Html->link('<strong class="f-color-red">' . h($a->name) . '</strong>  ', '#', ['value' => $a->id, 'escape' => false, 'onclick' => 'submitform(this);']) ?>
                    <?= $this->Html->link(h($a->description), '#', ['value' => $a->id, 'escape' => false, 'onclick' => 'submitform(this);','class'=>'col-md-12']) ?>
                </div>
            <?php endforeach; ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
    
</div>