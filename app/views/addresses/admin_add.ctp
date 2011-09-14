<div class="addresses form">
<?php echo $this->Form->create('Address');?>
	<fieldset>
		<legend><?php __('Admin Add Address'); ?></legend>
	<?php
		echo $this->Form->input('customer_pref_id');
		echo $this->Form->input('type');
		echo $this->Form->input('address');
		echo $this->Form->input('city');
		echo $this->Form->input('province');
		echo $this->Form->input('country');
		echo $this->Form->input('postal');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Addresses', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>