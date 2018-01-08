<div class="container">
    <div class="row ">
        <div class="col-md-12 text-center">

            <div class="centerDiv">
                <ul class="centerUL">
                    <?php
                    $objArr = ['class' => '', 'target' => '', 'escape' => false];
                    ?>
                    <li><?= $this->Html->link('หน้าหลัก', HOME_URL, $objArr); ?></li>
                    <li><?= $this->Html->link('รับฝากขายบ้าน-ที่ดิน', SALES_HOME_URL, $objArr); ?></li>
                    <li><?= $this->Html->link('ฝากหาบ้าน-ที่ดิน', PURCHASE_HOME_URL, $objArr); ?></li>
                    <li><?= $this->Html->link('พนักงานขาย', SELLER_URL, $objArr); ?></li>
                    <li><?= $this->Html->link('สมัครงาน', JOB_URL, $objArr); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>