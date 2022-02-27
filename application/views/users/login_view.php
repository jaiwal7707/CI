
<?php if($this->session->userdata('logged_in')): ?>

<h1>Logout</h1>
<?php echo form_open('users/logout'); ?>
	
	
<p>
<?php if($this->session->userdata('username')): ?>

	<?php echo "You are logged in as ".$this->session->userdata('username'); ?>

<?php endif; ?>
</p>


<?php  
	$data = array(
					'class' => 'btn btn-sm btn-danger',
					'name' => 'submit',
					'value' => 'Logout'

					);
	echo form_submit($data);

?>


<?php echo form_close(); ?>

<?php else: ?>

	<h1>LOGIN FORM</h1>

	<?php $attributes = array('id' => 'login_form', 'class' => 'form_horizontal'); ?>


	<?php if($this->session->flashdata('errors')): ?>

	<?php echo $this->session->flashdata('errors'); 

		$this->session->unset_userdata('errors');
	?>

	<?php endif; ?>


	<?php echo form_open('users/login',$attributes); ?>

			<div class="form-group">
				<?php echo form_label('Username'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'username',
									'placeholder' => 'Enter Username'
								);
					echo form_input($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Password'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'password',
									'placeholder' => 'Enter Password'
								);
					echo form_password($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Confirm Password'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'confirm_password',
									'placeholder' => 'Enter Confirm Password'
								);
					echo form_password($data); ?>
			</div>
	 

			<div class="form-group">
				<?php 

					$data = array(
									'class' => 'btn btn-primary',
									'name' => 'submit',
									'value' => 'Login'
								);
					echo form_submit($data); ?>
			</div>

	<?php echo form_close(); ?>



<?php endif; ?>