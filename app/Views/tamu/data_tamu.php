<?php
$role = session()->get('role');
if ($role === 'admin') {
    $this->extend('sidenav');
} elseif ($role === 'security') {
    $this->extend('security_sidenav');
}
?>

<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data Tamu</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="ml-auto">
                    <a href="<?= base_url('/create_tamu') ?>" type="button" class="btn btn-success mt-2 mb-2 button-bg">
                        Tambah Data
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>No. KTP</th>
                            <th>No. HP</th>
                            <th>Asal</th>
                            <th>Tgl. Masuk</th>
                            <th>Tgl. Keluar</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($tamu as $value) : ?>
                        <tr>
                            <td><?php echo $value['nama_tamu'] ?></td>
                            <td><?php echo $value['noktp_tamu'] ?></td>
                            <td><?php echo $value['nohp_tamu'] ?></td>
                            <td><?php echo $value['asal_tamu'] ?></td>
                            <td><?php echo $value['tgl_masuk'] ?></td>
                            <td><?php echo $value['tgl_keluar'] ?></td>
                            <td>
                                <div>
                                    <?php if (empty($value['tgl_keluar'])) : ?>
                                    <a href="<?= base_url('/out/'.$value['id_tamu']) ?>" type="button"
                                        class="btn btn-danger btn-sm mt-2 mb-2 button-bg">
                                        Out
                                    </a>
                                    <?php else : ?>
                                    <button type="button" class="btn btn-danger btn-sm mt-2 mb-2 button-bg" disabled>
                                        Out
                                    </button>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
</div>

<!-- Add the necessary library -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

<script>
$(document).ready(function() {
    $('#mydatatable').DataTable();
});
</script>

<?= $this->endSection(); ?>