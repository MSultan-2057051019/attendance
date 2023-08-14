<?= $this->extend('security_sidenav'); ?>
<?= $this->section('security_sidenav'); ?>

<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data Tamu</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Input Data Tamu</h3>
    </div>
    <!-- /.card-header -->
    <form action="/update_tamu/<?= $tamu['id_tamu'] ?>" method="post" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_tamu" id="nama_tamu"
                            value="<?= $tamu['nama_tamu'] ?>" placeholder=" Nama lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <input type="number" class="form-control" name="noktp_tamu" id="noktp_tamu"
                            value="<?= $tamu['noktp_tamu'] ?>" placeholder=" No. KTP">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="ml-auto d-flex justify-content-end">
                <button class="btn btn-success mt-2 mb-2 button-bg" name="submit" type="submit">Perbarui data</button>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>