<?php
class Model_auth extends CI_Model{
    //cek nip dan password dosen
    function auth_client($nmuser,$password){
        $query=$this->db->query("SELECT * FROM user WHERE nmuser='$nmuser' AND password='$password' LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_psikolog($nmpsig,$password){
        $query=$this->db->query("SELECT * FROM psikolog WHERE nmpsig='$nmpsig' AND password='$password' LIMIT 1");
        return $query;
    }
 
    public function register(){


        $data = [
            'nama' =>  $this->input->post('nama', true),
            'email' =>  $this->input->post('email', true),
            'jk' =>  $this->input->post('jk', true),
            'umur' =>  $this->input->post('umur', true),
            'kota' =>  $this->input->post('kota', true),
            'nohp' =>  $this->input->post('nohp', true),

        ];

        $this->db->insert('client', $data);

        $datauser = [
            'nmuser' =>  $this->input->post('email', true),
            'password' =>  $this->input->post('password', true),
            'role' =>  'client',
            'status' =>  'nonaktif',
            'login' => '',
            'logout' => ''
        ];

       $this->db->insert('user', $datauser);

      

    }

    public function update_login(){
        $nmuser = $this->input->post('nmuser');

        $data = [
            "login" => date('Y-m-d H:i:s')
        ];

        $this->db->where('nmuser', $nmuser);
        $this->db->update('user', $data);
    }

        public function update_logout(){
        $nmuser = $this->session->userdata('nmuser');

        $data = [
            "logout" => date('Y-m-d H:i:s')
        ];

        $this->db->where('nmuser', $nmuser);
        $this->db->update('user', $data);
    }


}
?>