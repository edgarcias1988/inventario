<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sucursal_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function get_sucursal(){
       // $id_categoria = (int) $idcategoria;

        $this->db->select('*');
        $this->db->from('cat_sucursal');
        $this->db->order_by('id');

        return $this->db->get()->result_array();

    }


}

?>