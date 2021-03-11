<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Navegacion extends CI_Controller {
    function __construct(){
		parent::__construct();
	}
	
	public function index()
	{
		$this->load->view('header_view');
		$this->load->view('acceso_view');
		$this->load->view('footer_view');	
	}
}
?>