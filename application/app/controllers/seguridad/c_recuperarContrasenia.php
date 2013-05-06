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
					'email' => $query->email_user,
					'password' => $query->pas_user,
					);
	    						
	    	$this->load->library('email');
			$this->email->from('adm.eventosfia@gmail.com','Team Event System');  
			$this->email->to($data['email']);    
			$this->email->subject('Eventos Fia - USMP - Recuperacion de Contrasenia');  
			$this->email->message("Gracias por utilizar el servicio de recuperacion de contrasenia!
								   Su contrasenia actual es: ".$data['password']);  
			$this->email->send();   
			//echo $this->email->print_debugger();
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
   
}