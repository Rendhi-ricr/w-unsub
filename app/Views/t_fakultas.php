<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Fakultas<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0">
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Tambah Data Fakultas</h1>
            </div>
        </div>
    </div>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="<?= base_url('fakultas/simpan') ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Fakultas -->
                    <div class="form-group mb-3">
                        <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
                        <select class="form-select" id="nama_fakultas" name="nama_fakultas" required>
                            <option value="" disabled selected>Pilih Fakultas</option>
                            <option value="Fakultas Teknik">Fakultas Teknik</option>
                            <option value="Fakultas Ekonomi dan Bisnis">Fakultas Ekonomi dan Bisnis</option>
                            <option value="Fakultas Ilmu Sosial dan Politik">Fakultas Ilmu Sosial dan Politik</option>
                            <option value="Fakultas Pertanian">Fakultas Pertanian</option>
                            <option value="Fakultas Hukum">Fakultas Hukum</option>
                        </select>
                        <div class="form-text">Pilih salah satu fakultas yang tersedia.</div>
                    </div>

                    <!-- Program Studi -->
                    <div class="form-group mb-3">
                        <label for="prodi" class="form-label">Program Studi</label>
                        <textarea
                            class="form-control"
                            id="prodi"
                            name="prodi"
                            placeholder="Masukkan Program Studi"
                            rows="3"
                            required></textarea>
                        <div class="form-text">Masukkan nama-nama program studi yang dimiliki fakultas ini.</div>
                    </div>

                    <!-- Link -->
                    <div class="form-group mb-3">
                        <label for="link" class="form-label">Link Website Fakultas</label>
                        <input
                            type="url"
                            class="form-control"
                            id="link"
                            name="link"
                            placeholder="Masukkan Link Website Fakultas"
                            required>
                        <div class="form-text">Masukkan URL resmi website fakultas. Contoh: https://fakultasteknik.ac.id</div>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>