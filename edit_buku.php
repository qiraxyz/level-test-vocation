<?php 
    include 'koneksi.php';

    if (isset($_POST ['update_buku'])) {
        $id = $_POST['id'];
        $kode_jenis = $_POST['kode_jenis'];
        $nama_buku = $_POST['nama_buku'];
        $stok = $_POST['stok'];
    
        $sql = "UPDATE perpus SET id ='$id',kode_jenis ='$kode_jenis',  nama_buku = '$nama_buku', stok ='$stok'";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: tampilan_buku.php');
        }else {
            header('Location: simpan_buku.php?status=gagal');
        }
    }
?>  