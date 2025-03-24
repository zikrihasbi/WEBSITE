<?php
include "koneksi.php";
$servername = "localhost";
$database = "4ami";
$password = "";
$query = "SELECT * FROM mahasiswa";
$data =ambildata($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA MAHASISWA</h1>
    <br>
    <a href="tambahanmahasiswa.php">tambah data</a>
    <table border ="1" cellspacing="0" cellspacing="5">
        <thead>
            <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>tanggal_lahir</th>
            <th>email</th>
            <th>telp</th>
            </tr>
        <thead>
    <tbody>
        <?php
        $i = 1;
        foreach($data as $d) : 
        ?>
            <tr>        
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["tanggal_lahir"]; ?></td>
                <td><?php echo $d["email"]; ?></td>
                <td><?php echo $d["telp"]; ?></td>
            </tr>
        <?php endforeach; ?>

        </tbody>
        </table>
</body>
</html>