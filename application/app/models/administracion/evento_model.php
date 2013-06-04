<?php

class Evento_model extends CI_Model{

	function registrar_evento($dato=NULL){

		$result=NULL;
		$result= $this->db->insert('evento',$dato);
		return $result;

	}

	
	function modificar_evento($dato=NULL,$id_eve){

		$result=NULL;
		$this->db->where('id_eve', $id_eve);
		$result= $this->db->update('evento',$dato);
		return $result;
	}

	function borrar_evento($id_eve=NULL){

		$result=NULL;
		$data = array('est_eve' => 3);
		$this->db->where('id_eve', $id_eve);
			$result= $this->db->update('evento',$data);

			//$result= $this->db->delete('evento', array('id_eve' => $id_eve)); 



		return $result;

	

	}

	function get_eventos($criterio){

		$sql="select * from evento".$criterio;

		$eventos = $this->db->query($sql);

		

		//Arreglo que contendra cada una de las filas de la tabla

		  $datos = array();

		  $res= array();

		   

		 $estado_des= array('Sin Contratiempos','Cancelado','Eliminado');

		  //llenamos el arreglo con los datos resultados de la consulta

		  foreach($eventos->result_array() as $row)

		  {

			  $datos[] = array(

					'id_eve'=>$row['id_eve'],

					'nom_eve'=>$row['nom_eve'],

					'fech_ini_eve'=>$row['fech_ini_eve'],

					'fech_fin_eve'=>$row['fech_fin_eve'],

					'est_eve'=>$row['est_eve'],

					'est_eve_desc'=>$estado_des[$row['est_eve']-1]

				);

		  }

		$res[] = array(

					'success'=>'true',

					'data'=>$datos

				);

		return $datos;

	

	}

	function getEvento($codigo=NULL){
		
		$sql="SELECT * FROM evento WHERE id_eve='".$codigo."'";
		return $this->db->query($sql)->row();
	}
	
	
}



?>