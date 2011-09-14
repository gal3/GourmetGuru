<!-- Navigation for users not logged in-->
<?php include('top.ctp'); ?>

<ul id="nav">
    <li class="first <?php if (active('project\/?$')) echo 'current'; ?>">
        <?php echo $this->Html->link('Home', array('controller' => 'home', 'action' => 'index')); ?>
    </li>
	<li <?php if (active('register\/?$')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Register', array('controller' => 'users', 'action' => 'register')); ?>
    </li>
    <li <?php if (active('sitemap\/?$')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Sitemap', array('controller' => 'home', 'action' => 'sitemap')); ?>
    </li>
    <li <?php if (active('about\/?$')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('About Us', array('controller' => 'home', 'action' => 'about')); ?>
    </li>
    <li <?php if (active('contact\/?$')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Contact', array('controller' => 'home', 'action' => 'contact')); ?>
    </li>
</ul>



<div id="container">
<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->Session->flash('auth'); ?>
    <?php echo $content_for_layout; ?>
</div>

<?php include('bottom.ctp'); ?>	
