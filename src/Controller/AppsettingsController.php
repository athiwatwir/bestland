<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Cake\Mailer\Email;
/**
 * Appsettings Controller
 *
 * @property \App\Model\Table\AppsettingsTable $Appsettings
 *
 * @method \App\Model\Entity\Appsetting[] paginate($object = null, array $settings = [])
 */
class AppsettingsController extends AppController {

    public $CEmailsettings = null;

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
        $this->CEmailsettings = TableRegistry::get('CEmailsettings');
    }
    
    public function index(){

        return $this->redirect(['action' => 'general']);
    }

    public function general() {
        
        if(null != $this->request->query('reset')){
            if($this->request->query('reset') == true){
                $this->request->session()->write('defaultSearch','');
            }
        }
        $query = $this->Appsettings->find()->all();
        $setting = $query->first();
        if ($this->request->is(['patch', 'post', 'put'])) {

            $setting = $this->Appsettings->patchEntity($setting, $this->request->data);
            //debug($setting);
            if ($this->Appsettings->save($setting)) {
                $this->Flash->success(__('The setting has been saved.'));

                return $this->redirect(['action' => 'mail']);
            } else {
                $this->Flash->error(__('The setting could not be saved. Please, try again.'));
            }
            //$validator = new Validator();
            //debug($setting);
            //debug($validator->errors($setting));
        }

        $this->set(compact('setting'));
        $this->set('_serialize', ['setting']);
    }

    public function mail() {
        $email = $this->CEmailsettings->get('0');

        if ($this->request->is(['patch', 'post', 'put'])) {

            $email = $this->CEmailsettings->patchEntity($email, $this->request->getData());

            if ($this->CEmailsettings->save($email)) {
                $this->Flash->success(__('Email Server has been saved.'));
            } else {
                $this->Flash->error(__('Email Server could not be saved. Please, try again.'));
            }
            return $this->redirect(['action' => 'mail']);
        }
        $this->set(compact('email'));
        $this->set('_serialize', ['email']);
    }

    public function mailtest() {
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $this->loadComponent('Sendemail');
            if($this->Sendemail->testsend($data)){
                $this->Flash->success(__('ส่ง email สำเร็จ'));
            }else{
                
            }
            
        }
        return $this->redirect(['action' => 'mail']);
    }

}
