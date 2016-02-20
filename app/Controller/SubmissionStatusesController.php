<?php
App::uses('AppController', 'Controller');
/**
 * SubmissionStatuses Controller
 *
 * @property SubmissionStatus $SubmissionStatus
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubmissionStatusesController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SubmissionStatus->recursive = 0;
		$this->set('submissionStatuses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmissionStatus->exists($id)) {
			throw new NotFoundException(__('Invalid submission status'));
		}
		$options = array('conditions' => array('SubmissionStatus.' . $this->SubmissionStatus->primaryKey => $id));
		$this->set('submissionStatus', $this->SubmissionStatus->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmissionStatus->create();
			if ($this->SubmissionStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The submission status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission status could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->SubmissionStatus->exists($id)) {
			throw new NotFoundException(__('Invalid submission status'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmissionStatus->save($this->request->data)) {
				$this->Session->setFlash(__('The submission status has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission status could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmissionStatus.' . $this->SubmissionStatus->primaryKey => $id));
			$this->request->data = $this->SubmissionStatus->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->SubmissionStatus->id = $id;
		if (!$this->SubmissionStatus->exists()) {
			throw new NotFoundException(__('Invalid submission status'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubmissionStatus->delete()) {
			$this->Session->setFlash(__('The submission status has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submission status could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
