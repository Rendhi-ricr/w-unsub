<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Fasilitas<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <?php foreach (session()->getFlashdata('errors') as $error): ?>
                <p><?= esc($error) ?></p>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Fasilitas</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/fasilitas/simpan') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_fasilitas">Nama Fasilitas</label>
                            <input type="text" class="form-control mb-3" id="nama_fasilitas" name="nama_fasilitas" placeholder="Masukkan nama fasilitas">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Fasilitas</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi dari fasilitas"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Fasilitas</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <img id="preview" class="img-preview d-none w-100" alt="Preview Gambar">
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save mr-2"></i>Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>