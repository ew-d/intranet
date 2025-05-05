<?php
class EventosF_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // Obtener todos los eventos activos
    public function get_eventos() {
        $query = $this->db->get_where('eventos', ['estado' => 1]);
        return $query->result_array();
    }

    // Obtener evento por id
    public function get_evento($id) {
        $query = $this->db->get_where('eventos', ['id' => $id]);
        return $query->row_array();
    }

    // Obtener todos los eventos (puedes agregar filtros si es necesario)
    public function obtener_eventos() {
        // Si quieres solo los eventos activos, descomenta la siguiente línea:
        $this->db->where('estado', 1);
        $query = $this->db->get('eventos'); // Asegúrate de que la tabla se llama 'eventos'
        return $query->result_array();
    }

    // Obtener un evento específico por ID (para detalle de evento)
    public function obtener_evento_por_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('eventos');
        return $query->row_array();
    }
    public function obtener_eventos_activos() {
        $this->db->where('estado', 1);
        $this->db->order_by('fecha', 'ASC');
        $query = $this->db->get('eventos');
        return $query->result_array();
    }
    
    // Obtiene un evento específico por ID
    

}