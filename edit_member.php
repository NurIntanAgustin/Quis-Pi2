<?php
$member_id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_member($member_id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Member</title>
</head>

<body>
    <h1>Edit Data Member</h1>
    <a href="viewmember.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>ID MEMBER</label>
        <br>
        <input type="text" name="member_id" value="<?php echo $data->member_id ?>">
        <br>
        <label>NAMA</label>
        <br>
        <input type="text" name="nama" value="<?php echo $data->nama ?>">
        <br>
        <label>ALAMAT</label>
        <br>
        <input type="text" name="alamat" value="<?php echo $data->alamat ?>">
        <br>
        <label>NO. TELP</label>
        <br>
        <input type="text" name="tlp" value="<?php echo $data->tlp ?>">
        <br><br>
        <button type="submit" name="submit_edit_member">Submit</button>
    </form>
</body>

</html>