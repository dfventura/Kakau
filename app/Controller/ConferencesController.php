<?php
App::uses('AppController', 'Controller');
/**
 * Conferences Controller
 *
 * @property Conference $Conference
 * @property PaginatorComponent $Paginator
 */
class ConferencesController extends AppController {

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
		$this->Conference->recursive = 0;
		$this->set('conferences', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Conference->exists($id)) {
			throw new NotFoundException(__('Invalid conference'));
		}
		
		$conference = $this->Conference->find('first', array(
			'contain' => array(
				'Device',
				'Photo'
			),
			'conditions' => array(
				'Conference.id' => $id
			)
		));
		//debug($conference);
		$this->set('conference',$conference );

		
		$items = $this->Conference->Item->find('all', array(
			'contain' => array(
				'Product',
				'Unit'
			),
			'conditions' => array(
				'Item.conference_id' => $id
			)
		));
		//debug($items);
		$this->set('items',$items );
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Conference->create();
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'));
			}
		}
		$devices = $this->Conference->Device->find('list');
		$this->set(compact('devices'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Conference->exists($id)) {
			throw new NotFoundException(__('Invalid conference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Conference->save($this->request->data)) {
				$this->Session->setFlash(__('The conference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The conference could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Conference.' . $this->Conference->primaryKey => $id));
			$this->request->data = $this->Conference->find('first', $options);
		}
		$devices = $this->Conference->Device->find('list');
		$this->set(compact('devices'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Conference->id = $id;
		if (!$this->Conference->exists()) {
			throw new NotFoundException(__('Invalid conference'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Conference->delete()) {
			$this->Session->setFlash(__('The conference has been deleted.'));
		} else {
			$this->Session->setFlash(__('The conference could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
