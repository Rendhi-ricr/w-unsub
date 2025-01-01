<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Dokument Akreditasi<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Dokument Akreditasi</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/dokumen/update/' . $d['id_dokumen']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_dokumen">Nama Dokumen</label>
                            <input type="text" class="form-control mb-3" id="nama_dokumen" name="nama_dokumen" value="<?= $d['nama_dokumen'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="link">Link Dokument</label>
                            <input type="text" class="form-control mb-3" id="link" name="link" value="<?= $d['link'] ?>">
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