<?php
include 'koneksi.php';

$id_buku = $_GET['id_buku'];
$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
$query = mysqli_query($connect, $sql);
$buk = mysqli_fetch_assoc($query);

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
    <link rel="stylesheet" href="formb.css">
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
      <div class="form">\
      <form action="edit_buku.php" method="POST">
        <!-- data pelanggan judul -->
        <h3>Data Pelanggan</h3>
        <!-- id siswa -->
        <p><Label>Id Buku : <input value="<?php echo $buk['id_buku']?>" required="required" type="text" name="id_buku"></Label></p>
        <!-- nama siswa -->
        <p><Label>Kode Jenis : <input value="<?php echo $buk['kode_jenis']?>" required="required" type="text" name="kode_jenis"></Label></p>
        <!-- kelas siswa -->
        <p><label>Nama Buku : <input value="<?php echo $buk['nama_buku']?>" required="required" type="text" name="nama_buku"></label></p>
        <!-- jurusan siswa -->
        <p><Label>Stok : <input value="<?php echo $buk['stok']?>" required="required" type="text" name="stok"></Label></p>
        <br>
        <br>
        <button type="submit" name="update_buku" value="update_buku">Update</button>
        <button class="btn-cancel"><a href="tampilan_buku.php">Cancel</a></button>
    </form>
      </div>
</body>
</html>