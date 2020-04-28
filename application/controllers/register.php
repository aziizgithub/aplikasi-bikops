 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register extends CI_Controller {

  function __construct(){
        parent::__construct();
        $this->load->model('model_auth');
        $this->load->library('form_validation');
    }
    
	public function index()
	{
		     if ($this->session->userdata('login')){
            if ($this->session->userdata('role')=='client') {
                redirect('page');
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
		$this->load->view('view_regis');

	}	

	public function register(){

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.nmuser]');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('umur', 'Umur', 'trim|required');
		$this->form_validation->set_rules('kota', 'Kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'No. Hp.', 'trim|required');
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|matches[password]',[
			'matches' => 'Password tidak cocok'

		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[password1]',[
			'matches' => 'Password tidak cocok']);
		$this->form_validation->set_rules('nohp', 'No. Hp.', 'trim|required');


		if ($this->form_validation->run() == false) {
			$this->load->view('view_regis');
		}else{
			$this->model_auth->register();
			$this->session->set_flashdata('message', '<div class="alert alert-info" role="alert"> Akun anda berhasil dibuat! silahkan login!
				</div>');
			redirect('login');
		}

	}

}
?>

