<div class="text-center m-b-md">
    <h3>PLEASE LOGIN TO APP</h3>
    <?= $this->Flash->render() ?>
    <?= $this->Flash->render('auth') ?>
</div>
<div class="hpanel">
    <div class="panel-body">
        <?= $this->Form->create('Users', ['novalidate' => true, 'class' => '', 'id' => 'login']) ?>
        <div class="form-group">
            <label class="control-label" for="username">Email</label>
            <?= $this->Form->control('email', ['class' => 'form-control', 'label' => false, 'placeholder' => '']); ?>
        </div>
        <div class="form-group">
            <label class="control-label" for="password">Password</label>
            <?= $this->Form->control('password', ['class' => 'form-control', 'label' => false, 'required' => 'required', 'aria-required' => 'true', 'aria-invalid' => 'true']); ?>
        </div>
        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="<?= $site_key ?>"></div>
        </div>

        <button class="btn btn-success btn-block">Login</button>
        <?= $this->Form->end() ?>
    </div>
</div>