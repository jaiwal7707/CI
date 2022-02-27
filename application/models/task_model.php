<?php


class Task_model extends CI_model
{
	
	public function get_task($task_id)
	{
		$this->db->where("Id",$task_id);
		$query = $this->db->get('tasks');
		return $query->row();
	}


	public function get_all_tasks($user_id)
	{
		$this->db->where('ProjectUserId',$user_id);
		$this->db->join('tasks','projects.Id = tasks.ProjectId');
		$query = $this->db->get('projects');
		return $query->result();
	}

	public function create_task($data)
	{
		$insert_query = $this->db->insert('tasks', $data);
		return $insert_query;
	}

	public function get_task_project_id($task_id)
	{
		$this->db->where("Id",$task_id);
		$query = $this->db->get('tasks');
		return $query->row()->ProjectId;
	}

	public function get_project_name($project_id)
	{
		$this->db->where('Id',$project_id);
		$query = $this->db->get('projects');
		return $query->row()->ProjectName;
	}

	public function get_task_project_data($task_id)
	{
		$this->db->where("Id",$task_id);
		$query = $this->db->get('tasks');
		return $query->row();
	}

	public function edit_task($task_id,$data)
	{
		$this->db->where('Id',$task_id);
		$query = $this->db->update('tasks',$data);

		return true;
	}

	public function delete_task($task_id)
	{
		$this->db->where('Id',$task_id);
		$this->db->delete('tasks');

		return true;
	}


	public function mark_complete($task_id)
	{
		$this->db->set('Status',1);
		$this->db->where('Id',$task_id);
		$this->db->update('tasks');
		return true;
	}

	public function mark_incomplete($task_id)
	{
		$this->db->set('Status',0);
		$this->db->where('Id',$task_id);
		$this->db->update('tasks');
		return true;
	}
}


?>