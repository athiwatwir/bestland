<div  class="row">
    <div class="col-lg-12 g-mb-30 g-mb-0--lg">
        <h3 class="font-mitr600">สมัครงาน</h3>

        <article class="u-shadow-v11 rounded g-pa-30">
            <?= $this->Form->create($jobregister) ?>
            <?php
            $input_class = 'form-control rounded-0';
            ?>
            <div class="row g-mb-20">
                <div class="col-md-6">
                    <label class="custom-label" >ตำแหน่ง</label>
                    <?= $this->Form->control('position', ['class' => $input_class, 'label' => false]) ?>
                </div>

            </div>
            <div class="row g-mb-20">
                <div class="col-md-6">
                    <label class="custom-label" >ชื่อ</label>
                    <?= $this->Form->control('firstname', ['class' => $input_class, 'label' => false]) ?>
                </div>
                <div class="col-md-6">
                    <label class="custom-label" >นามสกุล</label>
                    <?= $this->Form->control('lastname', ['class' => $input_class, 'label' => false]) ?>
                </div>
            </div>

            <div class="row g-mb-20">
                <div class="col-md-6">
                    <label class="custom-label" >ที่อยู่</label>
                    <?= $this->Form->textarea('address', ['class' => 'form-control form-control-md g-resize-none rounded-0', 'label' => false]) ?>
                </div>
                <div class="col-md-6">
                    <label class="custom-label" >โทร</label>
                    <?= $this->Form->control('phone', ['class' => $input_class, 'label' => false]) ?>

                    <label class="custom-label" >อีเมล์</label>
                    <?= $this->Form->control('email', ['class' => $input_class, 'label' => false]) ?>
                </div>
            </div>

            <div class="row g-mb-20">
                <div class="col-md-2">
                    <label class="custom-label" >เพศ</label>
                    <select class="custom-select form-control rounded-0" id="" name="gender">
                        <option selected="" value="M">ชาย</option>
                        <option value="F">หญิง</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label class="custom-label" >วัน/เดือน/ปีเกิด</label>
                    <div class="input-group g-brd-primary--focus">
                        <input name="birthday" class="form-control form-control-md g-brd-right-none rounded-0" placeholder="XX/XX/XXXX" data-mask="99/99/9999" type="text">
                        <div class="input-group-addon d-flex align-items-center g-color-gray-dark-v5 rounded-0">
                            <i class="icon-calendar"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <label class="custom-label" >อายุ</label>
                    <?= $this->Form->control('age', ['class' => $input_class, 'label' => false]) ?>
                </div>
                <div class="col-md-2">
                    <label class="custom-label" >ส่วนสูง</label>
                    <?= $this->Form->control('height', ['class' => $input_class, 'label' => false]) ?>
                </div>
                <div class="col-md-2">
                    <label class="custom-label" >น้ำหนัก</label>
                    <?= $this->Form->control('weight', ['class' => $input_class, 'label' => false]) ?>
                </div>
            </div>

            <div class="row g-mb-20">
                <div class="col-md-4">
                    <label class="custom-label" >สัญชาติ</label>
                    <?= $this->Form->control('nationality', ['class' => $input_class, 'label' => false]) ?>
                </div>
                <div class="col-md-4">
                    <label class="custom-label" >ศาสนา</label>
                    <?= $this->Form->control('religion', ['class' => $input_class, 'label' => false]) ?>
                </div>
                <div class="col-md-4">
                    <label class="custom-label" >สถานภาพสมรส</label>
                    <?= $this->Form->control('marital_status', ['class' => $input_class, 'label' => false]) ?>
                </div>
            </div>
            <hr class="g-brd-gray-light-v4 g-mx-minus-30">
            <div class="row g-mb-20">
                <div class="col-md-6">
                    <label class="custom-label" >ประวัติการศึกษา</label>
                    <?= $this->Form->textarea('education', ['class' => 'form-control form-control-md g-resize-none rounded-0', 'label' => false]) ?>
                </div>
                <div class="col-md-6">
                    <label class="custom-label" >ประวัติการทำงาน/ฝึกงาน</label>
                    <?= $this->Form->textarea('career_history', ['class' => 'form-control form-control-md g-resize-none rounded-0', 'label' => false]) ?>
                </div>
            </div>
            <div class="row g-mb-20">
                <div class="col-md-6">
                    <label class="custom-label" >ความสามารถพิเศษอื่นๆ</label>
                    <?= $this->Form->textarea('talent', ['class' => 'form-control form-control-md g-resize-none rounded-0', 'label' => false]) ?>
                </div>
                <div class="col-md-6">
                    <label class="custom-label" >อื่นๆ</label>
                    <?= $this->Form->textarea('description', ['class' => 'form-control form-control-md g-resize-none rounded-0', 'label' => false]) ?>
                </div>

            </div>




            <button class="btn u-btn-primary" type="submit" role="button" name="sendmessage">สมัคร</button>
            <?= $this->Form->end() ?>
        </article>
    </div>
</div>



<?= $this->Html->script('/assets/vendor/jquery.maskedinput/src/jquery.maskedinput.js') ?>
<?= $this->Html->script('/assets/vendor/dzsparallaxer/dzsparallaxer.js') ?>
<?= $this->Html->script('/assets/vendor/dzsparallaxer/dzsscroller/scroller.js') ?>
<?= $this->Html->script('/assets/vendor/dzsparallaxer/advancedscroller/plugin.js') ?>
<?= $this->Html->script('/assets/vendor/jquery.filer/js/jquery.filer.min.js') ?>
<?= $this->Html->script('/assets/js/hs.core.js') ?>
<?= $this->Html->script('/assets/js/helpers/hs.not-empty-state.js') ?>
<?= $this->Html->script('/assets/js/helpers/hs.focus-state.js') ?>
<?= $this->Html->script('/assets/js/components/hs.masked-input.js') ?>
<?= $this->Html->script('/assets/js/components/hs.count-qty.js') ?>
<?= $this->Html->script('/assets/js/components/hs.autocomplete.js') ?>
<?= $this->Html->script('/assets/js/components/hs.autocomplete-local-search.js') ?>
<?= $this->Html->script('/assets/js/components/hs.go-to.js') ?>

<script>
    $(document).on('ready', function () {
        $.HSCore.components.HSMaskedInput.init('[data-mask]');

    });
</script>