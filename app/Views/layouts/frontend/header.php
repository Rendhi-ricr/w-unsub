<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Universitas Subang</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Menu Atas */
        .menu-top {
            background-color: #004d99;
            text-align: right;
            padding: 15px 40px;
        }

        .menu-top a {
            color: white;
            margin-left: 55px;
            text-decoration: none;
            font-size: 20px;
        }

        .menu-top a:hover {
            color: #FFD700;
        }

        .dropdown-menu {
            background-color: #004d99; 
            border: none;
        }

        .dropdown-item {
            color: white;
        }

        .dropdown-item:hover {
            background-color: #003366;
            color: #FFD700;
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

        .dropdown-toggle::after {
            display: none !important;
        }
    </style>
</head>
<body>

<!-- Menu Atas -->
<div class="menu-top">
    <div class="dropdown d-inline">
        <a class="dropdown-toggle" href="#" id="dropdownMenuTop1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dosen
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuTop1">
            <a class="dropdown-item" href="#">SISTER</a>
        </div>
    </div>

    <div class="dropdown d-inline ml-4">
        <a class="dropdown-toggle" href="#" id="dropdownMenuTop2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Alumni
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuTop2">
            <a class="dropdown-item" href="#">Tracer Study</a>
        </div>
    </div>

    <div class="dropdown d-inline ml-4">
        <a class="dropdown-toggle" href="#" id="dropdownMenuTop3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PMB
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuTop3">
            <a class="dropdown-item" href="#">Pendaftaran</a>
            <a class="dropdown-item" href="#">Syarat Pendaftaran</a>
        </div>
    </div>
</div>

<!-- Navbar Utama -->
<nav class="navbar navbar-expand-lg navbar-main">
    <div class="container-fluid d-flex align-items-center">
        <!-- Logo Universitas -->
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="foto/logo1.png" alt="Logo" width="100" height="100" class="d-inline-block align-top">
            <div class="logo-text">
                <h5>Universitas Subang</h5>
                <span>Masagi</span>
            </div>
        </a>

        <!-- Toggle button for mobile -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Utama -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>

                <!-- Tentang Kami -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownTentang" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownTentang">
                        <a class="dropdown-item" href="users/sejarah">Sejarah</a>
                        <a class="dropdown-item" href="users/visi_misi">Visi & Misi</a>
                        <a class="dropdown-item" href="users/sambutan">Sambutan Rektor</a>
                        <a class="dropdown-item" href="users/fasilitas">fasilitas</a>
                        <a class="dropdown-item" href="#">Dokumen Akreditasi</a>
                        <a class="dropdown-item" href="#">UKM</a>

                    </div>
                </li>
 
                <!-- Akademik -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownAkademik" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Akademik
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownAkademik">
                        <a class="dropdown-item" href="#">Fakultas</a>
                        <a class="dropdown-item" href="users/beasiswa">Beasiswa</a>
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

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>  