<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Profile extends CI_Controller
{
    public function index()
    {
        $data['title']= 'PROFILE'; 
        
        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/sidebar', $data);
        $this->load->view('user/profile');
        $this->load->view('user/template/footer');

    }
}

