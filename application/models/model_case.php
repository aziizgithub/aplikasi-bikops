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

     public function get_case(){
    	return $this->db->get('case')->result_array();
    }

    public function add_case(){
    	$data=[
    		"nmcase" => $this->input->post('nmcase'),
            "kategoricase" => $this->input->post('kategoricase'),
         
    	];

    	$this->db->insert('case', $data);
    }

    public function edit_case($id){
    	return $this->db->get_where('case', ['id_case' => $id])->row_array();
    }

    public function edit_case_run(){
    	    	$data=[
    		"nmcase" => $this->input->post('nmcase'),
    		"kategoricase" => $this->input->post('kategoricase')
    	];

    	$this->db->where('id_case',  $this->input->post('id'));
    	$this->db->update('case', $data);
    }

    public function delete_case($id){
    	 $this->db->where('id_case',  $id);
    	$this->db->delete('case');
    }


}