<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Beasiswa
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
  <div class="text-center mb-5">
    <h5 class="text-primary">Akademik & Kemahasiswaan</h5>
    <h1 class="fw-bold">Program Beasiswa</h1>
  </div>

  <!-- Daftar Beasiswa -->
  <div class="row">
    <div class="col-12 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="d-flex mb-2">
            <span style="font-weight: bold; font-size: 1.5rem; margin-right: 1rem;">1.</span>
            <span style="font-weight: bold; font-size: 1.5rem;">KIP Kuliah</span>
          </div>
          <p class="text-secondary mb-0" style="font-size: 1rem;">
          KIP-Kuliah adalah bantuan biaya pendidikan yang diberikan kepada Mahasiswa yang lulus seleksi masuk PT sehingga pengumumannya adalah selepas anda mendaftar ulang sebagai mahasiswa di PT terkait. Setelah mendaftar ulang, Anda akan diverifikasi kelayakan sebagai penerima KIP-Kuliah.          </p>
        </div>
      </div>
    </div>

    <div class="col-12 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="d-flex mb-2">
            <span style="font-weight: bold; font-size: 1.5rem; margin-right: 1rem;">2.</span>
            <span style="font-weight: bold; font-size: 1.5rem;">Jabar Future Leader Scholarship</span>
          </div>
          <p class="text-secondary mb-0" style="font-size: 1rem;">
          Merupakan program bantuan biaya pendidikan tinggi dari Pemerintah Provinsi Jawa Barat kepada masyarakat Jabar yang sedang menempuh pendidikan jenjang D3, D4, S1, S2, dan S3 yang berprestasi baik dalam bidang akademik maupun non-akademik.          </p>
        </div>
      </div>
    </div>

    <div class="col-12 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="d-flex mb-2">
            <span style="font-weight: bold; font-size: 1.5rem; margin-right: 1rem;">3.</span>
            <span style="font-weight: bold; font-size: 1.5rem;">Beasiswa Yayasan Kutawaringin</span>
          </div>
          <p class="text-secondary mb-0" style="font-size: 1rem;">
          Beasiswa Yayasan kutawaringin diberikan kepada mahasiswa yang berprestasi </p>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>
