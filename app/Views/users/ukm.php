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
    <p class="text-muted fs-5">
      Jelajahi berbagai Unit Kegiatan Mahasiswa (UKM) di Universitas Subang. Tingkatkan kemampuan, kembangkan potensi, dan perluas jaringan Anda bersama komunitas mahasiswa lainnya.
    </p>
  </div>

  <!-- Daftar UKM -->
  <div class="row">
    <!-- UKM 1 -->
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card shadow-sm border-0">
        <img 
          src="path/to/image1.jpg" 
          class="card-img-top" 
          alt="Foto UKM 1" 
          style="height: 200px; object-fit: cover;" />
        <div class="card-body">
          <h5 class="fw-bold">UKM Seni</h5>
          <p class="text-secondary">
            Mengasah bakat seni mahasiswa di bidang tari, musik, seni rupa, dan teater. Tunjukkan kreativitas Anda melalui berbagai kegiatan seni.
          </p>
          <p><strong>Telepon:</strong> 0812-3456-7890</p>
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
          <h5 class="fw-bold">UKM Olahraga</h5>
          <p class="text-secondary">
            Fasilitas bagi mahasiswa yang ingin aktif dalam bidang olahraga seperti futsal, badminton, basket, dan lainnya. Tumbuhkan semangat kompetisi dan kebugaran.
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
          <h5 class="fw-bold">UKM Kepemimpinan</h5>
          <p class="text-secondary">
            Mengembangkan kemampuan kepemimpinan mahasiswa melalui pelatihan, workshop, dan kegiatan sosial. Siap menjadi pemimpin masa depan!
          </p>
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
