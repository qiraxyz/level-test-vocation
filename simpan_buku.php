<?php 
    include 'koneksi.php';


    if (isset($_POST ['simpan_buku'])) {
        $id = $_POST['id'];
        $kode_jenis = $_POST['kode_jenis'];
        $nama_buku = $_POST['nama_buku'];
        $stok = $_POST['stok'];
    
        $sql = "INSERT INTO perpus(id, kode_jenis, nama_buku, stok) VALUES('$id', '$kode_jenis',
        '$nama_buku', '$stok') "; 
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: tampilan_buku.php');
        }else {
            header('Location: simpan_buku.php?status=gagal');
        }
    } 
?>