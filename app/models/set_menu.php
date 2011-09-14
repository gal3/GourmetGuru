<?php

class SetMenu extends AppModel {

    var $name = 'SetMenu';
    var $displayField = 'name';
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $validate = array(
        'name' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,20}$/',
                'message' => 'This must be between 1 to 20 characters total and cannot contain the symbol > .'
            ),
        ),
        'total_calorie' => array(
            'decimal' => array(
                'rule' => array('decimal'),
                'message' => 'Please enter a valid number or a decimal.'
            ),
            'greaterZero' => array(
                'rule' => array('comparison', '>=', 0),
                'message' => 'Please enter a number greater or equal to zero.'
            ),
        ),
        'total_cost' => array(
            'money' => array(
                'rule' => array('money'),
                'message' => 'Please enter a valid dollar value.'
            ),
        ),
        'rating' => array(
            'decimal' => array(
                'rule' => array('decimal'),
                'message' => 'Please enter a valid number or decimal value.',
                'allowEmpty' => true
            )
        ),
    );
    var $hasMany = array(
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'set_menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        ),
        'FoodReview' => array(
            'className' => 'FoodReview',
            'foreignKey' => 'set_menu_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );
    var $hasAndBelongsToMany = array(
        'Food' => array(
            'className' => 'Food',
            'joinTable' => 'foods_set_menus',
            'foreignKey' => 'set_menu_id',
            'associationForeignKey' => 'food_id',
            'unique' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        ),
        'Store' => array(
            'className' => 'Store',
            'joinTable' => 'set_menus_stores',
            'foreignKey' => 'set_menu_id',
            'associationForeignKey' => 'store_id',
            'unique' => true,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
    );

}
