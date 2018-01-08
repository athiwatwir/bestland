<!-- About -->
<section class="container g-pt-25 g-pb-70">
    <div class="row align-items-center">
        <div class="col-md-7 g-mb-30">
            <div class="g-mb-20">
                <h2 class="h1 g-color-black g-font-weight-700 text-uppercase font-mitr400">เราคือใคร?</h2>
            </div>

            <p class="lead font-mitr400">
                เราคือ บริษัท เบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง จำกัด ดำเนินกิจการเป็นตัวแทนขายอสังหาริมทรัพย์ ภายใต้แบรนด์ ERA เป็นแห่งแรกของประเทศไทย ดำเนินกิจการมาเกือบ 30 ปี ทำหน้าที่ช่วย 
                โฆษณาประชาสัมพันธ์ในช่องทางต่าง ๆ ให้กับผู้ที่ได้ทำการฝากขายทรัพย์สินนั้น ๆ ไว้กับทางบริษัทฯ โดยจะไม่มีการเก็บค่าโฆษณาประชาสัมพันธ์แต่อย่างใด <strong class="text-danger">(ฟรี)</strong>

            </p>
            <p class="lead font-mitr400">
                สำหรับขั้นตอนของผู้ที่ต้องการซื้อหรือฝากขาย ลองคลิกเข้าไปดูรายละเอียดเพิ่มเติมได้ด้านล่างนี้เลยค่ะ
            </p>
        </div>

        <div class="col-md-5 g-mb-30">
            <?= $this->Html->image('home_1.jpg', ['alt' => '', 'class' => 'img-fluid']) ?>

        </div>
    </div>
</section>
<!-- End About -->

<!-- Hero Info -->
<section class="dzsparallaxer auto-init height-is-based-on-content use-loading" data-options='{direction: "reverse", settings_mode_oneelement_max_offset: "150"}'>
    <!-- Parallax Image -->
    <div class="divimage dzsparallaxer--target w-100 g-bg-black-opacity-0_2--after" style="height: 110%; background-image: url(img/home_2.jpg)"></div>
    <!-- End Parallax Image -->

    <div class="container g-py-10 g-py-10">
        <div class="row">
            <?php foreach ($articles as $a): ?>
                <div class="col-md-6">
                    <h2 class="h1 text-uppercase mb-3 font-mitr400 text-danger"><?= h($a->name) ?></h2>
                    <div class="g-pa-10">
                        <ol class="font-mitr400" style="font-size: 24px;">
                            <?php foreach ($a['articles'] as $art): ?>
                                <li><?=$this->Html->link(h($art->name),['controller'=>'articles','action'=>'view',$art->id,'title'=>$art->name],['style'=>'color:#555 !important;'])?></li>
                            <?php endforeach; ?>
                        </ol>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
<!-- Hero Info -->

<section class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-md-12 text-center">
                    <?= $this->Html->image('banner_index.png', ['alt' => '', 'width' => '100%']) ?>
                </div>
            </div>
            <div class="row">
                <?php $count = 1; ?>
                <?php foreach ($assetTypes as $a): ?>

                    <div class="col-md-6 text-center">
                        <div class="image-with-label g-pt-11" style="padding-bottom: 7px !important;">
                            <?php
                            $pic_name = 'recent-property-1.png';
                            if ($a->pic != null) {
                                $pic_name = 'upload/' . $a->pic;
                            }
                            ?>

                            <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-responsive', 'alt' => '']), '/assets/index/' . $a->id, ['escape' => false]) ?>
                        </div>
                        <?= $this->Html->link('<h5>' . h($a->name) . '</h5>', '/assets/index/' . $a->id, ['escape' => false, 'class' => 'font-mitr400']) ?>

                    </div>


                    <?php $count++; ?>
                <?php endforeach; ?>
            </div>

            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="pading-20-0 font-mitr400">ทรัพย์สินที่น่าสนใจ</h2>
                </div>
                <div class="col-md-6 text-center">
                    <div class="image-with-label" style="padding-bottom: 7px !important;">
                        <?php
                        $pic_name = 'special_appraised_cover.jpg';
                        $link = '/assets/lists?selltype=special_appraised';
                        ?>
                        <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-fluid', 'alt' => '']), $link, ['escape' => false]) ?>
                    </div>
                    <?= $this->Html->link('<h5>ทรัพย์สินขายต่ำกว่าราคาประเมิน</h5>', $link, ['escape' => false, 'class' => 'font-mitr400']) ?>

                </div>
                <div class="col-md-6 text-center">
                    <div class="image-with-label" style="padding-bottom: 7px !important;">
                        <?php
                        $pic_name = 'special_marketprice_cover.jpg';
                        $link = '/assets/lists?selltype=special_marketprice';
                        ?>
                        <?= $this->Html->link($this->Html->image($pic_name, ['class' => 'img-fluid', 'alt' => '']), $link, ['escape' => false]) ?>
                    </div>
                    <?= $this->Html->link('<h5>ขายทรัพย์ต่ำกว่าราคาตลาด</h5>', $link, ['escape' => false, 'class' => 'font-mitr400']) ?>

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="col-md-12 no-pading-left no-pading-right hidden-xs padding-bottom-64">

                <h3 class="f-color-black text-center font-mitr400" style="font-size: 32px !important;padding-bottom: 10px;">ค้นหาทรัพย์สิน</h3>
                <?= $this->Form->create('', ['url' => ['controller' => 'assets', 'action' => 'formsearch'], 'class' => '']) ?>
                <div class="form-group">
                    <?= $this->Form->input('code', ['class' => 'form-control rounded-0', 'label' => false, 'placeholder' => 'รหัสทรัพย์สิน']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('asset_type_id', ['class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => $assetTypeList, 'empty' => 'หมวดหมู่สินทรัพย์']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('province_id', ['class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => $provinces, 'empty' => 'จังหวัด', 'onchange' => 'amphurs_filter(this.value)']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('amphur_id', ['id'=>'amphur-id','class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => '', 'empty' => 'เขต/อำเภอ']) ?>
                </div>
                <div class="form-group">
                    <?= $this->Form->input('user_id', ['class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => $users, 'empty' => 'ตัวแทนขาย']) ?>
                </div>
                <label class="f-color-black">ช่วงราคา</label>
                <div class="form-group">
                    <?= $this->Form->input('price_start', ['class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => $price_start, 'empty' => true]) ?>
                </div>
                <label class="f-color-black">ถึง</label>
                <div class="form-group">
                    <?= $this->Form->input('price_end', ['class' => 'form-control custom-select rounded-0', 'label' => false, 'options' => $price_end, 'empty' => true]) ?>
                </div>

                <?= $this->Form->button('<i class="icon-magnifier g-mr-5"></i> ค้นหา', ['class' => 'btn u-btn-primary btn-block g-mr-10 g-mb-15']) ?>
                <?= $this->Form->end() ?>


            </div>
            <?= $this->element('Layouts/side_menu'); ?>
        </div>
    </div>
</section>

<script>
    var amphurArr = <?= $amphurs ?>;
    function amphurs_filter(province_id) {
        var amphurOption = document.getElementById("amphur-id");
        amphurOption.innerHTML = "";

        amphurOption = document.getElementById("amphur-id");
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
</script>