<?php
$assetTypes = $this->request->session()->read('AssetTypes');
$articles = $this->request->session()->read('Articles');
?>

<div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64 font-mitr400 side-menu-link">
    <?= $this->Html->link('ฝากขายบ้าน-ที่ดิน', SALES_HOME_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('ฝากหาบ้าน-ที่ดิน', PURCHASE_HOME_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('พนักงานขาย', SELLER_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('สมัครงาน', JOB_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('ติดต่อเรา', CONTACT_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
</div>
<div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64 font-mitr400 side-menu-link">
    <h3 class="font-mitr400">ประเภทของทรัพย์สิน</h3>
    <?php foreach ($assetTypes as $a): ?>
        <?= $this->Html->link(h($a->name), '/assets/index/' . h($a->id), ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?php endforeach; ?>
    <?= $this->Html->link('ทรัพย์สินขายต่ำกว่าราคาประเมิน', '/assets/lists?selltype=special_appraised', ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('ทรัพย์สินขายต่ำกว่าราคาตลาด', '/assets/lists?selltype=special_marketprice', ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
</div>
<div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64 font-mitr400">
    <h3 class="font-mitr400">ลิงค์เว็บไซด์ที่เกี่ยวข้อง</h3>
    <ul class="list">
        <li><?= $this->Html->link('ตรวจสอบราคาประเมิน', 'https://assessprice.treasury.go.th/', ['escape' => false, 'target' => '_blank']) ?></li>
        <li><?= $this->Html->link('ค้นหาตำแหน่งแปลงที่ดิน', 'https://landsmaps.dol.go.th/', ['escape' => false, 'target' => '_blank']) ?></li>
        <li><?= $this->Html->link('หนังสือมอบอำนาจของกรมที่ดิน', 'https://www.dol.go.th/Pages/all_form_download.aspx', ['escape' => false, 'target' => '_blank']) ?></li>
    </ul>
</div>
<div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64 font-mitr400 side-menu-link">
    <!--PDF_SITE_URL . 'สัญญาแต่งตั้งตัวแทนขาย.pdf' -->

    <?= $this->Html->link('สัญญาแต่งตั้งตัวแทนขาย', 'javascript:void(0);', ['escape' => false, 'target' => '', 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('สัญญาจะซื้อจะขาย', 'https://drive.google.com/file/d/1tFPzqqDHxWL5yaTdSwXIMbIvFvRhRivZ/view?usp=sharing', ['escape' => false, 'target' => '_blank', 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
    <?= $this->Html->link('ที่ตั้งของบริษัท', CONTACT_URL, ['escape' => false, 'class' => 'btn btn-md btn-block main-bt g-mb-10']) ?>
</div>

<div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64 font-mitr400">
    <?php foreach ($articles as $a): ?>
        <h3 class="font-mitr400"><?= h($a->name) ?></h3>
        <ul class="list">
            <?php foreach ($a->articles as $b): ?>
                <li><?= $this->Html->link($b->name, ['controller' => 'articles', 'action' => 'view', $b->id], ['escape' => false, 'target' => '_blank']) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endforeach; ?>
</div>