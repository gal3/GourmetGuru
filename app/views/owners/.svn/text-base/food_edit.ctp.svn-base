<div class="foods form">
<?php echo $this->Form->create('Owner', array("url"=>"/".$this->params['url']['url']));?>
	<fieldset>
		<legend><?php __('Edit Food'); ?></legend>
	<?php
		echo $this->Form->input('Food.id');
		echo $this->Form->input('Food.food_type_id');
		echo $this->Form->input('Food.name');
		echo $this->Form->input('Food.serve_size', array('label' => 'Serving Size(ml: liquid/ gram: solids)'));
		echo $this->Form->input('Food.cost');
		echo $this->Form->input('Food.calorie');
//		echo $this->Form->input('Food.img');
//		echo $this->Form->input('Food.SetMenu');
//		echo $this->Form->input('Food.Store');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List My Foods', true), array('action' => 'foods', $store)); ?></li>
	</ul>
</div>
