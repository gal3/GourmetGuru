<?php

class UsersController extends AppController {

    var $name = 'Users';
    var $components = array('Auth', 'Session', 'Email');
    var $helpers = array('Javascript', 'Html', 'Session', 'Form');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('register', 'thanks', 'login', 'logout', 'recover', 'activate', 'reactivate', 'verify', 'index');

        //do not redirect automatically on login/logout as this will be handled by us
        $this->Auth->autoRedirect = false;
    }
	

    //called when the user tries to login with an account that has is not set to active ( active == 1 )
    //resend email with hash
    function reactivate() {
        $this->set("title_for_layout", "Reactivate Your Account");

        if ($this->data) {
            $user = $this->User->findByEmail($this->data['User']['email']);

            if ($user === false)
                $this->Session->setFlash('The provided email does not match up to any registered users.');
            else {
                $this->__sendActivationEmail($user['User']['id']);
                $this->Session->setFlash('An activation email has been sent out.');
                $this->redirect(array('controller' => 'home', 'action' => 'index'));
            }
        }
    }

    function register() {
        $this->set("title_for_layout", "Register");
        //do not allow creation of admin
        $groups = $this->User->Group->find('list', array('conditions' => array('id !=' => adminGroupId), 'order' => array('Group.name' => 'asc')));
        $this->set(compact('groups'));

        if ($this->data) {
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['confirm_password'])) {
                $this->User->create();
                //check for hack attemp to create some other group
                if ($this->data['User']['group_id'] == ownerGroupId || $this->data['User']['group_id'] == custGroupId) {
                    //if the user saved successfuly, send them an email with the activation hash
                    if ($this->User->save($this->data)) {
                        $this->__sendActivationEmail($this->User->getLastInsertID());
                        $this->redirect(array('controller' => 'users', 'action' => 'thanks'));
                    }
                    else
                        $this->Session->setFlash('Registration failed. Please try again.');
                }
                else
                    $this->Session->setFlash('Your passwords did not match, please try again.');
            }

            $this->data['User']['password'] = null;
            $this->data['User']['confirm_password'] = null;
        }
    }

    function thanks() {
        $this->set("title_for_layout", "Thank You for Registering");
    }

    function login() {
        $this->set("title_for_layout", "Login");

        //check that the user has logged in then redirect to the appropriate home
        if ($this->Auth->user()) {
            $user = $this->User->findByUsername($this->data['User']['username']);

            if ($user['User']['active'] == 0) { //check if the user can actually login
                $this->redirect(array('controller' => 'users', 'action' => 'verify'));
            } else if ($user['User']['group_id'] == adminGroupId) { //admin
                $this->redirect(array('controller' => 'admins', 'action' => 'index'));
            } else if ($user['User']['group_id'] == ownerGroupId) { //owner
                $this->redirect(array('controller' => 'owners', 'action' => 'index'));
            } else if ($user['User']['group_id'] == custGroupId) { //customer
                //Does the customer has preferences set up?
                if ($this->User->CustomerPref->find('count', array('conditions' => array('user_id =' => $user['User']['id']))) < 1) {//No
                    $this->redirect(array('controller' => 'customers', 'action' => 'preferences'));
                } else {//Yes
                    $this->redirect(array('controller' => 'customers', 'action' => 'index'));
                }
            } else { //visitor
                $this->redirect(array('controller' => 'home', 'action' => 'index'));
            }
        }
    }

    function verify() {
        $this->Auth->logout();
    }

    function logout() {
        // Set logout message and call auth component's logout
        $this->Session->setFlash('You are logged out! Good bye!');
        $this->Auth->logout();
        $this->redirect(array('controller' => 'home', 'action' => 'index'));
    }

    //called when the user tries to recover his/her password
    function recover() {
        $this->set("title_for_layout", "Password Recovery");

        if ($this->data) {
            $user = $this->User->findByEmail($this->data['User']['email']);

            //it doesn't make sense for an unverified user to reset his/her password
            if ($user['User']['active'] == 0) {
                $this->Session->setFlash('You must activate your account before you can recover your password.');
                $this->redirect(array('controller' => 'users', 'action' => 'reactivate'));

                return false;
            }

            if ($user === false) { //make sure that the entered email actually belongs to a registered user
                $this->Session->setFlash('The provided email does not match up to any registered users.');
                return false;
            } else { //create a new password and send it via email
                //note that the password is hashed via a one way hash function. so it cannot be retrieved
                $user['User']['tmp_password'] = $this->User->createTempPassword(7);
                $user['User']['password'] = $this->Auth->password($user['User']['tmp_password']);
                $this->User->id = $user['User']['id'];
                $this->User->saveField('password', $user['User']['password']);
                $this->__sendPasswordEmail($user, $user['User']['tmp_password']);
                $this->Session->setFlash('An email has been sent with your new password.');
            }
        }
    }

    function activate($id = null, $in_hash = null) {
        $this->User->id = $id;
        if ($this->User->exists() && ($in_hash == $this->User->getActivationHash())) { //if the user followed a correct hash that matches their account
            // Update the active flag in the database
            $user = $this->User->findById($id);
            $group_id = $user['User']['group_id'];
            $this->User->saveField('active', 1);
            $this->User->saveField('group_id', $group_id); //this is done so that ARO table doesn't break
        } else  //invalid hash
            $this->redirect(array('controller' => 'home', 'action' => 'index'));
    }

    //private function to send the user the email to activate his/her account
    function __sendActivationEmail($user_id) {
        $user = $this->User->findById($user_id);
        $this->Email->smtpOptions = array(
            'port' => '465',
            'timeout' => '30',
            'host' => 'ssl://smtp.gmail.com',
            'username' => 'toopink470@gmail.com',
            'password' => 'toopinkforyou',
        );
        $this->Email->delivery = 'smtp';

        if ($user === false) {
            debug(__METHOD__ . " failed to retrieve User data for user.id: {$user_id}");
            return false;
        }
        $this->User->id = $user_id;
        // Set data for the "view" of the Email
        $this->set('activate_url', Router::url('/', true) . 'users/activate/' . $user_id . '/' . $this->User->getActivationHash());
        $this->set('username', $user['User']['username']);

        $this->Email->to = $user['User']['email'];
        $this->Email->subject = 'Email Confirmation for GourmetGuru';
        $this->Email->template = 'user_confirm';
        $this->Email->sendAs = 'html';
        $this->Email->send();
    }

    //private function to send the user the email to with his/her new password
    function __sendPasswordEmail($user, $password) {
        $this->Email->smtpOptions = array(
            'port' => '465',
            'timeout' => '30',
            'host' => 'ssl://smtp.gmail.com',
            'username' => 'toopink470@gmail.com',
            'password' => 'toopinkforyou',
        );
        $this->Email->delivery = 'smtp';

        $this->set('password', $password);
        $this->set('username', $user['User']['username']);

        $this->Email->to = $this->data['User']['email'];
        $this->Email->subject = 'Password Recovery for GourmetGuru';
        $this->Email->template = 'user_recover';
        $this->Email->sendAs = 'text';
        $this->Email->send();
    }

    function admin_index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    function admin_view($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    function admin_add() {
        if (!empty($this->data)) {
            $this->User->create();
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The user has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
            }
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    function admin_edit($id = null) {
        if (!$id && empty($this->data)) {
            $this->Session->setFlash(__('Invalid user', true));
            $this->redirect(array('action' => 'index'));
        }
        if (!empty($this->data)) {
            if ($this->User->save($this->data)) {
                $this->Session->setFlash(__('The user has been saved', true));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
            }
        }
        if (empty($this->data)) {
            $this->data = $this->User->read(null, $id);
        }
        $groups = $this->User->Group->find('list');
        $this->set(compact('groups'));
    }

    function admin_delete($id = null) {
        if (!$id) {
            $this->Session->setFlash(__('Invalid id for user', true));
            $this->redirect(array('action' => 'index'));
        }
        if ($this->User->delete($id)) {
            $this->Session->setFlash(__('User deleted', true));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted', true));
        $this->redirect(array('action' => 'index'));
    }
	
	
	function index(){
		// redirect user to visitor home
		$this->autoRender = false;
		
		$this->redirect(array('controller'=>'home', 'action' => 'index'));
	}

    //This is for ACL, controlling permissions.
    function initDB() {
        $admin = $this->User->Group->find('first', array('conditions' => array('Group.name' => 'admin')));
        $owner = $this->User->Group->find('first', array('conditions' => array('Group.name' => 'owner')));
        $customer = $this->User->Group->find('first', array('conditions' => array('Group.name' => 'customer')));

        $group = & $this->User->Group;
        //Allow admins to all their admin functions.
        $group->id = $admin['Group']['id'];
        $this->Acl->deny($group, 'controllers');

        $this->Acl->allow($group, 'controllers/Admins');

        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_index');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_view');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_add');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_edit');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_delete');

        $this->Acl->allow($group, 'controllers/Groups/admin_index');
        $this->Acl->allow($group, 'controllers/Groups/admin_view');
        $this->Acl->allow($group, 'controllers/Groups/admin_add');
        $this->Acl->allow($group, 'controllers/Groups/admin_edit');
        $this->Acl->allow($group, 'controllers/Groups/admin_delete');

        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_index');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_view');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_add');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_edit');
        $this->Acl->allow($group, 'controllers/CuisineTypes/admin_delete');

        $this->Acl->allow($group, 'controllers/FoodTypes/admin_index');
        $this->Acl->allow($group, 'controllers/FoodTypes/admin_view');
        $this->Acl->allow($group, 'controllers/FoodTypes/admin_add');
        $this->Acl->allow($group, 'controllers/FoodTypes/admin_edit');
        $this->Acl->allow($group, 'controllers/FoodTypes/admin_delete');

        $this->Acl->allow($group, 'controllers/Addresses/admin_index');
        $this->Acl->allow($group, 'controllers/Addresses/admin_view');
        $this->Acl->allow($group, 'controllers/Addresses/admin_add');
        $this->Acl->allow($group, 'controllers/Addresses/admin_edit');
        $this->Acl->allow($group, 'controllers/Addresses/admin_delete');

        $this->Acl->allow($group, 'controllers/Foods/admin_index');
        $this->Acl->allow($group, 'controllers/Foods/admin_view');
        $this->Acl->allow($group, 'controllers/Foods/admin_add');
        $this->Acl->allow($group, 'controllers/Foods/admin_edit');
        $this->Acl->allow($group, 'controllers/Foods/admin_delete');

        $this->Acl->allow($group, 'controllers/Stores/admin_index');
        $this->Acl->allow($group, 'controllers/Stores/admin_view');
        $this->Acl->allow($group, 'controllers/Stores/admin_add');
        $this->Acl->allow($group, 'controllers/Stores/admin_edit');
        $this->Acl->allow($group, 'controllers/Stores/admin_delete');

        $this->Acl->allow($group, 'controllers/CustomerPrefs/admin_index');
        $this->Acl->allow($group, 'controllers/CustomerPrefs/admin_view');
        $this->Acl->allow($group, 'controllers/CustomerPrefs/admin_add');
        $this->Acl->allow($group, 'controllers/CustomerPrefs/admin_edit');
        $this->Acl->allow($group, 'controllers/CustomerPrefs/admin_delete');

        $this->Acl->allow($group, 'controllers/PaymentMethods/admin_index');
        $this->Acl->allow($group, 'controllers/PaymentMethods/admin_view');
        $this->Acl->allow($group, 'controllers/PaymentMethods/admin_add');
        $this->Acl->allow($group, 'controllers/PaymentMethods/admin_edit');
        $this->Acl->allow($group, 'controllers/PaymentMethods/admin_delete');

        $this->Acl->allow($group, 'controllers/Users/admin_index');
        $this->Acl->allow($group, 'controllers/Users/admin_view');
        $this->Acl->allow($group, 'controllers/Users/admin_add');
        $this->Acl->allow($group, 'controllers/Users/admin_edit');
        $this->Acl->allow($group, 'controllers/Users/admin_delete');

        $this->Acl->allow($group, 'controllers/Orders/admin_index');
        $this->Acl->allow($group, 'controllers/Orders/admin_view');
        $this->Acl->allow($group, 'controllers/Orders/admin_add');
        $this->Acl->allow($group, 'controllers/Orders/admin_edit');
        $this->Acl->allow($group, 'controllers/Orders/admin_delete');

        $this->Acl->allow($group, 'controllers/PaymentTypes/admin_index');
        $this->Acl->allow($group, 'controllers/PaymentTypes/admin_view');
        $this->Acl->allow($group, 'controllers/PaymentTypes/admin_add');
        $this->Acl->allow($group, 'controllers/PaymentTypes/admin_edit');
        $this->Acl->allow($group, 'controllers/PaymentTypes/admin_delete');

        $this->Acl->allow($group, 'controllers/SetMenus/admin_index');
        $this->Acl->allow($group, 'controllers/SetMenus/admin_view');
        $this->Acl->allow($group, 'controllers/SetMenus/admin_add');
        $this->Acl->allow($group, 'controllers/SetMenus/admin_edit');
        $this->Acl->allow($group, 'controllers/SetMenus/admin_delete');

        $this->Acl->allow($group, 'controllers/FoodReviews/admin_index');
        $this->Acl->allow($group, 'controllers/FoodReviews/admin_view');
        $this->Acl->allow($group, 'controllers/FoodReviews/admin_add');
        $this->Acl->allow($group, 'controllers/FoodReviews/admin_edit');
        $this->Acl->allow($group, 'controllers/FoodReviews/admin_delete');

        $this->Acl->allow($group, 'controllers/Awards/admin_index');
        $this->Acl->allow($group, 'controllers/Awards/admin_view');
        $this->Acl->allow($group, 'controllers/Awards/admin_add');
        $this->Acl->allow($group, 'controllers/Awards/admin_edit');
        $this->Acl->allow($group, 'controllers/Awards/admin_delete');

        //allow restaurant owners to restaurant owner stuff
        $group->id = $owner['Group']['id'];
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Owners');
        $this->Acl->allow($group, 'controllers/Foods/delete'); //test this
        $this->Acl->allow($group, 'controllers/SetMenus/delete'); //test this
        //allow customers to customer stuff
        $group->id = $customer['Group']['id'];
        $this->Acl->deny($group, 'controllers');
        $this->Acl->allow($group, 'controllers/Customers');

        //public stuff is set on the public pages themselves by simply adding
        //$this->Auth->allow('*'); or similar.
    }

}

?>
