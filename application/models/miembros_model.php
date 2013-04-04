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
	
	// Cambiando el crear nuevo miembro con la nueva BD
	function create_member($data=NULL){
		// tip_usu=3 externo independiente
		// tip_usu=4 externo corporativo representante
		//tip_usu=5 externo corporativo empleado
		
		$new_member_insert_data= array(
						'tip_doc_user' =>$this->input->post('tipo_doc'),
						'num_doc_user' =>$this->input->post('dni'),
						'nom_user' =>$this->input->post('nombres'),
						'ape_pat_user' =>$this->input->post('ape_pat'),
						'ape_mat_user' =>$this->input->post('ape_mat'),
						'telf_fijo' =>$this->input->post('fijo'),
						'telf_cel' =>$this->input->post('celular'),
						'email_user' =>$this->input->post('email_adress'),
						'dir_user' =>$this->input->post('direccion'),
						'tip_usu' =>'3',
						'usuario_user' =>$this->input->post('username'),
						'pas_user' =>md5($this->input->post('password')),
						'info_acerca_evento' =>$this->input->post('como')
						
		);
		if($data!=NULL){
			if($this->input->post('tipo_usuario')!=""){
				$new_member_insert_data['tip_usu']=$this->input->post('tipo_usuario');//Externo corporativo representante
			}else{
				$new_member_insert_data['tip_usu']='5';//Externo corporativo empleado
			}
			$new_member_insert_data['cargo_emp_user']=$this->input->post('cargo');
			$new_member_insert_data['dpto_emp_user']=$this->input->post('dpto');	
		}
		
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