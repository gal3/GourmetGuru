<?php

class CuisineType extends AppModel {

    var $name = 'CuisineType';
    var $displayField = 'name';
    var $validate = array(
        'name' => array(
            'alphanumeric' => array(
                'rule' => array('alphanumeric'),
                'message' => 'Please enter a name for the cuisine type.  Eg. japanese, greek, etc..',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 3, 64),
                'message' => 'Needs to be between 3 to 64 characters.'
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasMany = array(
        'Store' => array(
            'className' => 'Store',
            'foreignKey' => 'cuisine_type_id',
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
        'CustomerPref' => array(
            'className' => 'CustomerPref',
            'joinTable' => 'cuisine_types_customer_prefs',
            'foreignKey' => 'cuisine_type_id',
            'associationForeignKey' => 'customer_pref_id',
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
