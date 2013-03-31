<?php

class Miembros_model extends CI_Model{
	function validate(){
		$this->db->where('user', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('usuario');
		
		if($query->num_rows == 1){
			return $query->row();
		}else{
			return false;	
		}
		
		
		
		
		
	}

	function validate_sicat(){
		$this->db->where('usuario', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('sicat');
		
		if($query->num_rows == 1){
		return $query->row();
		}else{
			return false;	
		}

	}
	
	function create_member($data=NULL){
		$new_member_insert_data= array(
		
		
		
			'idDni' =>$this->input->post('dni'),
			'nombres' =>$this->input->post('nombres'),
			'apePat' =>$this->input->post('ape_pat'),
			'apeMat' =>$this->input->post('ape_mat'),
			'telefono' =>$this->input->post('fijo'),
			'celular' =>$this->input->post('celular'),
			'correo' =>$this->input->post('email_adress'),
			'direccion' =>$this->input->post('direccion'),
			'tipo' =>"externo",
			'user' =>$this->input->post('username'),
			'password' =>md5($this->input->post('password'))	
		);
		
		$insert= $this->db->insert('usuario',$new_member_insert_data);
		
		if($data!=NULL && $insert==true ){
			$insert= $this->db->insert('empresa',$data);
		}
		
		return $insert;
	
	}
	
	function registrar_interno(){
		$new_member_insert_data= array(
				
			'idDNI' => $this->session->userdata('idDNI'),
			'nombres' =>$this->session->userdata('nombres'),
			'apePat' =>$this->session->userdata('apePat'),
			'apeMat' =>$this->session->userdata('apeMat'),
			'telefono' =>$this->session->userdata('telefono'),
			'celular' =>$this->session->userdata('celular'),
			'correo' =>$this->session->userdata('correo'),
			'direccion' =>$this->session->userdata('direccion'),
			'tipo' =>$this->session->userdata('estado'),
			'user' =>$this->session->userdata('user'),
			'password' =>md5($this->input->post('password'))	
		);
		
		$insert= $this->db->insert('usuario',$new_member_insert_data);
		
		return $insert;
	}
	
	function get_usuario(){
		$query="select idDNI from usuario where idDNI='".$this->session->userdata('idDNI')."'";
		$resultado=$this->db->query($query);	
		
		if($resultado->num_rows == 1){
			return true;
		}else{
			return false;
		}
	}
	

	
}

?>