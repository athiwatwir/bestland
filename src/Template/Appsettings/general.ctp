<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    ตั้งค่าทั่วไป
                </h2>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($setting,['id'=>'frm','novalidate' => true]) ?>
                <?= $this->Form->hidden('id'); ?>
                <div class="form-group">
                    <label for="example-nf-email">ผู้รับการติดต่อจากลูกค้า ***หน้าติดต่อเรา </label>
                    <?= $this->Form->input('email_receiver_contact', ['class' => 'form-control', 'label' => false,'id'=>'email_receiver_contact']); ?>

                </div>
                <div class="form-group">
                    <label for="example-nf-email">ผู้รับลูกค้าฝ่ายขาย </label>
                    <?= $this->Form->input('email_receiver_seller', ['class' => 'form-control', 'label' => false,'id'=>'email_receiver_seller']); ?>

                </div>
                <div class="form-group">
                    <label for="example-nf-email">ผู้รับลูกค้าฝ่ายซื้อ </label>
                    <?= $this->Form->input('email_receiver_purchase', ['class' => 'form-control', 'label' => false,'id'=>'email_receiver_purchase']); ?>

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
                email_receiver_contact: {
                    email: true
                },
                email_receiver_seller: {
                    email: true
                },
                email_receiver_purchase: {
                    email: true
                }
            },
            messages: {
                
            },
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>