<?php

class FoodTypesController extends AppController {

    var $name = 'FoodTypes';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->FoodType->recursive = 0;
        $this->set('foodTypes', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food type', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('foodType', $this->FoodType->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->FoodType->create();
            if ($this->FoodType->save($this->data)) {
                $this->Session->setFlash(__('The food type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food type could not be saved. Please, try again.', true));
            }
        }
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food type', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->FoodType->save($this->data)) {
                $this->Session->setFlash(__('The food type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food type could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->FoodType->read(null, $id);
        }
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food type', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->FoodType->delete($id)) {
            $this->Session->setFlash(__('Food type deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food type was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function admin_index() {
        $this->FoodType->recursive = 0;
        $this->set('foodTypes', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food type', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('foodType', $this->FoodType->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->FoodType->create();
            if ($this->FoodType->save($this->data)) {
                $this->Session->setFlash(__('The food type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food type could not be saved. Please, try again.', true));
            }
        }
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food type', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->FoodType->save($this->data)) {
                $this->Session->setFlash(__('The food type has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food type could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->FoodType->read(null, $id);
        }
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food type', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->FoodType->delete($id)) {
            $this->Session->setFlash(__('Food type deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food type was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
