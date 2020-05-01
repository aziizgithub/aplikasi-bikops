
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
                                        <div class="card">
                            <div class="card-body">
                                         <?php echo $this->session->flashdata('message'); ?>
                               <form class="form-horizontal form-material" action="<?php echo base_url('psikolog/ubah_psikolog'); ?>" method="post">
                                 <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama</label>
                                            <input readonly type="text" name="nmpsig" class="form-control form-control-line" value="<?php echo $psikolog['nmpsig']; ?>">
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Email</label>
                                            <input readonly type="text" name="email" class="form-control form-control-line" value="<?php echo $psikolog['email']; ?>" readonly>
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">bidang</label>
                                            
                                   
                                            <input  readonly type="text" name="nohp" class="form-control form-control-line" value="<?php echo $psikolog['bidang']; ?>">
                                            
                                        </div>
                                       
                                    </div>

                                    

                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">No. Hp</label>
                                            <input  readonly type="text" name="nohp" class="form-control form-control-line" value="<?php echo $psikolog['kota']; ?>">
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">No. Hp</label>
                                            <input  readonly type="text" name="nohp" class="form-control form-control-line" value="<?php echo $psikolog['nohp']; ?>">
                                            
                                        </div>
                                       
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Jenis Kelamin</label>
                                        <input class="form-control form-control-line" type="text" value="<?php echo $psikolog['jk']; ?>" name="jk" readonly>
                                            
                                        </div>
                                   

                                    
                                    </div>

                                    </div>
                                     
<div class="form-group">
                                        <div class="col-sm-12">
                                            
                                            <a href="<?= base_url('client'); ?>" class="btn btn-danger">Back</a>
                                        </div>
                                    </div>
                             </div>
                            </form>
                             </div>
                                    </div>
                                </div>
                                
                                
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

            str += `<div class="outgoing_msg">
              <div class="sent_msg">
                <p>`+data[z].pesan+`</p>
                <span class="time_date"> 11:01 AM    |    June 9</span> </div>
            </div>`
            }else{
              str += `<div class="incoming_msg">
              <div class="incoming_msg_img"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil"> </div>
              <div class="received_msg">
                <div class="received_withd_msg">
                  <p>`+data[z].pesan+`</p>
                  <span class="time_date"> 11:01 AM    |    June 9</span></div>
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
        pengirim: 2,
        pesan: $('#pesan').val()
    }

    $.ajax({
        url: '<?= base_url('client/store'); ?>',
        type : 'POST',
        data: value,
        dataType: 'JSON'
    });

    $('#pesan').val('');
   }
</script>
<script type="text/javascript" src="<?= base_url('assets/admin'); ?>/DataTables/datatables.min.js"></script>



<!-- Start of LiveChat (www.livechatinc.com) code -->
<script type="text/javascript">
  window.__lc = window.__lc || {};
  window.__lc.license = 11902266;
  (function() {
    var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
    lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
  })();
</script>
<noscript>
<a href="https://www.livechatinc.com/chat-with/11902266/" rel="nofollow">Chat with us</a>,
powered by <a href="https://www.livechatinc.com/?welcome" rel="noopener nofollow" target="_blank">LiveChat</a>
</noscript>
<!-- End of LiveChat code -->