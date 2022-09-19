<?php 
    include 'koneksi.php';


    if (isset($_POST ['simpan_siswa'])) {
        $id_siswa = $_POST['id_siswa'];
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
    
        $sql = "INSERT INTO siswa(id_siswa, nama, kelas, jurusan) VALUES('$id_siswa', '$nama',
        '$kelas', '$jurusan') "; 
        $query = mysqli_query($connect, $sql);

        if ($query){
            header('Location: tampilan_siswa.php');
        }else {
            header('Location: simpan_siswa.php?status=gagal');
        }
    } 
?>