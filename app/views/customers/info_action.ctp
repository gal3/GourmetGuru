<div class="actions">
<h3><?php __('Other Info'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Personal Info', true), array('controller' => 'customers', 'action' => 'personal')); ?> </li>
		<li><?php echo $this->Html->link(__('Delivery Address', true), array('controller' => 'customers', 'action' => 'addresses')); ?> </li>
		<li><?php echo $this->Html->link(__('Payment Methods', true), array('controller' => 'customers', 'action' => 'payment_methods')); ?> </li>
	</ul>
</div>
