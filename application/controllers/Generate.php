
<?php
defined('BASEPATH') or exit('No direct script access allowed');
// Menggunakan Vendor PHPSpreadSheet

class Generate extends CI_Controller
{
    public function index()
    {

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "Laporan-Dompdf-Codeigniter.pdf";
        $this->pdf->load_view('tes');
    }
}
