<?php


class User_model extends CI_Model
{
	public function get_users($user_id, $username)
	{

		//$query = $this->db->query("SELECT * FROM users");
		//will give row numbers
		//return $query->num_rows();
		//$this->db->where('id', $user_id);


		$this->db->where([
			'id' => $user_id,
			'username' => $username
		]);

		$query = $this->db->get('users');
		return $query->result();
		//give column number
		//return $query->num_fields();
	}

	/*	public function create_user($data){
			$this->db->insert('users', $data);
		}

		public function update_user($data, $id){
			$this->db->where([
				'id' => $id
			]);
			$this->db->update('users', $data);
		}

		public function delete_user($id){
			$this->db->where([
				'id' => $id
			]);

			$this->db->delete('users');
		}*/

	public function create_user()
	{

		/*	$option = ['cost' => 12];
			$encrypted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $option);*/
		//DONT STORE MULTI DIMENSIONAL ARRAY
		$data = array(
			'first_name' => $this->input->post('first_name'),
			'last_name' => $this->input->post('last_name'),
			'email' => $this->input->post('email'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password')
		);

		/*		foreach ($this->input->post('controller') as $controller) {
					$data = array(
						'name' => $this->input->post('name'),
						'controller' => $controller,
						'access' => $this->input->post('access'),
						'modify' => $this->input->post('modify')
					);

					$this->db->set($data);
					$this->db->insert_id();
					$this->db->insert($this->db->dbprefix . 'user_group');
				}*/

		$insert_data = $this->db->insert('users', $data);
		return $insert_data;
	}

	//data passed from USER CONTROLLER $this->user_model->login_user($username,$password);
	public function login_user($username, $password)
	{
		/*	$this->db->where(['username'=>$username,
							'password' => $password]);*/
		$this->db->where('username', $username);
		//$this->db->where('password', $password);
		///I think better to bring the pass from registration

		$result = $this->db->get('users');

		/*		$db_password = $result->row(2)->password;
				if (password_verify($password, $db_password)) {
					return $result->row(0)->id;
				} else {
					return false;
				}*/


		if ($result->num_rows() == 1) {
			return $result->row(0)->id;
			//return first column
		} else {
			return false;
		}
	}
}
