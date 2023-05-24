<?php include "./header.php" ?>

<?php
// memanggil file koneksi.php untuk membuat koneksi
include '../koneksi.php';

// mengecek apakah di url ada nilai GET id
if (isset($_GET['id_produk'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id_produk"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM produk WHERE id_produk='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if (!$result) {
        die("Query Error: " . mysqli_errno($koneksi) .
            " - " . mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
    // apabila data tidak ada pada database maka akan dijalankan perintah ini
    if (!count($data)) {
        echo "<script>alert('Data tidak ditemukan pada database');window.location='data_produk,php';</script>";
    }
} else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='data_produk.php';</script>";
}
?>

<div id="layoutSidenav_content">
    <main>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class="login100-form validate-form flex-sb flex-w" method="post" action="proses_edit_produk.php" enctype="multipart/form-data">
                        <span class="login100-form-title p-b-53">
                            Edit Produk
                        </span>
                        <input name="id_produk" value="<?php echo $data['id_produk']; ?>" hidden />
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Nama Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
                            <input class="input100" type="text" name="nama" value="<?php echo $data['nama_produk']; ?>" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Kategori Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Kategori Produk is required">
                            <input class="input100" type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required placeholder=" Cake, Cookies, dll">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Deskripsi
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
                            <input class="input100" type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" required>
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Harga Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Email is required">
                            <input class="input100" type="number" name="harga" value="<?php echo $data['harga']; ?>" required>
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Stok Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Alamat is required">
                            <input class="input100" type="number" name="stok" value="<?php echo $data['stok']; ?>" required>
                            <span class=" focus-input100"></span>
                        </div>

                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Foto Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <img src="../db/gambar_produk/<?php echo $data['gambar']; ?>" style="width: 120px;float: left;margin-bottom: 5px; border-radius:20px;">
                            <input type="file" name="gambar_produk" value="gambar_produk">

                        </div>
                        <br>

                        <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" name="submit">
                                Edit
                            </button>
                    </form>
                </div>
            </div>
        </div>


        <div id="dropDownSelect1"></div>

    </main>
    <?php include "./footer.php" ?>