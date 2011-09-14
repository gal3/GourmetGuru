<div class="cuisineTypes view">
<h2><?php  __('Cuisine Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cuisineType['CuisineType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cuisineType['CuisineType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuisine Type', true), array('action' => 'edit', $cuisineType['CuisineType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Cuisine Type', true), array('action' => 'delete', $cuisineType['CuisineType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cuisineType['CuisineType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuisine Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuisine Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Customer Prefs', true), array('controller' => 'customer_prefs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Customer Pref', true), array('controller' => 'customer_prefs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Stores');?></h3>
	<?php if (!empty($cuisineType['Store'])):?>
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
		foreach ($cuisineType['Store'] as $store):
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
<div class="related">
	<h3><?php __('Related Customer Prefs');?></h3>
	<?php if (!empty($cuisineType['CustomerPref'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Dine Type Id'); ?></th>
		<th><?php __('Payment Method Id'); ?></th>
		<th><?php __('Max Suggestion'); ?></th>
		<th><?php __('Budget'); ?></th>
		<th><?php __('Calorie'); ?></th>
		<th><?php __('Notes'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cuisineType['CustomerPref'] as $customerPref):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $customerPref['id'];?></td>
			<td><?php echo $customerPref['user_id'];?></td>
			<td><?php echo $customerPref['dine_type_id'];?></td>
			<td><?php echo $customerPref['payment_method_id'];?></td>
			<td><?php echo $customerPref['max_suggestion'];?></td>
			<td><?php echo $customerPref['budget'];?></td>
			<td><?php echo $customerPref['calorie'];?></td>
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
