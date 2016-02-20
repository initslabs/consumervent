<?php
App::uses('AppModel', 'Model');
/**
 * Comment Model
 *
 * @property CompanyUser $CompanyUser
 * @property Submission $Submission
 * @property User $User
 */
class Comment extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'comment_text';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'CompanyUser' => array(
			'className' => 'CompanyUser',
			'foreignKey' => 'company_user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Submission' => array(
			'className' => 'Submission',
			'foreignKey' => 'submission_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
