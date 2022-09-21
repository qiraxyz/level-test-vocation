<?php 
    include 'koneksi.php';

    if (isset($_POST ['update_siswa'])) {
        $id_siswa = $_POST['id_siswa'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
    
        $sql = "UPDATE siswa SET nama='$nama',kelas='$kelas',jurusan='$jurusan' WHERE id_siswa='$id_siswa'";
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: tampilan_siswa.php');
        }else {
            header('Location: simpan_siswa.php?status=gagal');
        }
    }
?>  