<?php
error_reporting(E_ALL ^ E_NOTICE);

class Login extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
        $this->rand = random_string('alnum', 6);
        $this->load->model('m_captcha');
        $this->load->model('miembros_model');
     }
    
     function index(){
		$this->load->view('inicio/index');
	}

	function validate_credentials(){

		$data['mensaje']='s';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Usuario', 'trim|required');
		$this->form_validation->set_rules('password','Clave', 'trim|required');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
		
		if($this->form_validation->run()==FALSE){
			//$data['main_content'] = 'inicio2/login';
			//$this->load->view('inicio/index', $data);
			$this->load->view('inicio/login', $data);
		}else{

			$this->load->model('miembros_model');

			$query1 = $this->miembros_model->validate_sicat();
		
			if($query1 == false){

				$query = $this->miembros_model->validate();
		
				if($query != false){
					//Datos sacados de la tabla usuario y cargados a la sesion
					$data=array(
						'user' => $query->usuario_user,
						'nombres' => $query->nom_user,
						'apePat' => $query->ape_pat_user,
						'apeMat' => $query->ape_mat_user,
						'idDNI' => $query->num_doc_user,
						'estado' => $query->tip_usu,
						'escuela' => $query->esc_estud,
						'celular' => $query->telf_cel,
						'telefono' => $query->telf_fijo,
						'correo' => $query->email_user,
						'direccion' => $query->dir_user,
						'cod_user' => $query->cod_user,
						'is_logged_in' => true
		
					);	
		
					$this->session->set_userdata($data);

					if($query->tip_usu=='0'){
						$data['main_content'] = 'home_admin/content';
						$this->load->view('home_admin/home', $data);

					}else if($query->tip_usu=='9'){
						//if temporal para admin version 2
						$data['main_content'] = 'home_admin/content';
						$this->load->view('home_admin/index', $data);
					}else{
						redirect('site/members_area');
					}
				}else{
				$data['mensaje']='Usuario o password incorrectos';
				//$data['main_content'] = 'login_form';
				$this->load->view('inicio/login', $data);
				//$this->index();
				}
			}else{
				//datos sacados de la tabla sicat y cargados a la sesion para luego grabarlos en la tabla sicat
				$data=array(
					'direccion' => $query1->direccion,
					'nombres' => $query1->nombres,
					'apePat' => $query1->apePat,
					'apeMat' => $query1->apeMat,
					'idDNI' => $query1->dni,
					'estado' => $query1->estado,
					'telefono' => $query1->telf_fijo,
					'celular' => $query1->telf_celular,
					'user' => $query1->usuario,
					'password' => $query1->password,
					'correo' => $query1->correo,
					'escuela' => $query1->escuela,
					'codigo' => $query1->codigo_interno,
					'is_logged_in' => true
		
				);	
				$this->session->set_userdata($data);
			
				$resultado=$this->miembros_model->get_usuario();
			
				if($resultado==false){
				
					$this->miembros_model->registrar_interno();
				}			
					
				redirect('site/members_area');
			}
		}
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
	
}

?>