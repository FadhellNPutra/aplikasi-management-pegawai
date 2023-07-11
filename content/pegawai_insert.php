<!-- Logic untuk menambah data ke database -->

<?php 
    if(!defined('INDEX')) die("");

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $tipeFile = $_FILES['foto']['type'];
    $ukuranFile = $_FILES['foto']['size'];

    $error = "";
    if($foto == ""){
        $query = mysqli_query($con, "INSERT INTO pegawai SET 
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tanggal_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
            ");
    }else{
        if($tipeFile != "image/jpeg" && $tipeFile != "image/jpg" && $tipeFile != "image/png"){ //ini tipe file
            $error = "Tipe file tidak didukung!";
        }elseif($ukuranFile >= 1000000){
            echo $ukuranFile;
            $error = "Ukuran file terlalu besar (Lebih dari 1MB)!";
        }else{
            move_uploaded_file($lokasi, "images/".$foto); //ini lokasi tempat akan dimasukkan
            $query = mysqli_query($con, "INSERT INTO pegawai SET 
            foto = '$foto',
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tanggal_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
            ");
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_tambah>";
    }elseif($query){
        echo "Data berhasil disimpan!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
    }else{
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error($con);
    }
?>