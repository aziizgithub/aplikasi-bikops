<?php
class Model_psikolog extends CI_Model{
    
    public function get_psikolog(){
    	return $this->db->get('psikolog')->result_array();
    }
    public function add_psikolog(){
    	$data=[
    		"nmpsig" => $this->input->post('nmpsig'),
    		"bidang" => $this->input->post('bidang'),
    		"jk" => $this->input->post('jk'),
    		"kota" => $this->input->post('kota'),
    		"email" => $this->input->post('email'),
    		"nohp" => $this->input->post('nohp'),
    	];
    	$this->db->insert('psikolog', $data);
    }

    public function edit_psikolog($id){
    	return $this->db->get_where('psikolog', ['idpsig' => $id])->row_array();
    }

    public function edit_psikolog_run(){
    	    	$data=[
    		"nmpsig" => $this->input->post('nmpsig'),
    		"bidang" => $this->input->post('bidang'),
    		"jk" => $this->input->post('jk'),
    		"kota" => $this->input->post('kota'),
    		"email" => $this->input->post('email'),
    		"nohp" => $this->input->post('nohp'),
    	];

    	$this->db->where('idpsig',  $this->input->post('id'));
    	$this->db->update('psikolog', $data);
    }

    public function delete_psikolog($id){
    	 $this->db->where('idpsig',  $id);
    	$this->db->delete('psikolog');
    }

    public function get_psikolog_id($id){
        return $this->db->get_where('psikolog', ['email' => $id])->row_array();
    }


    public function get_anak(){
        return $this->db->get_where('psikolog',['bidang'=> 'Anak-Anak'])->result_array();
    }

    public function get_remaja(){
        return $this->db->get_where('psikolog',['bidang'=> 'Remaja'])->result_array();
    }
    public function get_dewasa(){
        return $this->db->get_where('psikolog',['bidang'=> 'Dewasa'])->result_array();
    }

    public function edit_psikolog_run_psikolog(){
         $data=[
            "nmpsig" => $this->input->post('nmpsig'),
            "email" => $this->input->post('email'),
            "jk" => $this->input->post('jk'),
            "bidang" => $this->input->post('bidang'),
            "kota" => $this->input->post('kota'),
            "nohp" => $this->input->post('nohp'),
        ];

        $this->db->where('email',  $this->input->post('email'));
        $this->db->update('psikolog', $data);
    }

}