<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$id = $_POST["id"]; 

$query = "INSERT INTO mahasiswa (nim, nama, tanggal_lahir, email, no_telp, id)
VALUES ('$nim','$nama','$tanggal_lahir','$email','$telp','$id')";  

mysqli_query($conn, $query);

header("location:index.php");
?>