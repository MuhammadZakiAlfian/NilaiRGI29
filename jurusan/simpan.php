<?php
if(isset($_POST['simpan'])){
    include_once('koneksi.php');
    $nama_jurusan = $_POST['nama_jurusan'];
    $kapasitas    = $_POST['kapasitas'];
    $terisi       = $_POST['terisi'];

    $sql="INSERT INTO jurusan SET nama_jurusan='$nama_jurusan', kapasitas='$kapasitas', terisi='$terisi' ";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=jurusan');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=jurusan";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>