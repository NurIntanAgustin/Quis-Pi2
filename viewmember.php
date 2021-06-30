<?php
include 'model.php';
$model = new Model();
$index = 1;
?>
<!doctype html>
<html lang="en">


<head>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Data Member</title>
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #fec89a;">
  <div class="container">
    <a class="navbar-brand" href="#"><b><h3>Manda Rental Mobil</h3></b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" href="viewmember.php">Member</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="viewmobil.php">Mobil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="viewrental.php">Rental</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container-fluid"><br>
        <h2 align="center">Data Member</h2><br>
        <a href="create_member.php"><button type="button">Tambah Data</button></a></a>
        <a href="print_member.php" target="_blank"><button type="button">Cetak Data</button></a><br>
        <br>
        <table class="table table-bordered" style="background-color: #E8F6EF;">
            <thead>
                <tr>
                    <th>ID MEMBER</th>
                    <th>NAMA</th>
                    <th>ALAMAT</th>
                    <th>NO. TELP</th>
                    <th>Aksi</th>
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
                            <td>
                                <a name="edit" id="edit" href="edit_member.php?id=<?= $data->member_id ?>"><button type="button">Edit</button></a>
                                <a name="hapus" id="hapus" href="controller.php?id=<?= $data->member_id ?>"><button type="button">Delete</button></a>
                            </td>
                        </tr>
                    <?php endforeach;
                } else { ?>
                <tr>
                    <td colspan="9">Belum ada data pada tabel member.</td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>