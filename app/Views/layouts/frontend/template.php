<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/css/home.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
    <?= $this->renderSection('css'); ?> <!-- Memasukkan file CSS khusus jika ada -->
    <link href="/css/sejarah.css" rel="stylesheet">
    <link href="/css/visi_misi.css" rel="stylesheet">



    <title>Universitas Subang</title>
   
</head>

    <title>Dashboard</title>
</head>
<?= $this->include('layouts/frontend/header'); ?>

<main>
    <?= $this->renderSection('content'); ?>
</main>

<?= $this->include('layouts/frontend/footer'); ?>
</body>

</html>