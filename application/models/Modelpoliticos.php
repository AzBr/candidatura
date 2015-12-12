<?php
class Modelpoliticos extends CI_Model {

    public function __construct(){
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }

    public function pegaPoliticos(){
        $result = $this->db->query("SELECT * FROM \"Usuario\" INNER JOIN \"Politico\" ON \"Usuario\".\"id_Usuario\" = \"Politico\".\"id_Usuario\"");
        return $result;
    }

    public function avaliacaoPolitico($id){
        $result = $this->db->query("SELECT * FROM \"Avaliacao_Politico\" WHERE \"Avaliacao\".\"id_Politico\" =".$id."\"");
        return $result;
    }

    public function politicosPorRegiao($uf){
        $result = $this->db->query("(SELECT * FROM \"Politico\" INNER JOIN \"Usuario\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\") a INNER JOIN \"Estados\" ON \"a\".\"".$uf."\" = \"Estados\".\"".$uf."\"");
        return $result;
    }

    public function politicosPorMunicipio($cidade){
        $result = $this->db->query("(SELECT * FROM \"Politico\" INNER JOIN \"Usuario\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\") a INNER JOIN \"Cidades\" ON \"a\".\"".$cidade."\" = \"Cidades\".\"".$cidade."\"");
        return $result;
    }

    public function politicosPorPartido($num){
        $result = $this->db->query("(SELECT * FROM \"Usuario\" INNER JOIN \"Politico\" ON \"Usuario\".\"id_Usuario\" = \"Politico\".\"id_Usuario\") a INNER JOIN \"Partido\" ON \"Partido\".\"".$num."\" = \"Politico\".\"".$num."\"");
        return $result;
    }

    public function politicosPorReputacao(){
        $result = $this->db->query("SELECT SUM(Thumb) FROM \"Avaliacao_Politico\" WHERE \"id_Politico\" = ".$id);
        return $result;
    }

    public function rankingPoliticosGeralThumb(){
        $result = $this->db->query("(SELECT * FROM \"Politico\" INNER JOIN \"Usuario\" ON \"Politico\".\"id_Usuario\" = \"Usuario\".\"id_Usuario\") politicos FULL OUTER JOIN \"Avaliacao_Politico\" ON \"politicos\".\"id_Usuario\" = \"Avaliacao_Politico\".\"id_Usuario\" ORDER BY SUM(\"Avaliacao_Politico\".\"Thumb\")");
        return $result;
    }


}