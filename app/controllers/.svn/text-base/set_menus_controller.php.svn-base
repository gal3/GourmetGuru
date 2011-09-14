<?php

class SetMenusController extends AppController {

    var $name = 'SetMenus';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->SetMenu->recursive = 0;
        $this->set('setMenus', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('setMenu', $this->SetMenu->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->SetMenu->create();
            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        $foods = $this->SetMenu->Food->find('list');
        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->SetMenu->read(null, $id);
        }
        $foods = $this->SetMenu->Food->find('list');
        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores'));
    }
//this function is used by owners
    function delete($store =null, $id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for set menu', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'set_menus',$store));
        }
        
	      //prevent people from deleting my set menus
        $this->loadModel('Store');
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $store, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('controller' => 'owners', 'action' => 'index'));
	      } 
        
        if ($this->SetMenu->delete($id)) {
            $this->Session->setFlash(__('Set menu deleted', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'set_menus',$store));
        }
        $this->Session->setFlash(__('Set menu was not deleted', true));
        $this->redirect(array('controller' => 'owners', 'action' => 'set_menus',$store));
    }

/*
    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->SetMenu->delete($id)) {
            $this->Session->setFlash(__('Set menu deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Set menu was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
*/
    function admin_index() {
        $this->SetMenu->recursive = 0;
        $this->set('setMenus', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('setMenu', $this->SetMenu->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->SetMenu->create();
            //Calculate the total calorie and put it in the total calorie field.
            $totalCal = 0;
            foreach ($this->data['Food']['Food'] as $food) {
                $theFood = $this->SetMenu->Food->find('first', array('conditions' => array('Food.id' => $food)));
                $totalCal += $theFood['Food']['calorie'];
            }
            $this->data['SetMenu']['total_calorie'] = $totalCal + .1;  //MODEL CHECKING FOR DECIMAL NUMBER! CHANGE...
//			debug($this->data);
//			exit();
            //Calculate the total cost and put it in the total cost field.
            $totalCost = 0;
            foreach ($this->data['Food']['Food'] as $food) {
                $theFood = $this->SetMenu->Food->find('first', array('conditions' => array('Food.id' => $food)));
                $totalCost += $theFood['Food']['cost'];
            }
            $this->data['SetMenu']['total_cost'] = $totalCost;  //I also suspect some check is happening...but seems fine.

            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        $foods = $this->SetMenu->Food->find('list');
        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->SetMenu->read(null, $id);
        }
        $foods = $this->SetMenu->Food->find('list');
        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for set menu', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->SetMenu->delete($id)) {
            $this->Session->setFlash(__('Set menu deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Set menu was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
