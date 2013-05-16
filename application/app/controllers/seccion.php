<?php
class Seccion extends CI_Controller{
	
	function __construct(){
		parent::__construct();
	}
	// REDIRECCIONES DE MENU
	public function index(){
		$this->load->view('inicio/index');
	}
	function inicio(){
		$this->load->view('inicio/index');
	}
	function nuestraFacultad(){
		$this->load->view('inicio/nuestraFacultad');
	}
	function eventos(){
		$this->load->view('inicio/eventos');
	}
	function registro(){
		//modules::run('inscripcion/c_registro');
		redirect('inscripcion/c_registro');
	}
	function contacto(){
		$this->load->view('inicio/contacto');
	}
	function login(){
		$data['mensaje']="";
		$this->load->view('inicio/login',$data);
	}
	
	//REDIRECCIONES DENTRO DEL SISTEMA
 	function ver_perfil(){
    	redirect('site/ver_perfil');
    }
    function generar_QR(){
		//$data['main_content'] = 'inscripcion/generar_QR';
		//$this->load->view('home/home', $data);
		redirect('site/generar_QR');
	}
		
}
	
?>