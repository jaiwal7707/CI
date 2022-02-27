
<h1>Create New Project</h1>

	<?php $attributes = array('id' => 'project_form', 'class' => 'form_horizontal'); ?>


	<?php echo validation_errors("<p class='bg-danger text-white'>"); ?>

	<?php echo form_open('projects/create',$attributes); ?>

			<div class="form-group">
				<?php echo form_label('Project Name'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'project_name',
									'placeholder' => 'Enter Project Name'
								);
					echo form_input($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Project Description'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'project_body',
									'placeholder' => 'Enter Project Description',
									'rows' => 6
								);
					echo form_textarea($data); ?>
			</div>


			<div class="form-group">
				<?php 

					$data = array(
									'class' => 'btn btn-sm btn-success',
									'name' => 'submit',
									'value' => 'Create Project'
								);
					echo form_submit($data); ?>
			</div>

	<?php echo form_close(); ?>


