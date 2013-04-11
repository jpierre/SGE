<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mantener extends CI_Controller {

	
    
	public function index(){
		
	}
	
	function vistaListarPonencias(){
		
		$this->load->model('mantener/m_Ponencia','ponencia');
		
		$query = $this->ponencia->cargarPonencias();
		
		
			$data = array(
			'codPonencia' => $query->id_pon,
			'nomPonencia' => $query->nom_pon,
			'expositor' => $query->cod_exp_pon,
			'ambiente' => $query->id_amb_pon,
			'estado' => $query->est_pon,
			);
		$this->session->set_userdata($data);
		
		$info['main_content'] = 'home_admin/listaPonencias';
		$this->load->view('home_admin/home', $info);
		
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