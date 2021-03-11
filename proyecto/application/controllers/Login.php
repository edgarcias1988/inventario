<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('Login_Model');
	}
	
	public function index()
	{
		$this->load->view('login_view');
		$this->load->view('footer_view');
	}

	public function autenticar()
	{
		$usuario= $_POST['a1'];
        $password =$_POST['a2'];
		echo $this->Login_Model->autenticar($usuario, $password);
	}

	public function acceso()
	{
		$this->load->view('header_view');
		$this->load->view('acceso_view');
		$this->load->view('footer_view');	
		
		
	}

	public function salir()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}
?>