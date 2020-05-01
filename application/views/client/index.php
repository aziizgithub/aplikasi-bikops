
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

                                     <?php echo $this->session->flashdata('message'); ?>
                               <form class="form-horizontal form-material" action="<?php echo base_url('client/ubah_client'); ?>" method="post">   
                                 <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama</label>
                                            <input type="text" name="nama" class="form-control form-control-line" value="<?php echo $client['nama']; ?>">
                                            
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nama'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Email</label>
                                            <input type="text" name="email" class="form-control form-control-line" value="<?php echo $client['email']; ?>" readonly>
                                            
                                        </div>
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jenis Kelamin</label>
                                        <select class="form-control" name="jk" required="">
                                                <?php if ($client['jk'] == 'P'): ?>
                                                <option value="P" selected="">Perempuan</option>
                                                <option value="L" >Laki-laki</option>
                                                <?php else: ?>
                                                    <option value="P" >Perempuan</option>
                                                <option value="L" selected="">Laki-laki</option>
                                                <?php endif ?>
                                            </select>
                                        </div>
                                        <small class="text-danger"><?php echo form_error('umur'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Kota</label>
                                            <select class="form-control" name="kota" value="<?= set_value('kota'); ?>">
                                        <option value="-" >--Pilih Kota--</option>
                                        <option value="<?php echo $psikolog['kota']; ?>" selected ><?php echo $psikolog['kota']; ?></option>
                                        <option value="Bandar Lampung" >Bandar Lampung</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Kalimantan">Kalimantan</option>
                                    </select>
                                            
                                        </div>
                                        <small class="text-danger"><?php echo form_error('kota'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">No. Hp</label>
                                            <input type="text" name="nohp" class="form-control form-control-line" value="<?php echo $client['nohp']; ?>">
                                            
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nohp'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Jenis Kelamin</label>
                                            <select class="form-control" name="jk" required="">
                                                <?php if ($client['jk'] == 'P'): ?>
                                                <option value="P" selected="">Perempuan</option>
                                                <option value="L" >Laki-laki</option>
                                                <?php else: ?>
                                                    <option value="P" >Perempuan</option>
                                                <option value="L" selected="">Laki-laki</option>
                                                <?php endif ?>
                                            </select>
                                            
                                        </div>
                                   
                                    </div>
                                     <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="subbmit" class="btn btn-success">Simpan</button>
                                            <a href="<?= base_url('client'); ?>" class="btn btn-danger">Back</a>
                                        </div>
                                    </div>
                                    </form>
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


<script type="text/javascript" src="<?= base_url('assets/admin'); ?>/DataTables/datatables.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#user').DataTable();
    });
</script>