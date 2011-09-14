<div class="users form">
<?php echo $this->Form->create('Owner', array('action' => 'settings'));?>
	<fieldset>
 		<legend><?php __('Account Settings'); ?></legend>
	<?php
		echo '<p>Please supply your current password for any changes you\'d like to make.</p>';
		echo $form->input('old_password', array('div' => array('class' =>'required'),'type' => 'password' , 'label' => 'Old Password'  ) );
		echo $this->Form->input('password', array('label' => 'New Password' ) );
		echo $this->Form->input('User.confirm_password', array( 'type' => 'password' ) );		
		echo '<br />';
		echo $this->Form->label('Deactivate Account');
		echo '&nbsp;&nbsp;&nbsp;&nbsp;';
		echo $this->Form->checkbox('deactivate'); 
		echo '<br />';
		echo '<br />';

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>