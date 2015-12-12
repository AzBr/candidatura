<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Politicos extends CI_Controller {

    public function index()
    {
        $this->load->view("template/header");
        $this->load->view("politicos/listagem");
        $this->load->view("template/footer");
    }
}
