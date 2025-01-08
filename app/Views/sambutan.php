<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sambutan Rektor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
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
    <!-- Visitor Count -->
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
  <!-- Heading -->
    <div class="text-center mb-4">
        <h5 class="text-primary">Tentang Kami</h5>
        <h1 class="fw-bold">Sambutan Rektor</h1>
    </div>

    <!-- Content -->
    <div class="text-center">
        <img src="<?= base_url('foto/rektor.png'); ?>" alt="Sejarah" class="img-fluid shadow mb-4 w-25">
        <h3 class="fw-bold" style="font-family: 'Roboto', sans-serif; font-weight: bold; font-size: 20px; color: black;">
        Dr. Drs. Ir. H. A. Moeslihat Komara, M.Si
        </h3>
        <div class="fs-5 mt-2" style="text-align: justify;">
            Universitas Subang berkomitmen untuk menghasilkan lulusan yang tidak hanya memiliki kompetensi akademik tinggi tetapi juga karakter yang tangguh dan berdaya saing di era globalisasi. Dalam mencapai visi tersebut, kami mengutamakan lingkungan belajar yang inklusif dan mendukung pengembangan diri, baik melalui program akademik maupun kegiatan kemahasiswaan. Dengan kerjasama dari berbagai pihak, baik lokal maupun internasional, kami berusaha untuk terus meningkatkan kualitas pendidikan di Universitas Subang.
        </div>
    </div>  
</div>
</div>
    <!-- footer -->
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mb-3">
                    <h5>Kampus I</h5>
                    <img src="<?= base_url('foto/kampus1.png'); ?>" alt="Kampus I" class="img-fluid" style="max-width: 300px;">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fas fa-location-dot text-white me-3 fs-5"></i>
                        <p class="mb-0">Jl. R.A. Kartini No. 4<br>Subang, Kabupaten Subang, Jawa Barat, Indonesia</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h5>Kampus II</h5>
                        <img src="<?= base_url('foto/kampus2.png'); ?>" alt="Kampus II" class="img-fluid" style="max-width: 300px;">
                        <div class="d-flex align-items-center mt-3">
                            <i class="fas fa-location-dot text-white me-3 fs-5"></i>
                            <p class="mb-0">Jl. Arief Rahman Hakim No. 8,<br>Cibogo, Kabupaten Subang, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h5>Hubungi kami</h5>
                        <div class="d-flex flex-column gap-3 mt-2">
                            <a href="#" target="_blank" class="text-white text-decoration-none d-flex align-items-center gap-2">
                                <i class="fab fa-instagram fs-3"></i> 
                                <span class="fs-6">universitas.subang</span>
                            </a>
                            <a href="#" target="_blank" class="text-white text-decoration-none d-flex align-items-center gap-2">
                                <i class="fab fa-youtube fs-3"></i> 
                                <span class="fs-6">universitas.subang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>