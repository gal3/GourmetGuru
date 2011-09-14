<div class="paymentMethods form">
<?php echo $this->Form->create('Customer', array('action' => 'payment_add'));?>
	<fieldset>
		<legend><?php __('Add Payment Method'); ?></legend>
	<?php
		echo $this->Form->input('PaymentMethod.payment_type_id');
		echo $this->Form->input('PaymentMethod.name', array('label' => 'Cardholder Name'));
		echo $this->Form->input('PaymentMethod.cc_number', array('label' => 'Credit Card Number'));
		echo $this->Form->input('PaymentMethod.verification_number');
		echo $this->Form->input('PaymentMethod.expiry', array('label' => 'Expiry Date'));
		echo $this->Form->hidden("referer", array( 'value' => $referer));
		echo $this->Form->hidden("arg", array( 'value' => $arg));
	?>
	</fieldset>
<br />

<span style="float: right"><?php echo $this->Form->end( array('div' => array('class' => ' ')));?></span>
<button onclick="location.href='<?php echo $html->url($back); ?>'">Back</button>
</div>
<?php include('info_action.ctp'); ?>