<?php include "header.php" ?>
<div id="layoutSidenav_content">
    <main>
        <div class="limiter">
            <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
                <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
                    <form class="login100-form validate-form flex-sb flex-w" method="post" action="" enctype="multipart/form-data">
                        <span class="login100-form-title p-b-53">
                            Edit Produk
                        </span>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Nama Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Nama Lengkap is required">
                            <input class="input100" type="text" name="nama_produk">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Deskripsi Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Username is required">
                            <textarea class="input100" type="text" name="deskripsi_produk"></textarea>
                            <span class="focus-input100"></span>
                        </div>
                        <br>
                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Harga Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Email is required">
                            <input class="input100" type="number" name="harga_produk">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-31 p-b-9">
                            <span class="txt1">
                                Stok Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Alamat is required">
                            <input class="input100" type="number" name="stok_produk">
                            <span class="focus-input100"></span>
                        </div>

                        <div class="p-t-13 p-b-9">
                            <span class="txt1">
                                Foto Produk
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <input class="" type="file" name="gambar">
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
    <?php include "footer.php" ?>