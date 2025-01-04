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
                    <li><?= $error ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="row">
        <div class="col-12">
            <div class="card p-4">
                <form action="<?= base_url('fakultas/update/' . $fakultas['id_fakultas']) ?>" method="post">
                    <?= csrf_field() ?>

                    <!-- Nama Fakultas -->
                    <div class="form-group mb-3">
                        <label for="nama_fakultas" class="form-label">Nama Fakultas</label>
                        <select class="form-select" id="nama_fakultas" name="nama_fakultas" required>
                            <option value="" disabled>Pilih Fakultas</option>
                            <option value="Fakultas Teknik" <?= $fakultas['nama_fakultas'] === 'Fakultas Teknik' ? 'selected' : '' ?>>Fakultas Teknik</option>
                            <option value="Fakultas Ekonomi dan Bisnis" <?= $fakultas['nama_fakultas'] === 'Fakultas Ekonomi dan Bisnis' ? 'selected' : '' ?>>Fakultas Ekonomi dan Bisnis</option>
                            <option value="Fakultas Ilmu Sosial dan Politik" <?= $fakultas['nama_fakultas'] === 'Fakultas Ilmu Sosial dan Politik' ? 'selected' : '' ?>>Fakultas Ilmu Sosial dan Politik</option>
                            <option value="Fakultas Pertanian" <?= $fakultas['nama_fakultas'] === 'Fakultas Pertanian' ? 'selected' : '' ?>>Fakultas Pertanian</option>
                            <option value="Fakultas Hukum" <?= $fakultas['nama_fakultas'] === 'Fakultas Hukum' ? 'selected' : '' ?>>Fakultas Hukum</option>
                        </select>
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
                            required><?= esc($fakultas['prodi']) ?></textarea>
                    </div>

                    <!-- Link -->
                    <div class="form-group mb-3">
                        <label for="link" class="form-label">Link Website Fakultas</label>
                        <input
                            type="url"
                            class="form-control"
                            id="link"
                            name="link"
                            value="<?= esc($fakultas['link']) ?>"
                            placeholder="Masukkan Link Website Fakultas"
                            required>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit" class="btn btn-success">Update</button>
                    <a href="<?= base_url('fakultas/aindex') ?>" class="btn btn-secondary">Batal</a>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>