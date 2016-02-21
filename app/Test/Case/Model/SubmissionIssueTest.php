<?php
App::uses('SubmissionIssue', 'Model');

/**
 * SubmissionIssue Test Case
 *
 */
class SubmissionIssueTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.submission_issue',
		'app.submission',
		'app.users',
		'app.submission_status',
		'app.company',
		'app.company_user',
		'app.comment',
		'app.user',
		'app.experience_type',
		'app.submission_type',
		'app.issue_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->SubmissionIssue = ClassRegistry::init('SubmissionIssue');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->SubmissionIssue);

		parent::tearDown();
	}

}
