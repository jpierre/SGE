<?php
error_reporting(E_ALL ^ E_NOTICE);

class Expositor extends CI_Controller{
	
	/*public function index()
	{
		$this->load->view('home_admin/index');
	}*/
	
	function getExpositorAjax(){
	$this->load->model('administracion/admin_expositor','expositor');
	$result=$this->expositor->get_expositorJson();
	$this->output->set_content_type('application/json')->set_output(json_encode($result));
	}

	


	
}

?>
