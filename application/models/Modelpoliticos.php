<?php
class Modelpoliticos extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }

    public function pegaPoliticos(){
        $query = $this->db->query("SELECT *, \"Cargos\".\"Nome\" as \"Cargonome\" FROM \"Cargos\" INNER JOIN (SELECT *, \"Usuario\".\"Nome\" as \"PoliticoNome\" FROM \"Usuario\" INNER JOIN \"Politico\" ON \"Usuario\".\"id_Usuario\" = \"Politico\".\"id_Usuario\" ) a ON \"a\".\"id_Cargo\" = \"Cargos\".\"id_Cargo\" ORDER BY \"Cargos\".\"id_Cargo\"");
        $result = $query->result();
        return $result;
    }



}