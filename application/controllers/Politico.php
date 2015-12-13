<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politico extends CI_Controller {

	public function index()
	{

	}

	public function perfil(){
		$this->load->model("Modelpolitico");
		if(count($this->uri->segment_array()) > 2){
			$id = $this->uri->segment_array()[2];
			$pagina = $this->uri->segment_array()[3];
			if(isset($this->Modelpolitico->pegaPolitico($id)[0])){
				$this->load->view("template/header");
				$data['candidato'] = $this->Modelpolitico->pegaPolitico($id)[0];
				$data['propostas'] = $this->Modelpolitico->propostasPolitico($id);
				$data['avaliacao'] = $this->Modelpolitico->pegaThumbPolitico($id);

				switch($pagina){
					case "biografia":
						$data["local"] = "biografia";
						$this->load->view("politicos/perfil", $data);
						break;
					case "realizacoes":
						$data["local"] = "realizacoes";
						$this->load->view("politicos/perfil", $data);
						break;
					case "propostas":
						$data["local"] = "propostas";
						$this->load->view("politicos/perfil", $data);
						break;
					case "multimedia":
						$data["local"] = "multimedia";
						$this->load->view("politicos/perfil", $data);
						break;
				}
				$this->load->view("template/footer");
			}
		}else{
			$id = $this->uri->segment_array()[2];
			if(isset($this->Modelpolitico->pegaPolitico($id)[0])){
				$data['candidato'] = $this->Modelpolitico->pegaPolitico($id)[0];
				$data['propostas'] = $this->Modelpolitico->propostasPolitico($id);
				$data["local"] = "inicio";
				$this->load->view("template/header");
				$this->load->view("politicos/perfil", $data);
				$this->load->view("template/footer");
			}
		}
	}
}
