<?php include('top.ctp'); ?>

<ul id="nav">
    <li class="first <?php if (active('owners\/?$')) echo 'current'; ?>">
        <?php echo $this->Html->link('Home', array('controller' => 'owners', 'action' => 'index')); ?>
    </li>
	
    <li class="	<?php if (active('store|stores|food|menu')) echo 'current'; ?>"><?php echo $this->Html->link('My Stores', array('controller' => 'owners', 'action' => 'stores')); ?>
        <?php /*
        echo "<ul>
            <li>".$this->Html->link('My restaurants', array('controller' => 'owners', 'action' => 'stores'))."</li>
            <li>".$this->Html->link('Add a new restaurant', array('controller' => 'owners', 'action' => 'store_add'))."</li>
        </ul>
		";
        */?>
    </li>
    <li <?php if (active('history')) echo 'class="current"'; ?>><?php echo $this->Html->link('Order History', array('controller' => 'owners', 'action' => 'history')); ?>
    </li>
    <li <?php if (active('statistics')) echo 'class="current"'; ?>><?php echo $this->Html->link('Statistics', array('controller' => 'owners', 'action' => 'statistics')); ?>
    </li>
    <li class="expandable <?php if (active('info|edit_info|settings')) echo 'current'; ?>"><?php echo $this->Html->link('My Profile', array('controller' => 'owners', 'action' => 'personal')); ?>
        <?php 
        echo "<ul>
            <li>" . $this->Html->link('Personal Info', array('controller' => 'owners', 'action' => 'personal'))  . "</li>
            <li>" . $this->Html->link('Account settings', array('controller' => 'owners', 'action' => 'settings')) . "</li>
        </ul>
		";
        ?>
    </li>
</ul>

<div id="container">

<div id="content">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->Session->flash('auth'); ?>
    <?php echo $content_for_layout; ?>
</div>		

<?php include('bottom.ctp'); ?>
