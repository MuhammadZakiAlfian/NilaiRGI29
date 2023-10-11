<?php
if(isset($_POST['update'])){
    include_once "koneksi.php";
    $id           = $_POST['id'];
    $matadiklat = $_POST['matadiklat'];
    $sks    = $_POST['sks'];

    $sql = "UPDATE matadiklat SET matadiklat='$matadiklat', sks='$sks' WHERE id='$id'";
    $query=mysqli_query($koneksi, $sql);
    if($query) {
        header('location:index.php?m=matadiklat');
        // Var_dump($sql);
        // Cek error
    } else {
        include "index.php?m=matadiklat";
        echo 'script language="JavaScipt">';
        echo 'alert("Data Gagal ditambahkan")';
        echo '</script>';
    }
} else {
    echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
    echo '<script>window.history.back()</script>';
}
?>