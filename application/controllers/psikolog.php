 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
require  'vendor/autoload.php';
class psikolog extends CI_Controller {
function __construct(){
    parent::__construct();
    is_logged_in();
      $this->load->model('model_psikolog');
    $this->load->library('form_validation');
  }
  public function index(){

	        //     if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
        //     if ($this->uri->segment('4') == 'aktif') {
        //         return $this->aktif($this->uri->segment('3'));
        //     }
        //     if ($this->uri->segment('4') == 'ubah') {
        //         return $this->ubah_psikolog($this->uri->segment('3'));
        //     }
        //     if ($this->uri->segment('4') == 'delete') {
        //         return $this->abaikan($this->uri->segment('3'));
        //     }
        // }

        // if (!empty($this->uri->segment('3'))) {
        //     if ($this->uri->segment('3') == 'add') {
        //         return $this->add_psikolog();
        //     }
        // }
        
        $data['psikolog'] = $this->model_psikolog->get_psikolog_id($this->session->userdata('nmuser'));
        $data['title'] = "Halaman psikolog";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_psikolog');
        $this->load->view('psikolog/index');
        $this->load->view('templates/footer');	
}

    public function ubah_psikolog(){
        $this->model_psikolog->edit_psikolog_run_psikolog();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Update!</div>');
        redirect('psikolog');
    }
public function konseling()
    {
       
     $data = [
            "chat" => $this->db->order_by('id_chat','ASC')->get('chat')->result(),
            "recent" => $this->db->get('recent')->result() 
        ];
        $data['title'] = "Halaman psikolog";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_psikolog');
        $this->load->view('psikolog/konseling/konseling', $data);
        $this->load->view('templates/footer');
    }

    public function store(){
        $data = [
            'pengirim' =>$this->input->post('pengirim'),
            'pesan' =>$this->input->post('pesan'),
            'time' => time(),
        ];

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
          );
          $pusher = new Pusher\Pusher(
            'b5c8aecf432ae4bf5588',
            'fe60094ef18acffa3692',
            '988544',
            $options
          );

        
        

        if ($this->db->insert('chat', $data)) {
             $push = $this->db->order_by('id_chat','ASC');
             $push = $this->db->get('chat')->result();

             foreach ($push as $key ) {
                $data_pusher[] = $key;
             }
             $pusher->trigger('my-channel', 'my-event', $data_pusher);
        }
    }
}

