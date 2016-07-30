<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Codigofacilito extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

	function index(){
		$this->load->library('menu',array('Inicio','Contacto','Cursos','Acerca De'));
		$data['mi_menu'] = $this->menu->construirMenu();
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido', $data);

	}

	function holaMundo(){

		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/bienvenido');
	}

	function nuevo(){
		$this->load->view('codigofacilito/headers');
		$this->load->view('codigofacilito/formulario');
	}
}
?>