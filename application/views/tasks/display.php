<div class="row">
	<div class="col-lg-9">
		<h1><?php echo $task->TaskName; ?></h1>
		<p>Project Name :- <?php echo $project_name;?></p>
		<p>Date Created :- <?php echo $task->DateCreated; ?></p>
		<p>Due On :- <?php echo $task->DueDate; ?></p>
		<h4>Description</h4>
		<p><?php echo $task->TaskBody; ?></p>
	</div>

	<div class="col-lg-3 float-right">
		<ul class="list-group">
			<h4>Task Actions</h4>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/edit/<?php echo $task->Id; ?>">Edit</a></li>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/delete/<?php echo $task->ProjectId; ?>/<?php echo $task->Id; ?>">Delete</a></li>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_complete/<?php echo $task->Id; ?>">Mark Complete</a></li>
			<li class="list-group-item"><a href="<?php echo base_url(); ?>tasks/mark_incomplete/<?php echo $task->Id; ?>">Mark Incomplete</a></li>
		</ul>
	</div>
</div>


	



