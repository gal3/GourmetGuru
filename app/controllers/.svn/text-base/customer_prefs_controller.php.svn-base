<?php

class CustomerPrefsController extends AppController {

    var $name = 'CustomerPrefs';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->CustomerPref->recursive = 0;
        $this->set('customerPrefs', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid customer pref', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('customerPref', $this->CustomerPref->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->CustomerPref->create();
            if ($this->CustomerPref->save($this->data)) {
                $this->Session->setFlash(__('The customer pref has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer pref could not be saved. Please, try again.', true));
            }
        }
        $users = $this->CustomerPref->User->find('list');
        $dineTypes = $this->CustomerPref->DineType->find('list');
        $paymentMethods = $this->CustomerPref->PaymentMethod->find('list');
        $cuisineTypes = $this->CustomerPref->CuisineType->find('list');
        $this->set(compact('users', 'dineTypes', 'paymentMethods', 'cuisineTypes'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid customer pref', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->CustomerPref->save($this->data)) {
                $this->Session->setFlash(__('The customer pref has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The customer pref could not be saved. Please, try again.', true));
            }
        }

        if (empty($this->data)) {
            $this->data = $this->CustomerPref->read(null, $id);
        }
        $users = $this->CustomerPref->User->find('list');
        $dineTypes = $this->CustomerPref->DineType->find('list');
        $paymentMethods = $this->CustomerPref->PaymentMethod->find('list');
        $cuisineTypes = $this->CustomerPref->CuisineType->find('list');
        $this->set(compact('users', 'dineTypes', 'paymentMethods', 'cuisineTypes'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for customer pref', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->CustomerPref->delete($id)) {
            $this->Session->setFlash(__('Customer pref deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Customer pref was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

	function admin_index() {
		$this->CustomerPref->recursive = 0;
		$this->set('customerPrefs', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid customer pref', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('customerPref', $this->CustomerPref->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->CustomerPref->create();
			if ($this->CustomerPref->save($this->data)) {
				$this->Session->setFlash(__('The customer pref has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer pref could not be saved. Please, try again.', true));
			}
		}
		$users = $this->CustomerPref->User->find('list');
		$cuisineTypes = $this->CustomerPref->CuisineType->find('list');
		$this->set(compact('users', 'cuisineTypes'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid customer pref', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CustomerPref->save($this->data)) {
				$this->Session->setFlash(__('The customer pref has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The customer pref could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CustomerPref->read(null, $id);
		}
		$users = $this->CustomerPref->User->find('list');
		$cuisineTypes = $this->CustomerPref->CuisineType->find('list');
		$this->set(compact('users', 'cuisineTypes'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for customer pref', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CustomerPref->delete($id)) {
			$this->Session->setFlash(__('Customer pref deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Customer pref was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

}
