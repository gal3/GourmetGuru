<div class="foods form">
<?php echo $this->Form->create('Food');?>
	<fieldset>
		<legend><?php __('Edit Food'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('food_type_id');
		echo $this->Form->input('name');
		echo $this->Form->input('serve_size');
		echo $this->Form->input('cost');
		echo $this->Form->input('calorie');
		echo $this->Form->input('img');
		echo $this->Form->input('SetMenu');
		echo $this->Form->input('Store');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Food.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Food.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Food Types', true), array('controller' => 'food_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Type', true), array('controller' => 'food_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>