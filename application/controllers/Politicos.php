<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politicos extends CI_Controller {

    public function index()
    {
        $this->load->model("Modelpoliticos");
        $this->load->model("Modelpolitico");
        $data['politicos'] = $this->Modelpoliticos->pegaPoliticos();
        $this->load->model("Modelpaineis");
        $data['categorias'] = $this->Modelpaineis->pegaCategorias();
        $data['partidos'] = $this->Modelpaineis->pegaPartidos();
        $data['estados'] = $this->Modelpaineis->pegaEstados();
        $data['avaliacao'] = $this->Modelpoliticos->pegaThumbPoliticos();
        $this->load->view("template/header");
        $this->load->view("politicos/listagem", $data);
        $this->load->view("template/footer");
    }
}