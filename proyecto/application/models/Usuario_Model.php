<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_Model extends CI_Model {
        
   
    
    public function getAll(){
        $resultado = $this->db->get('usuarios');
        $usuario = $resultado->result_array();
        return $usuario;
    }


}
?>