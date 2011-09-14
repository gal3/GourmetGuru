<div class="foods index">
	<h2><?php __('Foods');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('food_type_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('serve_size');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('calorie');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('img');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($foods as $food):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $food['Food']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($food['FoodType']['name'], array('controller' => 'food_types', 'action' => 'view', $food['FoodType']['id'])); ?>
		</td>
		<td><?php echo $food['Food']['name']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['serve_size']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['cost']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['calorie']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['created']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['modified']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['img']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $food['Food']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $food['Food']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Food', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Food Types', true), array('controller' => 'food_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Type', true), array('controller' => 'food_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>