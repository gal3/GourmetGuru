<?php

class Award extends AppModel {

    var $name = 'Award';
    var $displayField = 'title';
    var $validate = array(
        'title' => array(
            'notempty' => array(
                'rule' => array('notempty'),
                'message' => 'Please provide a title.',
                'allowEmpty' => false,
            ),
            'between' => array(
                'rule' => array('between', 3, 75),
                'message' => 'Needs to be between 3 to 75 characters.'
            ),
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $hasAndBelongsToMany = array(
        'User' => array(
            'className' => 'User',
            'joinTable' => 'users_awards',
            'foreignKey' => 'award_id',
            'associationForeignKey' => 'user_id',
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
