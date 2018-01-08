<article class="u-shadow-v11 rounded g-pa-30" id="search_result">
    <?php $count = 0; ?>
    <?php foreach ($assets as $a): ?>
        <div class="row g-pt-11  g-mb-7" style="<?= ($count % 2 == 1 ? 'background-color: #E0E0E0;' : '') ?>">
            <div class="col-md-4 no-padding-right g-pos-rel g-mb-7" id="img_box">
                <?php $default_img = 'recent-property-1.png'; ?>
                <?php foreach ($a['asset_images'] as $img): ?>
                    <?php
                    if ($img['isdefault'] === 'Y') {
                        $default_img = 'upload/' . $img['image']['name'];
                        break;
                    }
                    ?>
                <?php endforeach; ?>
                <?php $link = ['controller' => 'assets', 'action' => 'view', $a->id, 'title' => $a->name] ?>
                <span class="u-badge-v2--xs g-bg-green g-brd-around g-brd-white img-responsive"></span>
                <?= $this->Html->link($this->Html->image($default_img, ['class' => 'asset-image rounded', 'alt' => '']), $link, ['escape' => false]) ?>
            </div>
            <div class="col-md-8 align-self-center g-px-10 no-padding-left">
                <h4 class=" g-font-weight-600 g-color-black g-mb-3 font-mitr400">
                    <?= $this->Html->link('' . h($a->name) . '', $link, ['escape' => false]) ?>

                </h4>
                <p class="m-0 font-mitr600 text-danger">รหัสทรัพย์สิน:
                    <?= h($a->code) ?>
                </p>
                <p class="m-0">
                    <?= h($a->address->amphur == '' ? '' : $a->address->amphur . '/') ?>
                    <?= h($a->address->province->province_name) ?>
                </p>
                <?php if ($a->isspecial_marketprice === 'Y' || $a->isspecial_appraised === 'Y') { ?>
                    <span class="text-success" style="text-decoration: line-through;margin-right: 10px;font-size: 20px;"><?= $this->Number->currency($a->price_amounnt_lower, 'THB', ['precision' => 1]) ?></span>
                    <span class="text-danger" style="font-size: 20px;"><?= $this->Number->currency($a->price_amounnt, 'THB', ['precision' => 1]) ?></span>
                <?php } else { ?>
                    <span class="text-danger" style="font-size: 20px;"><?= $this->Number->currency($a->price_amounnt, 'THB', ['precision' => 1]) ?></span>
                <?php } ?>
                <?php
                $name = isset($a->user->firstname) ? $a->user->firstname . ' ' . $a->user->lastname : "";
                ?>
                <p class="m-0"><strong>สนใจติดต่อ:</strong>
                    <?= h($name) ?> <strong style="padding-left: 20px;">โทร</strong>
                    <?= h($a->user->phone) ?>
                </p>
            </div>
        </div>
        <?php $count++; ?>
    <?php endforeach; ?>
</article>

<script>
    $(document).ready(function () {
        resetassetimg($('#img_box').width());
    });
    $(window).on('resize', function () {
        resetassetimg($('#img_box').width());
    });

    function resetassetimg(img_width) {
        //console.log(img_width);
        $("article#search_result img").each(function () {
           // var s = "'".img_width."px'"
            $(this).attr('style', 'width: '+img_width+'px !important;height:'+(img_width*0.77)+'px !important;');
            //console.log($(this).attr('class'));
        });
    }
</script>