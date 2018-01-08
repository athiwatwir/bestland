<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title -->
        <title></title>
        <?= $this->Html->css('/admin_assetsv2/vendor/fontawesome/css/font-awesome.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/metisMenu/dist/metisMenu.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/animate.css/animate.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/bootstrap/dist/css/bootstrap.css') ?>



        <!-- App styles -->
        <?= $this->Html->css('/admin_assetsv2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') ?>
        <?= $this->Html->css('/admin_assetsv2/fonts/pe-icon-7-stroke/css/helper.css') ?>
        <?= $this->Html->css('/admin_assetsv2/styles/style.css') ?>
        
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery/dist/jquery.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-ui/jquery-ui.min.js') ?>

    </head>
    <body class="blank">
        <div class="login-container">
            <div class="row">
                <div class="col-md-12">
                    <?= $this->fetch('content') ?>
                </div>
            </div>
           
        </div>


        <!-- Vendor scripts -->
        
        <?= $this->Html->script('/admin_assetsv2/vendor/slimScroll/jquery.slimscroll.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/bootstrap/dist/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/metisMenu/dist/metisMenu.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/iCheck/icheck.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/sparkline/index.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-validation/jquery.validate.min.js') ?>


        <!-- App scripts -->
        <?= $this->Html->script('/admin_assetsv2/scripts/homer.js') ?>

        <script>

            $(function () {

                $("#login").validate({
                    rules: {
                        email: {
                            required: true,
                            email: true
                        },
                        password: {
                            required: true 
                        }
                    },
                    messages: {
                        email: {
                            required: "กรุณากรอก Email",
                            email: "รูปแบบ email ไม่ถูกต้อง"
                        },
                        password: {
                            required: "กรุณากรอก Password"
                        }
                    },
                    submitHandler: function (form) {
                        form.submit();
                    }
                });
            });
        </script>

    </body>
</html>