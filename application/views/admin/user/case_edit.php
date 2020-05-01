
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
                                <a href="<?php echo base_url('admin/case'); ?>" class="btn btn-info float-right mr-4 mb-5">Back</a>
                                  </div>
                              </div>
                                <form class="form-horizontal form-material" action="<?= base_url('admin/edit_case_run'); ?>" method="post">
                                <div class="row">
                                        
                                  <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-md-6">Nama Kasus</label>
                                            <input type="text" name="nmcase" value="<?php echo $case['nmcase']; ?>" class="form-control form-control-line" required>
                                            <input type="hidden" name="id" value="<?php echo $case['id_case']; ?>" class="form-control form-control-line">
                                        </div>
                                        <small class="text-danger"><?php echo form_error('nmcase'); ?></small>
                                    </div>
                               
                                    
                                   
                    
                                <div class="col-md-6">
                                    <div class="form-group">
                                       <label class="col-md-6">Kategori</label>
                                     <select class="form-control" name="kategoricase" value="<?= set_value('kategoricase'); ?>" required>
                                        <option value="" >--Pilih kategori--</option>
                                         <option value="<?php echo $case['kategoricase']; ?>" selected ><?php echo $case['kategoricase']; ?></option>
                                        <option value="Anak-Anak" >Anak-Anak</option>
                                        <option value="Remaja">Remaja</option>
                                        <option value="Dewasa">Dewasa</option>
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