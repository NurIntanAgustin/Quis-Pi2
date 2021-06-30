<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">

<head>
    <title>Cetak Data</title>
    <style>
        h1 {
        text-align: center;
        }
        table,
        td,
        th {
        border: 1px solid #fb5607;
        text-align: left;
        }
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th,
        td {
        padding: 15px;
        }
    </style>
    </head>

<body>
    <h1>Laporan Data Rental</h1>
    <table>
        <thead>
        <tr>
                    <th>ID RENTAL</th>
                    <th>ID MOBIL</th>
                    <th>ID MEMBER</th>
                    <th>LAMA RENTAL</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data_rental();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                    <td><?= $data->rental_id ?></td>
                    <td><?= $data->mobil_id ?></td>
                    <td><?= $data->member_id ?></td>
                    <td><?= $data->lamarental ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel rental.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>