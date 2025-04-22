<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library(['session', 'form_validation']);
    }

    // Muestra el formulario de login
    public function login() {
        $this->load->view('login_view');
    }

    // Procesa el login (CORREGIDO)
    public function login_usuario() {
        $correo = $this->input->post('correo');
        $contrasena = $this->input->post('contrasena');

        // Validación básica de campos
        if(empty($correo) || empty($contrasena)) {
            $this->session->set_flashdata('error', 'Todos los campos son obligatorios');
            redirect('login');
            return;
        }

        $usuario = $this->Usuario_model->verificar_usuario($correo, $contrasena);

        if ($usuario) {
            $this->session->set_userdata([
                'usuario_id' => $usuario->id,
                'nombre' => $usuario->nombre,
                'correo' => $usuario->correo,
                'logueado' => true
            ]);
            redirect(''); // Redirige a la página principal (index)
        } else {
            $this->session->set_flashdata('error', 'Correo o contraseña incorrectos');
            redirect('login');
        }
    }

    // Muestra el formulario de registro
    public function registro() {
        $this->load->view('registro_view');
    }

    // Procesa el registro
    public function registrar_usuario() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'required');
        $this->form_validation->set_rules('correo', 'Correo', 'required|valid_email|is_unique[usuarios.correo]');
        $this->form_validation->set_rules('contrasena', 'Contraseña', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('registro_view');
        } else {
            $data = [
                'nombre' => $this->input->post('nombre'),
                'correo' => $this->input->post('correo'),
                'contrasena' => password_hash($this->input->post('contrasena'), PASSWORD_BCRYPT)
            ];
            
            if($this->Usuario_model->crear_usuario($data)) {
                $this->session->set_flashdata('success', '¡Cuenta creada! Ahora inicia sesión.');
                redirect('login');
            } else {
                $this->session->set_flashdata('error', 'Error al crear la cuenta. Intenta nuevamente.');
                redirect('registro');
            }
        }
    }

    // Cierra la sesión
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
