<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
    parent::__construct();
    $tmp = $this->session->userdata('login');
    if ($tmp == false) {
      redirect('login');
    }
  }
	public function index()
	{
		
		$this->load->view('view_dashboard');
	}

	
}
