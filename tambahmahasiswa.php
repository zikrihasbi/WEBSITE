<?php
include "koneksi.php";

$query = "SELECT * FROM prodi";
$data = ambildata($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah mahasiswa</title>
</head>
<body>
    <h1>tambah data mahasiswa</h1>
    <form action="tambahaksimahasiswa.php" method="post">
    <table>
        <tr>
            <td>nim</td> 
            <td><input type="text" name="nim"></td>
        </tr>
        <tr>
            <td>nama</td> 
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>tanggal_lahir</td> 
            <td><input type="date" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td>email</td> 
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>telp</td> 
            <td><input type="text" name="telp"></td>
        </tr>
        <tr>
    <td>prodi</td>
    <td>
    <select name="id_prodi" required>
    <?php foreach($data as $d): ?>
        <option value="<?= $d['ID']; ?>"><?= $d['nama']; ?></option>
    <?php endforeach; ?>
</select>
    </td>
</tr>
    </table>
    <a href="index.php">kembali</a>
    <input type="submit" value="simpan">
    </form>            
</body>
</html>