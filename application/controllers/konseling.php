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


  public function anak(){
    $this->load->model('model_case');
            $data['anakk'] = $this->model_case->get_anak();
        $data['remaja'] = $this->model_case->get_remaja();
        $data['dewasa'] = $this->model_case->get_dewasa();

    $data['anak'] = $this->db->order_by('jlh_kasus', 'DESC')->get_where('psikolog', [ "bidang" => "Anak-Anak"])->result_array();


    $this->load->view('v_anak', $data);
  }


  public function remaja(){
    $this->load->model('model_case');
        $data['remajak'] = $this->model_case->get_remaja();

    $data['remaja'] = $this->db->order_by('jlh_kasus', 'DESC')->get_where('psikolog', [ "bidang" => "Remaja"])->result_array();
    $this->load->view('v_remaja', $data);
  }

   public function dewasa(){
    $this->load->model('model_case');
        $data['dewasak'] = $this->model_case->get_dewasa();

    $data['dewasa'] = $this->db->order_by('jlh_kasus', 'DESC')->get_where('psikolog', [ "bidang" => "Dewasa"])->result_array();
    $this->load->view('v_dewasa', $data);
  }

  




public function pilihpsik(){

  $data=[
        "iduser" => $this->session->userdata('iduser'),
        "idpsig" => $this->uri->segment('3'),
        "kategori" => $this->uri->segment('4'),
        "case" => '-'
      
      ];

      $this->db->insert('transaksi', $data);
$psig = $this->db->get_where('psikolog', ["idpsig" => $this->uri->segment('3')])->row_array();
      $data=[
        "jlh_kasus" => $psig["jlh_kasus"]+1
      ];

      $this->db->where('idpsig', $psig["idpsig"]);
      $this->db->update('psikolog', $data);
      $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil!</div>');


                 $this->session->set_userdata($psig);
    redirect('client/konseling');
}

}

?>

