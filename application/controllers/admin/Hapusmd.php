<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hapusmd extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('datameninggal_model'); // Memuat model Datameninggal_model
    }

    public function hapus($id_penduduk)
    {
        // Panggil model untuk menghapus data berdasarkan ID penduduk
        $hapus_status = $this->datameninggal_model->hapus_data_by_id($id_penduduk);

        if ($hapus_status) {
            // Jika berhasil menghapus
            $this->session->set_flashdata('message', 'Data berhasil dihapus.');
        } else {
            // Jika gagal menghapus
            $this->session->set_flashdata('message', 'Gagal menghapus data.');
        }

        // Redirect ke halaman tertentu setelah operasi selesai
        redirect('admin/mutasimd');
    }
}
