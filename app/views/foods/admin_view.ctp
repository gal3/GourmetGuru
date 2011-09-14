<div class="foods view">
<h2><?php  __('Food');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Food Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($food['FoodType']['name'], array('controller' => 'food_types', 'action' => 'view', $food['FoodType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Serve Size'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['serve_size']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cost'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['cost']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Calorie'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['calorie']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Img'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $food['Food']['img']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Food', true), array('action' => 'edit', $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Food', true), array('action' => 'delete', $food['Food']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $food['Food']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Types', true), array('controller' => 'food_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Type', true), array('controller' => 'food_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Set Menus', true), array('controller' => 'set_menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Set Menu', true), array('controller' => 'set_menus', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Stores', true), array('controller' => 'stores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Store', true), array('controller' => 'stores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Set Menus');?></h3>
	<?php if (!empty($food['SetMenu'])):?>
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
		foreach ($food['SetMenu'] as $setMenu):
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
<div class="related">
	<h3><?php __('Related Stores');?></h3>
	<?php if (!empty($food['Store'])):?>
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
		foreach ($food['Store'] as $store):
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
