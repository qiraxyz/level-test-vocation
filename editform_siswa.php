<?php
include 'koneksi.php';

$id_siswa = $_GET['id_siswa'];
$sql = "SELECT * FROM siswa WHERE id_siswa = '$id_siswa'";
$query = mysqli_query($connect, $sql);
$sis = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1) {
    die ("data tidak di temukan");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>
    <link rel="stylesheet" href="forms.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
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
      <div class="form">
      <form action="edit_siswa.php" method="POST">
        <!-- data pelanggan judul -->
        <h3>Data Pelanggan</h3>
        <!-- id siswa -->
        <p><Label>Id Siswa : <input value="<?php echo $sis['id_siswa']?>" required="required" type="text" name="id_siswa"></Label></p>
        <!-- nama siswa -->
        <p><Label>Nama : <input value="<?php echo $sis['nama']?>" required="required" type="text" name="nama"></Label></p>
        <!-- kelas siswa -->
        <p><label>Kelas : <input value="<?php echo $sis['kelas']?>" required="required" type="text" name="kelas"></label></p>
        <!-- jurusan siswa -->
        <p><Label>Jurusan : <input value="<?php echo $sis['jurusan']?>" required="required" type="text" name="jurusan"></Label></p>
        <br>
        <br>
        <button type="submit" name="update_siswa" value="update_siswa">Update</button>
        <button class="btn-cancel"><a href="tampilan_siswa.php">Cancel</a></button>
    </form>
      </div>
   
</body>
</html>