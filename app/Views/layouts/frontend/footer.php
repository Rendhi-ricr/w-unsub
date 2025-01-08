<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <title>Footer</title>
</head>

<body>
    <footer class="bg-primary text-white py-4">
        <div class="container">
            <div class="row text-center text-md-start">
                <div class="col-md-6 mb-3">
                    <h5>Kampus I</h5>
                    <img src="<?= base_url('foto/kampus1.png'); ?>" alt="Kampus I" class="img-fluid" style="max-width: 300px;">
                    <div class="d-flex align-items-center mt-3">
                        <i class="fas fa-location-dot text-white me-3 fs-5"></i>
                        <p class="mb-0">Jl. R.A. Kartini No. 4<br>Subang, Kabupaten Subang, Jawa Barat, Indonesia</p>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-between align-items-start mb-3">
                    <div>
                        <h5>Kampus II</h5>
                        <img src="<?= base_url('foto/kampus2.png'); ?>" alt="Kampus II" class="img-fluid" style="max-width: 300px;">
                        <div class="d-flex align-items-center mt-3">
                            <i class="fas fa-location-dot text-white me-3 fs-5"></i>
                            <p class="mb-0">Jl. Arief Rahman Hakim No. 8,<br>Cibogo, Kabupaten Subang, Jawa Barat, Indonesia</p>
                        </div>
                    </div>
                    <div class="ms-4">
                        <h5>Hubungi kami</h5>
                        <div class="d-flex flex-column gap-3 mt-2">
                            <a href="#" target="_blank" class="text-white text-decoration-none d-flex align-items-center gap-2">
                                <i class="fab fa-instagram fs-3"></i> 
                                <span class="fs-6">universitas.subang</span>
                            </a>
                            <a href="#" target="_blank" class="text-white text-decoration-none d-flex align-items-center gap-2">
                                <i class="fab fa-youtube fs-3"></i> 
                                <span class="fs-6">universitas.subang</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
