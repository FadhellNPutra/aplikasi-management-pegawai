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
<html lang="en" class="h-100">
   <head>
      <title>Dashboard</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="css/style.css"> -->
   </head>
   <body class="h-100">
      <nav class="navbar navbar-expand-sm navbar-dark sticky-top bg-info">
         <a href="#" class="navbar-brand">Manajemen Pegawai</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidebar" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
         <nav class="collapse navbar-collapse" id="sidebar">
            <ul class="menu navbar-nav d-sm-none">
                  <li class="nav-item"> 
                     <a href="?hal=dashboard" class="aktif nav-link text-white">
                        <span class="material-icons">dashboard</span> Dashboard
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="?hal=pegawai" class="nav-link text-white"><span class="material-icons">person</span> Data Pegawai</a> 
                  </li>
                  <li class="nav-item">
                     <a href="?hal=jabatan" class="nav-link text-white">
                        <span class="material-icons">sort</span>Data Jabatan
                     </a>
                  </li>
                  <li class="nav-item">
                     <a href="logout.php" class="nav-link text-white"><span class="material-icons">logout</span> Keluar</a>
                  </li>
            </ul>
         </nav>

      </nav>

      <div class="container-fluid h-100">
         <div class="row h-100">
            <nav class="col-md-2 col-sm3 bg-dark h-100 p-0 position-fixed d-none d-sm-block">
               <ul class="menu list-group list-group-flush">
                  <li class="list-group-item bg-dark"> 
                     <a href="?hal=dashboard" class="aktif nav-link text-white"> <span class="material-icons">dashboard</span>Dashboard</a> 
                  </li>
                  <li class="list-group-item bg-dark"> 
                     <a href="?hal=pegawai" class="nav-link text-white"><span class="material-icons">person</span>Data Pegawai</a> 
                  </li>
                  <li class="list-group-item bg-dark"> 
                     <a href="?hal=jabatan" class="nav-link text-white"><span class="material-icons">sort</span>Data Jabatan</a> 
                  </li>
                  <li class="list-group-item bg-dark"> 
                     <a href="logout.php" class="nav-link text-white"><span class="material-icons">logout</span>Keluar</a> 
                  </li>
               </ul>
            </nav>
         </div>
         <div class="col-md-10 col-sm-9 offset-md-2 offset-sm-3 mb-3">
            <section class="main">
               <!-- kode ini mengarahkan ke file konten.php yang mana berisi perulangan nama-nama file proses CRUD di folder content -->
            <?php // include "konten.php";?> 
            </section>
         </div>
      </div>
      <footer class="bg-light fixed-bottom">
         <p class="m-2 text-center text-muted">Copyright &copy; Fadhel Nanda Putra</p>
      </footer>




      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>
<?php 
   }
?>