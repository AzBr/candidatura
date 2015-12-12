<?php
class Modelpropostas extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }
    public function pegaPropostas(){
        $query = $this->db->query("SELECT * FROM \"Proposta\"");
        $result = $query->result();
        return $result;
    }

    public function avaliacaoProposta($id){
        $result = $this->db->query("SELECT * FROM \"Avaliacao_Proposta\" WHERE \"Avaliacao\".\"id_Proposta\" =\"".$id."\"");
        return $result;
    }

    public function rankingPropostasGeral(){
        $result = $this->db->query("SELECT * FROM \"Proposta\" FULL OUTER JOIN \"Avaliacao_Proposta\" ON \"Proposta\".\"id_Proposta\" = \"Avaliacao_Proposta\".\"id_Proposta\" ORDER BY SUM(\"Avaliacao_Proposta\".\"Nota\"");
        return $result;
    }

    public function rankingPropostasRegiao($reg){
        $result = $this->db->query("((SELECT * FROM \"Politico\" INNER JOIN \"Usuario\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\" WHERE \"UF\" = \"".$reg."\") politico INNER JOIN \"Proposta\" ON \"politico\".\"id_Usuario\" = \"Proposta\".\"id_Usuario\") propostas INNER JOIN \"Avaliacao_Proposta\" ON propostas.\"id_Proposta\" = \"Avaliacao_Proposta\".\"id_Proposta\" ORDER BY SUM(\"Avaliacao_Proposta\".\"Nota\")");
        return $result;
    }

    public function rankingPropostasCategoria($cat){
        $result = $this->db->query("(((SELECT * FROM \"Politico\" INNER JOIN \"Usuario\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\") politico INNER JOIN \"Proposta\" ON \"politico\".\"id_Usuario\" = \"Proposta\".\"id_Usuario\") propostas INNER JOIN \"Categorias\" ON \"propostas\".\"id_Categoria\" = \"Categoria\".\"id_Categoria\" WHERE \"Categoria\".\"Nome\" = \"".$cat."\") propostasCat) INNER JOIN \"Avaliacao_Proposta\" ON propostasCat.\"id_Proposta\" = \"Avaliacao_Proposta\".\"id_Proposta\" ORDER BY SUM(\"Avaliacao_Proposta\".\"Nota\")");
        return $result;
    }

}