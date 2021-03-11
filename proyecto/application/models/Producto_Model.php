<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto_Model extends CI_Model {

    function __construct(){
        parent::__construct();
    }
    
    public function guardarProducto($producto){
        return  $this->db->insert('productos', $producto);
    }

    public function actualizarProducto($id,$producto){
        $this->db->where('id',$id);
        return  $this->db->update('productos', $producto);
    }

    public function eliminarProducto(int $id){
        $this->db->where('id',$id);
        return $this->db->delete('productos');
    } 

    public function allProducto(){

        $this->db->select('productos.id, productos.producto, cat_sucursal.sucursal, cat_producto.categoria');
        $this->db->from('productos');
        $this->db->join('cat_sucursal', 'productos.sucursal_id = cat_sucursal.id');
        $this->db->join('cat_producto', 'productos.categoria_id = cat_producto.id');
        $this->db->order_by('productos.id');

        return $this->db->get()->result_array(); 
        
            
    }

    public function editarProducto($id){

        $this->db->select('productos.id, productos.producto, productos.descripcion,
        productos.precio, productos.fecha_compra,cat_estatus.id, 
        cat_sucursal.sucursal, cat_producto.categoria, productos.comentarios');
        $this->db->from('productos');
        $this->db->where('productos.id', $id);
        $this->db->join('cat_sucursal', 'productos.sucursal_id = cat_sucursal.id');
        $this->db->join('cat_producto', 'productos.categoria_id = cat_producto.id');
        $this->db->join('cat_estatus', 'productos.estatus_id = cat_estatus.id');


        return $this->db->get()->row_array();
    }

    public function guardarMultiple($producto){
        return  $this->db->insert('productos', $producto);
    }

}
?>