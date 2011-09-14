<div class="foods index">
	<h2><?php __($store['0']['Store']['name'].' Foods');?></h2>
	<?php echo $this->Html->link(__('My Store Information', true), array('action' => 'store_view', $id)); ?> &nbsp;
	<?php echo $this->Html->link(__('My Foods', true), array('action' => 'foods', $id)); ?> &nbsp;
	<?php echo $this->Html->link(__('My Set Menus', true), array('action' => 'set_menus', $id)); ?>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('food_type_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('Serving Size','serve_size');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('Calories', 'calorie');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($foods as $food):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $food['FoodType']['name']; ?>
		</td>
		<td><?php echo $food['Food']['name']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['serve_size']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['cost']; ?>&nbsp;</td>
		<td><?php echo $food['Food']['calorie']; ?>&nbsp;</td>
		<td class="actions">
			<?php //echo $this->Html->link(__('View', true), array('action' => 'food_view', $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'food_edit', $id, $food['Food']['id'])); ?>
			<?php echo $this->Html->link(__('Delete Food', true), array('controller' => 'foods', 'action' => 'delete', $id, $food['Food']['id']), null, sprintf(__('Are you sure? All Set Menus containing this food will be deleted.', true))); ?>
			<?php //echo $this->Html->link(__('Delete Food', true), array('action' => 'food_delete', $id, $food['Food']['id']), null, sprintf(__('Are you sure?', true))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
    <?php
    $count = count($foods);
    if ($count == 0)
        echo "<p><i>You currently do not have any food listed. Click " . $this->Html->link(__('Add a New Food', true), array('action' => 'food_add', $id)) . " to add now!</i></p>";
    ?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Add a New Food', true), array('action' => 'food_add', $id)); ?></li>
	</ul>
</div>
