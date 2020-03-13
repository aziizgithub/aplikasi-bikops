<?php
class Model_login extends CI_Model{
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
 
}
?>