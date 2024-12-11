<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Sejarah
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<link href="<?= base_url('assets/css/frontend/fasilitas.css'); ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="fasilitas">
    <h3 class="tentang-kami">Tentang kami</h3>
    <h2>Fasilitas</h2>

    <!-- Semua fasilitas dalam satu kotak -->
    <div class="fasilitas-container">
        <div class="fasilitas-item">
            <h3>Lab Komputer</h3>
            <img src="<?= base_url('foto/fasilitas1.png'); ?>" alt="Lab Komputer">
            <p>
                Lab komputer di Universitas Subang adalah fasilitas penunjang pembelajaran yang dilengkapi dengan perangkat komputer modern,
                koneksi internet yang stabil, serta berbagai perangkat lunak yang mendukung kegiatan praktikum mahasiswa. 
            </p>
        </div>

        <div class="fasilitas-item">
            <h3>Perpustakaan</h3>
            <img src="<?= base_url('foto/fasilitas2.png'); ?>" alt="Perpustakaan">
            <p>
                Perpustakaan di Universitas Subang adalah pusat sumber informasi yang dirancang untuk mendukung kebutuhan belajar, 
                penelitian, dan pengajaran. Dengan koleksi buku, jurnal, dan sumber elektronik, perpustakaan menyediakan lingkungan belajar yang nyaman.
            </p>
        </div>

        <div class="fasilitas-item">
            <h3>Perpustakaan</h3>
            <img src="<?= base_url('foto/fasilitas3.png'); ?>" alt="Perpustakaan">
            <p>
                Perpustakaan di Universitas Subang adalah pusat sumber informasi yang dirancang untuk mendukung kebutuhan belajar, 
                penelitian, dan pengajaran. Dengan koleksi buku, jurnal, dan sumber elektronik, perpustakaan menyediakan lingkungan belajar yang nyaman.
            </p>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>
