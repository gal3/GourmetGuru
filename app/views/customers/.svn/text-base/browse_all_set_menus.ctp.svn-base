<script>
$(document).ready(function() {
	$("a").imgPreview({
		imgCSS: { width: 300 }
	});
 });

</script>

<?php
$this->Paginator->options(array(
'update' => '#content',
'evalScripts' => true
));
?>
<h2>All available set menus </h2>

<table cellpadding="0" cellspacing="0">
    <tr>
        <th>Image</th>
		<th><?php echo $this->Paginator->sort('Combo Name', 'name'); ?></th>
        <th><?php echo $this->Paginator->sort('Description', 'description'); ?></th>
        <th><?php echo $this->Paginator->sort('Total Calorie', 'total_calorie'); ?></th>
        <th><?php echo $this->Paginator->sort('Price', 'total_cost'); ?></th>
        <th><?php echo $this->Paginator->sort('Rating', 'rating'); ?></th>
        <th>Action</th>  
    </tr>
    <?php
    $i = 0;
    foreach ($setMenus as $setMenu):
        $class = null;
        if ($i++ % 2 == 0) {
            $class = ' class="altrow"';
        }
        ?>
        <tr <?php echo $class; ?>>
			<td width="1px"><?php echo $this->Html->image('/img/food/'.(($setMenu['SetMenu']['id'])%30).'.jpg', array('url' => '/img/food/'.(($setMenu['SetMenu']['id'])%30).'.jpg', 'width'=>100, 'height' => 75)); ?></td>
            <td><?php echo $setMenu['SetMenu']['name']; ?>&nbsp;</td>
            <td><?php echo $setMenu['SetMenu']['description']; ?>&nbsp;</td>
            <td><?php echo $setMenu['SetMenu']['total_calorie']; ?>&nbsp;</td>
            <td><?php echo $setMenu['SetMenu']['total_cost']; ?>&nbsp;</td>
	    <td>
		<?php
			$rating=$setMenu['SetMenu']['rating'];
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
            
            <td class="actions">
                <?php echo $this->Html->link(__('Order', true), array('action' => 'checkout', $setMenu['SetMenu']['id'])); ?>
            </td>        
        </tr>
    <?php endforeach; ?>
</table>
<p>
    <?php
    echo $this->Paginator->counter(array(
        'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
    ));
    ?>	</p>

<div class="paging">
    <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class' => 'disabled')); ?>
	 | 	<?php echo $this->Paginator->numbers(); ?>
    |
    <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled')); ?>
</div>


<?php
echo $this->Js->writeBuffer();
?>