<?php

class Admin_model extends CI_Model{
	function get_expositor($codigo=NULL){
		//$this->db->where('username', $this->input->post('username'));
		//$this->db->where('password', md5($this->input->post('password')));
		
		//return $query = $this->db->get('miembros')->row();
		
		$sql="select nombre, apePat, apeMat, pais, especialidad from expositor where idExpositor='".$codigo."'";
		return $this->db->query($sql)->row();
		
	}
	function get_ponencia($codigo=NULL){
		$sql="select titulo, aula, ambiente, tipo, duracion from ponencia where idPonencia='".$codigo."'";
		return $this->db->query($sql)->row();
	}
	
	function asignar_expositor_evento($dato=NULL){
	
		$asignar= array(
					
			'codEvento' =>$dato['codEvento'],
			'codPonencia' =>$dato['codPonencia'],
			'keyExpositor' =>$dato['keyExpositor'],
			'requerimientos' =>$dato['requerimientos']
		);
	
		$insert= $this->db->insert('ponenciaxevento',$asignar);
		return $insert;
	}
	

	
}

?>