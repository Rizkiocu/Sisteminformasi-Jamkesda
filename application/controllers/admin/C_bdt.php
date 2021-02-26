<?php
defined('BASEPATH') or exit('No direct script access allowed');

class C_bdt extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$level = $this->session->userdata('level');

		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('M_bdt');
	}

	public function index()
	{
		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$bdt = $this->M_bdt->tampil()->result();

		$data = array('usernamenya' => $username, 'namanya' => $nama, 'levelnya' => $level, 'bdt' => $bdt, 'scripts' => array());
		$this->template->load('admin/static', 'admin/v_bdt', $data);
	}
}

/* End of file C_bdt.php */
/* Location: ./application/controllers/admin/C_bdt.php */
