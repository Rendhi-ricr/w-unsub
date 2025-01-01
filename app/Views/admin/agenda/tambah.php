<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Agenda</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/agenda/simpan') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_acara">Nama Acara</label>
                            <input type="text" class="form-control mb-3" id="nama_acara" name="nama_acara" placeholder="Masukkan nama acara">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi dari Berita"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control mb-3" id="tanggal" name="tanggal">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tempat">Tempat</label>
                                    <input type="text" class="form-control mb-3" id="tempat" name="tempat" placeholder="Masukan Tempat">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="penyelenggara">Penyelenggara</label>
                                    <input type="text" class="form-control mb-3" id="penyelenggara" name="penyelenggara" placeholder="Masukan penyelenggara">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">banner</label>
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