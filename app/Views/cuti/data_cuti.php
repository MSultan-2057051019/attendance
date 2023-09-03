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
            <!-- /.card-header -->
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="mydatatable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Jabatan</th>
                                <th>Status</th>
                                <th>Tanggal Masuk Kerja</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cuti as $value) : ?>
                                <?php
                                // Convert date strings to timestamps
                                $tglKerjaTimestamp = strtotime($value['tgl_kerja']);
                                $tanggalSekarangTimestamp = strtotime(date('Y-m-d'));
                                ?>
                                <?php if ($tglKerjaTimestamp !== false) : ?>
                                    <?php 
                                    $selisihHari = ($tanggalSekarangTimestamp - $tglKerjaTimestamp) / 86400; 
                                    $hasilMod = $selisihHari % 21;
                                    ?>
                                    
                                    <?php if ($hasilMod > 14) : ?>
                                        <tr>
                                        <td><?php echo $value['nama_user'] ?></td>
                                        <td><?php echo $value['jabatan_user'] ?></td>
                                        <td>Cuti</td>
                                        <td><?php echo date('Y-m-d', $tanggalSekarangTimestamp + ((21-$hasilMod) * 86400)); ?></td>
                                    <?php endif; ?>
                                <?php endif; ?>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
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