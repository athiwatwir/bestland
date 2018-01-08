<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    เพิ่มโซน
                </h2>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-6">
        
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($zone,['id'=>'frm','novalidate' => true]) ?>
                <div class="form-group">
                    <label for="example-nf-email">ชื่อ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false,'id'=>'name']); ?>

                </div>
                <div class="form-group">
                    <label for="example-nf-email">รายละเอียด <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('description', ['class' => 'form-control', 'label' => false,'id'=>'description']); ?>

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
                description: {
                    required: true
                },
                name: {
                    required: true
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