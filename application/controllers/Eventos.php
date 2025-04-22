<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Solo accesible si está logueado
        if(!$this->session->userdata('logueado')) {
            redirect('login'); // Si no está logueado, va al login
        }
    }

    public function index() {
        // Carga la vista de eventos (la crearemos en el paso 3)
        $this->load->view('eventos_view');
    }
}