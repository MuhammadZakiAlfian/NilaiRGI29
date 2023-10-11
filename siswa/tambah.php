<section class="content">
    <div class="row">
        <div class="col-8">
            <h1>Modul Siswa</h1>
    </div>
    <div class="col-4">
        <a href="?m=siswa&s=tampil" class="btn btn-large btn-info float-end">Kembali</a>
</div>
<div class="col">
<form action="?m=siswa&s=simpan" method="post">
    <div class="mb-2">
        <label for="">Nomor Induk Santri</label>
        <input type="text" name="nis" class="form-control" autofocus>
    </div>
    <div class="mb-2">
        <label for="">Nama Santri</label>
        <input type="text" name="nama_siswa" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Jenis Kelamin</label>&nbsp;
        <input type="radio" name="jk" value="L" checked> Laki-laki &nbsp;
        <input type="radio" name="jk" value="P"> Perempuan
    </div>
    <div class="mb-2">
        <label for="">Tempat Lahir</label>
        <input type="text" name="tempat_lahir" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Tanggal Lahir</label>
        <input type="date" name="tanggal_lahir" class="form-control">
    </div>
    <div class="mb-2">
        <label for="">Nama Jurusan</label>
        <select name="jurusan" required class="form-control">
            <option value="">Pilih Jurusan</option>
            <option value="TKJ">TKJ</option>
            <option value="AP">AP</option>
        </select>
    </div>
    <div class="mb-2">
        <label for="">Foto</label>
        <input type="file" name="foto" accept="image/">
    </div>
        
    </div>
    <div class="mb-2">
        <input type="reset" class="btn btn-warning">
        <input type="submit" name="simpan" class="btn btn-primary">
        </div>
         </form>
      </div>
    </div>
</section>