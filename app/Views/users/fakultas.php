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
            <!-- Fakultas Ilmu Administrasi -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Administrasi</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://fia.unsub.ac.id/">Administrasi Negara</a></li>
                            <li><a href="https://fia.unsub.ac.id/">Administrasi Niaga</a></li>
                            <li><a href="https://fia.unsub.ac.id/">Administrasi Keuangan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fakultas Teknik -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Teknik</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://teknik.unsub.ac.id/">Teknik Mesin</a></li>
                            <li><a href="https://teknik.unsub.ac.id/">Teknik Elektro</a></li>
                            <li><a href="https://teknik.unsub.ac.id/">Teknik Arsitektur</a></li>
                            <li><a href="https://teknik.unsub.ac.id/">Teknik Sipil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Second Row: 3 Faculties -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mt-4">
            <!-- Fakultas Hukum -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Hukum</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://hukum.unsub.ac.id/">Kekhususan</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fakultas Ilmu Komputer -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Komputer</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://fasilkom.unsub.ac.id/">Sistem Informasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fakultas Ilmu Komunikasi -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Ilmu Komunikasi</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://fikom.unsub.ac.id/">Ilmu Komunikasi</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Third Row: 2 Faculties -->
        <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
            <!-- Fakultas Agrobisnis dan Rekayasa Pertanian -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Agrobisnis dan Rekayasa Pertanian</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://pertanian.unsub.ac.id/">Agroteknologi</a></li>
                            <li><a href="https://pertanian.unsub.ac.id/">Agrobisnis</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Fakultas Keguruan dan Ilmu Pendidikan -->
            <div class="col">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">Fakultas Keguruan dan Ilmu Pendidikan</h5>
                        <ul style="text-align: left;">
                            <li><a href="https://fkip.unsub.ac.id/">Pendidikan Matematika</a></li>
                            <li><a href="https://fkip.unsub.ac.id/">Pendidikan Jasmani Kesehatan dan Rekreasi</a></li>
                            <li><a href="https://fkip.unsub.ac.id/">Pendidikan Bahasa Inggris</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<?= $this->endSection(); ?>
