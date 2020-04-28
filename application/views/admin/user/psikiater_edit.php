
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
                                <a href="<?php echo base_url('admin/psikiater'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
                                  </div>
                              </div>
                                <form class="form-horizontal form-material" action="<?= base_url('admin/edit_psikiater_run'); ?>" method="post">
                                <div class="row">
                                        
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama</label>
                                            <input type="text" name="nmpsik" value="<?php echo $psikiater['nmpsik']; ?>" class="form-control form-control-line">
                                            <input type="hidden" name="id" value="<?php echo $psikiater['idpsik']; ?>" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nmpsik'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Email</label>
                                            <input type="text" name="email" value="<?php echo $psikiater['email']; ?>"class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
                                    </div>
                                    
                                   
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Kota</label>
                                     <select class="form-control" name="kota" value="<?= set_value('kota'); ?>">
                                        <option value="-" >--Pilih Kota--</option>
                                        <option value="<?php echo $psikiater['kota']; ?>" selected ><?php echo $psikiater['kota']; ?></option>
                                        <option value="Bandar Lampung" >Bandar Lampung</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                        <option value="Jakarta">Jakarta</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Kalimantan">Kalimantan</option>
                                    </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">bidang</label>
                                     <select class="form-control" name="bidang" value="<?= set_value('bidang'); ?>" required>
                                        <option value="" >--Pilih Bidang--</option>
                                         <option value="<?php echo $psikiater['bidang']; ?>" selected ><?php echo $psikiater['bidang']; ?></option>
                                        <option value="Anak-Anak" >Anak-Anak</option>
                                        <option value="Remaja">Remaja</option>
                                        <option value="Dewasa">Dewasa</option>
                                    </select>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Penanganan</label>
                                     <select class="form-control" name="penanganan" value="<?= set_value('penanganan'); ?>" required>
                                        <option value="" >--Pilih Penanganan--</option>
                                         <option value="<?php echo $psikiater['penanganan']; ?>" selected ><?php echo $psikiater['penanganan']; ?></option>
                                        <option value="Obat" >Obat</option>
                                        <option value="Terapi">Terapi</option>
                                
                                    </select>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">No. Hp</label>
                                            <input type="text" value="<?php echo $psikiater['nohp']; ?>" name="nohp" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nohp'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3">Jenis Kelamin :</label>
                                            <input <?php if($psikiater['jk']=='L'){echo'checked="checked"';} ?> type="radio" name="jk" value="L">Laki-Laki &nbsp;
                                            <input <?php if($psikiater['jk']=='P'){echo'checked="checked"';} ?> type="radio" name="jk" value="P">Perempuan
                                        </div>
                                        <small class="text-danger"><?php echo form_error('jk'); ?></small>
                                    </div>
                                </div>
                                   
                                   
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">Simpan</button>
                                        </div>
                                    </div>
                                </form>
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