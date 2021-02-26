<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_laporannonbdt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $level = $this->session->userdata('level');

        if ($level !== '1') {
            redirect('Auth');
        }
        $this->load->model('m_laporan');
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'scripts' => array());
        $this->template->load('admin/static', 'admin/v_laporansuratnonbdt', $data);
    }

    public function laporan_perbulan()
    {
        $data = $this->m_laporan->print_perbulannonbdt();
        $this->load->library('pdf');
        $dt['bln'] = $data;
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan Surat Non BDT Bulan.pdf";
        $this->pdf->load_view('cetak/v_bulannonbdt', $dt);
    }

    public function laporan_pertahun()
    {
        $data = $this->m_laporan->print_pertahunnonbdt();
        $this->load->library('pdf');
        $dt['thn'] = $data;
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan Surat Non BDT Tahun.pdf";
        $this->pdf->load_view('cetak/v_tahunnonbdt', $dt);
    }
}

/* End of file C_laporan.php */
/* Location: ./application/controllers/admin/C_laporan.php */
