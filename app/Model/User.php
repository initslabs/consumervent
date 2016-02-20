<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Comment $Comment
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'display_name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
