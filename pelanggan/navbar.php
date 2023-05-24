<?php
session_start();
if (isset($_SESSION['id_pelanggan'])) {
    $nama_user = $_SESSION['nama_lengkap'];
} else if (isset($_SESSION['id_petugas'])) {
    $nama_user = $_SESSION['nama_lengkap'];
} else {
    echo "<script>
            alert('Silahkan Login Dahulu, jika belum punya akun silahkan registrasi terlebih dahulu');
            window.location.href = '../auth/login.php';
        </script>";
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paradise Cake House</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/barfiller.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="../assets/img/icon/search.png" alt=""></a>
                <a href="#"><img src="../assets/img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="../assets/img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div>
        </div>
        <div class="offcanvas__logo">
            <a href="../index.php"><img src="../assets/img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>Mata Uang<span class="arrow_carrot-down"></span>
                    <ul>
                        <li>IDR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>Bahasa<span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
                <li><a href="../auth/login.php">Sign in</a> <span class="arrow_carrot"></span></li>
                <li><a href="../auth/logout.php">Log Out</a> <span class="arrow_carrot"></span></li>
            </ul>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>Bahasa<span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>IND</li>
                                            <li>ENG</li>
                                        </ul>
                                    </li>
                                    <li><a href="../auth/login.php">Sign in</a> <span class="arrow_carrot"></span></li>
                                    <li><a href="../auth/logout.php">Log Out</a> <span class="arrow_carrot"></span></li>
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="index.php"><img src="../assets/img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="../assets/img/icon/search.png" alt=""></a>
                                    <a href="wisslist.php"><img src="../assets/img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="shoping-cart.php"><img src="../assets/img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="../index.php">Home</a></li>
                            <li><a href="../about.php">About</a></li>
                            <li><a href="../shop.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="../shop-details.php">Shop Details</a></li>
                                    <li><a href="shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="checkout.php">Check Out</a></li>
                                    <li><a href="wisslist.php">Wisslist</a></li>
                                    <li><a href="../Class.php">Class</a></li>
                                    <li><a href="../blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="../blog.php">Blog</a></li>
                            <li><a href=".../contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Section End -->