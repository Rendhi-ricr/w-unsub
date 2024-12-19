<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Unit Kegiatan Mahasiswa<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Unit Kegiatan Mahasiswa</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/ukm/simpan') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_ukm">Nama Unit Kegiatan Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="nama_ukm" name="nama_ukm" placeholder="Masukkan nama UKM">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Unit Kegiatan Mahasiswa</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3" placeholder="Masukan deskripsi dari UKM"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="kontak">Kontak Unit Kegiatan Mahasiswa</label>
                            <input type="text" class="form-control mb-3" id="kontak" name="kontak" placeholder="Masukkan kontak UKM">
                        </div>
                        <div class="form-group">
                            <label for="gambar">Gambar Unit Kegiatan Mahasiswa</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <img id="preview" class="img-preview d-none" alt="Preview Gambar">
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