<?php
App::uses('AppController', 'Controller');
/**
 * IssueTypes Controller
 *
 * @property IssueType $IssueType
 * @property PaginatorComponent $Paginator
 */
class IssueTypesController extends AppController {

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
		$this->IssueType->recursive = 0;
		$this->set('issueTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->IssueType->exists($id)) {
			throw new NotFoundException(__('Invalid issue type'));
		}
		$options = array('conditions' => array('IssueType.' . $this->IssueType->primaryKey => $id));
		$this->set('issueType', $this->IssueType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->IssueType->create();
			if ($this->IssueType->save($this->request->data)) {
				$this->Session->setFlash(__('The issue type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue type could not be saved. Please, try again.'));
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
		if (!$this->IssueType->exists($id)) {
			throw new NotFoundException(__('Invalid issue type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->IssueType->save($this->request->data)) {
				$this->Session->setFlash(__('The issue type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The issue type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('IssueType.' . $this->IssueType->primaryKey => $id));
			$this->request->data = $this->IssueType->find('first', $options);
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
		$this->IssueType->id = $id;
		if (!$this->IssueType->exists()) {
			throw new NotFoundException(__('Invalid issue type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->IssueType->delete()) {
			$this->Session->setFlash(__('The issue type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The issue type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
