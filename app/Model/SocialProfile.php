<?php
/**
 * Created by PhpStorm.
 * User: Akinsete
 * Date: 2/20/16
 * Time: 9:32 PM
 */

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');
/**
 * Agenttype Model
 *
 */
class SocialProfile extends AppModel {

    public $belongsTo = 'User';




}
