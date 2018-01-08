<?php 

use Cake\Core\Configure;



define('PAGINATE_LIMIT',30);

define('RECAPTCHA_ERR_MSG', 'The reCAPTCHA wasn\'t entered correctly.');
define('CONFIRM_PASS_ERR_MSG', 'Password does not match the confirm password.');

define('CAPTCHA_KEY', '6LdMwggUAAAAACeih0QO8BjG7yg__rpysl2aRKwn');
define('GOOGLE_MAP_API_KEY', 'AIzaSyBlBNYnIC9qGPT2dEMmbpnPFMYtFbqaXpM');


/*Message*/
define('MSG_SAVE_SUCCESS', 'ข้อมูลบันทึกแล้ว');
define('MSG_DEL_SUCCESS', 'ลบข้อมูลแล้ว');
define('MSG_ERR_REQ_FIELD', 'กรอกข้อมูลไม่ครบถ้วน กรุณาตรวจสอบ');

/*Html code*/
define('REQ_FIELD','<i class="text-danger">*</i>');

define('BUTTON_EDIT', '<button class="btn btn-success btn-xs" type="button" title="แก้ไข"><i class="pe-7s-pen"></i></button>');
define('BUTTON_DELETE', '<button class="btn btn-danger2 btn-xs" type="button" title="ลบ"><i class="pe-7s-trash"></i></button>');
define('BUTTON_VIEW', '<button title="" data-toggle="tooltip" type="button" class="btn btn-xs btn-default" data-original-title="ดูรายละเอียด"><i class="fa fa-search"></i></button>');
define('BUTTON_BACK', '<button class="btn btn-primary" type="button" style="margin-bottom: 10px !important"><i class="pe-7s-angle-left-circle"></i> กลับ</button>');



/*MENU URL*/
define('HOME_URL', '/home');
define('SALES_HOME_URL', '/asset-order/sales');
define('PURCHASE_HOME_URL', '/asset-order/purchase');
define('SERVICE_URL', '/service');
define('ADVAN_URL', '/pages/advantages');
define('JOB_URL', '/pages/job');
define('CONTACT_URL', '/pages/contact');
define('SELLER_URL', '/pages/seller');
define('LOGIN_URL', '/users/login');


define('SITE_URL', 'http://127.0.0.1/Dropbox/bestland/');
define('PDF_SITE_URL', SITE_URL.'documents/');


//Controller
define('CTR_SUCCESS', 'Success');