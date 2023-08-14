<?= $this->extend('sidenav'); ?>
<?= $this->section('sidenav'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data User</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="ml-auto">
                    <a href="<?= base_url('/create_user') ?>" type="button" class="btn btn-success mt-2 mb-2 button-bg">
                        Tambah Data
                    </a>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <table class="table table-bordered table-hover" id="mydatatable">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nama</th>
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Tgl Mulai Kerja</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($user as $value) : ?>
                        <tr>
                            <td></td>
                            <td><?php echo $value['nama_user'] ?></td>
                            <td><?php echo $value['nip_user'] ?></td>
                            <td><?php echo $value['jabatan_user'] ?></td>
                            <td><?php echo $value['tgl_kerja'] ?></td>
                            <td>
                                <div>
                                    <a href="<?= base_url('/edit_user/'.$value['id_user']) ?>" type="button"
                                        class="btn btn-primary btn-sm mt-2 mb-2 button-bg">
                                        Edit
                                    </a>
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