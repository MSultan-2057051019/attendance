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
    <form action="/save_tamu" method="post" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_tamu" id="nama_tamu"
                            placeholder="Nama lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>No. KTP</label>
                        <input type="number" class="form-control" name="noktp_tamu" id="noktp_tamu"
                            placeholder="No. KTP">
                    </div>
                    <div class="form-group">
                        <label>No. HP</label>
                        <input type="number" class="form-control" name="nohp_tamu" id="nohp_tamu" placeholder="No. HP">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Asal</label>
                        <input type="numbtexter" class="form-control" name="asal_tamu" id="asal_tamu"
                            placeholder="Asal Tamu">
                    </div>
                    <div class="form-group">
                        <label>Tgl. Masuk</label>
                        <input type="date" class="form-control" name="tgl_masuk" id="tgl_masuk"
                            placeholder="Tgl. Tamu Masuk">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <div class="ml-auto d-flex justify-content-end">
                <button class="btn btn-success mt-2 mb-2 button-bg" name="submit" type="submit">Tambah data</button>
            </div>
        </div>
    </form>

</div>
<?= $this->endSection(); ?>