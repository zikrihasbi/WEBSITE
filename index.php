
<?php
session_start();
if (isset($_SESSION['login'])) {
    echo $_SESSION['login'];
    //header("Location: login.html");
}

include "koneksi.php";

$query = "SELECT mahasiswa.*, prodi.nama AS NamaProdi
        FROM mahasiswa
        LEFT JOIN prodi ON mahasiswa.id_prodi = prodi.ID";
$data =ambildata($query);

  
include  "templete/header.php";
include "templete/Sidebar.php";
?>

                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                        <th>no</th>
            <th>nim</th>
            <th>nama</th>
            <th>tanggal_lahir</th>
            <th>telp</th>
            <th>email</th>
            <th>nama_prodi</th>            
            <th>Aksi</th> 

                        </tr>
                      </tbody>
                      <?php
        $i = 1;
        foreach($data as $d) : ?>
            <tr>        
                <td><?php echo $i++; ?></td>
                <td><?php echo $d["nim"]; ?></td>
                <td><?php echo $d["nama"]; ?></td>
                <td><?php echo $d["tanggal_lahir"]; ?></td>
                <td><?php echo $d["telp"]; ?></td>
                <td><?php echo $d["email"]; ?></td>
                <td><?php echo $d["NamaProdi"]; ?></td>
                <td><a href="deletemahasiswa.php?nim=<?= $d['nim'] ?>"
                onclick="return confirm('yakin ingin hapus?')"class="btn btn-danger">Delete</a>
                <a href="editmahasiswa.php?nim=<?= $d['nim'] ?>" class="btn btn-warning">Edit</a></
            </tr>
        <?php endforeach; ?>
                    </table>
                  </div>
                  

</body>
</html>
<?php
include "templete/footer.php";
?>