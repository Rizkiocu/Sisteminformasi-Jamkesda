<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_suratBdt extends CI_Model
{

    public function tampil()
    {
        $data = $this->db->query("SELECT * FROM surat_bdt left join(bdt) on surat_bdt.nik=bdt.nik ");
        return $data;
    }
    public function tampil_bdt()
    {
        $data = $this->db->query("SELECT * FROM bdt");
        return $data;
    }

    public function tambah($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function update($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapus($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function print($id_surat)
    {
        $data = $this->db->query("SELECT * FROM surat_bdt left join(bdt) on surat_bdt.nik=bdt.nik where surat_bdt.id_surat='$id_surat'")->result();
        return $data;
    }
}

/* End of file m_beasiswa.php */
/* Location: ./application/models/m_beasiswa.php */
