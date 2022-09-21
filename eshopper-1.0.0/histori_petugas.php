<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="index_pelanggan.php" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse hidden navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <a href="index_petugas.php" class="nav-item nav-link active">Home</a>
                        <a href="tambah_produk.php" class="nav-item nav-link">Add Product</a>
                        <a href="histori_petugas.php" class="nav-item nav-link">History</a>
                        <a href="logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index_petugas.php" class="nav-item nav-link active">Home</a>
                            <a href="tambah_produk.php" class="nav-item nav-link">Add Product</a>
                            <a href="histori_petugas.php" class="nav-item nav-link">History</a>
                            <a href="logout.php" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">History</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">History</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">

                        <h6>Pelanggan</h6>

                    </div>
                    <div class="col-md rounded" style="padding: 30px; margin-top: 1rem;">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <h2>Riwayat Belanja</h2>
                                <table class="table table-hover striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Tanggal Beli</th>
                                            <th>Nama Produk</th>
                                            <th>Foto Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $id = $_SESSION['id_pelanggan'];
                                        include 'connect.php';
                                        $qry_histori = mysqli_query($conn, "select produk.nama_produk, transaksi.tgl_transaksi, produk.harga, detail_transaksi.qty, produk.foto, transaksi.id_transaksi from produk JOIN transaksi ON produk.id_produk = transaksi.id_produk JOIN detail_transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi Where transaksi.id_pelanggan = '$id'");
                                        $no = 0;
                                        while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                                            $no++;
                                        ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $dt_histori['tgl_transaksi'] ?></td>
                                                <td><?= $dt_histori['nama_produk'] ?></td>
                                                <td><img src="assets/foto_produk/<?= $dt_histori['foto'] ?>" width="100px" ;></td>
                                                <td><?= $dt_histori['qty'] ?></td>
                                                <td><?= $dt_histori['harga'] ?></td>
                                                <td><?= $dt_histori['qty'] * $dt_histori['harga'] ?></td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- History -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-5">
            <div class="table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>NO</th>
                            <th>Tanggal Beli</th>
                            <th>Nama Produk</th>
                            <th>Foto Produk</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <?php 
                    include 'connect.php';
                    $qry_histori = mysqli_query($conn, "select produk.nama_produk, transaksi.tgl_transaksi, produk.harga, detail_transaksi.qty, produk.foto, transaksi.id_transaksi from produk JOIN transaksi ON produk.id_produk = transaksi.id_produk JOIN detail_transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi");
                    $no = 0;
                    while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                        $no++; ?>
                        <tbody class="align-middle">
                            <tr>
                                <td><?= $no ?></td>
                                <td><?= $dt_histori['tgl_transaksi'] ?></td>
                                <td><?= $dt_histori['nama_produk'] ?></td>
                                <td><img src="img/foto_produk/<?= $dt_histori['foto'] ?>" width="100px" ;></td>
                                <td><?= $dt_histori['qty'] ?></td>
                                <td><?= $dt_histori['harga'] ?></td>
                                <td><?= $dt_histori['qty'] * $dt_histori['harga'] ?></td>
                            </tr>
                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
    <!-- History End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                </a>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>12 Thamrin Street, Jakarta, Indonesia</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eshopper@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index_pelanggan.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="keranjang.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="histori_pelanggan.php"><i class="fa fa-angle-right mr-2"></i>History</a>
                            <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Our Social Media</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="https://twitter.com/alyamhrst"><i class="fab fa-twitter"></i></i> @eshopper.official</a>
                            <a class="text-dark mb-2" href="https://www.instagram.com/alyarusyda__/"><i class="fab fa-instagram"></i> @eshopper.official</a>
                            <a class="text-dark mb-2" href="https://youtu.be/Xhoo8Oecq78.html"><i class="fab fa-youtube"></i> @eshopper.official</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row border-top border-light mx-xl-5 py-4">
            <div class="col-md-6 px-xl-0">
                <p class="mb-md-0 text-center text-md-left text-dark">
                    &copy; <a class="text-dark font-weight-semi-bold" href="#">eshopper.com</a>.
                </p>
            </div>
            <div class="col-md-6 px-xl-0 text-center text-md-right">
                <img class="img-fluid" src="img/payments.png" alt="">
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

</body>

</html>