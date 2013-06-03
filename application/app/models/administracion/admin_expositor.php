<?php

class admin_expositor extends CI_Model{
	
	
	function get_expositorJson(){
		
		$sql="SELECT cod_exp,nom_exp,ape_pat_exp,ape_mat_exp,num_doc,pais_exp,fot_exp,tip_doc from expositor";
	
	//Arreglo que contendra cada una de las filas de la tabla
  $datos = array();
  $expositores=$this->db->query($sql);
  //llenamos el arreglo con los datos resultados de la consulta
  $tip_doc_array= array('DNI','Visa','Pasword');
  foreach($expositores->result_array() as $row)
  {
      $datos[] = array(
			'cod_exp'=>$row['cod_exp'],
			'tip_doc'=>$row['tip_doc'],
			'tip_doc_desc'=>$tip_doc_array[$row['tip_doc']-1],
			'nom_exp'=>$row['nom_exp'],
			'ape_pat_exp'=>$row['ape_pat_exp'],
			'ape_mat_exp'=>$row['ape_mat_exp'],
			'nom'=>$row['ape_pat_exp'].' '.$row['ape_mat_exp'].' '.$row['nom_exp'],
			'num_doc'=>$row['num_doc'],
			'nom_exp'=>$row['nom_exp'],
			'pais_exp'=>$row['pais_exp'],
			'fot_exp'=>$row['fot_exp']
		);
  }
		return $datos;
		
		}
		
		
	function registrar_expositor($dato=NULL){
	
		$result=NULL;
			$result= $this->db->insert('expositor',$dato);

		return $result;
	}
	
	function modificar_expositor($dato=NULL,$cod_exp){
	
		$result=NULL;
			$this->db->where('cod_exp', $cod_exp);
			$result= $this->db->update('expositor',$dato);

		return $result;
	
	}
	
	
	function borrar_expositor($cod_exp=NULL){
	
		$result=NULL;
			$result= $this->db->delete('expositor', array('cod_exp' => $cod_exp)); 

		return $result;
	
	}
	
}

?>