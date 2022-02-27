<h1>Projects</h1>

<p class="bg-success text-white">
<?php 

	if ($this->session->flashdata('project_created')) {
		echo $this->session->flashdata('project_created');
		$this->session->unset_userdata('project_created');
	}

	if ($this->session->flashdata('project_updated')) {
		echo $this->session->flashdata('project_updated');
		$this->session->unset_userdata('project_updated');
	}

	if ($this->session->flashdata('project_deleted')) {
		echo $this->session->flashdata('project_deleted');
		$this->session->unset_userdata('project_deleted');
	}

	if ($this->session->flashdata('task_updated')) {
		echo $this->session->flashdata('task_updated');
		$this->session->unset_userdata('task_updated');
	}

	if ($this->session->flashdata('task_deleted')) {
		echo $this->session->flashdata('task_deleted');
		$this->session->unset_userdata('task_deleted');
	}

 ?>
</p>


<a href="projects/create" class="btn btn-sm btn-primary float-right">Create Project</a>
<br>
<table class="table table-bordered table-hover">
	<thead class="thead-light">
		
		<br>
		<tr>
			<th>Project Name</th>
			<th>Project Body</th>
			<th>Delete Project</th>
		</trn>
	<tbody>
		
			<?php foreach ($projects as $project) { ?>

					<tr>
						<td><a href="projects/display/<?php echo $project->Id; ?>"><?php echo $project->ProjectName; ?></a></td>
						<td style="text-align: justify;"><?php echo $project->ProjectBody; ?></td>
						<td><a href="projects/delete/<?php echo $project->Id; ?>" class="btn btn-sm btn-danger"><span class="fa fa-remove"></span></a></td>
					</tr>

			<?php } ?>
		</tr>
	</tbody>
</table>

