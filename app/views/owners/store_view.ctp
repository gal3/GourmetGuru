<div class="stores view">
<h2><?php  __($store['Store']['name']);?></h2>
<?php echo $this->Html->link(__('My Store Information', true), array('action' => 'store_view', $store['Store']['id'])); ?> &nbsp;
<?php echo $this->Html->link(__('My Foods', true), array('action' => 'foods', $store['Store']['id'])); ?> &nbsp;
<?php echo $this->Html->link(__('My Set Menus', true), array('action' => 'set_menus', $store['Store']['id'])); ?>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cuisine Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $store['CuisineType']['name']; ?>
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
		<!--
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Customer Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php
				$rating=$store['Store']['avg_rating'];
				echo "<span style=\"display:none\">$rating</span> "; 
			
				for( $i=0; $i<5; $i++ )
				{
					if( $i < $rating)
						echo "<div class=\"on-star\">&nbsp;</div>";
					else
						echo "<div class=\"off-star\">&nbsp;</div>";
				}
			?>		
			&nbsp;
		</dd>
		-->
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dine In'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($store['Store']['dine_in']==1) echo 'Yes'; else echo 'No'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Takeout'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($store['Store']['takeout']==1) echo 'Yes'; else echo 'No'; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delivery'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php if($store['Store']['delivery']==1) echo 'Yes'; else echo 'No'; ?>
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
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('List All My Stores', true), array('action' => 'stores')); ?> </li>
		<li><?php echo $this->Html->link(__('Edit Store Information', true), array('action' => 'store_edit', $store['Store']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete This Store', true), array('action' => 'store_delete', $store['Store']['id']), null, sprintf(__('Are you sure?', true))); ?> </li>
	</ul>
</div>
