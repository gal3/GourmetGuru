<?php //javascript function that hides/shows the addresses dropdown list. Note that this function is also called on page load/refresh ?>
<SCRIPT TYPE="text/javascript">
function hideAddress()
{
	var address = document.getElementById("hide");
	var delivValue = document.getElementById("deliveryType").value;
	
    if( delivValue == 0 ) //delivery
	{
		address.style.display="block";
	}
	else if( delivValue == 1 ) //dine in
	{
		address.style.display="none";
	}
	else if( delivValue == 2 ) //takeout
	{
		address.style.display="none";
	}
	else
	{
		alert('Invalid Input');
	}
	
}

window.onload=hideAddress;
</SCRIPT>

<fieldset>
	<legend><?php __('Order Checkout'); ?></legend>
	
<?php
		echo $this->Form->create('Customer', array('action' => 'checkout_confirm'));
		
		//magic numbers that must be consistent when working with delivery type
		//this should be improved
		if( $store['delivery'] == 1 )
			$deliveryOptions[0]="Delivery";
		if( $store['dine_in'] == 1 )
			$deliveryOptions[1]="Dine In";
		if( $store['takeout'] == 1 )
			$deliveryOptions[2]="Takeout";
		
		echo $this->Form->select('Delivery Type', $deliveryOptions, null, array('empty' => false, 'onchange' =>'hideAddress()', 'id' => 'deliveryType'));
		
		echo '<br />';
		echo '<br />';
		
		echo '<div id="hide">';
		foreach ($addresses as $address):
			$adressOptions[$address['Address']['id']]=$address['Address']['address'].': '.$address['Address']['postal'].' at '.$address['Address']['city'].', '.$address['Address']['country'];
		endforeach; 
		
		echo $this->Form->select('Delivery Address', $adressOptions, null, array('empty' => false));
		echo '<br/><span><a href="'.$html->url("/customers/addresses").'"> Add or edit your delivery address</a>.</span>';
		
		echo '<br />';
		echo '<br />';
		echo '</div>';
		foreach ($payments as $payment):
			$paymentOptions[$payment['PaymentMethod']['id']]=$payment['PaymentMethod']['name'].': '.$payment['PaymentMethod']['cc_number'];
		endforeach; 
		
		echo $this->Form->select('Payment Method', $paymentOptions, null, array('empty' => false));
		echo '<br/><span><a href="'.$html->url("/customers/payment_methods").'"> Add or edit your payment method</a>.</span>';
		
		echo $this->Form->hidden("id", array( 'value' => $id));
?>
</fieldset>
<br />

<span style="float: right"><?php echo $this->Form->end( array('div' => array('class' => ' ')));?></span>
<button onclick="location.href='<?php echo $html->url($referer); ?>'">Back</button>