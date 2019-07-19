<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class codigofacilito_model extends CI_Model{
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}
	function crearCurso($data){
		$this->db->insert('curso', array('nombre'=>$data['nombre'], 'cantidadvideos'=>$data['videos']));
	}

}
?>