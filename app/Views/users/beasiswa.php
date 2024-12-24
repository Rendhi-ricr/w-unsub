<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Sejarah
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<link href="<?= base_url('assets/css/frontend/beasiswa.css'); ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="fasilitas">
    <h3 class="tentang-kami">Tentang kami</h3>
    <h2>Fasilitas</h2>

    <!-- Semua fasilitas dalam satu kotak -->
    <div class="beasiswa-container">
        <div class="beasiswa-item">
            <h3>1. KIP Kuliah</h3>
            <p>
                KIP-Kuliah adalah bantuan biaya pendidikan yang diberikan kepada Mahasiswa yang lulus seleksi masuk PT sehingga pengumumannya adalah selepas anda mendaftar ulang sebagai mahasiswa di PT terkait. Setelah mendaftar ulang, Anda akan diverifikasi kelayakan sebagai penerima KIP-Kuliah. </p>
        </div>

        <div class="beasiswa-item">
            <h3>2. Jabar Future Leader Scholarship</h3>
            <p>
                Merupakan program bantuan biaya pendidikan tinggi dari Pemerintah Provinsi Jawa Barat kepada masyarakat Jabar yang sedang menempuh pendidikan jenjang D3, D4, S1, S2, dan S3 yang berprestasi baik dalam bidang akademik maupun non-akademik. </p>
        </div>

        <div class="beasiswa-item">
            <h3>3. Beasiswa Yayasan Kutawaringin</h3>
            <p>
                Merupakan program bantuan biaya pendidikan tinggi dari Pemerintah Provinsi Jawa Barat kepada masyarakat Jabar yang sedang menempuh pendidikan jenjang D3, D4, S1, S2, dan S3 yang berprestasi baik dalam bidang akademik maupun non-akademik.
            </p>
        </div>
    </div>
</section>

<?= $this->endSection(); ?>