<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('codigofacilito_model');
}
	function index(){
		$this->load->view('Codigofacilito/bienvenido');
	}
	function holamundo(){
		$this->load->view('Codigofacilito/headers');
		$this->load->view('Codigofacilito/bienvenido');
	}
	
	}
}
?>