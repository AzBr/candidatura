<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propostas extends CI_Controller {

	public function index()
	{
		$this->load->model("Modelpaineis");
		$this->load->model("Modelpropostas");
		$data['categorias'] = $this->Modelpaineis->pegaCategorias();
		$data['partidos'] = $this->Modelpaineis->pegaPartidos();
		$data['estados'] = $this->Modelpaineis->pegaEstados();
		$data['propostas'] = $this->Modelpropostas->pegaPropostas();
		// $data['categorias'] = array("tes", "test");
		$this->load->view("template/header");
		$this->load->view("propostas/listagem", $data);
		$this->load->view("template/footer");
	}
}