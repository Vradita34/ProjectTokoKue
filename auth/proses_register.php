<?php
require "../koneksi.php";

// Cek apakah tombol submit telah diklik atau belum
if (isset($_POST['submit'])) {
    
    // Ambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    
    // Validasi data
    if (empty($nama_lengkap) || empty($username) || empty($email) || empty($alamat) || empty($telp) || empty($password) || empty($confirm_password)) {
        // Jika ada data yang kosong, tampilkan pesan error
        echo "<script>alert('Semua data harus diisi!');</script>";
        exit();
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Jika format email salah, tampilkan pesan error
        echo "<script>alert('Format email tidak valid!');</script>";
        exit();
    } elseif (strlen($password) < 6) {
        // Jika password kurang dari 6 karakter, tampilkan pesan error
        echo "<script>alert('Password minimal 6 karakter!');</script>";
        exit();
    } elseif ($password != $confirm_password) {
        // Jika password dan konfirmasi password tidak sama, tampilkan pesan error
        echo "<script>alert('Password dan konfirmasi password tidak sama!');</script>";
        exit();
    }
    
    // Enkripsi password sebelum disimpan di database
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    // Query untuk menambahkan data pengguna baru ke dalam database
    $query = "INSERT INTO pelanggan (nama_lengkap, username, email, alamat, telp, password) VALUES ('$nama_lengkap', '$username', '$email', '$alamat', '$telp', '$password')";
    
    // Jalankan query
    if (mysqli_query($koneksi, $query)) {
        // Jika berhasil, tampilkan pesan sukses dan redirect ke halaman login
        echo "<script>
                    alert('Pendaftaran berhasil!');
                    window.location.href='login.php';
            </script>";
    } else {
        // Jika gagal, tampilkan pesan error
        echo "Terjadi kesalahan: " . mysqli_error($koneksi);
    }
    
    // Tutup koneksi database
    mysqli_close($koneksi);
}
?>


