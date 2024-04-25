<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapenduduk_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    // Method untuk mengambil data RW
    public function getRW()
    {
        return $this->db->get('rw')->result();
    }

    // Method untuk mengambil data penduduk beserta informasi RW
    public function getPendudukWithRW()
    {
        $this->db->select('penduduk.*, rw.nama_rw');
        $this->db->from('penduduk');
        $this->db->join('rw', 'rw.id_rw = penduduk.id_rw', 'left');
        return $this->db->get()->result();
    }

    // Method untuk mengambil data penduduk berdasarkan ID
    public function get_data_by_id($id_penduduk)
    {
        $this->db->where('id_penduduk', $id_penduduk);
        $query = $this->db->get('penduduk');
        return $query->row();
    }

    public function update_data($id_penduduk, $data)
    {
        if (isset($data['rw'])) {
            unset($data['rw']); // Hapus 'rw' dari data yang akan diupdate
        }
        
        $this->db->where('id_penduduk', $id_penduduk);
        $this->db->update('penduduk', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function checkRWExists($rw)
    {
        $this->db->where('id_rw', $rw);
        $query = $this->db->get('rw');
        return $query->num_rows() > 0;
    }

    // Method untuk menyimpan data penduduk ke dalam database
    public function insert_data($data)
    {
        $this->db->insert('penduduk', $data);
        return ($this->db->affected_rows() > 0) ? true : false;
    }

    public function hapus_data($id_penduduk)
    {
        $this->db->where('id_penduduk', $id_penduduk);
        $this->db->delete('penduduk'); // Ganti 'nama_tabel' dengan nama tabel yang benar

        return ($this->db->affected_rows() > 0) ? true : false;
    }
    
}
?>
