<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function get_categorias(){
       // $id_categoria = (int) $idcategoria;

        $this->db->select('*');
        $this->db->from('cat_producto');
        $this->db->order_by('id');

        return $this->db->get()->result_array();

    }


}

?>