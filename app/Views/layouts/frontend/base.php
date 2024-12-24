<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $this->renderSection('title') ?></title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
        rel="stylesheet" />
    <style>
        .card img {
            border-radius: 8px;
        }

        .news-meta {
            font-size: 0.9rem;
            color: gray;
        }

        .btn-blue {
            background-color: #007bff;
            color: white;
            font-weight: bold;
            border-radius: 25px;
        }

        .btn-blue:hover {
            background-color: #0056b3;
            color: white;
        }

        .carousel-inner {
            text-align: center;
        }

        .carousel-item img {
            max-height: 100px;
            object-fit: contain;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <?= $this->include('layouts/frontend/header'); ?>
    <!-- End Header -->

    <!-- Navbar  -->
    <?= $this->include('layouts/frontend/navbar'); ?>
    <!-- Navbar -->

    <!-- Content -->
    <?= $this->renderSection('content') ?>
    <!-- End Content -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>