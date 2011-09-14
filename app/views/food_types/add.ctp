<div class="foodTypes form">
<?php echo $this->Form->create('FoodType');?>
	<fieldset>
		<legend><?php __('Add Food Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Food Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>