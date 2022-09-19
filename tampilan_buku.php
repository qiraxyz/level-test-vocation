<?php 
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampilan data</title>
</head>
<body>
    <button><a href="tampilan_siswa.php">Data Siswa</a></button>
    <button><a href="tampilan_buku.php">Data Buku</a></button>
    <table border="1">
        <h3>Data Siswa</h3>
        <h4><a href="buku.html">Create</a></h4>
        <tr>
            <td>Id</td>
            <td>kode Jenis</td>
            <td>Nama Buku</td>
            <td>Stok</td>
            <td>Action</td>
        </tr>
        <?php
        $sql = "SELECT * FROM perpus";
        $query = mysqli_query($connect,$sql);

        while ($buk = (mysqli_fetch_array($query))) {
        echo "<tr>";
        echo "<td>". $buk ['id']. "</td>";
        echo "<td>". $buk ['kode_jenis']. "</td>";
        echo "<td>". $buk ['nama_buku']. "</td>";
        echo "<td>". $buk ['stok']. "</td>";
        echo "<td>". "<button>". "<a href='editform_buku.php?id=".$buk['id']."'>Edit</a>" . "</button>";
        echo "<button>". "<a href='hapus_buku.php?id=".$buk['id']."'>Hapus</a>". "</button>"; 
        echo "</td>";
        echo "</tr>";
        }
        ?>
    </table>
</body>
</html>