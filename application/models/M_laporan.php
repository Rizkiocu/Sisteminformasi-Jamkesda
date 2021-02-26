<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{
	public function print_perbulanbdt()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$where = "WHERE month(tgl_suratkeluar) =  '$bulan' AND year(tgl_suratkeluar) = '$tahun'";
		$data = $this->db->query("SELECT * FROM surat_bdt left join(bdt) on surat_bdt.nik=bdt.nik $where ORDER BY tgl_suratkeluar")->result();
		return $data;
	}
	public function print_pertahunbdt()
	{
		$tahun = $this->input->post('tahun');
		$where = "WHERE  year(tgl_suratkeluar) = '$tahun'";
		$data = $this->db->query("SELECT * FROM surat_bdt left join(bdt) on surat_bdt.nik=bdt.nik $where ORDER BY tgl_suratkeluar")->result();
		return $data;
	}

	public function print_perbulannonbdt()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$where = "WHERE month(tgl_skeluar) =  '$bulan' AND year(tgl_skeluar) = '$tahun'";
		$data = $this->db->query("SELECT * FROM surat_nonbdt  $where ORDER BY tgl_skeluar")->result();
		return $data;
	}
	public function print_pertahunnonbdt()
	{
		$tahun = $this->input->post('tahun');
		$where = "WHERE  year(tgl_skeluar) = '$tahun'";
		$data = $this->db->query("SELECT * FROM surat_nonbdt $where ORDER BY tgl_skeluar")->result();
		return $data;
	}
}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */
