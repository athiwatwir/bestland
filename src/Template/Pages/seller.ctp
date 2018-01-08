<div class="row">
    <div class="col-md-12 text-center">
        <h2 class="pading-10-0 font-mitr400">รายชื่อตัวแทนขาย</h2>
    </div>
</div>
<!-- Team Block -->
<div class="row">
    <?php foreach ($users as $a): ?>
        <?php $link = '/assets/lists?seller=' . $a->id; ?>
        <div class="col-lg-4 col-sm-4 g-mb-30">
            <!-- Figure -->
            <figure class="g-color-gray-dark-v2">
                <!-- Figure Image -->
                <?php $image_name = isset($a->user_images[0]->image->name) ? 'upload/' . $a->user_images[0]->image->name : 'blog_thumb_1.jpg'; ?>
                <?= $this->Html->link($this->Html->image($image_name, ['class' => 'w-100 g-mb-5 seller-image', 'alt' => '']), $link, ['escape' => false]) ?>
                <!-- End Figure Image -->
                <!-- Figure Info -->
                <h4 class="h5 g-color-black-light-v3 g-mb-5"><?= $this->Html->link(($a->firstname . '  ' . $a->lastname), $link, ['escape' => false]) ?></h4>
                <!-- End Info -->
                <hr class="g-brd-gray-light-v4 g-my-minus-0">
                <!-- Contact Info -->
                <ul class="list-unstyled g-font-size-13 g-color-gray-dark-v4">
                    <li class="g-mb-5">
                        <i class="fa fa-envelope g-mr-10"></i>
                        <?= h($a->email) ?>
                    </li>
                    <li class="g-mb-5">
                        <i class="fa fa-phone-square g-mr-10"></i>
                        <?= h($a->phone) ?>
                    </li>
                    <li class="g-mb-5">
                        Line ID:
                        <?= h($a->lineid) ?>
                    </li>
                </ul>
                <!-- End Contact Info -->
            </figure>
            <!-- End Figure -->
        </div>
    <?php endforeach; ?>
</div>

<?= $this->element('pagination'); ?>