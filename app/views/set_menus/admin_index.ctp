<div class="setMenus index">
	<h2><?php __('Set Menus');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('total_calorie');?></th>
			<th><?php echo $this->Paginator->sort('total_cost');?></th>
			<th><?php echo $this->Paginator->sort('rating');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($setMenus as $setMenu):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $setMenu['SetMenu']['id']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['name']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['description']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['total_calorie']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['total_cost']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['rating']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['created']; ?>&nbsp;</td>
		<td><?php echo $setMenu['SetMenu']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $setMenu['SetMenu']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $setMenu['SetMenu']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $setMenu['SetMenu']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setMenu['SetMenu']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Reviews', true), array('controller' => 'food_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Review', true), array('controller' => 'food_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>