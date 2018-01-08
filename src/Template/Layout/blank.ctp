<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="../../favicon.ico">
        <?= $this->Html->css('/assets/css/custom.css') ?>
        <?= $this->Html->css('/assets/vendor/bootstrap/bootstrap.min.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-awesome/css/font-awesome.min.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line-pro/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-hs/style.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-line/css/simple-line-icons.css') ?>
        <?= $this->Html->css('/assets/vendor/icon-etlinefont/style.css') ?>
        <?= $this->Html->css('/assets/vendor/animate.css') ?>
        <?= $this->Html->css('/assets/vendor/dzsparallaxer/dzsparallaxer.css') ?>
        <?= $this->Html->css('/assets/vendor/dzsparallaxer/dzsscroller/scroller.css') ?>
        <?= $this->Html->css('/assets/vendor/dzsparallaxer/advancedscroller/plugin.css') ?>
        <?= $this->Html->css('/assets/vendor/slick-carousel/slick/slick.css') ?>
        <?= $this->Html->css('/assets/vendor/hs-megamenu/src/hs.megamenu.css') ?>
        <?= $this->Html->css('/assets/vendor/hamburgers/hamburgers.min.css') ?>
        <?= $this->Html->css('/assets/vendor/revolution-slider/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') ?>
        <?= $this->Html->css('/assets/vendor/revolution-slider/revolution/css/settings.css') ?>
        <?= $this->Html->css('/assets/vendor/revolution-slider/revolution/css/layers.css') ?>
        <?= $this->Html->css('/assets/vendor/revolution-slider/revolution/css/navigation.css') ?>
        <?= $this->Html->css('/assets/css/unify.css') ?>


        <?= $this->Html->script('/assets/vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>
        <?= $this->Html->script('/assets/vendor/tether.min.js') ?>
        <?= $this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js') ?>
    </head>

    <body>
        <main>
            <?= $this->element('Layouts/menu'); ?>
            <section class="container g-pt-25">
                <div class="row">
                    <div class="col-lg-12">
                        <?= $this->fetch('content') ?>
                    </div>
                    
                </div>
            </section>
        </main>

        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/hs.core.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.carousel.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.header.js') ?>
        <?= $this->Html->script('/assets/js/helpers/hs.hamburgers.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.tabs.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.counter.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.go-to.js') ?>
    </body>
</html>
