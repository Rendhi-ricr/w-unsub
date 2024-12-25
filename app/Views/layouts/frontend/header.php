<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Universitas Subang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <style>
        /* Menu Atas */
        .menu-top {
            background-color: #004d99;
            text-align: right;
            padding: 15px 40px;
        }

        .menu-top a {
            color: white;
            margin-left: 20px;
            text-decoration: none;
            font-size: 20px;
        }

        .menu-top a:hover {
            color: #FFD700;
        }

        .menu-top .dropdown-menu {
            background-color: #004d99;
            border: none;
        }

        .menu-top .dropdown-item {
            color: white;
        }

        .menu-top .dropdown-item:hover {
            background-color: #FFD700;
            color: #003366;
        }

        .menu-top .dropdown-item:active {
            background-color: #FFD700 !important;
            color: #003366 !important;
        }

        /* Visitor Count Section */
        .visitor-count {
            display: inline-block;
            margin-left: 15px;
            font-size: 16px;
            color: #ffffff;
            font-weight: bold;
        }

        .visitor-count i {
            margin-right: 5px;
            color: #FFD700;
        }

        .visitor-count span {
            color: #FFD700;
        }

        .visitor-count:hover {
            cursor: pointer;
            color: #FFD700;
        }

        .dropdown-toggle::after {
            display: none !important;
        }

        /* Dropdown Menu */
        .navbar-nav .dropdown-menu {
            position: absolute;
            top: 70px;
            left: 0;
            z-index: 1000;
            background-color: #004d99;
            border: none;
            display: none;
        }

        .navbar-nav .dropdown:hover .dropdown-menu {
            display: block;
        }

        .navbar-nav .dropdown-item {
            color: white;
        }

        .navbar-nav .dropdown-item:hover {
            background-color: #FFD700;
            color: #003366;
        }

        .navbar-nav .dropdown-item:active {
            background-color: #FFD700 !important;
            color: #003366 !important;
        }

        /* Navbar Utama */
        .navbar-main {
            background-color: #005BB5;
            padding: 5px 0;
        }

        .navbar-main .nav-link {
            color: white;
            margin-left: 20px;
            font-size: 25px;
        }

        .navbar-main .nav-link:hover {
            color: #FFD700;
        }

        /* Teks Logo Universitas */
        .logo-text {
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin-left: 20px;
            color: white;
        }

        .logo-text h5 {
            margin: 0;
            font-size: 25px;
            font-weight: bold;
        }

        .logo-text span {
            color: #FFD700;
            font-size: 25px;
            font-weight: bold;
        }

        /* Submenu Fakultas di sebelah kanan */
        .dropdown-menu .dropright .dropdown-menu {
            top: 0;
            left: 100%;
            margin-top: 0;
            margin-left: 0;
            background-color: #004d99;
            border: none;
        }

        .dropdown-menu .dropright:hover>.dropdown-menu {
            display: block;
        }

        .dropdown-menu .dropright .dropdown-item:hover {
            background-color: #FFD700;
            color: #003366;
        }

        /* Responsiveness */
        @media (max-width: 767px) {
            .menu-top {
                text-align: left;
            }

            .navbar-main .nav-link {
                font-size: 18px;
                margin-left: 15px;
            }

            .visitor-count {
                font-size: 14px;
            }

            .navbar-toggler {
                border-color: white;
            }

            .navbar-toggler-icon {
                background-color: white;
            }

            .logo-text h5 {
                font-size: 20px;
            }

            .logo-text span {
                font-size: 18px;
            }
        }
    </style>
</head>

<body>
    <!-- Menu Atas -->
    <div class="menu-top">
        <div class="dropdown d-inline">
            <a class="dropdown-toggle" href="#" id="dropdownDosen" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dosen</a>
            <div class="dropdown-menu" aria-labelledby="dropdownDosen">
                <a class="dropdown-item" href="#">SISTER</a>
            </div>
        </div>
        <div class="dropdown d-inline">
            <a class="dropdown-toggle" href="#" id="dropdownAlumni" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alumni</a>
            <div class="dropdown-menu" aria-labelledby="dropdownAlumni">
                <a class="dropdown-item" href="https://tracerstudy.kemdikbud.go.id/kuesioner">Tracer Study</a>
            </div>
        </div>
        <div class="dropdown d-inline">
            <a class="dropdown-toggle" href="#" id="dropdownPMB" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PMB</a>
            <div class="dropdown-menu" aria-labelledby="dropdownPMB">
                <a class="dropdown-item" href="https://pmb.unsub.ac.id/">PMB Unsub</a>
            </div>
        </div>
        <div class="visitor-count">
            <i class="fas fa-eye"></i>
            <span id="visitorCount"><?= $kun; ?></span>
        </div>
    </div>

    <!-- Navbar Utama -->
    <nav class="navbar navbar-expand-lg navbar-main">
        <div class="container-fluid d-flex align-items-center">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="<?= base_url('foto/logo1.png'); ?>" alt="Logo" width="100" height="100" class="d-inline-block align-top">
                <div class="logo-text">
                    <h5>Universitas Subang</h5>
                    <span>Masagi</span>
                </div>
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu Utama -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('users/home'); ?>">Home</a>
                    </li>

                    <!-- Tentang Kami -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownTentang" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownTentang">
                            <a class="dropdown-item" href="<?= site_url('users/sejarah'); ?>">Sejarah</a>
                            <a class="dropdown-item" href="<?= site_url('users/visi_misi'); ?>">Visi & Misi</a>
                            <a class="dropdown-item" href="<?= site_url('users/sambutan'); ?>">Sambutan Rektor</a>
                            <a class="dropdown-item" href="<?= site_url('users/fasilitas'); ?>">Fasilitas</a>
                            <a class="dropdown-item" href="<?= site_url('users/dokumen'); ?>">Dokumen Akreditasi</a>
                            <a class="dropdown-item" href="<?= site_url('users/ukm'); ?>">UKM</a>
                        </div>
                    </li>

                    <!-- Akademik -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownAkademik" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Akademik & Kemahasiswaan
                        </a>
                        <div class="dropdown-menu" aria-labelledby="dropdownAkademik">
                            <div class="dropdown dropright">
                                <a class="dropdown-item dropdown-toggle" href="#" id="dropdownFakultas" role="button" aria-haspopup="true" aria-expanded="false">
                                    Fakultas
                                </a>
                                <div class="dropdown-menu" aria-labelledby="dropdownFakultas">
                                    <a class="dropdown-item" href="https://fia.unsub.ac.id/">Fakultas Ilmu Administrasi</a>
                                    <a class="dropdown-item" href="https://teknik.unsub.ac.id/">Fakultas Teknik</a>
                                    <a class="dropdown-item" href="https://hukum.unsub.ac.id/">Fakultas Hukum</a>
                                    <a class="dropdown-item" href="https://fasilkom.unsub.ac.id/">Fakultas Ilmu Komputer</a>
                                    <a class="dropdown-item" href="https://fikom.unsub.ac.id/">Fakultas Ilmu Komunikasi</a>
                                    <a class="dropdown-item" href="https://pertanian.unsub.ac.id/">Fakultas Agro Bisnis dan Rekayasa Pertanian</a>
                                    <a class="dropdown-item" href="https://fkip.unsub.ac.id/">Fakultas Keguruan dan Ilmu Pendidikan</a>
                                    <a class="dropdown-item" href="https://map.unsub.ac.id/">Magister Administrasi Public</a>
                                </div>
                            </div>
                            <a class="dropdown-item" href="<?= site_url('users/beasiswa'); ?>">Beasiswa</a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>