 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class konseling extends CI_Controller {
function __construct(){
    parent::__construct();
    $tmp = $this->session->userdata('login');
    if ($tmp == false) {
      redirect('login');
    }
  }
	public function index()
	{
		$this->load->view('v_konseling');
	}		
}
?>

