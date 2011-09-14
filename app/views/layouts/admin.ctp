<!-- Navigation for users logged in as admin -->
<?php include('top.ctp'); ?>

<ul id="nav">
    <li class="first <?php if (active('admins\/?$')) echo 'current'; ?>">
	    <?php echo $this->Html->link('Home', array('controller' => 'admins', 'action' => 'index', 'admin' => false)); ?>
	</li>
    <li <?php if (active('addresses')) echo 'class="current"'; ?>>
	    <?php echo $this->Html->link('Addresses', array('controller' => 'addresses', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('awards')) echo 'class="current"'; ?>>	
	    <?php echo $this->Html->link('Awards', array('controller' => 'awards', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('cuisine_types')) echo 'class="current"'; ?>>
	    <?php echo $this->Html->link('Cuisine Types', array('controller' => 'cuisine_types', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('customer_prefs')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Customer Prefs', array('controller' => 'customer_prefs', 'action' => 'index', 'admin' => true)); ?>
	</li>   
    <li <?php if (active('food_reviews')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Food Reviews', array('controller' => 'food_reviews', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('food_types')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Food Types', array('controller' => 'food_types', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('foods')) echo 'class="current"'; ?>>		
		<?php echo $this->Html->link('Foods', array('controller' => 'foods', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('groups')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Groups', array('controller' => 'groups', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('orders')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Orders', array('controller' => 'orders', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('payment_methods')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Payment Methods', array('controller' => 'payment_methods', 'action' => 'index', 'admin' => true)); ?>
	</li> 
    <li <?php if (active('payment_types')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Payment Types', array('controller' => 'payment_types', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('set_menus')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Set Menus', array('controller' => 'set_menus', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('stores')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Stores', array('controller' => 'stores', 'action' => 'index', 'admin' => true)); ?>
	</li>
    <li <?php if (active('users')) echo 'class="current"'; ?>>
		<?php echo $this->Html->link('Users', array('controller' => 'users', 'action' => 'index', 'admin' => true)); ?>
	</li>
</ul>

<div id="container">

<div id="content">
    <?php echo $content_for_layout; ?>
</div>

<?php include('bottom.ctp'); ?>	
