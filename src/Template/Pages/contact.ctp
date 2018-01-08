<div class="row">
    <div class="col-md-12 text-center">
        <h2 class="g-pb-70 font-mitr400">ติดต่อเรา</h2>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-hotel-restaurant-235 u-line-icon-pro"></i>
            <div class="media-body">
                <p class="g-color-gray-dark-v3 mb-2">257/6-7 ซอยลาดพร้าว101 ถนนลาดพร้าว
                    <br>แขวงคลองเจ้าคุณสิงห์ เขตวังทองหลาง
                    <br>กรุงเทพมหานคร 10310</p>
            </div>
        </div>
        <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-communication-033 u-line-icon-pro"></i>
            <div class="media-body">
                <p class="g-color-gray-dark-v3">โทร: <span class="g-color-gray-dark-v4">02-731-2488, 088-298-9644</span></p>
            </div>
        </div>
        <div class="media mb-2">
            <i class="d-flex g-color-gray-dark-v5 mt-1 mr-3 icon-communication-062 u-line-icon-pro"></i>
            <div class="media-body">
                <p class="g-color-gray-dark-v3 mb-2">Email: <a class="g-color-gray-dark-v4" href="#">baanbestland@gmail.com</a></p>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <?= $this->Form->create($contact) ?>
        <div class="g-mb-20">
            <label class="">ชื่อ: <span class="g-color-red">*</span></label>
            <?= $this->Form->control('full_name', ['class' => 'form-control form-control-md rounded-0', 'label' => false]) ?>
        </div>
        <div class="g-mb-20">
            <label class="">โทร: <span class="g-color-red">*</span></label>
            <?= $this->Form->control('tel', ['class' => 'form-control form-control-md rounded-0', 'label' => false]) ?>
        </div>
        <div class="g-mb-20">
            <label class="">อีเมล: <span class="g-color-red">*</span></label>
            <?= $this->Form->control('email', ['class' => 'form-control form-control-md rounded-0', 'label' => false]) ?>
        </div>
        <div class="g-mb-20">
            <label class="">ข้อความ: <span class="g-color-red">*</span></label>
            <?= $this->Form->control('message', ['class' => 'form-control ', 'label' => false]) ?>
        </div>
        <button class="btn u-btn-primary" type="submit" role="button" name="sendmessage">ส่งข้อความ</button>
        <?= $this->Form->end() ?>
    </div>
    <div class="col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1937.5172460106778!2d100.6295436074466!3d13.776793537981204!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5dcf2624cdbfecb3!2sBestland+and+Housing+Co.%2C+Ltd.!5e0!3m2!1sen!2sth!4v1481811124618" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>
