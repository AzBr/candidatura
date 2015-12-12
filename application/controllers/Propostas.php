<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propostas extends CI_Controller {

	public function index()
	{
		$this->load->view("template/header");
		$this->load->view("propostas/listagem");
		$this->load->view("template/footer");
	}
}
