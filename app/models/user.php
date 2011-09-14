<?php

class User extends AppModel {

    var $name = 'User';
    var $actsAs = array('Acl' => 'requester');

    function parentNode() {
        if (!$this->id && empty($this->data)) {
            return null;
        }
        $data = $this->data;
        if (empty($this->data)) {
            $data = $this->read();
        }
        if (empty($data['User']['group_id'])) {
            return null;
        } else {
            return array('Group' => array('id' => $data['User']['group_id']));
        }
    }

    /**
     * After save callback
     * Update the aro for the user.
     */
    function afterSave($created) {
        if (!$created) {
            $parent = $this->parentNode();
            $parent = $this->node($parent);
            $node = $this->node();
            $aro = $node[0];
            $aro['Aro']['parent_id'] = $parent[0]['Aro']['id'];
            $this->Aro->save($aro);
        }
    }

    var $validate = array(
        'group_id' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            ),
        ),
        'first_name' => array(
            'alphaOnly' => array(
                'rule' => '/^[a-z]{2,32}$/i',
                'message' => 'This must be between 2 and 32 alphabetical letters long.'
            )
        ),
        'last_name' => array(
            'alphaOnly' => array(
                'rule' => '/^[a-z]{2,32}$/i',
                'message' => 'This must be between 2 and 32 letters long.'
            )
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Please provide a valid email. Ie: alice@gmail.com',
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'This email has already been use.'
            ),
            'maxlength' => array(
                'rule' => array('maxlength', 64),
                'message' => 'Needs to be less than 64 characters.'
            )
        ),
        'username' => array(
            'name' => array(
                'rule' => '/^[a-z0-9_]*$/i',
                'message' => 'Please provide a username consisting of letters, numbers and "_".'
            ),
            'between' => array(
                'rule' => array('between', 3, 16),
                'message' => 'This requires between 3 to 16 characters.'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'This username is already in use.'
            ),
        ),
        'password' => array(
            'password' => array(
                'rule' => '/^[^"\'_\\/]{5,}$/',
                'message' => 'Must contain 5 or more characters and cannot contain " , \' , _ , \ , / . '
            ),
        ),
        'confirm_password' => array(
            'password' => array(
                'rule' => '/^[^"\'_\\/]{5,}$/',
                'message' => 'Must contain 5 or more characters and cannot contain " , \' , _ , \ , / . '
            ),
        ),
        'email' => array(
            'email' => array(
                'rule' => array('email'),
                'message' => 'Please provide a valid email address'
            ),
            'isUnique' => array(
                'rule' => 'isUnique',
                'message' => 'This e-mail is already in use by another user.'
            )
        ),
        'phone' => array(
            'phone' => array(
                'rule' => array('phone'),
                'message' => 'Please provide a valid phone number',
                'allowEmpty' => true,
            )
        ),
    );
    //The Associations below have been created with all possible keys, those that are not needed can be removed
    var $belongsTo = array(
        'Group' => array(
            'className' => 'Group',
            'foreignKey' => 'group_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );
    var $hasMany = array(
        'CustomerPref' => array(
            'className' => 'CustomerPref',
            'foreignKey' => 'user_id',
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
            'foreignKey' => 'user_id',
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
        'Order' => array(
            'className' => 'Order',
            'foreignKey' => 'user_id',
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
        'Store' => array(
            'className' => 'Store',
            'foreignKey' => 'user_id',
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

//get a hash that must be entered into the url for a user to activate their account
    function getActivationHash() {
        if (!isset($this->id))
            return false;

        //only hash based on the user name 
        //may need to be improvded by hashing based on the modified field, so that the user cannot use the same hash
        //when thet register -> activate and deactive->activate account scenarios
        return substr(Security::hash(Configure::read('Security.salt') . $this->field('username')), 0, 8);
    }

    //create a temporary semi-random password for a user
    function createTempPassword($len) {
        $pass = '';
        $lchar = 0;
        $char = 0;

        for ($i = 0; $i < $len; $i++) {
            while ($char == $lchar) {
                $char = rand(48, 109);
                if ($char > 57)
                    $char += 7;
                if ($char > 90)
                    $char += 6;
            }
            $pass .= chr($char);
            $lchar = $char;
        }

        return $pass;
    }

}

?>
