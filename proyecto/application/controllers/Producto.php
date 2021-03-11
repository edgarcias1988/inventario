<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->database();
		$this->load->model('Categoria_Model');
		$this->load->model('Sucursal_Model');
		$this->load->model('Producto_Model');
		$this->load->model('Estatus_Model');
	}

	public function registro()
	{
		$categorias= $this->Categoria_Model->get_categorias();
		$sucursales= $this->Sucursal_Model->get_sucursal();
		$data= array(
			'categorias' =>$categorias,
			'sucursales' =>$sucursales
		);
		$this->load->view('header_view');
		$this->load->view('alta_view', $data);
		$this->load->view('footer_view');
	}

	public function guarda_producto()
	{
		

		$producto= $_POST['a1'];
        $descripcion =$_POST['a2'];
        $categoria =$_POST['a3'];
        $sucursal =$_POST['a4'];
        $precio =$_POST['a5'];
        $fechaCompra =$_POST['a6'];
		//echo $producto;

			$data=array(
			'producto'=>$producto, 
			'descripcion' =>$descripcion,
			'categoria_id' =>$categoria,
			'sucursal_id' =>$sucursal,
			'precio' =>$precio,
			'fecha_compra' =>$fechaCompra,
			'usuario_id' => $this->session->idUsuario
			);
			
		$this->Producto_Model->guardarProducto($data);
		
			
	}

	public function actualizar_producto(){
		$id= $_POST['a1'];
        $estatus =$_POST['a2'];
        $comentarios =$_POST['a3'];

			$data=array(
			'estatus_id' =>$estatus,
			'comentarios' =>$comentarios
			);
			
		echo $this->Producto_Model->actualizarProducto($id,$data);
	}

	public function productos(){

		$productos=$this->Producto_Model->allProducto();
		$data= array(
			'productos' =>$productos
		);
		$this->load->view('header_view');
		$this->load->view('productos_view',$data);
		$this->load->view('footer_view');
	
	}

	public function actualizar($id){
	
		$producto = $this->Producto_Model->editarProducto($id);
		$cat_estatus = $this->Estatus_Model->get_estatus();
		$data= array(
			'producto' =>$producto,
			'cat_estatus' =>$cat_estatus,
			'id' => $id
		);

		$this->load->view('header_view');
		$this->load->view('actualizar_view', $data);
		$this->load->view('footer_view');
	}

	public function eliminar($id){
	
		$this->Producto_Model->eliminarProducto($id);
		$this->productos();

	}

	public function reporte(){
		$productos=$this->Producto_Model->allProducto();
		$data= array(
			'productos' =>$productos
		);
		$this->load->view('reporte_view',$data);
	}


}
?>