<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politicos extends CI_Controller {

    public function index()
    {
        $this->load->model("Modelpoliticos");
        $data['politicos'] = $this->Modelpoliticos->pegaPoliticos();
        $this->load->model("Modelpaineis");
        $data['categorias'] = $this->Modelpaineis->pegaCategorias();
        $data['partidos'] = $this->Modelpaineis->pegaPartidos();
        $data['estados'] = $this->Modelpaineis->pegaEstados();
        $this->load->view("template/header");
        $this->load->view("politicos/listagem", $data);
        $this->load->view("template/footer");
    }
}