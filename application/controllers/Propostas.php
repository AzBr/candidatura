<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propostas extends CI_Controller {

	public function index()
	{
		$this->load->model('Testmodel');
		echo 	$this->Testmodel->teste();
	}
}
