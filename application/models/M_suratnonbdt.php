<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_suratnonbdt extends CI_Model
{

    public function tampil()
    {
        $data = $this->db->query("SELECT * FROM surat_nonbdt");
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
    public function print($id_snonbdt)
    {
        $data = $this->db->query("SELECT * FROM surat_nonbdt where surat_nonbdt.id_snonbdt='$id_snonbdt'")->result();
        return $data;
    }
}

/* End of file m_beasiswa.php */
/* Location: ./application/models/m_beasiswa.php */
