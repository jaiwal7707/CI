
	<h1>RAGISTRATION FORM</h1>

	<?php $attributes = array('id' => 'ragister_form', 'class' => 'form_horizontal'); ?>


	<?php echo validation_errors("<p class='bg-danger text-white'>"); ?>

	<?php echo form_open('users/register',$attributes); ?>

			<div class="form-group">
				<?php echo form_label('First Name'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'first_name',
									'placeholder' => 'Enter First Name',
									'value' => set_value('first_name')
								);
					echo form_input($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Last Name'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'last_name',
									'placeholder' => 'Enter Last Name',
									'value' => set_value('last_name')
								);
					echo form_input($data); ?>
			</div>

			<div class="form-group">
				<?php echo form_label('Email ID'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'email_id',
									'placeholder' => 'Enter Email ID',
									'value' => set_value('email_id')
								);
					echo form_input($data); ?>
			</div>



			<div class="form-group">
				<?php echo form_label('Username'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'username',
									'placeholder' => 'Enter Username',
									'value' => set_value('username')
								);
					echo form_input($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Password'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'password',
									'placeholder' => 'Enter Password',
									
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
									'value' => 'Register'
								);
					echo form_submit($data); ?>
			</div>

	<?php echo form_close(); ?>


