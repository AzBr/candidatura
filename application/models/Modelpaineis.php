<?php
class Modelpaineis extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }
    public function pegaCategorias(){
        $query = $this->db->query("SELECT * FROM \"Categorias\"");
        $result = $query->result();
        return $result;
    }

    public function pegaPartidos(){
        $query = $this->db->query("SELECT * FROM \"Partido\"");
        $result = $query->result();
        return $result;
    }

    public function pegaEstados(){
        $query = $this->db->query("SELECT * FROM \"Estados\"");
        $result = $query->result();
        return $result;
    }

    public function pegaCargos(){
        $query = $this->db->query("SELECT * FROM \"Cargos\"");
        $result = $query->result();
        return $result;
    }


}