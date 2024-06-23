<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		if (!$this->session->userdata('username') || !$this->session->userdata('nama')) {
			redirect('login');
		}
		// 	// Load Model
		$this->load->model('Penyakit_model');
		$this->load->model('Gejala_model');
		$this->load->model('Basis_model');
		$this->load->model('Riwayat_model');
		$this->load->model('Profil_model');
	}


	public function index()
	{
		$data['judul'] = "dashboard";
		$data['aktif'] = "home";
		$data['tgejala'] = $this->Gejala_model->hitung();
		$data['tpenyakit'] = $this->Penyakit_model->hitung();
		$data['tbaturan'] = $this->Basis_model->hitung();
		$data['triwayat'] = $this->Riwayat_model->hitung();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('template/footer');
		// }
	}
	public function datagejala()
	{
		$data['judul'] = "Data Gejala";
		$data['aktif'] = "gejala";
		$data['gejala'] = $this->Gejala_model->getAllGejala();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/datagejala', $data);
		$this->load->view('template/footer');
		// }
	}
	public function tambahdatagejala()
	{
		$data['judul'] = "Form Tambah Gejala";
		$data['aktif'] = "gejala";
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/tambahdatagejala');
		$this->load->view('template/footer');
		// }
	}
	public function postdatagejala()
	{
		$data = array(
			'kode_gejala' => $_POST['kode_gejala'],
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$tambahgejala = $this->Gejala_model->addGejala($data);

		if ($tambahgejala === null) {
			redirect('/datagejala');
		} else {
			redirect('/tambahdatagejala');
		}
	}
	public function editdatagejala($id)
	{
		$data['judul'] = "Form Edit Gejala";
		$data['aktif'] = "gejala";
		$data['selected'] = $this->Gejala_model->selectGejala($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/editgejala', $data);
		$this->load->view('template/footer');
		// }
	}
	public function postupdategejala()
	{
		$data_to_update = array(
			'nama_gejala' => $_POST['nama_gejala'],
		);

		$this->db->where('kode_gejala', $_POST['kode_gejala']);
		$update = $this->db->update('tbl_gejala', $data_to_update);

		if ($update) {
			redirect('/datagejala');
		}
	}

	public function deletegejala($id)
	{
		$this->Gejala_model->deleteGejala($id);
		redirect('/datagejala');
	}

	public function datapenyakit()
	{
		$data['judul'] = "Data Penyakit";
		$data['aktif'] = "penyakit";
		$data['penyakit'] = $this->Penyakit_model->getAllData();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/datapenyakit');
		$this->load->view('template/footer');
		// }
	}
	public function tambahdatapenyakit()
	{
		$data['judul'] = "Form Tambah Data Penyakit";
		$data['aktif'] = "penyakit";
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/tambahdatapenyakit');
		$this->load->view('template/footer');
		// }
	}

	public function postdatapenyakit()
	{
		$kodepenyakit = $_POST['kode_penyakit'];
		$namapenyakit = $_POST['nama_penyakit'];
		$solusi = $_POST['solusi'];
		$cek = $this->Penyakit_model->insertData($kodepenyakit, $namapenyakit, $solusi);
		if ($cek) {
			redirect(base_url('datapenyakit'));
		}
	}
	public function editpenyakit($id)
	{
		$data['dataedit'] = $this->Penyakit_model->ambildata($id);
		$data['judul'] = "Form Edit Data Penyakit";
		$data['aktif'] = "penyakit";
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/editpenyakit', $data);
		$this->load->view('template/footer');
	}

	public function updatepenyakit()
	{
		$cek = $this->Penyakit_model->updatedata();
		if ($cek) {
			redirect(base_url('datapenyakit'));
		}
	}
	public function deletepenyakit($id)
	{
		$cek = $this->Penyakit_model->hapusdata($id);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('datapenyakit'));
		}
	}



	public function basisaturan()
	{
		$data['judul'] = "Basis Aturan";
		$data['aktif'] = "rule";
		$data['basis'] = $this->Basis_model->getAllData();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/basisaturan', $data);
		$this->load->view('template/footer');
		// }
	}

	public function tambahbasisaturan()
	{
		$data['judul'] = "Form Tambah Basis Aturan";
		$data['aktif'] = "rule";
		$data['penyakit'] = $this->Penyakit_model->getAllspes();
		$data['gejala'] = $this->Gejala_model->getAllspes();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/tambahbasisaturan', $data);
		$this->load->view('template/footer');
		// }
	}

	public function posttambahbasis()
	{
		$cek = $this->Basis_model->insertData($this->input->post('kode_gejala'), $this->input->post('kode_penyakit'), $this->input->post('nilai'));
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis pengetahuan berhasil di tambahkan');
			redirect(base_url('basisaturan'));
		}
	}
	public function editbasisaturan($id)
	{
		$data['judul'] = "Form Ubah Basis Aturan";
		$data['aktif'] = "rule";
		$data['id'] = $id;
		$data['basis'] = $this->Basis_model->selectBasis($id);
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/editbasisaturan', $data);
		$this->load->view('template/footer');
		// }
	}

	public function postupdatebasis()
	{
		$cek = $this->Basis_model->updatedata();
		if ($cek) {
			$this->session->set_flashdata('berhasil', 'Basis Pengetahuan Berhasil di update');
			redirect(base_url('basisaturan'));
		}
	}
	public function deletebasis($id)
	{
		$cek = $this->Basis_model->hapusdata($id);
		if ($cek) {
			$this->session->set_flashdata('deleted', 'berhasil dihapus');
			redirect(base_url('basisaturan'));
		}
	}

	public function riwayat()
	{
		$data['judul'] = "Riwayat Diagnosa";
		$data['aktif'] = "riwayat";
		$data['riwayat'] = $this->Riwayat_model->getAllData();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/riwayat',$data);
		$this->load->view('template/footer');
		// }
	}

	public function cetakriwayat()
	{
		$this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled',true);  
		$data['riwayat'] = $this->Riwayat_model->getAllData();
        // $customPaper = array(0,0,700,700);
        $this->pdf->setPaper('a4', 'landscape');
        $this->pdf->filename = "laporanriwayat.pdf";
        $this->pdf->load_view('admin/cetakriwayat',$data);
	}
	public function profil()
	{
		$data['judul'] = "Profil";
		$data['aktif'] = "profil";
		$data['admin'] = $this->Profil_model->getdata();
		$this->load->view('template/header', $data);
		$this->load->view('template/menu', $data);
		$this->load->view('admin/profil',$data);
		$this->load->view('template/footer');
	}

	public function buatpass()
	{
		var_dump(password_hash('admin', PASSWORD_DEFAULT));
	}
}
