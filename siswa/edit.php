<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Edit Siswa</h1>
        </div>
        <div class="col-4">
            <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id=$_GET['id'];
        $sql= "SELECT * FROM siswa WHERE id='$id'";
        $query=mysqli_query($koneksi, $sql);
        $row=mysqli_fetch_array($query);
        //var_dump()
        ?>
        <div class="col">
            <form action="?m=siswa&s=update" method="post">
                <div class="mb-2">
                    <label for="">NIS</label>
                    <input type="number" name="nis" class"form-control" value="<?php echo $row['nis'] ?>" >
                </div>
                <div class="mb-2">
                    <label for="">Nama Siswa</label>
                    <input type="text" name="nama" value="<?php echo $row['nama'] ?>" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">Jenis Kelamin</label>
                    <input type="text" name="jk" class="form-control" value="<?php echo $row['jk'] ?>" >
                </div>
                <div class="mb-2">
                    <label for="">Tempat Lahir</label>
                    <input type="text" name="tempat_lahir" class="form-control" value="<?php echo $row['tempat_lahir'] ?>" >
                </div>
                <div class="mb-2">
                    <label for="">Tanggal Lahir</label>
                    <input type="text" name="tanggal_lahir" class="form-control" value="<?php echo $row['tanggal_lahir'] ?>" >
                </div>
                <div class="mb-2">
                    <label for="">Jurusan</label>
                    <input type="number" name="nama_jurusan" class="form-control" value="<?php echo $row['nama_jurusan'] ?>" >
                </div>
                <div class="mb-2">
                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                    <input type="reset" class="btn btn-warning">
                    <input type="submit" name="update" value="Update" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</section>