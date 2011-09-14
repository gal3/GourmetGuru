<div class="paymentMethods form">
<?php echo $this->Form->create('Customer', array("url"=>"/".$this->params['url']['url']));?>
	<fieldset>
		<legend><?php __('Edit Payment Method'); ?></legend>
	<?php
		echo $this->Form->input('PaymentMethod.id');
		echo $this->Form->input('PaymentMethod.payment_type_id');
		echo $this->Form->input('PaymentMethod.name', array('label' => 'Cardholder Name', 'escape'=>false));
		echo $this->Form->input('PaymentMethod.cc_number', array('label' => 'Credit Card Number'));
		echo $this->Form->input('PaymentMethod.verification_number');
		echo $this->Form->input('PaymentMethod.expiry', array('label' => 'Expiry Date'));
	?>
	</fieldset>
<?php echo $this->Html->link(__('Back', true), array('controller' => 'customers', 'action' => 'payment_methods')); ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<?php include('info_action.ctp'); ?>
