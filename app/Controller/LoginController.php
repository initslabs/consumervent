<?php
/**
 * Created by PhpStorm.
 * User: Akinsete
 * Date: 2/20/16
 * Time: 9:19 PM
 */

App::uses('AppController', 'Controller');


class LoginController extends AppController {

    public $components = array('Paginator','Session','Hybridauth','RequestHandler');
    public $uses = array('User','SocialProfile');

    public function index() {

    }




    ////**** Social Login *****//
    public function social_login($provider) {
        if($this->Hybridauth->connect($provider)){
            $this->_successfulHybridauth($provider,$this->Hybridauth->user_profile);
        }else{
            $this->Session->setFlash($this->Hybridauth->error,'error');
            $this->redirect(array('controller' => 'pages', 'action' => 'login'));
        }

    }

    public function social_endpoint($providers = null) {
        $this->Hybridauth->processEndpoint();
    }


    private function _successfulHybridauth($provider, $incomingProfile){
        dd($incomingProfile);

    }





}






