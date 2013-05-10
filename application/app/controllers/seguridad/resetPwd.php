<?php
error_reporting(E_ALL ^ E_NOTICE);

//LE PUSE ESTE NOMBRE AL CONTROLADOR PARA NO SER MUY EXPLICITO ACERCA DE LOS NOMBRES
//DE NUESTROS CONTROLADORES, YA QUE AL USUARIO LE LLEGA UN LINK CON LA RUTA EXPLICITA HASTA EL METODO.
class resetPwd extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
        $this->load->model('miembros_model');
        $this->randJ = random_string('alnum', 8);
        $this->randP = random_string('alnum', 8);
     }
     
     public function index(){
     	$this->load->view('seguridad/v_resetPwd');	
     }
     
	public function update_pwd(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Confirmar password', 'trim|required|matches[password]');
		
		$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %s caracteres.');
		$this->form_validation->set_message('max_length', 'El campo %s debe contener como máximo %s caracteres.');
 		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
 		$this->form_validation->set_message('matches', 'El campo %s debe coincidir con el campo %s');
 		
		if($this->form_validation->run()==FALSE){
			$this->load->view('seguridad/v_resetPwdForm', $data);
		}else{
			
			$keyJ = $this->input->post('keyJ');
			$keyP = $this->input->post('keyP');
			$newPwd = $this->input->post('password');
				
			
			$this->load->model('miembros_model');
			$check = $this->miembros_model->updatePassword($keyJ,$keyP,$newPwd);
			
			if($check){
				$this->load->view('seguridad/v_resetPwdSucces', $data);
			}else{
				$this->load->view('seguridad/v_resetPwdExpired', $data);
			}
			
		}
		
	}
	
	//METODO QUE VERIFICA EL LINK
	public function validKey($keyJ="",$keyP=""){
		$key=array(
			'keyJ' => $keyJ,
			'keyP' => $keyP
				);
		
		$query = $this->miembros_model->verificarKey($key);
		
		if($query){
			$this->load->view('seguridad/v_resetPwdForm', $key);
		}else{
			$this->load->view('seguridad/v_resetPwdExpired');
		}
	}
	
	//METODO QUE VALIDA LOS DATOS INGRESADOS Y ENVIA EL EMAIL CON EL LINK DE REESTABLECIMIENTO AL USUARIO
	public function validarEmail(){
    	
    	$this->load->library('form_validation');
	            
	    $this->form_validation->set_rules('vemail', 'email', 'required|min_length[6]|max_length[100]|valid_email|callback_comprobar_email_ajax|xss_clean');
	           
	    $this->form_validation->set_message('required', '%s: es requerido');
	    $this->form_validation->set_message('min_length', '%s: debe tener al menos %s carácteres');
	    $this->form_validation->set_message('max_length', '%s: debe tener al menos %s carácteres');
	    $this->form_validation->set_message('valid_email', '%s: debe escribir un email válido');
	 
	    if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('seguridad/v_resetPwd', $data);
	    } else {
	    	$email = $this->input->post('vemail');
	    	$query = $this->miembros_model->verifica_email($email);
	    	
	     	$data=array(
	    			'keyJ' => $this->randJ,
	    			'keyP' => $this->randP,
					'email' => $query->email_user
					);
	
			$mensaje = 'Hola Usuario!
			Esta recibiendo esta notificacion porque usted solicito una
			nueva contrasenia para su cuenta en "FIA - Eventos".
			
			IMPORTANTE:
			Si usted no lo solicito por favor ignore esta notificacion.
			Si persiste la solicitud contacte con La Administracion del Sitio.
			
			------------------------------------------------------
			*Porfavor copie y pegue este enlace en su navegador para reestablecer su contrasenia:
			
			'.base_url().'seguridad/resetPwd/validKey/'.$data['keyJ'].'/'.$data['keyP'];
					
	    	$this->load->library('email');
			$this->email->from('adm.eventosfia@gmail.com','Equipo de FIA Eventos');  
			$this->email->to($data['email']);    
			$this->email->subject('Eventos Fia - USMP - Recuperacion de Contrasenia');  
			$this->email->message($mensaje);
			$this->email->send();   
			$this->miembros_model->insertKey($data);
	    	$this->load->view('seguridad/v_resetPwdSend');
	    }

    	
    }
    
	//VALIDAR EL EMAIL CON AJAX
    public function comprobar_email_ajax() {
        $email = $this->input->post('vemail');
        $comprobar_email = $this->miembros_model->verifica_email($email);
        if ($comprobar_email) {
        	echo '<div style="display:none">1</div>';
            return TRUE;
            } else {
            $this->form_validation->set_message('comprobar_email_ajax', 'El %s: ingresado no existe en la base de datos');
            return FALSE;
        }
    }
    
      
}