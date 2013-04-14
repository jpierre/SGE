<?php

class m_Ponencia extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	//VERIFICAR SI EL SIGUIENTE METODO ESTA SOBRANTE
	function cargarPonencias(){
		
		$query = $this->db->get('ponencia', 1);
		
		return $query->row();
		
		/*$this->db->where('usuario_user', $this->input->post('username'));
		$this->db->where('pas_user', md5($this->input->post('password')));
		$query = $this->db->get('usuario');
		
		if($query->num_rows == 1){
			return $query->row();
		}else{
			return false;	
		}*/
	}
	
	//obtenemos la tabla 'ponencia'. db->get('nombre_tabla') equivale a SELECT * FROM nombre_tabla.
	function getData() {
 		$ponencias = $this->db->get('ponencia');
 		return $ponencias->result();
	}
	
	
	//CAMBIADO
	function get_usuario(){
		$query="select num_doc_user from usuario where num_doc_user='".$this->session->userdata('idDNI')."'";
		$resultado=$this->db->query($query);	
		
		if($resultado->num_rows == 1){
			return true;
		}else{
			return false;
		}
	}
	

	
}

?>