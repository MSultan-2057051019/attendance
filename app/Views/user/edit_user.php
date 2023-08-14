<?= $this->extend('sidenav'); ?>
<?= $this->section('sidenav'); ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data User</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Input Data User</h3>
    </div>
    <!-- /.card-header -->
    <form action="/update_user/<?= $user['id_user'] ?>" method="post" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_user" id="nama_user"
                            value="<?= $user['nama_user'] ?>" placeholder=" Nama lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="nip_user" id="nip_user"
                            value="<?= $user['nip_user'] ?>" placeholder=" Nomor Induk Pegawai">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan_user" id="jabatan_user"
                            value="<?= $user['jabatan_user'] ?>" placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Tgl. Mulai Kerja</label>
                        <input type="date" class="form-control" name="tgl_kerja" id="tgl_kerja"
                            value="<?= $user['tgl_kerja'] ?>" placeholder="Tanggal Mulai Kerja">
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