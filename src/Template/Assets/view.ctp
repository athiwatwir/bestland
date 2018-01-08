<section class="g-bg-gray-light-v5 g-py-10 g-mb-20">
    <div class="container g-bg-cover__inner">
        <ul class="u-list-inline font-mitr400 " style="font-size: 18px !important;">
            <li class="list-inline-item g-mr-7">
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
<div class="row">
    <div class="col-md-12">
        <h2 class="font-mitr400"><?= h($asset->name) ?></h2>
    </div>
    <div class="col-md-6">
        <h4 class="text-danger font-mitr600">รหัสสินทรัพย์: <?= h($asset->code) ?></h4>
    </div>
    <div class="col-md-6">
        <h4 class="text-danger font-mitr600">ราคา: <?= $this->Number->currency($asset->price_amounnt, 'THB', ['precision' => 1]) ?></h4>
    </div>
    <?php if (!is_null($asset->price_per_wah) && $asset->price_per_wah != '') { ?>
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <h4 class="text-danger">ราคาต่อตารางวา: <?= $this->Number->currency($asset->price_per_wah, 'THB', ['precision' => 1]) ?></h4>
        </div>
    <?php } ?>
    <?php if (!is_null($asset->price_rent) && $asset->price_rent != '') { ?>
        <div class="col-md-6"></div>
        <div class="col-md-6">
            <h4 class="text-danger font-mitr400">ให้เช่า: <?= $this->Number->currency($asset->price_rent, 'THB', ['precision' => 1]) ?></h4>
        </div>
    <?php } ?>
    <div class="col-md-12">
        <h4 class="font-mitr400 text-danger"><i class="icon-real-estate-053 u-line-icon-pro"></i> รูปภาพ</h4>
        <div class="col-md-12 text-center">
            <?= $this->element('asset_image_slide'); ?>
        </div>
    </div>
    <div class="col-md-12 u-shadow-v20 g-brd-right--md g-brd-gray-light-v5 g-bg-white g-rounded-left-5 g-px-20 g-py-10 g-mb-40">
        <h4 class="font-mitr400 text-danger g-pt-11"><i class="icon-real-estate-020 u-line-icon-pro"></i> ที่อยู่</h4>
        <?php
        if (!(is_null($asset->address->address1) || $asset->address->address1 == ''))
            echo '<p style="margin-bottom: 5px !important;">หมู่บ้าน: ' . $asset->address->address1 . '</p>';

        if (!(is_null($asset->address->soi) || $asset->address->soi == ''))
            echo '<p style="margin-bottom: 5px !important;">ซอย: ' . $asset->address->soi . '</p>';

        if (!(is_null($asset->address->moo) || $asset->address->moo === ''))
            echo '<p style="margin-bottom: 5px !important;">หมู่: ' . $asset->address->moo . '</p>';

        if (!(is_null($asset->address->street) || $asset->address->street == ''))
            echo '<p style="margin-bottom: 5px !important;">ถนน: ' . $asset->address->street . '</p>';

        if (!(is_null($asset->address->district) || $asset->address->district == ''))
            echo '<p style="margin-bottom: 5px !important;">ตำบล/แขวง: ' . $asset->address->district . '</p>';

        if (!(is_null($asset->address->amphur) || $asset->address->amphur === ''))
            echo '<p style="margin-bottom: 5px !important;">อำเภอ/เขต: ' . $asset->address->amphur . '</p>';

        if (!(is_null($asset->address->province->province_name) || $asset->address->province->province_name == ''))
            echo '<p style="margin-bottom: 5px !important;">จังหวัด: ' . $asset->address->province->province_name . '</p>';
        ?>
    </div>
    <?php if ($asset->description != '') { ?>
        <div class="col-md-12 u-shadow-v20 g-brd-right--md g-brd-gray-light-v5 g-bg-white g-rounded-left-5 g-px-20 g-py-10 g-mb-40">
            <?= nl2br($asset->description) ?>
        </div>
    <?php } ?>
</div>
<div class="row u-shadow-v20 g-brd-right--md g-brd-gray-light-v5 g-bg-white g-rounded-left-5 g-px-20 g-py-10 g-mb-40">
    <div class="col-lg-6 col-md-6 col-xs-12">
        <h4 class="font-mitr400 text-danger g-pt-11"><i class="icon-real-estate-001 u-line-icon-pro"></i> รายละเอียด</h4>
        <div class="row">
            <div class="col-6 col-lg-6 col-md-6 col-sm-6  inofrmaition-label">ประเภททรัพย์สิน</div>
            <div class="col-6 col-lg-6 col-md-6 col-sm-6  information-value">
                <?= h($asset->asset_type->name) ?>
            </div>
            <?php if (!(is_null($asset->price_per_wah) || $asset->price_per_wah == '' || $asset->price_per_wah == 0)) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ราคาต่อตารางวา</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->price_per_wah . ' บาท') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_rai) || $asset->area_rai == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">พื้นที่</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_rai . ' ไร่') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_ngan) || $asset->area_ngan == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">พื้นที่</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_ngan . ' งาน') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_wah) || $asset->area_wah == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">พื้นที่</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_wah . ' ตารางวา') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_meter) || $asset->area_meter == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">พื้นที่</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_meter . ' ตารางเมตร') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_width) || $asset->area_width == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">หน้ากว้าง</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_width . ' เมตร') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->area_long) || $asset->area_long == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ลึก</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->area_long . ' เมตร') ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->direction) || $asset->direction == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">หันหน้าไปทาง</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h($asset->direction) ?>
                </div>
            <?php } ?>
            <?php if ($asset->iscovering == 'Y' && $asset->iscovering != '') { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ถมแล้ว</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">ใช่</div>
            <?php } ?>
            <?php if (!(is_null($asset->floor_total) || $asset->floor_total == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">จำนวนชั้น</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->floor_total) ? '-' : $asset->floor_total) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->floor) || $asset->floor == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">อยู่ชั้นที่</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->floor) ? '-' : $asset->floor) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->bedroom) || $asset->bedroom == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องนอน</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->bedroom) ? '-' : $asset->bedroom) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->bathroom) || $asset->bathroom == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องน้ำ</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->bathroom) ? '-' : $asset->bathroom) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->kitchen_room) || $asset->kitchen_room == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องครัว</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->kitchen_room) ? '-' : $asset->kitchen_room ) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->reception_room) || $asset->reception_room == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องรับแขก</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->reception_room) ? '-' : $asset->reception_room) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->dining_room) || $asset->dining_room == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องทานอาหาร</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->dining_room) ? '-' : $asset->dining_room ) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->maid_room) || $asset->maid_room == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ห้องแม่บ้าน</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->maid_room) ? '-' : $asset->maid_room) ?>
                </div>
            <?php } ?>
            <?php if (!(is_null($asset->parking) || $asset->parking == '')) { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">ที่จอดรถ</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">
                    <?= h(is_null($asset->parking) ? '-' : $asset->parking) ?>
                </div>
            <?php } ?>
            <?php if ($asset->isdweller != 'N' && $asset->isdweller != '') { ?>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 inofrmaition-label">มีผู้อยู่อาศัย</div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-6 information-value">ใช่</div>
            <?php } ?>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <h4 class="font-mitr400 text-danger g-pt-11"><i class="icon-real-estate-067 u-line-icon-pro"></i> สิ่งอำนวยความสะดวก</h4>
        <div class="row amenities-info">
            <?php foreach ($asset['asset_options'] as $a): ?>
                <?php if ($a['option']['type'] === 'FACI') { ?>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 information-value">
                        <i aria-hidden="true" class="fa fa-check"></i> <?= h($a['option']['name']) ?>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="col-lg-6 col-md-6">
        <h4 class="font-mitr400 text-danger g-pt-11"><i class="icon-real-estate-046 u-line-icon-pro"></i> สถานที่ใกล้เคียง</h4>
        <div class="row amenities-info">
            <?php foreach ($asset['asset_options'] as $a): ?>
                <?php if ($a['option']['type'] === 'PLAC') { ?>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 information-value">
                        <i aria-hidden="true" class="fa fa-check"></i> <?= h($a['option']['name']) ?>
                    </div>
                <?php } ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="row u-shadow-v20 g-brd-right--md g-brd-gray-light-v5 g-bg-white g-rounded-left-5 g-px-20 g-py-10 g-mb-20">
    <div class="col-md-12">
        <h4 class="font-mitr400 text-danger g-pt-11"><i class="icon-real-estate-027 u-line-icon-pro"></i> แผนที่</h4>
        <?= $this->Form->input('latitude', ['id' => 'latitude', 'type' => 'hidden', 'label' => false, 'value' => $asset->latitude]); ?>
        <?= $this->Form->input('longitude', ['id' => 'longitude', 'type' => 'hidden', 'label' => false, 'value' => $asset->longitude]); ?>
        <?= $this->element('google_map'); ?>
    </div>
</div>
