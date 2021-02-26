<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_laporanbdt extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $level = $this->session->userdata('level');

        if ($level !== '2') {
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
        $this->template->load('kepala/static', 'kepala/v_laporansuratbdt', $data);
    }

    public function laporan_perbulan()
    {
        $data = $this->m_laporan->print_perbulanbdt();
        $this->load->library('pdf');
        $dt['bln'] = $data;
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan Surat BDT Bulan.pdf";
        $this->pdf->load_view('cetak/v_bulanbdt', $dt);
    }

    public function laporan_pertahun()
    {
        $data = $this->m_laporan->print_pertahunbdt();
        $this->load->library('pdf');
        $dt['thn'] = $data;
        $this->pdf->setPaper('A4', 'landscape');
        $this->pdf->filename = "laporan Surat BDT Tahun.pdf";
        $this->pdf->load_view('cetak/v_tahunbdt', $dt);
    }
}

/* End of file C_laporan.php */
/* Location: ./application/controllers/admin/C_laporan.php */
