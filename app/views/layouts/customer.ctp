<?php include('top.ctp'); ?>

<!-- Navigation for users logged in as customer -->

<ul id="nav">
    <li class="first <?php if (active('customers\/?$')) echo 'current'; ?>">
		<?php echo $this->Html->link('Home', array('controller' => 'customers', 'action' => 'index')); ?></li>
    <li class="expandable <?php if (active('suggestions|browseAllSetMenus')) echo 'current'; ?>">
        <?php 
        echo $this->Html->link('What to eat?', array('controller' => 'customers', 'action' => 'suggestions'));
        echo "<ul>
            <li>". $this->Html->link('Suggestions', array('controller' => 'customers', 'action' => 'suggestions'))  . "</li>
            <li>" . $this->Html->link('Browse All Set Menu', array('controller' => 'customers', 'action' => 'browseAllSetMenus')) . "</li>
        </ul>
		";
        ?>
    </li>
    <li <?php if (active('orders')) echo 'class="current"'?>>
<?php echo $this->Html->link('My Orders', array('controller' => 'customers', 'action' => 'orders')); ?>
    </li>
    <li <?php if (active('food_reviews')) echo 'class="current"'; ?>><?php echo $this->Html->link('My Reviews', array('controller' => 'customers', 'action' => 'food_reviews')); ?></li>
    <li <?php if (active('statistics')) echo 'class="current"'; ?>><?php echo $this->Html->link('Statistics', array('controller' => 'customers', 'action' => 'statistics')); ?></li>
    <li <?php if (active('achievements')) echo 'class="current"'; ?>><?php echo $this->Html->link('My Achievements', array('controller' => 'customers', 'action' => 'achievements')); ?></li>
    <li class="expandable <?php if (active('preferences|edit_info|settings')) echo 'current'; ?>"><?php 
        echo $this->Html->link('User Profile', array('controller' => 'customers', 'action' => 'personal'));
        echo "<ul>
            <li>". $this->Html->link('Personal Info', array('controller' => 'customers', 'action' => 'personal'))  . "</li>
            <li>" . $this->Html->link('Preferences', array('controller' => 'customers', 'action' => 'preferences')) . "</li>
            <li>" . $this->Html->link('Account Settings', array('controller' => 'customers', 'action' => 'settings')) . "</li>
        </ul>
		";
        ?>         
    </li>
</ul>



<div id="container">

<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->Session->flash('auth'); ?>
    <?php echo $content_for_layout; ?>
</div>		

<?php include('bottom.ctp'); ?>
