<?php

class m_Evento extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	function getData() {
 		$eventos = $this->db->get('evento');
 		return $eventos->result();
	}
	
	function insert($data) {
		 $this->db->set('Nombre', $data['nombre']);
		 $this->db->set('Email', $data['email']);
		 $this->db->set('Telefono', $data['telefono']);
		 $this->db->set('Direccion', $data['direccion']);
		 $this->db->insert('contacto');
	 }
	
}

?>