<?php

class AppController extends Controller {

    var $uses = array('User');
    var $components = array('Acl', 'Session', 'Auth', 'Security');
    var $helpers = array('Javascript', 'Html', 'Session', 'Form');

    function beforeFilter() {

        //Configure AuthComponent
        $this->Auth->actionPath = 'controllers/';
        $this->Auth->authorize = 'actions';
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
        $this->Auth->logoutRedirect = array('controller' => 'users', 'action' => 'login');
        $this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'add');

        //Check what person is logged in as.
        $tmp = $this->Session->read('Auth.User.username');

        if (!empty($tmp)) {
          $user = $this->User->findByUsername($tmp);
					
					if($user['User']['active'] == 0){
							$this->layout = 'default';
					}
					else if ($user['User']['group_id'] == adminGroupId) { //admin
						$this->layout = 'admin';
					} else if ($user['User']['group_id'] == ownerGroupId) { //owner
								        $this->layout = 'owner';
					} else if ($user['User']['group_id'] == custGroupId) { //customer
								        $this->layout = 'customer';
					}
				} 
				else {
					$this->layout = 'default';
				}
		}

}

?>
