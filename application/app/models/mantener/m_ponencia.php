<?php

class m_Ponencia extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
		
	//obtenemos la tabla 'ponencia'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
	function getData() {
 		$ponencias = $this->db->get('ponencia');
 		return $ponencias->result();
	}
	
	function insert($data) {
		 $this->db->set('Nombre', $data['nombre']);
		 $this->db->set('Email', $data['email']);
		 $this->db->set('Telefono', $data['telefono']);
		 $this->db->set('Direccion', $data['direccion']);
		 $this->db->insert('contacto');
	 }
	 
	 function getPonenciaXId($id_pon=null){
	 	$this->db->where('id_pon',$id_pon);
	 	$result = $this->db->get('ponencia');
	    $fila = $result->row();	
     	return $fila;
	 }
	
}

?>