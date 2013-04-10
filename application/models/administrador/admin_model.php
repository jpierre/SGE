<?php

class Admin_model extends CI_Model{
	function get_expositor($codigo=NULL){
		//$this->db->where('username', $this->input->post('username'));
		//$this->db->where('password', md5($this->input->post('password')));
		
		//return $query = $this->db->get('miembros')->row();
		
		$sql="select nom_exp, ape_pat_exp, ape_mat_exp, pais_exp, especialidad from expositor where cod_exp='".$codigo."'";
		return $this->db->query($sql)->row();
		
	}
	function get_ponencia($codigo=NULL){
		$sql="select nom_pon, tip_amb, cod_fia_amb, tipo_pon,  TRUNCATE(TIMESTAMPDIFF(SECOND , fech_ini_pon,	fech_fin_pon)/60, 0) AS resultado from ponencia p, ambiente a where id_pon='".$codigo."'";
		return $this->db->query($sql)->row();
	}
	
	function asignar_expositor_evento($dato=NULL){
	
		$asignacion= array(
					
			'piz_acr_req' =>$this->input->post('req1'),
			'pers_apoyo_req' =>$this->input->post('req2'),
			'parlant_req' =>$this->input->post('req3'),
			'lap_req' =>$this->input->post('req4'),
			'micro_req' =>$this->input->post('req5'),
			'software_req'=>$this->input->post('reqAdic')
			
		);
		$insert2= $this->db->insert('requerimientos',$asignacion);
		
		$sql="select max(id_req) AS id_req from requerimientos";
		$query=$this->db->query($sql)->row();
		
		$asignar= array(
					
			'cod_eve_pon' =>$dato['codEvento'],
			//'id_pon' =>$dato['codPonencia'],
			'cod_exp_pon' =>$dato['keyExpositor'],
			'id_req_pon' =>$query->id_req
			
		);
		$this->db->where('id_pon', $this->session->userdata('codi2'));
		$insert= $this->db->update('ponencia', $asignar);
		
		return $insert;
	}
	

	
}

?>