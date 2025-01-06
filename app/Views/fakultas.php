<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Fakultas
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h5 class="text-primary">Akademik & Kemahasiswaan</h5>
        <h1 class="fw-bold mb-4" style="font-size: 2.5rem;">Fakultas</h1>
        <p class="text-center" style="font-size: 1.2rem;">Universitas Subang memiliki 14 (empat belas) Program Studi yang terangkup dalam 7 Fakultas pilihan yang akan menghantarkanmu ke masa depan.</p>
    </div>

    <div class="row g-4">
        <?php foreach ($fakultas as $index => $key): ?>
            <div class="col-lg-<?= ($index % 5 < 2) ? '6' : '4' ?> col-md-6 mb-4">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title"><?= $key['nama_fakultas'] ?></h5>
                        <a href="<?= $key['link'] ?>" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/' . $key['logo']) ?>" alt="Logo Fakultas Ilmu Administrasi" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?= $this->endSection(); ?>
