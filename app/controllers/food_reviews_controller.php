<?php

class FoodReviewsController extends AppController {

    var $name = 'FoodReviews';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->FoodReview->recursive = 0;
        $this->set('foodReviews', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food review', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('foodReview', $this->FoodReview->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->FoodReview->create();
            if ($this->FoodReview->save($this->data)) {
                $this->Session->setFlash(__('The food review has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food review could not be saved. Please, try again.', true));
            }
        }
        $setMenus = $this->FoodReview->SetMenu->find('list');
        $users = $this->FoodReview->User->find('list');
        $stores = $this->FoodReview->Store->find('list');
        $this->set(compact('setMenus', 'users', 'stores'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food review', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->FoodReview->save($this->data)) {
                $this->Session->setFlash(__('The food review has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food review could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->FoodReview->read(null, $id);
        }
        $setMenus = $this->FoodReview->SetMenu->find('list');
        $users = $this->FoodReview->User->find('list');
        $stores = $this->FoodReview->Store->find('list');
        $this->set(compact('setMenus', 'users', 'stores'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food review', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->FoodReview->delete($id)) {
            $this->Session->setFlash(__('Food review deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food review was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function admin_index() {
        $this->FoodReview->recursive = 0;
        $this->set('foodReviews', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food review', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('foodReview', $this->FoodReview->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->FoodReview->create();
            if ($this->FoodReview->save($this->data)) {
                $this->Session->setFlash(__('The food review has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food review could not be saved. Please, try again.', true));
            }
        }
        $setMenus = $this->FoodReview->SetMenu->find('list');
        $users = $this->FoodReview->User->find('list');
        $stores = $this->FoodReview->Store->find('list');
        $this->set(compact('setMenus', 'users', 'stores'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food review', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->FoodReview->save($this->data)) {
                $this->Session->setFlash(__('The food review has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food review could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->FoodReview->read(null, $id);
        }
        $setMenus = $this->FoodReview->SetMenu->find('list');
        $users = $this->FoodReview->User->find('list');
        $stores = $this->FoodReview->Store->find('list');
        $this->set(compact('setMenus', 'users', 'stores'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food review', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->FoodReview->delete($id)) {
            $this->Session->setFlash(__('Food review deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food review was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
