<?php
class Seccion extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->load->view('inicio/index');
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

	function registro(){
		//modules::run('inscripcion/c_registro');
		redirect('inscripcion/c_registro');
	}
	
 	function ver_perfil(){
    	redirect('site/ver_perfil');
    }
        	
	function generar_QR(){
		//$data['main_content'] = 'inscripcion/generar_QR';
		//$this->load->view('home/home', $data);
		redirect('site/generar_QR');
	}
	
	function inicio2(){
		$this->load->view('inicio2/index');
	}
	
	function nuestraFacultad2(){
		$this->load->view('inicio2/nuestraFacultad');
	}
	function eventos2(){
		$this->load->view('inicio2/eventos');
	}
	function contacto(){
		$this->load->view('inicio2/contacto');
	}
	function login(){
		$this->load->view('inicio2/login');
	}
	function registro2(){
		$this->load->view('inicio2/registrate');
	}
	
		
}
	
?>