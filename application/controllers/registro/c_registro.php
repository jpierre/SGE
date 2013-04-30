<?php
error_reporting(E_ALL ^ E_NOTICE);

//ESTE CONTROLADOR AUN NO FUNCIONA
//ESTE CONTROLADOR AUN NO FUNCIONA
//ESTE CONTROLADOR AUN NO FUNCIONA, NADA LO UTILIZA AUN

class Login extends CI_Controller{
	
	
	public function __construct(){
        parent::__construct();
        //creamos un random alfanumerico de longitud 6
        //para nuestro captcha y sesión captcha
        $this->rand = random_string('alnum', 6);
        $this->load->model('m_captcha');
        $this->load->model('miembros_model');
     }
     
     public function index(){
     	$data['captcha'] = $this->captcha();
		$this->session->set_userdata('captcha', $this->rand);
		$data['main_content'] = 'registro/signup_form';
		$this->load->view('inicio/inicio', $data);
     }

}