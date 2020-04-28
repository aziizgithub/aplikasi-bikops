<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    is_logged_in();
  }
 
  function index(){
    
 
    $this->load->view('view_dashboard');
  }
 
  // function data_client(){
  //   // function ini hanya boleh diakses oleh admin dan dosen
  //   if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
  //     $this->load->view('view_dashboard');
  //   }else{
  //     echo "Anda tidak berhak mengakses halaman ini";
  //   }
 
  // }
 
  // function data_psikolog(){
  //   // function ini hanya boleh diakses oleh admin dan dosen
  //   if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
  //     $this->load->view('view_regis');
  //   }else{
  //     echo "Anda tidak berhak mengakses halaman ini";
  //   }
  // }
}