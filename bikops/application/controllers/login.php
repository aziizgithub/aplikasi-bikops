<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_login');
    }
 
    function index(){
        $this->load->view('view_login');
    }
 
    function auth(){
        $nmuser=htmlspecialchars($this->input->post('nmuser',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_client=$this->model_login->auth_client($nmuser,$password);
 
        if($cek_client->num_rows() > 0){ //jika login sebagai client
                        $data=$cek_client->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses client
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['iduser']);
                    $this->session->set_userdata('ses_nama',$data['nmuser']);
                    redirect('page');
 
                 }else{ //akses client
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['iduser']);
                    $this->session->set_userdata('ses_nama',$data['nmuser']);
                    redirect('page');
                 }
 
        }else{ //jika login sebagai psikolog
                    $cek_psikolog=$this->model_login->auth_psikolog($nmpsig,$password);
                    if($cek_psikolog->num_rows() > 0){
                            $data=$cek_psikolog->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['idpsig']);
                            redirect('page');
                    }else{  // jika nmuser dan password tidak ditemukan atau salah
                            $url=base_url();
                            echo $this->session->set_flashdata('msg','nmuser Atau Password Salah');
                            redirect($url);
                    }
        }
 
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('http://localhost/aplikasi-bikops/bikops/');
        redirect($url);
    }
 
}