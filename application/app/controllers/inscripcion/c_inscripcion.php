<?php

class C_inscripcion extends CI_Controller{
	//var $contador=0;
	
	function index($idEvento=""){
		
		$data['id_evento'] = $idEvento;
		$this->load->model('inscripcion/m_inscripcion', 'registro');
		
		$resultConsulta=$this->registro->get_consulta_registro($this->session->userdata('idDNI'),$idEvento);
		
		
		if(!$resultConsulta){
		
			$result=$this->registro->get_estado_user($this->session->userdata('idDNI'));			
			if(strcasecmp($result->tip_usu, '1')==0 || strcasecmp($result->tip_usu, '2')==0 || strcasecmp($result->tip_usu, '3')==0){
				
				$this->load->model('administracion/evento_model','evento');
				$data['evento']=$this->evento->getEvento($idEvento);
				$data['main_content'] = 'inscripcion/inscribirse_form';
				$this->load->model('mantener/m_evento','m_evento');
				$data['eventos'] = $this->m_evento->getData();
				$this->load->view('home/home', $data);
			}else{
				$this->load->model('mantener/m_evento','m_evento');
				$data['eventos'] = $this->m_evento->getData();
				$data['main_content'] = 'inscripcion/elegir';
				$this->load->view('home/home', $data);
			}
		}else{
				$this->load->model('mantener/m_evento','m_evento');
				$data['eventos'] = $this->m_evento->getData();
				$data['main_content'] = 'inscripcion/ya_registrado';
				$this->load->view('home/home', $data);
		}
		
	}
	
	
	function mostrarlo(){
		$data['main_content'] = 'inscripcion/mostrardatos_form';
		$this->load->view('home_admin/home', $data);
	}
	
	function registar_inscrip(){
		
		$data['id_evento'] = $this->input->post('id_evento');
		$data['nro_inscrip'] = rand(1000000,99999999);
		$data['estado_recibo'] = 'pendiente';
		//$data['fecha_inscrip'] =  date("Y-m-d");
		$data['tipo_pago'] = $this->input->post('tipo_pago');
		$data['monto'] =$this->input->post('monto');
		
		if($this->input->post('cant_cuotas')!=""){
			$data['nro_cuotas'] = $this->input->post('cant_cuotas');
		}else{
			$data['nro_cuotas'] = '1';
		}
		
 		//llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.
 		$this->load->model('inscripcion/m_inscripcion', 'registro');
 		$result=$this->registro->registrar_inscripcion_participante($data);
		
		if($result==true){
			$this->load->model('administracion/evento_model','evento');
			$evento=$this->evento->getEvento($data['id_evento']);
			$nom_eve=$evento->nom_eve;
			$this->enviarEmaiInscripcion($nom_eve);
			$this->load->model('mantener/m_evento','m_evento');
			$data['eventos'] = $this->m_evento->getData();
			$data['main_content']='inscripcion/inscripcion_succesful';
			$this->load->view('home/home', $data);
		}
	}

	function registro_externo($id_evento=0, $eleccion=0){

		if($eleccion==1){
			$this->load->model('mantener/m_evento','m_evento');
			$data['eventos'] = $this->m_evento->getData();
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirse_form';
			$this->load->view('home/home', $data);
		
		}else{
			$this->load->model('mantener/m_evento','m_evento');
			$data['eventos'] = $this->m_evento->getData();
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirParticipantes_form';
			$this->load->view('home/home', $data);
		}

	} 
	
	//funcion para que el representante pueda inscribir varios participantes externos
	public function inscrip_n_part_externos(){
		for($i=1;$i<3;$i++){
			//datos del participante
				
				$data['tipo_doc'.$i]= $this->input->post('tipo_doc'.$i);
				$data['num_doc'.$i]= $this->input->post('num_doc'.$i);
				$data['nom'.$i]= $this->input->post('nom'.$i);
				$data['apePat'.$i]= $this->input->post('apePat'.$i);
				$data['apeMat'.$i]= $this->input->post('apeMat'.$i);
				
		}
		
		
		$this->load->model('inscripcion/m_inscripcion', 'registro');
 		$result=$this->registro->reg_n_participantes($data);
		
		$datos= array(
				
				'id_evento' =>$this->input->post('id_evento'),
				'nro_inscrip' =>rand(1000000,99999999),
				'estado_recibo' =>'pendiente',
				'tipo_pago' =>$this->input->post('tipo_pago'),
				'nro_cuotas' =>'1',
				'monto' =>$result * 250
				
			);
			
		$resultado=$this->registro->registrar_inscripcion_participante($datos);
		
		
		if($result!=false){
			$this->load->model('mantener/m_evento','m_evento');
			$data['eventos'] = $this->m_evento->getData();
			$data['main_content']='inscripcion/inscripcion_succesful_varios';
			$this->load->view('home/home', $data);
		}else{
			$this->load->model('mantener/m_evento','m_evento');
			$data['eventos'] = $this->m_evento->getData();
			$data['main_content']='inscripcion/inscripcion_succesful_varios_error';
			$this->load->view('home/home', $data);
		}
		
	}
	
	public function generarQR($data=""){
				
		$this->load->model('inscripcion/m_inscripcion', 'registro');
 		$result=$this->registro->get_inscripcion($this->session->userdata('idDNI'));
		
 		$this->load->model('mantener/m_evento','m_evento');
		$eventos = $this->m_evento->getData();
		$data['eventos'] = $eventos;
		
		if($result != false){
			$this->load->view('home/generar_QR', $data);
		}else{
			$this->load->view('home/no_inscrito', $data);
		}
		
		
	}
	
	
	public function generarCronograma(){
		$this->load->model('mantener/m_evento', 'evento');
 		$result=$this->evento->getData();
		$data['eventos'] = $result;
		
		$this->load->view('home/generacionCronograma', $data);
				
	}
	
	public function mostrarCronograma(){
	$this->load->model('administracion/ponencia_model', 'ponencia');
 	$result=$this->ponencia->getPonencia_Evento($this->input->post('evento'));
	
		if($result != false){
			$data['ponencias'] = $result;
			$this->load->view('home/cronograma', $data);
		}
	}
	
	//ENVIA MENSAJE AL REGISTRARSE A UN EVENTO
	public function enviarEmaiInscripcion($nom_eve){
		
		$nombre = $this->session->userdata('nombres');
	    $apepat = $this->session->userdata('apePat');
	    $apemat = $this->session->userdata('apePat');
	    
	    $mensaje = 'Ud. se han inscrito al Evento: '.$nom_eve.'!
		No olvide generar su Codigo QR para poder registrar su asistencia
		a cada una de las ponencias.
					
		Gracias por inscribirse!
		------------------------------------------------------
		*Visite nuestra web para conocer los horarios de todas las ponencias
		del evento 
					
		'.base_url().'seccion/login';
	            	
	    $this->load->library('email');
		$this->email->from('adm.eventosfia@gmail.com','Equipo de FIA Eventos');  
		$this->email->to($this->session->userdata('correo'));    
		$this->email->subject('Inscripcion a Evento - FIA - USMP');  
		$this->email->message($mensaje);
		$this->email->send();
	}

}

?>