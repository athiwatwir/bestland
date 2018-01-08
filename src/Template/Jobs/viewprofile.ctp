<div  class="row">
    <div class="col-lg-12 g-mb-30 g-mb-0--lg">
        <article class="u-shadow-v11 rounded g-pa-30">
            <div class="row">
                <div class="col-md-9 g-mb-30 g-mb-0--md">
                    <div class="media">
                        <div class="media-body">
                            <span class="d-block g-mb-3">
                                <h3 class="font-mitr400"><?= h($profile->firstname . '   ' . $profile['lastname']) ?></h3>
                            </span>
                            <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                                <i class="et-icon-envelope g-pos-rel g-top-1 mr-1"></i> <?= h($profile->email) ?>
                            </span>
                            <span class="g-font-size-13 g-color-gray-dark-v4 g-mr-15">
                                <i class="et-icon-phone g-pos-rel g-top-1 mr-1"></i> <?= h($profile->phone) ?>
                            </span>
                            <p><?= h($profile->address) ?></p>
                            <p>สมัครวันที่: <?=h($profile->created)?></p>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="g-brd-gray-light-v4">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        <li class="media g-mb-10">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-happy g-pos-rel g-top-1 g-mr-5"></i> เพศ:
                            </span>
                            <span class="media-body"><?=h($profile->gender=='F'?'หญิง':'ชาย')?></span>
                        </li>
                        <li class="media g-mb-10">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="icon-calendar g-pos-rel g-top-1 g-mr-5"></i> วันเกิด:
                            </span>
                            <span class="media-body"><?=h($profile->birthday)?></span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="icon-location-pin g-pos-rel g-top-1 g-mr-5"></i> อายุ:
                            </span>
                            <span class="media-body"><?=h($profile->age)?> ปี</span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-basket g-pos-rel g-top-1 g-mr-5"></i> ส่วนสูง:
                            </span>
                            <span class="media-body"><?=h($profile->height)?></span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-basket g-pos-rel g-top-1 g-mr-5"></i> น้ำหนัก:
                            </span>
                            <span class="media-body"><?=h($profile->weight)?></span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-global g-pos-rel g-top-1 g-mr-5"></i> สัญชาติ:
                            </span>
                            <span class="media-body"><?=h($profile->nationality)?></span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-layers g-pos-rel g-top-1 g-mr-5"></i> ศาสนา:
                            </span>
                            <span class="media-body"><?=h($profile->religion)?></span>
                        </li>
                        <li class="media">
                            <span class="d-block g-color-gray-dark-v5 g-width-130">
                                <i class="et-icon-document g-pos-rel g-top-1 g-mr-5"></i> สถานภาพสมรส:
                            </span>
                            <span class="media-body"><?=h($profile->marital_status)?></span>
                        </li>
                    </ul>
                </div>
                
                <div class="col-lg-6">
                    <strong>ประวัติการศึกษา</strong>
                    <p><?=h($profile->education)?></p>
                    <strong>ประวัติการทำงาน/ฝึกงาน</strong>
                    <p><?=h($profile->career_history)?></p>
                    <strong>ความสามารถพิเศษอื่นๆ</strong>
                    <p><?=h($profile->talent)?></p>
                    <strong>อื่นๆ</strong>
                    <p><?=h($profile->description)?></p>
                </div>
            </div>
        </article>
    </div>
</div>
