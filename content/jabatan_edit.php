<!-- Ini UI untuk mengedit data yang sudah ada -->
<?php 
    if(!defined('INDEX')) die("");

    $query = mysqli_query($con, "SELECT * FROM jabatan WHERE id_jabatan = '$_GET[id]' ");
    $data = mysqli_fetch_array($query);
?>

<h2 class="judul">Edit Jabatan</h2>
<form action="?hal=jabatan_update" method="post">
    <input type="hidden" name="id" value="<?= $data['id_jabatan'] ?>">

    <div class="form-group">
        <label for="nama">Nama</label>
        <div class="input">
            <input type="text" name="nama" id="nama" value="<?= $data['nama_jabatan'] ?>">
        </div>
        <div class="form-group">
            <input type="submit" value="Simpan" class="tombol simpan">
            <input type="reset" value="Batal" class="tombol reset">
        </div>
    </div>
</form>


