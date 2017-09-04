<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->helper();
        $this->load->library('session');
        $this->load->database();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('templates/footer');
        $details = $this->User_model->get_user_by_id($this->session->userdata('uid'));
        $data['uname'] = $details[0]->fname . " " . $details[0]->lname;
        $data['uemail'] = $details[0]->email;
        $this->load->view('profile_view', $data);
    }
}
