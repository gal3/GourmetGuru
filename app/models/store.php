<?php

class Store extends AppModel {

    var $name = 'Store';
    var $displayField = 'name';
    var $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'user_id is numeric'
            )
        ),
        'cuisine_type_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Cuisine type id has to be a number.'
            )
        ),
        'name' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,40}$/',
                'message' => 'This must be between 1 to 40 characters total and cannot contain the symbol > .'
            ),
        ),
        'phone' => array(
            'phone' => array(
                'rule' => array('phone'),
                'message' => 'Please provide a valid phone number.'
            )
        ),
        'address' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,64}$/',
                'message' => 'This must be between 1 to 64 characters total and cannot contain the symbol > .'
            ),
        ),
        'city' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol  > .'
            ),
        ),
        'province' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol > .'
            ),
        ),
        'country' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol > .'
            ),
        ),
        'postal' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Postal Code cannot be empty.'
            ),
            'postal' => array(
                'rule' => array('postal', null, 'ca'),
                'message' => 'Please enter a valid Canadian postal code'
            )
        ),
        'avg_rating' => array(
            'decimal' => array(
                'rule' => array('decimal'),
                'message' => 'Average rating has to be a number or decimal value.'
            ),
        ),
        'dine_in' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                'message' => 'dine_in is boolean'
            )
        ),
        'takeout' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                'message' => 'takeout is boolean'
            )
        ),
        'delivery' => array(
            'boolean' => array(
                'rule' => array('boolean'),
                'message' => 'delivery is boolean'
            )
        ),
        'open_hrs' => array(
            'time' => array(
                'rule' => array('time'),
                'message' => 'Please enter valid time values.'
            )
        ),
        'close_hrs' => array(
            'time' => array(
                'rule' => array('time'),
                'message' => 'Please enter valid time values.'
            )
        )
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
        'CuisineType' => array(
            'className' => 'CuisineType',
            'foreignKey' => 'cuisine_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasMany = array(
        'FoodReview' => array(
            'className' => 'FoodReview',
            'foreignKey' => 'store_id',
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
            'joinTable' => 'foods_stores',
            'foreignKey' => 'store_id',
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
        'SetMenu' => array(
            'className' => 'SetMenu',
            'joinTable' => 'set_menus_stores',
            'foreignKey' => 'store_id',
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
        )
    );

}
