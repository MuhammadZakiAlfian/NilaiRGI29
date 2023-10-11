<?php
if(isset($_POST['update'])){
    include_once "koneksi.php";
    $id            = $_POST['id'];
    $nis           = $_POST['nis'];
    $nama          = $_POST['nama'];
    $jk            = $_POST['jk'];
    $tempat_lahir  = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $nama_jurusan  = $_POST['nama_jurusan'];

    $sql = "UPDATE siswa SET nis='$nis', nama='$nama', jk='$jk', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', nama_jurusan='$nama_jurusan' WHERE id='$id'";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=siswa');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=siswa";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>