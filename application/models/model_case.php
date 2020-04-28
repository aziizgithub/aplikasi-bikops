<?php
class Model_case extends CI_Model{
    
    public function get_anak(){
    	return $this->db->get_where('case',['kategoricase'=> 'Anak-Anak'])->result_array();
    }

    public function get_remaja(){
    	return $this->db->get_where('case',['kategoricase'=> 'Remaja'])->result_array();
    }
    public function get_dewasa(){
    	return $this->db->get_where('case',['kategoricase'=> 'Dewasa'])->result_array();
    }

}