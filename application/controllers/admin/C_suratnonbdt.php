<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_suratnonbdt extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $level = $this->session->userdata('level');

        if ($level !== '1') {
            redirect('Auth');
        }
        $this->load->model('M_suratnonbdt');
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $surat = $this->M_suratnonbdt->tampil()->result();

        $data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'surat' => $surat, 'scripts' => array());
        $this->template->load('admin/static', 'admin/V_suratnonbdt', $data);
    }


    public function tambah()
    {
        $this->form_validation->set_rules(
            'nik',
            'nik',
            'trim|required|is_unique[bdt.nik]'
        );
        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('gagal', '<div class="alert alert-danger" role="alert">
				Gagal Menambahkan Data!!<br>
				Data NIK sudah terdaftar di BDT!!
				
			</div>');
            redirect('admin/C_suratnonbdt');
        } else {
            $id_snonbdt = $this->input->post('id_snonbdt');
            $kk = $this->input->post('kk');
            $nik = $this->input->post('nik');
            $nama = $this->input->post('nama');
            $no_instansi = $this->input->post('no_instansi');
            $no_skeluar = $this->input->post('no_skeluar');
            $no_smiskin = $this->input->post('no_smiskin');
            $tgl_smiskin = $this->input->post('tgl_smiskin');
            $tgl_skeluar = $this->input->post('tgl_skeluar');

            $data = array(
                'id_snonbdt' => $id_snonbdt,
                'kk' => $kk,
                'nik' => $nik,
                'nama' => $nama,
                'no_instansi' => $no_instansi,
                'no_skeluar' => $no_skeluar,
                'no_smiskin' => $no_smiskin,
                'tgl_smiskin' => $tgl_smiskin,
                'tgl_skeluar' => $tgl_skeluar

            );
            $this->session->set_flashdata('message', '<div class="alert alert-success" style="text-align:center">Data Surat Non BDT Berhasil ditambahkan</div>');
            $this->M_suratnonbdt->tambah($data, 'surat_nonbdt');

            redirect('admin/C_suratnonbdt');
        }
    }

    public function update()
    {
        $id_snonbdt = $this->input->post('id_snonbdt');
        $kk = $this->input->post('kk');
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $no_instansi = $this->input->post('no_instansi');
        $no_skeluar = $this->input->post('no_skeluar');
        $no_smiskin = $this->input->post('no_smiskin');
        $tgl_smiskin = $this->input->post('tgl_smiskin');
        $tgl_skeluar = $this->input->post('tgl_skeluar');

        $data = array(
            'kk' => $kk,
            'nik' => $nik,
            'nama' => $nama,
            'no_instansi' => $no_instansi,
            'no_skeluar' => $no_skeluar,
            'no_smiskin' => $no_smiskin,
            'tgl_smiskin' => $tgl_smiskin,
            'tgl_skeluar' => $tgl_skeluar

        );

        $where = array(
            'id_snonbdt' => $id_snonbdt
        );


        $this->M_suratnonbdt->update($where, $data, 'surat_nonbdt');
        redirect('admin/C_suratnonbdt');
    }



    public function hapus($id_snonbdt)
    {
        $where = array('id_snonbdt' => $id_snonbdt);
        $this->M_suratnonbdt->hapus($where, 'surat_nonbdt');
        redirect('admin/C_suratnonbdt');
    }

    public function print($id_snonbdt)
    {

        $data = $this->M_suratnonbdt->print($id_snonbdt);

        $this->load->library('pdf');
        $dt['surat_non'] = $data;
        $this->pdf->setPaper('A4', 'portrait');
        $this->pdf->filename = "Surat Non Bdt.pdf";
        $this->pdf->load_view('admin/V_printsuratnonbdt', $dt);
    }
}

/* End of file Beasiswa.php */
/* Location: ./application/controllers/staff/Beasiswa.php */
