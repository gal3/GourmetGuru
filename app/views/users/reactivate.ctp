<?php
    echo $this->Session->flash('auth');
    echo $this->Form->create('User');
    echo $this->Form->input('email');
    echo $this->Form->end('Send Activation Email');
?>