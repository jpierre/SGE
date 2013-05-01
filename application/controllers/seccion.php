<?php
class Seccion extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	function inicio(){
		$this->load->view('inicio/index');
	}
	
	function eventos(){
		$this->load->view('inicio/eventos');
	}
	
	function nuestraFacultad(){
		$this->load->view('inicio/nuestraFacultad');
	}
	
	function contactanos(){
		$this->load->view('inicio/contactanos');
	}
	
	function test(){
		$this->load->view('test');
	}

		
}
	
?>