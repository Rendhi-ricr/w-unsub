<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Dokument Akreditasi<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Dokument Akreditasi</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/dokumen/simpan') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_dokumen">Nama Dokumen</label>
                            <input type="text" class="form-control mb-3" id="nama_dokumen" name="nama_dokumen" placeholder="Masukkan nama dokumen">
                        </div>
                        <div class="form-group">
                            <label for="link">Link Dokument</label>
                            <input type="url" class="form-control mb-3" id="link" name="link" placeholder="Masukkan link dokumen">
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