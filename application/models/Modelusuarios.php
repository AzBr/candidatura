<?php
/**
 * Created by PhpStorm.
 * User: glauco
 * Date: 12/12/15
 * Time: 13:43
 */
class Modelusuarios extends CI_Model{


    public function __construct(){

        $this->load->database();
        parent::__construct();
    }

    /**
     * @param $user_id :indnt. do usuario
     */
    public function pegaUsuario($user_id){

        $this->db->query("SELECT * FROM \"Usuario\" WHERE \"id_Usuario\" = ".$user_id);
    }

    public function insereUsuario($user_id,$nome,$uf,$cidade,$flag,$genero){

        $sql = "INSERT INTO \"Usuario\" VALUES (?,?,?,?,?,?)";
        $this->db->query($sql,array($user_id,$nome,$uf,$cidade,$flag,$genero));
    }

    public function alteraUsuario($user_id,$nome,$uf,$cidade,$flag,$genero){

        $this->db->set('Nome',$nome);
        $this->db->set('UF',$uf);
        $this->db->set('Cidade',$cidade);
        $this->db->set('Flag',$flag);
        $this->db->set('Genero',$genero);
        $this->db->where('id_Usuario',$user_id);
        $this->update('Usuario');
    }

}