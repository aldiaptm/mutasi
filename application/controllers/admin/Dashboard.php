<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
    public function index()
    {
        $data['title']= 'DASHBOARD'; 
        
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('admin/dashboard',);
        $this->load->view('template/footer');

    }
}

