<!doctype html>
<html lang="en">

<head>
    <title>Tambah Data Member</title>
</head>

<body>
    <h1>Tambah</h1>
    <a href="viewmember.php">Kembali</a>
    <br><br>
    <form action="controller.php" method="post">
        <label>ID MEMBER</label>
        <br>
        <input type="text" name="member_id">
        <br>
        <label>NAMA</label>
        <br>
        <input type="text" name="nama">
        <br>
        <label>ALAMAT</label>
        <br>
        <input type="text" name="alamat">
        <br>
        <label>NO. TELP</tabel>
        <br>
        <input type="text" name="tlp">
        <br><br>
        <button type="submit" name="submit_simpan_member">Submit</button>
        <button type="reset">Reset</button>
    </form> 
</body>
</html>