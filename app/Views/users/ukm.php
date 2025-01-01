<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
UKM (Unit Kegiatan Mahasiswa)
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
  <!-- Header Halaman -->
  <div class="text-center mb-5">
    <h5 class="text-primary">Akademik & Kemahasiswaan</h5>
    <h1 class="fw-bold">Unit Kegiatan Mahasiswa</h1>
  </div>

  <!-- Daftar UKM -->
  <div class="row">
    <!-- UKM 1 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <img src="path/to/image1.jpg" class="card-img-top" alt="Foto UKM 1" style="height: 200px; object-fit: cover;" />
        <div class="card-body">
          <h5 class="fw-bold">U.S RADIO</h5>
          <p class="text-secondary">
          Unit Kegiatan Mahasiswa U.s Radio merupakan kegiatan mahasiswa yang menaungi mahasiswa/i Universitas Subang untuk menjadi wadah kreativitas mahasiswa dalam bidang penyiaran dan media.          </p>
          </p>
          <p><strong>Telepon:</strong> 0821-1741-1913</p>
        </div>
      </div>
    </div>

    <!-- UKM 2 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <img 
          src="path/to/image2.jpg" 
          class="card-img-top" 
          alt="Foto UKM 2" 
          style="height: 200px; object-fit: cover;" />
        <div class="card-body">
          <h5 class="fw-bold">Dapur Musik</h5>
          Unit Kegiatan Mahasiswa Dapur Musik merupakan kegiatan mahasiswa yang menaungi mahasiswa/i Universitas Subang yang memiliki minat dalam bidang bermusik.          </p>
          <p class="text-secondary">

          </p>
          <p><strong>Telepon:</strong> 0812-1234-5678</p>
        </div>
      </div>
    </div>

    <!-- UKM 3 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <img 
          src="path/to/image3.jpg" 
          class="card-img-top" 
          alt="Foto UKM 3" 
          style="height: 200px; object-fit: cover;" />
        <div class="card-body">
          <h5 class="fw-bold">Badminton</h5>
          <p class="text-secondary">
          Unit Kegiatan Mahasiswa Lensa Fix merupakan kegiatan mahasiswa yang menaungi mahasiswa/i Universitas Subang yang memiliki minat pada bidang olahraga badminton.          </p>
          </p>
          <p><strong>Telepon:</strong> 0812-7890-1234</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <img 
          src="path/to/image3.jpg" 
          class="card-img-top" 
          alt="Foto UKM 3" 
          style="height: 200px; object-fit: cover;" />
        <div class="card-body">
          <h5 class="fw-bold">Lensa Fix</h5>
          <p class="text-secondary">
          Unit Kegiatan Mahasiswa Lensa Fix merupakan kegiatan mahasiswa yang menaungi mahasiswa/i Universitas Subang yang memiliki minat fotografi.          </p>
          <p><strong>Telepon:</strong> 0812-7890-1234</p>
        </div>
      </div>
    </div>
    <!-- Tambahkan UKM lainnya sesuai kebutuhan -->
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
