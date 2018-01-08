<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Page title -->
        <title></title>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!--<link rel="shortcut icon" type="image/ico" href="favicon.ico" />-->

        <!-- Vendor styles -->
        <?= $this->Html->css('/admin_assetsv2/vendor/fontawesome/css/font-awesome.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/metisMenu/dist/metisMenu.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/animate.css/animate.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/bootstrap/dist/css/bootstrap.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/datatables.net-bs/css/dataTables.bootstrap.min.css') ?>
        <?= $this->Html->css('/admin_assetsv2/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css') ?>
        <?= $this->Html->css('/admin_assetsv2/fonts/pe-icon-7-stroke/css/helper.css') ?>
        <?= $this->Html->css('/admin_assetsv2/styles/style.css') ?>
        <?= $this->Html->css('/admin_assetsv2/styles/style_me.css') ?>

        <?= $this->Html->css('/admin_assetsv2/vendor/summernote/dist/summernote.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/summernote/dist/summernote-bs3.css') ?>


        <?= $this->Html->css('/admin_assetsv2/vendor/bootstrap-datepicker-master/dist/css/bootstrap-datepicker3.min.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/clockpicker/dist/bootstrap-clockpicker.min.css') ?>
        <?= $this->Html->css('/admin_assetsv2/vendor/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') ?>

        <?= $this->Html->script('/admin_assetsv2/vendor/jquery/dist/jquery.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-ui/jquery-ui.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/slimScroll/jquery.slimscroll.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/bootstrap/dist/js/bootstrap.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-validation/jquery.validate.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/summernote/dist/summernote.min.js') ?>

        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-flot/jquery.flot.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-flot/jquery.flot.resize.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery-flot/jquery.flot.pie.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/flot.curvedlines/curvedLines.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/jquery.flot.spline/index.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/metisMenu/dist/metisMenu.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/iCheck/icheck.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/peity/jquery.peity.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/sparkline/index.js') ?>
        <?= $this->Html->script('/admin_assetsv2/scripts/homer.js') ?>
        <?= $this->Html->script('/admin_assetsv2/scripts/charts.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables/media/js/jquery.dataTables.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables.net-bs/js/dataTables.bootstrap.min.js') ?>

        <?= $this->Html->script('/admin_assetsv2/vendor/sparkline/index.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/moment/moment.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/xeditable/bootstrap3-editable/js/bootstrap-editable.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/select2-3.5.2/select2.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/bootstrap-datepicker-master/dist/js/bootstrap-datepicker.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/clockpicker/dist/bootstrap-clockpicker.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') ?>

        <?= $this->Html->script('/admin_assetsv2/vendor/pdfmake/build/pdfmake.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/pdfmake/build/vfs_fonts.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables.net-buttons/js/buttons.html5.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables.net-buttons/js/buttons.print.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables.net-buttons/js/dataTables.buttons.min.js') ?>
        <?= $this->Html->script('/admin_assetsv2/vendor/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') ?>


    </head>
    <body class="fixed-navbar sidebar-scroll">

        <style>
            .skin-option {
                position: fixed;
                text-align: center;
                right: -1px;
                padding: 10px;
                top: 80px;
                width: 150px;
                height: 133px;
                text-transform: uppercase;
                background-color: #ffffff;
                box-shadow: 0 1px 10px 0px rgba(0, 0, 0, 0.05), 10px 12px 7px 3px rgba(0, 0, 0, .1);
                border-radius: 4px 0 0 4px;
                z-index: 100;
            }
        </style>
        <!-- End skin option / for demo purpose only -->

        <!-- Header -->
        <div id="header">
            <div class="color-line">
            </div>
            <div id="logo" class="light-version">
                <span>
                    Admin
                </span>
            </div>
            <nav role="navigation">

                <div class="header-link hide-menu"><i class="fa fa-bars"></i></div>
                <div class="small-logo">
                    <span class="text-primary">HOMER APP</span>
                </div>

                <div class="mobile-menu">
                    <button type="button" class="navbar-toggle mobile-menu-toggle" data-toggle="collapse" data-target="#mobile-collapse">
                        <i class="fa fa-chevron-down"></i>
                    </button>
                    <div class="collapse mobile-navbar" id="mobile-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a class="" href="login.html">Login</a>
                            </li>
                            <li>
                                <a class="" href="login.html">Logout</a>
                            </li>
                            <li>
                                <a class="" href="profile.html">Profile</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="navbar-right">
                    <ul class="nav navbar-nav no-borders">

                        <li class="dropdown" title="ออกจากระบบ">
                            <?=
                            $this->Html->link('<i class="pe-7s-upload pe-rotate-90"></i>', ['controller' => 'users', 'action' => 'logout'], ['escape' => false])
                            ?>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Navigation -->
        <aside id="menu">
            <div id="navigation">

                <div class="profile-picture">
                    <a href="index-2.html">
                        <?= $this->Html->image('logo.png', ['class' => 'm-b img-responsive']) ?>
                    </a>


                </div>
                <ul class="nav" id="side-menu">
                    <?php
                    $c = strtolower($this->request->getParam('controller'));
                    $action = strtolower($this->request->getParam('action'));
                    ?>

                    <?php $arr = ['class' => '', 'target' => '', 'escape' => false] ?>

                    <li class=" <?= ($c === 'adminhomes' ? 'active' : '') ?>">
                        <?= $this->Html->link('<i class="ion-ios-speedometer-outline"></i> หน้าหลัก', '/admin-homes', $arr); ?>
                    </li>
                    <li class=" <?= (($c === 'customerassets' && $action === 'sales') ? 'active' : '') ?>">
                        <?= $this->Html->link('<i class="ion-ios-pricetag"></i> ลูกค้าฝากขายบ้าน-ที่ดิน', '/customer-assets/sales?reset=true', $arr); ?>
                    </li>
                    <li class=" <?= (($c === 'customerassets' && $action === 'purchase') ? 'active' : '') ?>">
                        <?= $this->Html->link('<i class="ion-ios-search-strong"></i> ลูกค้าฝากหาบ้าน-ที่ดิน', '/customer-assets/purchase?reset=true', $arr); ?>
                    </li>
                    <li class=" <?= (($c === 'adminasset') ? 'active' : '') ?>">
                        <?= $this->Html->link('<i class="ion-android-home"></i> รายการทรัพย์สิน', '/admin-asset?reset=true', $arr); ?>
                    </li>

                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> ประเภทของทรัพย์สิน', '/asset-types?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> โซน', '/zones?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-person-stalker"></i> ตัวแทนขาย', '/seller?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-star"></i> สิ่งอำนวยความสะดวก', '/options/index/faci?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-star"></i> สถานที่ใกล้เคียง', '/options/index/plac?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> บทความ', '/articles?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> ประเภทของบทความ', '/categories?reset=true', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> ตั้งค่าทั่วไป', '/Appsettings/general', $arr); ?>
                    </li>
                    <li class="">
                        <?= $this->Html->link('<i class="ion-ios-paper"></i> ตั้งค่าการส่งอีเมล', '/Appsettings/mail', $arr); ?>
                    </li>



                </ul>
            </div>
        </aside>

        <!-- Main Wrapper -->
        <div id="wrapper">

            <div class="content">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>

            </div>



            <!-- Footer-->
            <footer class="footer">
                <span class="pull-right">
                    Development by <?= $this->Html->link('FinSoft', 'http://www.finsoft.co', ['target' => '_blank']) ?>
                </span>
            </footer>

        </div>

        <script>
            <?php 
                $sesValue = $this->request->session()->read('defaultSearch');
                $defaultSearch = ($sesValue!=null?$sesValue:'');
            ?>
            var defaultSearch = "<?= h($defaultSearch)?>";
            
            $(function () {
                // Initialize Example 2
                var tb = $('#datatable1').DataTable(
                        {
                            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                            "lengthMenu": [[50, 100, 200, -1], [50, 100, 200, "ทั้งหมด"]],
                            buttons: [
                                {extend: 'csv', title: 'data_file', className: 'btn-sm'},
                                {
                                    extend: 'print', className: 'btn-sm', customize: function (win) {
                                        $(win.document.body).find('table').addClass('display').css('font-size', '12px');
                                        $(win.document.body).find('tr:nth-child(odd) td').each(function (index) {
                                            //$(this).css('background-color','#D0D0D0');
                                        });
                                        //$(win.document.body).find('h1').css('text-align','center');
                                    }
                                }
                            ],
                            "columnDefs": [{
                                    "searchable": false,
                                    "orderable": false,
                                    "targets": 0
                                }],
                            "order": [[1, 'asc']],
                            "oSearch": {"sSearch": defaultSearch}
                        });
                tb.on('order.dt search.dt', function () {
                    tb.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();
            });

            $(document).ready(function () {
                $('input[type=search]').on('change', function (e) {
                    var searchValue = this.value;
                    setSession(searchValue);
                });
            });

            function setSession(data) {
                var baseurl = '<?=SITE_URL?>ajax/setsession';
                $.ajax({
                    type: 'POST',
                    url: baseurl, 
                    data: "searchValue=" + data,
                    dataType: 'html',
                    success: function (response) {
                        console.log(response);
                    },
                    error: function () {
                        //alert('error');
                    }
                });
            }

        </script>
    </body>
</html>