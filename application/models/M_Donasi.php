<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Donasi extends CI_Model
 {
	public $table = 'donate';
    public $id = 'id';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

	

}

/* End of file M_Donasi.php */
/* Location: ./application/models/M_Donasi.php */