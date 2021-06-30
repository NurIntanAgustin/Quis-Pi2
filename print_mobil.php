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
    <h1>Laporan Data Mobil</h1>
    <table>
        <thead>
        <tr>
                    <th>ID MOBIL</th>
                    <th>MERK TIPE</th>
                    <th>TAHUN KELUARAN</th>
                    <th>TARIF</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data_mobil();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                    <td><?= $data->mobil_id ?></td>
                    <td><?= $data->merktipe ?></td>
                    <td><?= $data->thnkeluaran ?></td>
                    <td><?= $data->tarif ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel mobil.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>