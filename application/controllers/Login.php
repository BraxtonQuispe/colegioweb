<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->lang->load('app', 'spanish');
        $this->load->helper();
        $this->load->library('session','form_validation');
        $this->load->database();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('templates/header_login');
        $this->load->view('templates/footer');
        
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // form validation
        $this->form_validation->set_rules(
                "email", "Digite seu Email", "trim|required",
                array('required' => 'O campo Email é Obligatório'));
        $this->form_validation->set_rules(
                "password", "Password", "trim|required",
                array('required' => 'O campo Senha é Obrigatório'));

        if ($this->form_validation->run() == FALSE) {
            // validation fail
            $this->load->view('login_view');
        } else {
            // check for user credentials
            $uresult = $this->User_model->get_user($email, $password);
            if (count($uresult) > 0) {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->fname, 'uid' => $uresult[0]->id);
                $this->session->set_userdata($sess_data);
                redirect("profile/index");
            } else {
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Wrong Email-ID or Password!</div>');
                redirect('login/index');
            }
        }
    }

}
