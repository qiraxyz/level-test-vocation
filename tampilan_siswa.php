<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan data</title>
    <link rel="stylesheet" href="tampilan_siswa.css">
</head>
<body>
  <div class="sidenav">
  <a href="https://qiraxyz.000webhostapp.com/">Qiraxyz</a>
  <div class="sub-sidebar">
  <hr>
  <button><a href="tampilan_siswa.php">Data Siswa</a></button>
    <button><a href="tampilan_buku.php">Data Buku</a></button>
  </div>
 
</div>
<div class="container">
<table border="1">
        <h3>Data Siswa</h3>
        <tr>
            <th>Id Siswa</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Action</th>
        </tr>
        <?php
        $sql = "SELECT * FROM siswa";
        $query = mysqli_query($connect,$sql);

        while ($sis = (mysqli_fetch_array($query))) {
        echo "<tr>";
        echo "<td>". $sis ['id_siswa']. "</td>";
        echo "<td>". $sis ['nama']. "</td>";
        echo "<td>". $sis ['kelas']. "</td>";
        echo "<td>". $sis ['jurusan']. "</td>";
        echo "<td>". "<button>". "<a href='editform_siswa.php?id_siswa=".$sis['id_siswa']."'>Edit</a>" . "</button>";
        echo "<button>". "<a href='hapus_siswa.php?id_siswa=".$sis['id_siswa']."'>Hapus</a>". "</button>"; 
        echo "</td>";
        echo "</tr>";
        }
        ?>
    </table>
    <h4><a href="siswa.html">Create</a></h4>
</div>
    
</body>
</html>