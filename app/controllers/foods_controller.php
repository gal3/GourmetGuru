<?php

class FoodsController extends AppController {

    var $name = 'Foods';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->Food->recursive = 0;
        $this->set('foods', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('food', $this->Food->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Food->create();
//            debug($this->data);exit();
            if ($this->Food->save($this->data)) {
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        $foodTypes = $this->Food->FoodType->find('list');
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Food->save($this->data)) {
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Food->read(null, $id);
        }
        $foodTypes = $this->Food->FoodType->find('list');
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores'));
    }

//this function is used by owners
    function delete($store = null, $id = null) {
//    debug($store);exit();
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'foods',$store));
        }

	      //prevent people from deleting my foods
        $this->loadModel('Store');
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $store, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('controller' => 'owners', 'action' => 'index'));
	      } 
        
        //Hmm..doing a manual cascade delete. Review this...whoaaa without the security check, this would be horrible!
        $this->loadModel('FoodsSetMenu');
        $setMenus = $this->FoodsSetMenu->find('all', array('conditions' => array('FoodsSetMenu.food_id =' => $id)));
        $this->loadModel('SetMenu');
        foreach($setMenus as $setMenu){
	        $this->SetMenu->delete($setMenu['FoodsSetMenu']['set_menu_id']);
       //   debug($setMenu['FoodsSetMenu']['set_menu_id']);
        }
//exit();        
        if ($this->Food->delete($id)) {
            $this->Session->setFlash(__('Food deleted', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'foods', $store));
        }
        $this->Session->setFlash(__('Food was not deleted', true));
        $this->redirect(array('controller' => 'owners', 'action' => 'foods', $store));
    }    
    
/*
    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Food->delete($id)) {
            $this->Session->setFlash(__('Food deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
*/
    function admin_index() {
        $this->Food->recursive = 0;
        $this->set('foods', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('food', $this->Food->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Food->create();
            if ($this->Food->save($this->data)) {
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        $foodTypes = $this->Food->FoodType->find('list');
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Food->save($this->data)) {
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Food->read(null, $id);
        }
        $foodTypes = $this->Food->FoodType->find('list');
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Food->delete($id)) {
            $this->Session->setFlash(__('Food deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Food was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
