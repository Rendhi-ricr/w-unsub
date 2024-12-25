
<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Fasilitas
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
  <!-- Header Section -->
  <div class="text-center mb-5">
    <h5 class="text-primary">Tentang Kami</h5>
    <h1 class="fw-bold mb-4" style="font-size: 2.5rem;">Fasilitas Kami</h1>
    <p class="text-muted fs-4">Temukan fasilitas yang mendukung proses belajar dan kegiatan di Universitas Subang</p>
  </div>

  <!-- Facility Grid -->
  <div class="row row-cols-1 row-cols-md-3 g-4">
    <!-- Facility Card 1 -->
    <div class="col">
      <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
        <img src="<?= base_url('foto/fasilitas1.png'); ?>" class="card-img-top" alt="Fasilitas 1" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center bg-light p-4">
          <h5 class="card-title text-dark fs-5 fw-semibold">Lab Komputer</h5>
          <p class="card-text text-muted">Lab komputer di Universitas Subang adalah fasilitas penunjang pembelajaran dengan perangkat komputer modern dan koneksi internet yang stabil, ideal untuk akademik, praktikum, dan penelitian.</p>
        </div>
      </div>
    </div>

    <!-- Facility Card 2 -->
    <div class="col">
      <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
        <img src="<?= base_url('foto/fasilitas2.png'); ?>" class="card-img-top" alt="Fasilitas 2" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center bg-light p-4">
          <h5 class="card-title text-dark fs-5 fw-semibold">Perpustakaan</h5>
          <p class="card-text text-muted">Perpustakaan kami menyediakan berbagai koleksi buku, jurnal ilmiah, e-book, dan ruang baca nyaman untuk penelitian dan belajar di lingkungan yang tenang.</p>
        </div>
      </div>
    </div>

    <!-- Facility Card 3 -->
    <div class="col">
      <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
        <img src="<?= base_url('foto/fasilitas3.png'); ?>" class="card-img-top" alt="Fasilitas 3" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center bg-light p-4">
          <h5 class="card-title text-dark fs-5 fw-semibold">Lapangan</h5>
          <p class="card-text text-muted">Lapangan di kampus bisa digunakan untuk futsal, basket, dan area olahraga luar ruangan yang mendukung aktivitas fisik dan kebugaran mahasiswa.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Spacing between rows -->
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
    <!-- Facility Card 4 -->
    <div class="col">
      <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
        <img src="<?= base_url('foto/fasilitas4.png'); ?>" class="card-img-top" alt="Fasilitas 4" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center bg-light p-4">
          <h5 class="card-title text-dark fs-5 fw-semibold">Masjid</h5>
          <p class="card-text text-muted">Masjid Universitas Subang adalah tempat ibadah yang nyaman, dilengkapi dengan fasilitas seperti area wudu, tempat kegiatan keagamaan, serta ruang untuk pengajian dan shalat berjamaah.</p>
        </div>
      </div>
    </div>

    <!-- Facility Card 5 -->
    <div class="col">
      <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
        <img src="<?= base_url('foto/fasilitas5.png'); ?>" class="card-img-top" alt="Fasilitas 5" style="height: 250px; object-fit: cover;">
        <div class="card-body text-center bg-light p-4">
          <h5 class="card-title text-dark fs-5 fw-semibold">Internet dan Wi-Fi</h5>
          <p class="card-text text-muted">Dengan fasilitas internet dan Wi-Fi cepat yang tersebar di seluruh kampus, mahasiswa dapat mengakses informasi dan berkolaborasi secara daring dengan lancar di setiap area kampus.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
    .card:hover {
  transform: translateY(-5px);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}
</style>
<?= $this->endSection(); ?>