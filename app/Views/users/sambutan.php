<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Sejarah
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
  <!-- Heading -->
  <div class="text-center mb-4">
    <h5 class="text-primary">Tentang Kami</h5>
    <h1 class="fw-bold">Sambutan Rektor</h1>
  </div>

  <!-- Content -->
  <div class="text-center">
    <!-- Image -->
    <img src="<?= base_url('foto/rektor.png'); ?>" alt="Sejarah" class="img-fluid shadow mb-4 w-25">

    <!-- Rector's Name -->
    <h3 class="fw-bold" style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 20px; color: black;">
    Dr. Drs. Ir. H. A. Moeslihat Komara, M.Si
    </h3>

    <!-- Rector's Message -->
  <!-- Message -->
  <div class="fs-5 mt-2" style="text-align: left;">
    Universitas Subang berkomitmen untuk menghasilkan lulusan yang tidak hanya memiliki kompetensi akademik tinggi tetapi juga karakter yang tangguh dan berdaya saing di era globalisasi. Dalam mencapai visi tersebut, kami mengutamakan lingkungan belajar yang inklusif dan mendukung pengembangan diri, baik melalui program akademik maupun kegiatan kemahasiswaan. Dengan kerjasama dari berbagai pihak, baik lokal maupun internasional, kami berusaha untuk terus meningkatkan kualitas pendidikan di Universitas Subang.
  </div>
</div>

<?= $this->endSection(); ?>
