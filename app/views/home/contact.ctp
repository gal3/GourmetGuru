<div class="index">

<h2>Let&rsquo;s get in touch</h2>

<p>Want to talk? Drop us a line. We love to hear your suggestions and feedback. If you have a question for us, we will do our best to respond to you shortly. Have a great day.</p>
<?php
    echo $this->Form->create('Home',  array('url' => array('controller' => 'Home', 'action' => 'contact')));
    echo $this->Form->input('Subject');
    echo $this->Form->input('Body', array('rows' => '5'));
    echo $this->Form->end('Submit');
?>

</div>