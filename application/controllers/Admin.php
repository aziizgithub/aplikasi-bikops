 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
function __construct(){
    parent::__construct();
    is_logged_in();
    $this->load->model('model_client');
    $this->load->model('model_psikiater');
    $this->load->model('model_psikolog');
    $this->load->model('model_user');
    $this->load->library('form_validation');
  }
	public function index()
	{
			if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
			if ($this->uri->segment('4') == 'aktif') {
				return $this->aktif($this->uri->segment('3'));
			}
			if ($this->uri->segment('4') == 'ubah') {
				return $this->ubah_user($this->uri->segment('3'));
			}
			if ($this->uri->segment('4') == 'delete') {
				return $this->abaikan($this->uri->segment('3'));
			}
		}

		if (!empty($this->uri->segment('3'))) {
			if ($this->uri->segment('3') == 'add') {
				return $this->add_user();
			}
		}

		$data['user'] = $this->model_user->get_user();
		$data['title'] = "Halaman Admin";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/index');
		$this->load->view('templates/footer');
	}


	public function aktif(){
		$this->model_user->aktif_user($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Diaktifkan!</div>');
		redirect('admin');
	}

		public function ubah_user(){

		$this->form_validation->set_rules('nmuser', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	

		if ($this->form_validation->run() == false) {
		
		$data['user'] = $this->model_user->ubah_user_tampil($this->uri->segment('3'));
		$data['title'] = "Halaman Admin";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/user_edit');
		$this->load->view('templates/footer');

		}else{
		$this->model_user->ubah_user($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Dinonaktifkan!</div>');
		redirect('admin');
			
		}
	}

		public function abaikan(){
		$this->model_user->delete_user($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Berhasil Dihapus!</div>');
		redirect('admin');
	}

	public function add_user(){
		$data['title'] = "Halaman Admin";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/user_add');
		$this->load->view('templates/footer');
	}

public function add_user_process(){

		$this->form_validation->set_rules('nmuser', 'Username', 'trim|required|is_unique[user.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
	

		if ($this->form_validation->run() == false) {
		
		
		$data['title'] = "Halaman Admin";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/user_add');
		$this->load->view('templates/footer');

		}else{
		$this->model_user->add_user();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Tambah User!</div>');
		redirect('admin');
			
		}
	}


		public function client()
	{
		if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
			if ($this->uri->segment('4') == 'edit') {
				return $this->edit_client($this->uri->segment('3'));
			}
			if ($this->uri->segment('4') == 'delete') {
				return $this->delete_client($this->uri->segment('3'));
			}
		}

		if (!empty($this->uri->segment('3'))) {
			if ($this->uri->segment('3') == 'add') {
				return $this->add_client();
			}
		}

		$data['client'] = $this->model_client->get_client();
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/client');
		$this->load->view('templates/footer');
	}


	public function add_client(){
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/client_add');
		$this->load->view('templates/footer');
	}

	public function add_client_run(){

		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|is_unique[client.email]');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('umur', 'umur', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
				$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/client_add');
		$this->load->view('templates/footer');
		}else{

	$this->model_client->add_client();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data berhasil</div>');
		redirect('admin/client');
		
		}
	}

	public function edit_client(){

		$data['client'] =$this->model_client->edit_client($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/client_edit');
		$this->load->view('templates/footer');

	}

	public function edit_client_run(){
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('umur', 'umur', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
		$data['client'] =$this->model_client->edit_client($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/client_edit');
		$this->load->view('templates/footer');
		}else{

		$this->model_client->edit_client_run();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Data berhasil</div>');
		redirect('admin/client');
		}
	}

	public function delete_client(){

		$this->model_client->delete_client($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus Data berhasil</div>');
		redirect('admin/client');
	}




	public function psikolog()
	{
		if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
			if ($this->uri->segment('4') == 'edit') {
				return $this->edit_psikolog($this->uri->segment('3'));
			}
			if ($this->uri->segment('4') == 'delete') {
				return $this->delete_psikolog($this->uri->segment('3'));
			}
		}

		if (!empty($this->uri->segment('3'))) {
			if ($this->uri->segment('3') == 'add') {
				return $this->add_psikolog();
			}
		}

		$data['psikolog'] = $this->model_psikolog->get_psikolog();
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikolog');
		$this->load->view('templates/footer');
	}

public function add_psikolog(){
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikolog_add');
		$this->load->view('templates/footer');
	}

	public function add_psikolog_run(){

		$this->form_validation->set_rules('nmpsig', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[psikolog.email]');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
				$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikolog_add');
		$this->load->view('templates/footer');
		}else{

	$this->model_psikolog->add_psikolog();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data berhasil</div>');
		redirect('admin/psikolog');
		
		}
	}

	public function edit_psikolog(){

		$data['psikolog'] =$this->model_psikolog->edit_psikolog($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikolog_edit');
		$this->load->view('templates/footer');

	}

	public function edit_psikolog_run(){
		$this->form_validation->set_rules('nmpsig', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
		$data['psikolog'] =$this->model_psikolog->edit_psikolog($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikolog_edit');
		$this->load->view('templates/footer');
		}else{

		$this->model_psikolog->edit_psikolog_run();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Data berhasil</div>');
		redirect('admin/psikolog');
		}
	}

	public function delete_psikolog(){

		$this->model_psikolog->delete_psikolog($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus Data berhasil</div>');
		redirect('admin/psikolog');
	}













public function psikiater()
	{
		if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
			if ($this->uri->segment('4') == 'edit') {
				return $this->edit_psikiater($this->uri->segment('3'));
			}
			if ($this->uri->segment('4') == 'delete') {
				return $this->delete_psikiater($this->uri->segment('3'));
			}
		}

		if (!empty($this->uri->segment('3'))) {
			if ($this->uri->segment('3') == 'add') {
				return $this->add_psikiater();
			}
		}

		$data['psikiater'] = $this->model_psikiater->get_psikiater();
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikiater');
		$this->load->view('templates/footer');
	}

public function add_psikiater(){
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikiater_add');
		$this->load->view('templates/footer');
	}

	public function add_psikiater_run(){

		$this->form_validation->set_rules('nmpsik', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[psikiater.email]');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('bidang', 'bidang', 'trim|required');
		$this->form_validation->set_rules('penanganan', 'penanganan', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
				$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikiater_add');
		$this->load->view('templates/footer');
		}else{

	$this->model_psikiater->add_psikiater();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Tambah Data berhasil</div>');
		redirect('admin/psikiater');
		
		}
	}

	public function edit_psikiater(){

		$data['psikiater'] =$this->model_psikiater->edit_psikiater($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikiater_edit');
		$this->load->view('templates/footer');

	}

	public function edit_psikiater_run(){
		$this->form_validation->set_rules('nmpsik', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('jk', 'jk', 'trim|required');
		$this->form_validation->set_rules('bidang', 'bidang', 'trim|required');
		$this->form_validation->set_rules('penanganan', 'penanganan', 'trim|required');
		$this->form_validation->set_rules('kota', 'kota', 'trim|required');
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required');
	


		if ($this->form_validation->run() == false) {
		
		$data['psikiater'] =$this->model_psikiater->edit_psikiater($this->uri->segment('3'));
		$data['title'] = "Kelola User";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar_admin');
		$this->load->view('admin/user/psikiater_edit');
		$this->load->view('templates/footer');
		}else{

		$this->model_psikiater->edit_psikiater_run();
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Edit Data berhasil</div>');
		redirect('admin/psikiater');
		}
	}

	public function delete_psikiater(){

		$this->model_psikiater->delete_psikiater($this->uri->segment('3'));
		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Hapus Data berhasil</div>');
		redirect('admin/psikiater');
	}
}


?>

