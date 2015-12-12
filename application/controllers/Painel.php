<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Painel extends CI_Controller {

    public function index() {
        $this->load->model("Modelpaineis");
        $data['cargos'] = $this->Modelpaineis->pegaCargos();
        $data['partidos'] = $this->Modelpaineis->pegaPartidos();
        $this->load->view("template/header");
        $this->load->view("painel/principal", $data);
        $this->load->view("template/footer");
    }

}