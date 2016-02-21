<?php
App::uses('AppModel', 'Model');
/**
 * SubmissionIssue Model
 *
 * @property Submission $Submission
 * @property IssueType $IssueType
 */
class SubmissionIssue extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'submission_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'issue_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Submission' => array(
			'className' => 'Submission',
			'foreignKey' => 'submission_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'IssueType' => array(
			'className' => 'IssueType',
			'foreignKey' => 'issue_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
