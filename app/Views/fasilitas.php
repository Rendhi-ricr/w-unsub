<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fasilitas</title>
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
  <!-- Header Section -->
    <div class="text-center mb-5">
      <h5 class="text-primary">Tentang Kami</h5>
      <h1 class="fw-bold mb-4" style="font-size: 2.5rem;">Fasilitas Kami</h1>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
          <img src="<?= base_url('foto/fasilitas1.png'); ?>" class="card-img-top" alt="Fasilitas 1" style="height: 250px; object-fit: cover;">
          <div class="card-body text-center bg-light p-4">
            <h5 class="card-title text-dark fs-5 fw-semibold">Lab Komputer</h5>
            <p class="card-text text-muted">Lab komputer di Universitas Subang adalah fasilitas penunjang pembelajaran dengan perangkat komputer modern dan koneksi internet yang stabil, ideal untuk akademik, praktikum, dan penelitian.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
          <img src="<?= base_url('foto/fasilitas2.png'); ?>" class="card-img-top" alt="Fasilitas 2" style="height: 250px; object-fit: cover;">
          <div class="card-body text-center bg-light p-4">
            <h5 class="card-title text-dark fs-5 fw-semibold">Perpustakaan</h5>
            <p class="card-text text-muted">Perpustakaan kami menyediakan berbagai koleksi buku, jurnal ilmiah, e-book, dan ruang baca nyaman untuk penelitian dan belajar di lingkungan yang tenang.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
          <img src="<?= base_url('foto/fasilitas3.png'); ?>" class="card-img-top" alt="Fasilitas 3" style="height: 250px; object-fit: cover;">
          <div class="card-body text-center bg-light p-4">
            <h5 class="card-title text-dark fs-5 fw-semibold">Lapangan</h5>
            <p class="card-text text-muted">Lapangan di kampus bisa digunakan untuk futsal, basket, dan area olahraga luar ruangan yang mendukung aktivitas fisik dan kebugaran mahasiswa.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
      <div class="col">
        <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
          <img src="<?= base_url('foto/fasilitas4.png'); ?>" class="card-img-top" alt="Fasilitas 4" style="height: 250px; object-fit: cover;">
          <div class="card-body text-center bg-light p-4">
            <h5 class="card-title text-dark fs-5 fw-semibold">Masjid</h5>
            <p class="card-text text-muted">Masjid Universitas Subang adalah tempat ibadah yang nyaman, dilengkapi dengan fasilitas seperti area wudu, tempat kegiatan keagamaan, serta ruang untuk pengajian dan shalat berjamaah.</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card shadow-lg border-0 h-100 rounded overflow-hidden">
          <img src="<?= base_url('foto/fasilitas5.png'); ?>" class="card-img-top" alt="Fasilitas 5" style="height: 250px; object-fit: cover;">
          <div class="card-body text-center bg-light p-4">
            <h5 class="card-title text-dark fs-5 fw-semibold">Internet dan Wi-Fi</h5>
            <p class="card-text text-muted">Dengan fasilitas internet dan Wi-Fi cepat yang tersebar di seluruh kampus, mahasiswa dapat mengakses informasi dan berkolaborasi secara daring dengan lancar di setiap area kampus.</p>
          </div>
        </div>
      </div>
    </div>
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