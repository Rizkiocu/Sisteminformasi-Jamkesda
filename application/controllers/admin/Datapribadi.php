<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapribadi extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();

		$level = $this->session->userdata('level');
		if ($level !== '1') {
			redirect('Auth');
		}
		$this->load->model('m_profile');
	}

	public function profile()
	{

		$username = $this->session->userdata('username');
		$level = $this->session->userdata('level');
		$nama = $this->session->userdata('nama');

		$t_profile = $this->m_profile->tampil($username)->result();

		$data = array('usernamenya' => $username,'namanya' => $nama,'levelnya' => $level,'t_profile' => $t_profile,'scripts' =>array());
		$this->template->load('admin/static','admin/Halamanprofile',$data);
	}
	public function updatepassword()
	{
		$nik = $this->input->post('nik');
		$password = md5($this->input->post('password'));

		$data = array ('password'=>$password);
		$where = array ('nik'=>$nik);
		$this->m_profile->updatepassword($where,$data,'user');
		redirect('admin/datapribadi/profile');
	}

	
	  

}

/* End of file Laporan.php */
/* Location: ./application/controllers/kepala/Laporan.php */