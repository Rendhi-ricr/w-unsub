<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
UKM (Unit Kegiatan Mahasiswa)
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container my-5">
    <div class="text-center mb-5">
        <h5 class="text-primary">Akademik & Kemahasiswaan</h5>
        <h1 class="fw-bold">Unit Kegiatan Mahasiswa</h1>
    </div>

    <div class="row">
        <?php foreach ($ukm as $key): ?>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="card shadow-sm border-0 h-100 d-flex flex-column">
                    <img src="<?= base_url('foto/UKM/' . $key['gambar']) ?>" class="card-img-top" alt="Foto UKM 1" style="height: 250px; object-fit: cover;" />
                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold"><?= $key['nama_ukm'] ?></h5>
                        <p class="text-secondary" style="text-align: justify;"><?= $key['deskripsi'] ?></p>
                        <div class="mt-auto">
                            <p><strong>Hubungi Kami di:</strong></p>
                            <p><?= $key['kontak'] ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
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