<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function index()
	{
		$this->load->view("template/header");
		$this->load->view("principal/index");
		$this->load->view("template/footer");
	}

	public function sobre()
	{
		$this->load->view("template/header");
		$this->load->view("principal/sobre");
		$this->load->view("template/footer");
	}

	public function lancecampanha()
	{
		$this->load->view("template/header");
		$this->load->view("principal/campanha");
		$this->load->view("template/footer");
	}

}
