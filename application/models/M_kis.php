<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kis extends CI_Model
{

    public function tampil()
    {
        $data = $this->db->query("SELECT * FROM kis order by nik DESC");
        return $data;
    }
}

/* End of file Mmasuk.php */
/* Location: ./application/models/Mmasuk.php */
