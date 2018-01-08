<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="shortcut icon" href="../../favicon.ico">
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
        <?= $this->Html->css('/assets/css/custom.css') ?>


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

        <section>

            <!-- Revolution Slider -->
            <div class="g-overflow-hidden">
                <div class="container header-top" id="header_bar">
                    <div class="row">
                        <div class="col-md-12">
                            <?= $this->Html->image('header_bar.png', ['class' => 'img-fluid']) ?>
                        </div>
                    </div>
                </div>
                <div id="rev_slider_24_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="website-intro" data-source="gallery" style="background:#000000;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.1 fullscreen mode -->
                    <div id="rev_slider_24_1" class="rev_slider fullscreenbanner tiny_bullet_slider" style="display:none;" data-version="5.4.1">
                        <ul>  <!-- SLIDE  -->
                            <li data-index="rs-67" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="../../assets/img-temp/1920x1080/img24.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                                <!-- MAIN IMAGE -->

                                <?=
                                $this->Html->image('slide/home_slide_1.jpg', ['alt' => '', 'data-bgposition' => 'center center', 'data-kenburns' => 'on', 'data-duration' => '5000',
                                    'data-ease' => 'Power2.easeInOut', 'data-scalestart' => '100', 'data-scaleend' => '100',
                                    'data-rotatestart' => '0', 'data-rotateend' => '0', 'data-blurstart' => '20', 'data-blurend' => '0',
                                    'data-offsetstart' => '0 0', 'data-offsetend' => '0 0', 'class' => 'rev-slidebg'])
                                ?>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 15 -->
                                <div class="tp-caption   tp-resizeme"
                                     id="slide-67-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                                     data-fontsize="['90','90','70','50']"
                                     data-lineheight="['90','90','70','50']"
                                     data-width="['none','none','481','360']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"

                                     data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: -5px;">
                                         <?= $this->Html->image('announce_icon.png') ?>
                                </div>

                            </li>
                            <!-- SLIDE  -->

                            <!-- SLIDE  -->
                            <li data-index="rs-68" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="600" data-thumb="../../assets/img-temp/1920x1080/img1.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="" data-slicey_shadow="0px 0px 0px 0px transparent">
                                <!-- MAIN IMAGE -->

                                <?=
                                $this->Html->image('slide/home_slide_2.jpg', ['alt' => '', 'data-bgposition' => 'center top', 'data-kenburns' => 'on', 'data-duration' => '5000',
                                    'data-ease' => 'Power2.easeInOut', 'data-scalestart' => '100', 'data-scaleend' => '100',
                                    'data-rotatestart' => '0', 'data-rotateend' => '0', 'data-blurstart' => '20', 'data-blurend' => '0',
                                    'data-offsetstart' => '0 0', 'data-offsetend' => '0 0', 'class' => 'rev-slidebg'])
                                ?>

                                <!-- LAYERS -->


                                <!-- LAYER NR. 49 -->
                                <div class="tp-caption   tp-resizeme"
                                     id="slide-68-layer-2"
                                     data-x="['center','center','center','center']" data-hoffset="['1','1','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['-20','-20','-20','-20']"
                                     data-fontsize="['90','90','70','50']"
                                     data-lineheight="['90','90','70','50']"
                                     data-width="['none','none','481','360']"
                                     data-height="none"
                                     data-whitespace="['nowrap','nowrap','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"

                                     data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:0.9;sY:0.9;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":500,"frame":"999","to":"sX:0.9;sY:0.9;opacity:0;fb:20px;","ease":"Power3.easeInOut"}]'
                                     data-textAlign="['center','center','center','center']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 19; white-space: nowrap; font-size: 90px; line-height: 90px; font-weight: 700; color: #ffffff; letter-spacing: -5px;">
                                         <?= $this->Html->image('announce_icon.png') ?>
                                </div>


                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="height: 5px; background: #fff;"></div>
                    </div>
                </div>


            </div>
            <!-- End Revolution Slider -->
        </section>

        <?= $this->element('Layouts/menu'); ?>
        <?= $this->fetch('content') ?>

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

        <!-- JS Plugins Init. -->
        <script>
            // initialization of slider revolution
            var tpj = jQuery,
                    revapi24;

            tpj(document).ready(function () {
                if (tpj("#rev_slider_24_1").revolution == undefined) {
                    revslider_showDoubleJqueryError("#rev_slider_24_1");
                } else {
                    revapi24 = tpj("#rev_slider_24_1").show().revolution({
                        sliderType: "standard",
                        jsFileLocation: "../../assets/vendor/revolution-slider/revolution/js/",
                        sliderLayout: "fullscreen",
                        dottedOverlay: "none",
                        delay: 9000,
                        navigation: {
                            keyboardNavigation: "off",
                            keyboard_direction: "horizontal",
                            mouseScrollNavigation: "off",
                            mouseScrollReverse: "default",
                            onHoverStop: "off",
                            bullets: {
                                enable: true,
                                hide_onmobile: false,
                                style: "bullet-bar",
                                hide_onleave: false,
                                direction: "horizontal",
                                h_align: "center",
                                v_align: "bottom",
                                h_offset: 0,
                                v_offset: 50,
                                space: 5,
                                tmp: ''
                            }
                        },
                        responsiveLevels: [1240, 1024, 778, 480, 280],
                        visibilityLevels: [1240, 1024, 778, 480, 280],
                        gridwidth: [1240, 1024, 778, 480, 280],
                        gridheight: [868, 768, 960, 720, 400],
                        lazyType: "none",
                        shadow: 0,
                        spinner: "off",
                        stopLoop: "off",
                        stopAfterLoops: -1,
                        stopAtSlide: -1,
                        shuffle: "off",
                        autoHeight: "on",
                        fullScreenAutoWidth: "on",
                        fullScreenAlignForce: "off",
                        fullScreenOffsetContainer: "",
                        fullScreenOffset: "60px",
                        hideThumbsOnMobile: "off",
                        hideSliderAtLimit: 0,
                        hideCaptionAtLimit: 0,
                        hideAllCaptionAtLilmit: 0,
                        debugMode: false,
                        fallbacks: {
                            simplifyAll: "off",
                            nextSlideOnWindowFocus: "off",
                            disableFocusListener: false
                        }
                    });
                }

                if (revapi24)
                    revapi24.revSliderSlicey();
            });

            $(document).on('ready', function () {
                // initialization of carousel
                $.HSCore.components.HSCarousel.init('.js-carousel');


            });

            $(window).on('load', function () {
                // initialization of HSScrollNav
                $.HSCore.components.HSScrollNav.init($('#js-scroll-nav'), {
                    duration: 700,
                    easing: 'easeOutExpo',
                    over: $('.u-secondary-navigation')
                });

                // initialization of masonry.js
                $('.masonry-grid').imagesLoaded().then(function () {
                    $('.masonry-grid').masonry({
                        // options
                        columnWidth: '.masonry-grid-sizer',
                        itemSelector: '.masonry-grid-item',
                        percentPosition: true
                    });
                });
            });

        </script>
        <?= $this->element('social_box'); ?>
    </body>
</html>
