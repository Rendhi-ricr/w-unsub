<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Subang</title>
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

                /* Dropdown Menu Styling */
        .dropdown-menu {
            background-color: #004d99 !important; /* Warna biru tua */
            border: none !important; /* Hilangkan border */
        }

        .dropdown-menu .dropdown-item {
            color: white !important; /* Warna teks submenu */
            font-size: 18px !important;
        }

        .dropdown-menu .dropdown-item:hover {
            background-color: #FFD700 !important; /* Warna kuning saat hover */
            color: #003366 !important; /* Warna teks biru tua saat hover */
        }


        /* Tampilkan dropdown saat hover */
        .dropdown:hover .dropdown-menu {
            display: block;
            margin-top: 0; /* Hilangkan jarak ekstra */
        }

        /* Navbar Utama */
        .navbar-main {
            background-color: #005BB5;
        }

        .navbar-main .nav-link {
            color: white;
            margin-left: 20px;
            font-size: 20px;
        }

        .navbar-main .nav-link:hover {
            color: #FFD700;
        }
    </style>
</head>

<body>
    <!-- Menu Atas -->
    <div class="menu-top">
        <div class="dropdown d-inline">
            <a class="dropdown-toggle" href="#" id="menuDosen" role="button">
                Dosen
            </a>
            <div class="dropdown-menu" aria-labelledby="menuDosen">
                <a class="dropdown-item" href="#">SISTER</a>
            </div>
        </div>

        <div class="dropdown d-inline ml-4">
            <a class="dropdown-toggle" href="#" id="menuAlumni" role="button">
                Alumni
            </a>
            <div class="dropdown-menu" aria-labelledby="menuAlumni">
                <a class="dropdown-item" href="#">Tracer Study</a>
            </div>
        </div>

        <div class="dropdown d-inline ml-4">
            <a class="dropdown-toggle" href="#" id="menuPMB" role="button">
                PMB
            </a>
            <div class="dropdown-menu" aria-labelledby="menuPMB">
                <a class="dropdown-item" href="#">Pendaftaran</a>
                <a class="dropdown-item" href="#">Syarat Pendaftaran</a>
            </div>
        </div>
    </div>

    <!-- Navbar Utama -->
    <nav class="navbar navbar-expand-lg navbar-main">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="foto/logo1.png" alt="Logo" width="80" height="80">
                <span style="color: white; font-weight: bold;">Universitas Subang</span>
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="users/home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Tentang Kami
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="users/sejarah">Sejarah</a>
                            <a class="dropdown-item" href="users/visi_misi">Visi & Misi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button">
                            Akademik
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Fakultas</a>
                            <a class="dropdown-item" href="users/beasiswa">Beasiswa</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
