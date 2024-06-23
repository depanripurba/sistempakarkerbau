<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getdata()
	{
		$data['admin'] = $this->db->get('tbl_login')->result();
		return $data;
	}
}
