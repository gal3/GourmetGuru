<?php

class PaymentMethod extends AppModel {

    var $name = 'PaymentMethod';
    var $displayField = 'name';
    var $validate = array(
        'payment_type_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter payment type id as a number.',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'name' => array(
            'alphaOnly' => array(
                'rule' => '/^[a-z\s]{2,64}$/i',
                'message' => 'This must be between 2 and 64 letters long and should only contain alphabets and spaces.'
            )
        ),
        'cc_number' => array(
            'valid_cc_number' => array(
                'rule' => array('cc', array('visa', 'mc', 'amex'), true, null),
                'message' => 'The credit card number you supplied was invalid.'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'This credit card is already stored. Please Contact Us if it is not.'
            ),
            'between' => array(
                'rule' => array('between', 13, 16),
                'message' => 'Credit card numbers of Visa/MC/American Express are between 13 to 16 digits.'
            )
        ),
        'verification_number' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Verification number must be numeric.',
            ),
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Verification number cannot be empty.',
            ),
            'between' => array(
                'rule' => array('between', 3, 4),
                'message' => 'Verification number  is the number at the end of the signiture field. It should be a 3 or 4 digit number.'
            )
        ),
        'expiry' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Expiry cannot be empty',
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
        ),
        'PaymentType' => array(
            'className' => 'PaymentType',
            'foreignKey' => 'payment_type_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasMany = array(
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'payment_method_id',
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

}
