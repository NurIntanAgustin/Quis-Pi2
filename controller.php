<?php
include 'model.php';
// Tabel Mobil
if (isset($_POST['submit_simpan_mobil'])) {
    $mobil_id = $_POST['mobil_id'];
    $merktipe = $_POST['merktipe'];
    $thnkeluaran = $_POST['thnkeluaran'];
    $tarif = $_POST['tarif'];
    $model = new model();
    $model->insert_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif);
    header('location:viewmobil.php');
}
if (isset($_POST['submit_edit_mobil'])) {
    $mobil_id = $_POST['mobil_id'];
    $merktipe = $_POST['merktipe'];
    $thnkeluaran = $_POST['thnkeluaran'];
    $tarif = $_POST['tarif'];
    $model = new model();
    $model->update_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif);
    header('location:viewmobil.php');
}
if (isset($_GET['id'])) {
    $mobil_id = $_GET['id'];
    $model = new Model();
    $model->delete_mobil($mobil_id);
    header('location:viewmobil.php');
}
//Tabel Member
if (isset($_POST['submit_simpan_member'])) {
    $member_id = $_POST['member_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $model = new model();
    $model->insert_member($member_id, $nama, $alamat, $tlp);
    header('location:viewmember.php');
}
if (isset($_POST['submit_edit_member'])) {
    $member_id = $_POST['member_id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tlp = $_POST['tlp'];
    $model = new model();
    $model->edit_member($member_id, $nama, $alamat, $tlp);
    header('location:viewmember.php');
}
if (isset($_GET['id'])) {
    $member_id = $_GET['id'];
    $model = new Model();
    $model->delete_member($member_id);
    header('location:viewmember.php');
}
//Tabel Rental
if (isset($_POST['submit_simpan_rental'])) {
    $rental_id = $_POST['rental_id'];
    $mobil_id = $_POST['mobil_id'];
    $member_id = $_POST['member_id'];
    $lamarental = $_POST['lamarental'];
    $model = new model();
    $model->insert_rental($rental_id, $mobil_id, $member_id, $lamarental);
    header('location:viewrental.php');
}
if (isset($_POST['submit_edit_rental'])) {
    $rental_id = $_POST['rental_id'];
    $mobil_id = $_POST['mobil_id'];
    $member_id = $_POST['member_id'];
    $lamarental = $_POST['lamarental'];
    $model = new model();
    $model->edit_rental($rental_id, $mobil_id, $member_id, $lamarental);
    header('location:viewrental.php');
}
if (isset($_GET['id'])) {
    $rental_id = $_GET['id'];
    $model = new Model();
    $model->delete_mobil($id);
    header('location:viewrental.php');
}
?>