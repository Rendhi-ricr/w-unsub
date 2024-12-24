<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Subang</title>

    <link href="<?= base_url('assets/css/home.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/frontend/home.css'); ?>" rel="stylesheet">
    <?= $this->renderSection('css'); ?>
    <link href="<?= base_url('assets/css/frontend/sejarah.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/frontend/visi_misi.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/frontend/sambutan.css'); ?>" rel="stylesheet">
</head>

<body>
    <!-- Header -->
    <?= $this->include('layouts/frontend/header'); ?>

    <?php
    $uri = service('uri');

    // Menampilkan segment URI
    $updateView = $uri->getSegment(2);
    ?>

    <!-- Konten Utama -->
    <main>
        <?= $this->renderSection('content'); ?>
    </main>

    <!-- Footer -->
    <?= $this->include('layouts/frontend/footer'); ?>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Pastikan Anda tahu nama menu yang sedang dikunjungi
            let menuName = '<?= $updateView ?>'; // Ubah dengan nama menu yang sesuai

            // Timer untuk memanggil fungsi setelah 1 menit
            setTimeout(function() {
                // Kirim permintaan AJAX ke server
                $.ajax({
                    url: "<?= site_url('users/home/statistik') ?>/" + menuName,
                    method: "POST",
                    dataType: "json",
                    success: function(response) {
                        if (response.status === "success") {
                            console.log(response.message);
                        } else {
                            console.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error("Error:", error);
                    }
                });
            }, 60000); // 1 menit = 60000 ms
        });
    </script>
</body>

</html>