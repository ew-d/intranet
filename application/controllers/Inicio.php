<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function index() {
        $this->load->view('inicio');
    }

    public function reuniones() {
        if (!$this->session->userdata('logueado')) {
            redirect('login');
        }
        $this->load->view('reuniones');
    }
}
