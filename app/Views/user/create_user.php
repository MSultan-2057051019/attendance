<?= $this->extend('sidenav'); ?>
<?= $this->section('sidenav'); ?>
<?php if (session()->has('error')): ?>
    <div class="alert alert-danger">
        <?php echo session('error'); ?>
    </div>
<?php endif; ?>
<div class="row mb-2">
    <div class="col-sm-6">
        <h3 class="mt-3 mb-1">Data Cuti</h3>
    </div><!-- /.col -->
</div><!-- /.row -->
<div class="card card-default">
    <div class="card-header">
        <h3 class="card-title">Input Data Cuti</h3>
    </div>
    <!-- /.card-header -->
    <form action="/save_user" method="post" enctype="multipart/form-data" autocomplete="off">
        <?= csrf_field(); ?>
        <div class="card-body">
            <div class="row">
                <!-- Bagian Kiri: Upload Foto -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Pas Foto</label> <br>
                        <img id="imagePreview" src="<?= base_url('assets/images/1.jpeg'); ?>" alt="Default Foto"
                            style="max-width: 100%; max-height: 200px;" alt="Default Foto">
                    </div>
                    <div class="form-group">
                        <input type="file" class="form-control-file" name="pict" id="user_photo"
                            onchange="previewImage()">
                    </div>
                </div>
                <!-- Bagian Kanan: Form Data -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name="nama_user" id="nama_user"
                            placeholder="Nama lengkap" autofocus required>
                    </div>
                    <div class="form-group">
                        <label>NIP</label>
                        <input type="number" class="form-control" name="nip_user" id="nip_user"
                            placeholder="Nomor Induk Pegawai">
                    </div>
                    <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" name="jabatan_user" id="jabatan_user"
                            placeholder="Jabatan">
                    </div>
                    <div class="form-group">
                        <label>Tgl. Mulai Kerja</label>
                        <input type="date" class="form-control" name="tgl_kerja" id="tgl_kerja"
                            placeholder="Tanggal Mulai Kerja">
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
<script>
function previewImage() {
    var fileInput = document.getElementById('user_photo');
    var imagePreview = document.getElementById('imagePreview');
    imagePreview.style.display = 'block';
    imagePreview.src = URL.createObjectURL(fileInput.files[0]);
}
</script>
<?= $this->endSection(); ?>