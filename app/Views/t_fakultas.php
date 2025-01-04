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
                <form action="<?= base_url('fakultas/simpan') ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Nama Fakultas -->
                    <div class="form-group mb-3">
                        <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
                        <select class="form-select" id="nama_fakultas" name="nama_fakultas" required>
                            <option value="" disabled selected>Pilih Fakultas</option>
                            <option value="Fakultas Ilmu Administrasi">Fakultas Ilmu Administrasi</option>
                            <option value="Fakultas Teknik">Fakultas Teknik</option>
                            <option value="Fakultas Hukum">Fakultas Hukum</option>
                            <option value="Fakultas Ilmu Komputer">Fakultas Ilmu Komputer</option>
                            <option value="Fakultas Ilmu Komunikasi">Fakultas Ilmu Komunikasi</option>
                            <option value="Fakultas Agrobisnis & Rekayasa Pertanian">Fakultas Agrobisnis & Rekayasa Pertanian</option>
                            <option value="Fakultas Keguruan dan Ilmu Pendidikan">Fakultas Keguruan dan Ilmu Pendidikan</option>
                        </select>
                        <div class="form-text">Pilih salah satu fakultas yang tersedia.</div>
                    </div>

                    <!-- Program Studi -->
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
                    <div class="form-group">
                        <label for="gambar">Logo Fakultas</label>
                        <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                        <img id="preview" class="img-preview d-none" alt="Preview Gambar">
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>