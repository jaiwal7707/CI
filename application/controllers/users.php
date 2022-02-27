<?php


class Users extends CI_Controller
{
	
	// public function show($user_id)
	// {
	// 	// this is a manual way to load model  
	// 	// $this->load->model("user_model");



	// // -------------------------------------------------
	// 	// this user_model autoloaded.

	// 	$data['results'] = $this->user_model->get_users($user_id,'atishkumar'); // communicate with "Model's"


	// 	$this->load->view('user_view',$data); // Communicate with "View's" 
	// 	// foreach ($result as $object) {
	// 	// 	echo $object->Id;
	// 	// }
	// }



	// public function insert()
	// {	

	// 	$username = "kunal";
	// 	$password = 456;

	// 	$this->user_model->create_users([

	// 		"UserName" => $username,
	// 		"Password" => $password

	// 	]);


	// }



	// public function update()
	// {	
	// 	$id = 3;

	// 	$username = "vishaldeshmukh";
	// 	$password = 2690;

	// 	$this->user_model->update_users([

	// 		"UserName" => $username,
	// 		"Password" => $password

	// 	],$id);
	// }



	// public function delete()
	// {
	// 	$id = 3;

	// 	$this->user_model->delete_users($id);
	// }


	// -------------------------------------------------------------------------------------------


	public function register()
	{	

		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required');
		$this->form_validation->set_rules('email_id', 'Email Id', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|matches[password]');

		if ($this->form_validation->run() == FALSE) {

			$data['main_view'] = 'users/register_view';
			$this->load->view('layouts/main', $data);

		}else{

			if ($this->user_model->create_user()) {

				$this->session->set_flashdata('user_registered','User has been registered.');
				redirect('home/index');
			}

		}

		
	}




	public function login()	
	{

		//echo $this->input->post('username');

		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			
			$data = array('errors' => validation_errors());

			$this->session->set_flashdata($data);
			redirect('home');


		}else{

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);

			if ($user_id) {
				$user_data = array(

									'user_id' => $user_id,
									'username' => $username,
									'logged_in' => true

									);

				$this->session->set_flashdata('login_success','You are now logged in');
				$this->session->set_userdata($user_data);
				
				redirect('home');

				// $data['main_view'] = 'home_view';
				// $this->load->view('layouts/main', $data);


			}else{
				$this->session->set_flashdata('login_failed','Sorry you are not logged in');
				redirect('home/index');
			}
		}


		
	}	




	public function logout()
	{
		$this->session->sess_destroy();
		redirect('home');
	}


	

}



?>