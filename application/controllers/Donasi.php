<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donasi extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->model('M_Donasi');
        $this->load->library('form_validation');
    }

	public function index()
	{

		$this->load->view('donasi/index');
	}

	public function doDonasi()
	{
		$data = array(
         'button' => 'Create',
         'action' => site_url('donasi/doDonasi_action'),
	    'id' => set_value('id'),
	    'user_id' => set_value('user_id'),
	    'name' => set_value('name'),
	    'qty' => set_value('qty'),
	    'address' => set_value('address'),
	   
	);
        // $this->load->view('donate/donate_form');
		$this->load->view('donasi/formDonasi', $data);
	}

	public function doDonasi_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->doDonasi();
        } else {
            $data = array(
		'user_id' => $this->input->post('user_id',TRUE),
		'name' => $this->input->post('name',TRUE),
		'qty' => $this->input->post('qty',TRUE),
		'address' => $this->input->post('address',TRUE),
	    );

            $this->M_Donasi->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('disaster'));
        }
    }
    public function _rules() 
    {
	$this->form_validation->set_rules('user_id', 'user id', 'trim|required');
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('qty', 'qty', 'trim|required');
	$this->form_validation->set_rules('address', 'address', 'trim|required');
	

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Donasi.php */
/* Location: ./application/controllers/Donasi.php */