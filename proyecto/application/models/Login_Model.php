<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_Model extends CI_Model {

    
    public function autenticar($usuario, $password)
    {
      $this->db->select('*');
      $this->db->from('usuarios');
      $this->db->where('usuario', $usuario);
      $this->db->where('password', $password);
      $this->db->where('acceso', 1);

      $query=$this->db->get();
      if($query->num_rows()==1){
        $datos = $query->row_array(); 
        $datosUsuario = array(
          'idUsuario'  => $datos['id'],
          'usuario'  => $datos['usuario'],
          'nombreCompleto' => $datos['nombre']." ".$datos['apellido_paterno']." ".$datos['apellido_materno'],
          'perfil'   => $datos['perfil_id'],
          'acceso' => $datos['acceso']
        );
  
        $this->session->set_userdata($datosUsuario);
      }
      return $query->num_rows();
   
    } 


}
?>