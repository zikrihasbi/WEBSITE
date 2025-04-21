<?php
include "koneksi.php";

$nim = $_POST["nim"];
$nama = $_POST["nama"];
$tanggal_lahir = $_POST["tanggal_lahir"];
$email = $_POST["email"];
$telp = $_POST["telp"];
$id_prodi = $_POST["id_prodi"]; 

$query = "UPDATE mahasiswa SET 
            nama='$nama', 
            tanggal_lahir='$tanggal_lahir', 
            email='$email', 
            telp='$telp', 
            id_prodi='$id_prodi'
          WHERE nim='$nim'";

mysqli_query($conn, $query);

header("location:index.php");
?>
