<?php
error_reporting(E_ALL ^ E_NOTICE);

class Evento extends CI_Controller{
	
	/*public function index()
	{
		$this->load->view('home_admin/index');
	}*/
	
	
	
	function registar_evento(){
		//recogemos los datos obtenidos por POST
		
		$fecha = new DateTime($this->input->post('fech_ini_eve'));
		$fi = $fecha->format('Y-m-d H:i:s');
		$fecha = new DateTime($this->input->post('fech_fin_eve'));
		$ff = $fecha->format('Y-m-d H:i:s');
		$id_eve=$this->input->post('id_eve');
		$data = array(
		'nom_eve' => $this->input->post('nom_eve'),
		'fech_ini_eve' => $fi,
		'fech_fin_eve' => $ff,
		'est_eve' => $this->input->post('est_eve')
		);
 		//llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.
 		$this->load->model('administracion/evento_model','evento');
		
		if($id_eve=='')
 		$result=$this->evento->registrar_evento($data);
		else
 		$result=$this->evento->modificar_evento($data,$id_eve);
		/*
		if($result==true){
			$data['main_content']='Admisnitrador/inscripcion_succesful';
			$this->load->view('home/home', $data);
		}*/
	}
	
	function geteventoAjax(){
	$id_eve=$this->input->post('id_eve');
	$this->load->model('administracion/m_administracion','admin');
	$result=$this->admin->get_eventoJson($id_eve);
	$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	public function cargareventos(){
		$this->load->model('administracion/evento_model', 'admin');
		$query=$this->admin->get_eventos(' where est_eve=1');
		$this->output->set_content_type('application/json')->set_output(json_encode($query));

	}
	
	public function vereventos(){
		$this->load->model('administracion/evento_model', 'admin');
		$query=$this->admin->get_eventos('');
		$this->output->set_content_type('application/json')->set_output(json_encode($query));

	}

	public function borrar_evento(){
		$id_eve=$this->input->get('id_eve');
		$this->load->model('administracion/evento_model', 'evento');
		$query=$this->evento->borrar_evento($id_eve);
		if($query){
			$this->load->model('administracion/evento_model', 'admin');
			$this->output->set_content_type('application/json')->set_output(json_encode($this->admin->get_eventos()));
		}else
			$this->output->set_content_type('application/json')->set_output(json_encode('{success:false,"sms":"Error al eliminar evento: $id_eve\nVuelva a intentarlo"}'));

	}
	
}

?>
