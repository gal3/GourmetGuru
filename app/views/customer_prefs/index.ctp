<div class="customerPrefs index">
	<h2><?php __('Customer Prefs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('max_suggestion');?></th>
			<th><?php echo $this->Paginator->sort('budget');?></th>
			<th><?php echo $this->Paginator->sort('calorie');?></th>
			<th><?php echo $this->Paginator->sort('dine_in');?></th>
			<th><?php echo $this->Paginator->sort('take_out');?></th>
			<th><?php echo $this->Paginator->sort('delivery');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($customerPrefs as $customerPref):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $customerPref['CustomerPref']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($customerPref['User']['id'], array('controller' => 'users', 'action' => 'view', $customerPref['User']['id'])); ?>
		</td>
		<td><?php echo $customerPref['CustomerPref']['max_suggestion']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['budget']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['calorie']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['dine_in']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['take_out']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['delivery']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['notes']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['created']; ?>&nbsp;</td>
		<td><?php echo $customerPref['CustomerPref']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $customerPref['CustomerPref']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $customerPref['CustomerPref']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $customerPref['CustomerPref']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customerPref['CustomerPref']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Addresses', true), array('controller' => 'addresses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Address', true), array('controller' => 'addresses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('controller' => 'cuisine_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('controller' => 'cuisine_types', 'action' => 'add')); ?> </li>
	</ul>
</div>