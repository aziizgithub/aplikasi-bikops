<?php
class Model_client extends CI_Model{
    
    public function get_client(){
    	return $this->db->get('client')->result_array();
    }

    public function add_client(){
    	$data=[
    		"nama" => $this->input->post('nama'),
    		"email" => $this->input->post('email'),
    		"jk" => $this->input->post('jk'),
    		"umur" => $this->input->post('umur'),
    		"kota" => $this->input->post('kota'),
    		"nohp" => $this->input->post('nohp'),
    	];

    	$this->db->insert('client', $data);
    }

    public function edit_client($id){
    	return $this->db->get_where('client', ['iduser' => $id])->row_array();
    }

    public function edit_client_run(){
    	    	$data=[
    		"nama" => $this->input->post('nama'),
    		"email" => $this->input->post('email'),
    		"jk" => $this->input->post('jk'),
    		"umur" => $this->input->post('umur'),
    		"kota" => $this->input->post('kota'),
    		"nohp" => $this->input->post('nohp'),
    	];

    	$this->db->where('iduser',  $this->input->post('id'));
    	$this->db->update('client', $data);
    }

    public function delete_client($id){
    	 $this->db->where('iduser',  $id);
    	$this->db->delete('client');
    }

    public function get_client_id($id){
        return $this->db->get_where('client', ['email' => $id])->row_array();
    }

       public function edit_client_run_client(){
                $data=[
            "nama" => $this->input->post('nama'),
            "email" => $this->input->post('email'),
            "jk" => $this->input->post('jk'),
            "umur" => $this->input->post('umur'),
            "kota" => $this->input->post('kota'),
            "nohp" => $this->input->post('nohp'),
        ];

        $this->db->where('email',  $this->input->post('email'));
        $this->db->update('client', $data);
    }

}