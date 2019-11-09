<?php


class Users extends CI_Controller
{

/*	public function show($user_id)
	{
		//$this->load->model('user_model');
		// passed model to array
		$data['results'] = $this->user_model->get_users($user_id, 'rico');

		$data['welcome'] = "Welcome to my page";
		//and passed it to data
		$this->load->view('user_view', $data);
	}

	public function id($user_id)
	{
		//$this->load->model('user_model');

		$data['results'] = $this->user_model->get_users($user_id, 'rico');

		$data['welcome'] = "Welcome to my page";
		$this->load->view('user_view', $data);
	}

	public function insert(){
		$this->user_model->create_user(
			[
				'username' => 'peeta',
				'password' => 'secret'
			]
		);
	}

	public function update(){
		$this->user_model->update_user(
			[
				'username' => 'William',
				'password' => 'dearme'
			]
		, 19);
	}

	public function delete(){
		$this->user_model->delete_user(20);
	}*/


	public function register(){

		$this->form_validation->set_rules('first_name','First Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name','Last Name','trim|required|min_length[3]');
		$this->form_validation->set_rules('email','Email','trim|required|valid_email|min_length[3]');
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == false){
			$data = array(
				'errors' => validation_errors()
			);
			$data['main_view'] = "users/register_view";
			$this->load->view('layouts/main',$data);
		}else{
			if($this->user_model->create_user()){
				$this->session->set_flashdata('user_registered', 'User now registered!');
				redirect('home/index');
			}else{

			}
		}
	}



	public function login(){
		/*echo "this works";*/
		/*echo $_POST['username'];*/
		//$this->input->post('username');
		//codeigniter.com/user_guide/libraries/input.html?highlight=input
		//autoload libraries
		//Make uppercase
		//libraries/form_validation
		$this->form_validation->set_rules('username','Username','trim|required|min_length[3]');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[3]');
		$this->form_validation->set_rules('confirm_password','Confirm Password','trim|required|min_length[3]|matches[password]');

		if ($this->form_validation->run() == false){
			$data = array(
				'errors' => validation_errors()
			);
			$this->session->set_flashdata($data);
			redirect('home');
		}else{
			//Dont forget to declare variable lol
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user_id = $this->user_model->login_user($username,$password);
			if ($user_id){
				$user_data = array(
					'user_id' => $user_id,
					'username' => $username,
					'logged_in' => true
				);
				$this->session->set_userdata($user_data);
				$this->session->set_flashdata('login_success', 'You are logged');
				//redirect('home/index');
				$data['main_view'] = "admin_view";
				$this->load->view('layouts/main',$data);
			}else{
				$this->session->set_flashdata('login_failed', 'login failed');
				redirect('home/index');
			}
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('home/index');
	}
}

