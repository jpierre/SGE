<?php







class M_administracion extends CI_Model{



	function get_expositor($codigo=NULL){

		//$this->db->where('username', $this->input->post('username'));

		//$this->db->where('password', md5($this->input->post('password')));

		//return $query = $this->db->get('miembros')->row();

		$sql="select nom_exp, ape_pat_exp, ape_mat_exp, pais_exp from expositor where cod_exp='".$codigo."'";

		return $this->db->query($sql)->row();



	}



	function get_ponencia($codigo=NULL){



		$sql="select nom_pon, tip_amb, cod_fia_amb, tipo_pon,  TRUNCATE(TIMESTAMPDIFF(SECOND , fech_ini_pon,	fech_fin_pon)/60, 0) AS resultado from ponencia p, ambiente a where id_amb_pon=id_amb and id_pon='".$codigo."'";



		return $this->db->query($sql)->row();

	}





	function asignar_expositor_evento($dato=NULL){

		$asignacion= array(

			'piz_acr_req' =>$this->input->post('req1'),

			'pers_apoyo_req' =>$this->input->post('req2'),

			'parlant_req' =>$this->input->post('req3'),

			'lap_req' =>$this->input->post('req4'),

			'micro_req' =>$this->input->post('req5'),

			'software_req'=>$this->input->post('reqAdic')



		);



		$insert2= $this->db->insert('requerimientos',$asignacion);



		$sql="select max(id_req) AS id_req from requerimientos";

		$query=$this->db->query($sql)->row();

		$asignar= array(

			'cod_eve_pon' =>$dato['codEvento'],

			//'id_pon' =>$dato['codPonencia'],

			'cod_exp_pon' =>$dato['keyExpositor'],

			'id_req_pon' =>$query->id_req

		);



		$this->db->where('id_pon', $this->session->userdata('codi2'));

		$insert= $this->db->update('ponencia', $asignar);



		return $insert;

	}



	



	/**ivan funciones**/

	function get_ponenciaJson($codigo=NULL){



		$sql="select * from ponencia where id_pon='".$codigo."'";

		return $this->db->query($sql)->row();



	}



		function get_ponencias(){
		$sql="SELECT cod_exp_pon,desc_pon,dirigido_a_pon,cod_eve_pon,id_amb_pon,id_req_pon,p.id_pon,fech_ini_pon,fech_fin_pon,CONCAT(TIMESTAMPDIFF(HOUR, fech_ini_pon,fech_fin_pon),' Horas')AS 'duracion',nom_pon,tipo_pon,est_pon,a.tip_amb,e.nom_exp,e.ape_pat_exp,e.ape_mat_exp,am.capac_amb,am.cod_fia_amb FROM ponencia p
INNER JOIN ambiente a ON p.id_amb_pon=a.id_amb
LEFT JOIN expositor e ON p.cod_exp_pon=e.cod_exp
INNER JOIN ambiente am on p.id_amb_pon=am.id_amb";



		$tip_pon= array('Seminario','Conferencia','Taller');

		$pon_desc=array('Sin contratiempos','Cancelada','Eliminada');

		$dir_desc= array('Arquitectura','Ing. Sistemas','Ing. Industrial','Ing. Electrionica','Ing. Civil','Industrias Alimentarias');

		$amb_des= array('Aula','Taller');



	$ponencias=$this->db->query($sql);

	//Arreglo que contendra cada una de las filas de la tabla

  $datos = array();

  //llenamos el arreglo con los datos resultados de la consulta



  foreach($ponencias->result_array() as $row)

  {

      $datos[] = array(

			'id_pon'=>$row['id_pon'],

			'cod_exp_pon'=>$row['cod_exp_pon'],

			'cod_eve_pon'=>$row['cod_eve_pon'],

			'desc_pon'=>$row['desc_pon'],

			'id_amb_pon'=>$row['id_amb_pon'],

			'id_req_pon'=>$row['id_req_pon'],

			'fech_ini_pon' =>$row['fech_ini_pon'],

			'fech_fin_pon'=>$row['fech_fin_pon'],

			'nom_pon'=>$row['nom_pon'],

			'dir_desc'=>$dir_desc[$row['dirigido_a_pon']-1],

			'dirigido_a_pon'=>$row['dirigido_a_pon'],

			'duracion'=>$row['duracion'],

			'tip_pon_dsc'=>$tip_pon[$row['tipo_pon']-1],

			'tipo_pon'=>$row['tipo_pon'],

			'est_pon'=>$row['est_pon'],

			'est_pon_desc'=>$pon_desc[$row['est_pon']-1],

			'tip_amb'=>$row['tip_amb'],

			'amb_des'=>$amb_des[$row['tip_amb']-1],

			'amb_des'=>$amb_des[$row['tip_amb']-1],

			'capac_amb'=>$row['capac_amb'],

			'cod_fia_amb'=>$row['cod_fia_amb'],

			'capac_amb'=>$row['capac_amb'],

			'nom_exp'=>$row['ape_pat_exp'].' '.$row['ape_mat_exp'].' '.$row['nom_exp']



		);



  }



		return $datos;



	}

}





?>