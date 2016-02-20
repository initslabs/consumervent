<?php
App::uses('AppController', 'Controller');
/**
 * SubmissionTypes Controller
 *
 * @property SubmissionType $SubmissionType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class SubmissionTypesController extends AppController {

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
		$this->SubmissionType->recursive = 0;
		$this->set('submissionTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->SubmissionType->exists($id)) {
			throw new NotFoundException(__('Invalid submission type'));
		}
		$options = array('conditions' => array('SubmissionType.' . $this->SubmissionType->primaryKey => $id));
		$this->set('submissionType', $this->SubmissionType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SubmissionType->create();
			if ($this->SubmissionType->save($this->request->data)) {
				$this->Session->setFlash(__('The submission type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission type could not be saved. Please, try again.'));
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
		if (!$this->SubmissionType->exists($id)) {
			throw new NotFoundException(__('Invalid submission type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->SubmissionType->save($this->request->data)) {
				$this->Session->setFlash(__('The submission type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The submission type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('SubmissionType.' . $this->SubmissionType->primaryKey => $id));
			$this->request->data = $this->SubmissionType->find('first', $options);
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
		$this->SubmissionType->id = $id;
		if (!$this->SubmissionType->exists()) {
			throw new NotFoundException(__('Invalid submission type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->SubmissionType->delete()) {
			$this->Session->setFlash(__('The submission type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The submission type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
