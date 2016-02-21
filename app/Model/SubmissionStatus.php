<?php
App::uses('AppModel', 'Model');
/**
 * SubmissionStatus Model
 *
 * @property Submission $Submission
 */
class SubmissionStatus extends AppModel {
const STATUS_PENDING = 1;
const STATUS_SUBMITTED = 2;
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Submission' => array(
			'className' => 'Submission',
			'foreignKey' => 'submission_status_id',
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
