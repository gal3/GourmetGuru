<div class="addresses form">
<?php echo $this->Form->create('Customer', array("url"=>"/".$this->params['url']['url']));?>
	<fieldset>
		<legend><?php __('Edit Delivery Address'); ?></legend>
	<?php
		echo $this->Form->input('Address.id');
		echo $this->Form->input('Address.type', array('label' => 'Description (Home/Work/Other)'));
		echo $this->Form->input('Address.address');
		echo $this->Form->input('Address.city');
		echo $this->Form->input('Address.province');
		echo $this->Form->input('Address.country');
		echo $this->Form->input('Address.postal');
	?>
	</fieldset>
<?php echo $this->Html->link(__('Back', true), array('controller' => 'customers', 'action' => 'addresses')); ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php include('info_action.ctp'); ?>
