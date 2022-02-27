<p class="bg-success text-white">
<?php 

	if ($this->session->flashdata('task_deleted')) {
		echo $this->session->flashdata('task_deleted');
		$this->session->unset_userdata('task_deleted');
	}


	if ($this->session->flashdata('mark_done')) {
		echo $this->session->flashdata('mark_done');
		$this->session->unset_userdata('mark_done');
	}

	if ($this->session->flashdata('mark_undone')) {
		echo $this->session->flashdata('mark_undone');
		$this->session->unset_userdata('mark_undone');
	}


 ?>
</p>

<div class="row">
	<div class="col-lg-9">
		<h1>Project Name :- <?php echo $project_data->ProjectName; ?></h1>
		<p><b>Project Created On :-</b> <?php echo $project_data->DateCreated;  ?></p>

		<br>

		<h3>Description</h3>
		<p><?php echo $project_data->ProjectBody;  ?></p>
	</div>

	<div class="col-lg-3 float-right">
		<ul class="list-group">
			<h4>Project Actions</h4>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/create/<?php echo $project_data->Id; ?>">Create Tasks</a></li>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/edit/<?php echo $project_data->Id; ?>">Edit Project</a></li>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>projects/delete/<?php echo $project_data->Id; ?>">Delete Project</a></li>
		</ul>
	</div>
</div>


<div class="row">
	<div class="col-lg-9">
		<h3>Active Tasks</h3>
		<ul>
			<?php if($completed_tasks): ?>
					<?php foreach ($completed_tasks as $task): ?>
						<li>
							<a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->TaskId; ?>">
								<?php echo $task->TaskName; ?>
							</a>
						</li>
					<?php endforeach; ?>
				<?php else: ?>
					<p>You have no tasks pending</p>
			<?php endif; ?>
		</ul>


		<h3>Completed Tasks</h3>
		<ul>
			<?php if($not_completed_tasks): ?>
					<?php foreach ($not_completed_tasks as $task): ?>
						<li>
							<a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->TaskId; ?>">
								<?php echo $task->TaskName; ?>
							</a>
						</li>
					<?php endforeach; ?>
				<?php else: ?>
					<p>You have no tasks pending</p>
			<?php endif; ?>
		</ul>
	</div>
	<div class="col-lg-3">
		
	</div>
</div>
