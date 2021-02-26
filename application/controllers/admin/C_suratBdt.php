<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_suratBdt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $level = $this->session->userdata('level');

        if ($level !== '1') {
            redirect('Auth');
        }
        $this->load->model('M_suratBdt');
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $bdt = $this->M_suratBdt->tampil_bdt()->result();
        $surat = $this->M_suratBdt->tampil()->result();

        $data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'bdt' => $bdt, 'surat' => $surat, 'scripts' => array());
        $this->template->load('admin/static', 'admin/V_suratBdt', $data);
    }


    public function tambah()
    {
        $nik = $this->input->post('nik');
        $no_instansi = $this->input->post('no_instansi');
        $no_skeluar = $this->input->post('no_skeluar');
        $tgl_suratkeluar = $this->input->post('tgl_suratkeluar');

        $data = array(
            'nik' => $nik,
            'no_instansi' => $no_instansi,
            'no_skeluar' => $no_skeluar,
            'tgl_suratkeluar' => $tgl_suratkeluar,

        );
        $this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Surat BDT Berhasil ditambahkan</div>');
        $this->M_suratBdt->tambah($data, 'surat_bdt');

        redirect('admin/C_suratBdt');
    }

    public function update()
    {
        $id_surat = $this->input->post('id_surat');
        $nik = $this->input->post('nik');
        $no_instansi = $this->input->post('no_instansi');
        $no_skeluar = $this->input->post('no_skeluar');
        $tgl_suratkeluar = $this->input->post('tgl_suratkeluar');

        $data = array(
            'nik' => $nik,
            'no_instansi' => $no_instansi,
            'no_skeluar' => $no_skeluar,
            'tgl_suratkeluar' => $tgl_suratkeluar,

        );

        $where = array(
            'id_surat' => $id_surat
        );


        $this->M_suratBdt->update($where, $data, 'surat_bdt');
        redirect('admin/C_suratBdt');
    }




    public function hapus($id_surat)
    {
        $where = array('id_surat' => $id_surat);
        $this->M_suratBdt->hapus($where, 'surat_bdt');
        redirect('admin/C_suratBdt');
    }


    public function print($id_surat)
    {

        $data = $this->M_suratBdt->print($id_surat);

        $this->load->library('pdf');
        $dt['surat'] = $data;
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "laporan surat.pdf";
        $this->pdf->load_view('admin/v_printsuratbdt', $dt);
    }
}

/* End of file Beasiswa.php */
/* Location: ./application/controllers/staff/Beasiswa.php */
