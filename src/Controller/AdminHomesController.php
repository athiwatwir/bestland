<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * AdminHomes Controller
 *
 * @property \App\Model\Table\AdminHomesTable $AdminHomes
 */
class AdminHomesController extends AppController {

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('admin');
    }

    public function index() {
        if(null != $this->request->query('reset')){
            if($this->request->query('reset') == true){
                $this->request->session()->write('defaultSearch','');
            }
        }
        
       $title= "Dashboard";
       $this->set(compact('title'));
    }
    
    

}
