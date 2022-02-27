<?php


class Project_model extends CI_model
{
	
	public function get_project($id)
	{	
		$this->db->where('Id',$id);
		$query = $this->db->get('projects'); 
		return $query->row(); // return a row.

	}

	

	public function get_projects()
	{
		$query = $this->db->get('projects');
		return $query->result(); //  returns a array of objects.
	}

	public function create_project($data)
	{
		$insert_query = $this->db->insert('projects', $data);
		return $insert_query;
	}

	public function edit_project($project_id,$data)
	{
		$this->db->where('Id',$project_id);
		$query = $this->db->update('projects',$data);

		return true;
	}

	public function get_projects_info($id)
	{
		$this->db->where("Id",$id);
		$get_data = $this->db->get('projects');
		return $get_data->row();
	}

	public function delete_project($id)
	{
		$this->db->where("Id",$id);
		$delete = $this->db->delete('projects');

	}

	public function get_all_project($user_id)
	{
		$this->db->where('ProjectUserId',$user_id);
		$query = $this->db->get('projects');
		return $query->result();
	}



	public function get_project_tasks($project_id,$active = true)
	{
		$this->db->select('
							tasks.TaskName,
							tasks.TaskBody,
							tasks.Id as TaskId,
							projects.ProjectName,
							projects.ProjectBody

						');

		$this->db->from('tasks');
		$this->db->join('projects','projects.Id = tasks.ProjectId');
		$this->db->where('tasks.ProjectId',$project_id);

		if ($active == true) {
			$this->db->where('tasks.Status',0);
		}else{
			$this->db->where('tasks.Status',1);
		}

		$query = $this->db->get();

		if ($query->num_rows() < 1) {
			return false;
		}

		return $query->result();

	}

	public function delete_project_tasks($project_id)
	{
		$this->db->where('ProjectId',$project_id);
		$query = $this->db->delete('tasks');
		return $query;
	}

}







?>