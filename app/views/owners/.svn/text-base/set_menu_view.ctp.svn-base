<div class="setMenus view">
<h2><?php  __('Set Menu');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Calorie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['total_calorie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Cost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['total_cost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
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
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List My Set Menus', true), array('action' => 'set_menus', $setMenu['Store']['0']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Set Menu', true), array('action' => 'set_menu_edit', $setMenu['Store']['0']['id'], $setMenu['SetMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Set Menu', true), array('controller' => 'SetMenus', 'action' => 'delete', $setMenu['Store']['0']['id'], $setMenu['SetMenu']['id']), null, sprintf(__('Are you sure you?', true))); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Foods in the Set Menu');?></h3>
	<?php if (!empty($setMenu['Food'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Name'); ?></th>
		<th><?php __('Serve Size'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Calorie'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($setMenu['Food'] as $food):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $food['name'];?></td>
			<td><?php echo $food['serve_size'];?></td>
			<td><?php echo $food['cost'];?></td>
			<td><?php echo $food['calorie'];?></td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
<div class="related">
	<h3><?php __('SetMenu Reviews');?></h3>
	<?php if (!empty($setMenu['FoodReview'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Rating'); ?></th>
		<th><?php __('Date Reviewed'); ?></th>
		<th class="actions"><?php __('View Comment');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($setMenu['FoodReview'] as $foodReview):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td>
			<?php
				$rating=$foodReview['rating'];
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
			<td><?php echo $foodReview['created'];?></td>
			<td class="actions">
				<?php 
					//echo $this->Html->link(__('View', true), array('controller' => 'food_reviews', 'action' => 'view', $foodReview['id'])); 	

			echo $html->link('View Comment', '#', array('onclick' => "var openWin = window.open('" . $html->url(array('controller' => 'Owners', 'action' => 'view_comment', $foodReview['id'])) . "', '_blank', 'toolbar=0,scrollbars=1,location=0,status=0,menubar=0,resizable=0, width=400,height=200;');  return false;"));

				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>
</div>
