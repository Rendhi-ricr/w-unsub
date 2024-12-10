<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/header.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/sejarah.css'); ?>" rel="stylesheet">


    <title>Universitas Subang</title>
   
</head>
<body>
    <!-- Header Section -->
    <header>
    <div class="top-menu">
        <div class="dropdown">
            <a href="#" class="dropdown-link">Dosen</a>
            <ul class="submenu">
                <li><a href="#profil-dosen">Sister</a></li>
            </ul>
        </div>
        <div class="dropdown">
            <a href="#" class="dropdown-link">Alumni</a>
            <ul class="submenu">
                <li><a href="#tracer-study">Tracer Study</a></li>
                <li><a href="#tracer-study">Career Center</a></li>
            </ul>
        </div>
    </div>
    <div class="main-menu">
        <div class="logo">
        <img src="<?= base_url('foto/logo1.png'); ?>" alt="Logo Universitas Subang">
            <div class="logo-text">
                <h1>Universitas Subang</h1>
                <span>MASAGI</span>
            </div>
        </div>
        <nav class="navbar">
            <ul class="menu">
            <li><a href="<?= base_url('frontend/home'); ?>" class="#">Home</a></li>
                <li class="has-dropdown">
                    <a href="#">Tentang Kami</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('frontend/sejarah'); ?>">Sejarah</a></li>
                        <li><a href="<?= base_url('frontend/visi_misi'); ?>">Visi & Misi</a></li>
                        <li><a href="<?= base_url('frontend/sambutan');?>">Sambutan Rektor</a></li>
                        <li><a href="<?= base_url('frontend/fasilitas');?>">Fasilitas</a></li>
                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Akademik</a>
                    <ul class="submenu">
                        <li><a href="#fakultas">Fakultas</a></li>
                        <li><a href="#beasiswa">Beasiswa</a></li>
                        <li><a href="#kalender-akademik">Kalender Akademik</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#kontak">Kontak</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>