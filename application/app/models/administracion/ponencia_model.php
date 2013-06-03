<?php



class Ponencia_model extends CI_Model{

	

	

	function registrar_ponencia($dato=NULL){

	

		$result=NULL;

			$result= $this->db->insert('ponencia',$dato);
			//$this->db->insert_id();
			$result= $this->db->insert('ponencia',$dato);



		return $result;

	}

	

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

	

	}

}



?>