
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
                                <a href="<?php echo base_url('admin/psikolog'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
                                  </div>
                              </div>
                                <form class="form-horizontal form-material" action="<?= base_url('admin/edit_psikolog_run'); ?>" method="post">
                                <div class="row">
                                        
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama</label>
                                            <input type="text" name="nmpsig" value="<?php echo $psikolog['nmpsig']; ?>" class="form-control form-control-line">
                                            <input type="hidden" name="id" value="<?php echo $psikolog['idpsig']; ?>" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nmpsig'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Email</label>
                                            <input type="text" name="email" value="<?php echo $psikolog['email']; ?>"class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('email'); ?></small>
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
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">bidang</label>
                                     <select class="form-control" name="bidang" value="<?= set_value('kota'); ?>" required>
                                         <option value="<?php echo $psikolog['bidang']; ?>" selected ><?php echo $psikolog['bidang']; ?></option>
                                        <option value="" >--Pilih Bidang--</option>
                                        
                                        <option value="Anak-Anak" >Anak-Anak</option>
                                        <option value="Remaja">Remaja</option>
                                        <option value="Dewasa">Dewasa</option>
                                    </select>
                                    </div>
                                </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">No. Hp</label>
                                            <input type="text" value="<?php echo $psikolog['nohp']; ?>" name="nohp" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nohp'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-3">Jenis Kelamin :</label>
                                            <input <?php if($psikolog['jk']=='L'){echo'checked="checked"';} ?> type="radio" name="jk" value="L">Laki-Laki &nbsp;
                                            <input <?php if($psikolog['jk']=='P'){echo'checked="checked"';} ?> type="radio" name="jk" value="P">Perempuan
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