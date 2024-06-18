<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Riwayat_model extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}


	// Function Get All Data
	public function getAllData()
	{
		$this->db->order_by('id', 'ASC');
		$data = $this->db->get('tbl_riwayat')->result();
		return $data;
	}
	public function selectBasis($id)
	{
		$selected = $this->db->get_where('tbl_riwayat', array('id' => $id))->row_array();
		return $selected;
	}

	// Function Insert Data
	public function insertData($kodegejala,$kodepenyakit, $nilai)
	{
		// Masukkan data ke dalam tabel database
		$namagejala = $this->Gejala_model->selectGejala($kodegejala)['nama_gejala'];
		$namapenyakit = $this->Penyakit_model->selectPenyakit($kodepenyakit)['nama_penyakit'];
		$data = array(
			'nama' => $kodegejala,
			'no'=>$namagejala,
            'kode_penyakit'=> $kodepenyakit,
			'nama_penyakit'=>$namapenyakit,
			'nilai' => $nilai,
		);

		return $this->db->insert('tbl_riwayat', $data);
	}

	public function hapusdata($id)
	{
		// $this->db->delete('pengetahuan', array('kode_penyakit' => $kodepenyakit));
		return $this->db->delete('tbl_riwayat', array('id' => $id));
	}


	public function updatedata()
	{
		$data = array(
			'nilai' => $_POST['nilai'],
		);
		$this->db->where('id', $_POST['id']);
		return $this->db->update('tbl_riwayat', $data);
	}

	
	
	
}
