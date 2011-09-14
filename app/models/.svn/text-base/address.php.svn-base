<?php

class Address extends AppModel {

    var $name = 'Address';
    var $validate = array(
        'customer_pref_id' => array(
            'notempty' => array(
                'rule' => array('notempty'),
            ),
            'numeric' => array(
                'rule' => array('numeric'),
            ),
        ),
        'type' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This field requires a type. For example, Work, Home, Other and etc. Must be between 1 to 32 characters and cannot contain _ and >'
            ),
        ),
        'address' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,64}$/',
                'message' => 'This must be between 1 to 64 characters total and cannot contain the symbol < .'
            ),
        ),
        'city' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol  < .'
            ),
        ),
        'province' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol < .'
            ),		
        ),
        'country' => array(
            'strict' => array(
                'rule' => '/^[^<]{1,32}$/',
                'message' => 'This must be between 1 to 32 characters total and cannot contain the symbol < .'
            ),		
        ),
        'postal' => array(
            'postal' => array(
                'rule' => array('postal', null, 'ca'),
                'message' => 'Please enter a valid postal code',
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'CustomerPref' => array(
            'className' => 'CustomerPref',
            'foreignKey' => 'customer_pref_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
}

?>
