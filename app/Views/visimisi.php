<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">

    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
    .bg-light-blue {
        background-color: #e9f2fe;
        position: relative;
        padding: 15px 0;
    }

    .vertical-line-wrapper {
        position: relative;
        display: inline-block;
    }

    .vertical-line-wrapper::before {
        content: "";
        position: absolute;
        left: -20px;
        top: -40px;
        height: 150px;
        width: 2px;
        background-color: #000;
    }
</style>
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
    <div class="container-fluid my-5">
    <div class="text-center mb-4">
        <h5 class="text-primary">Tentang Kami</h5>
        <h1 class="fw-bold">Visi & Misi</h1>
    </div>

    <!-- Banner -->
    <div class="bg-light-blue rounded p-4 mb-5">
        <div class="row align-items-center">
            <div class="col-md-3 text-center mb-3 mb-md-0">
                <img src="<?= base_url('foto/logo.png'); ?>" alt="Logo Universitas" class="img-fluid" style="height: 250px; width: auto;" onerror="this.src='path/to/default-image.png';">
            </div>

            <div class="col-md-5 d-flex align-items-center justify-content-start">
                <div class="text-start">
                    <h3 class="fw-bold" style="font-family: 'Poppins', sans-serif; line-height: 1; color: black; font-weight: 700; font-size: 48px;">Universitas</h3> <!-- Increased font size -->
                    <h4 class="fw-bold" style="font-family: 'Poppins', sans-serif; line-height: 1; color: black; font-weight: 700; font-size: 48px;">Subang</h4> <!-- Increased font size -->
                </div>
            </div>

            <!-- Tagline -->
            <div class="col-md-3 text-center">
                <div class="vertical-line-wrapper">
                    <h5 class="text-dark" style="font-family: 'Poppins', sans-serif; font-weight: 500; font-style: italic; font-size: 36px; white-space: nowrap;">School Of <br>Empowering People</h5>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Visi Section -->
    <div class="text-center mb-5">
        <h2 class="fw-bold mx-auto" style="max-width: 600px;">Visi</h2>
        <p class="fs-5 mx-auto" style="max-width: 800px;">
            Universitas Subang Berkembang dan Berkemuka di Tingkat Jawa Barat Tahun 2023
        </p>
    </div>

    <!-- Misi Section -->
    <div class="text-center mb-5">
        <h2 class="fw-bold">Misi</h2>
        <ul class="list-unstyled fs-5 mx-auto" style="max-width: 800px;">
            <li style="text-align: justify;">
                1. Menyelenggarakan pendidikan dan pembelajaran yang bermutu dalam rangka menghasilkan lulusan yang berilmu pengetahuan, bermoral pancasila, dan berjiwa interpreneurship.
            </li>
            <li style="text-align: justify;">
                2. Menjalin kerjasama dalam penelitian dengan berbagai pihak, baik dengan instansi pemerintah, swasta, dan lembaga lain dalam rangka meningkatkan mutu lulusan.
            </li>
            <li style="text-align: justify;">
                3. Menyelenggarakan pengabdian kepada masyarakat yang berorientasi pada pemberdayaan masyarakat melalui penerapan ilmu pengetahuan teknologi dan seni.
            </li>
            <li style="text-align: justify;">
                4. Ikut serta dalam upaya pencapaian Visi dan Misi Kabupaten Subang dan Provinsi Jawa Barat.
            </li>
        </ul>
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