<?php 
    include 'koneksi.php';

    if (isset($_POST ['update_buku'])) {
        $id_buku = $_POST['id_buku'];
        $kode_jenis = $_POST['kode_jenis'];
        $nama_buku = $_POST['nama_buku'];
        $stok = $_POST['stok'];
    
        $sql = "UPDATE buku SET kode_jenis ='$kode_jenis',  nama_buku = '$nama_buku', stok ='$stok' WHERE id_buku='$id_buku' ";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: tampilan_buku.php');
        }else {
            header('Location: simpan_buku.php?status=gagal');
        }
    }
?>  