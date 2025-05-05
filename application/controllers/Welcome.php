<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// Página principal
	public function index()
	{
		$this->load->model('Producto_model');
		$data['productos'] = $this->Producto_model->get_productos_limited(10, 0);
		$data['total_productos'] = $this->Producto_model->count_productos();
		$this->load->view('index', $data);
		
	}

	// Página de navegación/búsqueda
	public function browse()
	{
		$this->load->view('browse');
	}

	// Página de beneficios
	public function details()
	{
		$this->load->view('details');
	}

	public function eventos() {
		// Carga los modelos necesarios
		$this->load->model('Usuario_model');
		$this->load->model('Eventos_model'); // Asumo que crearás este modelo
		
		// Obtiene el ID del usuario de la sesión
		$usuario_id = $this->session->userdata('usuario_id');
		
		// Verifica si hay un usuario en sesión
		if (!$usuario_id) {
			redirect('login');
		}
		
		// Obtiene los datos del usuario
		$usuario = $this->Usuario_model->obtener_usuario_por_id($usuario_id);
		
		// Verifica estado de cuenta
		if ($usuario->estado_cuenta == 1) { 
			// Cuenta activa - obtener y mostrar eventos
			$data['eventos'] = $this->Eventos_model->obtener_eventos_activos();
			$this->load->view('eventos', $data);
		} 
		elseif ($usuario->estado_cuenta == 2) {
			// Cuenta en verificación
			$data['mensaje'] = "Tu cuenta está en verificación. Se te notificará por correo o WhatsApp cuando sea activada.";
			$data['usuario'] = $usuario;
			$this->load->view('evento_restringido', $data);
		}
		else {
			// Otros estados (cuenta rechazada)
			$data['mensaje'] = "Tu cuenta ha sido rechazada. Por favor, contacta al administrador para más información.";
			$data['usuario'] = $usuario;
			$this->load->view('evento_restringido', $data);
		}
	}
	
	
	
	

	// Página de perfil
	public function profile()
	{
		$this->load->view('profile');
	}

	// Página de registro
	public function registro()
	{
		$this->load->view('registro');
	}

	// Página de tienda
	public function streams()
	{
		$this->load->view('streams');
	}

	// Método para cargar más productos dinámicamente
	public function cargar_mas_productos()
	{
		$this->load->model('Producto_model');
		$offset = $this->input->post('offset'); // Recibe el número de productos ya mostrados
		$productos = $this->Producto_model->get_productos_limited(20, $offset); // Carga otros 10
		echo json_encode($productos); // Devuelve productos en JSON para que JS los agregue
	}
}
