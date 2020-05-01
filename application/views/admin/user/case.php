
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
                                
                                <a href="<?php echo base_url('admin/case/add'); ?>" class="label label-info float-right mr-4">Tambah</a>
                             </div>
                            <div class="table-responsive">
                                <table  id='user' class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama Kasus</th>
                                            <th class="border-top-0">Kategori Kasus</th>
                                            <th class="border-top-0">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php 
                                            $i=1;
                                            foreach ($case as $key): ?>
                                        <tr>
                                                
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $key['nmcase'] ?></td>
                                           <td><?php echo $key['kategoricase'] ?></td>
                                           
                                           <td>
                                               <a href="<?php echo base_url('admin/case'); ?>/<?php echo $key['id_case']; ?>/edit" class="label label-success">Edit</a>
                                               <a href="<?php echo base_url('admin/case'); ?>/<?php echo $key['id_case']; ?>/delete" onclick="return confirm('Yakin Hapus?');" class="label label-danger">Hapus</a>
                                           </td>

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