<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->model('m_home');

		$disaster 			= $this->m_home->get_all();

		$data['disaster']	= $disaster;


		$this->load->view('Home/index');

	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */