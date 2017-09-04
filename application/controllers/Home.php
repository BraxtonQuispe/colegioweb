<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper();
        $this->load->library('session');
    }

    public function index() {
        $this->load->view('templates/header_login');
        $this->load->view('home_view');
        $this->load->view('templates/footer');
    }

    public function logout() {
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('home/index');
    }

}
