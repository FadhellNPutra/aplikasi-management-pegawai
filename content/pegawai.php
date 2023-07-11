<!-- Ini UI untuk daftar Pegawai -->

<?php 
    if(!defined('INDEX')) die(""); //ini adalah cara memanggil konstanta INDEX. ini digunakan khusus untuk file UI
?>

<h2 class="judul">Data Pegawai</h2>
<a href="?hal=pegawai_tambah" class="tombol">Tambah</a> <!-- ini akan mengarahkan ke file pegawai_tambah.php -->

<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Jabatan</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            $query = mysqli_query($con, "SELECT * FROM pegawai LEFT JOIN jabatan ON pegawai.id_jabatan=jabatan.id_jabatan ORDER BY pegawai.id_pegawai DESC");
            $no = 0;
            while($data = mysqli_fetch_array($query)){
                $no++
            
        ?>
            <tr>
                <td><?= $no ?></td>
                <td><img src="image/<?= $data['foto']?>" width="100" alt=""></td>
                <td><?= $data['nama_pegawai'] ?></td>
                <td><?= $data['jenis_kelamin'] ?></td>
                <td><?= $data['tanggal_lahir'] ?></td>
                <td><?= $data['nama_jabatan'] ?></td>
                <td><?= $data['keterangan'] ?></td>
                <td>
                    <a href="?hal=pegawai_edit&id=<?= $data['id_pegawai']?>" class="tombol edit">Edit</a>
                    <a href="?hal=pegawai_hapus&id=<?= $data['id_pegawai']?>&foto=<?= $data['foto'] ?>" class="tombol hapus">Hapus</a>
                </td>
            </tr>
        <?php 
            }
        ?>
    </tbody>
</table>