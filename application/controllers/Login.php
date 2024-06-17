<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
        // echo "tes";
        // die;
		// Jika tidak ada user yang berhasil login, kembalikan ke halaman login
		// if ($this->session->userdata('username')) {
		// 	redirect('admin');
		// }

		// Rules Validation
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('user/login');
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username==='' || $password===''){
			$this->session->set_flashdata('message', '
			<div class="alert alert-danger" role="alert">
				Anda Belum Mengisi Form
			</div>
			');
			redirect('login');
		}

		// Query User
		$login = $this->db->get_where('tbl_login', ['username' => $username])->row_array();

		// Check Data Login (Terdaftar / Tidak di dalam database)
		if ($login) {
			// Jika Terdaftar (Ada)
			// Check Password
			if (password_verify($password, $login['password'])) {

				// Jika Password Benar
				$data = [
					'username' => $login['username'],
					'nama' => $login['nama']
				];
				$this->session->set_userdata($data);
			redirect('admin');
			} else {
				// Jika Password Salah
				$this->session->set_flashdata('message', '
				<div class="alert alert-danger" role="alert">
				Password Salah
			  </div>
				');
				redirect('auth');
			}
		} else {
			// Jika Tidak Terdaftar (Tidak Ada)
			$this->session->set_flashdata('message', '
			<div class="alert alert-danger" role="alert">
			Username Tidak Terdaftar
		  </div>
			');
			redirect('login');
		}
	}

	public function regist()
	{

		// Rules Validation
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/login');
		} else {

			$data = [
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role' => 'Admin'
			];
			redirect('admin');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('nama');

		// Flash
		$this->session->set_flashdata('message', '
		<div class="alert alert-danger" role="alert">
		Anda Telah Log out, sesi berakhir
	  </div>
		');
		redirect('login');
	}
}
