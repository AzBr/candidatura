<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politico extends CI_Controller {

	public function index()
	{

	}

	public function perfil(){
		$this->load->model("Modelpoliticos");
		if(count($this->uri->segment_array()) > 2){
			$pagina = $this->uri->segment_array()[3];

		}else{
			$id = $this->uri->segment_array()[2];
			$politico = $this->Modelpoliticos->pegaPolitico($id);
			print_r($politico);
			$this->load->view("template/header");
			$this->load->view("politicos/perfil");
			$this->load->view("template/footer");
		}
	}
}
