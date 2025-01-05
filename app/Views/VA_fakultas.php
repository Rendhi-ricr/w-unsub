<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Data Fakultas<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">
    <?php if (session()->getFlashdata('success')) : ?>
        <div class="alert alert-success fade show" role="alert">
            <?= session()->getFlashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Fakultas</h1>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="<?= base_url('fakultas/tambah') ?>" class="btn btn-primary"><i class="ti ti-plus ti-sm"></i> Tambah</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">

            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Fakultas</th>
                                    <th>Program Studi</th>
                                    <th>Link Fakultas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($fakultas as $fak) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $fak['nama_fakultas']; ?></td>
                                        <td><img src="<?= base_url('foto/fakultas/' . $fak['logo']) ?>" alt="<?= $fak['nama_fakultas'] ?>" style="width: 200px; heigh:10px;"></td>
                                        <td><a href="<?= $fak['link']; ?>"><?= $fak['nama_fakultas']; ?></a></td>
                                        <td>
                                            <a href="<?= base_url('fakultas/edit/' . $fak['id_fakultas']) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('fakultas/delete/' . $fak['id_fakultas']) ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin akan menghapus data ini?')">Hapus</a>
                                        </td>
                                    </tr>

                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<?= $this->endSection() ?>