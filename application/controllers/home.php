<?php

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		// Load url helper
		$this->load->helper('url');
	}

	public function index()
	{
		$data['main_view'] = "home_view";
		//Loading url helper
		$this->load->helper('url');
		$this->load->view('layouts/main', $data);
		//$this->load->view('home_view');
	}
}
