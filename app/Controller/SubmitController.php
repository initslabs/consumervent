<?php
//This is  hack. Warning. Code very sparse!
class SubmitController extends AppController {

	public $uses = ['IssueType','SubmissionStatus','ExperienceType','Company','Submission','SubmissionIssue'];
	public $_thisUserId=0;
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
		$submissionId = $this->Session->read('submission_id');
		if (empty($this->data) && $submissionId) {
			
			$prefillForm= $this->Submission->read(null,$submissionId);
			$prefillForm['Submission']['place_name'] = $prefillForm['Company']['name'];
			$prefillForm['Submission']['place_details'] = $prefillForm['Company']['google_places_data'];
			$prefillForm['Submission']['place_website'] = $prefillForm['Company']['website'];
			$this->request->data =$prefillForm;
			return;
			
		}
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
				'review'=>$submittedData['review'],
			];
			
			$companyInfo = $this->Company->getOrCreateCompany($submittedData);
			
			$dbData['company_id']= $companyInfo['Company']['id'];
			
			if($submissionId){
				$this->Submission->id = $submissionId;
				$this->Submission->save($dbData);
				$conditions = ['SubmissionIssue.submission_id'=>$submissionId];
				$this->SubmissionIssue->deleteAll($conditions);
			}else{
				$this->Submission->create($dbData);
				$this->Submission->save($dbData);
				$submissionId = $this->Submission->id;
				$this->Session->write('submission_id',$submissionId);
			}
			
			foreach($submittedData['service_problems'] as $index=>$issueTypeId){
				$issue = ['submission_id'=>$submissionId,'issue_type_id'=>$issueTypeId]	;
				$this->SubmissionIssue->create($issue);
				$this->SubmissionIssue->save($issue);
			}			
			$this->redirect('previewSubmission');
			
		}
		
	}
	
	function previewSubmission(){//
		
		//require login
		$submissionId = $this->Session->read('submission_id');
		if(!$submissionId){
			$this->flash("We are sorry - we were not able to retrieve your session. Please fill the form again", 'submitReview');
		}
		$submissionInfo = $this->Submission->read(null,$submissionId);
		$this->set('submissionInfo',$submissionInfo);
		$conditions = ['SubmissionIssue.submission_id'=>$submissionId];
		$submissionIssues = $this->SubmissionIssue->find('all',compact('conditions'));
		$this->set('submissionIssues',$submissionIssues);
		
		if(!empty($this->data)){
			$this->Submission->id = $submissionId;
			$data = $this->request->data['Submission'];
			$data['submission_status_id']= 3;//submitted, awaiting notifications
			$data['users_id']= $this->_thisUserId;//submitted by
			$expectedFields = ['user_phone_number','user_display_name','user_email_address','submission_status_id','users_id'];
			$this->Submission->save($data,false,$expectedFields);
			$this->redirect('postSubmission');
		}
	}
	
	
	function postSubmission(){
		
		$this->Session->write('submission_id',false);
		
		
	}

}
