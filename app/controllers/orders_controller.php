<?php

class OrdersController extends AppController {

    var $name = 'Orders';

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->Order->recursive = 0;
        $this->set('orders', $this->paginate());
    }

    function view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid order', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('order', $this->Order->read(null, $id));
    }

    function add() {
        if (!empty($this->data)) {
            $this->Order->create();
            if ($this->Order->save($this->data)) {
                $this->Session->setFlash(__('The order has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
            }
        }
        $users = $this->Order->User->find('list');
        $paymentMethods = $this->Order->PaymentMethod->find('list');
        $addresses = $this->Order->Address->find('list');
        $setMenus = $this->Order->SetMenu->find('list');
        $this->set(compact('users', 'paymentMethods', 'addresses', 'setMenus'));
    }

    function edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid order', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Order->save($this->data)) {
                $this->Session->setFlash(__('The order has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Order->read(null, $id);
        }
        $users = $this->Order->User->find('list');
        $paymentMethods = $this->Order->PaymentMethod->find('list');
        $addresses = $this->Order->Address->find('list');
        $setMenus = $this->Order->SetMenu->find('list');
        $this->set(compact('users', 'paymentMethods', 'addresses', 'setMenus'));
    }

    function delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for order', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Order->delete($id)) {
            $this->Session->setFlash(__('Order deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Order was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

    function admin_index() {
        $this->Order->recursive = 0;
        $this->set('orders', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid order', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('order', $this->Order->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->Order->create();
            //Calculate the total calorie and put it in the total calorie field.
            $totalCal = 0;
            $setMenuId = $this->data['Order']['set_menu_id'];
            $set = $this->Order->SetMenu->find('first', array('conditions' => array('SetMenu.id' => $setMenuId)));
            $totalCal = $set['SetMenu']['total_calorie'];

            $this->data['Order']['total_calorie'] = $totalCal + .1;  //MODEL CHECKING FOR DECIMAL NUMBER! CHANGE...
            // debug($totalCal);
            // exit();
//Calculate the total cost and put it in the total cost field.
            $totalCost = 0;
            $setMenuId = $this->data['Order']['set_menu_id'];
            $set = $this->Order->SetMenu->find('first', array('conditions' => array('SetMenu.id' => $setMenuId)));
            $totalCost = $set['SetMenu']['total_cost'];

            $this->data['Order']['total_amount'] = $totalCost;
            // debug($totalCost);
            // exit();

            if ($this->Order->save($this->data)) {
                $this->Session->setFlash(__('The order has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
            }
        }
        $users = $this->Order->User->find('list');
        $stores = $this->Order->Store->find('list');
        $paymentMethods = $this->Order->PaymentMethod->find('list');
        $addresses = $this->Order->Address->find('list');
        $setMenus = $this->Order->SetMenu->find('list');
        $this->set(compact('users', 'paymentMethods', 'addresses', 'setMenus', 'stores'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid order', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->Order->save($this->data)) {
                $this->Session->setFlash(__('The order has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The order could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Order->read(null, $id);
        }
        $users = $this->Order->User->find('list');
        $paymentMethods = $this->Order->PaymentMethod->find('list');
        $addresses = $this->Order->Address->find('list');
        $setMenus = $this->Order->SetMenu->find('list');
        $this->set(compact('users', 'paymentMethods', 'addresses', 'setMenus'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for order', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->Order->delete($id)) {
            $this->Session->setFlash(__('Order deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Order was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }

}
