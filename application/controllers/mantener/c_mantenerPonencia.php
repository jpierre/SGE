<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mantenerPonencia extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	    
	public function index(){

		$this->load->model('mantener/m_ponencia','m_ponencia');
		$ponencias = $this->m_ponencia->getData();
		 
		$data['ponencias'] = $ponencias;
				  
		//SETEA LOS VALORES NUMERICOS A TEXTOS DE LA BD PARA LAS VISTAS  
		for($i=0; $i<count($ponencias); $i++){
			//PARA EL AMBIENTE
			$ambiente[$i] = $ponencias[$i]->id_amb_pon;
			switch ($ambiente[$i]){
		 		case 1: $ambiente[$i] = "Aula"; break;
		 		case 2: $ambiente[$i] = "Laboratorio"; break;
		 		case 3: $ambiente[$i] = "Coliseo"; break;
		 		default: $ambiente[$i] = "-";
		 	}
		 	
		 	//PARA EL ESTADO
			$estado[$i] = $ponencias[$i]->est_pon;
			switch ($estado[$i]){
		 		case 1: $estado[$i] = "OK"; break;
		 		case 2: $estado[$i] = "Cancelada"; break;
		 		default: $estado[$i] = "Ninguno";
		 	}
		}
		
		$data['estado'] = $estado;
		$data['ambiente'] = $ambiente;
		$data['main_content'] = 'mantener/v_mantenerPonencia';
		$this->load->view('home_admin/home', $data);
		 	
	}
	
	
	public function mantenerPonencia() { 
    
    	$accion = $this->input->post('accion');
       
        if ($accion == "Agregar") { 

        	// CONTROLADOR PARA AGREGAR UNA PONENCIA
       	    $data['main_content'] = 'mantener/v_agregarPonencia';
			$this->load->view('home_admin/home', $data);
       	    
        } else if($accion == "Modificar"){
        	
        	//CONTROLADOR PARA MODIFICAR UNA PONENCIA
        	$data['main_content'] = 'mantener/v_modificarPonencia';
			$this->load->view('home_admin/home', $data);
            
        }else if($accion == "Eliminar"){
        	
        	//CONTROLADOR PARA ELIMINAR UNA PONENCIA
           	$data['main_content'] = 'mantener/v_eliminarPonencia';
			$this->load->view('home_admin/home', $data);
            
        }
        
    }
    
    
    
 }