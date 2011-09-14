<div class="paymentMethods view">
<h2><?php  __('Payment Method');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer Pref'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($paymentMethod['CustomerPref']['id'], array('controller' => 'customer_prefs', 'action' => 'view', $paymentMethod['CustomerPref']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($paymentMethod['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $paymentMethod['PaymentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['cc_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Verification Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['verification_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expiry'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['expiry']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentMethod['PaymentMethod']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Method', true), array('action' => 'edit', $paymentMethod['PaymentMethod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Payment Method', true), array('action' => 'delete', $paymentMethod['PaymentMethod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentMethod['PaymentMethod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types', true), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type', true), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Orders');?></h3>
	<?php if (!empty($paymentMethod['Order'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Store Id'); ?></th>
		<th><?php __('Payment Method Id'); ?></th>
		<th><?php __('Confirm Datetime'); ?></th>
		<th><?php __('Complete Datetime'); ?></th>
		<th><?php __('Total Amount'); ?></th>
		<th><?php __('Total Calorie'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Complete'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paymentMethod['Order'] as $order):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $order['id'];?></td>
			<td><?php echo $order['user_id'];?></td>
			<td><?php echo $order['store_id'];?></td>
			<td><?php echo $order['payment_method_id'];?></td>
			<td><?php echo $order['confirm_datetime'];?></td>
			<td><?php echo $order['complete_datetime'];?></td>
			<td><?php echo $order['total_amount'];?></td>
			<td><?php echo $order['total_calorie'];?></td>
			<td><?php echo $order['created'];?></td>
			<td><?php echo $order['modified'];?></td>
			<td><?php echo $order['complete'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'orders', 'action' => 'view', $order['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'orders', 'action' => 'edit', $order['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'orders', 'action' => 'delete', $order['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $order['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
