<?php
/**
 * Created by PhpStorm.
 * User: Akinsete
 * Date: 2/20/16
 * Time: 9:19 PM
 */

App::uses('AppController', 'Controller');
//session_start();


class LoginController extends AppController {

    public $uses = array('User','SocialProfile');
    public $components = array('Paginator','Session','Hybridauth','RequestHandler');

    public function index() {

    }




    ////**** Social Login *****//
    public function social_login($provider) {
        if($this->Hybridauth->connect($provider)){
            $this->_successfulHybridauth($provider,$this->Hybridauth->user_profile);
        }else{
            $this->Session->setFlash($this->Hybridauth->error,'error');
            $this->redirect(array('action' => 'index'));
        }

    }

    public function social_endpoint($providers = null) {
        $this->Hybridauth->processEndpoint();
    }


    private function _successfulHybridauth($provider, $incomingProfile){
        dd($incomingProfile);

    }





}






