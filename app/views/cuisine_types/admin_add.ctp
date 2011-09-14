<div class="cuisineTypes form">
<?php echo $this->Form->create('CuisineType');?>
	<fieldset>
		<legend><?php __('Admin Add Cuisine Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('CustomerPref');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
	</ul>
</div>