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
		
	}
	function login(){
		$data['mensaje']="";
		$this->load->view('inicio/login',$data);
	}
	function prueba(){
		$this->load->view('home/registrar_Asistencia');
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
	function generar_horario(){
		//$data['main_content'] = 'inscripcion/generar_QR';
		//$this->load->view('home/home', $data);
		redirect('site/generar_cronograma');
	}
	function emitirCertificado(){
		redirect('site/emitirCertificado');
	}
	function registrarAsistencia(){
		redirect('site/registrarAsistencia');
	}
	function consultarAsistencia(){
		redirect('site/consultarAsistencia');
	}
}
	
?>