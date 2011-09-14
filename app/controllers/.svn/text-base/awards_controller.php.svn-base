<?php

class AwardsController extends AppController {

    var $name = 'Awards';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->Award->recursive = 0;
        $this->set('awards', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid award', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('award', $this->Award->read(null, $id));
    }
/*
    function add() {
        if (!empty($this->data)) {
            $this->Award->create();
            if ($this->Award->save($this->data)) {
                $this->Session->setFlash(__('The award has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The award could not be saved. Please, try again.', true));
            }
        }
        $users = $this->Award->User->find('list');
        $this->set(compact('users'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid award', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Award->save($this->data)) {
                $this->Session->setFlash(__('The award has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The award could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Award->read(null, $id);
        }
        $users = $this->Award->User->find('list');
        $this->set(compact('users'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for award', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Award->delete($id)) {
            $this->Session->setFlash(__('Award deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Award was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
*/
    function admin_index() {
        $this->Award->recursive = 0;
        $this->set('awards', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid award', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('award', $this->Award->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Award->create();
            if ($this->Award->save($this->data)) {
                $this->Session->setFlash(__('The award has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The award could not be saved. Please, try again.', true));
            }
        }
        $users = $this->Award->User->find('list');
        $this->set(compact('users'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid award', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Award->save($this->data)) {
                $this->Session->setFlash(__('The award has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The award could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Award->read(null, $id);
        }
        $users = $this->Award->User->find('list');
        $this->set(compact('users'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for award', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Award->delete($id)) {
            $this->Session->setFlash(__('Award deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Award was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
