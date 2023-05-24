<?php
include "../koneksi.php";
?>

<?php

function tampilkanInputKategori()
{
  // Koneksi ke database (ganti dengan konfigurasi koneksi Anda)
  include "../koneksi.php";
  // Query untuk mengambil data kategori dari tabel Kategori_produk
  $query_kategori = "SELECT kategori FROM Kategori_produk";
  $result_kategori = mysqli_query($koneksi, $query_kategori);

  // String HTML untuk input select option
  $html = '<select class="input100" name="kategori">';
  while ($row_kategori = mysqli_fetch_assoc($result_kategori)) {
    $html .= '<option class="input100" value="' . $row_kategori['kategori'] . '">' . $row_kategori['kategori'] . '</option>';
  }
  $html .= '</select>';

  // Menutup koneksi
  mysqli_close($koneksi);

  return $html;
}

// Contoh penggunaan fungsi
$inputKategori = tampilkanInputKategori();

?>

<!-- Contoh penggunaan input select option dalam HTML -->
<!-- <form action="proses.php" method="post">
  <label for="id_kategori">Kategori:</label>
  <?php echo $inputKategori; ?>
  <button type="submit">Submit</button>
</form> -->


<?php include "./header.php"; ?>
<div id="layoutSidenav_content">
  <main>
    <div class="limiter">
      <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
          <form class="login100-form validate-form flex-sb flex-w" method="post" action="proses_tambah_produk.php" enctype="multipart/form-data">
            <span class="login100-form-title p-b-53">
              Tambah Produk
            </span>

            <div class="p-t-31 p-b-9">
              <span class="txt1">
                Nama Produk
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
              <input class="input100" type="text" name="nama" required>
              <span class="focus-input100"></span>
            </div>

            <br>
            <div class="p-t-31 p-b-9">
              <span class="txt1">
                Kategori Produk
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Kategori Produk is required">
              <?php echo $inputKategori;
              $inputKategori = tampilkanInputKategori(); ?>
              <!-- <span class="txt1">
                Opsi Kategori lain
              </span>
              <input class="input100" type="text" name="kategori">
              <span class="focus-input100"></span> -->
            </div>

            <br>
            <div class="p-t-31 p-b-9">
              <span class="txt1">
                Deskripsi
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Deskripsi is required">
              <input class="input100" type="text" name="deskripsi" required>
              <span class="focus-input100"></span>
            </div>

            <br>
            <div class="p-t-31 p-b-9">
              <span class="txt1">
                Harga Produk
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Email is required">
              <input class="input100" type="number" name="harga" required>
              <span class="focus-input100"></span>
            </div>
            <br>
            <div class="p-t-31 p-b-9">
              <span class="txt1">
                Stok Produk
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Alamat is required">
              <input class="input100" type="number" name="stok" required>
              <span class="focus-input100"></span>
            </div>
            <br>
            <div class="p-t-13 p-b-9">
              <span class="txt1">
                Foto Produk
              </span>
            </div>
            <div class="wrap-input100 validate-input" data-validate="Password is required">
              <!-- <input class="input100" type="file" name="gambar" required> -->
              <input type="file" name="gambar_produk" required="required">
              <span class="focus-input100"></span>
            </div>
            <br>

            <div class="container-login100-form-btn m-t-17">
              <button class="login100-form-btn" name="submit">
                Tambah
              </button>
          </form>
        </div>
      </div>
    </div>


    <div id="dropDownSelect1"></div>

  </main>
  <?php include "./footer.php" ?>