<?= $this->extend('layouts/frontend/template'); ?>

<?= $this->section('title'); ?>
Sejarah
<?= $this->endSection(); ?>

<?= $this->section('css'); ?>
<link href="<?= base_url('assets/css/frontend/sambutan.css'); ?>" rel="stylesheet">

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<section class="sambutan">
    <h2>Sambutan Rektor</h2>
    <img src="<?= base_url('foto/rektor.png'); ?>" alt="Foto Sejarah" class="rektor-photo">
    <p><strong>Dr. Drs. Ir. H. A. Moeslehit Komara, M.Si</strong></p>
    <p>Universitas Subang berkomitmen untuk menghasilkan lulusan yang tidak hanya memiliki kompetensi akademik tinggi tetapi juga karakter yang tangguh dan berdaya saing di era globalisasi. Dalam mencapai visi tersebut, kami mengutamakan lingkungan belajar yang inklusif dan mendukung pengembangan diri, baik melalui program akademik maupun kegiatan kemahasiswaan. Dengan kerjasama dari berbagai pihak, baik lokal maupun internasional, kami berusaha untuk terus meningkatkan kualitas pendidikan di Universitas Subang..</p>
</section>


<?= $this->endSection(); ?>