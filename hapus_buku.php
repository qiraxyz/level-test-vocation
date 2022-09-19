<?php
    include 'koneksi.php';
     
    $id = $_GET['id'];

    $sql = "DELETE FROM perpus WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    
    if($query) {
        header('Location: tampilan_buku.php');
    }else {
        header('Location: hapus_buku.php?=status=gagal');
    }
?>