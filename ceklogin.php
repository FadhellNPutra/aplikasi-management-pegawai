<?php 
    // membuat session baru. hubungkan dengan database yang ada di file config.php
    session_start();
    include "library/config.php";

    // ambil data input user
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    // mengambil data dari database
    $query = mysqli_query($con, "SELECT * FROM users WHERE username= '$username' AND password= '$password'");
    $data = mysqli_fetch_array($query);
    $jml = mysqli_num_rows($query);

    if($jml > 0){
        $_SESSION['username'] = $data['username'];
        $_SESSION['password'] = $data['password'];

        header('location: index.php');
    } else {
        echo "<p style='text-align: center;'>Login gagal</p>";
        echo "<meta http-equiv='refresh' content='2; url=login.php'>";
    };
?>