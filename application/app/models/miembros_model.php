<?php

class Miembros_model extends CI_Model{
	
	public function __construct() {
        parent::__construct();
    }
	
	//CAMBIADO
	function validate(){
		$this->db->where('usuario_user', $this->input->post('username'));
		$this->db->where('pas_user', md5($this->input->post('password')));
		$query = $this->db->get('usuario');
		
		if($query->num_rows == 1){
			return $query->row();
		}else{
			return false;	
		}
	}
	// CAMBIADO
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
	
	//INSERTA EL KEY DE REESTABLECIMIENTO
	function insertKey($data){
		$insert= $this->db->insert('resetpwd',$data);
	}
	
	//OBTIENE KEY DE LA BD
	public function verificarKey($key) {
        $this->db->where('keyJ',$key['keyJ']);
        $this->db->where('keyP',$key['keyP']);
        $consulta = $this->db->get('resetpwd');
        if($consulta->num_rows() == 1){
           return $consulta->row();
        }else{
        	return null;
        }
        
    }
    
	//UPDATE PASSWORD
    public function updatePassword($keyJ,$keyP,$newPwd){
    	
       	$this->db->where('keyJ',$keyJ);
        $this->db->where('keyP',$keyP);
            	
        $result = $this->db->get('resetpwd');
        $fila = $result->row(); 
        $email = $fila->email;

        $data = array(
            'pas_user' => md5($newPwd),
        		);
        
        $this->db->where('email_user', $email);
        $update = $this->db->update('usuario', $data);
        return $fila;
           
    }
    
	
	// Cambiando el crear nuevo miembro con la nueva BD---------LISTO
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
	
	//CAMBIADO
	function registrar_interno(){
		$new_member_insert_data= array(
				
			'num_doc_user' => $this->session->userdata('idDNI'),
			'nom_user' =>$this->session->userdata('nombres'),
			'ape_pat_user' =>$this->session->userdata('apePat'),
			'ape_mat_user' =>$this->session->userdata('apeMat'),
			'telf_fijo' =>$this->session->userdata('telefono'),
			'telf_cel' =>$this->session->userdata('celular'),
			'email_user' =>$this->session->userdata('correo'),
			'dir_user' =>$this->session->userdata('direccion'),
			'tip_usu' =>$this->session->userdata('estado'),
			'usuario_user' =>$this->session->userdata('user'),
			'pas_user' =>md5($this->input->post('password')),
			'esc_estud' =>$this->session->userdata('escuela'),
			'cod_user' =>$this->session->userdata('user'),
			'tip_doc_user' =>1,
			'cod_estud'=>$this->session->userdata('codigo')
		);
		
		$insert= $this->db->insert('usuario',$new_member_insert_data);
		
		return $insert;
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
	
	//ESTE METODO SIRVE PARA VALIDAR EMAIL SI EL USUARIO DESACTIVA AJAX
	public function verifica_email($email) {
        $this->db->where('email_user',$email);
        $consulta = $this->db->get('usuario');
        if($consulta->num_rows() == 1)
        {
           return $consulta->row();
        }
    }
	
    public function getMiembroXCodUser($cod_user_rec=null){
    	$this->db->where('cod_user',$cod_user_rec);
	    $result = $this->db->get('usuario');
	    $fila = $result->row();	
     	return $fila;
    }
    
	public function getReciboXCodUser($cod_user_rec=null){
    	$this->db->where('cod_user_rec',$cod_user_rec);
	    $result = $this->db->get('recibo');
	    $fila = $result->row();	
     	return $fila;
    }
    
 	 	
    public function getMiembroXCodUserYApePat($cod_user_rec=null,$apepat=null){
    	$this->db->where('cod_user',$cod_user_rec);
    	$this->db->where('ape_pat_user',$apepat);
    	$result = $this->db->get('usuario');
	    $fila = $result->row();
    	return $fila;
    }
    
	public function getMiembroXApePat($apepat=null){
    	$this->db->where('ape_pat_user',$apepat);
    	$usuarios = $this->db->get('usuario');
 		return $usuarios->result();
    	
    }
    
	
}

?>