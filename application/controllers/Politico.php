<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politico extends CI_Controller {

	public function index()
	{

	}

	public function perfil(){
		$id = $this->uri->segment_array()[2];

		$this->load->model("Modelpolitico");
		$data['candidato'] = $this->Modelpolitico->pegaPolitico($id);
		$this->load->view("template/header");
		$this->load->view("politicos/perfil", $data);
		$this->load->view("template/footer");
	}
}
