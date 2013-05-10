<?php
error_reporting(E_ALL ^ E_NOTICE);

class c_recuperarContrasenia extends CI_Controller{
	
	public function __construct(){
        parent::__construct();
        $this->load->model('miembros_model');
     }
     
	//RECUPERAR CONTRASEÑA
    function recuperarContrasenia(){
		$this->load->view('inicio/v_recuperarContrasenia');
	}
    
	public function update_pwd(){
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('password','Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('password2','Confirmar password', 'trim|required|matches[password]');
		
		$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %s caracteres.');
		$this->form_validation->set_message('max_length', 'El campo %s debe contener como máximo %s caracteres.');
 		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
 		
		if($this->form_validation->run()==FALSE){
			$this->load->view('seguridad/v_recuperarContraseniaOK', $data);
		}else{
			$this->load->model('miembros_model');
			$result=$this->miembros_model->updatePassword($data);
			
			if($result){
				echo "sin errores";
			}else{
				echo "error";
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
			$this->load->view('seguridad/v_recuperarContraseniaOK', $key);
		}else{
			$this->load->view('seguridad/v_recuperarContrasenia');
		}
	}
	
	//METODO QUE VALIDA LOS DATOS INGRESADOS Y ENVIA EL LINK DE REESTABLECIMIENTO AL USUARIO
	public function validarEmail(){
    	
    	$this->load->library('form_validation');
	            
	    $this->form_validation->set_rules('vemail', 'email', 'required|min_length[6]|max_length[100]|valid_email|callback_comprobar_email_ajax|xss_clean');
	           
	    $this->form_validation->set_message('required', '%s: es requerido');
	    $this->form_validation->set_message('min_length', '%s: debe tener al menos %s carácteres');
	    $this->form_validation->set_message('max_length', '%s: debe tener al menos %s carácteres');
	    $this->form_validation->set_message('valid_email', '%s: debe escribir un email válido');
	 
	    if ($this->form_validation->run() == FALSE) {
	    	$this->load->view('inicio/v_recuperarContrasenia', $data);
	    } else {
	    	$email = $this->input->post('vemail');
	    	$query = $this->miembros_model->verifica_email($email);
	    	
	     	$data=array(
	    			'keyJ' => $this->randomText(),
	    			'keyP' => $this->randomText(),
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
			
			http://localhost/sge/seguridad/c_recuperarContrasenia/validKey/'.$data['keyJ'].'/'.$data['keyP'];
					
	    	$this->load->library('email');
			$this->email->from('adm.eventosfia@gmail.com','Equipo de FIA Eventos');  
			$this->email->to($data['email']);    
			$this->email->subject('Eventos Fia - USMP - Recuperacion de Contrasenia');  
			/*$this->email->message("Gracias por utilizar el servicio de recuperacion de contrasenia!
								   Su contrasenia actual es: ".$data['password']);*/    
			$this->email->message($mensaje);
			$this->email->send();   
			//echo $this->email->print_debugger();
			$this->miembros_model->insertKey($data);
	    	$this->load->view('inicio/v_recuperarContraseniaOK');
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
    
    
    //FUNCION PARA CREAR UNA CLAVE ALEATORIA
	function randomText() {
    $pattern = "123456789PIUYTREWQASDFGHJKLMNBVCXZ123456789PLMK1IJNBHUYGVC123456789FTRDXZSEWAQWSDERFTGYHUJ123569876543ERDFREDESWQASWQASDGHGTY";
    for($i=0;$i<9;$i++) {
      $key .= $pattern{rand(0,35)};
    }
    return $key;
}
   
}