<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

    // Verifica si el usuario existe y la contraseña es correcta
    public function verificar_usuario($correo, $contrasena) {
        $this->db->where('correo', $correo);
        $usuario = $this->db->get('usuarios')->row();

        // Verificamos si el usuario existe y la contraseña es correcta
        if ($usuario && password_verify($contrasena, $usuario->contrasena)) {
            return $usuario;
        }
        return false;
    }

    // Crea un nuevo usuario en la base de datos
    public function crear_usuario($data) {
        // Aseguramos que el dato sea insertado correctamente
        if ($this->db->insert('usuarios', $data)) {
            return true;
        }
        return false;
    }

    // Obtiene todos los usuarios como objetos
    public function obtener_usuarios() {
        // Obtenemos los usuarios de la base de datos
        $query = $this->db->get('usuarios');
        return $query->result(); // Devolvemos los usuarios como objetos
    }

    // Actualiza el estado de la cuenta del usuario
    public function actualizar_estado($id, $estado) {
        // Verificamos que el id y el estado no estén vacíos
        if (empty($id) || empty($estado)) {
            log_message('error', 'ID o estado vacíos');
            return false;
        }
    
        // Preparamos los datos para actualizar
        $data = ['estado_cuenta' => $estado];
        
        // Actualizamos el registro en la tabla 'usuarios'
        $this->db->where('id', $id);
        return $this->db->update('usuarios', $data);
    }
    
    public function obtener_usuario_por_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('usuarios'); // Asegúrate de usar el nombre correcto de la tabla
        return $query->row(); // Devuelve un solo objeto
    }
    
}
