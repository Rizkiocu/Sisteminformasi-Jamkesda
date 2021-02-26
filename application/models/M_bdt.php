<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_bdt extends CI_Model
{

	public function tampil()
	{
		$data = $this->db->query("SELECT * FROM bdt order by id_bdt DESC");
		return $data;
	}
}

/* End of file Mmasuk.php */
/* Location: ./application/models/Mmasuk.php */
