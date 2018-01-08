<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\I18n\Date;
use Cake\Event\Event;
/**
 * Jobs Controller
 *
 *
 * @method \App\Model\Entity\Job[] paginate($object = null, array $settings = [])
 */
class JobsController extends AppController {

    public $Jobregisters = null;
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Jobregisters = TableRegistry::get('Jobregisters');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index() {
        $this->redirect(['action' => 'register']);
    }

    /**
     * View method
     *
     * @param string|null $id Job id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function register() {
        $jobregister = $this->Jobregisters->newEntity();
        if ($this->request->is('post')) {
            $jobregister = $this->Jobregisters->patchEntity($jobregister, $this->request->getData());
            $date = new Date($jobregister['birthday']);
            $jobregister->birthday = $date;
            //debug($jobregister);
            $result = $this->Jobregisters->save($jobregister);

            if ($result) {
                $this->Flash->success('บันทึกข้อมูลเรียบร้อย');
                $this->sendemail($jobregister);
                return $this->redirect(['action' => 'success']);
            } else {
                $this->Flash->error(__('ไม่สามารถบันทึกข้อมูลได้'));
            }
        }

        $this->set(compact('jobregister'));
        $this->set('_serialize', ['jobregister']);
    }

    public function success() {
        
    }
    
    public function viewprofile($id=null){
        if(is_null($id)){
            return $this->redirect(['controller' => 'home']);
        }
        $this->viewBuilder()->layout('blank');
        $profile = $this->Jobregisters->get($id);
        $this->set('profile', $profile);
        $this->set('_serialize', ['profile']);
    }

    private function sendemail($profile=null) {
        $this->loadComponent('Sendemail');
        if ($this->Sendemail->jobregister_success($profile)) {
            //$this->Flash->success(__('ส่ง email สำเร็จ'));
        } else {
            
        }
    }

}
