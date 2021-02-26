<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_kis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        $level = $this->session->userdata('level');

        if ($level !== '1') {
            redirect('Auth');
        }
        $this->load->model('M_kis');
    }

    public function index()
    {
        $username = $this->session->userdata('username');
        $level = $this->session->userdata('level');
        $nama = $this->session->userdata('nama');

        $kis = $this->M_kis->tampil()->result();

        $data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'kis' => $kis, 'scripts' => array());
        $this->template->load('admin/static', 'admin/v_kis', $data);
    }
}

/* End of file C_bdt.php */
/* Location: ./application/controllers/admin/C_bdt.php */
