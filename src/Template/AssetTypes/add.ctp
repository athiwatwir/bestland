<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    เพิ่มประเภทของทรัพย์สิน
                </h2>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        <div class="row">
            <div class="col-md-12 btn-group" >
                <?=$this->Html->link(BUTTON_BACK,['action'=>'index'],['escape'=>false])?>
            </div>
        </div>
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($assetType,['id'=>'frm','novalidate' => true]) ?>
                <div class="form-group">
                    <label for="example-nf-email">ลำดับที่ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('seq', ['class' => 'form-control', 'label' => false,'id'=>'seq']); ?>

                </div>
                <div class="form-group">
                    <label for="example-nf-email">ชื่อ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false]); ?>

                </div>
                <div class="form-group m-b-0">
                    <?= $this->Form->button('บันทึก', ['class' => 'btn w-xs btn-success']) ?>
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
                seq: {
                    required: true
                },
                name: {
                    required: true
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