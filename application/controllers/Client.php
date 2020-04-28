 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
require  'vendor/autoload.php';
class Client extends CI_Controller {
function __construct(){
    parent::__construct();
    is_logged_in();
    $this->load->model('model_client');
    $this->load->model('model_psikolog');
    $this->load->model('model_case');
    $this->load->library('form_validation');
  }

	public function index()
    {
            // if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
            // if ($this->uri->segment('4') == 'aktif') {
            //     return $this->aktif($this->uri->segment('3'));
            // }
            // if ($this->uri->segment('4') == 'ubah') {
            //     return $this->ubah_client($this->uri->segment('3'));
            // }
            // if ($this->uri->segment('4') == 'delete') {
            //     return $this->abaikan($this->uri->segment('3'));
            // }
        // }

        // if (!empty($this->uri->segment('3'))) {
        //     if ($this->uri->segment('3') == 'add') {
        //         return $this->add_client();
        //     }
      
        $data['client'] = $this->model_client->get_client_id($this->session->userdata('nmuser'));
        $data['title'] = "Halaman Client";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_client');
        $this->load->view('client/index');
        $this->load->view('templates/footer');
    }

    public function ubah_client(){
        $this->model_client->edit_client_run_client();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil Update!</div>');
        redirect('client');
    }


    public function konseling()
    {
        //     if (!empty($this->uri->segment('3')) && !empty($this->uri->segment('4'))) {
        //     if ($this->uri->segment('4') == 'aktif') {
        //         return $this->aktif($this->uri->segment('3'));
        //     }
        //     if ($this->uri->segment('4') == 'ubah') {
        //         return $this->ubah_client($this->uri->segment('3'));
        //     }
        //     if ($this->uri->segment('4') == 'delete') {
        //         return $this->abaikan($this->uri->segment('3'));
        //     }
        // }

        // if (!empty($this->uri->segment('3'))) {
        //     if ($this->uri->segment('3') == 'add') {
        //         return $this->add_client();
        //     }
        // }

         $data = [
            "chat" => $this->db->order_by('id_chat','ASC')->get('chat')->result()
        ];
        $data['anak'] = $this->model_case->get_anak();
        $data['remaja'] = $this->model_case->get_remaja();
        $data['dewasa'] = $this->model_case->get_dewasa();
        $data['dws'] = $this->model_psikolog->get_dewasa();
        $data['rmj'] = $this->model_psikolog->get_remaja();
        $data['ank'] = $this->model_psikolog->get_anak();
        $data['title'] = "Halaman Client";
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar_client');
        $this->load->view('client/konseling/konseling', $data);
        $this->load->view('templates/footer');
    }

public function store(){
        $data = [
            'pengirim' =>$this->input->post('pengirim'),
            'pesan' =>$this->input->post('pesan'),
        ];

        $options = array(
            'cluster' => 'ap1',
            'useTLS' => true
          );
          $pusher = new Pusher\Pusher(
                        '4b2b662ed3f5cd235c42',
            'e6c252cfab0fe46c1278',
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