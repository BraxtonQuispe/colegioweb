<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
        $this->lang->load('app', 'spanish');
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('form_validation'));
        $this->load->database();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('templates/header_login');
        $this->load->view('templates/footer');

        $this->form_validation->set_rules(
                'firstName', 'Nome', 'trim|required|alpha|min_length[3]|max_length[30]', array('required' => 'campo Nombre es obligatorio'));
        $this->form_validation->set_rules(
                'lastName', 'Sobrenome', 'trim|required|alpha|min_length[3]|max_length[30]', array('required' => 'campo Apellido es obligatorio'));
        $this->form_validation->set_rules(
                'email', 'Email', 'trim|required|valid_email|is_unique[tsegu_usuario1.email]', array('required' => 'campo Email és Obligatório',
            'is_unique' => 'Esse email já esta cadastrado em nossa base de dados.'));
        $this->form_validation->set_rules(
                'password', 'Senha', 'trim|required|md5|min_length[6]', array('required' => 'O campo clave é Obligatório'));
        $this->form_validation->set_rules(
                'confirmPassword', 'Confirme sua Senha', 'trim|required|md5|matches[password]', array('required' => 'Digite sua clave Nuevamente'));

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view');
        } else {
            $data = array(
                'fname' => $this->input->post('firstName'),
                'lname' => $this->input->post('lastName'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            if ($this->user_model->insert_user($data)) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Usuario Registrado com Sucesso! Faça seu Login para acessar o sistema!</div>');
                redirect('signup/index');
            } else {
                // error
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Erro ao cadastrar.Por Favor tente novamente!</div>');
                redirect('signup/index');
            }
        }
    }

}
