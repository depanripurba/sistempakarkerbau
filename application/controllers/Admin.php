<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Admin extends CI_Controller
{
	// public function __construct()
	// {
	// 	parent::__construct();
	// 	// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
	// 	if (!$this->session->userdata('username') || $this->session->userdata('role')!=='Admin') {
	// 		redirect('auth');
	// 	}
	// 	// Load Model
	// 	$this->load->model('Penyakit_model');
	// 	$this->load->model('Gejala_model');
	// 	$this->load->model('Pasien_model');
	// 	$this->load->model('Basis_model');
	// }


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('blank');
		$this->load->view('template/footer');
		// }
	}
	
}
