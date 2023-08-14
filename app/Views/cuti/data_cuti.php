<?= $this->extend('sidenav'); ?>
<?= $this->section('sidenav'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data Cuti</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="ml-auto">
                    <a href="#" type="button" class="btn btn-success mt-2 mb-2 button-bg">
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
                            <th>NIP</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Tgl. Cuti Mulai</th>
                            <th>Tgl. Cuti Berakhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach($cuti as $value) : ?>
                        <tr>
                            <td><?php echo $value['nama_cuti'] ?></td>
                            <td><?php echo $value['nip_cuti'] ?></td>
                            <td><?php echo $value['jabatan_cuti'] ?></td>
                            <td><?php echo $value['asal_cuti'] ?></td>
                            <td><?php echo $value['tgl_mulai'] ?></td>
                            <td><?php echo $value['tgl_akhir'] ?></td>
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