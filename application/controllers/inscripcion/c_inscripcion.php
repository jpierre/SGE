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
				$data['main_content'] = 'inscripcion/inscribirse_form';
				$this->load->view('home/home', $data);
			}else{
				$data['main_content'] = 'inscripcion/elegir';
				$this->load->view('home/home', $data);
			}
		}else{
				$data['main_content'] = 'inscripcion/ya_registrado';
				$this->load->view('home/home', $data);
		}
		
	}
	
	
	function mostrarlo(){
		$data['main_content'] = 'inscripcion/mostrardatos_form';
		$this->load->view('home_admin/home', $data);
	}
	
	function registar_inscrip(){
		//recogemos los datos obtenidos por POST
		
		//$data['nombre'] = $this->session->userdata('nombres');
		//$data['apePat'] = $this->session->userdata('apePat');
		//$data['apeMat'] = $this->session->userdata('apeMat');
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
			$data['main_content']='inscripcion/inscripcion_succesful';
			$this->load->view('home/home', $data);
		}
	}

	function registro_externo($id_evento=0, $eleccion=0){

		if($eleccion==1){
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirse_form';
			$this->load->view('home/home', $data);
		
		}else{
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirParticipantes_form';
			$this->load->view('home/home', $data);
		}

	}
	
	//funcion para que el representante pueda inscribir varios participantes externos
	function inscrip_n_part_externos(){
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
			$data['main_content']='inscripcion/inscripcion_succesful_varios';
			$this->load->view('home/home', $data);
		}else{
			$data['main_content']='inscripcion/inscripcion_succesful_varios_error';
			$this->load->view('home/home', $data);
		}
		
	}
			

}



?>