<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$id_prodi = $_POST["id_prodi"]; 

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, email, telp, id_prodi)
VALUES ('$nim','$nama','$tanggal_lahir','$email','$telp','$id_prodi')";


mysqli_query($conn, $query);

header("location:index.php");
?>