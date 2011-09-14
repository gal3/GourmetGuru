<?php

class FoodReview extends AppModel {

    var $name = 'FoodReview';
    var $validate = array(
        'set_menu_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a number.'
            )
        ),
        'user_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a number.'
            )
        ),
        'store_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a number.'
            ),
        ),
        'rating' => array(
            'numeric' => array(
                'rule' => array('numeric'),
                'message' => 'Please enter a valid number.',
            ),
        ),
        'comment' => array(
            'max' => array(
                'rule' => array('maxLength', 65535),
                'message' => 'This field has a max length of 65535 characters.',
                'allowEmpty' => true
            )
        )
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'SetMenu' => array(
            'className' => 'SetMenu',
            'foreignKey' => 'set_menu_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
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
        )
    );
}
