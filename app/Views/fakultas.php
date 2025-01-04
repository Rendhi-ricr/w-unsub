<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Fasilitas
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h5 class="text-primary">Akademik & Kemahasiswaan</h5>
        <h1 class="fw-bold mb-4" style="font-size: 2.5rem;">Fakultas</h1>
        <p class="text-center" style="font-size: 1.2rem;">Universitas Subang memiliki 14 (empat belas) Program Studi yang terangkup dalam 7 Fakultas pilihan yang akan menghantarkanmu ke masa depan.</p>

        <!-- First Row: 2 Faculties -->
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Administrasi</h5>
                        <a href="https://fia.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/administrasi.png') ?>" alt="Logo Fakultas Ilmu Administrasi" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Teknik</h5>
                        <a href="https://teknik.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/teknik.png') ?>" alt="Logo Fakultas Teknik" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row: 3 Faculties -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Hukum</h5>
                        <a href="https://hukum.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/hukum.png') ?>" alt="Logo Fakultas Hukum" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Komputer</h5>
                        <a href="https://fasilkom.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/komputer.png') ?>" alt="Logo Fakultas Ilmu Komputer" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Komunikasi</h5>
                        <a href="https://fikom.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/komunikasi.png') ?>" alt="Logo Fakultas Ilmu Komunikasi" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Row: 2 Faculties -->
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Agrobisnis dan Rekayasa Pertanian</h5>
                        <a href="https://pertanian.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/agrobisnis.png') ?>" alt="Logo Fakultas Agrobisnis dan Rekayasa Pertanian" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Keguruan dan Ilmu Pendidikan</h5>
                        <a href="https://fkip.unsub.ac.id/" target="_blank">
                            <div class="d-flex justify-content-center align-items-center" style="height: 120px;">
                                <img src="<?= base_url('foto/fakultas/keguruan.png') ?>" alt="Logo Fakultas Keguruan dan Ilmu Pendidikan" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->endSection(); ?>
