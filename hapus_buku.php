<?php
    include 'koneksi.php';
     
    $id_buku = $_GET['id_buku'];

    $sql = "DELETE FROM buku WHERE id_buku='$id_buku'";
    $query = mysqli_query($connect, $sql);

    
    if($query) {
        header('Location: tampilan_buku.php');
    }else {
        header('Location: hapus_buku.php?=status=gagal');
    }
?>