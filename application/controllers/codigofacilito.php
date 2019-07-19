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
	function nuevo(){
		$this->load->view('Codigofacilito/headers');
		$this->load->view('Codigofacilito/formulario');
	}
	function recibirdatos(){
		$data=array(
			'nombre'=>$this->input->post('nombre'),
			'videos'=>$this->input->post('videos')
			);
		$this->codigofacilito_model->crearCurso($data);
		$this->load->view('Codigofacilito/headers');
		$this->load->view('Codigofacilito/bienvenido');
	}
	

}
?>