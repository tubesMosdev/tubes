<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_home extends CI_Model {

	public function get_all()
	{
		return $this->db->select('disaster.*,category.name n, s.name nn')
						->from('disaster')
						->join('category','disaster.category_id = category.id')
						->join('user s','s.id = disaster.user_id')
						->limit(3)
						->get()
						->result();


	}

}

/* End of file M_home.php */
/* Location: ./application/models/M_home.php */