
<h1>Edit Task</h1>

	<?php $attributes = array('id' => 'edit_task_form', 'class' => 'form_horizontal'); ?>


	<?php echo validation_errors("<p class='bg-danger text-white'>"); ?>

	<?php echo form_open('tasks/edit/'.$this->uri->segment(3).'',$attributes); ?>

			<div class="form-group">
				<?php echo form_label('Task Name'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'task_name',
									'placeholder' => 'Enter Task Name',
									'value' => $the_task->TaskName
								);
					echo form_input($data); ?>
			</div>


			<div class="form-group">
				<?php echo form_label('Task Description'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'task_body',
									'placeholder' => 'Enter Task Description',
									'rows' => 6,
									'value' => $the_task->TaskBody
								);
					echo form_textarea($data); ?>
			</div>

			<div class="form-group">
				<?php echo form_label('Task Due Date'); ?>
				<?php 

					$data = array(
									'class' => 'form-control',
									'name' => 'due_date',
									'type' => 'date',
									'value' => $the_task->DueDate
								);
					echo form_input($data); ?>
			</div>



			<div class="form-group">
				<?php 

					$data = array(
									'class' => 'btn btn-sm btn-success',
									'name' => 'submit',
									'value' => 'Update Task'
								);
					echo form_submit($data); ?>
			</div>

	<?php echo form_close(); ?>


