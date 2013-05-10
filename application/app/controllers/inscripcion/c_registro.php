<?php
error_reporting(E_ALL ^ E_NOTICE);


class C_registro extends CI_Controller{
	
	
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
		$this->form_validation->set_rules('captcha', 'Captcha', 'callback_validate_captcha');
        		
		$this->form_validation->set_message('min_length', 'El campo %s debe contener como mínimo %s caracteres.');
		$this->form_validation->set_message('max_length', 'El campo %s debe contener como máximo %s caracteres.');
 		$this->form_validation->set_message('required', 'El campo %s es obligatorio.');
 		$this->form_validation->set_message('valid_email', 'El campo correo electr&oacute;nico no es una direcci&oacute;n de e mail valida.');
 		$this->form_validation->set_message('captcha', 'Error al introducir los caracteres de la imagen');
 		$this->form_validation->set_message('exact_length', 'El campo %s debe contener %s dígitos obligatorios.');
 		//$this->form_validation->set_message('username_check,','El nombre de usuario ya está siendo utilizado.');
 		
 		
 			
				
		if($this->form_validation->run()==FALSE){
			$data['captcha'] = $this->captcha();
			$this->session->set_userdata('captcha', $this->rand);
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
				
				$expiration = time()-600; // Límite de 10 minutos
	            $ip = $this->input->ip_address();//ip del usuario
	            $captcha = $this->input->post('captcha');//captcha introducido por el usuario
	 
	            //eliminamos los captcha con más de 2 minutos de vida
	            $this->m_captcha->remove_old_captcha($expiration);
	 
	            //comprobamos si es correcta la imagen introducida
	            $check = $this->m_captcha->check($ip,$expiration,$captcha);
	 
	            /*
	            |si el número de filas devuelto por la consulta es igual a 1
	            |es decir, si el captcha ingresado en el campo de texto es igual
	            |al que hay en la base de datos, junto con la ip del usuario
	            |entonces dejamos continuar porque todo es correcto
	            */
	            if($check == 1){
	                $data['main_content']='registro/signup_succesful';
					$this->load->view('inicio/inicio', $data);
				}
					
			}else{
				$data['captcha'] = $this->captcha();
				$this->session->set_userdata('captcha', $this->rand);
				$data['main_content'] = 'registro/signup_form';
				$this->load->view('inicio/inicio', $data);
			}
			
		}
	}
	
	
		
	//CAPTCHAAAAAAAAAAAAAAAAAAAAA
	public function captcha()
    {
        //configuramos el captcha
        $conf_captcha = array(
            'word'   => $this->rand,
            'img_path' => './captcha/',
            'img_url' =>  base_url().'captcha/',
            //fuente utilizada por mi, poner la que tengáis
            'font_path' => './fonts/AlfaSlabOne-Regular.ttf',
            'img_width' => '250',
            'img_height' => '60',
            //decimos que pasados 10 minutos elimine todas las imágenes
            //que sobrepasen ese tiempo
            'expiration' => 600
        );
 
        //guardamos la info del captcha en $cap
        $cap = create_captcha($conf_captcha);
 
        //pasamos la info del captcha al modelo para
        //insertarlo en la base de datos
        $this->m_captcha->insert_captcha($cap);
 
        //devolvemos el captcha para utilizarlo en la vista
        return $cap;
    }
    
	public function validate_captcha()
    {
 
        if($this->input->post('captcha') != $this->session->userdata('captcha'))
        {
            $this->form_validation->set_message('validate_captcha', 'Error');
            return false;
        }else{
            return true;
        }
 
    }
     
}