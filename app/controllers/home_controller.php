<?php

class HomeController extends AppController {

    var $name = 'Home';
    var $uses = array('User');
    var $components = array('Session', 'Email');
    var $helpers = array('Javascript', 'Html', 'Session', 'Form');

    function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('*');//home pages are public
    }

    function index() {
        $this->set("title_for_layout", "Welcome to GourmetGuru");
    }

//contact form that allows for user to enter the title and body of the email that will be sent over
    function contact() {
        $this->set("title_for_layout", "Contact");

        if ($this->data) {
            $this->Email->smtpOptions = array(
                'port' => '465',
                'timeout' => '30',
                'host' => 'ssl://smtp.gmail.com',
                'username' => 'toopink470@gmail.com',
                'password' => 'toopinkforyou',
            );
            $this->Email->delivery = 'smtp';

            $this->set('body', $this->data['Home']['Body']);

            $this->Email->to = 'toopink470@gmail.com';
            $this->Email->subject = 'Contact Form Message: ' . $this->data['Home']['Subject'];
            $this->Email->template = 'user_contact';
            $this->Email->sendAs = 'text';
            $this->Email->send();

            $this->redirect('/home/index');
        }
    }

    function about() {
        $this->set("title_for_layout", "About");
    }

    function privacy() {
        $this->set("title_for_layout", "Privacy");
    }

    function terms() {
        $this->set("title_for_layout", "Terms of Service");
    }

    function partners() {
        $this->set("title_for_layout", "Partners");
    }

    function sitemap() {
        $this->set("title_for_layout", "Sitemap");
    }

}

?>
