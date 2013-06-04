<?php
class M_recibo extends CI_Model{

	function getData() {
 		$recibos = $this->db->get('recibo');
 		return $recibos->result();
	}
	
	function get_reciboXEvento($id_eve_rec=NULL){

		$this->db->where('id_eve_rec',$id_eve_rec);
        $recibosXevento = $this->db->get('recibo');
		return $recibosXevento->result();
        
		
	}

	function get_ponencia($codigo=NULL){
		$sql="select nom_pon, tip_amb, cod_fia_amb, tipo_pon,  TRUNCATE(TIMESTAMPDIFF(SECOND , fech_ini_pon,	fech_fin_pon)/60, 0) AS resultado from ponencia p, ambiente a where id_amb_pon=id_amb and id_pon='".$codigo."'";
		return $this->db->query($sql)->row();

	}



}



?>