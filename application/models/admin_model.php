<?php

class Miembros_model extends CI_Model{
	function validate(){
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		
		return $query = $this->db->get('miembros')->row();
		
		
		
	}
	

	
}

?>