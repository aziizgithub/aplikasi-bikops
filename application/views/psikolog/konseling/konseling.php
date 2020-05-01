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
                                  
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                
                                     <?php echo $this->session->flashdata('message'); ?>
                                
                               <!--  <a href="<?php echo base_url('psikolog/kons/add'); ?>" class="label label-info float-right mr-4">Tambah</a> -->
                             </div>
                            <div class="table-responsive">
                                <table  id='user' class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama Clint</th>
                                            <th class="border-top-0">Kasus</th>
                                            <th class="border-top-0">Kategori Kasus</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php 
                                            $i=1;
                                            foreach ($kons as $key): ?>
                                        <tr>
                                                
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $key['nama'] ?></td>
                                           <td><?php echo $key['kategori'] ?></td>
                                           <td><?php echo $key['case'] ?></td>
                                           <!-- 
                                           <td>
                                               <a href="<?php echo base_url('psikolog/kons'); ?>/<?php echo $key['iduser']; ?>/edit" class="label label-success">Edit</a>
                                               <a href="<?php echo base_url('psikolog/kons'); ?>/<?php echo $key['iduser']; ?>/delete" onclick="return confirm('Yakin Hapus?');" class="label label-danger">Hapus</a>
                                           </td> -->

                                        </tr>
                                            <?php 
                                            $i++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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

 const inbox_chat =document.querySelector('.inbox_chat');
 const chat_list =document.querySelectorAll('.chat_list');

inbox_chat.addEventListener('click', function(e){
    if(e.target.className == 'chat_list'){

        // jumbo.src = e.target.src;
        // jumbo.classList.add('fade');
        // setTimeout(function(){
        //     jumbo.classList.remove('fade');
        // }, 500);

        chat_list.forEach(function(chat_list){
         if (chat_list.classList.contains('active_chat')) {}

        chat_list.className = 'chat_list';
        });

        e.target.classList.add('active_chat');
    }
});



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



