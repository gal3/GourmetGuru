<?php

class Food extends AppModel {

    var $name = 'Food';
    var $displayField = 'name';
    var $validate = array(
        'food_type_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please choose a valid food type.',
            ),
        ),
        'name' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,30}$/',
                'message' => 'This must be between 1 to 30 characters total and cannot contain the symbol > .'
            ),
        ),
        'cost' => array(
            'money' => array(
                'rule' => array('money'),
                'message' => 'Please enter a valid dollar value',
            ),
            'between' => array(
                'rule' => array('between', 1, 12),
                'message' => 'Needs to be under 12 digits.'
            ),
        ),
        'calorie' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a number.',
            ),
            'maxlength' => array(
                'rule' => array('maxlength', 10),
                'message' => 'Needs to be less than 10 digits.'
            ),
            'greaterZero' => array(
                'rule' => array('comparison', '>=', 0),
                'message' => 'Please enter a number greater or equal to zero.'
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'FoodType' => array(
            'className' => 'FoodType',
            'foreignKey' => 'food_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasAndBelongsToMany = array(
        'SetMenu' => array(
            'className' => 'SetMenu',
            'joinTable' => 'foods_set_menus',
            'foreignKey' => 'food_id',
            'associationForeignKey' => 'set_menu_id',
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
            'joinTable' => 'foods_stores',
            'foreignKey' => 'food_id',
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
