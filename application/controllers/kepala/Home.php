<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level') !== '2') {
            redirect('Auth');
        }
    }

    public function index()
    {
        $userData = $this->session->userdata();
        $data = array('usernamenya' => $userData['username'], 'namanya' => $userData['nama'], 'levelnya' => $userData['level'], 'scripts' => array());
        $this->template->load('kepala/static', 'kepala/dashboard', $data);
    }
}
