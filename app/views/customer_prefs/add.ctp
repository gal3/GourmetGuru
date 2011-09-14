<div class="customerPrefs form">
<?php echo $this->Form->create('CustomerPref');?>
	<fieldset>
		<legend><?php __('Add Customer Pref'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('max_suggestion');
		echo $this->Form->input('budget');
		echo $this->Form->input('calorie');
		echo $this->Form->input('dine_in');
		echo $this->Form->input('take_out');
		echo $this->Form->input('delivery');
		echo $this->Form->input('notes');
		echo $this->Form->input('CuisineType');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('controller' => 'cuisine_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('controller' => 'cuisine_types', 'action' => 'add')); ?> </li>
	</ul>
</div>