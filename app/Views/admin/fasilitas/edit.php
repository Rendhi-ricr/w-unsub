<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Fasilitas<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Fasilitas</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/fasilitas/update/' . $fasilitas['id_fasilitas']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_fasilitas">Nama Fasilitas</label>
                            <input type="text" class="form-control mb-3" id="nama_fasilitas" name="nama_fasilitas" value="<?= $fasilitas['nama_fasilitas'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Fasilitas</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi dari fasilitas"><?= $fasilitas['deskripsi'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Fasilitas</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <?php if ($fasilitas['gambar']): ?>
                                <img src="<?= base_url('foto/fasilitas/' . $fasilitas['gambar']) ?>" alt="Gambar Kendaraan" class="img-thumbnail mt-2" width="200">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer text-right text-end">
                        <button type="submit" class="btn btn-primary">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>