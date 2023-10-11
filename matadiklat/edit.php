<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Edit Mata Diklat</h1>
        </div>
        <div class="col-4">
            <a href="?m=matadiklat&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
        </div>
        <?php
        include_once('koneksi.php');
        $id=$_GET['id'];
        $sql= "SELECT * FROM matadiklat WHERE id='$id'";
        $query=mysqli_query($koneksi, $sql);
        $row=mysqli_fetch_array($query);
        //var_dump()
        ?>
        <div class="col">
            <form action="?m=matadiklat&s=update" method="post">
                <div class="mb-2">
                    <label for="">Nama Mata Diklat</label>
                    <input type="text" name="matadiklat" value="<?php echo $row['matadiklat'] ?>" class="form-control" autofocus>
                </div>
                <div class="mb-2">
                    <label for="">SKS</label>
                    <input type="number" name="sks" class="form-control" value="<?php echo $row['sks'] ?>" >
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