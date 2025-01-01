<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Data Agenda<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Agenda</h1>
            </div>
            <div class="col-md-6">
                <div class="text-end">
                    <a href="<?= base_url('admin/agenda/tambah') ?>" class="btn btn-primary"><i class="ti ti-plus ti-sm"></i> Tambah</a>
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
                                    <th>Nama Agenda</th>
                                    <th>Deskripsi</th>
                                    <th>Tanggal</th>
                                    <th>tempat</th>
                                    <th>Penyelenggara</th>
                                    <th>Tanggal Dibuat</th>
                                    <th>Banner</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($agenda as $a) :
                                ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $a['nama_acara']; ?></td>
                                        <td><?= $a['deskripsi']; ?></td>
                                        <td><?= $a['tanggal']; ?></td>
                                        <td><?= $a['tempat']; ?></td>
                                        <td><?= $a['penyelenggara']; ?></td>
                                        <td><?= $a['tanggal_buat']; ?></td>
                                        <td><img src="<?= base_url('foto/agenda/' . $a['banner']) ?>" alt="Berita" style="width: 200px; heigh:10px;"></td>
                                        <td>
                                            <a href="<?= base_url('admin/agenda/edit/' . $a['id_agenda']) ?>" class="btn btn-warning">Edit</a>
                                            <a href="<?= base_url('admin/agenda/delete/' . $a['id_agenda']) ?>" class="btn btn-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="konfirmasiHapusData" tabindex="-1" aria-labelledby="konfirmasiHapusDataLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="konfirmasiHapusDataLabel">Hapus Data</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            <span class="title-delete text-danger"></span>
                            <p>Apakah Data Ini Akan di Hapus ?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                            <a class="btn btn-danger btn-ok">Ya, Hapus data</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="confirmModalLabel">Konfirmasi penghapusan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="btn-close"></button>
                        </div>
                        <div class="modal-body">
                            Apakah Anda yakin ingin membuang data yang dipilih?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" id="confirm-delete-btn" class="btn btn-danger">Ya, Hapus data</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>

<?= $this->endSection() ?>