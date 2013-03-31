<?php

class Administrador extends CI_Controller{
	
	
	function mostrarlo(){

	$data['main_content'] = 'administrador/asignarexpoeven_form';
		$this->load->view('includes_sistema_admin/template', $data);

	}

	function mostrarlo2(){

	$data['main_content'] = 'administrador/manterPonencia';
		$this->load->view('includes_sistema_admin/template', $data);

	}
	
	function mostrarlo3(){
	$data['main_content'] = 'administrador/datos_admin';
		$this->load->view('includes_sistema_admin/template', $data);
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
			$info['main_content']="administrador/asignarexpoeven_form";
			$this->load->view('includes_sistema_admin/template', $info);
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
			$info['main_content']="administrador/asignarexpoeven_form";
			$this->load->view('includes_sistema_admin/template', $info);
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
			$info['main_content']="administrador/asignarexpoeven_form";
			$this->load->view('includes_sistema_admin/template', $info);
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
			$info['main_content']="administrador/asignarexpoeven_form";
			$this->load->view('includes_sistema_admin/template', $info);
		}
	}
	
	function asignarExpPon(){
		$a=$this->input->post('req1');
		$b=$this->input->post('req2');
		$c=$this->input->post('req3');
		$d=$this->input->post('req4');
		$e=$this->input->post('req5');
		$f=$this->input->post('reqAdic');
		
			$dato= array(
				'codEvento' =>$this->input->post('evento'),
				'codPonencia' =>$this->input->post('cod2'),
				'keyExpositor' =>$this->input->post('cod'),
				'requerimientos' =>trim(str_replace(",,",",",$a.",".$b.",".$c.",".$d.",".$e.", ".$f), ', ')
				
			);
		$this->load->model('administrador/admin_model', 'admin');
		$result=$this->admin->asignar_expositor_evento($dato);
		if($result){
			$info['main_content']="administrador/asignacion_succesful";
			$this->load->view('includes_sistema_admin/template', $info);
		}
				
	}








	
}

?>
