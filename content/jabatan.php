<!-- ini UI untuk input daftar jabatan -->
<?php 
    if(!defined('INDEX')) die("");
?>

<h2 class="judul">Data Jabatan</h2>
<a class="tombol" href="?hal=jabatan_tambah">Tambah</a>

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Jabatan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = mysqli_query($con, "SELECT * FROM jabatan ORDER BY id_jabatan DESC");
            
            $no = 0;
            while($data = mysqli_fetch_array($query)) {
                $no++;
            ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $data["nama_jabatan"] ; ?></td>
                <td>
                <a href="?hal=jabatan_edit&id=<?= $data["id_jabatan"]?>" class="tombol edit">Edit</a>
                <a href="?hal=jabatan_hapus&id=<?= $data["id_jabatan"]?>" class="tombol hapus">Hapus</a>
                </td>
            </tr>
        <?php
            };
        ?>
    </tbody>
</table>