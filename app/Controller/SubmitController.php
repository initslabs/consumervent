<?php

class SubmitController extends AppController {

	public $uses = ['IssueType','SubmissionStatus','ExperienceType','Company','Submission'];

	function index() {
		
	}

	function submitReview() {
		$recommendationLevels = range(0, 10);
		unset($recommendationLevels[0]);
		$recommendationLevels[1] = "1 - Not likely at all";
		$recommendationLevels[10] = "10  - Extremely likely";
		$issueTypes = $this->IssueType->getTypes();
		$experienceTypes = $this->ExperienceType->find('list');
		$this->set(compact('recommendationLevels', 'experienceTypes', 'issueTypes'));
		if (!empty($this->data) && isset($this->data['Submission'])) {
			
			$expectedFields = [
				'place_name','place_details','recommendation_level','experience_type_id','review'		  
			];
			
			$submittedData = $this->data['Submission'];
			foreach($expectedFields as $field){
				if(!array_key_exists($field, $submittedData) || $submittedData[$field]===NULL || $submittedData[$field]===""){
					switch($field){
						case 'place_name'://wahala!
//						case 'place_details'://wahala!
							$this->Session->setFlash("Please provide the name of the establishment");
							$this->request->data['Submission']['place_name']=NULL;
							$this->request->data['Submission']['place_details']=NULL;
							return;
							break;
					}
					$submittedData[$field]="";
				}else{
					$submittedData[$field] = trim($submittedData[$field]);
				}
			}
			
			$dbData = [
				'users_id'=>0,
				'submission_status_id'=>1,//pending
				'company_id'=>0,
				'experience_type_id'=>$submittedData['experience_type_id'],
				'submission_type_id'=>0,
				'user_company_contacted'=>$submittedData['user_company_contacted'],
				'recommendation_level'=>$submittedData['recommendation_level'],
			];
			
			$companyInfo = $this->Company->getOrCreateCompany($submittedData);
			
			$dbData['company_id']= $companyInfo['Company']['id'];
			$submissionId = $this->Session->read('submission_id');
			if($submissionId){
				$this->Submission->id = $submissionId;
				$this->Submission->save($dbData);
			}else{
				$this->Submission->create($dbData);
				$this->Submission->save($dbData);
				$submissionId = $this->Submission->id;
				$this->Session->write('submission_id',$submissionId);
			}
			
			
			$this->redirect('previewSubmission');
			
		}
		
	}
	
	function previewSubmission(){//
		
		//require login
		
		
		
		
	}
	

}
