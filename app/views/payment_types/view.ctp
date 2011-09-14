<div class="paymentTypes view">
<h2><?php  __('Payment Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentType['PaymentType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentType['PaymentType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Type', true), array('action' => 'edit', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Payment Type', true), array('action' => 'delete', $paymentType['PaymentType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Methods', true), array('controller' => 'payment_methods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Payment Methods');?></h3>
	<?php if (!empty($paymentType['PaymentMethod'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Payment Type Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Cc Number'); ?></th>
		<th><?php __('Verification Number'); ?></th>
		<th><?php __('Expiry'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paymentType['PaymentMethod'] as $paymentMethod):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $paymentMethod['id'];?></td>
			<td><?php echo $paymentMethod['payment_type_id'];?></td>
			<td><?php echo $paymentMethod['name'];?></td>
			<td><?php echo $paymentMethod['cc_number'];?></td>
			<td><?php echo $paymentMethod['verification_number'];?></td>
			<td><?php echo $paymentMethod['expiry'];?></td>
			<td><?php echo $paymentMethod['created'];?></td>
			<td><?php echo $paymentMethod['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'payment_methods', 'action' => 'view', $paymentMethod['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'payment_methods', 'action' => 'edit', $paymentMethod['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'payment_methods', 'action' => 'delete', $paymentMethod['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentMethod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Method', true), array('controller' => 'payment_methods', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
