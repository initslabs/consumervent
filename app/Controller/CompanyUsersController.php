<?php
App::uses('AppController', 'Controller');
/**
 * CompanyUsers Controller
 *
 * @property CompanyUser $CompanyUser
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class CompanyUsersController extends AppController {

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
		$this->CompanyUser->recursive = 0;
		$this->set('companyUsers', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->CompanyUser->exists($id)) {
			throw new NotFoundException(__('Invalid company user'));
		}
		$options = array('conditions' => array('CompanyUser.' . $this->CompanyUser->primaryKey => $id));
		$this->set('companyUser', $this->CompanyUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->CompanyUser->create();
			if ($this->CompanyUser->save($this->request->data)) {
				$this->Session->setFlash(__('The company user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company user could not be saved. Please, try again.'));
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
		if (!$this->CompanyUser->exists($id)) {
			throw new NotFoundException(__('Invalid company user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->CompanyUser->save($this->request->data)) {
				$this->Session->setFlash(__('The company user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The company user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('CompanyUser.' . $this->CompanyUser->primaryKey => $id));
			$this->request->data = $this->CompanyUser->find('first', $options);
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
		$this->CompanyUser->id = $id;
		if (!$this->CompanyUser->exists()) {
			throw new NotFoundException(__('Invalid company user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->CompanyUser->delete()) {
			$this->Session->setFlash(__('The company user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The company user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
