<?php
class Modelpoliticos extends CI_Model {

    public function __construct()
    {
        // Call the CI_Model constructor
        $this->load->database();
        parent::__construct();

    }

    public function teste(){
        $result = $this->db->query("SELECT * FROM test");
        return $result;
    }

}