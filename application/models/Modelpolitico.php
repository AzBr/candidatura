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

    public function pegaThumbPolitico($id){
        $query = $this->db->query("SELECT \"a\".\"Nome\", SUM(\"Avaliacao_Politico\".\"Thumb\") as Avaliacao
FROM (\"Avaliacao_Politico\" INNER JOIN (SELECT * FROM \"Usuario\" INNER JOIN \"Politico\" ON \"Usuario\".\"id_Usuario\" = \"Politico\".\"id_Usuario\") a ON \"Avaliacao_Politico\".\"id_Politico\" = \"a\".\"id_Politico\")
WHERE \"a\".\"id_Politico\" = '".$id."'
GROUP BY \"a\".\"Nome\" ORDER BY Avaliacao DESC");
        $result = $query->result();
        return $result;
    }

    public function propostasPolitico($id){
        $query = $this->db->query("SELECT * FROM \"Proposta\" WHERE \"Proposta\".\"id_Politico\" = '".$id."'");
        $result = $query->result();
        return $result;
    }

}
