
<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Generate extends CI_Controller
{
    public function index()
    {
        $this->load->library('pdf');
        $this->pdf->set_option('isRemoteEnabled',true);  
        $customPaper = array(0,0,700,700);
        $this->pdf->setPaper($customPaper, 'portrait');
        $this->pdf->filename = "laporandiagnosa.pdf";
        $this->pdf->load_view('user/printhasil');
    }
}
