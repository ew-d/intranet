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

	// Página de eventos
	public function eventos()
	{
		$this->load->view('eventos');
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
