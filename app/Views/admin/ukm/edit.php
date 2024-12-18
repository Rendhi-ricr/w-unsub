<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Unit Kegiatan Mahasiswa<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Unit Kegiatan Mahasiswa</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/ukm/update/' . $u['id_ukm']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_ukm">Nama Unit Kegiatan Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="nama_ukm" name="nama_ukm" value="<?= $u['nama_ukm'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Unit Kegiatan Mahasiswa</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3"><?= $u['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak Unit Kegiatan Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="kontak" name="kontak" value="<?= $u['kontak'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Unit Kegiatan Mahasiswa</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <?php if ($u['gambar']): ?>
                                <img src="<?= base_url('foto/UKM/' . $u['gambar']) ?>" alt="UKM" class="img-thumbnail mt-2" width="200">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save mr-2"></i>Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>