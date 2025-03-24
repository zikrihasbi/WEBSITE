
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
        <select name="id">
            <option value="1">Manajemen Informatika</option>
            <option value="2">Administrasi Bisnis</buttom>
        </select>
        </tr>
    </table>
    <a href="index.php">kembali</a>
    <input type="submit"></button>
    </form>            
</body>
</html>