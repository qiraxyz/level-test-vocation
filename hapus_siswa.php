<?php
    include 'koneksi.php';
     
    $id_siswa = $_GET['id_siswa'];

    $sql = "DELETE FROM siswa WHERE id_siswa='$id_siswa'";
    $query = mysqli_query($connect, $sql);

    
    if($query) {
        header('Location: tampilan_siswa.php');
    }else {
        header('Location: hapus_siswa.php?=status=gagal');
    }
?>