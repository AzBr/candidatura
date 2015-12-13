<?php

class Modelpolitico extends CI_Model
{
    public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }

    public function pegaPolitico($id)
    {

        $query = $this->db->query("SELECT * FROM \"Usuario\" INNER JOIN \"Politico\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\" WHERE \"Politico\".\"id_Politico\" = '" . $id . "'");
        $result = $query->result();
        return $result;

    }
    public function propostasPolitico($id){
        $query = $this->db->query("SELECT * FROM \"Proposta\" WHERE \"Proposta\".\"id_Politico\" = '".$id."'");
        $result = $query->result();
        return $result;
    }

}
