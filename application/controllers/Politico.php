<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politico extends CI_Controller {

	public function index()
	{

	}

	public function perfil(){
		$id = $this->uri->segment_array()[2];

		$this->load->view("template/header");
		$this->load->view("politicos/perfil");
		$this->load->view("template/footer");

	}
}
