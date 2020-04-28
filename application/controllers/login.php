<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_auth');
        $this->load->library('form_validation');
    }
    

public function index()
    {
        if ($this->session->userdata('login')){
            if ($this->session->userdata('role')=='client') {
                redirect('client');
            }
            if ($this->session->userdata('role')=='psikolog') {
                redirect('psikolog');
            }
            if ($this->session->userdata('role')=='pskiater') {
                redirect('pskiater');
            }
            if ($this->session->userdata('role')=='admin') {
                redirect('admin');
            }
        }



        $this->form_validation->set_rules('nmuser', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if($this->form_validation->run() == false){
        $data['title'] = 'login Page';
       $this->load->view('view_login');
    }else{

        $this->_login();
        }
    }
        
    private function _login(){
        $nmuser = $this->input->post('nmuser');
        $password = $this->input->post('password');

        

        $user = $this->db->get_where('user', ['nmuser' => $nmuser])->row_array();
        
 
        //usernya ada

        if($user){
            //jika usernya aktif
            if($user['status'] == 'aktif'){
                //cek password
                if($password == $user['password']){
                    
                 $login = [
                        'login' => true,
                        'role' => $user['role'],
                        'nmuser' => $user['nmuser'],
                        'type'=> 'pengirim'
                    ];
                    
                 $this->session->set_userdata($login);

                    if($user['role'] == 'client' ){
                   $data = $this->db->get_where('client', ['email'=>$user['nmuser']])->row_array();
                 $this->session->set_userdata($data);
                 $this->model_auth->update_login();
                        redirect('client');
                    }else if ($user['role'] == 'pskiater' ) {
                        $data = $this->db->get_where('pskiater', ['email'=>$user['nmuser']])->result_array();
                    $this->session->set_userdata($data);
                    $this->model_auth->update_login();
                        redirect('pskiater');
                    }
                    else if ($user['role'] == 'psikolog' ) {
                        $data = $this->db->get_where('psikolog', ['email'=>$user['nmuser']])->result_array();
                    $this->session->set_userdata($data);
                    $this->model_auth->update_login();
                        redirect('psikolog');
                    }
                    else if ($user['role'] == 'admin' ) {
                        $data = $this->db->get_where('user', ['nmuser'=>$user['nmuser']])->result_array();
                        $this->model_auth->update_login();
                    $this->session->set_userdata($data);
                        redirect('admin');
                    }
                    else{

                    redirect('login');
                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"> Wrong Password
</div>');
            redirect('login');
                }
           
            }else{
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User is not Active </div>');
                redirect('login');
            }
        }else{
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">User is not Available </div>');
            redirect('login');
        }
    }



    public function blocked(){
        $this->load->view('errors/index.html');
    }


    // function index(){
    //     $this->load->view('view_login');
    // }
 
    // function auth(){
       
 
    //     $cek_client=$this->model_login->auth_client($nmuser,$password);
 
    //     if($cek_client->num_rows() > 0){ //jika login sebagai client
    //                     $data=$cek_client->row_array();
    //             $this->session->set_userdata('masuk',TRUE);
    //              if($data['level']=='1'){ //Akses client
    //                 $this->session->set_userdata('akses','1');
    //                 $this->session->set_userdata('ses_id',$data['iduser']);
    //                 $this->session->set_userdata('ses_nama',$data['nmuser']);
    //                 redirect('page');
 
    //              }else{ //akses client
    //                 $this->session->set_userdata('akses','2');
    //                 $this->session->set_userdata('ses_id',$data['iduser']);
    //                 $this->session->set_userdata('ses_nama',$data['nmuser']);
    //                 redirect('page');
    //              }
 
    //     }else{ //jika login sebagai psikolog
    //                 $cek_psikolog=$this->model_login->auth_psikolog($nmpsig,$password);
    //                 if($cek_psikolog->num_rows() > 0){
    //                         $data=$cek_psikolog->row_array();
    //                 $this->session->set_userdata('masuk',TRUE);
    //                         $this->session->set_userdata('akses','3');
    //                         $this->session->set_userdata('ses_id',$data['idpsig']);
    //                         redirect('page');
    //                 }else{  // jika nmuser dan password tidak ditemukan atau salah
    //                         $url=base_url();
    //                         echo $this->session->set_flashdata('msg','nmuser Atau Password Salah');
    //                         redirect($url);
    //                 }
    //     }
 
    // }
 
    function logout(){
        $this->model_auth->update_logout();
        $this->session->sess_destroy();
        redirect('login');
    }
 
}