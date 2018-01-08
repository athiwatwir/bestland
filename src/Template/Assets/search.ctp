<script>
    var amphurArr = <?= $amphurs ?>;
    function amphurs_filter(province_id) {
        var amphurOption = document.getElementById("amphur_id");
        amphurOption.innerHTML = "";

        amphurOption = document.getElementById("amphur_id");
        var option = document.createElement("option");
        option.value = '';
        option.text = 'เขต/อำเภอ';
        amphurOption.appendChild(option);

        for (var i = 0; i < amphurArr.length; i++) {
            if (amphurArr[i].province_id === province_id) {
                var option = document.createElement("option");
                option.value = amphurArr[i].id;
                option.text = amphurArr[i].amphur_name;
                amphurOption.appendChild(option);
            }
        }
    }

    function reset_combo(amphur_id) {
        var province_id = document.getElementById('province_id').value;
        if (province_id !== null && province_id !== '') {
            amphurs_filter(province_id);
        }
        if (amphur_id !== '') {
            document.getElementById('amphur_id').value = amphur_id;
        }
    }
</script>
<header class="section-title">
    <h2 class="font-mitr400">ค้นหาสินทรัพย์</h2>
</header>

<div class="row">
    <div class="col-md-12">
        <article class="u-shadow-v11 rounded g-pa-30">
            <?= $this->Form->create('', ['url' => ['controller' => 'assets', 'action' => 'formsearch'], 'class' => 'form-horizontal m-t-sm']) ?>
            <div class="row g-mb-20">
                <div class="col-md-6">
                    <?= $this->Form->input('code', ['class' => 'form-control', 'label' => false, 'placeholder' => 'รหัสทรัพย์สิน']) ?>
                </div>
                <div class="col-md-6">
                    <?= $this->Form->input('asset_type_id', ['class' => 'form-control', 'label' => false, 'options' => $assetTypeList, 'empty' => 'หมวดหมู่สินทรัพย์']) ?>
                </div>
            </div>
            <div class="row g-mb-20">
                <div class="col-md-4">
                    <?= $this->Form->input('province_id', ['id' => 'province_id', 'class' => 'form-control', 'label' => false, 'options' => $provinces, 'empty' => 'จังหวัด', 'onchange' => 'amphurs_filter(this.value)']) ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->input('amphur_id', ['id' => 'amphur_id', 'class' => 'form-control', 'label' => false, 'options' => '', 'empty' => 'เขต/อำเภอ']) ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->input('user_id', ['class' => 'form-control', 'label' => false, 'options' => $users, 'empty' => 'ตันแทนขาย']) ?>
                </div>
            </div>
            <div class="row g-mb-20">
                <div class="col-md-12">
                    <label class="f-color-black">ช่วงราคา</label>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->input('price_start', ['class' => 'form-control', 'label' => false, 'options' => $price_start, 'empty' => true]) ?>
                </div>
                <div class="col-md-4">
                    <?= $this->Form->input('price_end', ['class' => 'form-control', 'label' => false, 'options' => $price_end, 'empty' => true]) ?>
                </div>
            </div>
            <div class="row g-mb-20">
                <div class="col-md-4">
                    <?= $this->Form->button('ค้นหา', ['class' => 'btn btn-primary btn-block']) ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </article>
    </div>
</div>


<header class="section-title" onload="reset_combo()">
    <h2 class="font-mitr400">ผลการค้นหา</h2>
</header>

<?= $this->element('asset_list'); ?>

<?php if (sizeof($assets) == 0) { ?>
    <div class="col-md-12 text-center">
        <h3 class="f-color-gray">- ขออภัยค่ะ ไม่พบรายการ กรุณาลองใหม่อีกครั้ง -</h3>
    </div>
<?php } ?>
<div class="row">
    <div class="col-md-12 g-pt-11">
        <?= $this->element('pagination'); ?>
    </div>
</div>


<script>
    var amphur_id = '<?= $amphur_id ?>';
    $(document).ready(function () {
        reset_combo(amphur_id);
    });



</script>