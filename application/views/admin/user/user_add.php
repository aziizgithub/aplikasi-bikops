
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
                                <a href="<?php echo base_url('admin'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
                                  </div>
                              </div>
                                <form class="form-horizontal form-material" action="<?php echo base_url('admin/add_user_process'); ?>" method="post">
                                <div class="row">
                                        
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Username</label>
                                            <input type="text" name="nmuser" class="form-control form-control-line">
                                            
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nmuser'); ?></small>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Password</label>
                                            <input type="password" name="password" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('password'); ?></small>
                                    </div>
                                    
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Role</label>
                                     <select class="form-control" name="role" value="<?= set_value('role'); ?>" required>
                                        <option value="" >--Pilih Role--</option>

                                        
                                        <option value="psikolog" >Psikolog</option>
                                        <option value="psikiater">Psikiater</option>
                                        <option value="client">Client</option>
                                   
                                    </select>
                                    </div>
                                </div>
                                    
                                    <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Status</label>
                                     <select class="form-control" name="status" value="<?= set_value('status'); ?>" required>
                                        <option value="" >--Pilih Status--</option>

                                        
                                        <option value="aktif" >aktif</option>
                                        <option value="nonaktif">nonaktif</option>
                             
                                   
                                    </select>
                                    </div>
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