<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Visi & Misi
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<link href="<?= base_url('assets/css/frontend/visi_misi.css'); ?>" rel="stylesheet">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="visimisi-page">
    <h2>Tentang Kami</h2>
    <h3>Visi & Misi</h3>

    <div class="header-section">
    <div class="logo">
        <img src="<?= base_url('foto/logo1.png'); ?>" alt="Universitas Subang Logo">
        <div class="logo-text">
            <h1>Universitas</h1> 
            <h1>Subang</h1>
        </div>
    </div>
    <div class="tagline">
        <span>School Of</span> 
        <span>Empowering People</span>
    </div>
    </div>
    <div class="vision-mission">
        <h4>Visi</h4>
        <p>Universitas Subang Berkembang dan Berkemuka di tingkat Jawa Barat Tahun 2023</p>

        <h4>Misi</h4>
        <ul>
            <li>1. Menyelenggarakan pendidikan dan pembelajaran yang bermutu dalam rangka menghasilkan lulusan yang bermimpi pendidik, pembaru, pengelola, dan builder entrepreneurship</li>
            <li>2. Meningkatkan kemajuan dalam pengajaran dan penelitian yang berbasis pada kebutuhan masyarakat dan dunia usaha yang berkelanjutan</li>
            <li>3. Meningkatkan kerjasama dengan pihak industri dan masyarakat untuk mewujudkan tri dharma perguruan tinggi</li>
            <li>4. Menyelenggarakan pendidikan untuk meningkatkan kualitas pendidikan dalam rangka pemenuhan tuntutan daerah dan Provinsi Jawa Barat</li>
        </ul>
    </div>
</div>
</div>
<?= $this->endSection(); ?>
