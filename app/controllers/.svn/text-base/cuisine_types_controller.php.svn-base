<?php

class CuisineTypesController extends AppController {

    var $name = 'CuisineTypes';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->CuisineType->recursive = 0;
        $this->set('cuisineTypes', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('cuisineType', $this->CuisineType->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->CuisineType->create();
            if ($this->CuisineType->save($this->data)) {
                $this->Session->setFlash(__('The cuisine type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cuisine type could not be saved. Please, try again.', true));
            }
        }
        $customerPrefs = $this->CuisineType->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->CuisineType->save($this->data)) {
                $this->Session->setFlash(__('The cuisine type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cuisine type could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->CuisineType->read(null, $id);
        }
        $customerPrefs = $this->CuisineType->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->CuisineType->delete($id)) {
            $this->Session->setFlash(__('Cuisine type deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Cuisine type was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function admin_index() {
        $this->CuisineType->recursive = 0;
        $this->set('cuisineTypes', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('cuisineType', $this->CuisineType->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->CuisineType->create();
            if ($this->CuisineType->save($this->data)) {
                $this->Session->setFlash(__('The cuisine type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cuisine type could not be saved. Please, try again.', true));
            }
        }
        $customerPrefs = $this->CuisineType->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->CuisineType->save($this->data)) {
                $this->Session->setFlash(__('The cuisine type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The cuisine type could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->CuisineType->read(null, $id);
        }
        $customerPrefs = $this->CuisineType->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for cuisine type', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->CuisineType->delete($id)) {
            $this->Session->setFlash(__('Cuisine type deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Cuisine type was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
