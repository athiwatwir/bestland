<!-- Footer -->
<div class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-10">
    <div class="container">
        <div class="row">
            <!-- Footer Content -->
            <div class="col-lg-4 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">About Us</h2>
                </div>

                <p>บริษัทเบสท์แลนด์ แอนด์ เฮ้าส์ซิ่ง จำกัด  บริการให้คำปรึกษา เรื่องซื้อ-รับฝากขายบ้าน รับฝากขายที่ดิน และอสังหาริมทรัพย์อื่นๆ ในเขตกรุงเทพฯ และปริมณฑล</p>
            </div>
            <!-- End Footer Content -->
            
            <!-- Footer Content -->
            <div class="col-lg-4 col-md-6">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Our Contacts</h2>
                </div>

                <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(../../assets/img/maps/map2.png);">
                    <!-- Location -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                            <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                <i class="fa fa-map-marker"></i>
                            </span>
                        </div>
                        <p class="mb-0">257/6-7 ซอยลาดพร้าว101 ถนนลาดพร้าว<br>แขวงคลองเจ้าคุณสิงห์ เขตวังทองหลาง กรุงเทพมหานคร 10310</p>
                    </div>
                    <!-- End Location -->

                    <!-- Phone -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                            <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                <i class="fa fa-phone"></i>
                            </span>
                        </div>
                        <p class="mb-0"><a href="tel:+6627312488" style="color:#FFFFFF !important;">02-731-2488</a><br>
                            <a href="tel:+66882989644" style="color:#FFFFFF !important;">088-298-9644</a></p>
                    </div>
                    <!-- End Phone -->

                    <!-- Email and Website -->
                    <div class="d-flex g-mb-20">
                        <div class="g-mr-10">
                            <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                                <i class="fa fa-globe"></i>
                            </span>
                        </div>
                        <p class="mb-0">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:lovethaihome@gmail.com">baanbestland@gmail.com</a>

                        </p>
                    </div>
                    <!-- End Email and Website -->
                </address>
            </div>
            <!-- End Footer Content -->
            <!-- Footer Content -->
            <div class="col-lg-4 col-md-6 g-mb-40 g-mb-0--lg">
                <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                    <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Social Media</h2>
                </div>
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FBaanBestland&tabs=timeline&width=340&height=200&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="200" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

            </div>
            <!-- End Footer Content -->
        </div>
    </div>
</div>
<!-- End Footer -->

<!-- Copyright Footer -->
<footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <ul class="u-list-inline">
                
                        <?php
                        $objArr = ['class' => 'g-color-white-opacity-0_8 g-color-white--hover', 'target' => '', 'escape' => false];
                        ?>
                        <li class="list-inline-item"><?= $this->Html->link('หน้าหลัก', HOME_URL, $objArr); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('รับฝากขายบ้าน-ที่ดิน', SALES_HOME_URL, $objArr); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('ฝากหาบ้าน-ที่ดิน', PURCHASE_HOME_URL, $objArr); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('สมัครงาน', JOB_URL, $objArr); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('รายชื่อตัวแทนขาย', SELLER_URL, $objArr); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('เข้าสู่ระบบ', LOGIN_URL, ['class' => 'g-color-white-opacity-0_8 g-color-white--hover', 'target' => '_blank', 'escape' => false]); ?></li>
                        <li class="list-inline-item"><?= $this->Html->link('ติดต่อเรา', CONTACT_URL, $objArr); ?></li>
                    </ul>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12 text-center text-md-left g-mb-10 g-mb-0--md">
                <div class="d-lg-flex">
                    <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved. Developed by: <a href="http://www.finsoft.co" target="_blank">FinSoft</a></small>
                    
                </div>
            </div>

        </div>
    </div>
</footer>
<!-- End Copyright Footer -->

