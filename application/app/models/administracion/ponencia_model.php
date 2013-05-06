<?php

class Ponencia_model extends CI_Model{
	
	
	function registrar_ponencia($dato=NULL){
	
		$result=NULL;
			$result= $this->db->insert('ponencia',$dato);

		return $result;
	}
	
	function modificar_ponencia($dato=NULL,$id_pon){
	
		$result=NULL;
			$this->db->where('id_pon', $id_pon);
			$result= $this->db->update('ponencia',$dato);

		return $result;
	
	}
	
	function borrar_ponencia($id_pon=NULL){
	
		$result=NULL;
			$result= $this->db->delete('ponencia', array('id_pon' => $id_pon)); 

		return $result;
	
	}
}

?>