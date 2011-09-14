<?php

class CustomersController extends AppController {

    var $name = 'Customers';
    var $components = array('Auth', 'Session', 'RequestHandler', 'Email');
    var $uses = array('User', 'Store', 'SetMenu', 'CustomerPref', 'Food', 'Order', 'Address', 'PaymentMethod', 'CuisineType', 'CuisineTypesCustomerPref');
    var $helpers = array('Javascript', 'Html', 'Session', 'Form', 'Js');

    function beforeFilter() {
        parent::beforeFilter();
    }

    function index() {
        $this->set("title_for_layout", "Welcome to GourmetGuru");
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

    // All day suggestions
    function suggestions() {
        $this->set("title_for_layout", "Suggestions");
        $this->_suggest('Anytime');
    }

    // Breakfast specific foods
    function suggest_breakfast() {
        $this->set("title_for_layout", "Dinner Suggestions");
        $this->_suggest('Breakfast');
    }

    //Lunch specific foods
    function suggest_lunch() {
        $this->set("title_for_layout", "Lunch Suggestions");
        $tmp = $this->_suggest('Lunch');
    }

    // Dinner spcific foods
    function suggest_dinner() {
        $this->set("title_for_layout", "Dinner Suggestions");
        $this->_suggest('Dinner');
    }

    // display compelted orders, and calculate favorite
    function suggest_favorite() {
        $this->set("title_for_layout", "Your Favorites Suggestion");
        $orders = $this->Order->findAllByUser_id($this->Auth->user('id'));

        foreach ($orders as $order) {
            //check if the order is complete yet
            //set it to complete if yes, cache the time left to display if not
            if ($order['Order']['complete'] == 0) {
                $order_id = $order['Order']['id'];
                $set_menu = $this->SetMenu->findById($order['Order']['set_menu_id']);
            }
        }

        $this->paginate = array(
            'Order' => array(
                'limit' => 5,
                'conditions' => array(
                    'Order.user_id LIKE' => $this->Auth->user('id')
            )));

        $suggestSetMenu = $this->paginate('Order');
        $count = count($suggestSetMenu);
        $this->set(compact('count'));
        return $this->set(compact('suggestSetMenu'));
    }

    function current_pref() {
        $this->_suggest('');
    }

    // finds current customer preferences
    function _suggest($dine) {
        /*         * **********************
         * Suggest several set menus
         * 1) retrieve calorie and budget
         *   - found in customer_pref
         *   - using current user id, find CP with uid
         * 2)retrieve total cal and total cost of set menu that fits the info from 1)  
         * 3) get info of dinein/out, devlivery
         */

        $currentUID = $this->Auth->user('id');
        $cp = $this->CustomerPref->findByUserId($currentUID);
        $cpID = $cp['CustomerPref']['id'];
        $cpCalorie = $cp['CustomerPref']['calorie'];
        $cpBudget = $cp['CustomerPref']['budget'];

        // 3) get info of dine-in/take-out/delivery
        $cpDineIn = $cp['CustomerPref']['dine_in'];
        $cpTakeOut = $cp['CustomerPref']['take_out'];
        $cpDelivery = $cp['CustomerPref']['delivery'];

        // Make into list, and put into string

        $fitDineType = array();
        $dineType = "<ul>";
        if ($cpDineIn) {
            $dineType .= "<li>Dine-in</li>";
            $fitDineType[] = array('Store.dine_in LIKE' => 1);
        }
        if ($cpTakeOut) {
            $dineType .= "<li>Take-out</li>";
            $fitDineType[] = array('Store.takeout LIKE' => 1);
        }
        if ($cpDelivery) {
            $fitDineType[] = array('Store.delivery LIKE' => 1);
            $dineType .= "<li>Delivery</li>";
        }
        if (!$cpDineIn && !$cpTakeOut && !$cpDelivery) {
            $fitDineType[] = array('Store.dine_in LIKE' => 1);
            $fitDineType[] = array('Store.takeout LIKE' => 1);
            $fitDineType[] = array('Store.delivery LIKE' => 1);
            $dineType .= "<i>You have not selected any dining type so this will not be considered in suggestions.</i>";
        }
        $dineType .= "</ul>";

        $this->set(compact('cpCalorie'));
        $this->set(compact('cpBudget'));
        $this->set(compact('dineType'));

        /*         * ***********************
         * Determine which set_menu that would fit user's preference
         * 1) split cal and budget into 3 meals
         * 2) search using calorie/budget
         * 3) retrieve dine type info. find store related to set menua and look at that store's info
         */

        // 1) calculate calorie/budget for specific dine type $dine
        $tmp = $this->_convertToSeperateMeal($cpCalorie, $cpBudget, $dine);
        $cpCalorie = $tmp[0];
        $cpBudget = $tmp[1];
        // set up calorie/budget conditions
        $fitCalorieBudget = array('SetMenu.total_calorie <=' => $cpCalorie,
            'SetMenu.total_cost <=' => $cpBudget);

        // loop through each cuisinetype in custer pref
        // join customer pref and habtm cuisine type tables
        $this->paginate = array(
            'CustomerPref' => array(
                'recursive' => 1,
                'conditions' => array('CustomerPref.user_id LIKE' => $this->Auth->user('id')),
                'joins' => array(
                    array(
                        'table' => 'cuisine_types_customer_prefs',
                        'alias' => 'CuisineTypesCustomerPref',
                        'type' => 'inner',
                        'conditions' => array(
                            'CuisineTypesCustomerPref.customer_pref_id = CustomerPref.id')
                    ),
                    array(
                        'table' => 'cuisine_types',
                        'alias' => 'CuisineType',
                        'type' => 'left',
                        'conditions' => array(
                            'CuisineType.id = CuisineTypesCustomerPref.cuisine_type_id',
                        )
                    )
            )));

        $tmp = $this->paginate('CustomerPref');
        $fitCuisineType = array();
        $cuisineType = "<ul>";
        if (count($tmp) == 0) {
            $cuisineType .= "<i>You have not selected any cuisine type so this will not be considered in suggestions.</i>";
            // this is just to say ignore cuisinetype matching
            $fitCuisineType[] = array('CuisineType.name <>' => '');
        } else {
            foreach ($tmp[0]['CuisineType'] as $t) {
                // for each cuising type, append condition
                $fitCuisineType[] = array('CuisineType.name LIKE' => $t['name']);
                $cuisineType .= "<li>" . $t['name'] . "</li>";
            }
        }
        $cuisineType .= "</ul>";
        $this->set(compact('cuisineType'));

        // apply conditions and obtain set menus
        if ($dine != '')
            return $this->_finalSuggest($fitCalorieBudget, $fitDineType, $fitCuisineType, $dine);
    }

    // split cal and budget according to percentage of cal/budget intake
    function _convertToSeperateMeal($calorie, $budget, $dineType) {

        if ($dineType == 'Breakfast') {
            // for breakfast:   25% for total cal and budget
            $calorie = $calorie * 0.25;
            $budget = $budget * 0.25;
        } else if ($dineType == 'Lunch') {
            // for lunch:       40%
            $calorie = $calorie * .4;
            $budget = $budget * 0.3;
        } else if ($dineType == 'Dinner') {
            // for dinner:      35%
            $calorie = $calorie * .35;
            $budget = $budget * 0.45;
        } else if ($dineType == 'Anytime') {
            // for anytime, just do 1/3 of total
            $calorie = $calorie / 3;
            $budget = $budget / 3;
        }
        $tmp = array($calorie, $budget, $dineType);
        $this->set('ratio', $tmp);
        return $tmp;
    }

    // searches for suggestions based on basic preferences
    function _suggestionJoinByFoodType($randomFit, $fitCalorieBudget, $fitDineType, $fitCuisineType, $foodCri) {
        $foodType = array();
        if ($foodCri != 'Anytime')
        // make it strict if its not anytime
            $foodType[] = array('FoodType.name LIKE' => $foodCri);
        else
        // don't make restul more strict
            $foodType[] = array('FoodType.id > ' => 0);

        // join in paginate to keep formatting of cake's paginator
        $this->paginate = array(
            'SetMenu' => array(
                'fields' => array('DISTINCT SetMenu.id, SetMenu.*'),
                'limit' => 5,
                'recursive' => 2,
                'conditions' => array(
                    'AND' => $fitCalorieBudget
                ),
                'joins' => array(
                    array(
                        'table' => 'set_menus_stores',
                        'alias' => 'SetMenusStore',
                        'type' => 'inner',
                        'conditions' => array(
                            'SetMenusStore.set_menu_id = SetMenu.id',
                            'SetMenu.id >' => $randomFit
                        )
                    ),
                    array(
                        'table' => 'stores',
                        'alias' => 'Store',
                        'type' => 'inner',
                        'conditions' => array(
                            'Store.id = SetMenusStore.store_id',
                            'OR' => $fitDineType
                        )
                    ),
                    array(
                        'table' => 'cuisine_types',
                        'alias' => 'CuisineType',
                        'type' => 'inner',
                        'conditions' => array(
                            'CuisineType.id = Store.cuisine_type_id',
                            'OR' => $fitCuisineType
                        )
                    ),
                    array(
                        'table' => 'foods_set_menus',
                        'alias' => 'FoodsSetMenu',
                        'type' => 'inner',
                        'conditions' => array(
                            'FoodsSetMenu.set_menu_id = SetMenu.id'
                        )
                    ),
                    array(
                        'table' => 'foods',
                        'alias' => 'Food',
                        'type' => 'inner',
                        'conditions' => array(
                            'Food.id = FoodsSetMenu.food_id'
                    )),
                    array(
                        'table' => 'food_types',
                        'alias' => 'FoodType',
                        'type' => 'inner',
                        'conditions' => array(
                            'FoodType.id = Food.food_type_id',
                            'OR' => $foodType
                        )
                    )
            ))
            
        );


        return $suggestSetMenu = $this->paginate('SetMenu');
    }

    // provide a final list of suggestions
    function _finalSuggest($fitCalorieBudget, $fitDineType, $fitCuisineType, $foodType) {

        // get the max number of set menus available that fits the needs
        $full = $this->_suggestionJoinByFoodType(0, $fitCalorieBudget, $fitDineType, $fitCuisineType, $foodType);
        $countFull = count($full);

        $randID = $this->_randomizeSuggetions($countFull);
        
        $suggestSetMenu = $this->_suggestionJoinByFoodType($randID, $fitCalorieBudget, $fitDineType, $fitCuisineType, $foodType);


        // loop through each setmenu
        // find store that has what the cp had
        // needs to return a paginated set
        $count = count($suggestSetMenu);
        $this->set(compact('count'));
        return $this->set(compact('suggestSetMenu'));
    }

    function _randomizeSuggetions($max) {
        // get the max ID of set menus
        // do a random so that the suggestions will need to be above this number
        $new = $max;
        if ($max > 5)
            $new = rand(0, $max - 4);
        return $new;
        // if its not more than 6, then no point randomizing the list
    }

    /*  function _suggestionJoinByFoodType($fitCalorieBudget, $fitDineType, $fitCuisineType, $foodType) {

      $this->paginate = array(
      'SetMenu' => array(
      'limit' => 5,
      'recursive' => 2,
      'conditions' => array(
      'AND' => $fitCalorieBudget
      ),
      'joins' => array(
      array(
      'table' => 'set_menus_stores',
      'alias' => 'SetMenusStore',
      'type' => 'inner',
      'conditions' => array(
      'SetMenusStore.set_menu_id = SetMenu.id'
      )
      ),
      array(
      'table' => 'stores',
      'alias' => 'Store',
      'type' => 'inner',
      'conditions' => array(
      'Store.id = SetMenusStore.store_id',
      'OR' => $fitDineType
      )
      ),
      array(
      'table' => 'cuisine_types',
      'alias' => 'CuisineType',
      'type' => 'inner',
      'conditions' => array(
      'CuisineType.id = Store.cuisine_type_id',
      'OR' => $fitCuisineType
      )
      ),
      array(
      'table' => 'foods_set_menus',
      'alias' => 'FoodsSetMenu',
      'type' => 'inner',
      'conditions' => array(
      'FoodsSetMenu.set_menu_id = SetMenu.id'
      )
      ),
      array(
      'table' => 'foods',
      'alias' => 'Food',
      'type' => 'inner',
      'conditions' => array(
      'Food.id = FoodsSetMenu.food_id'
      )),
      array(
      'table' => 'food_types',
      'alias' => 'FoodType',
      'type' => 'inner',
      'conditions' => array(
      'FoodType.id = Food.food_type_id',
      'FoodType.name LIKE' => $foodType
      )
      )
      )));


      $suggestSetMenu = $this->paginate('SetMenu');
      //debug($suggestSetMenu);
      // loop through each setmenu
      // find store that has what the cp had
      // needs to return a paginated set
      $count = count($suggestSetMenu);
      $this->set(compact('count'));
      return $this->set(compact('suggestSetMenu'));
      } */

    function browseAllSetMenus() {
        // Allow user to browse through all set menus
        $this->set("title_for_layout", "Browse All Set Menus");
        $this->SetMenu->recursive = 0;
        $this->set('setMenus', $this->paginate('SetMenu'));
    }

    // display completed orders, and calculate favorite
    function orders() {
        $this->set("title_for_layout", "Orders");
        $orders = $this->Order->findAllByUser_id($this->Auth->user('id'));

        foreach ($orders as $order) {
            //check if the order is complete yet
            //set it to complete if yes, cache the time left to display if not
            if ($order['Order']['complete'] == 0) {
                $order_id = $order['Order']['id'];
                $set_menu = $this->SetMenu->findById($order['Order']['set_menu_id']);
                $prep_time = $set_menu['SetMenu']['prepare_time'];
                //get the difference between the current time and the time the order was created plus the time to prepare the order
                $time = $this->Order->query("SELECT TIMEDIFF(NOW(), ADDTIME(orders.created, \"$prep_time\")) from orders where orders.id=$order_id;");

                //super retarded way to retrieve a value with a super retarded index...thank you cakephp
                foreach ($time[0][0] as $timeVal) {
                    if (substr($timeVal, 0, 1) != '-') { //order should be complete now
                        $order['Order']['complete'] = 1;
                        $this->Order->save($order);
                    } else { //cache the time that is left for the order to complete to be displayed in the view
                        list($hour, $minute, $second) = split(":", $timeVal);
                        $timeLeft[$order['Order']['id']]["hours"] = str_replace("-", "", $hour);
                        $timeLeft[$order['Order']['id']]["minutes"] = $minute;
                        $timeLeft[$order['Order']['id']]["seconds"] = $second;
                        $this->set('timeLeft', $timeLeft);
                    }
                }
            }
        }
				//sort based on order date
        $this->paginate = array(
            'order' => array('Order.created' => 'desc'),
            'conditions' => array('Order.user_id LIKE' => $this->Auth->user('id')
                ));

        $this->set('orders', $this->paginate('Order'));
    }

    function order_directions($order_id = null) {
        $this->set("title_for_layout", "Directions");
        $this->layout = 'directions';

        $this->set('order', $this->Order->findById($order_id));
    }

    function food_reviews_new($id = null) {
        $orders = $this->Order->findById($id);
        $this->loadModel('SetMenusStore');
        $stores = $this->SetMenusStore->findBySetMenuId($orders['Order']['set_menu_id']);
        $this->loadModel('FoodReview');
        
        //security. Do not let other people review my orders
				if($this->Auth->User('id') != $orders['Order']['user_id']){
					$this->Session->setFlash(__('Incorrect authorization', true));
					$this->redirect(array('action' => 'index'));
				}    

        if (!empty($this->data['FoodReview']['rating'])) {
            $this->FoodReview->create();
            //Get the order details and populate the fields for this review
            $this->data['FoodReview']['store_id'] = $stores['SetMenusStore']['store_id'];
            $this->data['FoodReview']['set_menu_id'] = $orders['Order']['set_menu_id'];
            $this->data['FoodReview']['user_id'] = $orders['Order']['user_id'];
						
						//security check: rating must be within range 1 to 5
						if($this->data['FoodReview']['rating'] < 0){
							$this->data['FoodReview']['rating'] = 0;
						}
						else if($this->data['FoodReview']['rating'] > 5){
							$this->data['FoodReview']['rating'] = 5;
						}

            if ($this->FoodReview->save($this->data)) {
                $this->Session->setFlash(__('Your food review has been saved', true));
                //calculate the new average rating for the set_menu item which is based on user reviews
                $set_menu_id = $orders['Order']['set_menu_id'];
                $this->SetMenu->id = $set_menu_id;
                $average = $this->FoodReview->query("select AVG(rating) from food_reviews where set_menu_id=$set_menu_id");
                $this->SetMenu->set('rating', $average[0][0]['AVG(rating)']);
                $this->SetMenu->save();
                $this->redirect(array('action' => 'food_reviews'));
            } else
                $this->Session->setFlash(__('Your food review could not be saved. Please, try again.', true));
        }

        $this->loadModel('Store');
        $storeName = $this->Store->findById($stores['SetMenusStore']['store_id']);
        $this->set('store', $storeName);
        $this->set('order', $orders);
    }

//display the checkout_confirm view again when the user wants to see his/her order details after ordering
    function orders_details($id = null) {
        $this->set("title_for_layout", "Order Details");

        if (!$id) {
            $this->Session->setFlash(__('Invalid id for order details', true));
            $this->redirect(array('action' => 'orders'));
        }
				
        $user_id = $this->Auth->User('id');
        //prevent people from looking at other's info        
				if($this->Order->find('count', array('conditions' => array('Order.id =' => $id, 'Order.user_id =' => $user_id))) < 1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }  				
				
				//find the order
        $order = $this->Order->findById($id);
        $set_menu = $this->SetMenu->findById($order['Order']['set_menu_id']);

        $this->set('address', $order);
        $this->set('payment', $order);
        $this->set('order', $set_menu);

        //this page is for display only, so let's not show the user the submit button again
        $this->set('displayOnly', true);

        $this->set('deliveryType', $order['Order']['delivery_type']);
        $this->set('referer', $this->referer());

        $this->loadModel('PaymentType');
        $paymentType = $this->PaymentType->findById($order['PaymentMethod']['payment_type_id']);
        $this->set('paymentType', $paymentType);

        //show checkout_confirm view
        $this->render('checkout_confirm');
    }

    function checkout($id = null) {
        $this->set("title_for_layout", "Checkout");

        //get user for id
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
        //get customerpref for id
        $customerPref = $this->CustomerPref->findByUser_id($user['User']['id']);
        //get paymentmethods of user
        $payments = $this->PaymentMethod->findAllByCustomer_pref_id($customerPref['CustomerPref']['id']);
        //must have at least one payment method before checking out an item
        if (empty($payments)) {
            $this->Session->setFlash('Please add a payment method.');
            $this->redirect(array('action' => 'payment_add', 'checkout', $id));

            return;
        }

        $this->set('payments', $payments);

        //get addresses of user
        $addresses = $this->Address->findAllByCustomer_pref_id($customerPref['CustomerPref']['id']);

        //must have at least one delivery address method before checking out an item
        //this could be improved as the user wanted to dine in/takeout, does not need to provide an address
        if (empty($addresses)) {
            $this->Session->setFlash('Please add a delivery address method.');
            $this->redirect(array('action' => 'addresses_add', 'checkout', $id));

            return;
        }

        $set_menu = $this->SetMenu->findById($id);

        $this->set('store', $set_menu['Store'][0]);
        $this->set('addresses', $addresses);
        $this->set('referer', $this->referer());
        $this->set('id', $id);
    }

    //display order details
    function checkout_confirm() {
        $this->set("title_for_layout", "Confirm Your Order Details");

        if (empty($this->data)) {
            $this->redirect(array('action' => 'suggestions'));

            return;
        }

        $this->set('deliveryType', $this->data['Customer']['Delivery Type']);
        
        //find customer preference id to do security check
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));        

        //prevent people from selecting other's addresses
				if($this->Address->find('count', array('conditions' => 
								array('Address.id =' => $this->data['Customer']['Delivery Address'], 
											'Address.customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }

        $address = $this->Address->findById($this->data['Customer']['Delivery Address']);
        $this->set('address', $address);

        //prevent people from selecting other's payment methods
				if($this->PaymentMethod->find('count', array('conditions' => 
								array('PaymentMethod.id =' => $this->data['Customer']['Payment Method'], 
											'PaymentMethod.customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }

        $payment = $this->PaymentMethod->findById($this->data['Customer']['Payment Method']);
        $this->set('payment', $payment);

        $order = $this->SetMenu->findById($this->data['Customer']['id']);
        $this->set('order', $order);
        $this->set('displayOnly', false);
        $this->loadModel('PaymentType');
        $paymentType = $this->PaymentType->findById($payment['PaymentMethod']['payment_type_id']);
        $this->set('paymentType', $paymentType);
    }

//save the order to the database when the user has confirmed it
//note that this function does not have its own view
    function confirmed() {
        $this->autoRender = false;
        //logic for new order
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));

        //allow one new order every 1minutes
        if ($this->__blockNewOrders(1, $user['User']['id'])) {
            $this->redirect(array('action' => 'index'));
            return;
        }

        //find customer preference id to do security check
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));        

        //prevent people from selecting other's addresses
				if($this->Address->find('count', array('conditions' => 
								array('Address.id =' => $this->data['Customer']['address_id'], 
											'Address.customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }

        //prevent people from selecting other's payment methods
				if($this->PaymentMethod->find('count', array('conditions' => 
								array('PaymentMethod.id =' => $this->data['Customer']['payment_method_id'], 
											'PaymentMethod.customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }

        //load the foreign key values
        $this->Order->set('user_id', $user['User']['id']);
        $this->Order->set('address_id', $this->data['Customer']['address_id']);
        $this->Order->set('delivery_type', $this->data['Customer']['deliveryType']);
        $this->Order->set('payment_method_id', $this->data['Customer']['payment_method_id']);
        $this->Order->set('set_menu_id', $this->data['Customer']['set_menu_id']);
        $this->loadModel('SetMenusStore'); //get store id
        $store = $this->SetMenusStore->findBySetMenuId($this->data['Customer']['set_menu_id']);
        $this->Order->set('store_id', $store['SetMenusStore']['store_id']);
        $setMenu = $this->SetMenu->findById($this->data['Customer']['set_menu_id']); //copy over total cal/cost
        $this->Order->set('total_calorie', $setMenu['SetMenu']['total_calorie']);
        $this->Order->set('total_amount', $setMenu['SetMenu']['total_cost']);

        if ($this->Order->save())
            $this->Session->setFlash('Your order has been successfuly submitted!');
        else
            $this->Session->setFlash('An unexpected error occured that prevent your order from being completed!');

        $this->redirect(array('action' => 'orders'));
    }

    //block the new order of a user if their last order was less than $blockTime minutes ago
    function __blockNewOrders($blockTime, $user_id) {
        $time = $this->Order->query("select TIMEDIFF( NOW(), orders.created) from orders where user_id=$user_id ORDER BY orders.created DESC LIMIT 1");

        //dont need to do anything if the user never made an order before
        if (!empty($time)) {
            //super retarded way to retrieve the time...the third index for time is retarded
            foreach ($time[0][0] as $timeVal) {
                list($hour, $minute, $second) = split(":", $timeVal);
            }

            //block order
            if ($minute < $blockTime) {
                $this->Session->setFlash("You may not make new orders more often than once every $blockTime minutes.");

                return true;
            }
        }

        return false;
    }

    function statistics() {
        $this->set("title_for_layout", "Statistics");
        //grab user for the user whos signed in
        $currentUID = $this->Auth->user('id');
        //first chart: what type of food the user has been eating, 
        //requires Orders, Store -> cuisine type;
        $orderList = $this->Order->findAllByUserId($currentUID);
        //debug($orderList);
        //this array refers to the type of food users have been eating
        $typeOfFood = array();
        foreach ($orderList as $order) {
            $store = $this->Store->findById($order['Order']['store_id']);
            $cuisineTypeId = $store['Store']['cuisine_type_id'];
            $cuisineType = $this->CuisineType->findById($cuisineTypeId);
            array_push($typeOfFood, $cuisineType['CuisineType']['name']);
        }
        $result = array_count_values($typeOfFood);
        $this->set(compact('result'));


        //% of people that like specific foods
        $allPref = $this->CuisineTypesCustomerPref->find('all');
        //grab all the cuisine type ids
        $prefTypes = array();
        foreach ($allPref as $v) {
            array_push($prefTypes, $v['CuisineTypesCustomerPref']['cuisine_type_id']);
        }


        $prefTypesNameArr = array();
        for ($i = 0; $i < count($prefTypes); $i++) {
            $temp2 = $this->CuisineType->findById($prefTypes[$i]);
            array_push($prefTypesNameArr, $temp2['CuisineType']['name']);
        }
        $result2 = array_count_values($prefTypesNameArr);
        $this->set(compact('result2'));
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

            $this->redirect('/customers/statistics');
        }
    }

    function achievements() {
        $this->set("title_for_layout", "Achievements");
		
		$currentUID = $this->Auth->user('id');
		 $orderList = $this->Order->findAllByUserId($currentUID);
		 $ach1 = false;
		 if(!empty($orderList)) $ach1 = true;
		 $this->set(compact('ach1'));
		
    }

    function settings() {
        $this->set("title_for_layout", "Account Settings");
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));

        if (!empty($this->data)) {
            //check that the old password is correct
            if (Security::hash($this->data['Customer']['old_password'], null, true) == $user['User']['password']) {
                //check whether we're changing password ( or deactiving account )
                if (strlen($this->data['Customer']['password']) > 1) {
                    if ($this->data['Customer']['password'] == $this->data['User']['confirm_password']) {
                        $user['User']['password'] = Security::hash($this->data['Customer']['password'], null, true);

                        //note that we can only validate the confirm_password as the real password is hashed
                        //this line MUST be here for validation on password to work
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

                //deactivate user account and log them out
                if ($this->data['Customer']['deactivate'] == 1) {
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

        $this->data['Customer']['password'] = null;
        $this->data['User']['confirm_password'] = null;
        $this->data['Customer']['old_password'] = null;
    }

    function personal($id = null) {
        $this->set("title_for_layout", "Personal Information");
				$id = $this->Auth->user('id');
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        
        if (!empty($this->data)) {
//debug($this->data); exit();
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

    function preferences($id = null, $referer=null) {
        $this->set("title_for_layout", "Preferences");
        //find my preferences
        $user_id = $this->Auth->User('id');
        $custPref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));
        $id = $custPref['CustomerPref']['id'];

        if (!$id && empty($this->data)) {//new preference
            $this->CustomerPref->create();
        }
        
        if (!empty($this->data)) {
            $this->data['CustomerPref']['user_id'] = $user_id;
            //the first part of the if statement is a security check
            if ($this->data['CustomerPref']['id'] == $id && $this->CustomerPref->save($this->data)) {
                $this->Session->setFlash(__('Your preferences have been saved', true));
                $referer = $this->data["Customer"]["referer"];

                if ($referer == null)
                    $referer = "suggestions";

                $this->redirect(array('action' => $referer));
            } else {
                $this->Session->setFlash(__('Your preferences could not be saved. Please, try again.', true));
                $this->set('referer', $this->data['Customer']['referer']);
            }
        }

        if (empty($this->data)) {
            $this->data = $this->CustomerPref->read(null, $id);
            $this->set('referer', $referer);
        }

        $users = $this->CustomerPref->User->find('list');
        $paymentMethods = $this->CustomerPref->PaymentMethod->find('list');
        $cuisineTypes = $this->CustomerPref->CuisineType->find('list');
        $this->set(compact('users', 'paymentMethods', 'cuisineTypes'));
    }

    function food_reviews() {
        $this->set("title_for_layout", "Food Reviews");
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));

        $id = $user['User']['id'];
        $this->loadModel('FoodReview');
        $this->set('foodReviews', $this->FoodReview->find('all', array('conditions' => array('FoodReview.user_id =' => $id))));
    }

    function addresses() {
        $this->set("title_for_layout", "Delivery Addresses");
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
        $id = $user['User']['id'];
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $id)));
        $this->set('addresses', $this->Address->find('all', array('conditions' => array('Address.customer_pref_id =' => $custpref['CustomerPref']['id']))));
    }

    function addresses_add($referer=null, $arg=null) {
        $this->set("title_for_layout", "Add a New Delivery Address");
        $this->set('referer', $referer);
        $this->set('arg', $arg);
        if (!empty($this->data)) {
            $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
            $id = $user['User']['id'];
            $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $id)));
            $this->data['Address']['customer_pref_id'] = $custpref['CustomerPref']['id'];
            $this->Address->create();
            if ($this->Address->save($this->data)) {
                $this->Session->setFlash(__('The address has been saved', true));
                $referer = $this->data['Customer']['referer'];

                //follow the refer link in case this form was called by the checkout function
                if ($referer == null)
                    $referer = "addresses";
                $this->redirect(array('action' => $referer, $this->data['Customer']['arg']));
            } else {
                $this->Session->setFlash(__('The address could not be saved. Please, try again.', true));
                $this->set('referer', $this->data['Customer']['referer']);
                $this->set('arg', $this->data['Customer']['arg']);
            }
        }
        $customerPrefs = $this->Address->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
        $this->set('back', $this->referer());
    }

    function addresses_edit($id = null) {
        $this->set("title_for_layout", "Edit Delivery Address");
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid address', true));
            $this->redirect(array('action' => 'index'));
        }
        //find the customerpref id for this user
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));
        //prevent snooping around other people's info   
        if($this->Address->find('count', array('conditions' => array('Address.id =' => $id, 'customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }
        
        if (!empty($this->data)) {
            $this->data['Address']['customer_pref_id'] = $custpref['CustomerPref']['id'];
            if ($this->Address->save($this->data)) {
                $this->Session->setFlash(__('The address has been saved', true));
                $this->redirect(array('action' => 'addresses'));
            } else {
                $this->Session->setFlash(__('The address could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->Address->read(null, $id);
        }
        $customerPrefs = $this->Address->CustomerPref->find('list');
        $this->set(compact('customerPrefs'));
    }

    function addresses_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for address', true));
            $this->redirect(array('action' => 'addresses'));
        }
        
        //find customer preference id
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));
        //prevent people from deleting other's info
				if($this->Address->find('count', 
						array('conditions' => array('Address.id =' => $id, 'customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }            
        
        if ($this->Address->delete($id)) {
            $this->Session->setFlash(__('Address deleted', true));
            $this->redirect(array('action' => 'addresses'));
        }
        $this->Session->setFlash(__('Address was not deleted', true));
        $this->redirect(array('action' => 'addresses'));
    }

    function payment_methods() {
        $this->set("title_for_layout", "Payment Methods");
        $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
        $id = $user['User']['id'];
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $id)));
        $this->set('paymentMethods', $this->PaymentMethod->find('all', array('conditions' => array('PaymentMethod.customer_pref_id =' => $custpref['CustomerPref']['id']))));
    }

    function payment_add($referer=null, $arg=null) {
        $this->set("title_for_layout", "Add a New Payment Method");
        $this->set('referer', $referer);
        $this->set('arg', $arg);
        if (!empty($this->data)) {
            $user = $this->User->findByUsername($this->Session->read('Auth.User.username'));
            $id = $user['User']['id'];
            $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $id)));
            $this->data['PaymentMethod']['customer_pref_id'] = $custpref['CustomerPref']['id'];
            $this->PaymentMethod->create();
            $this->data['PaymentMethod']['cc_number'] = str_replace(" ", "", $this->data['PaymentMethod']['cc_number']);
            if ($this->PaymentMethod->save($this->data)) {
                $this->Session->setFlash(__('The payment method has been saved', true));
                $referer = $this->data['Customer']['referer'];

                //follow the refer link in case this form was called by the checkout function
                if ($referer == null)
                    $referer = "payment_methods";
                $this->redirect(array('action' => $referer, $this->data['Customer']['arg']));
            } else {
                $this->Session->setFlash(__('The payment method could not be saved. Please, try again.', true));
                $this->set('referer', $this->data['Customer']['referer']);
                $this->set('arg', $this->data['Customer']['arg']);
            }
        }
        $customerPrefs = $this->PaymentMethod->CustomerPref->find('list');
        $paymentTypes = $this->PaymentMethod->PaymentType->find('list');
        $this->set('back', $this->referer());
        $this->set(compact('customerPrefs', 'paymentTypes'));
    }

    function payment_edit($id = null) {
        $this->set("title_for_layout", "Edit Payment Method");
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid payment method', true));
            $this->redirect(array('action' => 'index'));
        }
        //find customer preference id
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));
        //prevent people from snooping at other's info
				if($this->PaymentMethod->find('count', 
						array('conditions' => array('PaymentMethod.id =' => $id, 'customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }        
        
        if (!empty($this->data)) {
            $this->data['PaymentMethod']['customer_pref_id'] = $custpref['CustomerPref']['id'];
            $this->data['PaymentMethod']['cc_number'] = str_replace(" ", "", $this->data['PaymentMethod']['cc_number']);

            if ($this->PaymentMethod->save($this->data)) {
                $this->Session->setFlash(__('The payment method has been saved', true));
                $this->redirect(array('action' => 'payment_methods'));
            } else {
                $this->Session->setFlash(__('The payment method could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->PaymentMethod->read(null, $id);
        }
        $customerPrefs = $this->PaymentMethod->CustomerPref->find('list');
        $paymentTypes = $this->PaymentMethod->PaymentType->find('list');
        $this->set(compact('customerPrefs', 'paymentTypes'));
    }

    function payment_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for payment method', true));
            $this->redirect(array('action' => 'payment_methods'));
        }
        
        //find customer preference id
        $user_id = $this->Auth->User('id');
        $custpref = $this->CustomerPref->find('first', array('conditions' => array('user_id =' => $user_id)));
        //prevent people from deleting other's info
				if($this->PaymentMethod->find('count', 
						array('conditions' => array('PaymentMethod.id =' => $id, 'customer_pref_id =' => $custpref['CustomerPref']['id']))) <1){
            $this->Session->setFlash(__('Incorrect authorization', true));
            $this->redirect(array('action' => 'index'));
        }          
        
        if ($this->PaymentMethod->delete($id)) {
            $this->Session->setFlash(__('Payment method deleted', true));
            $this->redirect(array('action' => 'payment_methods'));
        }
        $this->Session->setFlash(__('Payment method was not deleted', true));
        $this->redirect(array('action' => 'payment_methods'));
    }

}

?>
