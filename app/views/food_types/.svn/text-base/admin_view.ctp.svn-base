<div class="foodTypes view">
<h2><?php  __('Food Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $foodType['FoodType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $foodType['FoodType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Food Type', true), array('action' => 'edit', $foodType['FoodType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Food Type', true), array('action' => 'delete', $foodType['FoodType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $foodType['FoodType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Food Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Foods', true), array('controller' => 'foods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Food', true), array('controller' => 'foods', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Foods');?></h3>
	<?php if (!empty($foodType['Food'])):?>
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
		foreach ($foodType['Food'] as $food):
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
