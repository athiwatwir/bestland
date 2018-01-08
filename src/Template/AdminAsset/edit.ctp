<?= $this->Html->script('tinymce/tinymce.min.js') ?>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 600,
        theme: 'modern',
        menubar: true,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code textcolor'
        ],
        toolbar: 'undo redo | insert | styleselect | forecolor backcolor | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css'
        ]
    });
</script>

<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    แก้ไขทรัพย์สิน
                </h2>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?= $this->Html->link(BUTTON_BACK, ['action' => 'index'], ['escape' => false]) ?>
            </div>
        </div>
        <div class="hpanel">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true">ข้อมูล</a></li>
                <li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false">รูปภาพ</a></li>
            </ul>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane active">
                    <div class="panel-body">

                        <?= $this->Form->create($asset, ['class' => '', 'novalidate' => true, 'id' => 'frm']) ?>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">คำอธิบายรายละเอียดทรัพย์สินแบบย่อ <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false, 'id' => 'name']); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">รหัสสินทรัพย์ <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('code', ['class' => 'form-control', 'label' => false, 'id' => 'code']); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="">ตัวแทนขาย <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('user_id', ['options' => $users, 'empty' => false, 'class' => 'form-control', 'label' => false, 'id' => 'user_id']); ?>
                            </div>
                            <div class="col-md-4">
                                <?php
                                $expire_date = '';
                                if ($asset->expire_date != null) {
                                    $expire_date = $asset->expire_date->format('d-m-Y');
                                }
                                ?>
                                <label for="" class="text-danger">วันหมดอายุ</label>
                                <div class="input-group date">
                                    <input class="form-control" type="text" name="expire_date" id="expire_date" value="<?= $expire_date ?>"><span class="input-group-addon" style=""><i class="glyphicon glyphicon-th"></i></span>
                                </div>
                                <?= $this->Form->unlockField('expire_date'); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ประเภทสินทรัพย์ <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('asset_type_id', ['options' => $assetTypes, 'empty' => false, 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                            <div class="col-md-6">
                                <h5 class="f-color-red">ความต้องการการประกาศ</h5>
                                <div class="col-xs-3">
                                    <label class="checkbox-inline">
                                        <?= $this->Form->checkbox('issale', ['value' => 'Y']); ?> เพื่อขาย
                                    </label>
                                </div>
                                <div class="col-xs-3">
                                    <label class="checkbox-inline">
                                        <?= $this->Form->checkbox('isrent', ['value' => 'Y']); ?> ให้เช่า
                                    </label>
                                </div>
                                <div class="col-xs-3">
                                    <label class="checkbox-inline">
                                        <?= $this->Form->checkbox('issellout', ['value' => 'Y']); ?> เซ้ง
                                    </label>
                                </div>
                                <div class="col-xs-3">
                                    <label class="checkbox-inline">
                                        <?= $this->Form->checkbox('issaledown', ['value' => 'Y']); ?> ขายดาวน์
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">ราคา/บาท <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('price_amounnt', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'price_amounnt']); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="">ราคาต่อตารางวา/บาท</label>
                                <?= $this->Form->input('price_per_wah', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'price_per_wah']); ?>
                            </div>
                            <div class="col-md-4">
                                <label for="">ราคาให้เช่า/บาท</label>
                                <?= $this->Form->input('price_rent', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'price_rent']); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label class="checkbox-inline">
                                    <?= $this->Form->checkbox('isspecial_marketprice', ['value' => 'Y']); ?> ทรัพย์สินที่ขายต่ำกว่าราคาตลาด
                                </label>
                            </div>
                            <div class="col-md-4">
                                <label class="checkbox-inline">
                                    <?= $this->Form->checkbox('isspecial_appraised', ['value' => 'Y']); ?> ทรัพย์สินขายต่ำกว่าราคาประเมิน
                                </label>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">ขายต่ำกว่าในราคา/บาท</label>
                                <?= $this->Form->input('price_amounnt_lower', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'price_amounnt_lower']); ?>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <h4 class="header-title text-info">ที่อยู่</h4>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">โซน <?= REQ_FIELD ?></label>
                                <?= $this->Form->input('zone_id', ['options' => $zones, 'empty' => false, 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">ที่อยู่</label>
                                <?= $this->Form->input('address.address1', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-3">
                                <label for="">หมู่</label>
                                <?= $this->Form->input('address.moo', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-3">
                                <label for="">ซอย</label>
                                <?= $this->Form->input('address.soi', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="">ถนน</label>
                                <?= $this->Form->input('address.street', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="">ตำบล</label>
                                <?= $this->Form->input('address.district', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="">อำเภอ</label>
                                <?= $this->Form->input('address.amphur', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-md-6">
                                <label for="">จังหวัด</label>
                                <?= $this->Form->input('address.province_id', ['options' => $provinces, 'empty' => false, 'class' => 'form-control', 'label' => false]); ?>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="header-title text-info">Google Map</h4>
                            </div>
                            <div class="col-md-3">
                                <label for="example-nf-email">ตำแหน่งละติจูด</label>
                                <?= $this->Form->input('latitude', ['class' => 'form-control', 'label' => false, 'id' => 'latitude']); ?>

                            </div>
                            <div class="col-md-3">
                                <label for="example-nf-email">ตำแหน่งลองติจูด</label>
                                <?= $this->Form->input('longitude', ['class' => 'form-control', 'label' => false, 'id' => 'longitude']); ?>
                            </div>
                            <div class="col-lg-12" style="margin-top: 15px !important;">
                                <div id="map" class="map margin-bottom-10"></div>
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <h4 class="header-title text-info">รายละเอียดสิ่งปลูกสร้าง</h4>

                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">อยู่ชั้นที่(คอนโด)</label>
                                <?= $this->Form->input('floor', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">จำนวนชั้น</label>
                                <?= $this->Form->input('floor_total', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">จำนวนห้องนอน</label>
                                <?= $this->Form->input('bedroom', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">จำนวนห้องน้ำ</label>
                                <?= $this->Form->input('bathroom', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">จำนวนห้องครัว</label>
                                <?= $this->Form->input('kitchen_room', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">ห้องรับแขก</label>
                                <?= $this->Form->input('reception_room', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">ห้องทานอาหาร</label>
                                <?= $this->Form->input('dining_room', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">ห้องแม่บ้าน</label>
                                <?= $this->Form->input('maid_room', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">ที่จอดรถ</label>
                                <?= $this->Form->input('parking', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <h4 class="header-title text-info">รายละเอียดพื้นที่</h4>

                        <div class="row">
                            <div class="col-xs-3">
                                <label for="">พื้นที่/ไร่</label>
                                <?= $this->Form->input('area_rai', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">พื้นที่/งาน</label>
                                <?= $this->Form->input('area_ngan', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">พื้นที่/ตารางวา</label>
                                <?= $this->Form->input('area_wah', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">พื้นที่/ตารางเมตร</label>
                                <?= $this->Form->input('area_meter', ['class' => 'form-control', 'label' => false, 'type' => 'text']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">หน้ากว้าง/เมตร</label>
                                <?= $this->Form->input('area_width', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'area_width']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">ลึก/เมตร</label>
                                <?= $this->Form->input('area_long', ['class' => 'form-control', 'label' => false, 'type' => 'text', 'id' => 'area_long']); ?>
                            </div>
                            <div class="col-xs-3">
                                <label for="">หันหน้าทิศ</label>
                                <?= $this->Form->input('direction', ['options' => $directions, 'empty' => 'ไม่ระบุ', 'class' => 'form-control', 'label' => false, 'id' => 'direction']); ?>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 15px !important;">
                            <div class="col-md-3">
                                <label class="checkbox-inline">
                                    <?= $this->Form->checkbox('iscovering', ['value' => 'Y']); ?><span></span> ถมแล้ว
                                </label>

                            </div>
                            <div class="col-md-3">
                                <label class="checkbox-inline">
                                    <?= $this->Form->checkbox('isdweller', ['value' => 'Y']); ?><span></span> มีผู้อยู่อาศัย
                                </label>

                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <h4 class="header-title text-info">รายละเอียดอื่น ๆ</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <?= $this->Form->input('description', ['class' => 'form-control', 'label' => false, 'rows' => '20']); ?>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <h4 class="header-title text-info">สิ่งอำนวยความสะดวก</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($facis as $a) : ?>
                                    <?php
                                    $checked = '';
                                    foreach ($asset['asset_options'] as $value) {
                                        if ($a->id === $value['option_id']) {
                                            $checked = 'checked';
                                            break;
                                        }
                                    }
                                    ?>
                                    <div class="col-xs-3">
                                        <label class="css-input css-checkbox css-checkbox-primary">
                                            <?= $this->Form->checkbox('asset_option[].option_id', ['value' => $a->id, 'checked' => $checked]); ?><span></span> <?= h($a->name) ?>
                                        </label>
                                    </div>

                                <?php endforeach; ?>
                            </div>
                        </div>

                        <h4 class="header-title text-info">สถานที่ใกล้เคียง</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <?php foreach ($placs as $a) : ?>
                                    <?php
                                    $checked = '';
                                    foreach ($asset['asset_options'] as $value) {
                                        if ($a->id === $value['option_id']) {
                                            $checked = 'checked';
                                            break;
                                        }
                                    }
                                    ?>
                                    <div class="col-xs-3">
                                        <label class="css-input css-checkbox css-checkbox-primary">
                                            <?= $this->Form->checkbox('asset_option[].option_id', ['value' => $a->id, 'checked' => $checked]); ?><span></span> <?= h($a->name) ?>
                                        </label>
                                    </div>

                                <?php endforeach; ?>
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <?= $this->Form->button('บันทึก', ['class' => 'btn w-xs btn-success']) ?>
                            </div>
                        </div>

                        <?= $this->Form->end() ?>

                    </div>
                </div>
                <div id="tab-2" class="tab-pane">
                    <div class="panel-body">
                        <?= $this->Form->create($asset, ['url' => ['controller' => 'asset-images', 'action' => 'upload'], 'class' => 'form-horizontal m-t-sm', 'novalidate' => true, 'enctype' => 'multipart/form-data']) ?>

                        <div class="form-group">

                            <div class="col-md-4">

                                <div class="col-xs-12" style="padding-bottom: 10px;">
                                    <h5 class="text-info">รูปหลัก</h5>
                                    <?php
                                    $assetImages = $asset->asset_images;
                                    $default_image = '';
                                    foreach ($assetImages as $a):
                                        if ($a->isdefault == 'Y') {
                                            $default_image = $a->image->name;
                                            break;
                                        }
                                    endforeach;
                                    ?>
                                    <?php if ($default_image != '') { ?>
                                        <?= $this->Html->image('upload/' . $default_image, ['class' => '', 'width' => '250px']) ?>
                                    <?php } else { ?>
                                        <?= $this->Html->image('recent-property-1.png', ['class' => '', 'width' => '250px']) ?>
                                    <?php } ?>
                                </div>
                                <div class="col-xs-12">
                                    <input type="file" name="upload_file[]" id="" multiple>
                                </div>
                                <div class="col-xs-12" style="padding-top: 10px;">
                                    <?= $this->Form->button('อัพโหลด', ['class' => 'btn btn-app']) ?>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 50px;" class="text-center">#</th>
                                            <th>Image</th>
                                            <th >Upload Date</th>
                                            <th style="width: 200px;" class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($assetImages as $a): ?>
                                            <tr>
                                                <td class="text-center"><?= h($a->seq) ?></td>
                                                <td>
                                                    <?= $this->Html->image('upload/' . $a->image->name, ['class' => '', 'width' => '110px']) ?>
                                                </td>
                                                <td class="hidden-xs"><?= h($a->image->created) ?></td>
                                                <td class="text-center">
                                                    <div class="btn-group">
                                                        <?= $this->Html->link('ตั้งเป็นรูปหลัก', ['controller' => 'asset-images', 'action' => 'setdefault', $a->id], ['escape' => false]) ?> | 
                                                        <?= $this->Html->link('<i class="fa fa-arrow-circle-up"></i>', ['controller' => 'asset-images', 'action' => 'updateseq', $a->id, 'UP'], ['escape' => false]) ?> | 
                                                        <?= $this->Html->link('<i class="fa fa-arrow-circle-down"></i>', ['controller' => 'asset-images', 'action' => 'updateseq', $a->id, 'DOWN'], ['escape' => false]) ?> | 
                                                        <?= $this->Html->link(BUTTON_DELETE, ['controller' => 'asset-images', 'action' => 'delete', $a->id], ['confirm' => __('คุณต้องการลบ {0}?', $a->image->name), 'escape' => false]) ?>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
<script>

    $(function () {

        $('#expire_date').datepicker({autoclose: true, format: 'dd-mm-yyyy'});


        $.validator.messages.required = "กรุณากรอกข้อมูล";
        $("#frm").validate({
            rules: {
                name: {
                    required: true
                },
                code: {
                    required: true
                },
                user_id: {
                    required: true
                },
                price_amounnt: {
                    number: true,
                    required: true
                },
                price_per_wah: {
                    number: true
                },
                price_amounnt_lower: {
                    number: true
                },
                area_width: {
                    required: false
                },
                area_long: {
                    required: false
                },
                direction: {
                    required: false
                }
            },
            messages: {
                seq: {
                    required: "กรุณากรอกรหัสนักศึกษา"
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>


<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?= GOOGLE_MAP_API_KEY ?>&callback=initMap">
</script>
<?php
$lat = $asset['latitude'] == null || $asset['latitude'] == '' ? $googleMapBkk['lat'] : $asset['latitude'];
$long = $asset['longitude'] == null || $asset['longitude'] == '' ? $googleMapBkk['long'] : $asset['longitude'];
?>
<script>
    var marker;
    var position;
    var defaultLat = <?= $lat ?>;
    var defaultLong = <?= $long ?>;

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 11,
            center: {lat: defaultLat, lng: defaultLong}
        });

        marker = new google.maps.Marker({
            map: map,
            draggable: true,
            animation: google.maps.Animation.DROP,
            position: {lat: defaultLat, lng: defaultLong}
        });
        //console.log(map);
        //marker.addListener('click', toggleBounce);
        map.addListener('mouseup', function () {
            //console.log(marker.getPosition().lat());
            //alert(marker.getPosition());
            position = marker.getPosition();
            document.getElementById('latitude').value = position.lat();
            document.getElementById('longitude').value = position.lng();
        });

    }

    function toggleBounce() {
        //console.log('hi');
        if (marker.getAnimation() !== null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
</script>