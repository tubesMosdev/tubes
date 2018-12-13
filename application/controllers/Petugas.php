<?php

class Petugas extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

		$login = $this->session->userdata('logged_in');

		if(!$login){
			redirect('user');	
		}
	}

	public function index()
	{
		$this->load->model('m_disaster');

		$berita 			= $this->m_disaster->get_all();

		$data['berita']		= $berita;

		$this->template_petugas->show('petugas/daftar',$data);
	}

	public function tambah_berita()
	{
		$this->load->model('m_category');

		$this->load->model('m_user');

		$column_petugas 	= $this->m_user->get_column_petugas();

		$data['penulis']	= $column_petugas;

		$berita 			= $this->m_category->get_all();

		$data['berita'] 	= $berita;

		$this->template_petugas->show('petugas/tambah_berita',$data);

	}

	public function save()
	{
		$this->load->model('m_disaster');

		$config['upload_path'] = './assets/img';
		$config['allowed_types']= '*';
		$this->load->library('upload',$config);
		$this->upload->do_upload('file_name');
		$file_name = $_FILES['file_name']['name'];

		$title 				= $this->input->post('title');
		$category 			= $this->input->post('category');
		$description 		= $this->input->post('description');
		$author 			= $this->input->post('author');
		$date 				= $this->input->post('date');

		$data 				= [
							'title'			=> $title,
							'description'	=> $description,
							'category_id'	=> $category,
							'user_id'		=> $author,
							'deadline' 		=> $date,
							'file_name'		=> $file_name
		];

		$save				= $this->m_disaster->insert($data);


		redirect('petugas');

	}

	public function edit($id)
	{
		$this->load->model('m_disaster');
		$this->load->model('m_category');
		$this->load->model('m_user');

		$data['penulis'] 	= $this->m_user->get_column_petugas();
		$data['category'] 	= $this->m_category->get_all();
		$data['berita']		= $this->m_disaster->get($id);

		$this->template_petugas->show('petugas/edit',$data);
	}

	public function update()
	{
		$this->load->model('m_disaster');

		$id 				= $this->input->post('id');
		$title 				= $this->input->post('title');
		$category 			= $this->input->post('category');
		$description 		= $this->input->post('description');
		$author 			= $this->input->post('author');
		$date 				= $this->input->post('date');


		$data 				= [
							'title'			=> $title,
							'description'	=> $description,
							'category_id'	=> $category,
							'user_id'		=> $author,
							'deadline' 		=> $date
		];


		$save 				= $this->m_disaster->update($data,$id);


		redirect('petugas');
	}

	public function delete($id)
	{
		$this->load->model('m_disaster');

		$delete 		= $this->m_disaster->delete($id);

		redirect('petugas');

	}

	public function skeyword()
	{
		$this->load->model('m_disaster');

		$key = $this->input->post('title');

		$data['results'] = $this->m_disaster->search($key);

		$this->template_petugas->show('petugas/skeyview',$data);
	}
}

?>