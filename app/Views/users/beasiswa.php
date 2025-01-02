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

  <div class="row">
    <?php $no = 1; 
    foreach ($beasiswa as $key): ?>
    <div class="col-12 mb-4">
      <div class="card shadow-sm border-0">
        <div class="card-body">
          <div class="d-flex align-items-start">
            <span style="font-weight: bold; font-size: 1.5rem; margin-right: 1rem;"><?= $no ?>.</span>
            <div>
              <span style="font-weight: bold; font-size: 1.5rem;"><?= $key['nama_beasiswa'] ?></span>
              <p class="text-secondary mb-0" style="font-size: 1rem; text-align: justify; margin-top: 0.5rem;">
                <?= $key['deskripsi'] ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php 
    $no++; 
    endforeach; ?>
  </div>
</div>

<?= $this->endSection(); ?>
