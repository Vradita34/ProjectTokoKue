<?php
session_start();
require "../koneksi.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // mencari user dengan email yang sesuai
    $query_pelanggan = "SELECT * FROM pelanggan WHERE username='$username'";
    $result_pelanggan = mysqli_query($koneksi, $query_pelanggan);

    $query_petugas = "SELECT * FROM petugas WHERE username='$username'";
    $result_petugas = mysqli_query($koneksi, $query_petugas);
    //memeriksa apakah pengguna adalah pelanggan atau petugas
    if (mysqli_num_rows($result_pelanggan) > 0) {
        //jika pengguna adalah pelanggan, ambil data pelanggan dari database
        $row = mysqli_fetch_assoc($result_pelanggan);

        //verifikasi password
        if (password_verify($password, $row['password'])) {
            //jika password benar, simpan data pelanggan ke session
            $_SESSION['id_pelanggan'] = $row['id_pelanggan'];
            $_SESSION['nama_lengkap'] = $row['nama_lengkap'];

            //redirect ke halaman utama pelanggan
            header("Location: ../index.php");
            exit();
        } else {
            //jika password salah, tampilkan pesan error
            echo "<script> 
                        alert('Username atau password salah!');
                        window.location.href = 'login.php';
                  </script>";
            exit();
        }
    } else if (mysqli_num_rows($result_petugas) > 0) {
        //jika pengguna adalah petugas, ambil data petugas dari database
        $row = mysqli_fetch_assoc($result_petugas);

        //verifikasi password
        if (password_verify($password, $row['password'])) {
            //jika password benar, periksa tipe_petugas untuk menentukan apakah petugas biasa atau admin
            if ($row['tipe_petugas'] == 'admin') {
                //jika petugas adalah admin, simpan data admin ke session
                $_SESSION['id_petugas'] = $row['id_petugas'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                $_SESSION['tipe_petugas'] = $row['tipe_petugas'];

                //redirect ke halaman utama admin
                echo "<script>
                        alert('Selamat datang Admin :)');
                        window.location.href = '../admin/index.php';
                    </script>";
                exit();
            } else {
                //jika petugas adalah petugas biasa, simpan data petugas ke session
                $_SESSION['id_petugas'] = $row['id_petugas'];
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                $_SESSION['tipe_petugas'] = $row['tipe_petugas'];

                //redirect ke halaman utama petugas
                echo "<script>
                        alert('Selamat datang Petugas :)');
                        window.location.href = '../petugas/index.php';
                    </script>";
                exit();
            }
        } else {
            echo "<script>
                    alert('Username & Password salah');
                    window.location.href = 'login.php';
                </script>";
            //jika password salah, tampilkan pesan error
        }
    }
}
mysqli_close($koneksi);
