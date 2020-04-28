<?php
class Model_psikiater extends CI_Model{
    
    public function get_psikiater(){
    	return $this->db->get('psikiater')->result_array();
    }

    public function add_psikiater(){
    	$data=[
    		"nmpsik" => $this->input->post('nmpsik'),
            "bidang" => $this->input->post('bidang'),
            "penanganan" => $this->input->post('penanganan'),
            "jk" => $this->input->post('jk'),
            "kota" => $this->input->post('kota'),
            "email" => $this->input->post('email'),
    		"nohp" => $this->input->post('nohp'),
    	];

    	$this->db->insert('psikiater', $data);
    }

    public function edit_psikiater($id){
    	return $this->db->get_where('psikiater', ['idpsik' => $id])->row_array();
    }

    public function edit_psikiater_run(){
    	    	$data=[
    		"nmpsik" => $this->input->post('nmpsik'),
    		"bidang" => $this->input->post('bidang'),
            "email" => $this->input->post('email'),
            "jk" => $this->input->post('jk'),
            "penanganan" => $this->input->post('penanganan'),
    		"kota" => $this->input->post('kota'),
    		"nohp" => $this->input->post('nohp'),
    	];

    	$this->db->where('idpsik',  $this->input->post('id'));
    	$this->db->update('psikiater', $data);
    }

    public function delete_psikiater($id){
    	 $this->db->where('idpsik',  $id);
    	$this->db->delete('psikiater');
    }

}