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
	
	function getPonencia_Evento($cod_eve_pon = NULL) {
	
		$sql="select nom_eve, nom_pon, tip_amb, cod_fia_amb, cod_exp_pon, nom_exp, ape_pat_exp, ape_mat_exp, fech_ini_pon,	fech_fin_pon from ponencia, ambiente, expositor, evento where cod_eve_pon='$cod_eve_pon' and cod_exp=cod_exp_pon and id_amb=id_amb_pon and cod_eve_pon=id_eve order by fech_ini_pon";
		
		$resultado = $this->db->query($sql);
		
		if($resultado->num_rows > 0){
			//print_r()
			return $resultado->result();
		}else{
			return false;	
		}
 		
 		 
		


	}

}



?>