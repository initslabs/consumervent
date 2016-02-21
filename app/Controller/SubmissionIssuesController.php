<?php
App::uses('AppController', 'Controller');
/**
 * SubmissionIssues Controller
 *
 * @property SubmissionIssue $SubmissionIssue
 * @property PaginatorComponent $Paginator
 */
class SubmissionIssuesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubmissionIssue->recursive = 0;
		$this->set('submissionIssues', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmissionIssue->exists($id)) {
			throw new NotFoundException(__('Invalid submission issue'));
		}
		$options = array('conditions' => array('SubmissionIssue.' . $this->SubmissionIssue->primaryKey => $id));
		$this->set('submissionIssue', $this->SubmissionIssue->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmissionIssue->create();
			if ($this->SubmissionIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The submission issue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission issue could not be saved. Please, try again.'));
			}
		}
		$submissions = $this->SubmissionIssue->Submission->find('list');
		$issueTypes = $this->SubmissionIssue->IssueType->find('list');
		$this->set(compact('submissions', 'issueTypes'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubmissionIssue->exists($id)) {
			throw new NotFoundException(__('Invalid submission issue'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmissionIssue->save($this->request->data)) {
				$this->Session->setFlash(__('The submission issue has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission issue could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmissionIssue.' . $this->SubmissionIssue->primaryKey => $id));
			$this->request->data = $this->SubmissionIssue->find('first', $options);
		}
		$submissions = $this->SubmissionIssue->Submission->find('list');
		$issueTypes = $this->SubmissionIssue->IssueType->find('list');
		$this->set(compact('submissions', 'issueTypes'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubmissionIssue->id = $id;
		if (!$this->SubmissionIssue->exists()) {
			throw new NotFoundException(__('Invalid submission issue'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubmissionIssue->delete()) {
			$this->Session->setFlash(__('The submission issue has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submission issue could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
