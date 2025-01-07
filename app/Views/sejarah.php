<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sejarah</title>
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
  <div class="text-center mb-4">
    <h5 class="text-primary">Tentang Kami</h5>
    <h1 class="fw-bold">Sejarah</h1>
  </div>

  <div class="text-center">
    <img src="<?= base_url('foto/sejarah.png'); ?>" alt="Sejarah" class="img-fluid shadow mb-4 w-50">
        <div>
            <p style="text-align: justify;">
                Yayasan Kutawaringin Subang sebenarnya sudah didirikan dan diresmikan sejak tanggal 10 November 1964 dengan dibukanya Universitas Kutawaringin (UNKUWA) yang digagas oleh Bapak Otje Djunjunan, Bapak R.H Acu Samsudin, dan Bapak R.Erawan Asmara, yang didukung oleh berbagai pihak antara lain PGRI, Pemda Subang, Organisasi Politik dll. _n_ Saat itu pula dibukannya Fakultas Hukum dan Pengetahuan Masyarakat (FHPM) kelas jauh Fakultas Hukum Universitas Padjajaran (UNPAD) yang kemudian dibuka pula Fakultas Keguruan dan Ilmu Pendidikan (FKIP) Fillial IKIP Bandung pada tahun 1965.
            </p>
            <p style="text-align: justify;">
                Karena berbagai hal keberadaan Universitas Kutawaringin Subang pada Tahun 1969 terhenti termasuk akibat ada larangan bagi perguruan tinggi tidak diperbolehkan membuka kelas jauh. Selanjutnya pada tahun 1982 atas prakarsa Bapak Bupati Ir. Sukanda Karta Sasmita (alm) Yayasan Kutawaringin Subang dibangkitkan kembali dan dibukanya Sekolah Tinggi Ilmu Administrasi (STIA) kerjasama dengan Universitas Padjajaran (UNPAD) Bandung, dalam rangka meningkatkan kualitas SDM aparatur Pemerintah Daerah Kabupaten Subang, dan masyarakat Subang pada umumnya.
            </p>
            <p style="text-align: justify;">
                Berikut atas prakarsa Bapak Bupati Drs. H. Abdul Wachyan didirikan pula Sekolah Tinggi Teknik (STT) Kutawaringin Subang tahun 1997 dalam rangka mengantisipasi kebutuhan tenaga kerja pabrik industri TEXMACO di kecamatan Pabuaran. Cita-cita Yayasan Kutawaringin Subang mendirikan Universitas baru dapat diwujudkan berkat prakarsa Bapak Drs. Eep Hidayat sejak menjabat ketua DPRD II Subang sampai menjadi Bupati Subang Periode 2004-2009 bahkan hingga saat ini.
            </p>
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