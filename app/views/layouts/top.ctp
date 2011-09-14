<?php
/**
*
* PHP versions 4 and 5
*
* CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
* Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
*
* Licensed under The MIT License
* Redistributions of files must retain the above copyright notice.
*
* @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
* @link          http://cakephp.org CakePHP(tm) Project
* @package       cake
* @subpackage    cake.cake.libs.view.templates.layouts
* @since         CakePHP(tm) v 0.10.0.1076
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
*/

// Redefines document root to our project folder.
?>
<!-- Header for all users: includes logo and log in widget -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php echo $this->Html->charset(); ?>
        <title><?php echo $title_for_layout; ?>	</title>
        <?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('gg');
		echo $this->Html->css('jquery.rating.css');
		echo $javascript->link('/js/jquery.js');
		echo $javascript->link('/js/imgpreview.js');
		echo $javascript->link('/js/jquery.tablesorter.js', true);
		echo $javascript->link('/js/easySlider1.5.js');

		echo $scripts_for_layout;

		function curPageURL() {
			$pageURL = 'http://';
			if ($_SERVER["SERVER_PORT"] != "80") {
				$pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
			} else {
				$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
			}
			return $pageURL;
		}

		function active($pattern) {
			return preg_match('/'.$pattern.'/i', curPageURL());
		}
	?>

	<!--[if IE]>
	<?php
		echo $this->Html->css('ie');
	?>
	<![endif]-->
	
    </head>
    <body>
	
	
<div id="header">
	<div class="wrapper">

		<h1>
			<?php 
				echo $this->Html->link($this->Html->image("logo-gg-alt.png", array("alt" => "Gourmet Guru", "id" => "logo")),array( 'action' => 'index'), array('escape' => false)); 
			?>
		</h1>
		
		<?php 
		if( !$session->check('Auth.User') ) { ?>

<?php
    echo $this->Form->create('User', array('action' => 'login', 'id' => 'userLoginFormAlt'));
    echo $this->Form->input('username', array('id' => 'loginUserName'));
    echo $this->Form->input('password', array('id' => 'loginPassword'));
    echo $this->Form->end('Login');
?>

<div class="accountLinks">
	<span><?php echo $this->Html->link('Sign up!', array('controller' => 'users', 'action' => 'register')); ?></span>
	<span><?php echo $this->Html->link('Forgot password?', array('controller' => 'users', 'action' => 'recover')); ?></span>
</div>

		<?php } else { ?>
		<p style="text-align: right">Logged in as <?php echo $this->Session->read('Auth.User.username'); ?></p>
		  <p style="text-align: right"><?php echo $this->Html->link('Log out', '/users/logout'); //echo $this->Html->link('Log out', array('controller' => 'users', 'action' => 'logout'));?></p>
		<?php } ?>

	</div>
</div>
