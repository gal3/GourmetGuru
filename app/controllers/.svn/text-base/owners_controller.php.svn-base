<?php

class OwnersController extends AppController {

    var $name = 'Owners';
    var $components = array('Auth', 'Session',  'Email');
    var $uses = array('User', 'Store', 'Food', 'SetMenu');
    var $helpers = array('Javascript', 'Html', 'Session', 'Form');

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->set("title_for_layout", "Welcome to GourmetGuru");
    }

    /*     * *******************************
     *  Stores
     * still needs to have proper paging for add/edit
     */

    function stores() {
        $this->set("title_for_layout", "All Stores");

        $this->Store->recursive = 0;

        $this->set('stores', $this->paginate('Store', array('Store.user_id LIKE' => $this->Auth->user('id'))));
        $this->set('Actions', 'My available actions');
    }

    function store_view($id = null) {
        $this->set("title_for_layout", "Store View");
        $this->Store->recursive = 0;

        if (!$id) {
            $this->Session->setFlash(__('Invalid store', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from looking at other's info
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }           
        
        $this->set('store', $this->Store->read(null, $id));
    }

	function store_add() {
		if (!empty($this->data)) {
			$this->Store->create();
			$this->data['Store']['user_id'] = $this->Auth->user('id');
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'stores'));
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

	function store_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid store', true));
			$this->redirect(array('action' => 'index'));
		}
		
    //prevent people from editing other's info
		if($this->Store->find('count', 
				array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
        $this->Session->setFlash(__('Incorrect authorization', true));
        $this->redirect(array('action' => 'index'));
    }     		
		
		if (!empty($this->data)) {
			$this->data['Store']['user_id'] = $this->Auth->user('id');
			if ($this->Store->save($this->data)) {
				$this->Session->setFlash(__('The store has been saved', true));
				$this->redirect(array('action' => 'store_view', $this->data['Store']['id']));
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
		$this->set(compact('users', 'cuisineTypes', 'foods', 'setMenus', 'id'));
	}

	function store_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for store', true));
			$this->redirect(array('action'=>'stores'));
		}
		
    //prevent people from deleting other's stores
		if($this->Store->find('count', 
				array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
        $this->Session->setFlash(__('Incorrect authorization', true));
        $this->redirect(array('action' => 'index'));
    }   		
		
		if ($this->Store->delete($id)) {
			$this->Session->setFlash(__('Store deleted', true));
			$this->redirect(array('action'=>'stores'));
		}
		$this->Session->setFlash(__('Store was not deleted', true));
		$this->redirect(array('action' => 'stores'));
	}

    /*     * ****************************
     *  Foods
     * * still needs to conform to stores
     */

    function foods($id = null) {
    
        if (!$id) {
            $this->Session->setFlash(__('Invalid id to see foods', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from looking at other's info
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }

        $this->set("title_for_layout", "My Foods");
				$options['joins'] = array(
						array('table' => 'foods_stores',
								'type' => 'LEFT',
								'conditions' => array(
									  'Food.id = foods_stores.food_id',
								)
						)
				);
				$options['conditions'] = array(
					'foods_stores.store_id' => $id
				);
				$foods = $this->Food->find('all', $options);
				$this->paginate();
//				debug($foods);exit();
				$this->set('foods', $foods);
				$this->set('store', $this->Store->find('all', array('conditions' => array('Store.id =' => $id))));
				$this->set('id', $id);
    }
/* Not necessary to have
    function food_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('food', $this->Food->read(null, $id));
    }
*/
    function food_add($id = null) {
    
        if (!$id) {
            $this->Session->setFlash(__('Invalid id to add foods', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from adding food into other's stores
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }    
    
        if (!empty($this->data)) {
            $this->Food->create();
						$this->data['Store']['Store']['0'] = $id;
//            debug($this->data);exit();
            if ($this->Food->save($this->data)) {
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'foods', $id));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        $foodTypes = $this->Food->FoodType->find('list', array('order' => array('FoodType.name' => 'asc')));
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores', 'id'));
    }

    function food_edit($store = null, $id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid food', true));
            $this->redirect(array('action' => 'foods', $store));
        }
        
        if (!$id) {
            $this->Session->setFlash(__('Invalid id to add foods', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from editing food in my store
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $store, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }     
	      
	      //prevent "adding" food id in my store by specifying unknown food id
				if($this->Food->find('count', 
						array('conditions' => array('Food.id =' => $id))) <1){
	          $this->Session->setFlash(__('Nonexistent food', true));
	          $this->redirect(array('action' => 'index'));
	      } 	            
        
        if (!empty($this->data)) {
					  $oldData = $this->Food->find('first', array('conditions' => array('Food.id =' => $id)));
            if ($this->Food->save($this->data)) {
						  //Hmm..doing a manual cascade edit. Review this...
							$diffCost = $this->data['Food']['cost'] - $oldData['Food']['cost']; //got the difference
							$diffCal = $this->data['Food']['calorie'] - $oldData['Food']['calorie']; //got the difference
							//now apply to all setmenu containing the food

						  $this->loadModel('FoodsSetMenu');
						  $setMenus = $this->FoodsSetMenu->find('all', array('conditions' => array('FoodsSetMenu.food_id =' => $id)));
						  $this->loadModel('SetMenu');
						  foreach($setMenus as $setMenu){
						  //I have the set menu id so now we have to find the actual record and apply the cost/cal difference to it.
						  //I am well of aware this is inefficient. Fix it if you want.
			      		$oldSetMenu = $this->SetMenu->findById($setMenu['FoodsSetMenu']['set_menu_id']);
			      		$oldCost = $oldSetMenu['SetMenu']['total_cost'];
			      		$oldCal = $oldSetMenu['SetMenu']['total_calorie'];
						    $this->SetMenu->id = $setMenu['FoodsSetMenu']['set_menu_id'];
		            $this->SetMenu->saveField('total_cost', $oldCost+$diffCost);
		            $this->SetMenu->saveField('total_calorie', $oldCal+$diffCal);
						  }
//exit();   
                $this->Session->setFlash(__('The food has been saved', true));
                $this->redirect(array('action' => 'foods', $store));
            } else {
                $this->Session->setFlash(__('The food could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Food->read(null, $id);
        }
        $foodTypes = $this->Food->FoodType->find('list', array('order' => array('FoodType.name' => 'asc')));
        $setMenus = $this->Food->SetMenu->find('list');
        $stores = $this->Food->Store->find('list');
        $this->set(compact('foodTypes', 'setMenus', 'stores', 'store'));
    }
    //Use delete function in foods_controller.php. This seems to delete ALL the rows with the same store_id in the foods_stores table. 
/*
    function food_delete($store = null, $id = null) {
//    debug($store);exit();
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for food', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'foods',$store));
        }
        if ($this->Food->delete($id)) {
            $this->Session->setFlash(__('Food deleted', true));
            $this->redirect(array('controller' => 'owners', 'action' => 'foods', $store));
        }
        $this->Session->setFlash(__('Food was not deleted', true));
        $this->redirect(array('controller' => 'owners', 'action' => 'foods', $store));
    }
*/
    /*     * ****************************
     *  Set-Menu
     * still needs to conform to stores
     */

    function set_menus($id = null) {
        $this->set("title_for_layout", "My Set Menus");
        
        if (!$id) {
            $this->Session->setFlash(__('Invalid id to see set menus', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from looking at other's info
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }        
        
				$options['joins'] = array(
						array('table' => 'set_menus_stores',
								'type' => 'LEFT',
								'conditions' => array(
									  'SetMenu.id = set_menus_stores.set_menu_id',
								)
						)
				);
				$options['conditions'] = array(
					'set_menus_stores.store_id' => $id
				);
				$setMenus = $this->SetMenu->find('all', $options);
				$this->paginate();
//				debug($foods);exit();
				$this->set('setMenus', $setMenus);
				$this->set('store', $this->Store->find('all', array('conditions' => array('Store.id =' => $id))));
				$this->set('id', $id);
    }

    function set_menu_view($store = null, $id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'index'));
        }

	      //prevent people from looking at other's info
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $store, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }        
        
        //security: don't let other people see my set menus.
				if($this->Store->SetMenusStore->find('count', 
										array('conditions' => array('store_id =' => $store, 'set_menu_id =' => $id))) <1){
										$this->Session->setFlash(__('Incorrect authorization', true));
										$this->redirect(array('action' => 'index'));
				}        
        
        $this->set('setMenu', $this->SetMenu->read(null, $id));
    }

    // display a popup box that displays the comment for a food review
    function view_comment($id=null) {
        $this->set("title_for_layout", "Comment");
        $this->layout = 'popup';
        $this->loadModel('FoodReview');
        $foodReview = $this->FoodReview->findById($id);
				if($foodReview['FoodReview']['comment'] == null){
								$this->set("comment", "No comment.");
				}
				else{
	        $this->set("comment", $foodReview['FoodReview']['comment']);
        }
    }

    function set_menu_add($id = null) {
    
        if (!$id) {
            $this->Session->setFlash(__('Invalid id to add set menus', true));
            $this->redirect(array('action' => 'index'));
        }
        
	      //prevent people from adding set menus into other's stores
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $id, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }        
    
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
						$this->data['Store']['Store']['0'] = $id; //specify to save into this store

						//check if set menu contains food
						if($this->data['Food']['Food'] == null){
							$this->Session->setFlash(__('The set menu contains no food', true));
							$this->redirect(array('action' => 'set_menus', $id));
						}

						//security: check that each food you select is actually from your store
						foreach($this->data['Food']['Food'] as $food){
							if($this->Store->FoodsStore->find('count', 
													array('conditions' => array('store_id =' => $id, 'food_id =' => $food))) <1){
													$this->Session->setFlash(__('Incorrect authorization', true));
													$this->redirect(array('action' => 'index'));
							}
						}
						
            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been saved', true));
                $this->redirect(array('action' => 'set_menus', $id));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        
				//filter to show foods belonging to this restaurant only
				$options['joins'] = array(
						array('table' => 'foods_stores',
								'type' => 'LEFT',
								'conditions' => array(
									  'Food.id = foods_stores.food_id',
								)
						)
				);
				$options['conditions'] = array(
					'foods_stores.store_id' => $id
				);
				$options['order'] = array(
					'Food.name' => 'asc'
				);
				$foods = $this->Food->find('list', $options);
				
        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores', 'id'));
    }

    function set_menu_edit($store = null, $id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid set menu', true));
            $this->redirect(array('action' => 'set_menus', $store));
        }
        
	      //prevent people from looking at other's info
				if($this->Store->find('count', 
						array('conditions' => array('Store.id =' => $store, 'Store.user_id =' => $this->Auth->User('id')))) <1){
	          $this->Session->setFlash(__('Incorrect authorization', true));
	          $this->redirect(array('action' => 'index'));
	      }        
        
        //security: don't let other people edit my set menus.
				if($this->Store->SetMenusStore->find('count', 
										array('conditions' => array('store_id =' => $store, 'set_menu_id =' => $id))) <1){
										$this->Session->setFlash(__('Incorrect authorization', true));
										$this->redirect(array('action' => 'index'));
				}           
        
        if (!empty($this->data)) {
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
            
						//check if set menu contains food
						if($this->data['Food']['Food'] == null){
							$this->Session->setFlash(__('The set menu contains no food', true));
							$this->redirect(array('action' => 'set_menus', $store));
						}

						//security: check that each food you select is actually from your store
						foreach($this->data['Food']['Food'] as $food){
							if($this->Store->FoodsStore->find('count', 
													array('conditions' => array('store_id =' => $store, 'food_id =' => $food))) <1){
													$this->Session->setFlash(__('Incorrect authorization', true));
													$this->redirect(array('action' => 'index'));
							}
						}            
            
            if ($this->SetMenu->save($this->data)) {
                $this->Session->setFlash(__('The set menu has been updated', true));
                $this->redirect(array('action' => 'set_menus', $store));
            } else {
                $this->Session->setFlash(__('The set menu could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->SetMenu->read(null, $id);
        }

				//filter to show foods belonging to this restaurant only
				$options['joins'] = array(
						array('table' => 'foods_stores',
								'type' => 'LEFT',
								'conditions' => array(
									  'Food.id = foods_stores.food_id',
								)
						)
				);
				$options['conditions'] = array(
					'foods_stores.store_id' => $store
				);
				$options['order'] = array(
					'Food.name' => 'asc'
				);
				$foods = $this->Food->find('list', $options);

        $stores = $this->SetMenu->Store->find('list');
        $this->set(compact('foods', 'stores', 'store'));
    }

    function set_menu_delete($id = null) {
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

    /*     * ***************************************
     * Other pages
     */

    function history() {
        $this->set("title_for_layout", "Order History");
        $stores = $this->Store->find('list', array('conditions' => array('Store.user_id =' => $this->Auth->user('id'))));
        $this->set('stores', $stores);
        $this->loadModel('Order');

        if (!empty($this->data) && $this->data['Owner']['stores'] != null) {
		      //prevent people from looking at other's info
					if($this->Store->find('count', 
							array('conditions' => array('Store.id =' => $this->data['Owner']['stores'], 'Store.user_id =' => $this->Auth->User('id')))) <1){
		          $this->Session->setFlash(__('Incorrect authorization', true));
		          debug($this->data);
//		          $this->redirect(array('action' => 'index'));
		      }   
		    }     
				if(empty($this->data)){
	        $this->set('orders', $this->paginate('Order', array('Order.store_id LIKE' => -1)));
        }
        else{
	        $this->set('orders', $this->paginate('Order', array('Order.store_id LIKE' => $this->data['Owner']['stores'])));
        }
    }

//Mark orders as complete. Function-wise it works. But redirects did go as expected.
    /*
      function orders_complete($id = null) {
      $this->loadModel('Order');
      $this->Order->id = $id;
      $this->Order->saveField('complete', 1);
      //	    $this->redirect(array('action' => 'history'));
      }
     */

    function statistics() {
        $this->set("title_for_layout", "Statistics");
    }

    function info() {
        $this->set("title_for_layout", "Info");
    }

    function settings() {
        $this->set("title_for_layout", "Account Settings");
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));

        if (!empty($this->data)) {
            //check that the old password is correct
            if (Security::hash($this->data['Owner']['old_password'], null, true) == $user['User']['password']) {
                //check whether we're changing password ( or deactiving account )
                if (strlen($this->data['Owner']['password']) > 1) {
                    if ($this->data['Owner']['password'] == $this->data['User']['confirm_password']) {
                        //this piece of shit does not validate correctly...we can have a blank password?
                        $user['User']['password'] = Security::hash($this->data['Owner']['password'], null, true);
                        $user['User']['confirm_password'] = $this->data['User']['confirm_password'];

                        if ($this->User->save($user)) {
                            $this->Session->setFlash(__('Password updated successfully', true));
                            $this->redirect(array('action' => 'index'));
                        }
                        else
                            $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
                    }
                    else
                        $this->Session->setFlash('Your new password and confirm password do not match.');
                }

                if ($this->data['Owner']['deactivate'] == 1) {
                    $this->User->id = $user['User']['id'];
                    //need to find the group id so that aro doesn't break
									  $user = $this->User->findById($user['User']['id']);
									  $group_id = $user['User']['group_id'];                     
                    $this->User->saveField('active', 0);
				            $this->User->saveField('group_id', $group_id); //this is done so that ARO table doesn't break
                    $this->Session->setFlash("Your account has been deactivated. You may try to re-activate it again on login.");
                    $this->Auth->logout();
                    $this->redirect(array('controller' => 'home', 'action' => 'index'));
                }
            }
            else
                $this->Session->setFlash('Your old password does not match your current password.');
        }

        $this->data['Owner']['password'] = null;
        $this->data['User']['confirm_password'] = null;
        $this->data['Owner']['old_password'] = null;
    }

    function personal($id = null) {
        $this->set("title_for_layout", "Personal Information");
        $this->loadModel('User');
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
        $id = $user['User']['id'];
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
//            $this->data['User']['password'] = $this->User->field('password');
//            $this->data['User']['confirm_password'] = $this->data['User']['password'];
            $this->data["User"]["group_id"] = $this->Session->read("Auth.User.group_id");
            //the first part of the if statement is for security purposes.
            if ($this->data['User']['id'] == $id && $this->User->save($this->data)) {
                $this->Session->setFlash(__('Your information has been updated', true));
                $this->redirect(array('action' => 'personal'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
    }

    function preferences() {
        $this->set("title_for_layout", "Preferences");
    }
	
	function contact() {
        $this->set("title_for_layout", "Contact");

        if ($this->data) {
            $this->Email->smtpOptions = array(
                'port' => '465',
                'timeout' => '30',
                'host' => 'ssl://smtp.gmail.com',
                'username' => 'toopink470@gmail.com',
                'password' => 'toopinkforyou',
            );
            $this->Email->delivery = 'smtp';

            $this->set('body', $this->data['Home']['Body']);

            $this->Email->to = 'toopink470@gmail.com';
            $this->Email->subject = 'Contact Form Message: ' . $this->data['Home']['Subject'];
            $this->Email->template = 'user_contact';
            $this->Email->sendAs = 'text';
            $this->Email->send();

            $this->redirect('/owners/statistics');
        }
    }
	
}

?>
