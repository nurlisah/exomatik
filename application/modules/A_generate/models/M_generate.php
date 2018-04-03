<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_generate extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    public function ambil($tbl,$kondisi){
       return $this->db->get_where($tbl,$kondisi);

    }
}
?>