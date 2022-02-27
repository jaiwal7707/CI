<?php


class User_model extends CI_model
{
	// public function get_users($user_id,$username)
	// {


	// 	// ------------ This is the manual way to database connection---------

	// 	// $config['hostname'] = "localhost";
	// 	// $config['username'] = "root";
	// 	// $config['password'] = "";
	// 	// $config['database'] = "errand_db";

	// 	// $conn = $this->load->database($config);



	// 	// $config_2['hostname'] = "localhost";
	// 	// $config_2['username'] = "root";
	// 	// $config_2['password'] = "";
	// 	// $config_2['database'] = "errand_db_2";

	// 	// $conn2 = $this->load->database($config_2);




	// 	// ------------ This is a autoload way to database connection ---------
	// 	 // here 'users' are the table name in database

	// 	//$this->db->where('Id',$user_id);

	// 	$this->db->where([

	// 						'Id' => $user_id,
	// 						'UserName' => $username

	// 					]);

	// 	$query = $this->db->get('users');

	// 	return $query->result();



	// 	// --------------------- by query -------------------------


	// 	//$query = $this->db->query("SELECT * FROM users");

	// 	//return $query->num_rows();  // returns count of rows of table
	// 	//return $query->num_fields();  // returns count of coulumns of table


	// }



	// public function create_users($data)
	// {
	// 	$this->db->insert('users',$data);
	// }


	// public function update_users($data,$id)
	// {	
	// 	$this->db->where(['Id' => $id]);
	// 	$this->db->update('users',$data);
	// }


	// public function delete_users($id)
	// {	
	// 	$this->db->where(['Id' => $id]);
	// 	$this->db->delete('users');
	// }





	public function login_user($username, $password)
	{	

		$this->db->where('username',$username);

		$result = $this->db->get('users');

		$db_password = $result->row(5)->Password;


		if (password_verify($password, $db_password)){

			return $result->row(0)->Id;
			
		}else{

			return false;
		}
		
	}




	public function create_user()
	{
		$options = ["cost" => 12];
		$encrypted_password = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

		$data = array(

			"FirstName" => $this->input->post('first_name'),
			"LastName" 	=> $this->input->post('last_name'),
			"Email" 	=> $this->input->post('email_id'),
			"Username" 	=> $this->input->post('username'),
			"Password" 	=> $encrypted_password

		);

		$insert_data = $this->db->insert('users',$data);
		return $insert_data;
	}



	
}


?>