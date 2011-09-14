<div class="stores index">
	<h2><?php __('Stores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('cuisine_type_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('province');?></th>
			<th><?php echo $this->Paginator->sort('postal');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('avg_rating');?></th>
			<th><?php echo $this->Paginator->sort('dine_in');?></th>
			<th><?php echo $this->Paginator->sort('takeout');?></th>
			<th><?php echo $this->Paginator->sort('delivery');?></th>
			<th><?php echo $this->Paginator->sort('open_hrs');?></th>
			<th><?php echo $this->Paginator->sort('close_hrs');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($stores as $store):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $store['Store']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($store['User']['id'], array('controller' => 'users', 'action' => 'view', $store['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($store['CuisineType']['name'], array('controller' => 'cuisine_types', 'action' => 'view', $store['CuisineType']['id'])); ?>
		</td>
		<td><?php echo $store['Store']['name']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['description']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['phone']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['address']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['city']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['province']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['postal']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['country']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['avg_rating']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['dine_in']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['takeout']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['delivery']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['open_hrs']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['close_hrs']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['created']; ?>&nbsp;</td>
		<td><?php echo $store['Store']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $store['Store']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $store['Store']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['Store']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Store', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('controller' => 'cuisine_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('controller' => 'cuisine_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Reviews', true), array('controller' => 'food_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Review', true), array('controller' => 'food_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
	</ul>
</div>