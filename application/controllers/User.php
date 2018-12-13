<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class User extends CI_Controller
{
	
	public function index()
	{
		$login = $this->session->userdata('logged_in');

		if($login){
			if($login->role == 'petugas'){
				redirect('petugas/index');
			}
			elseif($login->role == 'admin'){
				redirect('admin/index');	
			}
		}

		$this->load->model('m_user');

		$user 				= $this->m_user->get_all();

		$data['user']		= $user;

		$this->load->view('user/login',$data);
	}

	public function add()
	{
		$this->load->model('m_user');

		$user 				= $this->m_user->get_all();

		$data['user'] 		= $user;

		$this->load->view('user/register',$data);
	}

	public function save()
	{
		$this->load->model('m_user');

		$username	= $this->input->post('username');
		$password 	= $this->input->post('password');
		$phone 		= $this->input->post('phone');
		$addres 	= $this->input->post('addres');
		$role 		= 'donatur';
		$status 	= 'inactive';

		$data 		= [
					'username'	=> $username,
					'password'	=> md5($password),
					'role' 		=> $role,
					'status' 	=> $status,
					'phone'		=> $phone,
					'address'	=> $addres
		];

		$save		= $this->m_user->insert($data);

		redirect('user');
	}

	public function verify()
	{
		$this->load->model('m_user');

		$username 		= $this->input->post('username');
		$password 		= $this->input->post('password');

		$login 			= $this->m_user->login($username,md5($password));

		if($login)
		{
			$this->session->set_userdata('logged_in',$login);

			if($login->role == 'donatur'){
				$this->template_petugas->show('disaster/index');
			}
			elseif($login->role == 'admin'){
				$this->template_admin->show('admin/index');
			}
			elseif($login->role == 'petugas'){
				$this->template_petugas->show('petugas/index');
			}
		}
		else
		{
			$this->session->set_flashdata('msg_error','Masukkan Username dan Password yang sesuai');
			redirect('user');
		}	
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');

		redirect('disaster');
	}
}

?>