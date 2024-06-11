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
		$data['judul'] = "dashboard";
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('admin/dashboard');
		$this->load->view('template/footer');
		// }
	}
	public function datagejala()
	{
		$data['judul'] = "Data Gejala";
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('admin/datagejala');
		$this->load->view('template/footer');
		// }
	}

	public function datapenyakit()
	{
		$data['judul'] = "Data Penyakit";
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('admin/datapenyakit');
		$this->load->view('template/footer');
		// }
	}

	public function basisaturan()
	{
		$data['judul'] = "Basis Aturan";
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('admin/basisaturan');
		$this->load->view('template/footer');
		// }
	}

	public function riwayat()
	{
		$data['judul'] = "Riwayat Diagnosa";
		$this->load->view('template/header',$data);
		$this->load->view('template/menu',$data);
		$this->load->view('admin/riwayat');
		$this->load->view('template/footer');
		// }
	}
}
