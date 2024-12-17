<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Statistik Kunjungan<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div class="container-fluid p-0">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-6">
                <h1 class="h3 d-inline align-middle">Data Statistik Kunjungan</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <!-- Form Filter -->
            <form method="GET" action="" class="row g-3 mb-3">
                <div class="col-md-4">
                    <label for="menu_name" class="form-label">Nama Menu:</label>
                    <select name="menu_name" id="menu_name" class="form-select">
                        <option value="">Semua</option>
                        <?php foreach (array_unique(array_column($data, 'menu_name')) as $menu) : ?>
                            <option value="<?= $menu ?>" <?= isset($_GET['menu_name']) && $_GET['menu_name'] == $menu ? 'selected' : '' ?>><?= $menu ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="year" class="form-label">Tahun:</label>
                    <select name="year" id="year" class="form-select">
                        <option value="">Semua</option>
                        <?php foreach (
                            array_unique(array_map(function ($row) {
                                return date('Y', strtotime($row['visit_date']));
                            }, $data)) as $year
                        ) : ?>
                            <option value="<?= $year ?>" <?= isset($_GET['year']) && $_GET['year'] == $year ? 'selected' : '' ?>><?= $year ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="month" class="form-label">Bulan:</label>
                    <select name="month" id="month" class="form-select">
                        <option value="">Semua</option>
                        <?php foreach (range(1, 12) as $month) : ?>
                            <option value="<?= $month ?>" <?= isset($_GET['month']) && $_GET['month'] == $month ? 'selected' : '' ?>><?= date('F', mktime(0, 0, 0, $month, 1)) ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="col-12 text-end">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </form>

            <!-- Grafik Kunjungan -->
            <div class="card">
                <div class="card-body">
                    <h1 class="h5">Grafik Kunjungan Menu</h1>
                    <div style="position: relative; width: 100%;">
                        <canvas id="visitChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const visitDates = <?= json_encode(array_map(function ($row) {
                            return date('d-m-Y', strtotime($row['visit_date']));
                        }, $data)) ?>;

    const visitCounts = <?= json_encode(array_column($data, 'visit_count')) ?>;

    // Periksa jika ada data sebelum membuat grafik
    if (visitDates.length > 0 && visitCounts.length > 0) {
        const ctx = document.getElementById('visitChart').getContext('2d');
        const visitChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: visitDates, // Tanggal
                datasets: [{
                    label: 'Jumlah Kunjungan',
                    data: visitCounts, // Jumlah kunjungan
                    backgroundColor: 'rgba(0, 153, 255, 0.2)',
                    borderColor: 'rgb(0, 153, 255)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Tanggal'
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Kunjungan'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    } else {
        console.log("Tidak ada data untuk grafik");
        document.getElementById('visitChart').style.display = 'none';
    }
</script>

<?= $this->endSection() ?>