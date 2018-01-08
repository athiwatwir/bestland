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

        <!-- CSS Implementing Plugins -->
        <?= $this->Html->css('/assets/vendor/icon-hs/style.css') ?>
        <?= $this->Html->css('/assets/vendor/fancybox/jquery.fancybox.min.css') ?>
        <?= $this->Html->css('/assets/vendor/slick-carousel/slick/slick.css') ?>

        <?= $this->Html->script('/assets/vendor/jquery/jquery.min.js') ?>
        <?= $this->Html->script('/assets/vendor/jquery-migrate/jquery-migrate.min.js') ?>
        <?= $this->Html->script('/assets/vendor/tether.min.js') ?>
        <?= $this->Html->script('/assets/vendor/bootstrap/bootstrap.min.js') ?>
        <script>

            $(document).ready(function () {
                var $element = $('#header_bar');
                $(window).scroll(function () {

                    if ($(this).scrollTop() > 70) {
                        $element.fadeOut(700);
                    } else {
                        $element.fadeIn(200);
                    }
                });
            });
        </script>
    </head>

    <body>
        <main>



            <!-- Revolution Slider -->
            <section class="g-bg-cover g-bg-img-hero g-bg-bluegray-opacity-0_3--after cover-bg">
                <div class="container header-top" id="header_bar">
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->Html->image('header_bar.png', ['class' => 'img-fluid']) ?>
                        </div>
                    </div>
                </div>
                <div class="container g-pt-130">
                    <div class="row g-z-index-1">
                        <div class="col-lg-4 g-z-index-1">
                            <?= $this->Html->image('announce_icon.png', ['class' => 'img-fluid']) ?>
                        </div>
                    </div>

                </div>


            </section>


            <?= $this->element('Layouts/menu'); ?>
            <section class="container g-pt-25">
                <div class="row">
                    <div class="col-lg-8">
                        <?= $this->fetch('content') ?>
                    </div>
                    <div class="col-lg-4">
                        
                        
                        <div class="col-md-12 no-pading-left no-pading-right g-mb-30">
                            <article class="u-shadow-v11 rounded g-pa-30 text-center">
                                <div class="agent-profile-sidebar"> 
                                    
                                    <?php $image_name = isset($asset->user->user_images[0]->image->name) ? 'upload/' . $asset->user->user_images[0]->image->name : 'blog_thumb_1.jpg'; ?>
                                    <?= $this->Html->image($image_name, ['alt' => '', 'class' => 'w-100 seller-image']) ?>
                                    <h4 class="font-mitr400 g-pt-25"><?= $this->Html->link(h($asset->user->firstname . ' ' . $asset->user->lastname), '/assets/seller/' . $asset->user->id) ?></h4>

                                </div>
                                <ul class="list-unstyled">
                                    
                                    <li class="d-block g-color-black g-font-size-13">
                                        <strong><i class="align-middle mr-2 icon-phone u-line-icon-pro"></i>
                                        <?= h($asset->user->phone) ?>
                                        </strong>
                                    </li>
                                    <li class="d-block g-color-black g-font-size-13 mb-1">
                                        <strong><i class="align-middle mr-2 icon-communication-062 u-line-icon-pro"></i>
                                        <?= h($asset->user->email) ?></strong>
                                    </li>
                                    <li class="d-block g-color-black g-font-size-13 mb-1">
                                       <strong><i class="align-middle mr-2 icon-bubble u-line-icon-pro"></i>
                                        Line ID: <?=$this->Html->link(h($asset->user->lineid),'http://line.me/ti/p/~'.$asset->user->lineid,['target'=>'_blank'])?></strong>
                                    </li>
                                </ul>
                              
                            </article>
                        </div>
                        <?= $this->element('Layouts/side_menu'); ?>
                    </div>
                </div>
            </section>


            <?= $this->element('Layouts/footer'); ?>



            <a class="js-go-to u-go-to-v1" href="#"
               data-type="fixed"
               data-position='{
               "bottom": 15,
               "right": 15
               }'
               data-offset-top="400"
               data-compensation="#js-header"
               data-show-effect="zoomIn">
                <i class="hs-icon hs-icon-arrow-top"></i>
            </a>
        </main>


        <!-- JS Implementing Plugins -->
        <?= $this->Html->script('/assets/vendor/appear.js') ?>
        <?= $this->Html->script('/assets/vendor/slick-carousel/slick/slick.js') ?>
        <?= $this->Html->script('/assets/vendor/hs-megamenu/src/hs.megamenu.js') ?>
        <?= $this->Html->script('/assets/vendor/dzsparallaxer/dzsparallaxer.js') ?>
        <?= $this->Html->script('/assets/vendor/dzsparallaxer/dzsscroller/scroller.js') ?>
        <?= $this->Html->script('/assets/vendor/dzsparallaxer/advancedscroller/plugin.js') ?>

        <!-- JS Revolution Slider -->
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/jquery.themepunch.tools.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/jquery.themepunch.revolution.min.js') ?>

        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution-addons/slicey/js/revolution.addon.slicey.min.js') ?>

        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.actions.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.carousel.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.kenburn.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.layeranimation.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.migration.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.navigation.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.parallax.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.slideanims.min.js') ?>
        <?= $this->Html->script('/assets/vendor/revolution-slider/revolution/js/extensions/revolution.extension.video.min.js') ?>

        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/hs.core.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.carousel.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.header.js') ?>
        <?= $this->Html->script('/assets/js/helpers/hs.hamburgers.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.tabs.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.counter.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.go-to.js') ?>

        <!-- JS Customization -->
        <?= $this->Html->script('/assets/js/custom.js') ?>

        <!-- JS Implementing Plugins -->
        <?= $this->Html->script('/assets/vendor/fancybox/jquery.fancybox.min.js') ?>
        <?= $this->Html->script('/assets/vendor/slick-carousel/slick/slick.js') ?>
        <!-- JS Unify -->
        <?= $this->Html->script('/assets/js/components/hs.popup.js') ?>
        <?= $this->Html->script('/assets/js/components/hs.carousel.js') ?>


    </body>
</html>
