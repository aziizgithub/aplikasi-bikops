<?php 

function is_logged_in()
{
	$ci = get_instance();

	if(!$ci->session->userdata('login'))
	{
		redirect('login');
	}else
	{
		$role = $ci->session->userdata('role');
		$menu = $ci->uri->segment(1);


		if ($menu == 'psikolog' && $role != 'psikolog') {
			redirect('login/blocked');
		}else if ($menu == 'psikiater' && $role != 'psikiater') {
			redirect('login/blocked');
		}else if ($menu == 'page' && $role != 'client') {
		redirect('login/blocked');
		}else if ($menu == 'admin' && $role != 'admin') {
		redirect('login/blocked');
		}
		
	}
}

?>