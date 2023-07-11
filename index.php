<?php
// 1. Buat Session
   session_start(); //ini berfungsi untuk membuat session agar dapat masuk ke dashboard. Akses melalui variable super global
   ob_start(); //untuk membuat buffer keluaran

   include "library/config.php"; //memasukkan atau menggabungkan file config.php di folder library yang merupakan koneksi ke database

   // 2. Validasi Session
   //kode di bawah ini berfungsi memeriksa apakah session ada atau tidak
   if(empty($_SESSION['username']) || empty($_SESSION['password'])){
      echo "<p style='text-align: center;'>Anda harus login terlebih dahulu!</p>";
      echo "<meta http-equiv='refresh' content='2; url=login.php'>";
   }else{
      define('INDEX', true); //ini untuk membuat sebuah konstanta INDEX yang mana kode setelah konstanta INDEX dibuat akan menjadi template di file-file lain bila dipanggil
?>

<!DOCTYPE HTML>
<html>
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="css/style.css">
   </head>
   <body>
      <header>
         Aplikasi Manajemen Pegawai
      </header>
      <div class="container">
         <aside>
            <ul class="menu">
               <li> <a href="?hal=dashboard" class="aktif">Dashboard</a> </li>
               <li> <a href="?hal=pegawai">Data Pegawai</a> </li>
               <li> <a href="?hal=jabatan">Data Jabatan</a> </li>
               <li> <a href="logout.php">Keluar</a> </li>
            </ul>
         </aside>
         <section class="main">
            <!-- kode ini mengarahkan ke file konten.php yang mana berisi perulangan nama-nama file proses CRUD di folder content -->
            <?php include "konten.php";?> 
            
         </section>
      </div>
      <footer>
         Copyright &copy; Fadhel Nanda Putra
      </footer>
   </body>
</html>
<?php 
   }
?>