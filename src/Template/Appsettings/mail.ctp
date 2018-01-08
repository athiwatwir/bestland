<div class="row">
    <div class="col-md-6">
        
        <div class="hpanel">
            <h3>Email Server</h3>
            <div class="panel-body">
               
                <?=
                $this->Form->create($email, ['class' => 'form-horizontal', 'novalidate' => true,
                    'url' => ['controller' => 'appsettings', 'action' => 'mail']])
                ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label"></label>
                    <div class="col-sm-9 checkbox">
                        <label> 
                            <?= $this->Form->checkbox('email_isenable', ['value' => 'Y']); ?> Enable email
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Server</label>
                    <div class="col-sm-9">
                        <?= $this->Form->control('email_server', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Port</label>
                    <div class="col-sm-9">
                        <?= $this->Form->control('email_port', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Email Address</label>
                    <div class="col-sm-9">
                        <?= $this->Form->control('email_address', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Username</label>
                    <div class="col-sm-9">
                        <?= $this->Form->control('email_username', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <?= $this->Form->control('email_password', ['label' => false, 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <button type="submit" class="btn w-xs btn-success">Save changes</button>
                    </div>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        
        <div class="hpanel">
            <h3>Send Email</h3>
            <div class="panel-body">
               
                <?=
                $this->Form->create($email, ['class' => '', 'novalidate' => true,
                    'url' => ['controller' => 'appsettings', 'action' => 'mailtest']])
                ?>

                <div class="form-group">
                    <label>เรื่อง</label> 
                    <?= $this->Form->control('title', ['label' => false, 'class' => 'form-control', 'aria-required' => 'true', 'required' => 'required']); ?>
                </div>
                <div class="form-group">
                    <label>ถึง</label> 
                    <?= $this->Form->control('to', ['label' => false, 'class' => 'form-control', 'aria-required' => 'true', 'required' => 'required']); ?>
                </div>
                <div class="form-group">
                    <label class="">ข้อความ</label>
                    <?= $this->Form->textarea('message', ['label' => false, 'required' => 'required', 'class' => 'form-control input-sm']); ?>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group">
                    <div class="col-sm-8 col-sm-offset-2 text-center">
                        <button type="submit" class="btn w-xs btn-success">Send</button>
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