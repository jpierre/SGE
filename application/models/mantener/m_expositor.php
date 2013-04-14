<?php

class M_expositor extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}
	
	
	function getData() {
 		$expositores = $this->db->get('expositor');
 		return $expositores->result();
	}

}

?>