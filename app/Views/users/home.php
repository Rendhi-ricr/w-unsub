<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keunggulan Universitas Subang</title>
</head>

<body>
    <?= $this->extend('layouts/frontend/template'); ?>

    <?= $this->section('title'); ?>
    Home
    <?= $this->endSection(); ?>

    <?= $this->section('content'); ?>

    <!-- Banner -->
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="hero-section position-relative text-white text-center d-flex align-items-center justify-content-center"
                    style="height: 60vh; background: url('<?= base_url('foto/banner.png'); ?>') no-repeat center center/cover;">
                    <div class="overlay position-absolute" style="inset: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="content position-relative">
                        <h1 class="fw-bold">Selamat Datang Di</h1>
                        <h2 class="fw-bold">Universitas Subang</h2>
                        <h5 class="fst-italic">School Of Empowering People</h5>
                        <img src="<?= base_url('foto/kampus_merdeka.png'); ?>" alt="Kampus Merdeka" class="img-fluid mt-3" style="max-height: 100px;">
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-section position-relative text-white text-center d-flex align-items-center justify-content-center"
                    style="height: 60vh; background: url('<?= base_url('foto/banner.png'); ?>') no-repeat center center/cover;">
                    <div class="overlay position-absolute" style="inset: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="content position-relative">
                        <h1 class="fw-bold">Inovasi dan Inspirasi</h1>
                        <h2 class="fw-bold">Menuju Masa Depan</h2>
                        <h5 class="fst-italic">Together We Grow</h5>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="hero-section position-relative text-white text-center d-flex align-items-center justify-content-center"
                    style="height: 60vh; background: url('<?= base_url('foto/banner.png'); ?>') no-repeat center center/cover;">
                    <div class="overlay position-absolute" style="inset: 0; background-color: rgba(0, 0, 0, 0.5);"></div>
                    <div class="content position-relative">
                        <h1 class="fw-bold">Bersama Kita Bisa</h1>
                        <h2 class="fw-bold">Universitas Subang</h2>
                        <h5 class="fst-italic">Empowering Our Future</h5>
                    </div>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


    <!-- About -->
    <div class="about-section py-5" style="background-color: #ffffff;">
        <div class="container bg-primary text-white rounded-3 py-4 px-4 px-md-5 shadow">
            <div class="row align-items-center">
                <div class="col-md-4 text-center">
                    <img src="<?= base_url('foto/foto1.png'); ?>" alt="Logo Universitas" class="img-fluid shadow" style="border-radius: 8px;">
                </div>
                <div class="col-md-8">
                    <h3 class="fw-bold mb-3">Universitas Subang</h3>
                    <p class="mb-0">
                        Universitas Subang (Unsub) merupakan Universitas pertama yang ada di kabupaten Subang, memiliki 7 Fakultas dan 16 Program Studi (prodi) dengan jenjang pendidikan S2, S1, dan D3. Terdiri atas 2 (dua) kampus, yakni Kampus I dan Kampus II.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Keunggulan -->
    <div class="py-5" style="background-color: #EAEFF8;">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Keunggulan Universitas Subang</h2>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4" style="height: 100%; background-color: #ffffff;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="<?= base_url('foto/icon1.png'); ?>" alt="Icon" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h5 class="card-title fw-semibold mt-auto">Biaya Pendidikan Terjangkau</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4" style="height: 100%; background-color: #ffffff;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="<?= base_url('foto/icon2.png'); ?>" alt="Icon" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h5 class="card-title fw-semibold mt-auto">Program Studi Beragam</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm py-4" style="height: 100%; background-color: #ffffff;">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="mb-3">
                                <img src="<?= base_url('foto/icon3.png'); ?>" alt="Icon" class="img-fluid" style="max-width: 80px;">
                            </div>
                            <h5 class="card-title fw-semibold mt-auto">Tersedia Jalur Percepatan (RPL)</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5" style="background-color: #ffffff;">
        <div class="container text-warning" style="background-image: url('<?= base_url('foto/foto3.jpg'); ?>'); background-size: cover; background-position: center; border-radius: 15px; padding: 100px 15px;">
            <div class="row text-center">
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="display-4 fw-bold">2004</h1>
                        <p>Berdirinya Universitas Subang</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="display-4 fw-bold">16</h1>
                        <p>Program Studi</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="display-4 fw-bold">5000+</h1>
                        <p>Mahasiswa</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="p-3">
                        <h1 class="display-4 fw-bold">100+</h1>
                        <p>Dosen</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- layanan online -->
    <div class="container my-5">
        <h2 class="text-center mb-4 text-primary fw-bold">Layanan Online</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-3">
                <div class="text-center" style="background-color: #0056b3; border-radius: 15px; color: white; padding: 20px; height: 250px;">
                    <img src="<?= base_url('foto/siakad.png'); ?>" alt="SIAKAD" style="width: 150px; height: auto;">
                    <hr style="margin: 10px auto; width: 50px; height: 3px; background-color: #ff4d4d; border: none;">
                    <h5 style="margin-top: 15px; font-weight: bold;">SIAKAD</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center" style="background-color: #0056b3; border-radius: 15px; color: white; padding: 20px; height: 250px;">
                    <img src="<?= base_url('foto/elearning.png'); ?>" alt="E-Learning" style="width: 150px; height: auto;">
                    <hr style="margin: 10px auto; width: 50px; height: 3px; background-color: #ff4d4d; border: none;">
                    <h5 style="margin-top: 15px; font-weight: bold;">E-Learning</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center" style="background-color: #0056b3; border-radius: 15px; color: white; padding: 20px; height: 250px;">
                    <img src="<?= base_url('foto/ejournal.png'); ?>" alt="E-Journal" style="width: 150px; height: auto;">
                    <hr style="margin: 10px auto; width: 50px; height: 3px; background-color: #ff4d4d; border: none;">
                    <h5 style="margin-top: 15px; font-weight: bold;">E-Journal</h5>
                </div>
            </div>
            <div class="col-md-3">
                <div class="text-center" style="background-color: #0056b3; border-radius: 15px; color: white; padding: 20px; height: 250px;">
                    <img src="<?= base_url('foto/elibrary.png'); ?>" alt="E-Library" style="width: 150px; height: auto;">
                    <hr style="margin: 10px auto; width: 50px; height: 3px; background-color: #ff4d4d; border: none;">
                    <h5 style="margin-top: 15px; font-weight: bold;">E-Library</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- berita -->
    <div class="container py-5">
        <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Berita Terbaru</h2>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                    <div style="padding: 20px;">
                        <img src="<?= base_url('foto/berita1.png'); ?>" class="card-img-top" alt="Berita 1" style="height: 280px; object-fit: cover; border-radius: 10px;">
                    </div>
                    <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                        <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                            <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                            <span><i class="bi bi-eye"></i> 100</span>
                        </div>
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Selamat kepada Dr. Deni Mudian, M.Pd. Dosen PJKR FKIP UNSUB menjadi Manager Tim Petanque Kontingen...</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                    <div style="padding: 20px;">
                        <img src="<?= base_url('foto/berita2.png'); ?>" class="card-img-top" alt="Berita 2" style="height: 280px; object-fit: cover; border-radius: 10px;">
                    </div>
                    <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                        <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                            <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                            <span><i class="bi bi-eye"></i> 100</span>
                        </div>
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Penutupan Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Subang Tahun Akademik 2024/2025.</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                    <div style="padding: 20px;">
                        <img src="<?= base_url('foto/berita3.png'); ?>" class="card-img-top" alt="Berita 3" style="height: 280px; object-fit: cover; border-radius: 10px;">
                    </div>
                    <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                        <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                            <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                            <span><i class="bi bi-eye"></i> 100</span>
                        </div>
                        <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Sidang Senat Terbuka Universitas Subang Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Tahun Akademik...</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary"
                style="font-family: 'Poppins', sans-serif; border-radius: 20px; padding-left: 50px; padding-right: 50px;">
                Lihat Selengkapnya
            </a>
        </div>
        <!-- agenda -->
        <div class="container py-5">
            <h2 class="text-center mb-4" style="font-family: 'Poppins', sans-serif; font-weight: 600;">Agenda Terbaru</h2>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                        <div style="padding: 20px;">
                            <img src="<?= base_url('foto/berita1.png'); ?>" class="card-img-top" alt="Berita 1" style="height: 280px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                            <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                                <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                                <span><i class="bi bi-eye"></i> 100</span>
                            </div>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Selamat kepada Dr. Deni Mudian, M.Pd. Dosen PJKR FKIP UNSUB menjadi Manager Tim Petanque Kontingen...</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                        <div style="padding: 20px;">
                            <img src="<?= base_url('foto/berita2.png'); ?>" class="card-img-top" alt="Berita 2" style="height: 280px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                            <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                                <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                                <span><i class="bi bi-eye"></i> 100</span>
                            </div>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Penutupan Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Subang Tahun Akademik 2024/2025.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); height: 100%;">
                        <div style="padding: 20px;">
                            <img src="<?= base_url('foto/berita3.png'); ?>" class="card-img-top" alt="Berita 3" style="height: 280px; object-fit: cover; border-radius: 10px;">
                        </div>
                        <div class="card-body d-flex flex-column" style="flex-grow: 1;">
                            <div class="d-flex justify-content-between text-muted mb-2" style="font-size: 14px; font-family: 'Poppins', sans-serif;">
                                <span><i class="bi bi-calendar"></i> 11-28-2024</span>
                                <span><i class="bi bi-eye"></i> 100</span>
                            </div>
                            <h5 class="card-title" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 1rem;">Sidang Senat Terbuka Universitas Subang Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Tahun Akademik...</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-primary" style="font-family: 'Poppins', sans-serif; border-radius: 20px; padding-left: 50px; padding-right: 50px;">
                    Lihat Selengkapnya
                </a>
            </div>
        </div>


        <!-- mitra kerja -->
        <div class="container my-5" style="background-image: url('<?= base_url('foto/.png'); ?>'); background-size: cover; background-position: center center; width: 100%; min-height: 300px; padding: 0;">
            <h2 class="text-center text-black">Mitra Kami</h2>
            <div class="d-flex overflow-x-auto" style="padding: 20px 0; margin: 0;">
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m1.png'); ?>" alt="Shinhan University" width="150" height="150">
                </div>
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m2.png'); ?>" alt="Benteng Pancasila" width="150" height="150">
                </div>
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m3.png'); ?>" alt="Universiti Teknologi Mara" width="150" height="150">
                </div>
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m4.png'); ?>" alt="Universiti Teknologi Mara" width="150" height="150">
                </div>
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m5.png'); ?>" alt="Universiti Teknologi Mara" width="150" height="150">
                </div>
                <div class="col-3 text-center">
                    <img src="<?= base_url('foto/m1.png'); ?>" alt="Universiti Teknologi Mara" width="150" height="150">
                </div>
            </div>
        </div>
    </div>

    <!-- pmb -->
    <section class="position-relative text-center text-white">
        <img src="<?= base_url('foto/pmb.png'); ?>" alt="Penerimaan Mahasiswa Baru" class="img-fluid w-100" style="filter: brightness(60%);">
        <div class="position-absolute top-50 start-50 translate-middle">
            <h1 class="fw-bold" style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);">Penerimaan Mahasiswa Baru</h1>
            <a href="#" class="btn btn-primary btn-lg" style="border-radius: 25px; width: 300px;">Daftar Disini</a>
        </div>
    </section>




    <?= $this->endSection(); ?>

</body>

</html>