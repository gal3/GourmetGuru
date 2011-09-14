<div class="paymentMethods index">
	<h2><?php __('Payment Methods');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('customer_pref_id');?></th>
			<th><?php echo $this->Paginator->sort('payment_type_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('cc_number');?></th>
			<th><?php echo $this->Paginator->sort('verification_number');?></th>
			<th><?php echo $this->Paginator->sort('expiry');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paymentMethods as $paymentMethod):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $paymentMethod['PaymentMethod']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paymentMethod['CustomerPref']['id'], array('controller' => 'customer_prefs', 'action' => 'view', $paymentMethod['CustomerPref']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($paymentMethod['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $paymentMethod['PaymentType']['id'])); ?>
		</td>
		<td><?php echo $paymentMethod['PaymentMethod']['name']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['cc_number']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['verification_number']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['expiry']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['created']; ?>&nbsp;</td>
		<td><?php echo $paymentMethod['PaymentMethod']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentMethod['PaymentMethod']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types', true), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type', true), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>