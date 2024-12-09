<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url('assets/css/frontend/home.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/sb-admin-2.min.css">
    <?= $this->renderSection('css'); ?> 
    <link href="<?= base_url('assets/css/frontend/sejarah.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/frontend/visi_misi.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('assets/css/frontend/sambutan.css'); ?>" rel="stylesheet">



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