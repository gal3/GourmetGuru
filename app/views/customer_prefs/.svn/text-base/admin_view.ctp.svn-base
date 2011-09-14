<div class="customerPrefs view">
<h2><?php  __('Customer Pref');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($customerPref['User']['id'], array('controller' => 'users', 'action' => 'view', $customerPref['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Max Suggestion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['max_suggestion']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Budget'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['budget']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Calorie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['calorie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dine In'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['dine_in']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Take Out'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['take_out']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delivery'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['delivery']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Notes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['notes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $customerPref['CustomerPref']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Customer Pref', true), array('action' => 'edit', $customerPref['CustomerPref']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Customer Pref', true), array('action' => 'delete', $customerPref['CustomerPref']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customerPref['CustomerPref']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Addresses');?></h3>
	<?php if (!empty($customerPref['Address'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Pref Id'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Province'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Postal'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customerPref['Address'] as $address):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $address['id'];?></td>
			<td><?php echo $address['customer_pref_id'];?></td>
			<td><?php echo $address['address'];?></td>
			<td><?php echo $address['city'];?></td>
			<td><?php echo $address['province'];?></td>
			<td><?php echo $address['country'];?></td>
			<td><?php echo $address['postal'];?></td>
			<td><?php echo $address['created'];?></td>
			<td><?php echo $address['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'addresses', 'action' => 'view', $address['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'addresses', 'action' => 'edit', $address['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'addresses', 'action' => 'delete', $address['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $address['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Address', true), array('controller' => 'addresses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Payment Methods');?></h3>
	<?php if (!empty($customerPref['PaymentMethod'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Customer Pref Id'); ?></th>
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
		foreach ($customerPref['PaymentMethod'] as $paymentMethod):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $paymentMethod['id'];?></td>
			<td><?php echo $paymentMethod['customer_pref_id'];?></td>
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
<div class="related">
	<h3><?php __('Related Cuisine Types');?></h3>
	<?php if (!empty($customerPref['CuisineType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($customerPref['CuisineType'] as $cuisineType):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cuisineType['id'];?></td>
			<td><?php echo $cuisineType['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'cuisine_types', 'action' => 'view', $cuisineType['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'cuisine_types', 'action' => 'edit', $cuisineType['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'cuisine_types', 'action' => 'delete', $cuisineType['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cuisineType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('controller' => 'cuisine_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
