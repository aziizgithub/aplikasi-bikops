<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_model 
{
	public function getlogin($u,$p)
	{
		$pwd = $p;
		$this->db->where('nmuser',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row) 
			{
				$sess 	= array('nmuser' 		=> $row->nmuser);
								
								
				$this->session->set_userdata($sess);
				redirect('dashboard');
			}
		}
		else 
		{
			$this->session->set_flashdata('info','maaf nmuser atau password salah');
			redirect('login');
		}
	}
}
