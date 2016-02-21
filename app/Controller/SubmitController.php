<?php

class SubmitController extends AppController{
	
	
	function index(){
		
		
		
		
	}
	
	function submitReview(){
		$recommendationLevels = range(0,10);
		unset($recommendationLevels[0]);
		$recommendationLevels[1] = "1 - Not likely at all";
			$recommendationLevels[10] = "10  - Extremely likely";
			$experienceRating = [3=>'Positive',2=>'Neutral',1=>'Negative'];
			$issueTypes  = $this->IssueType->getTypes();
		$this->set(compact('recommendationLevels','experienceRating' ));
		
	}
	
}