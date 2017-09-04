<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Total extends CI_Controller {

    public function index() {
        $this->load->view('templates/header');
        $this->load->view('total_view');
        $this->load->view('templates/footer_total');
    }

}
