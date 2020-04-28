<?php 

$tipe = $this->session->userdata('type')

 ?>
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="alert alert-primary" role="alert">
                                  <h4 class="alert-heading">Selamat Datang!</h4>
                                  <p>selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami selamat datang di konseling kami</p>
                                  <hr>
                                  <p class="mb-0">Untuk melanjutkan konseling ini, silahkan isi form berikut dna ikuti langkah-langkahnya.</p>
                                </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                           <label class="col-md-6">Silahkan Pilih Kategori</label>
                                         <select class="form-control" name="bidang" value="<?= set_value('bidang'); ?>" required>
                                            <option value="" >--Pilih Kategori--</option>
                                            
                                            <option value="Anak-Anak" >Anak-Anak</option>
                                            <option value="Remaja">Remaja</option>
                                            <option value="Dewasa">Dewasa</option>
                                        </select>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <!-- <div class="row">
                                    <div class="col">
                                        <div class="messaging">
      <div class="inbox_msg">
        <div class="inbox_people">
          <div class="headind_srch">
            <div class="recent_heading">
              <h4>Recent</h4>
            </div>
            <div class="srch_bar">
              <div class="stylish-input-group">
                <input type="text" class="search-bar"  placeholder="Search" >
                <span class="input-group-addon">
                <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                </span> </div>
            </div>
          </div>
          <div class="inbox_chat">
            <div class="chat_list active_chat">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput <span class="chat_date">Dec 25</span></h5>
                  <p>Test, which is a new approach to have all solutions 
                    astrology under one roof.</p>
                </div>
              </div>
            </div>
            <?php foreach ($recent as $key): ?>
        <?php $last_chat = $this->db->query("SELECT max(id_chat) as latest, pesan FROM `chat` WHERE pengirim = '$key->pengirim' AND penerima = '$key->penerima'")->row_array(); ?>
            <div class="chat_list">
              <div class="chat_people">
                <div class="chat_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
                <div class="chat_ib">
                  <h5>Sunil Rajput</h5>
                  <p><?= $last_chat["pesan"]; ?></p>
                </div>
              </div>
            </div>
            <?php endforeach ?>
            
           
            
          
            
          </div>
        </div>
        <div class="mesgs">
          <div class="msg_history">
      
            <div id="notip"> 
            <?php foreach ($chat as $list): ?>
            <?php if ($list->pengirim == 2): ?>
             <div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p><?php echo  $list->pesan;?></p>
                  <span class="time_date"> <?php echo date('h:i',$list->time); ?> |    <?php echo date('F j',$list->time); ?></span></div>
              </div>
            </div>
           <?php else: ?>
            <div class="outgoing_msg">
              <div class="sent_msg">
                <p><?php echo  $list->pesan;?></p>
                <span class="time_date"> <?php echo date('h:i',$list->time); ?> | <?php echo date('F j',$list->time); ?></span>
            </div>
            </div>
 <?php endif ?>
            <?php endforeach ?>
            
                
            </div>
            
            
          </div>
          <div class="type_msg">
            <div class="input_msg_write">
              
              <input id="pesan" type="text" class="write_msg" placeholder="Type a message" />
              <button class="msg_send_btn" type="submit" value="send" onclick="store()"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
            </div>
          </div>
        </div>
      </div>
      
      
     
      
    </div>
                                    </div>
                                </div> -->
                                
                             </div>
                            
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- Table -->
                <!-- ============================================================== -->
               
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->

  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('b5c8aecf432ae4bf5588', {
      cluster: 'ap1',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      // alert(JSON.stringify(data));
      addData(data);
    });

    function addData(data){
        var str = '';
        for(var z in data){
            if (data[z].pengirim == 1) {

arrbulan = ["January","February","March","April","May","June","July","August","September","October","November","December"];
var tanggal = new Date().getDate(data[z].time)
var bulan = new Date().getMonth(data[z].time)
var jam = new Date().getHours(data[z].time)
var menit = new Date().getMinutes(data[z].time)

            str += `<div class="outgoing_msg">
              <div class="sent_msg">
                <p>`+data[z].pesan+`</p>
                <span class="time_date">`+new Date().getHours(data[z].time)+`:`+new Date().getMinutes(data[z].time)+` | `+arrbulan[bulan]+` `+new Date().getDate(data[z].time)+`</span> </div>
            </div>`
            }else{
              str += `<div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>`+data[z].pesan+`</p>
                  <span class="time_date">`+jam+`:`+menit+` | `+arrbulan[bulan]+` `+tanggal+`</span></div>
              </div>
            </div>`
            }
        }
        $('#notip').html(str);
    }

    $('#pesan').on('keyup', function(e){
        if (e.keyCode === 13) {
            addData(data);
        }
    });

  </script>
<script type="text/javascript">
   function store(){
    var value = {
        pengirim: 1,
        pesan: $('#pesan').val()
    }

    $.ajax({
        url: '<?= base_url('psikolog/store'); ?>',
        type : 'POST',
        data: value,
        dataType: 'JSON'
    });

    $('#pesan').val('');
   }
</script>
<script type="text/javascript" src="<?= base_url('assets/admin'); ?>/DataTables/datatables.min.js"></script>



