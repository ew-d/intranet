<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    public function verificar_usuario($correo, $contrasena) {
        $this->db->where('correo', $correo);
        $usuario = $this->db->get('usuarios')->row();

        if ($usuario && password_verify($contrasena, $usuario->contrasena)) {
            return $usuario;
        }
        return false;
    }

    public function crear_usuario($data) {
        return $this->db->insert('usuarios', $data);
    }
}