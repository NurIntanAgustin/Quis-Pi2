<?php
$rental_id = $_GET['id'];
include 'model.php';
$model = new Model();
$data = $model->edit_rental($rental_id);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Edit Data Rental</title>
</head>

<body>
    <h1>Edit Data Rental</h1>
    <a href="viewrental.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>ID RENTAL</label>
        <br>
        <input type="text" name="rental_id" value="<?php echo $data->rental_id ?>">
        <br>
        <label>ID MOBIL</label>
        <br>
        <input type="text" name="mobil_id" value="<?php echo $data->mobil_id ?>">
        <br>
        <label>ID MEMBER</label>
        <br>
        <input type="text" name="member_id" value="<?php echo $data->member_id ?>">
        <br>
        <label>LAMA RENTAL</label>
        <br>
        <input type="text" name="lamarental" value="<?php echo $data->lamarental ?>">
        <br><br>
        <button type="submit" name="submit_edit_rental">Submit</button>
    </form>
</body>

</html>