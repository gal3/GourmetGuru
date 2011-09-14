<?php
class StoresController extends AppController {

	var $name = 'Stores';

    function beforeFilter() {
        parent::beforeFilter();
    }

	function index() {
		$this->Store->recursive = 0;
		$this->set('stores', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('store', $this->Store->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Store->create();
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Store->User->find('list');
		$cuisineTypes = $this->Store->CuisineType->find('list');
		$foods = $this->Store->Food->find('list');
		$setMenus = $this->Store->SetMenu->find('list');
		$this->set(compact('users', 'cuisineTypes', 'foods', 'setMenus'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Store->read(null, $id);
		}
		$users = $this->Store->User->find('list');
		$cuisineTypes = $this->Store->CuisineType->find('list');
		$foods = $this->Store->Food->find('list');
		$setMenus = $this->Store->SetMenu->find('list');
		$this->set(compact('users', 'cuisineTypes', 'foods', 'setMenus'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Store->delete($id)) {
			$this->Session->setFlash(__('Store deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Store was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Store->recursive = 0;
		$this->set('stores', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('store', $this->Store->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Store->create();
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Store->User->find('list');
		$cuisineTypes = $this->Store->CuisineType->find('list');
		$foods = $this->Store->Food->find('list');
		$setMenus = $this->Store->SetMenu->find('list');
		$this->set(compact('users', 'cuisineTypes', 'foods', 'setMenus'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The store could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Store->read(null, $id);
		}
		$users = $this->Store->User->find('list');
		$cuisineTypes = $this->Store->CuisineType->find('list');
		$foods = $this->Store->Food->find('list');
		$setMenus = $this->Store->SetMenu->find('list');
		$this->set(compact('users', 'cuisineTypes', 'foods', 'setMenus'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Store->delete($id)) {
			$this->Session->setFlash(__('Store deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Store was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>
