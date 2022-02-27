<p class="bg-success text-white"><?php 

	if ($this->session->flashdata('login_success')) {
		echo $this->session->flashdata('login_success');
		$this->session->unset_userdata('login_success');
	}

	if ($this->session->flashdata('user_registered')) {
		echo $this->session->flashdata('user_registered');
		$this->session->unset_userdata('user_registered');
	}
 ?></p>


 <p class="bg-danger text-white"><?php 

	if ($this->session->flashdata('login_failed')) {
		echo $this->session->flashdata('login_failed');
		$this->session->unset_userdata('login_failed');
	}

	if ($this->session->flashdata('no_access')) {
		echo $this->session->flashdata('no_access');
		$this->session->unset_userdata('no_access');
	}

 ?></p>

<div class="jumbotron jumbotron-fluid" style="border:2px dashed #000;background: white;">
	<div class="container" style="background: white;">
		<h2 class="text-center">Welcome to the CI App</h2>
	</div>
</div>



<?php if(isset($projects)) { ?>
<div class="panel panel-primary">
    <div class="panel-heading"><h3>My Projects</h3></div>

    <div class="panel-body">
    	<table class="table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th>Project Name</th>
					<th>Project Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($projects as $project) { ?>

						<tr>
							<td><?php echo $project->ProjectName; ?></td>
							<td style="text-align: justify;"><?php echo $project->ProjectBody; ?></td>
							<td><a href="<?php echo base_url(); ?>projects/display/<?php echo $project->Id; ?>">View</a></td>
						</tr>

				<?php } ?>
			</tbody>
		</table>
    </div>
</div>
<?php } ?>




<?php if(isset($tasks)) { ?>
<div class="panel panel-primary">
    <div class="panel-heading"><h3>My Tasks</h3></div>

    <div class="panel-body">
		<table class="table table-bordered table-hover">
			<thead class="thead-light">
				<tr>
					<th>Task Name</th>
					<th>Task Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tasks as $task) { ?>
						<tr>
							<td><?php echo $task->TaskName; ?></td>
							<td style="text-align: justify;"><?php echo $task->TaskBody; ?></td>
							<td><a href="<?php echo base_url(); ?>tasks/display/<?php echo $task->Id; ?>">View</a></td>
						</tr>

				<?php } ?>
			</tbody>
		</table>
    </div>
</div>
<?php } ?>




