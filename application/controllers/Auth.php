<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Usuario_model');
        $this->load->library(['session', 'form_validation', 'upload']);
        $this->load->helper('url');
        
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
            redirect(''); 
              // Redirige a la página principal (index)
        } else {
            $this->session->set_flashdata('error', 'Correo o contraseña incorrectos');
            redirect('login');
            var_dump($usuario);exit; 
        }
    }

    // Muestra el formulario de registro
    public function registro() {
        $this->load->view('registro_view');
    }

    // Procesa el registro
    public function registrar() {
        // Validación básica de formulario
        $this->form_validation->set_rules('nombre', 'Nombre completo', 'required');
        $this->form_validation->set_rules('dni', 'DNI', 'required');
        $this->form_validation->set_rules('celular', 'Celular', 'required');
        $this->form_validation->set_rules('email', 'Correo electrónico', 'required|valid_email');
        $this->form_validation->set_rules('clave', 'Contraseña', 'required|min_length[6]');
        $this->form_validation->set_rules('plan', 'Plan', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->load->view('registro_view');
            return;
        }

        // Configuración para la carga del archivo
        $config['upload_path'] = './uploads/comprobantes/';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size'] = 2048; // Tamaño máximo en KB

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('comprobante')) {
            $this->session->set_flashdata('error', $this->upload->display_errors());
            redirect('auth/registro');
            return;
        }

        $comprobante_data = $this->upload->data();
        $comprobante_name = $comprobante_data['file_name'];

        // Guardar en la base de datos
        $data = [
            'nombre'       => $this->input->post('nombre'),
            'dni'          => $this->input->post('dni'),
            'celular'      => $this->input->post('celular'),
            'email'        => $this->input->post('email'),
            'clave'        => password_hash($this->input->post('clave'), PASSWORD_DEFAULT),
            'plan'         => $this->input->post('plan'),
            'evidencia_pago' => $comprobante_name // Guardamos solo el nombre del archivo
        ];

        $this->Usuario_model->insert($data);

        $this->session->set_flashdata('success', '¡Registro exitoso! Validaremos tu pago pronto.');
        redirect('auth/login');
    }

    // Cierra la sesión
    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
