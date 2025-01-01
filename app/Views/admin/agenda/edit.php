<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Agenda</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="<?= base_url('admin/agenda/update/' . $agenda['id_agenda']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama_acara">Nama Acara</label>
                            <input type="text" class="form-control mb-3" id="nama_acara" name="nama_acara"
                                value="<?= esc($agenda['nama_acara']) ?>" placeholder="Masukkan nama acara">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" id="deskripsi" class="form-control mb-3"
                                placeholder="Masukan deskripsi dari agenda"><?= esc($agenda['deskripsi']) ?></textarea>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control mb-3" id="tanggal" name="tanggal"
                                        value="<?= esc($agenda['tanggal']) ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="tempat">Tempat</label>
                                    <input type="text" class="form-control mb-3" id="tempat" name="tempat"
                                        value="<?= esc($agenda['tempat']) ?>" placeholder="Masukan Tempat">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="penyelenggara">Penyelenggara</label>
                                    <input type="text" class="form-control mb-3" id="penyelenggara" name="penyelenggara"
                                        value="<?= esc($agenda['penyelenggara']) ?>" placeholder="Masukan penyelenggara">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Banner</label>
                            <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                            <?php if (!empty($agenda['banner'])) : ?>
                                <img src="<?= base_url('foto/agenda/' . $agenda['banner']) ?>" alt="Banner" class="img-preview mt-2" width="200">
                            <?php else : ?>
                                <p class="text-muted mt-2">Tidak ada banner yang diunggah sebelumnya.</p>
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