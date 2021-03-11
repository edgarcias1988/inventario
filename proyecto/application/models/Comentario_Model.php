<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comentario_Model extends CI_Model {
    
    public function guardarComentario( array $comentario){
        return $this->db->insert('comentarios', $comentario)
    }


}

?>