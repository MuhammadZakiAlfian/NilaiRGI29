<div class="content">
    <div class="row">
        <a href="?m=siswa&s=tambah" class="btn btn-info">Tambah Siswa</a>
        <h2>Modul Siswa</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include_once('koneksi.php');
                $sql = 'SELECT siswa.id, nis, nama, jk, tempat_lahir, tanggal_lahir, nama_jurusan, foto FROM siswa JOIN jurusan ON jurusan.id=siswa.jurusan_id';
                $query = mysqli_query($koneksi,$sql);
                if (mysqli_num_rows($query) == 0) {
                    echo "<tr><td colspan='5'>Data Kosong</td></tr>";
                } else {
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['nis'] . "</td>";
                        echo "<td>" . $r['nama'] . "</td>";
                        echo "<td>" . $r['jk'] . "</td>";
                        echo "<td>" . $r['tempat_lahir'] . "</td>";
                        echo "<td>" . date('d F Y', strtotime($r['tanggal_lahir'])) . "</td>";
                        echo "<td>" . $r['nama_jurusan'] . "</td>";
                        if($r['foto']=='') {
                            echo "<td align='center'><img src='image/cms.jpg' height=74></td>";
                        } else {
                            echo "<td align='center'><img src='data:image?jpeg;base64," . base64_encode($r['foto']) . "' height=74></td>";
                        }
                        echo '<td><a href="?m=siswa&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=siswa&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus Siswa akan menghilangkan SEMUA data siswa yang ada pada Siswa tersebut, yakin Siswa ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</div>