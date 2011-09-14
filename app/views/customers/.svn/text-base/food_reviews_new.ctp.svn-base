<?php
	$javascript->link('jquery.js', false);
	$javascript->link('jquery.rating.js', false);
?>


<div class="foodReviews form">
<?php echo $this->Form->create('Customer', array("url"=>"/".$this->params['url']['url']));?>
	<fieldset>
		<legend><?php echo $order['SetMenu']['name']; ?></legend>

		<!--HACK: I could not find a way to remove the cakephp's label when using the built in radio button generator
		<input name="data[FoodReview][rating]" type="radio" class="star" value="1" />
		<input name="data[FoodReview][rating]" type="radio" class="star" value="2" />
		<input name="data[FoodReview][rating]" type="radio" class="star" value="3" />
		<input name="data[FoodReview][rating]" type="radio" class="star" value="4" />
		<input name="data[FoodReview][rating]" type="radio" class="star" value="5" />
		<br /><br />
		-->		

	<?php
		//UNHACK
	  $options=array('1'=>'','2'=>'', '3'=>'','4'=>'', '5'=>'');
	  $attributes=array('legend'=>false, 'class' => 'star');
	  echo $this->Form->radio('FoodReview.rating',$options,$attributes);
	  echo "<br/>";
	  echo "<br/>";
		echo $this->Form->input('FoodReview.comment');


	?>
	</fieldset>
<?php echo $this->Html->link(__('Back', true), array('controller' => 'customers', 'action' => 'orders')); ?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
