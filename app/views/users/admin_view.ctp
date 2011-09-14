<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Group'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('First Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['first_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Last Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['last_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Reviews', true), array('controller' => 'food_reviews', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Review', true), array('controller' => 'food_reviews', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Orders', true), array('controller' => 'orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order', true), array('controller' => 'orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Customer Prefs');?></h3>
	<?php if (!empty($user['CustomerPref'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Max Suggestion'); ?></th>
		<th><?php __('Budget'); ?></th>
		<th><?php __('Calorie'); ?></th>
		<th><?php __('Dine In'); ?></th>
		<th><?php __('Take Out'); ?></th>
		<th><?php __('Delivery'); ?></th>
		<th><?php __('Notes'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CustomerPref'] as $customerPref):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $customerPref['id'];?></td>
			<td><?php echo $customerPref['user_id'];?></td>
			<td><?php echo $customerPref['max_suggestion'];?></td>
			<td><?php echo $customerPref['budget'];?></td>
			<td><?php echo $customerPref['calorie'];?></td>
			<td><?php echo $customerPref['dine_in'];?></td>
			<td><?php echo $customerPref['take_out'];?></td>
			<td><?php echo $customerPref['delivery'];?></td>
			<td><?php echo $customerPref['notes'];?></td>
			<td><?php echo $customerPref['created'];?></td>
			<td><?php echo $customerPref['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'customer_prefs', 'action' => 'view', $customerPref['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'customer_prefs', 'action' => 'edit', $customerPref['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'customer_prefs', 'action' => 'delete', $customerPref['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $customerPref['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Food Reviews');?></h3>
	<?php if (!empty($user['FoodReview'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Set Menu Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Store Id'); ?></th>
		<th><?php __('Comment'); ?></th>
		<th><?php __('Rating'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['FoodReview'] as $foodReview):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $foodReview['id'];?></td>
			<td><?php echo $foodReview['set_menu_id'];?></td>
			<td><?php echo $foodReview['user_id'];?></td>
			<td><?php echo $foodReview['store_id'];?></td>
			<td><?php echo $foodReview['comment'];?></td>
			<td><?php echo $foodReview['rating'];?></td>
			<td><?php echo $foodReview['created'];?></td>
			<td><?php echo $foodReview['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'food_reviews', 'action' => 'view', $foodReview['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'food_reviews', 'action' => 'edit', $foodReview['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'food_reviews', 'action' => 'delete', $foodReview['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foodReview['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food Review', true), array('controller' => 'food_reviews', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Orders');?></h3>
	<?php if (!empty($user['Order'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Store Id'); ?></th>
		<th><?php __('Address Id'); ?></th>
		<th><?php __('Payment Method Id'); ?></th>
		<th><?php __('Set Menu Id'); ?></th>
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
		foreach ($user['Order'] as $order):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $order['id'];?></td>
			<td><?php echo $order['user_id'];?></td>
			<td><?php echo $order['store_id'];?></td>
			<td><?php echo $order['address_id'];?></td>
			<td><?php echo $order['payment_method_id'];?></td>
			<td><?php echo $order['set_menu_id'];?></td>
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
<div class="related">
	<h3><?php __('Related Stores');?></h3>
	<?php if (!empty($user['Store'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Cuisine Type Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Province'); ?></th>
		<th><?php __('Postal'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Avg Rating'); ?></th>
		<th><?php __('Dine In'); ?></th>
		<th><?php __('Takeout'); ?></th>
		<th><?php __('Delivery'); ?></th>
		<th><?php __('Open Hrs'); ?></th>
		<th><?php __('Close Hrs'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Store'] as $store):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $store['id'];?></td>
			<td><?php echo $store['user_id'];?></td>
			<td><?php echo $store['cuisine_type_id'];?></td>
			<td><?php echo $store['name'];?></td>
			<td><?php echo $store['description'];?></td>
			<td><?php echo $store['phone'];?></td>
			<td><?php echo $store['address'];?></td>
			<td><?php echo $store['city'];?></td>
			<td><?php echo $store['province'];?></td>
			<td><?php echo $store['postal'];?></td>
			<td><?php echo $store['country'];?></td>
			<td><?php echo $store['avg_rating'];?></td>
			<td><?php echo $store['dine_in'];?></td>
			<td><?php echo $store['takeout'];?></td>
			<td><?php echo $store['delivery'];?></td>
			<td><?php echo $store['open_hrs'];?></td>
			<td><?php echo $store['close_hrs'];?></td>
			<td><?php echo $store['created'];?></td>
			<td><?php echo $store['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'stores', 'action' => 'view', $store['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'stores', 'action' => 'edit', $store['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'stores', 'action' => 'delete', $store['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
