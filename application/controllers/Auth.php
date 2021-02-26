<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}


	public function index()
	{

		$level = $this->session->userdata('level');


		if ($level == '1') {
			redirect('admin/home');
		} elseif ($level == '2') {
			redirect('kepala/home');
		} else {
			$this->load->view('Login');
		}
	}
	public function do_login()
	{
		$data = array(
			'username' => $this->input->post('username', TRUE),
			'password' => md5($this->input->post('password', TRUE))
		);
		$hasil = $this->m_login->validasi($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['isUser'] = TRUE;
				$sess_data['nik'] = $sess->nik;
				$sess_data['username'] = $sess->username;
				$sess_data['nama'] = $sess->nama;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);

				$userData = $this->session->userdata();
			}
			if ($userData['level'] == '1') {
				redirect('admin/home');
			} else {
				redirect('kepala/home');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal login: Cek username, password!</div>');
			redirect('Auth');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}
}
