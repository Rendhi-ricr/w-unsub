<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Home
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>
<!-- Hero Section -->
<div class="hero" style="background-image: url('<?= base_url('foto/banner.png'); ?>'); background-size: cover; background-position: center; height: 350px; color: white; text-align: center;">
    <h1>Selamat Datang Di</h1>
    <h1>Universitas Subang</h1>
    <p>School Of Empowering People</p>
    <img src="<?= base_url('foto/kampus_merdeka.png'); ?>" alt="Kampus Merdeka Logo">
</div>

<!-- About Section -->
<div class="about">
    <div class="about-container">
        <img src="<?= base_url('foto/foto1.png'); ?>" alt="Universitas Subang">
        <div class="about-content">
            <h2>Universitas Subang</h2>
            <p>
                Universitas Subang (Unsub) merupakan Universitas pertama yang ada di kabupaten Subang,
                memiliki 7 Fakultas dan 16 Program Studi (prodi) dengan jenjang pendidikan S2, S1, dan D3.
                Terdiri atas 2 (dua) kampus, yakni Kampus I dan Kampus II.
            </p>
        </div>
    </div>
</div>
<!-- Keunggulan Universitas Subang Section -->
<div class="keunggulan">
    <h2>Keunggulan Universitas Subang</h2>
    <div class="cards-container">
        <div class="card">
            <h3>Biaya Pendidikan Terjangkau</h3>
            <img src="<?= base_url('foto/icon1.png'); ?>" alt="Biaya Pendidikan Terjangkau">
        </div>
        <div class="card">
            <h3>Program Studi Beragam</h3>
            <img src="<?= base_url('foto/icon2.png'); ?>" alt="Program Studi Beragam">
        </div>
        <div class="card">
            <h3>Tersedia Jalur Percepatan (RPL)</h3>
            <img src="<?= base_url('foto/icon3.png'); ?>" alt="Tersedia Jalur Percepatan (RPL)">
        </div>
    </div>

    <!-- Info Container Section -->
    <div class="info-container">
        <div class="info-image">
            <img src="<?= base_url('foto/foto3.jpg'); ?>" alt="Info Image">
            <div class="info-text">
                <div>
                    <h3>2004</h3>
                    <p>Berdirinya Universitas Subang</p>
                </div>
                <div>
                    <h3>16</h3>
                    <p>Program Studi</p>
                </div>
                <div>
                    <h3>5000+</h3>
                    <p>Mahasiswa</p>
                </div>
                <div>
                    <h3>100+</h3>
                    <p>Dosen</p>
                </div>
            </div>
        </div>
    </div>
    <div class="services">
        <h2>Layanan Online</h2>
        <div class="service-container">
            <div class="service-box">
                <h3>Siakad</h3>
                <img src="<?= base_url('foto/siakad.png'); ?>" alt="Siakad">
            </div>
            <div class="service-box">
                <h3>E-Learning</h3>
                <img src="<?= base_url('foto/elearning.png'); ?>" alt="E-Learning">
            </div>
            <div class="service-box">
                <h3>E-Journal</h3>
                <img src="<?= base_url('foto/ejournal.png'); ?>" alt="E-Journal">
            </div>
            <div class="service-box">
                <h3>E-Library</h3>
                <img src="<?= base_url('foto/elibrary.png'); ?>" alt="E-Library">
            </div>
        </div>
    </div>

    <div class="news">
        <h2>Berita Terbaru</h2>
        <div class="news-container">
            <div class="news-card">
                <img src="<?= base_url('foto/berita1.png'); ?>" alt="Berita 1">
                <div class="news-info">
                    <div class="news-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Selamat kepada Dr. Deni Mulyadi, M.Pd. Dosen PJKR FKIP UNSUB menjadi Manager Tim Petanque Kontingen...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="<?= base_url('foto/berita2.png'); ?>" alt="Berita 2">
                <div class="news-info">
                    <div class="news-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Penutupan Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Subang Tahun Akademik 2024/2025...</p>
                </div>
            </div>
            <div class="news-card">
                <img src="<?= base_url('foto/berita3.png'); ?>" alt="Berita 3">
                <div class="news-info">
                    <div class="news-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Sidang Senat Terbuka Universitas Subang Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Tahun Akademik...</p>
                </div>
            </div>
        </div>
        <button class="see-more">Lihat Selengkapnya</button>
    </div>
    <div class="agenda">
        <h2>Agenda Terbaru</h2>
        <div class="agenda-container">
            <div class="agenda-card">
                <img src="<?= base_url('foto/berita1.png'); ?>" alt="Agenda 1">
                <div class="agenda-info">
                    <div class="agenda-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Selamat kepada Dr. Deni Mulyadi, M.Pd. Dosen PJKR FKIP UNSUB menjadi Manager Tim Petanque Kontingen...</p>
                </div>
            </div>
            <div class="agenda-card">
                <img src="<?= base_url('foto/berita2.png'); ?>" alt="Agenda 2">
                <div class="agenda-info">
                    <div class="agenda-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Penutupan Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Universitas Subang Tahun Akademik 2024/2025...</p>
                </div>
            </div>
            <div class="agenda-card">
                <img src="<?= base_url('foto/berita3.png'); ?>" alt="Agenda 3">
                <div class="agenda-info">
                    <div class="agenda-meta">
                        <span>📅 29-11-2024</span>
                        <span>👁️ 100</span>
                    </div>
                    <p>Sidang Senat Terbuka Universitas Subang Pengenalan Kehidupan Kampus Mahasiswa Baru (PKKMB) Tahun Akademik...</p>
                </div>
            </div>
        </div>
        <button class="see-more">Lihat Selengkapnya</button>
    </div>

    <div class="partners">
        <h2>Mitra Kami</h2>
        <div class="partner-logos">
            <img src="<?= base_url('foto/m1.png'); ?>" alt="Partner 1">
            <img src="<?= base_url('foto/m2.png'); ?>" alt="Partner 2">
            <img src="<?= base_url('foto/m3.png'); ?>" alt="Partner 3">
            <img src="<?= base_url('foto/m4.png'); ?>" alt="Partner 4">
            <img src="<?= base_url('foto/m5.png'); ?>" alt="Partner 5">
        </div>
    </div>
    <div class="pmb-banner">
        <img src="<?= base_url('foto/pmb.png'); ?>" alt="Kampus Universitas Subang" class="banner-image">

        <div class="banner-text">
            <h1>Penerimaan Mahasiswa Baru</h1>
            <button class="cta-button">Daftar Disini</button>
        </div>
    </div>


    <?= $this->endSection(); ?>