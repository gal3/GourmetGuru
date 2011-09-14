<div class="stores view">
<h2><?php  __('Store');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($store['User']['id'], array('controller' => 'users', 'action' => 'view', $store['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cuisine Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($store['CuisineType']['name'], array('controller' => 'cuisine_types', 'action' => 'view', $store['CuisineType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['phone']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Postal'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['postal']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Avg Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['avg_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dine In'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['dine_in']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Takeout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['takeout']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delivery'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['delivery']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Open Hrs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['open_hrs']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Close Hrs'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['close_hrs']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['Store']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Store', true), array('action' => 'edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Store', true), array('action' => 'delete', $store['Store']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Food Reviews');?></h3>
	<?php if (!empty($store['FoodReview'])):?>
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
		foreach ($store['FoodReview'] as $foodReview):
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
	<?php if (!empty($store['Food'])):?>
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
		foreach ($store['Food'] as $food):
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
	<h3><?php __('Related Set Menus');?></h3>
	<?php if (!empty($store['SetMenu'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Total Calorie'); ?></th>
		<th><?php __('Total Cost'); ?></th>
		<th><?php __('Rating'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($store['SetMenu'] as $setMenu):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $setMenu['id'];?></td>
			<td><?php echo $setMenu['name'];?></td>
			<td><?php echo $setMenu['description'];?></td>
			<td><?php echo $setMenu['total_calorie'];?></td>
			<td><?php echo $setMenu['total_cost'];?></td>
			<td><?php echo $setMenu['rating'];?></td>
			<td><?php echo $setMenu['created'];?></td>
			<td><?php echo $setMenu['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'set_menus', 'action' => 'view', $setMenu['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'set_menus', 'action' => 'edit', $setMenu['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'set_menus', 'action' => 'delete', $setMenu['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $setMenu['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
