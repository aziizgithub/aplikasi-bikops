<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
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
		$this->load->view('view_dashboard');
	}

	
}
