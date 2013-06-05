<?php error_reporting(E_ALL ^ E_NOTICE);

class Asistencia extends CI_Controller{


	
	
	function registar_asistencia(){

		//recogemos los datos obtenidos por POST

		$data = array(
		'num_doc_user' => $this->input->post('num_doc_user'),
		'ponencia_id_pon' => $this->input->post('id_ponencia'),
		'asistencia' => 0

		);

 		$this->load->model('administracion/asistencia_model','asistencia');
 		$result=$this->asistencia->registrar_asistencia($data);
		if($result){
			echo 'Ok';

		}else

			echo '{"failure":"true", "sms":"'.$this->db->_error_message().'"}';

	}
}



?>

