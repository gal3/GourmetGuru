<?php

class Order extends AppModel {

    var $name = 'Order';
    var $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'store_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'address_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'payment_method_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'set_menu_id' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'total_amount' => array(
            'decimal' => array(
                'rule' => array('decimal')
            ),
        ),
        'total_calorie' => array(
            'numeric' => array(
                'rule' => array('numeric')
            ),
        ),
        'complete' => array(
            'boolean' => array(
                'rule' => array('boolean')
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'User' => array(
            'className' => 'User',
            'foreignKey' => 'user_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Store' => array(
            'className' => 'Store',
            'foreignKey' => 'store_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Address' => array(
            'className' => 'Address',
            'foreignKey' => 'address_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'PaymentMethod' => array(
            'className' => 'PaymentMethod',
            'foreignKey' => 'payment_method_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'SetMenu' => array(
            'className' => 'SetMenu',
            'foreignKey' => 'set_menu_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}
