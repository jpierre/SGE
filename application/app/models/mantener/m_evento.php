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
	 
	 function getEvento_Horario(){
	 	$sql="select nom_eve max(TRUNCATE(TIMESTAMPDIFF(SECOND, fech_ini_eve, fech_fin_eve)/1440, 0)) AS resultado from evento";

		return $this->db->query($sql)->row();
	 }
	 
	 function getEventoXId($id_eve=null){
	 	$this->db->where('id_eve',$id_eve);
        $evento = $this->db->get('evento');
		return $evento->row();
	 }
	
}

?>