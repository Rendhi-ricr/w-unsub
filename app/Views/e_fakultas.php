<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Fakultas<?= $this->endSection() ?>
<?= $this->section('content') ?>

<div class="container-fluid p-0">
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Edit Data Fakultas</h1>
            </div>
        </div>
    </div>

    <?php if (session()->getFlashdata('errors')): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach (session()->getFlashdata('errors') as $error): ?>
                    <li><?= esc($error) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="<?= base_url('fakultas/update/' . $fakultas['id_fakultas']) ?>" method="post" enctype="multipart/form-data">
                    <?= csrf_field() ?>

                    <!-- Nama Fakultas -->
                    <div class="form-group mb-3">
                        <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
                        <select class="form-select" id="nama_fakultas" name="nama_fakultas" required>
                            <option value="" disabled>Pilih Fakultas</option>
                            <option value="Fakultas Ilmu Administrasi" <?= $fakultas['nama_fakultas'] === 'Fakultas Ilmu Administrasi' ? 'selected' : '' ?>>Fakultas Ilmu Administrasi</option>
                            <option value="Fakultas Teknik" <?= $fakultas['nama_fakultas'] === 'Fakultas Teknik' ? 'selected' : '' ?>>Fakultas Teknik</option>
                            <option value="Fakultas Hukum" <?= $fakultas['nama_fakultas'] === 'Fakultas Hukum' ? 'selected' : '' ?>>Fakultas Hukum</option>
                            <option value="Fakultas Ilmu Komputer" <?= $fakultas['nama_fakultas'] === 'Fakultas Ilmu Komputer' ? 'selected' : '' ?>>Fakultas Ilmu Komputer</option>
                            <option value="Fakultas Ilmu Komunikasi" <?= $fakultas['nama_fakultas'] === 'Fakultas Ilmu Komunikasi' ? 'selected' : '' ?>>Fakultas Ilmu Komunikasi</option>
                            <option value="Fakultas Agrobisnis & Rekayasa Pertanian" <?= $fakultas['nama_fakultas'] === 'Fakultas Agrobisnis & Rekayasa Pertanian' ? 'selected' : '' ?>>Fakultas Agrobisnis & Rekayasa Pertanian</option>
                            <option value="Fakultas Keguruan dan Ilmu Pendidikan" <?= $fakultas['nama_fakultas'] === 'Fakultas Keguruan dan Ilmu Pendidikan' ? 'selected' : '' ?>>Fakultas Keguruan dan Ilmu Pendidikan</option>
                        </select>
                    </div>

                    <!-- Link Website Fakultas -->
                    <div class="form-group mb-3">
                        <label for="link" class="form-label">Link Website Fakultas</label>
                        <input type="url" class="form-control" id="link" name="link" value="<?= esc($fakultas['link']) ?>" placeholder="Masukkan Link Website Fakultas" required>
                    </div>

                    <!-- Logo Fakultas -->
                    <div class="form-group">
                        <label for="gambar" class="form-label">Logo Fakultas</label>
                        <input type="file" class="form-control mb-3" id="gambar" name="gambar" accept="image/*">
                        <?php if (!empty($fakultas['logo'])): ?>
                            <img src="<?= base_url('foto/fakultas/' . $fakultas['logo']) ?>" alt="Logo Fakultas" style="max-width: 200px; max-height: 200px;">
                        <?php endif; ?>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>