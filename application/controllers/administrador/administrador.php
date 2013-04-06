<?php

class Administrador extends CI_Controller{
	
	
	function mostrarlo(){

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
		
		$this->load->model('administrador/admin_model', 'admin');
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
				'nom' =>$query->nombre,
				'ape_Pat' =>$query->apePat,
				'ape_Mat' =>$query->apeMat,
				'pais' =>$query->pais,
				'especialidad' =>$query->especialidad
				
			);
			$this->session->set_userdata($data);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}
	}
	
	function obtenerDatosPonencia(){
		$this->load->model('administrador/admin_model', 'admin');
		$query=$this->admin->get_ponencia($this->input->post('codigo2'));
		
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
				'titulo' =>$query->titulo,
				'aula' =>$query->aula,
				'ambiente' =>$query->ambiente,
				'tipo1' =>$query->tipo,
				'duracion' =>$query->duracion
				
				
			);
			$this->session->set_userdata($dato);
			$info['main_content']="home_admin/asignarexpoeven_form";
			$this->load->view('home_admin/home', $info);
		}
	}
	
	function asignarExpPon(){
				
			$dato= array(
				'codEvento' =>$this->input->post('evento'),
				//'codPonencia' =>$this->input->post('cod2'),
				'keyExpositor' =>$this->input->post('cod'),
				'piz_acr_req' =>$this->input->post('req1'),
				'pers_apoyo_req' =>$this->input->post('req2'),
				'parlant_req' =>$this->input->post('req3'),
				'lap_req' =>$this->input->post('req4'),
				'micro_req' =>$this->input->post('req5'),
				'software_req'=>$this->input->post('reqAdic')
				
			);
		$this->load->model('administrador/admin_model', 'admin');
		$result=$this->admin->asignar_expositor_evento($dato);
		if($result){
			$info['main_content']="home_admin/asignacion_succesful";
			$this->load->view('home_admin/home', $info);
		}
				
	}








	
}

?>
