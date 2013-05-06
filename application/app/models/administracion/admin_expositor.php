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
}

?>