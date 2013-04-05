<?php
class Inscripcion_model extends CI_Model{
	
	//CAMBIADO
	function registrar_inscripcion_participante($data=NULL){
		
		
		$sql="select cod_user as ID from usuario where num_doc_user='".$this->session->userdata('idDNI')."'";
		$a=$this->db->query($sql)->row();
		
		$this->db->set('cod_user_rec', $a->ID);
		$this->db->set('id_eve_rec', $data['id_evento']);
 		$this->db->set('nro_inscripcion', $data['nro_inscrip']);
 		$this->db->set('voucher', $data['estado_recibo']);
		$this->db->set('mod_pago', $data['tipo_pago']);
		$this->db->set('nro_cuotas', $data['nro_cuotas']);
		$this->db->set('monto', $data['monto']);
 		$this->db->insert('recibo');
				
		return true;
	
	}

	//CAMBIADO
	function get_estado_user($idDNI=0){
		
		
		$query="select tip_usu from usuario where num_doc_user='".$idDNI."'";

		return $this->db->query($query)->row();

	}
	
	//CAMBIADO
	function get_consulta_registro($idDNI=0, $idEvento=0){
		$query="select pe.cod_user_rec from usuario p, recibo pe where p.cod_user=pe.cod_user_rec and p.num_doc_user='".$idDNI."'"."and pe.id_eve_rec='".$idEvento."'";

		return $this->db->query($query)->row();

	}
	
	function reg_n_participantes($data=NULL){
		$count=0;
		for($i=1;$i<11;$i++){
			if( $data['nombre'.$i]!="" ||$data['ape_pat'.$i]!="" || $data['ape_mat'.$i]!=""){
				$count++;
				$this->db->set('nombre', $data['nombre'.$i]);
 				$this->db->set('apePat', $data['ape_pat'.$i]);
 				$this->db->set('apeMat', $data['ape_mat'.$i]);
				$this->db->set('dni', $this->session->userdata('idDNI'));
				$this->db->insert('participante');
			}
		}
		if($count>0){
			return true;
		}else{
			return false;
		}
		
	}


}

?>