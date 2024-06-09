<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class User extends CI_Controller
{
	public function index()
	{
		$this->load->view('user/homeuser');
	}
	public function login()
	{
		$this->load->view('user/login');
	}

	
}
