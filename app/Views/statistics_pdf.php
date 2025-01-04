<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Statistik Kunjungan PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body>
    <h1>Statistik Kunjungan</h1>
    <?php if ($menuName) : ?>
        <p><strong>Menu:</strong> <?= $menuName ?></p>
    <?php endif; ?>
    <?php if ($year) : ?>
        <p><strong>Tahun:</strong> <?= $year ?></p>
    <?php endif; ?>
    <?php if ($month) : ?>
        <p><strong>Bulan:</strong> <?= date('F', mktime(0, 0, 0, $month, 1)) ?></p>
    <?php endif; ?>

    <table>
        <thead>
            <tr>
                <th>Menu</th>
                <th>Tanggal</th>
                <th>Total Kunjungan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) : ?>
                <tr>
                    <td><?= $row['menu_name'] ?></td>
                    <td><?= date('d-m-Y', strtotime($row['visit_date'])) ?></td>
                    <td><?= $row['visit_count'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>