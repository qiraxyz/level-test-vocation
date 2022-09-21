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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <style>
      <?php 
        include 'style_siswa.css';
      ?>
    </style>
</head>
<body>
<div class="sidenav">
  <div class="sidenav-flex">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSiLNaZDoG-h9StNiUMzornW4HLdzYHZyXQ7Q&usqp=CAU" alt="">
  <a href="https://qiraxyz.000webhostapp.com/" class="">Qiraxyz</a>
  </div>
  <div class="sub-sidebar">
  <hr>
    <button><a href="tampilan_siswa.php">Data Siswa</a></button>
    <br>  
    <button><a href="tampilan_buku.php">Data Buku</a></button>
  </div>
  <div class="status">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/fe/IRIB_Mazandaran_White_Logo.png/600px-IRIB_Mazandaran_White_Logo.png?20200114152038" alt="">
    <p>Powered by Qiraxyz</p>
  </div>
  </div>
<div class="container">
<table>
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
        echo "<td>". "<button>". "<a href='editform_siswa.php?id_siswa=".$sis['id_siswa']."'>edit</a>" . "</button>";
        echo "<button>". "<a href='hapus_siswa.php?id_siswa=".$sis['id_siswa']."'>delete</a>". "</button>"; 
        echo "</td>";
        echo "</tr>";
        }
        ?>
    </table>
    <br>
    <div class="create"><a href="siswa.html">Create</a></div>
    <br>
</div>
    
</body>
</html>