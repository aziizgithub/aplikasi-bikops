<?php
class Model_user extends CI_Model{
    
    public function get_user(){
    			$this->db->select('*');
    			$this->db->from('user');
    			$this->db->where(['role !=' => 'admin']);
    			$this->db->order_by('status DESC', 'role ASC');
    			$query = $this->db->get();
    			return  $query->result_array();
    }

    public function aktif_user($id){
    	$data = [
    		"status" => "aktif"
    	];

    	$this->db->where('iduser', $id);
    	$this->db->update('user', $data);
    }

    public function ubah_user_tampil($id){

    	return $this->db->get_where('user', ['iduser' => $id])->row_array();
    } 

      public function ubah_user($id){
    	$data = [
    		"nmuser" => $this->input->post('nmuser'),
    		"password" => $this->input->post('password'),
    		"role" => $this->input->post('role'),
    		"status" => $this->input->post('status')
    		
    	];

    	$this->db->where('iduser', $id);
    	$this->db->update('user', $data);
    }

    public function delete_user($id){

    	$this->db->where('iduser', $id);
    	$this->db->delete('user');
    }

    public function add_user(){
    	    
    	    $data = [
    		"nmuser" => $this->input->post('nmuser'),
    		"password" => $this->input->post('password'),
    		"role" => $this->input->post('role'),
    		"status" => $this->input->post('status'),
    		"login" =>'',
    		"logout" => ''
    		
    	];

    	$this->db->insert('user', $data);
    }

}