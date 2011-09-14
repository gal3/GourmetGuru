<?php

class PaymentType extends AppModel {

    var $name = 'PaymentType';
    var $displayField = 'name';
    var $validate = array(
        'name' => array(
            'nameOnly' => array(
                'rule' => '/^[^<>`~!/@\#}$%:;)(_^{&*=|\'+]{2,32}$/i',
                'message' => 'This must be between 2 and 32 letters long and cannot contain the following symbols: <>`~!/@\#}$%:;)(_^{&*=|\'+.'
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
        'PaymentMethod' => array(
            'className' => 'PaymentMethod',
            'foreignKey' => 'payment_type_id',
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
