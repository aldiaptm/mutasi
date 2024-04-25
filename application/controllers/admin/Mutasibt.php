<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mutasibt extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Databerpindahtempat_model');
    }

    public function index() {
        // Jika parameter nama_penduduk diset, panggil fungsi get_detail_meninggal_by_name
        if ($this->input->get('nama')) {
            $nama= $this->input->get('nama_penduduk');
            $data['detail_pindah'] = $this->Databerpindahtempat_model->get_detail_pindah_by_name($nama);
        } else {
            // Jika tidak, panggil fungsi get_all_detail_meninggal
            $data['detail_pindah'] = $this->Databerpindahtempat_model->get_all_detail_pindah();
        }

        // Memuat view untuk menampilkan data
        $data['title'] = 'DATA BERPINDAH TEMPAT';
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/mutasibt', $data);
        $this->load->view('template/footer');
    }
}
?>
