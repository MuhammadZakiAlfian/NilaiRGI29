<?php
if(isset($_GET['id'])){
    include_once "koneksi.php";
    $id=$_GET['id'];

    $sql = "DELETE FROM siswa WHERE id='$id'";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php?m=siswa');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=siswa";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal dihapus")';
        echo '</script>';
    }
} else {
    echo "Jangan akses langsung kemari, cek name pada submit <a href='index.php>'>Kembali</a>'";
    echo '<script>window.history.back()</script>';
}