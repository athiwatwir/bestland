<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    เพิ่มพนักงานขาย
                </h2>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BUTTON_BACK,['controller'=>'seller','action'=>'index','defaultSearch'=>(isset($defaultSearch)?$defaultSearch:'')],['escape'=>false])?>
            </div>
        </div>
        
        <div class="hpanel">
            
            <div class="panel-body">
               
                 <?= $this->Form->create($user, ['class' => 'form-horizontal m-t-sm','novalidate' => true,'enctype' => 'multipart/form-data','id'=>'frm']) ?>
                <div class="form-group">
                    <div class="col-xs-2">
                        <label for="example-nf-email">การเรียงลำดับ</label>
                        <?= $this->Form->input('seq', ['class' => 'form-control', 'label' => false,'value'=>$totalseq]); ?>
                    </div>
                    <div class="col-xs-5">
                        <label for="example-nf-email">ชื่อ <?=REQ_FIELD?></label>
                        <?= $this->Form->input('firstname', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                    <div class="col-xs-5">
                        <label for="example-nf-email">นามสกุล <?=REQ_FIELD?></label>
                        <?= $this->Form->input('lastname', ['class' => 'form-control', 'label' => false]); ?>
                    </div>

                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="example-nf-email">โทร <?=REQ_FIELD?></label>
                        <?= $this->Form->input('phone', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                    <div class="col-xs-6">
                        <label for="example-nf-email">อีเมล</label>
                        <?= $this->Form->input('email', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-6">
                        <label for="example-nf-email">Line ID</label>
                        <?= $this->Form->input('lineid', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                    <div class="col-xs-6">
                        <label for="example-nf-email">ตำแหน่ง</label>
                        <?= $this->Form->input('position', ['class' => 'form-control', 'label' => false]); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-file-input" class="col-xs-12">รูปโปรไฟล์</label>
                    <div class="col-xs-12">
                        <input type="file" name="upload_file" id="example-file-input">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <?= $this->Form->button('บันทึก', ['class' => 'btn w-xs btn-success']) ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


<script>

    $(function () {


        $("#frm").validate({
            rules: {
                firstname: {
                    required: true
                },
                lastname: {
                    required: true
                },
                phone: {
                    required: true
                },
                email: {
                    email: true
                }
            },
            messages: {
                seq: {
                    required: ""
                }

            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>