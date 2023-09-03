<?= $this->extend('sidenav'); ?>
<?= $this->section('sidenav'); ?>

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
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" id="mydatatable">
                        <thead>
                            <tr>
                                <th>Foto</th>
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
                                <td>
                                    <a href="#" class="view-photo-link" data-toggle="modal" data-target="#photoModal"
                                        data-image="<?= base_url('assets/images/' . $value['pict']); ?>">
                                        <span class="view-photo-text">View Photo</span>
                                    </a>
                                </td>
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
                                        <button type="button" class="btn btn-danger btn-sm mt-2 mb-2 button-bg"
                                            disabled>
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
            </div>
            <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="photoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="photoModalLabel">Identitas Tamu</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="text-align: center;">
                            <img id="modalImage" src="" alt="Photo" style="max-width: 100%; max-height: 400px;">
                        </div>
                    </div>
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

<script>
document.addEventListener("DOMContentLoaded", function() {
    const viewPhotoLinks = document.querySelectorAll(".view-photo-link");
    const modalImage = document.getElementById("modalImage");

    viewPhotoLinks.forEach(link => {
        link.addEventListener("click", function() {
            const imageSrc = this.getAttribute("data-image");
            modalImage.src = imageSrc;
        });
    });
});
</script>


<?= $this->endSection(); ?>