<div class="orders form">
<?php echo $this->Form->create('Order');?>
	<fieldset>
		<legend><?php __('Admin Add Order'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('address_id');
		echo $this->Form->input('store_id');
		echo $this->Form->input('payment_method_id');
		echo $this->Form->input('set_menu_id');
		echo $this->Form->input('confirm_datetime');
		echo $this->Form->input('complete_datetime');
		echo $this->Form->input('total_amount');
		echo $this->Form->input('total_calorie');
		echo $this->Form->input('complete');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Orders', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>