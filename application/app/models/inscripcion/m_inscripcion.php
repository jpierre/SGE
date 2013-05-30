<?php
class M_inscripcion extends CI_Model{
	
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
 		
 		
 		$query="SELECT id_pon FROM ponencia WHERE cod_eve_pon='".$data['id_evento']."'";
		$resultado = $this->db->query($query);
		$resultado = $resultado->result();
 		
 		for($i=0; $i<count($resultado); $i++){
 			$this->db->set('ponencia_id_pon', $resultado[$i]->id_pon);
			$this->db->set('usuario_cod_user', $a->ID);
			$this->db->set('asistencia', 0);
 			$this->db->insert('asistencia');
 		}
		
 		
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
	
	//CAMBIADO
	function get_cod_user($num_doc=0){
		
		
		$query="select cod_user from usuario where num_doc_user='".$num_doc."'";
		$resultado = $this->db->query($query);
		
		if($resultado->num_rows == 1){
			return $resultado->row();
		}else{
			return false;	
		}

	}
	
	//CAMBIADO---faltan detalles
	function reg_n_participantes($data=NULL){
		
		// el documento del representante esta en la sesion
		$num_doc="";
		$resultado = $this->get_cod_user($this->session->userdata('idDNI'));
		if($resultado != false){
				$num_doc = $resultado->cod_user;
		}
		
		$count=0;
		for($i=1;$i<3;$i++){
			if( $data['num_doc'.$i]!="" ||$data['nom'.$i]!="" || $data['apePat'.$i]!="" || $data['apeMat'.$i]!=""){
				$count++;
				$this->db->set('tip_doc_user', $data['tipo_doc'.$i]);
				$this->db->set('num_doc_user', $data['num_doc'.$i]);
				$this->db->set('nom_user', $data['nom'.$i]);
 				$this->db->set('ape_pat_user', $data['apePat'.$i]);
 				$this->db->set('ape_mat_user', $data['apeMat'.$i]);
				$this->db->set('USUARIO_cod_user', $num_doc);
				$this->db->set('tip_usu', '5');
				$this->db->insert('usuario');
			}
		}
		if($count>0){
			return $count;
		}else{
			return false;
		}
		
	}
	
	function get_inscripcion($cod_user){
		
		$query="select pe.cod_user_rec from usuario p, recibo pe where p.cod_user=pe.cod_user_rec and p.num_doc_user='".$cod_user."'";
		
		$resultado = $this->db->query($query);
		
		/*$this->db->select('nro_inscripcion');
		$this->db->where('cod_user_rec', $cod_user);
		$resultado = $this->db->get('recibo');*/
		
		if($resultado->num_rows >= 1){
			return $resultado->row();
		}else{
			return false;	
		}
	
	}


}

?>