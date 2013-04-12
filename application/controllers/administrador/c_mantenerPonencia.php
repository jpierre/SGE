<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mantenerPonencia extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	    
	public function index(){

		$this->load->model('mantener/m_ponencia','m_ponencia');
		//Obtener datos de la tabla 'contacto'
		 $ponencias = $this->m_ponencia->getData(); //llamamos a la función getData() del modelo creado anteriormente.
		 
		 $data['ponencias'] = $ponencias;
		 
		 $data['main_content'] = 'home_admin/listaPonencias';
		 $this->load->view('home_admin/home', $data); //llamada a la vista, que crearemos posteriormente
		 	
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