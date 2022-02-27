<?php


class Tasks extends CI_Controller
{
	
	public function display($task_id)
	{	
		$project_id = $this->task_model->get_task_project_id($task_id);
		$data['project_name'] = $this->task_model->get_project_name($project_id);
		$data['task'] = $this->task_model->get_task($task_id);
		$data['main_view'] = 'tasks/display';
		$this->load->view('layouts/main',$data);
	}


	public function create($project_id)
	{
		$this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
		$this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$data['main_view'] = "tasks/create";
			$this->load->view('layouts/main', $data);

		}else{

			$data = array(

				'ProjectId' => $project_id,
				'TaskName' 	=> $this->input->post('task_name'),
				'DueDate' 	=> $this->input->post('due_date'),
				'TaskBody' 	=> $this->input->post('task_body')


			);

			if ($this->task_model->create_task($data)) {
				
				$this->session->set_flashdata('task_created','Your Task has been Created.');
				redirect('projects');
			}


		}

	}



	public function edit($task_id)
	{

		$this->form_validation->set_rules('task_name', 'Task Name', 'trim|required');
		$this->form_validation->set_rules('due_date', 'Due Date', 'trim|required');
		$this->form_validation->set_rules('task_body', 'Task Description', 'trim|required');


		if ($this->form_validation->run() == FALSE) {

			$data['project_id'] = $this->task_model->get_task_project_id($task_id);
			$data['project_name'] = $this->task_model->get_project_name($data['project_id']);
			$data['the_task'] = $this->task_model->get_task_project_data($task_id);

			$data['main_view'] = "tasks/edit";
			$this->load->view('layouts/main', $data);

		}else{

			$project_id = $this->task_model->get_task_project_id($task_id);

			$data = array(

				'ProjectId' => $project_id,
				'TaskName' 	=> $this->input->post('task_name'),
				'DueDate' 	=> $this->input->post('due_date'),
				'TaskBody' 	=> $this->input->post('task_body')

			);

			if ($this->task_model->edit_task($task_id,$data)) {
				
				$this->session->set_flashdata('task_updated','Your Task has been Updated.');
				redirect('projects');
			}


		}

		
	}


	public function delete($project_id,$task_id)
	{	
		$this->task_model->delete_task($task_id);
		$this->session->set_flashdata('task_deleted','Your Task has been Deleted.');
		redirect('projects/display/'.$project_id.'');
	}


	public function mark_complete($task_id)
	{	
		if ($this->task_model->mark_complete($task_id)) {

			$project_id = $this->task_model->get_task_project_id($task_id);
			$this->session->set_flashdata('mark_done','This task has been completed');
			redirect('projects/display/'.$project_id.'');
		}

	}


	public function mark_incomplete($task_id)
	{
		if ($this->task_model->mark_incomplete($task_id)) {

			$project_id = $this->task_model->get_task_project_id($task_id);
			$this->session->set_flashdata('mark_undone','This task has been incompleted');
			redirect('projects/display/'.$project_id.'');
		}
	}





}




?>