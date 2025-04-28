<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_model extends CI_Model {

    public function get_productos_limited($limit, $offset) {
        $this->db->select('*');
        $this->db->from('productos_premios');
        $this->db->order_by('fecha_sorteo', 'ASC');
        $this->db->limit($limit, $offset);  // Esto asegura que solo se traigan 8
        $query = $this->db->get();
        return $query->result();
    }
    
    

    public function count_productos() {
        return $this->db->count_all('productos_premios');
    }
}
?>