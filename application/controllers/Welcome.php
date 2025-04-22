<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	// Página principal
	public function index()
	{
		$this->load->view('index');
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

	public function registro()
	{
		$this->load->view('registro');
	}

	// Página de tienda
	public function streams()
	{
		$this->load->view('streams');
	}
}

