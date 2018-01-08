
<section class="g-bg-gray-light-v5 g-py-50">
    <div class="container g-bg-cover__inner">
        <ul class="u-list-inline">
            <li class="list-inline-item g-mr-7">
                <a class="u-link-v5 g-color-main" href="#">Home</a>
                <?= $this->Html->link('หน้าหลัก', HOME_URL, ['class' => 'u-link-v5 g-color-main']); ?>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-mr-7">
                <?= $this->Html->link('เลือกโซน', '/assets/', ['class' => 'u-link-v5 g-color-main']); ?>
                <i class="fa fa-angle-right g-ml-7"></i>
            </li>
            <li class="list-inline-item g-color-primary">
                <span>รายการทรัพย์สิน</span>
            </li>
        </ul>
    </div>
</section>
<header class="section-title">
    <h2 class="font-mitr400">รายการทรัพย์สินทั้งหมด<?php echo is_null($page_title) ? '' : $page_title ?></h2>
</header>

<?= $this->element('asset_list'); ?>

<?php if (sizeof($assets) == 0) { ?>
    <div class="col-md-12 text-center">
        <h3 class="f-color-gray">- ขออภัยค่ะ ไม่พบรายการ กรุณาลองใหม่อีกครั้ง -</h3>
    </div>
<?php } ?>
<div class="row load_more text-center">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>