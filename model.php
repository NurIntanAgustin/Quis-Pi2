<?php
include 'connection.php';
class Model extends Connection 
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }
    //tabel mobil
    public function insert_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif)
    {
        $sql = "INSERT INTO mobil (mobil_id, merktipe, thnkeluaran, tarif) 
        VALUES ('$mobil_id', '$merktipe', '$thnkeluaran', '$tarif')";
        $this->conn->query($sql);
    }
    public function tampil_data_mobil()
    {
        $sql = "SELECT * FROM mobil";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_mobil($id)
    {
        $sql = "SELECT * FROM mobil WHERE mobil_id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
        }
    public function update_mobil($mobil_id, $merktipe, $thnkeluaran, $tarif)
    {
        $sql = "UPDATE mobil SET merktipe='$merktipe', thnkeluaran='$thnkeluaran', tarif='$tarif' WHERE mobil_id='$mobil_id'";
        $this->conn->query($sql);
    }
    public function delete_mobil($id_mobil)
    {
        $sql = "DELETE FROM mobil WHERE mobil_id='$id_mobil'";
        $this->conn->query($sql);
    }
    //tabel rental
    public function insert_rental($rental_id, $mobil_id, $member_id, $lamarental)
    {
        $sql = "INSERT INTO rental (rental_id, mobil_id, member_id, lamarental) 
        VALUES ('$rental_id', '$mobil_id', '$member_id', '$lamarental')";
        $this->conn->query($sql);
    }
    public function tampil_data_rental()
    {
        $sql = "SELECT * FROM rental";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_rental($id)
    {
        $sql = "SELECT * FROM rental WHERE rental_id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
        }
    public function update_rental($rental_id, $mobil_id, $member_id, $lamarental)
    {
        $sql = "UPDATE rental SET member_id='$member_id', lamarental='$lamarental' WHERE rental_id='$rental_id'";
        $this->conn->query($sql);
    }
    public function delete_rental($id_rental)
    {
        $sql = "DELETE FROM rental WHERE rental_id='$id_rental'";
        $this->conn->query($sql);
    }
    //tabelmember
    public function insert_member($member_id, $nama, $alamat, $tlp)
    {
        $sql = "INSERT INTO member (member_id, nama, alamat, tlp) 
        VALUES ('$member_id', '$nama', '$alamat', '$tlp')";
        $this->conn->query($sql);
    }
    public function tampil_data_member()
    {
        $sql = "SELECT * FROM member";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
    public function edit_member($id)
    {
        $sql = "SELECT * FROM member WHERE member_id='$id'";
        $bind = $this->conn->query($sql);
        while ($obj = $bind->fetch_object()) {
            $baris = $obj;
        }
        return $baris;
        }
    public function update_member($member_id, $nama, $alamat, $tlp)
    {
        $sql = "UPDATE member SET nama='$nama', alamat='$alamat', tlp='$tlp' WHERE member_id='$member_id'";
        $this->conn->query($sql);
    }
    public function delete_member($id_member)
    {
        $sql = "DELETE FROM member WHERE member_id='$id_member'";
        $this->conn->query($sql);
    }
}