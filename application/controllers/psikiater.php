 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class psikiater extends CI_Controller {
function __construct(){
    parent::__construct();
    is_logged_in();
  }
	public function index()
	{
		$this->load->view('v_psikiater');
	}		
}
?>

