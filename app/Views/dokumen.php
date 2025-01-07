<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dokumen Akreditasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Menu Atas -->
    <div class="menu-top">
    <div class="dropdown d-inline">
        <a class="dropdown-toggle" href="#" id="dropdownDosen" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dosen</a>
        <div class="dropdown-menu" aria-labelledby="dropdownDosen">
            <a class="dropdown-item" href="http://sister.unsub.ac.id/">SISTER</a>
        </div>
    </div>
    <div class="dropdown d-inline">
        <a class="dropdown-toggle" href="#" id="dropdownAlumni" role="button" data-bs-toggle="dropdown" aria-expanded="false">Alumni</a>
        <div class="dropdown-menu" aria-labelledby="dropdownAlumni">
            <a class="dropdown-item" href="https://tracerstudy.kemdikbud.go.id/kuesioner">Tracer Study</a>
        </div>
    </div>
    <div class="dropdown d-inline">
        <a class="dropdown-toggle" href="#" id="dropdownPMB" role="button" data-bs-toggle="dropdown" aria-expanded="false">PMB</a>
        <div class="dropdown-menu" aria-labelledby="dropdownPMB">
            <a class="dropdown-item" href="https://pmb.unsub.ac.id/">PMB Unsub</a>
        </div>
    </div>
    <!-- Visitor -->
    <div class="visitor-count">
        <i class="fas fa-eye"></i>
        <span id="visitorCount"><?= $kun; ?></span>
    </div>
</div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-main">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('foto/logo.png'); ?>" alt="Logo" width="100" height="100" class="d-inline-block align-top">
                <div class="logo-text">
                    <h5>Universitas Subang</h5>
                    <span>Masagi</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Utama -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('home'); ?>">Home</a>
                    </li>

                    <!-- Tentang Kami -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownTentang" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownTentang">
                            <a class="dropdown-item" href="<?= site_url('sejarah'); ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= site_url('visimisi'); ?>">Visi & Misi</a>
                            <a class="dropdown-item" href="<?= site_url('sambutan'); ?>">Sambutan Rektor</a>
                            <a class="dropdown-item" href="<?= site_url('fasilitas'); ?>">Fasilitas</a>
                            <a class="dropdown-item" href="<?= site_url('dokumen'); ?>">Dokumen Akreditasi</a>
                        </div>
                    </li>

                    <!-- Akademik -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownAkademik" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Akademik & Kemahasiswaan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAkademik">
                            <a class="dropdown-item" href="<?= site_url('fakultas'); ?>">Fakultas</a>
                            <a class="dropdown-item" href="<?= site_url('beasiswa'); ?>">Beasiswa</a>
                            <a class="dropdown-item" href="<?= site_url('ukm'); ?>">UKM</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownInformasi" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Informasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownInformasi">
                            <a class="dropdown-item" href="<?= site_url('berita'); ?>">Berita</a>
                            <a class="dropdown-item" href="<?= site_url('agenda'); ?>">Agenda</a>
                        </div>
                    </li>

                    <!-- Kontak Kami -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- content -->
    <div class="container my-5">
    <div class="text-center mb-5">
        <h5 class="text-primary">Tentang Kami</h5>
        <h1 class="fw-bold">Dokumen Akreditasi</h1>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th class="text-primary">Nama Dokumen</th>
                    <th class="text-primary">Daftar Detail</th>
                </tr>
            </thead>
            <tbody>
                <!-- Universitas -->
                <tr class="table-primary">
                    <td>Akreditasi Universitas</td>
                    <td>
                        <a href="https://drive.google.com/file/d/15UZZ29whAia9bl7gZFH-l3UiAHGPSUzR/view" class="text-primary" target="_blank">Sertifikat Akreditasi</a>
                    </td>
                </tr>
                <tr>
                    <td>Akreditasi Fakultas Ilmu Administrasi</td>
                    <td>
                        <ul class="list-unstyled">
                            <li>
                                <strong>Ilmu Administrasi Negara</strong>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/11NyKtCk8I9QnAwrG8_AGPhmfaG3BFpUU/view" class="text-primary" target="_blank">2009 – 2014</a></li>
                                    <li><a href="https://drive.google.com/file/d/1SuRZohsLLDru7rtjV7EpVRiNWdPHhMv9/view" class="text-primary" target="_blank">2014 – 2019</a></li>
                                    <li><a href="https://drive.google.com/file/d/1Gk3g0mjUAoJV1sxkRe5h1vLkyHEXNvZe/view" class="text-primary" target="_blank">2020 – 2025</a></li>
                                </ul>
                            </li>
                            <li>
                                <strong>Ilmu Administrasi Niaga</strong>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1rTF1FpkDWWjVoqwU97AACO_SUn3KSGH_/view" class="text-primary" target="_blank">2011 – 2016</a></li>
                                    <li><a href="https://drive.google.com/file/d/1fvlzt9XJTHGDo-X8_m9KQUov8hSwDyQC/view" class="text-primary" target="_blank">2016 – 2021</a></li>
                                    <li><a href="https://drive.google.com/file/d/1Wi8dAvrG0C8cZ4ZO1gW5qzqiZFhhKQut/view" class="text-primary" target="_blank">2021 – 2026</a></li>
                                </ul>
                            </li>
                            <li>
                                <strong>Ilmu Administrasi Keuangan</strong>
                                <ul>
                                    <li><a href="https://drive.google.com/file/d/1v4gExaA8sR9g4ye5YfqpzvRJhFlVQRao/view" class="text-primary" target="_blank">2011 – 2016</a></li>
                                    <li><a href="https://drive.google.com/file/d/1bHJlE7qsAL0Eck5d2QaMqxecV9zj114i/view" class="text-primary" target="_blank">2016 – 2021</a></li>
                                </ul>
                            </li>
                        </ul>
                    </td>
                </tr>
                <!-- Fakultas Ilmu Komunikasi -->
                <tr class="table-primary">
                    <td>Akreditasi Fakultas Ilmu Komunikasi</td>
                    <td>
                        <a href="https://unsub.ac.id/wp-content/uploads/2021/12/Sertifikat-Akreditasi-fikom-20182023.pdf" class="text-primary" target="_blank">Ilmu Komunikasi</a>
                    </td>
                </tr>
                <tr>
                    <td>Akreditasi Fakultas Ilmu Hukum</td>
                    <td>
                        <a href="https://unsub.ac.id/wp-content/uploads/2021/06/SSertifikat-35179-7032c2b69644a5d653d9adaa6f945dc3-1.pdf" class="text-primary" target="_blank">Ilmu Hukum</a>
                    </td>
                </tr>
                <!-- Fakultas Ilmu Komputer -->
                <tr class="table-primary">
                    <td>Akreditasi Fakultas Ilmu Komputer</td>
                    <td>
                        <a href="https://unsub.ac.id/wp-content/uploads/2021/04/null_page-0001-2.jpg" class="text-primary" target="_blank">Sistem Informasi</a>
                    </td>
                </tr>
                <!-- Fakultas Keguruan -->
                <tr>
                    <td>Akreditasi Fakultas Keguruan dan Ilmu Pendidikan</td>
                    <td>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2021/12/SERTIFIKAT-AKREDITASI-PJKR.pdf" class="text-primary" target="_blank">Pendidikan Jasmani Kesehatan dan Rekreasi</a>
                            </li>
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/Piagam-Akreditas-Matematika.jpg" class="text-primary" target="_blank">Pendidikan Matematika</a>
                            </li>
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/SERTIFIKAT-AKREDITASI-PRODI-BAHASA-INGGRIS.pdf" class="text-primary" target="_blank">Pendidikan Bahasa Inggris</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                <!-- Fakultas Agrobisnis -->
                <tr class="table-primary">
                    <td>Fakultas Agrobisnis dan Rekayasa Pertanian</td>
                    <td>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/AKRED-AGRIBISNIS_cp.jpg" class="text-primary" target="_blank">Agrobisnis</a>
                            </li>
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2021/12/null.pdf" class="text-primary" target="_blank">Agroteknologi</a>
                            </li>
                        </ul>
                    </td>
                </tr>
                <!-- Fakultas Teknik -->
                <tr>
                    <td>Fakultas Teknik</td>
                    <td>
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/sipil-001.jpg" class="text-primary" target="_blank">Teknik Sipil</a>
                            </li>
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/teknik-arsitektur-001-1.jpg" class="text-primary" target="_blank">Teknik Arsitektur</a>
                            </li>
                            <li>
                                <a href="https://unsub.ac.id/wp-content/uploads/2019/11/teknik-mesin-001_cp-2.jpg" class="text-primary" target="_blank">Teknik Mesin</a>
                            </li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Kampus I</h5>
                    <img src="<?= base_url('foto/kampus1.png');?>" alt="Kampus I" style="max-width: 300px;">
                    <p>Jl. R.A. Kartini No. 4 Subang, Kabupaten Subang, Jawa Barat, Indonesia</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5>Kampus II</h5>
                    <img src="<?= base_url('foto/kampus2.png');?>" alt="Kampus II" style="max-width: 300px;">
                    <p>Jl. Arief Rahman Hakim No. 8, Cibogo, Kabupaten Subang, Jawa Barat, Indonesia</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>