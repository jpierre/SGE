<?php error_reporting(E_ALL ^ E_NOTICE);



class Evento extends CI_Controller

{

    

    function registar_evento()

    {

        //recogemos los datos obtenidos por POST

        $fecha  = new DateTime($this->input->post('fech_ini_eve'));

        $fi     = $fecha->format('Y-m-d');

        $fecha  = new DateTime($this->input->post('fech_fin_eve'));

        $ff     = $fecha->format('Y-m-d');

        $id_eve = $this->input->post('id_eve');

        $data   = array(

            'nom_eve' => $this->input->post('nom_eve'),

            'fech_ini_eve' => $fi,

            'fech_fin_eve' => $ff,

            'est_eve' => $this->input->post('est_eve')

        );

        //llamamos al model, a la función registrar_inscripcion_participante() para que nos haga el insert en la base de datos.

        $this->load->model('administracion/evento_model', 'evento');

        if ($id_eve == '')

            $this->resultado($this->evento->registrar_evento($data));

        else

            $this->resultado($this->evento->modificar_evento($data, $id_eve));

    }

    function geteventoAjax()

    {

        $id_eve = $this->input->post('id_eve');

        $this->load->model('administracion/m_administracion', 'admin');

        $result = $this->admin->get_eventoJson($id_eve);

        $this->output->set_content_type('application/json')->set_output(json_encode($result));

    }

    public function cargareventos()

    {

        $this->load->model('administracion/evento_model', 'admin');

        $query = $this->admin->get_eventos(' where est_eve=1');

        $this->output->set_content_type('application/json')->set_output(json_encode($query));

    }

    public function vereventos()

    {

        $this->load->model('administracion/evento_model', 'admin');

        $query = $this->admin->get_eventos('');

        $this->output->set_content_type('application/json')->set_output(json_encode($query));

    }

    public function borrar_evento()

    {

        $id_eve = $this->input->get('id_eve');

        $this->load->model('administracion/evento_model', 'evento');

        $query = $this->evento->borrar_evento($id_eve);

        if ($query) {

            $this->load->model('administracion/evento_model', 'admin');

            $this->output->set_content_type('application/json')->set_output(json_encode($this->admin->get_eventos('')));

        } else

            echo '{"failure":"true", "sms":"' . $this->db->_error_message() . '"}';

    }

    function resultado($res)

    {

        if ($res == '1')

            echo '{"success":"true", "sms":"Ok"}';

        else

            echo '{"failure":"true", "sms":"El Evento ya esta asignado\nDebe eliminar la asignacion para eliminar."}';

    }

}

?>