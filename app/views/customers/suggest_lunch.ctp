

<?php

echo $javascript->link('/js/customer.js');
$this->Paginator->options(array(
'update' => '#content',
'evalScripts' => true
));
?>

<div class="index accent">

    <?php include('current_pref.ctp') ?>
</div>

<div class="actions">
    <h3><?php __('Suggest by:'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('All-Day', true), array('action' => 'suggestions')); ?></li>
        <li><?php echo $this->Html->link(__('Breakfast', true), array('action' => 'suggest_breakfast')); ?></li>
        <li><?php echo $this->Html->link(__('Lunch', true), array('action' => 'suggest_lunch')); ?></li>
        <li><?php echo $this->Html->link(__('Dinner', true), array('action' => 'suggest_dinner')); ?></li>
        <li><?php echo $this->Html->link(__('Favorite', true), array('action' => 'suggest_favorite')); ?></li>
    </ul>
</div>

<div class="full-width">
    <h2>Lunch Suggestions</h2><br/>
    <table >
        <tr> 
            <th>Image</th>
            <th><?php echo $this->Paginator->sort('Combo', 'name'); ?></th> 
            <th>What is in this?</th> 
            <th><?php echo $this->Paginator->sort('Cuisine'); ?></th> 
            <th><?php echo $this->Paginator->sort('Total Calorie', 'total_calorie'); ?></th> 
            <th><?php echo $this->Paginator->sort('Price', 'total_cost'); ?></th>    
            <th><?php echo $this->Paginator->sort('Rating', 'rating'); ?></th>   
            <th><?php echo $this->Paginator->sort('Store'); ?></th>  
            <th>Order Now!</th>  
        </tr> 
        <?php foreach ($suggestSetMenu as $sD): ?> 
        <tr> 
            <td width="1px"><?php echo $this->Html->image('/img/food/'.(($sD['SetMenu']['id'])%30).'.jpg', array('url' => '/img/food/'.(($sD['SetMenu']['id'])%30).'.jpg', 'width'=>100, 'height' => 75)); ?></td>
            <td><?php echo $sD['SetMenu']['name']; ?> </td> 
            <td>
                <?php
                foreach ($sD['Food'] as $f) {
                echo $f['name']."<br/>";
                }
                ?> 
            </td>  
            <td><?php echo $sD['Store'][0]['CuisineType']['name']; ?> </td> 
            <td><?php echo $sD['SetMenu']['total_calorie']; ?> </td> 
            <td><?php echo $sD['SetMenu']['total_cost']; ?> </td> 
            <td>
                <?php
			$rating=$sD['SetMenu']['rating'];
			echo "<span style=\"display:none\">$rating</span> "; 

			for( $i=0; $i<5; $i++ )
			{
				if( $i < $rating)
					echo "<div class=\"on-star\">&nbsp;</div>";
				else
					echo "<div class=\"off-star\">&nbsp;</div>";
			}
		?>
            </td> 
            <td><?php echo $sD['Store'][0]['name']; ?> </td> 
            <td class="actions">
                <?php echo $this->Html->link(__('Order', true), array('action' => 'checkout', $sD['SetMenu']['id'])); ?>
            </td>
        </tr> 
        <?php endforeach; ?> 
    </table> 
    <?php 
    if ($count == 0){
    // no suggestions
    echo "<p><i>There are currently no set menus that fits your preferences. Please try changing your <a href='preferences/null/suggestions'>preferences</a>.</i></p>";
    }
    ?>
</div>



<?php
echo $this->Js->writeBuffer();
?>