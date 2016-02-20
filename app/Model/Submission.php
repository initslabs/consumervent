<?php
App::uses('AppModel', 'Model');
/**
 * Submission Model
 *
 * @property Users $Users
 * @property SubmissionStatus $SubmissionStatus
 * @property Company $Company
 * @property ExperienceType $ExperienceType
 * @property SubmissionType $SubmissionType
 * @property Comment $Comment
 */
class Submission extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Users' => array(
			'className' => 'Users',
			'foreignKey' => 'users_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubmissionStatus' => array(
			'className' => 'SubmissionStatus',
			'foreignKey' => 'submission_status_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Company' => array(
			'className' => 'Company',
			'foreignKey' => 'company_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'ExperienceType' => array(
			'className' => 'ExperienceType',
			'foreignKey' => 'experience_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'SubmissionType' => array(
			'className' => 'SubmissionType',
			'foreignKey' => 'submission_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Comment' => array(
			'className' => 'Comment',
			'foreignKey' => 'submission_id',
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
