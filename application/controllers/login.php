<?php
error_reporting(E_ALL ^ E_NOTICE);

class Login extends CI_Controller{
	function index(){
		//$data['main_content']= 'login_form';
		//$this->load->view('includes/template', $data);
		$this->load->view('inicio/index');
		//$this->load->view('login_form');
	}
	
	function validate_credentials(){

	$this->load->library('form_validation');
		$this->form_validation->set_rules('username','Usuario', 'trim|required');
		$this->form_validation->set_rules('password','Clave', 'trim|required');

		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
		
		if($this->form_validation->run()==FALSE){
			$data['main_content'] = 'login_form';
			//$this->load->view('inicio/index', $data);
			$this->load->view('inicio/inicio2', $data);
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

					}else{
						redirect('site/members_area');
					}
				}else{
				$data['mensaje']='Usuario o password incorrectos';
				$data['main_content'] = 'login_form';
				$this->load->view('inicio/inicio2', $data);
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
	
	/*Te lleva al formulario de registro*/
	function signup(){
		$data['main_content'] = 'registro/signup_form';
		$this->load->view('inicio/inicio', $data);
	}
	
	/*Te lleva a la pagina eventos*/
	function eventos(){
		$this->load->view('inicio/eventos');
	}

	function create_member(){
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('dni','DNI', 'trim|required|exact_length[8]');
		$this->form_validation->set_rules('nombres','Nombres', 'trim|required');
		$this->form_validation->set_rules('ape_pat','Apellido Paterno', 'trim|required');
		$this->form_validation->set_rules('ape_mat','Apellido Materno', 'trim|required');
		$this->form_validation->set_rules('fijo',' Tel. Fijo', 'trim|required|min_length[7]|max_length[9]');
		$this->form_validation->set_rules('celular','Celular', 'trim|required|min_length[7]|max_length[9]');
		$this->form_validation->set_rules('email_adress','Correo electronico', 'trim|required|valid_email');
		$this->form_validation->set_rules('direccion','Direccion', 'trim|required');
		
		$this->form_validation->set_rules('username','Username', 'trim|required|min_length[4]|callback_username_check');
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Confirmar password', 'trim|required|matches[password]');
		
		//$this->form_validation->set_rules('captcha','Caracteres', 'trim|required|callback_captcha');
		
		$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %s caracteres.');
		$this->form_validation->set_message('max_length', 'El campo %s debe contener como máximo %s caracteres.');
 		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
 		$this->form_validation->set_message('valid_email', 'El campo correo electr&oacute;nico no es una direcci&oacute;n de e mail valida.');
 		$this->form_validation->set_message('captcha', 'Error al introducir los caracteres de la imagen');
 		$this->form_validation->set_message('exact_length', 'El campo %s debe contener %s dígitos obligatorios.');
 		//$this->form_validation->set_message('username_check,','El nombre de usuario ya está siendo utilizado.');
 		
 		
 			
				
		if($this->form_validation->run()==FALSE){
			$data['main_content'] = 'registro/signup_form';
			$this->load->view('inicio/inicio', $data);
		}else{
			$this->load->model('miembros_model');
			
			if($this->input->post('empresa')!=""||$this->input->post('ruc')!=""|| $this->input->post('cargo')!=""){
				$data=array(
				'nom_emp' => $this->input->post('empresa'),
				'ruc' => $this->input->post('ruc'),
				'sec_ind_emp' => $this->input->post('sector_ind')
				
		
			);
				
				$query=$this->miembros_model->create_member($data);
				
			}else{
				
				$query=$this->miembros_model->create_member(NULL);
			}
				
			if($query){
				$data['main_content']='registro/signup_succesful';
				$this->load->view('inicio/inicio', $data);
				
			}else{
				$data['main_content'] = 'registro/signup_form';
				$this->load->view('inicio/inicio', $data);
			}
			
		}
	}
	
	//FUNCION QUE DEVUELVE EL CAPTCHA
	function captcha($verificar = false){
	        if ($verificar === false) {
	            $this->load->library('captcha');
	            $captcha = new Captcha();
	            $captcha->createCaptcha();
	        } elseif ($verificar == $_SESSION['captcha']) {
	            return true;
	        } else {
	            return false;
	        }
    	}
	
    function ver_perfil(){
    	redirect('site/ver_perfil');
    }
    	
    	
	
	
	
	function logout()
	{
		$this->session->sess_destroy();
		$this->index();
	}
}

?>