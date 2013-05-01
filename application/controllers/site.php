<?php

	class Site extends CI_Controller{
	
	//ESTE CONTROLADOR VERIFICA QUE EXISTA UNA SESSION PARA ENTRAR A CIERTOS MODULOS
	function __construct(){
		parent::__construct();
		$this->is_logged_in();
	}
	
	function members_area(){
		$data['main_content'] = 'home/content';
		$this->load->view('home/home', $data);
	}
		
	function ver_perfil(){
		$this->load->view('home/ver_perfil');	
	}
	
	function generar_QR(){
		$this->load->view('home/generar_QR');	
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