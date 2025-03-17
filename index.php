<?php
$servername = "localhost";
$database = "4ami";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$query = "SELECT * FROM mahasiswa";
$hasil =  mysqli_query($conn, $query);

$data = mysqli_fetch_assoc($hasil);

//mysqli_connect("localhost", "zikrihii", "12345", "2025_web");

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
    <table border ="1" cellspacing="0" cellspacing="5">
        <thead>
            <tr>
            <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>tanggal_lahir</th>
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
                <td><?php echo $d["telp"]; ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
</body>
</html>