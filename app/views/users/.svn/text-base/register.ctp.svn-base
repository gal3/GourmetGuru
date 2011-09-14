<div class="users form">
<h2>Sign up</h2>

<p>Signing up is quick and easy. Get started in minutes!</p>

<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Account information'); ?></legend>
	<?php
		echo $this->Form->input('group_id', array('label' => 'Type of user:'));
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $form->input('confirm_password', array( 'type' => 'password' ) );
	?>
	</fieldset>
	<fieldset>
 		<legend><?php __('Personal information'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
