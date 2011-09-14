<?php
echo $javascript->link('/js/customer.js');
?>

<div >
	<h2><?php __('Food Reviews');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th>Image</th>
			<th>Store</th>
			<th>Set Menu</th>
			<th>My Rating</th>
			<th>Date Rated</th>
            <th>View Comment</th>
	</tr>
	<?php
	$i = 0;
	foreach ($foodReviews as $foodReview):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		 <td width="1px"><?php echo $this->Html->image('/img/food/'.(($foodReview['SetMenu']['id'])%30).'.jpg', array('url' => '/img/food/'.(($foodReview['SetMenu']['id'])%30).'.jpg', 'width'=>100, 'height' => 75)); ?></td>
		<td>
			<?php echo $foodReview['Store']['name']; ?>
		</td>
		<td>
			<?php echo $foodReview['SetMenu']['name']; ?>
		</td>
		<td>
		<?php
			for( $i=0; $i<5; $i++ )
			{
				if( $i < $foodReview['FoodReview']['rating'] )
					echo "<div class=\"on-star\">&nbsp;</div>";
				else
					echo "<div class=\"off-star\">&nbsp;</div>";
			}
		?>
		</td>
		<td><?php echo $foodReview['FoodReview']['created']; ?>&nbsp;</td>
		<td class="actions">
			<?php 
			echo $html->link('View Comment', '#', array('onclick' => "var openWin = window.open('" . $html->url(array('action' => 'view_comment', $foodReview['FoodReview']['id'])) . "', '_blank', 'toolbar=0,scrollbars=1,location=0,status=0,menubar=0,resizable=0, width=400,height=200;');  return false;"));
                        //echo $this->Html->link(__('Edit Comment', true), array('action' => 'food_review_edit', $foodReview['FoodReview']['id'])); 
                        
                        ?>
                    
		</td>
	</tr>
<?php endforeach; ?>
	</table>
