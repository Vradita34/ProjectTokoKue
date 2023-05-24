<?php include "./header.php" ?>
<?php include "../koneksi.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container">
            <h2 class="text-center my-5">Data Produk</h2>
            <div class="row">
                <?php
                // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
                $query = "SELECT * FROM produk ORDER BY id_produk ASC";
                $result = mysqli_query($koneksi, $query);
                //mengecek apakah ada error ketika menjalankan query
                if (!$result) {
                    die("Query Error: " . mysqli_errno($koneksi) .
                        " - " . mysqli_error($koneksi));
                }
                //buat perulangan untuk element tabel dari data mahasiswa
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col-md-3 mb-3">

                        <div class="card">
                            <img src="../db/gambar_produk/<?php echo $row['gambar']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['nama_produk']; ?></h5>
                                <p class="card-text"><?php echo substr($row['deskripsi'], 0, 20); ?>...</p>
                                <a href="detail_produk.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Lihat</a>
                                <a href="edit_produk.php?id=<?php echo $row['id']; ?>" class=" btn btn-primary">Edit</a>
                            </div>
                        </div>

                    </div>
                <?php
                }
                ?>
            </div>
        </div>

    </main>
    <?php include "./footer.php" ?>