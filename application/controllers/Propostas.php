<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Propostas extends CI_Controller {

	public function index()
	{
		$this->load->model("Modelpaineis");
		$this->load->model("Modelpropostas");

		if(isset($_GET['off'])){
			$off = $_GET['off'];
		}else{
			$off = 10;
		}

		$paginas = $this->Modelpropostas->totalPaginas()->count / $off;
		$paginas = ceil($paginas);
		if(isset($_GET['p'])){
			if($_GET['p'] <= $paginas){
				$p = $_GET['p'];
			}else{
				$p = $paginas;
			}
		}else{
			$p = 1;
		}

		if(isset($_GET['partidos'], $_GET['categorias'], $_GET['estados'])){
			$partidos = $_GET['partidos'];
			$categorias = $_GET['partidos'];
			$estados = $_GET['partidos'];
		}else{
			$partidos = null;
			$categorias = null;
			$estados = null;
		}

		$data['categorias'] = $this->Modelpaineis->pegaCategorias();
		$data['partidos'] = $this->Modelpaineis->pegaPartidos();
		$data['estados'] = $this->Modelpaineis->pegaEstados();
		$data['propostas'] = $this->Modelpropostas->pegaPropostas($p, $off, $categorias, $estados, $partidos);
		$data['pagina'] = $p;
		$data['paginas'] = $paginas;

		// $data['categorias'] = array("tes", "test");
		$this->load->view("template/header");
		$this->load->view("propostas/principal", $data);
		$this->load->view("template/footer");
	}
}