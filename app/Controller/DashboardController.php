
<?php


class DashboardController extends AppController
{


    public function beforeFilter()
    {
        parent::beforeFilter();
        $this->loadModel("Submission");
        $this->loadModel("Comment");
        $this->loadModel("CompanyUser");
        $this->loadModel("ExperienceType");
        $this->loadModel("IssueType");
        $this->loadModel("SubmissionIssue");
        $this->loadModel("SubmissionStatus");
        $this->loadModel("SubmissionType");

        $this->company_id = 9;


        $hours = array();
        $hoursSelf = array();
        for ($r = 0; $r < 24; $r++) {
            $hoursSelf[$r . ":00"] = $r . ":00";
            $hours[] = $r . ":00";
        }

        $this->hoursSelf = $hoursSelf;
        $this->hours = $hours;


    }

    public function index($company_id = "")
    {
        if ($company_id == "") {
            $company_id = 9;
        }

        $this->company_id = $company_id;


        $this->ExperienceType->recursive = 0;
        $experience_types = $this->ExperienceType->find('all');
        $issue_types = $this->IssueType->find('list');
        $submission_type = $this->SubmissionType->find('list');

        $this->set('experience_types', $experience_types);
        $this->set('issue_types', $issue_types);
        $this->set('submission_type', $submission_type);

       // dd($experience_types);

        // $hour_group = $this->Submission->query("SELECT HOUR(created) AS Hours COUNT(*) AS 'count' FROM submissions GROUP BY HOUR(created)");
        $this->set('hours', json_encode($this->hours));

        $this->setupChartHourlyReviewSubmission();
        //experience_type_id
        $this->setupChartExperienceType($experience_types);

    }

    private function setupChartExperienceType($experience_types) {
        $this->Submission->recursive = 0;
//        $this->Submission->Behaviors->load('Containable');
//        $this->Submission->contain(array('ExperienceType'));

        //dd($experience_types);
        $options = array(
            'conditions'=>null,
            'fields'=>array("COUNT(*) AS 'count'","experience_type_id"),
            'group'=>array("experience_type_id")
        );
        $data =  $this->Submission->find('all',$options);
        //dd($data);
        $dataArray = array();
        foreach($data as $d){
            $dataArray[$d['Submission']['experience_type_id']] = $d[0]['count'];
        }

        $display_array = array();
        foreach ($experience_types as $exp){
            $count = 0;

            $expType = $exp['ExperienceType'];
            if(isset($dataArray[$expType['id']])){
                $count = $dataArray[$expType['id']];
            }

            $display_array[] = "['".$expType['name']."',".$count."]";
        }
        $display_array = implode(",",$display_array);
        //dd($display_array);
//        [
//            ['Positive', 45.0],
//            ['Neutral', 8.5],
//            ['Negative', 6.2]
//        ]

        $this->set('experienceTypeChart', "[".$display_array."]");

        // $data = $this->Submission->query("SELECT COUNT(*) AS 'count',experience_type_id FROM submissions GROUP BY experience_type_id");
       // dd($datatoDisplay);
    }


    public function setupChartHourlyReviewSubmission()
    {
        $hour_group = $this->Submission->query("SELECT HOUR(created) AS Hours
  ,      COUNT(*) AS 'count'
FROM     submissions WHERE company_id = '$this->company_id' GROUP BY HOUR(created)");

        //dd($hour_group);
        $group_data = array();
        foreach ($hour_group as $group) {
            $group_data[$group[0]['Hours'] . ":00"] = $group[0]['count'];
        }

        //dd($group_data);
        $selfData = $this->hoursSelf;
        $real_data = array();
        foreach ($selfData as $data) {
            //dd($data);
            if (isset($group_data[$data])) {
                $real_data[] = $group_data[$data];
            } else {
                $real_data[] = 0;
            }
        }


        $this->set('real_data', json_encode($real_data));
    }

    public function submissions()
    {
        $options = array(
            'limit' => 1000,
            'conditions' => array('Submission.company_id' => $this->company_id),
            'order' => array('created' => 'DESC'),
            'table' => 'submissions'
        );


        $this->Submission->recursive = 2;
        $this->paginate = $options;

        $submissions = $this->paginate('Submission');
        $this->set('submissions', $submissions);

        //dd($submissions);
    }


    public function staffs()
    {
        $options = array(
            'limit' => 1000,
            'conditions' => array('CompanyUser.company_id' => $this->company_id),
            'order' => array('created' => 'DESC'),
            'table' => 'company_users'
        );

        $this->CompanyUser->recursive = 2;
        $this->paginate = $options;

        $companyUsers = $this->paginate('Submission');
        $this->set('companyUsers', $companyUsers);
    }


}
?>