
<h1>Edit Project</h1>

	<?php $attributes = array('id' => 'project_form', 'class' => 'form_horizontal'); ?>


	<?php echo validation_errors("<p class='bg-danger text-white'>"); ?>

	<?php echo form_open('projects/edit/'.$project_data->Id.'',$attributes); ?>

			<div class="form-group">
				<?php echo form_label('Project Name'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'project_name',
									'placeholder' => 'Enter Project Name',
									'value' => $project_data->ProjectName
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
									'rows' => 6,
									'value' => $project_data->ProjectBody
								);
					echo form_textarea($data); ?>
			</div>


			<div class="form-group">
				<?php 

					$data = array(
									'class' => 'btn btn-sm btn-success',
									'name' => 'submit',
									'value' => 'Update Project'
								);
					echo form_submit($data); ?>
			</div>

	<?php echo form_close(); ?>


