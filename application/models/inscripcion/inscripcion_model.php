<?php
class Inscripcion_model extends CI_Model{

	function registrar_inscripcion_participante($data=NULL){
		
		
		$this->db->set('nombre', $data['nombre']);
 		$this->db->set('apePat', $data['apePat']);
 		$this->db->set('apeMat', $data['apeMat']);
		$this->db->set('dni', $data['id_participante']);
 		$this->db->insert('participante');
	
		$sql="select max(idParticipante) as ID from participante";
		$a=$this->db->query($sql)->row();
		
		$this->db->set('pkParticipante', $a->ID);
		$this->db->set('pkEvento', $data['id_evento']);
 		$this->db->set('nro_inscripcion', $data['nro_inscrip']);
 		$this->db->set('estado', $data['estado']);
		$this->db->set('fecha_inscripcion', $data['fecha_inscrip']);
 		$this->db->insert('participantexevento');
		
		
		$this->db->set('idRecibo',$data['nro_inscrip']);
		$this->db->set('banco', $data['banco']);
 		$this->db->set('tipo_pago', $data['tipo_pago']);
 		$this->db->set('fecha_emision', $data['fecha_inscrip']);
		$this->db->set('monto',$data['monto']);
		$this->db->set('fkParticipante', $a->ID);
		$this->db->set('fkEvento', $data['id_evento']);
		$this->db->set('observacion', $data['cant_cuotas']);
		$this->db->insert('recibo');
		
		return true;
	
	}

	function get_estado_user($idDNI=0){
		
		
		$query="select tipo from usuario where idDNI='".$idDNI."'";

		return $this->db->query($query)->row();

	}

	function get_consulta_registro($idDNI=0, $idEvento=0){
		$query="select pe.pkParticipante from participante p, participantexevento pe where p.idparticipante=pe.pkParticipante and p.dni='".$idDNI."'"."and pe.pkEvento='".$idEvento."'";

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