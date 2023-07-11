<?php 
    if(!defined('INDEX')) die();

    $foto = $_FILES['foto']['name'];
    $lokasi = $_FILES['foto']['tmp_name'];
    $tipeFile = $_FILES['foto']['type'];
    $ukuranFile = $_FILES['foto']['size'];

    $error = "";
    if($foto == ""){
        $query = mysqli_query($con, "UPDATE pegawai SET 
        nama_pegawai = '$_POST[nama]',
        jenis_kelamin = '$_POST[jk]',
        tanggal_lahir = '$_POST[tanggal]',
        id_jabatan = '$_POST[jabatan]',
        keterangan = '$_POST[keterangan]' WHERE id_pegawai='$_POST[id]'
        ");
    }else{
        if($tipeFile != "image/jpeg" && $tipeFile != "image/jpg" && $tipeFile != "image/png"){ //ini tipe file
            $error = "Tipe file tidak didukung!";
        }elseif($ukuranFile >= 1000000){
            echo $ukuranFile;
            $error = "Ukuran file terlalu besar (Lebih dari 1MB)!";
        }else{
            $query = mysqli_query($con, "SELECT * FROM pegawai WHERE id_pegawai='$_POST[id]'");
            $data = mysqli_fetch_array($query);
            if(file_exists("images/'$data[foto]'")) unlink("images/'$data[foto]'");

            move_uploaded_file($lokasi, "images/".$foto); //ini lokasi tempat akan dimasukkan
            $query = mysqli_query($con, "UPDATE pegawai SET 
            foto = '$foto',
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tanggal_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]' WHERE id_pegawai='$_POST[id]'
            ");
        }
    }

    if($error != ""){
        echo $error;
        echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_edit&id=$_POST[id]>";
    }elseif($query){
        echo "Data berhasil disimpan!";
        echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
    }else{
        echo "Tidak dapat menyimpan data!<br>";
        echo mysqli_error($con);
    }
?>