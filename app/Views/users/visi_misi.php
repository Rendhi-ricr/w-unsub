<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Visi & Misi
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container-fluid my-5">
  <!-- Header -->
  <div class="text-center mb-4">
    <h5 class="text-primary">Tentang Kami</h5>
    <h1 class="fw-bold">Visi & Misi</h1>
  </div>

<!-- Banner Section with light blue background -->
<div class="bg-light-blue rounded p-4 mb-5">
  <div class="row align-items-center">
    <!-- Logo -->
    <div class="col-md-3 text-center mb-3 mb-md-0">
      <img src="<?= base_url('foto/logo1.png'); ?>" alt="Logo Universitas" class="img-fluid" style="height: 250px; width: auto;"> <!-- Set explicit size -->
    </div>

    <div class="col-md-5 d-flex align-items-center justify-content-start">
  <div class="text-start">
    <h3 class="fw-bold" style="font-family: 'Poppins', sans-serif; line-height: 1; color: black; font-weight: 700; font-size: 48px;">Universitas</h3> <!-- Increased font size -->
    <h4 class="fw-bold" style="font-family: 'Poppins', sans-serif; line-height: 1; color: black; font-weight: 700; font-size: 48px;">Subang</h4> <!-- Increased font size -->
  </div>
</div>

<!-- Tagline -->
<!-- Tagline -->
<div class="col-md-3 text-center">
  <div class="vertical-line-wrapper">
    <h5 class="text-dark" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-style: italic; font-size: 36px; white-space: nowrap;">School Of <br>Empowering People</h5>
  </div>
</div>

</div>
</div>
</div>


  <!-- Visi Section -->
  <div class="text-center mb-5">
    <h2 class="fw-bold mx-auto" style="max-width: 600px;">Visi</h2>
    <p class="fs-5 mx-auto" style="max-width: 800px;">
      Universitas Subang Berkembang dan Berkemuka di Tingkat Jawa Barat Tahun 2023
    </p>
  </div>

  <!-- Misi Section -->
  <div class="text-center mb-5">
    <h2 class="fw-bold">Misi</h2>
    <ul class="list-unstyled fs-5 mx-auto" style="max-width: 800px;">
      <li style="text-align: justify;">
        1. Menyelenggarakan pendidikan dan pembelajaran yang bermutu dalam rangka menghasilkan lulusan yang berilmu pengetahuan, bermoral pancasila, dan berjiwa interpreneurship.
      </li>
      <li style="text-align: justify;">
        2. Menjalin kerjasama dalam penelitian dengan berbagai pihak, baik dengan instansi pemerintah, swasta, dan lembaga lain dalam rangka meningkatkan mutu lulusan.
      </li>
      <li style="text-align: justify;">
        3. Menyelenggarakan pengabdian kepada masyarakat yang berorientasi pada pemberdayaan masyarakat melalui penerapan ilmu pengetahuan teknologi dan seni.
      </li>
      <li style="text-align: justify;">
        4. Ikut serta dalam upaya pencapaian Visi dan Misi Kabupaten Subang dan Provinsi Jawa Barat.
      </li>
    </ul>
  </div>

</div>

<!-- CSS Styles for Light Blue Background -->
<style>
  .bg-light-blue {
    background-color: #e9f2fe; /* Warna latar biru muda */
    position: relative;
    padding: 15px 0;
  }

  .vertical-line-wrapper {
    position: relative;
    display: inline-block;
  }

  .vertical-line-wrapper::before {
    content: "";
    position: absolute;
    left: -20px;
    top: -40px;
    height: 150px;
    width: 2px;
    background-color: #000;
  }
</style>

<?= $this->endSection(); ?>
