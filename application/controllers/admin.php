<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Cargar el modelo
        $this->load->model('Usuario_model');
        // Cargar librerías y helpers necesarios
        $this->load->helper(['url', 'form']);
        $this->load->library('session');
    }

    // Mostrar la lista de usuarios
    public function index() {
        $usuarios = $this->Usuario_model->obtener_usuarios();
        $data['usuarios'] = $usuarios ? $usuarios : []; // Si no hay usuarios, mostramos un array vacío
        $data['mensaje'] = $this->session->flashdata('mensaje'); // Mensaje flash de sesión

        // Cargar la vista de admin
        $this->load->view('admin_usuarios', $data);
    }

    // Cambiar el estado de la cuenta del usuario
    public function cambiar_estado() {
        $id = $this->input->post('id_usuario');  // Recibe el id del usuario
        $estado = $this->input->post('estado_cuenta');  // Recibe el estado elegido
        
        // Verifica si los datos fueron enviados correctamente
        log_message('error', 'ID: ' . $id . ' Estado: ' . $estado);
    
        // Llama al modelo para actualizar el estado
        if ($this->Usuario_model->actualizar_estado($id, $estado)) {
            // Si se actualizó correctamente
            $this->session->set_flashdata('mensaje', 'Estado actualizado correctamente.');
        } else {
            // Si hubo un error
            $this->session->set_flashdata('mensaje', 'Error al actualizar el estado.');
        }
    
        // Redirige nuevamente al panel de administración
        redirect('admin');
    }
    
    
}
