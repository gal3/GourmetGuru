<div class="foodReviews index">
	<h2><?php __('Food Reviews');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('set_menu_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('store_id');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('rating');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td><?php echo $foodReview['FoodReview']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($foodReview['SetMenu']['name'], array('controller' => 'set_menus', 'action' => 'view', $foodReview['SetMenu']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($foodReview['User']['id'], array('controller' => 'users', 'action' => 'view', $foodReview['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($foodReview['Store']['name'], array('controller' => 'stores', 'action' => 'view', $foodReview['Store']['id'])); ?>
		</td>
		<td><?php echo $foodReview['FoodReview']['comment']; ?>&nbsp;</td>
		<td><?php echo $foodReview['FoodReview']['rating']; ?>&nbsp;</td>
		<td><?php echo $foodReview['FoodReview']['created']; ?>&nbsp;</td>
		<td><?php echo $foodReview['FoodReview']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $foodReview['FoodReview']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $foodReview['FoodReview']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $foodReview['FoodReview']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foodReview['FoodReview']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Food Review', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>