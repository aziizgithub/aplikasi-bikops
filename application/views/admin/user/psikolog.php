
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
                                
                                <a href="<?php echo base_url('admin/psikolog/add'); ?>" class="label label-info float-right mr-4">Tambah</a>
                             </div>
                            <div class="table-responsive">
                                <table  id='user' class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Jenis Kelamin</th>
                                            <th class="border-top-0">Kota</th>
                                            <th class="border-top-0">No. Hp</th>
                                            <th class="border-top-0">Bidang</th>
                                            
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php 
                                            $i=1;
                                            foreach ($psikolog as $key): ?>
                                        <tr>
                                                
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $key['nmpsig'] ?></td>
                                           <td><?php echo $key['email'] ?></td>
                                           <td><?php echo $key['jk'] ?></td>
                                          
                                           <td><?php echo $key['kota'] ?></td>
                                           <td><?php echo $key['nohp'] ?></td>
                                           <td><?php echo $key['bidang'] ?></td>
                                          
                                           <td>
                                               <a href="<?php echo base_url('admin/psikolog'); ?>/<?php echo $key['idpsig']; ?>/edit" class="label label-success">Edit</a>
                                               <a href="<?php echo base_url('admin/psikolog'); ?>/<?php echo $key['idpsig']; ?>/delete" onclick="return confirm('Yakin Hapus?');" class="label label-danger">Hapus</a>
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