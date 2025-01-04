<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Beasiswa<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Beasiswa</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('beasiswa/update/' . $beasiswa['id_beasiswa']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_beasiswa">Nama Beasiswa</label>
                            <input type="text" class="form-control mb-3" id="nama_beasiswa" name="nama_beasiswa" placeholder="Masukkan nama beasiswa" value="<?= old('nama_beasiswa', $beasiswa['nama_beasiswa']) ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi"><?= old('deskripsi', $beasiswa['deskripsi']) ?></textarea>
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