
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
                                <a href="<?php echo base_url('admin/index/add'); ?>" class="label label-info float-right mr-4">Tambah</a>
                             </div>
                            <div class="table-responsive">
                                <table  id='user' class="table v-middle">
                                    <thead>
                                        <tr class="bg-light">
                                            <th class="border-top-0">#</th>
                                            <th class="border-top-0">Nama</th>
                                            <th class="border-top-0">Role</th>
                                            <th class="border-top-0">Status</th>
                                            <th class="border-top-0">Login</th>
                                           
                                            <th class="border-top-0">Logout</th>
                                            <th class="border-top-0">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                            <?php 
                                            $i=1;
                                            foreach ($user as $key): ?>
                                        <tr>
                                                
                                           <td><?php echo $i; ?></td>
                                           <td><?php echo $key['nmuser'] ?></td>
                                           <td><?php echo $key['role'] ?></td>
                                           <td><?php echo $key['status'] ?></td>
                                          
                                           <td><?php echo $key['login'] ?></td>
                                           <td><?php echo $key['logout'] ?></td>
                                     
                                           <td>
                                            <?php if ($key['status'] == 'aktif'): ?>
                                                <a href="<?php echo base_url('admin/index'); ?>/<?php echo $key['iduser']; ?>/ubah" class="label label-success">Ubah</a>
                                                 <a href="<?php echo base_url('admin/index'); ?>/<?php echo $key['iduser']; ?>/delete" onclick="return confirm('Yakin Hapus?');" class="label label-danger">Hapus</a>
                                            <?php else: ?>

                                               <a href="<?php echo base_url('admin/index'); ?>/<?php echo $key['iduser']; ?>/aktif" class="label label-warning">Aktfikan</a>
                                               <a href="<?php echo base_url('admin/index'); ?>/<?php echo $key['iduser']; ?>/delete" onclick="return confirm('Yakin Abaikan?');" class="label label-danger">Abaikan</a>
                                            <?php endif ?>
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