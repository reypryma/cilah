<?php


class Projects extends CI_Controller
{
	public function __construct(){
		//block access
		parent::__construct();
		if (!$this->session->userdata('logged_in')){
			//home_view
			$this->session->set_flashdata('no_access',"Sorry you are not logged in");
			redirect( 'home');
		}
	}
	public function index(){
		$data['projects'] = $this->projects_model->get_projects();

		$data['main_view'] = "projects/index";
		$this->load->view('layouts/main', $data);
	}

	public function display($project_id)
	{
		$data['project_data'] = $this->projects_model->get_project($project_id);
		$data['main_view'] = 'projects/display';
		$this->load->view('layouts/main',$data);
	}
}
