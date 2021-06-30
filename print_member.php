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
    <h1>Laporan Data Member</h1>
    <table>
        <thead>
        <tr>
                    <th>ID MEMBER</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO. TELP</th>
        </tr>
        </thead>
        <tbody>
            <?php
            $result = $model->tampil_data_member();
            if (!empty($result)) {
                foreach ($result as $data) : ?>
                    <tr>
                    <td><?= $data->member_id ?></td>
                    <td><?= $data->nama ?></td>
                    <td><?= $data->alamat ?></td>
                    <td><?= $data->tlp ?></td>
                    </tr>
                <?php endforeach;
            } else { ?>
                <tr>
                     <td colspan="9">Belum ada data pada tabel member.</td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <script>
        window.print();
    </script>
</body>

</html>