<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar el modelo de eventos
        $this->load->model('Evento_model');
        
        // Solo accesible si está logueado
        if (!$this->session->userdata('logueado')) {
            redirect('login'); // Si no está logueado, va al login
        }
    }
    
    public function index() {
        // Obtener eventos desde el modelo
        $data['eventos'] = $this->Evento_model->get_eventos();

        // Cargar vista con los eventos
        $this->load->view('eventos_view', $data);
    }
}
