<?php

session_start();

error_reporting(E_ALL ^ E_NOTICE);

class Expositor extends CI_Controller

{

    function getExpositorAjax()

    {

        $this->load->model('administracion/admin_expositor', 'expositor');

        $result = $this->expositor->get_expositorJson();

        $this->output->set_content_type('application/json')->set_output(json_encode($result));

    }

    function cargarFoto()

    {

        $config['upload_path']   = './fotos/';

        $config['allowed_types'] = 'gif|jpg|png';

        $config['max_size']      = '1000';

        $config['max_width']     = '390';

        $config['max_height']    = '482';

        $config['file_name']     = $this->input->post('num_doc');

        $config['overwrite']     = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload("imagen")) {

            //echo '{"failure":"true", "sms":"' . $this->upload->display_errors() . '"}';
			echo '{"failure":"true", "sms":"Solo se admiten images de 390X482 pixels"}';
			

        } else {

            $data                 = $this->upload->data();

            $_SESSION['fotoname'] = $data['file_name'];

            echo '{"success":"true", "sms":"Ok","urlImg":"http://www.' . $_SERVER['HTTP_HOST'] . '/sge/fotos/' . $data['file_name'] . '"}';

        }

    }

    function registar_expositor()

    {

        //recogemos los datos obtenidos por POST

        $cod_exp = $this->input->post('cod_exp');

        if (!isset($_SESSION['fotoname']))

            $_SESSION['fotoname'] = 'NULL';

        $data = array(

            'cod_exp' => $cod_exp,

            'tip_doc' => $this->input->post('tip_doc'),

            'ape_pat_exp' => $this->input->post('ape_pat_exp'),

            'ape_mat_exp' => $this->input->post('ape_mat_exp'),

            'num_doc' => $this->input->post('num_doc'),

            'nom_exp' => $this->input->post('nom_exp'),

            'pais_exp' => $this->input->post('pais_exp'),

            'fot_exp' => $_SESSION['fotoname']

        );

        //llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.

        $this->load->model('administracion/admin_expositor', 'expositor');

        if ($cod_exp == '')

            $this->resultado($this->expositor->registrar_expositor($data));

        else

            $this->resultado($this->expositor->modificar_expositor($data, $cod_exp));

        /*

        if($result==true){

        $data['main_content']='Admisnitrador/inscripcion_succesful';

        $this->load->view('home/home', $data);

        }*/

    }

    public function borrar_expositor()

    {

        $cod_exp = $this->input->get('cod_exp');

        $this->load->model('administracion/admin_expositor', 'expositor');

        $query = $this->expositor->borrar_expositor($cod_exp);

        if ($query) {

            $this->load->model('administracion/admin_expositor', 'admin');

            $this->output->set_content_type('application/json')->set_output(json_encode($this->admin->get_expositorJson()));

        } else

            $this->output->set_content_type('application/json')->set_output(json_encode('{success:false,"sms":"Error al eliminar el Expositor: $cod_exp\nVuelva a intentarlo"}'));

    }

    function resultado($res)

    {

        if ($res == '1')

            echo '{"success":"true", "sms":"Ok"}';

        else

            echo '{"failure":"true", "sms":"El Expositor ya esta asignado\nDebe eliminar la asignacion para eliminarlo."}';

    }

}

?>