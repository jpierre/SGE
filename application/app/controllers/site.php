<?php

	class Site extends CI_Controller{
	
	//ESTE CONTROLADOR VERIFICA QUE EXISTA UNA SESSION PARA ENTRAR A CIERTOS MODULOS
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	
	function members_area(){
		
		$this->load->model('mantener/m_evento','m_evento');
		$eventos = $this->m_evento->getData();
		$data['eventos'] = $eventos;
		$data['main_content'] = 'home/content';
			
		$this->load->view('home/home', $data);
		
	}
		
	function ver_perfil(){
		$this->load->model('mantener/m_evento','m_evento');
		$eventos = $this->m_evento->getData();
		$data['eventos'] = $eventos;
		$this->load->view('home/ver_perfil', $data);	
	}
	
	function generar_QR(){
		redirect('inscripcion/c_inscripcion/generarQR');	
	}
	
	function emitirCertificado(){
		redirect('administracion/c_administracion/emitirCertificado');	
	}
	
	function generar_cronograma(){
		redirect('inscripcion/c_inscripcion/generar_cronograma');
	}

	function is_logged_in(){
		$is_logged_in=$this->session->userdata('is_logged_in');
		if(!isset($is_logged_in) || $is_logged_in != true){
			echo 'tu no tienes permisos para entrar aca'.' <a href="../login">Login</a>';	
			die();
		}
	}

	}
	
?>