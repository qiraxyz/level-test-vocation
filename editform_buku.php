<?php
include 'koneksi.php';

$id = $_GET['id_siswa'];
$sql = "SELECT * FROM perpus WHERE id = '$id'";
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
</head>
<body>
    <form action="edit_buku.php" method="POST">
        <!-- data pelanggan judul -->
        <h3>Data Pelanggan</h3>
        <!-- id siswa -->
        <p><Label>Id Siswa : <input value="<?php echo $buk['id']?>" required="required" type="text" name="id"></Label></p>
        <!-- nama siswa -->
        <p><Label>Nama : <input value="<?php echo $buk['kode_jenis']?>" required="required" type="text" name="kode_jenis"></Label></p>
        <!-- kelas siswa -->
        <p><label>Kelas : <input value="<?php echo $buk['nama_buku']?>" required="required" type="text" name="nama_buku"></label></p>
        <!-- jurusan siswa -->
        <p><Label>Jurusan : <input value="<?php echo $buk['stok']?>" required="required" type="text" name="stok"></Label></p>
        <input type="submit" name="update_buku" value="update_buku">
    </form>
</body>
</html>