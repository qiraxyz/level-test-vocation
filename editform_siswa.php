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
</head>
<body>
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
        <input type="submit" name="update_siswa" value="update_siswa">
    </form>
</body>
</html>