<?php

class Inscribir extends CI_Controller{
	function index($idEvento=""){
		
		$data['id_evento'] = $idEvento;
		$this->load->model('inscripcion/Inscripcion_model', 'registro');
		
		$resultConsulta=$this->registro->get_consulta_registro($this->session->userdata('idDNI'),$idEvento);
		
		if(!$resultConsulta){
		
			$result=$this->registro->get_estado_user($this->session->userdata('idDNI'));			
			if(strcasecmp($result->tipo, "estudiante")==0 || strcasecmp($result->tipo, "egresado")==0){
				$data['main_content'] = 'inscripcion/inscribirse_form';
				$this->load->view('home/home', $data);
			}else{
				$data['main_content'] = 'inscripcion/elegir';
				$this->load->view('home/home', $data);
			}
		}else{
				$data['main_content'] = 'inscripcion/ya_registrado';
				$this->load->view('home/home	', $data);
		}
		
	}
	
	
	function mostrarlo(){
		$data['main_content'] = 'inscripcion/mostrardatos_form';
		$this->load->view('includes_sistema/template', $data);
	}
	
	function registar_inscrip(){
		//recogemos los datos obtenidos por POST
		$data['id_participante'] = $this->session->userdata('idDNI');
		$data['nombre'] = $this->session->userdata('nombres');
		$data['apePat'] = $this->session->userdata('apePat');
		$data['apeMat'] = $this->session->userdata('apeMat');
		$data['id_evento'] = $this->input->post('id_evento');
		$data['nro_inscrip'] = rand(1000000,9999999);
		$data['estado'] = $this->session->userdata('estado');
		$data['fecha_inscrip'] =  date("Y-m-d");
		$data['tipo_pago'] = $this->input->post('tipo_pago');
		$data['monto'] =$this->input->post('monto');
		$data['cant_cuotas'] =$this->input->post('cant_cuotas');
		$data['banco'] ="Interbank/credito";
		
 		//llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.
 		$this->load->model('inscripcion/Inscripcion_model', 'registro');
 		$result=$this->registro->registrar_inscripcion_participante($data);
		
		if($result==true){
			$data['main_content']='inscripcion/inscripcion_succesful';
			$this->load->view('includes_sistema/template', $data);
		}
	}

	function registro_externo($id_evento=0, $eleccion=0){

		if($eleccion==1){
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirse_form';
			$this->load->view('includes_sistema/template', $data);
		
		}else{
			$data['id_evento'] = $id_evento;
			$data['main_content']='inscripcion/inscribirParticipantes_form';
			$this->load->view('includes_sistema/template', $data);
		}

	}

}



?>