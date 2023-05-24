<?php

// Konfigurasi database
$host = "localhost"; 
$username = "root"; 
$password = ""; 
$database = "paradise_ci"; 

// Membuat koneksi database
$koneksi = mysqli_connect($host, $username, $password, $database);

// Memeriksa apakah koneksi berhasil atau tidak
if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// echo "<script>
//         alert('Koneksi database berhasil');
//     </script>";
