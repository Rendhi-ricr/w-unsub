<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Footer</title>
    <style>
        .footer {
            background-color: #003d80;
            color: white;
            padding: 30px 0;
        }
        .footer h5 {
            color: white;
        }
        .footer img {
            max-width: 100%;
            height: auto;
            object-fit: cover;
        }
        .footer .row {
            text-align: center;
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <h5>Kampus I</h5>
                    <img src="<?= base_url('foto/kampus1.png');?>" alt="Kampus I" style="max-width: 300px;">
                    <p>Jl. R.A. Kartini No. 4 Subang, Kabupaten Subang, Jawa Barat, Indonesia</p>
                </div>
                <div class="col-md-6 mb-3">
                    <h5>Kampus II</h5>
                    <img src="<?= base_url('foto/kampus2.png');?>" alt="Kampus II" style="max-width: 300px;">
                    <p>Jl. Arief Rahman Hakim No. 8, Cibogo, Kabupaten Subang, Jawa Barat, Indonesia</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>