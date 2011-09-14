<div class="addresses form">
<?php echo $this->Form->create('Customer', array('action' => 'addresses_add'));?>
	<fieldset>
		<legend><?php __('Add a New Delivery Address'); ?></legend>
	<?php
		echo $this->Form->input('Address.type', array('label' => 'Description (Home/Work/Other)'));
		echo $this->Form->input('Address.address');
		echo $this->Form->input('Address.city');
		echo $this->Form->input('Address.province');
		echo $this->Form->input('Address.country');
		echo $this->Form->input('Address.postal');
		echo $this->Form->hidden("referer", array( 'value' => $referer));
		echo $this->Form->hidden("arg", array( 'value' => $arg));
	?>
	</fieldset>
<br />

<span style="float: right"><?php echo $this->Form->end( array('div' => array('class' => ' ')));?></span>
<button onclick="location.href='<?php echo $html->url($back); ?>'">Back</button>
</div>
<?php include('info_action.ctp'); ?>