<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Berita<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Berita</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('errors')): ?>
            <div class="alert alert-danger">
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <p><?= esc($error) ?></p>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/berita/update/' . $berita['id_berita']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="judul_berita">Judul Berita</label>
                            <input type="text" class="form-control mb-3" id="judul_berita" name="judul_berita" placeholder="Masukkan judul berita" value="<?= $berita['judul_berita'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi dari Berita"><?= $berita['deskripsi']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <?php if ($berita['gambar']): ?>
                                <img src="<?= base_url('foto/berita/' . $berita['gambar']) ?>" alt="UKM" class="img-thumbnail mt-2" width="200">
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/admin/berita" class="btn btn-success">cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>