<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;

/**
 * Sendemail component
 */
class SendemailComponent extends Component {

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];
    public $emailConfig = null;
    public $TRANSPORT_NAME = 'custommail';

    public function setConfig() {
        //EmailTransport

        $this->CEmailsettings = TableRegistry::get('CEmailsettings');
        $this->emailConfig = $this->CEmailsettings->get('0');
        
        Email::dropTransport($this->TRANSPORT_NAME);
        Email::configTransport($this->TRANSPORT_NAME, [
            'host' => $this->emailConfig->email_server,
            'port' => $this->emailConfig->email_port,
            'username' => $this->emailConfig->email_username,
            'password' => $this->emailConfig->email_password,
            'className' => 'Smtp',
            'tls' => null
        ]);
    }

    public function testsend($data) {
        $this->setConfig();
        $email = new Email();
        $email
                ->transport($this->TRANSPORT_NAME)
                ->subject($data['title'])
                ->template('test', 'default')
                ->emailFormat('html')
                ->to($data['to'])
                ->from($this->emailConfig['email_address'])
                ->viewVars(['msg' => $data['message']]);
        if($email->send()){
            return true;
        }else{
            return false;
        }
    }
    
    public function jobregister_success($profile = null){
        if(is_null($profile)){
            return false;
        }
        
        $this->setConfig();
        
        $appsettings = TableRegistry::get('Appsettings');
        $query = $appsettings->find()->all();
        $setting = $query->first();
        
        $email = new Email();
        $email
                ->transport($this->TRANSPORT_NAME)
                ->subject('มีผู้สมัครงานมาใหม่!')
                ->template('jobregis', 'default')
                ->emailFormat('html')
                ->to($setting['email_receiver_contact'])
                ->from($this->emailConfig['email_address'])
                ->viewVars(['profile' => $profile]);
        if($email->send()){
            return true;
        }else{
            return false;
        }
        
    }

    public function asset_order_sales_success($customer = null,$customerAsset=null,$title='',$site_to_view=''){
        if(is_null($customer)){
            return false;
        }
        
        $this->setConfig();
        
        $appsettings = TableRegistry::get('Appsettings');
        $query = $appsettings->find()->all();
        $setting = $query->first();
        
        $email = new Email();
        $email
                ->transport($this->TRANSPORT_NAME)
                ->subject($title)
                ->template('asset_order_sales_success', 'default')
                ->emailFormat('html')
                ->to($setting['email_receiver_seller'])
                ->from($this->emailConfig['email_address'])
                ->viewVars(['customer' => $customer,'customerAsset'=>$customerAsset, 'subject' => $title,'site_to_view'=>$site_to_view]);
        if($email->send()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function asset_order_purchase_success($customer = null,$customerAsset=null,$title='',$site_to_view=''){
        if(is_null($customer)){
            return false;
        }
        
        $this->setConfig();
        
        $appsettings = TableRegistry::get('Appsettings');
        $query = $appsettings->find()->all();
        $setting = $query->first();
        
        $email = new Email();
        $email
                ->transport($this->TRANSPORT_NAME)
                ->subject($title)
                ->template('asset_order_purchase_success', 'default')
                ->emailFormat('html')
                ->to($setting['email_receiver_purchase'])
                ->from($this->emailConfig['email_address'])
                ->viewVars(['customer' => $customer,'customerAsset'=>$customerAsset, 'subject' => $title,'site_to_view'=>$site_to_view]);
        if($email->send()){
            return true;
        }else{
            return false;
        }
        
    }
    
    public function sendcontact($contact){
        if(is_null($contact)){
            return false;
        }
        
        $this->setConfig();
        
        $appsettings = TableRegistry::get('Appsettings');
        $query = $appsettings->find()->all();
        $setting = $query->first();
        
        $email = new Email();
        $email
                ->transport($this->TRANSPORT_NAME)
                ->subject('การติดต่อจากลูกค้า')
                ->template('contact', 'default')
                ->emailFormat('html')
                ->to($setting['email_receiver_contact'])
                ->from($this->emailConfig['email_address'])
                ->viewVars(['contact' => $contact]);
        if($email->send()){
            return true;
        }else{
            return false;
        }
        
    }

}
