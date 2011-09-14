<div class="setMenus view">
<h2><?php  __('Set Menu');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Calorie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['total_calorie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Cost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['total_cost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $setMenu['SetMenu']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Set Menu', true), array('action' => 'edit', $setMenu['SetMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Set Menu', true), array('action' => 'delete', $setMenu['SetMenu']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setMenu['SetMenu']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Orders');?></h3>
	<?php if (!empty($setMenu['Order'])):?>
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
		foreach ($setMenu['Order'] as $order):
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
	<h3><?php __('Related Food Reviews');?></h3>
	<?php if (!empty($setMenu['FoodReview'])):?>
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
		foreach ($setMenu['FoodReview'] as $foodReview):
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
	<h3><?php __('Related Foods');?></h3>
	<?php if (!empty($setMenu['Food'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Food Type Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Serve Size'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Calorie'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Img'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($setMenu['Food'] as $food):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $food['id'];?></td>
			<td><?php echo $food['food_type_id'];?></td>
			<td><?php echo $food['name'];?></td>
			<td><?php echo $food['serve_size'];?></td>
			<td><?php echo $food['cost'];?></td>
			<td><?php echo $food['calorie'];?></td>
			<td><?php echo $food['created'];?></td>
			<td><?php echo $food['modified'];?></td>
			<td><?php echo $food['img'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'foods', 'action' => 'view', $food['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'foods', 'action' => 'edit', $food['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'foods', 'action' => 'delete', $food['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $food['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Stores');?></h3>
	<?php if (!empty($setMenu['Store'])):?>
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
		foreach ($setMenu['Store'] as $store):
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
