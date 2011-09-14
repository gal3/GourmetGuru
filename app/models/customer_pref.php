<?php

class CustomerPref extends AppModel {

    var $name = 'CustomerPref';
    var $validate = array(
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            ),
            'notempty' => array(
                'rule' => array('notempty'),
            ),
        ),
        'max_suggestion' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Numbers only please.',
                'allowEmpty' => true,
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
        'budget' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Numbers only please.',
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'How much do you plan to spend daily?',
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
        'calorie' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Numbers only please.',
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'What is your maximum daily caloric intake?',
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
        'dine_in' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            ),
        ),
        'take_out' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            ),
        ),
        'delivery' => array(
            'boolean' => array(
                'rule' => array('boolean'),
            ),
        ),
        'notes' => array(
            'strict' => array(
                'rule' => '/^[^<]{0,255}$/',
                'message' => 'This must be less than 255 characters total and cannot contain the symbol < .'
            ),
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
        )
    );
    var $hasMany = array(
        'Address' => array(
            'className' => 'Address',
            'foreignKey' => 'customer_pref_id',
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
        'PaymentMethod' => array(
            'className' => 'PaymentMethod',
            'foreignKey' => 'customer_pref_id',
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
        'CuisineType' => array(
            'className' => 'CuisineType',
            'joinTable' => 'cuisine_types_customer_prefs',
            'foreignKey' => 'customer_pref_id',
            'associationForeignKey' => 'cuisine_type_id',
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

?>
