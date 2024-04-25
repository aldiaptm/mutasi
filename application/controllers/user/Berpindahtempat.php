<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berpindahtempat extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('user/Berpindahtempat_model');
    }

    public function index() {
        $data['title']= 'BERPINDAH TEMPAT';
        // $data['penduduk'] = $this->Datapenduduk_model->getPendudukWithRW();
        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/sidebar', $data);
        $this->load->view('user/berpindahtempat', $data); 
        $this->load->view('template/footer');
    }

}
