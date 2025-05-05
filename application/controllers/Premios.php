<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Premios extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Producto_model');
    }

    public function index() {
        $limit = 8;  // Limitar a 8 productos al inicio
        $offset = 0;
        $data['productos'] = $this->Producto_model->get_productos_limited($limit, $offset); 
        $data['total_productos'] = $this->Producto_model->count_productos(); // Total de productos
        $this->load->view('premios_view', $data);
    }

    public function cargar_mas_productos() {
        $limit = 12; // Cargar los 12 productos restantes
        $offset = $this->input->post('offset'); // Desplazamiento basado en los productos ya cargados
        $productos = $this->Producto_model->get_productos_limited($limit, $offset); // Trae los siguientes productos
        echo json_encode($productos); // Enviar los productos como JSON para ser cargados con JS
    }
}
?>
