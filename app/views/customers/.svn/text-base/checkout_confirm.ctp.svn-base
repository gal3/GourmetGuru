<?php $id=$order['SetMenu']['id']; ?>

<fieldset>
	<legend>Order</legend>
		<p>Menu Name: <?php echo $order['SetMenu']['name']; ?></p>
		<p>Food Items in Menu: 
		<?php 
		
			$i=0;
			foreach( $order['Food'] as $food )
			{
				if( $i != 0 )
					echo ', ';
				$name=$food['name'];
				echo $name;
				$i++;
			}
		?>
		</p>
		<p>Description: <?php echo $order['SetMenu']['description']; ?></p>
		<p>Calories: <?php echo $order['SetMenu']['total_calorie']; ?></p>
		<p>Total Cost: <?php echo $order['SetMenu']['total_cost']; ?> </p>
</fieldset>

<fieldset>
	<legend>Delivery Address</legend>
<?php
if( $deliveryType == 0 ) //delivery
{
	echo "
			<p>Order Type: Delivery</p>
			<p>Address:". $address['Address']['address']." </p>
			<p>City:". $address['Address']['city']." </p>
			<p>Province:". $address['Address']['province']." </p>
			<p>Country:". $address['Address']['country']." </p>
			<p>Postal Code:". $address['Address']['postal']." </p>
	 ";
}
else if( $deliveryType == 1 ) //dine in
{
	echo "<p>Delivery Type: Dine In</p>";
}
else if( $deliveryType == 2 ) //takeout
{
	echo "<p>Delivery Type: Takeout</p>";
}
else //wtf, this should never happen unless someone manually enters the URL
{
	echo "<p>ERROR</p>";
}
?>
</fieldset>

<fieldset>
	<legend>Payment Method</legend>
		<p>Type: <?php echo $paymentType['PaymentType']['name']; ?></p>
		<p>Name: <?php echo $payment['PaymentMethod']['name']; ?></p>
		<p>Credit Card Number: 
		<?php         
		//only show the last four digits of the credit card number
		$tmp = str_split($payment['PaymentMethod']['cc_number']);
			$count = 0;
				$strLen=strlen($payment['PaymentMethod']['cc_number']);
				foreach($tmp as $t){
					if ($count >= $strLen-4)
						echo $t; 
				else
					echo "*";
				$count ++;
			}
		
		?></p>
		<p>Verification Number: <?php echo $payment['PaymentMethod']['verification_number']; ?></p>
		<p>Expiry Date: <?php echo $payment['PaymentMethod']['expiry']; ?></p>
</fieldset>

<br />

<?php
	//provide a submit button for the user to confirm their order if the user came to this view through the checkout process
	if( !$displayOnly )
	{
		echo $this->Form->create('Customer', array('action' => 'confirmed'));
		echo $this->Form->hidden("address_id", array( 'value' => $address['Address']['id']));
		echo $this->Form->hidden("set_menu_id", array( 'value' => $order['SetMenu']['id']));
		echo $this->Form->hidden("payment_method_id", array( 'value' =>$payment['PaymentMethod']['id']));
		echo $this->Form->hidden("deliveryType", array( 'value' => $deliveryType));
		echo '<span style="float: right">'.$this->Form->end( array('div' => array('class' => ' '))).'</span>';
		
		$url=$html->url("/customers/checkout/$id");
		
		echo '<button onclick="location.href=\''.$url.'\'">Back</button>';
	}
	else
	{
		$url=$html->url($referer);
		echo "<button onclick=\"location.href='$url'\">Back</button>";
	}
?>





