<?php
error_reporting(E_ALL ^ E_NOTICE);

class C_administracion extends CI_Controller{
	
	
	function mostrarlo($id_evento=0){
		$dato= array(
				'id_eventoo' =>$id_evento
		);
		$this->session->set_userdata($dato);
		$data['id_evento']=$id_evento;
		$data['main_content'] = 'home_admin/asignarexpoeven_form';
		$this->load->view('home_admin/home', $data);

	}

	function obteneterDatosExpositor(){
		
		$this->load->model('administracion/m_administracion', 'admin');
		$query=$this->admin->get_expositor($this->input->post('codigo'));
		
		if(!$query){
			$data= array(
				'codi' =>$this->input->post('codigo'),
				'mensaje' =>"No se encontraron Resultados",
				'nom' =>"",
				'ape_Pat' =>"",
				'ape_Mat' =>"",
				'pais' =>"",
				'especialidad' =>""
				
			);
			$this->session->set_userdata($data);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}else{
			$data= array(
				'codi' =>$this->input->post('codigo'),
				'mensaje' =>" ",
				'nom' =>$query->nom_exp,
				'ape_Pat' =>$query->ape_pat_exp,
				'ape_Mat' =>$query->ape_mat_exp,
				'pais' =>$query->pais_exp,
				'especialidad' =>$query->especialidad
				
			);
			$this->session->set_userdata($data);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}
	}
	
	function obtenerDatosPonencia(){
		$a="";
		$this->load->model('administracion/m_administracion', 'admin');
		$query=$this->admin->get_ponencia($this->input->post('codigo2'));
		if($query->tipo_pon==1){
			$a="Conferencia";
		}else{
			$a="Taller";
		}
		if(!$query){
			$dato= array(
				'codi2' =>$this->input->post('codigo2'),
				'mensaje2' =>"No se encontraron Resultados",
				'titulo' =>"",
				'aula' =>"",
				'ambiente' =>"",
				'tipo1' =>"",
				'duracion' =>""
				
			);
			$this->session->set_userdata($dato);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}else{
			$dato= array(
				'codi2' =>$this->input->post('codigo2'),
				'mensaje2' =>" ",
				'titulo' =>$query->nom_pon,
				'aula' =>$query->cod_fia_amb,
				'ambiente' =>$query->tip_amb,
				'tipo1' =>$a,
				'duracion' =>$query->resultado
				
				
			);
			$this->session->set_userdata($dato);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}
	}
	
	function asignarExpPon(){
				
			$dato= array(
				'codEvento' =>$this->session->userdata('id_eventoo'),
				//'codPonencia' =>$this->input->post('cod2'),
				'keyExpositor' =>$this->input->post('cod'),
				'piz_acr_req' =>$this->input->post('req1'),
				'pers_apoyo_req' =>$this->input->post('req2'),
				'parlant_req' =>$this->input->post('req3'),
				'lap_req' =>$this->input->post('req4'),
				'micro_req' =>$this->input->post('req5'),
				'software_req'=>$this->input->post('reqAdic')
				
			);
			
		$this->load->model('administracion/m_administracion', 'admin');
		$result=$this->admin->asignar_expositor_evento($dato);
		if($result){
			$info['main_content']="home_admin/asignacion_succesful";
			$this->load->view('home_admin/home', $info);
		}
				
	}

	function emitirCertificado(){
		$this->load->model('mantener/m_evento','m_evento');
		$eventos = $this->m_evento->getData();
		$data['eventos'] = $eventos;
		$data['main_content']="home_admin/v_emitirCertificado";
		$this->load->view('home_admin/home', $data);
	}
	
	function consultarAsistencia(){
		$data['main_content']="home_admin/v_consultarAsistencia";
		$this->load->view('home_admin/home', $data);
	}

	function emitirCertificadoXEvento(){
		
		$this->load->model('m_recibo','recibo');
		$this->load->model('miembros_model','miembro');
		
		$recibosXEvento=$this->recibo->get_reciboXEvento($this->input->post('id_eve'));
		
		//RECORRER PARA BUSCAR Y GUARDAR CADA FILA DE PARTICIPANTE POR RECIBO
		$apepat = $this->input->post('apepat');
		for($i=0; $i<count($recibosXEvento); $i++){
			if($apepat==""){
				$participantes[$i] = $this->miembro->getMiembroXCodUser($recibosXEvento[$i]->cod_user_rec);
			}else{
				$participantes[$i] = $this->miembro->getMiembroXCodUserYApePat($recibosXEvento[$i]->cod_user_rec,$apepat);
			}
		}
		$this->load->model('mantener/m_evento','m_evento');
		$data['eventos'] = $this->m_evento->getData();
		$data['evento'] = $this->m_evento->getEventoXId($this->input->post('id_eve'));
		$data['recibosXEvento'] = $recibosXEvento;
		$data['participantes'] = $participantes;
		$data['main_content']="home_admin/v_emitirCertificado";
		$this->load->view('home_admin/home', $data);
	}
	
	function generarCertificado($cod_user = null, $id_eve = null){
		$this->load->model('miembros_model','miembros');
		$participante = $this->miembros->getMiembroXCodUser($cod_user);
		
		$this->load->model('mantener/m_evento','eventos');
		$evento = $this->eventos->getEventoXId($id_eve);
		
		$nombre = $participante->ape_pat_user.' '.$participante->ape_mat_user.' '.$participante->nom_user;
		$nom_eve = $evento->nom_eve;
		
		$this->load->library('fpdf');//llamo a la libreria en el constructor
		define('FPDF_FONTPATH',BASEPATH.'/libraries/font/');//es importante declarar en donde esta la carpeta font! sino sale el error que no encuentra el archivo!
		ob_end_clean();
		//inicializa pagina pdf
		$this->fpdf->Open();
		$this->fpdf->AddPage();
		$this->fpdf->SetFont('Arial','B',16);
		//dibuja rectangulo
		//$this->fpdf->Rect(20,10,180,137,'D');
		$this->fpdf->Cell(0,16,'UNIVERSIDAD DE SAN MARTIN DE PORRES',1,1,'C');
		$this->fpdf->Cell(0,16,'Facultad de Ingenieria y Arquitectura',0,1,'C');
		$this->fpdf->Cell(0,10,'Certificado de Evento '.$nom_eve,0,1,'C');
		$this->fpdf->Cell(0,10,'Nombre del participante   : '.$nombre,0,1,'L');
		$this->fpdf->Cell(0,10,'Numero de documento     : '.$participante->num_doc_user,0,1,'L');
		$this->fpdf->Output($nom_eve.'_'.$nombre.'.pdf','D');
		
		$data['main_content']="home_admin/v_emitirCertificado";
		$this->load->view('home_admin/home', $data);
		
	}
	

	function consultarAsistenciaXApePat(){
		
		$this->load->model('miembros_model','miembro');
		
		$participantes=$this->miembro->getMiembroXApePat($this->input->post('apepat'));
		
		for($i=0; $i<count($participantes); $i++){
			$recibos[$i] = $this->miembro->getReciboXCodUser($participantes[$i]->cod_user_rec);
		}
		
		for($i=0; $i<count($recibos); $i++){
			$partic_recibo[$i]= array(
							'cod_user' =>$participantes[$i]->cod_user,
							'nom_user' =>$participantes[$i]->nom_user,
							'ape_pat_user' =>$participantes[$i]->ape_pat_user,
							'ape_mat_user' =>$participantes[$i]->ape_mat_user,
							'ponencia_id_pon' =>$recibos[$i]->ponencia_id_pon,
							'id_eve' =>$recibos[$i]->id_eve
			);
		}
		
		/*$this->load->model('mantener/m_evento','m_evento');
		$data['eventos'] = $this->m_evento->getData();
		$data['evento'] = $this->m_evento->getEventoXId($this->input->post('id_eve'));
		$data['recibosXEvento'] = $recibosXEvento;*/
		$data['recibos']= $recibos;
		$data['participantes'] = $participantes;
		$data['parti_recibo'] = $partic_recibo;
		$data['main_content']="home_admin/v_consultarAsistencia";
		$this->load->view('home_admin/home', $data);
	}
	
	
	/***funciones ivan***/
	function index()
	{
		$this->load->view('home_admin/index');
	}
	
	function getPonenciaAjax(){
	$id_pon=$this->input->post('id_pon');
	$this->load->model('administracion/m_administracion','admin');
	$result=$this->admin->get_ponenciaJson($id_pon);
	$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function cargarponencias(){
		$this->load->model('administracion/m_administracion', 'admin');
		$query=$this->admin->get_ponencias();
		$this->output->set_content_type('application/json')->set_output(json_encode($query));

	}

	function registrarAsistencia(){
		$this->load->model('mantener/m_ponencia','m_ponencia');
		$data['ponencias'] = $this->m_ponencia->getData();
		$this->load->view('home_admin/registrar_Asistencia',$data);
		
	}
	
	function cargarCamara(){
		$this->load->model('mantener/m_ponencia','m_ponencia');
		$data['ponencias'] = $this->m_ponencia->getData();
		
		$this->load->view('cam/demo5',$data);
		
	}



	
}

?>
