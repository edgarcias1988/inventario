<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estatus_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function get_estatus(){
       // $id_categoria = (int) $idcategoria;

        $this->db->select('*');
        $this->db->from('cat_estatus');
        $this->db->order_by('id');

        return $this->db->get()->result_array();

    }


}

?>