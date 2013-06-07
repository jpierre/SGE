<?php



class Asistencia_model extends CI_Model{

	

	

	function registrar_asistencia($dato=NULL){

	

		$result=NULL;

			//$result= $this->db->insert('asistencia',$dato);
			$this->db->where('num_doc_user', $dato['num_doc_user']);
			//$this->db->where('ponencia_id_pon', $dato['id_ponencia']);
			$result= $this->db->update('asistencia',$dato);
			//$this->db->insert_id();



		return $result;

	}
	
	function obtenerDNI($dni){
	
		$this->db->where('num_doc_user',$dni);
		$query = $this->db->get('asistencia');
		$fila = $query->row();
        return $fila;
	}

	/*

	function modificar_ponencia($dato=NULL,$data2=NULL,$id_pon,$id_amb){

	

		$result=NULL;

			$this->db->where('id_pon', $id_pon);

			$result= $this->db->update('ponencia',$dato);
			
			$this->db->where('id_amb', $id_amb);

			$result= $this->db->update('ambiente',$data2);



		return $result;

	

	}

	

	function borrar_ponencia($id_pon=NULL){

	

		$result=NULL;
		$data = array('est_pon' => 3);
		
		$this->db->where('id_pon', $id_pon);

			$result= $this->db->update('ponencia',$data);

			//$result= $this->db->delete('ponencia', array('id_pon' => $id_pon)); 



		return $result;

	

	}*/

}



?>