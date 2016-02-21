<?php

App::uses('AppModel', 'Model');

/**
 * Company Model
 *
 * @property CompanyUser $CompanyUser
 * @property Submission $Submission
 */
class Company extends AppModel {

	/**
	 * Display field
	 *
	 * @var string
	 */
	public $displayField = 'name';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
			  'company_user_id' => array(
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
			  'CompanyUser' => array(
						 'className' => 'CompanyUser',
						 'foreignKey' => 'company_user_id',
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
			  'Submission' => array(
						 'className' => 'Submission',
						 'foreignKey' => 'company_id',
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

	function getOrCreateCompany($submittedData) {
		$placeDetails = json_decode($submittedData['place_details'],true);
		
		if (!$placeDetails) {
			$companyName = $submittedData['place_name'];
			$companyExists = $this->findByName($companyName);
			if ($companyExists) {//right now, no updates :( //@TODO allow updating of existing records
				return $companyExists;
			}
			$data = [
					'company_user_id' => 0, //this field was a mistake...need to be removed
					 'name' => $companyName,
					 'website' => isset($submittedData['place_website'])? $submittedData['place_website']:'',
			];
			
			if(($data['website'])){
				if(stripos($data['website'],'http')===false){//because of google.com versus http://google.com
					$data['domain'] = $data['website'];
				}else{
					$data['domain'] = parse_url($placeDetails['website'],PHP_URL_HOST);
				}
				
				$data['email_address'] =join(",",$this->extractEmailAddresses($data['domain']));
			}
			
			$this->create($data);
			$this->save($data);
			return $this->read(null, $this->id);
		}
		
		$placeId = $placeDetails['place_id'];
		$companyExists = $this->findByGoogleplacesid($placeId);
		if ($companyExists) {
			return $companyExists;
		}
		$data = [
				  'company_user_id' => 0, //this field was a mistake...need to be removed
				  'name' => $placeDetails['name'],
				  'googleplacesid' => $placeDetails['place_id'],
				  'googleplacesdata' => json_encode($placeDetails),//temporarily cached for further work
				  'website'=>isset($placeDetails['website'])? $placeDetails['website']:'',
				  
		];
		if(isset($placeDetails['website'])){
			$data['domain'] = parse_url($placeDetails['website'],PHP_URL_HOST);
			$data['email_address'] =join(",",$this->extractEmailAddresses($data['domain']));
		}
		$this->create($data);
		$this->save($data);
		return $this->read(null, $this->id);
	}
	
	function extractEmailAddresses($domain){
		//for now, we will use emailhunter, though we can use other services or crawl the pages...long term plan...
		//@TODO we don't need all results o! take mtnnigeria.net for example, it returns 103 email addresses :)
		if(!$domain) return [];
		try{
			$fullUrl = "https://api.emailhunter.co/v1/search?domain=$domain&api_key=d217de3bd315b383b52ffbda32640a7411bba797";
//			echo $fullUrl;
//			exit;
			$result = json_decode(file_get_contents($fullUrl),true);
			if(!$result || $result['results']==0) return [];
			$emailAddresses = [];
			foreach($result['emails'] as $row){
				$emailAddresses[] = $row['value'];
			}
			return $emailAddresses;
			
		} catch (Exception $ex) {
			return [];
		}
		
		
	}
	
	

}
