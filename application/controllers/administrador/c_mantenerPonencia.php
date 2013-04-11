<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_mantenerPonencia extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('grocery_crud');
	}
    
	public function index(){
		/*
     * Mandamos todo lo que llegue a la funcion
     * administracion().
     **/
		redirect('administrador/c_mantenerPonencia/administracion');
	}
	
	function administracion()
  	{
	    try{
	
	    /* Creamos el objeto */
	    $crud = new grocery_CRUD();
	
	    /* Seleccionamos el tema */
	    $crud->set_theme('flexigrid');
	
	    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
	    $crud->set_table('ponencia');
	
	    /* Le asignamos un nombre */
	    $crud->set_subject('Ponencias');
	
	    /* Asignamos el idioma español */
	    $crud->set_language('spanish');
	
	    /* Aqui le decimos a grocery que estos campos son obligatorios */
	    $crud->required_fields(
	      'nom_pon',
	      'tipo_pon',
	      'est_pon',
	      'id_amb_pon'
	     );
	
	    /* Aqui le indicamos que campos deseamos mostrar */
	    $crud->columns(
	      'nom_pon',
	      'tipo_pon',
	      'est_pon',
	      'id_amb_pon'
	     );
	
	    /* Generamos la tabla */
	    $output = $crud->render();
	
	    /* La cargamos en la vista situada en
	    /applications/views/productos/administracion.php */
	    //$output['main_content'] = 'home_admin/mantenerPonencia';
	    $this->load->view('home_admin/mantenerPonencia', $output);
	    
	    /*$data['main_content'] = 'home_admin/mantenerPonencia';
		$this->load->view('home_admin/home', $data);*/
	
	    }catch(Exception $e){
	      /* Si algo sale mal cachamos el error y lo mostramos */
	      show_error($e->getMessage().' --- '.$e->getTraceAsString());
	    }
  }
	
	/*function vistaListarPonencias(){
		
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
		
	} */ 
    
	
	
	
    /*public function mantenerPonencia() { 
    
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
        
    }*/
    
    
    
 }