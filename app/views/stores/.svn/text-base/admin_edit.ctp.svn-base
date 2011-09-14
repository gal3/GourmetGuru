<div class="stores form">
<?php echo $this->Form->create('Store');?>
	<h2><?php __('Edit Store'); ?></h2>
	<fieldset>
		<legend>Admin</legend>
		<?php
			echo $this->Form->input('user_id');
			echo $this->Form->input('avg_rating');
		?>
	</fieldset>
	
	<fieldset>		
		<legend>Basic info</legend>
		<?php
			echo $this->Form->input('name');
			echo $this->Form->input('description');
			echo $this->Form->input('phone');
			echo $this->Form->input('address');
			echo $this->Form->input('city');
			echo $this->Form->input('province');
			echo $this->Form->input('postal');
			echo $this->Form->input('country');
			echo $this->Form->input('open_hrs');
			echo $this->Form->input('close_hrs');
		?>
	</fieldset>
	
	<fieldset>
		<legend>Dining options</legend>
	<?php
		echo $this->Form->input('dine_in');
		echo $this->Form->input('takeout');
		echo $this->Form->input('delivery');
















	?>
	</fieldset>
	
	<fieldset>
		<legend>Menu</legend>
	<?php
		echo $this->Form->input('cuisine_type_id');
		echo $this->Form->input('Food');
		echo $this->Form->input('SetMenu');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Store.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Store.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('controller' => 'cuisine_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('controller' => 'cuisine_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Reviews', true), array('controller' => 'food_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Review', true), array('controller' => 'food_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>
