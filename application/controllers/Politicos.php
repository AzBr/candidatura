<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politicos extends CI_Controller {

    public function index()
    {
        $this->load->model("Modelpoliticos");
        $data['politicos'] = $this->Modelpoliticos->pegaPoliticos();
        $this->load->view("template/header");
        $this->load->view("politicos/listagem", $data);
        $this->load->view("template/footer");
    }
}