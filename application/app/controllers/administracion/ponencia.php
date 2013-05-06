<?php
error_reporting(E_ALL ^ E_NOTICE);

class Ponencia extends CI_Controller{
	
	/*public function index()
	{
		$this->load->view('home_admin/index');
	}*/
	
	
	function accionPonencia($accion=0){
		$dato= array(
				'id_eventoo' =>$id_evento
		);
		$this->session->set_userdata($dato);
		$data['id_evento']=$id_evento;
		$data['main_content'] = 'home_admin/asignarexpoeven_form';
		$this->load->view('home_admin/home', $data);

	}
	
	function registar_ponencia(){
		//recogemos los datos obtenidos por POST
		
		$fecha = new DateTime($this->input->post('fech_ini_pon'));
		$fi = $fecha->format('Y-m-d H:i:s');
		$fecha = new DateTime($this->input->post('fech_fin_pon'));
		$ff = $fecha->format('Y-m-d H:i:s');
		$id_pon=$this->input->post('id_pon');
		$data = array(
		'nom_pon' => $this->input->post('nom_pon'),
		'cod_eve_pon' => $this->input->post('cod_eve_pon'),
		'fech_ini_pon' => $fi,
		'fech_fin_pon' => $ff,
		'desc_pon' => $this->input->post('desc_pon'),
		'tipo_pon' => $this->input->post('tipo_pon'),
		'est_pon' => $this->input->post('est_pon'),
		'dirigido_a_pon' => $this->input->post('dirigido_a_pon'),
		'id_amb_pon' => $this->input->post('id_amb_pon')
		);
 		//llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.
 		$this->load->model('administracion/ponencia_model','ponencia');
		
		if($id_pon=='')
 		$result=$this->ponencia->registrar_ponencia($data);
		else
 		$result=$this->ponencia->modificar_ponencia($data,$id_pon);
		/*
		if($result==true){
			$data['main_content']='Admisnitrador/inscripcion_succesful';
			$this->load->view('home/home', $data);
		}*/
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

	public function borrar_ponencia(){
		$id_pon=$this->input->get('id_pon');
		$this->load->model('administracion/ponencia_model', 'ponencia');
		$query=$this->ponencia->borrar_ponencia($id_pon);
		if($query){
			$this->load->model('administracion/m_administracion', 'admin');
			$this->output->set_content_type('application/json')->set_output(json_encode($this->admin->get_ponencias()));
		}else
			$this->output->set_content_type('application/json')->set_output(json_encode('{success:false,"sms":"Error al eliminar ponencia: $id_pon\nVuelva a intentarlo"}'));

	}
	
}

?>
