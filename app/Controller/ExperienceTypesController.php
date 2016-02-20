<?php
App::uses('AppController', 'Controller');
/**
 * ExperienceTypes Controller
 *
 * @property ExperienceType $ExperienceType
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ExperienceTypesController extends AppController {

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
		$this->ExperienceType->recursive = 0;
		$this->set('experienceTypes', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ExperienceType->exists($id)) {
			throw new NotFoundException(__('Invalid experience type'));
		}
		$options = array('conditions' => array('ExperienceType.' . $this->ExperienceType->primaryKey => $id));
		$this->set('experienceType', $this->ExperienceType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ExperienceType->create();
			if ($this->ExperienceType->save($this->request->data)) {
				$this->Session->setFlash(__('The experience type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience type could not be saved. Please, try again.'));
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
		if (!$this->ExperienceType->exists($id)) {
			throw new NotFoundException(__('Invalid experience type'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ExperienceType->save($this->request->data)) {
				$this->Session->setFlash(__('The experience type has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The experience type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ExperienceType.' . $this->ExperienceType->primaryKey => $id));
			$this->request->data = $this->ExperienceType->find('first', $options);
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
		$this->ExperienceType->id = $id;
		if (!$this->ExperienceType->exists()) {
			throw new NotFoundException(__('Invalid experience type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ExperienceType->delete()) {
			$this->Session->setFlash(__('The experience type has been deleted.'));
		} else {
			$this->Session->setFlash(__('The experience type could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
