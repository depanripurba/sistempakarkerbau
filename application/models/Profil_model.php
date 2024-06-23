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
    public function insertdata($data)
	{
		$this->db->insert('tbl_login', $data);
	}
    public function updatedata($id,$nama,$username,$url)
	{
		$data = array(
			'nama' => $nama,
			'username' => $username,
			'url' => $url,
		);

		$this->db->where('id', $id);
		return $this->db->update('tbl_login', $data);
	}
    public function changepassword($password)
	{
		$data = array(
			'password' => $password,
		);

		$this->db->where('id', 1);
		return $this->db->update('tbl_login', $data);
	}
}
