<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Data UKM<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data UKM</h1>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="<?= site_url('admin/ukm/tambah') ?>" class="btn btn-primary"><i class="ti ti-plus ti-sm"></i> Tambah</a>
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
                                    <th>Nama UKM</th>
                                    <th>Deskripsi</th>
                                    <th>Kontak</th>
                                    <th>Foto</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php
                            $no = 1;
                            foreach ($ukm as $u) : ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $u['nama_ukm']; ?></td>
                                    <td><?= $u['deskripsi']; ?></td>
                                    <td><?= $u['kontak']; ?></td>
                                    <td><img src="<?= base_url('foto/UKM/' . $u['gambar']) ?>" alt="UKM" style="width: 200px; heigh:10px;"></td>
                                    <td>
                                        <a href="<?= base_url('admin/ukm/edit/' . $u['id_ukm']) ?>" class="btn btn-warning">Edit</a>
                                        <a href="<?= base_url('admin/ukm/delete/' . $u['id_ukm']) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>