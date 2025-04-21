<?php
include "koneksi.php";
$servername = "localhost";
$database = "4ami" ;
$password = "";

$query = "SELECT * FROM prodi";
$data = ambildata($query);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIMPADU POLIBAN</title>
</head>
<body>
    <h1>DATA PRODI</h1>
    <br>
    <table border="1" cellspacing="0" cellpadding= "5">
        <thead>
            <tr>
                <td>ID</td>
                <td>nama prodi</td>
                <td>kaprodi</td>
                <td>jurusan</td>
            </tr>
        </thead>

        <tbody>

        <?php foreach($data as $d) : ?>

            <tr>
                <td><?php echo $d["ID"] ?></td>
                <td><?php echo $d["nama"] ?></td>
                <td><?php echo $d["kaprodi"] ?></td>
                <td><?php echo $d["jurusan"] ?></td>
            </tr>
            
            <?php endforeach; ?>
        </tbody>
        </table>

</body>
</html>