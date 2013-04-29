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

	function mostrarlo2(){

	$data['main_content'] = 'home_admin/mantenerPonencia';
		$this->load->view('home_admin/home', $data);

	}
	
	function mostrarlo3(){
	$data['main_content'] = 'home_admin/datos_admin';
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
				'mensaje' =>"",
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
				'mensaje2' =>"",
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








	
}

?>