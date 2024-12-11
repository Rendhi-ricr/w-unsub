<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grafik Kunjungan</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <form method="GET" action="">
        <label for="menu_name">Nama Menu:</label>
        <select name="menu_name" id="menu_name">
            <option value="">Semua</option>
            <?php foreach (array_unique(array_column($data, 'menu_name')) as $menu) : ?>
                <option value="<?= $menu ?>" <?= isset($_GET['menu_name']) && $_GET['menu_name'] == $menu ? 'selected' : '' ?>><?= $menu ?></option>
            <?php endforeach; ?>
        </select>

        <label for="year">Tahun:</label>
        <select name="year" id="year">
            <option value="">Semua</option>
            <?php foreach (
                array_unique(array_map(function ($row) {
                    return date('Y', strtotime($row['visit_date']));
                }, $data)) as $year
            ) : ?>
                <option value="<?= $year ?>" <?= isset($_GET['year']) && $_GET['year'] == $year ? 'selected' : '' ?>><?= $year ?></option>
            <?php endforeach; ?>
        </select>

        <label for="month">Bulan:</label>
        <select name="month" id="month">
            <option value="">Semua</option>
            <?php foreach (range(1, 12) as $month) : ?>
                <option value="<?= $month ?>" <?= isset($_GET['month']) && $_GET['month'] == $month ? 'selected' : '' ?>><?= date('F', mktime(0, 0, 0, $month, 1)) ?></option>
            <?php endforeach; ?>
        </select>

        <button type="submit">Filter</button>
    </form>

    <h1>Grafik Kunjungan Menu</h1>
    <canvas id="visitChart"></canvas>
    <script>
        const visitDates = <?= json_encode(array_map(function ($row) {
                                return date('d-m-Y', strtotime($row['visit_date']));
                            }, $data)) ?>;

        const visitCounts = <?= json_encode(array_column($data, 'visit_count')) ?>;

        // Periksa jika ada data sebelum membuat grafik
        if (visitDates.length > 0 && visitCounts.length > 0) {
            const ctx = document.getElementById('visitChart').getContext('2d');
            const visitChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: visitDates, // Tanggal
                    datasets: [{
                        label: 'Jumlah Kunjungan',
                        data: visitCounts, // Jumlah kunjungan
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
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


</body>

</html>