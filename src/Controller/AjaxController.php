<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Ajax Controller
 *
 *
 * @method \App\Model\Entity\Ajax[] paginate($object = null, array $settings = [])
 */
class AjaxController extends AppController {

    public function setsession() {
        $this->autoRender =false;
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            if(isset($data['searchValue'])){
                $this->request->session()->write('defaultSearch',$data['searchValue']);
            }else{
                $this->request->session()->write('defaultSearch','');
            }
            /*
            debug($data['searchValue']);
            $this->set([
                'data' => $data,
                '_serialize' => 'data' // this will appear within success of ajax
            ]);
             * 
             */
        }
    }

}
