<?php
App::uses('AppModel', 'Model');
/**
 * IssueType Model
 *
 * @property Submission $Submission
 */
class IssueType extends AppModel {

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
			'foreignKey' => 'issue_type_id',
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
	
	function getTypes(){
		return $this->find('list',['order'=>['IssueType.sort_order'=>'DESC','IssueType.name']]);
	}

}
