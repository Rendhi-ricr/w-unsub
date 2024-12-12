<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/frontend/header.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/css/frontend/sejarah.css'); ?>" rel="stylesheet">


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
            <li><a href="<?= base_url('users/home'); ?>" class="#">Home</a></li>
                <li class="has-dropdown">
                    <a href="#">Tentang Kami</a>
                    <ul class="submenu">
                        <li><a href="<?= base_url('users/sejarah'); ?>">Sejarah</a></li>
                        <li><a href="<?= base_url('users/visi_misi'); ?>">Visi & Misi</a></li>
                        <li><a href="<?= base_url('users/sambutan');?>">Sambutan Rektor</a></li>
                        <li><a href="<?= base_url('users/fasilitas');?>">Fasilitas</a></li>
                        <li><a href="<?= base_url('users/dokumen');?>">Dokumen Akreditasi</a></li>
                        <li><a href="<?= base_url('users/ukm');?>">UKM</a></li>

                    </ul>
                </li>
                <li class="has-dropdown">
                    <a href="#">Akademik & kemahasiswaan</a>
                    <ul class="submenu">
                    <li><a href="<?= base_url('users/fakultas'); ?>">Fakultas</a></li>
                    <li><a href="<?= base_url('users/beasiswa'); ?>">Beasiswa</a></li>
                    </ul>
                </li>
                <li>
                <li><a href="<?= base_url('users/kontak'); ?>">Kontak</a></li>
                </li>
            </ul>
        </nav>
    </div>
</header>
</body>
</html>
