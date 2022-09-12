<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <!-- Embedding Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- Embedding Fontawoseme -->
    <script src="https://kit.fontawesome.com/22a69e2285.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav class="navbar fixed-top" style="background-color: #f94b29; box-shadow: 4px 4px 5px -4px; padding: 15px;">
            <a class="navbar-brand" href="" style="color: black;">
                <img src="assets/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top" style="margin-left: 5px;">
                <strong style="margin-left: 10px;">BUKATOKO</strong>
            </a>
            <ul class="nav nav-pills" style="color: black;">
                <li class="nav-item">
                    <a class="nav-link" href="#produk">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="keranjang.php">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="histori_pelanggan.php">Pesananmu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example p-3 rounded-2" tabindex="0" style="background-color: rgb (255.255.255);">
        <br><br>
        <section class="col-md rounded" style="padding: 30px; margin-bottom: 3rem; margin-top: 8rem;"><br><br>
            <table style="margin-left: 4rem; margin-right: 3rem;">
                <td>
                    <h4 style="font-size: 80px; color: #333; line-height: 100%;"><strong>Buka<span style="color: #f94b29;">Toko</span></strong></h4>
                    <p style="font-size: 1.8rem; padding: 10px 0; margin-right: 10px;">Menjual segala kebutuhan Anda</p>
                    <a href="#kategori" class="btn btn-danger" style="font-size: 1.3rem; padding: 10px 15px;">Mulai Belanja</a>
                </td>
                <td>
                    <div>
                        <img src="assets/pin_7.jpg" width="800" alt="" class="text-end" style="margin-left: 18rem;">
                    </div>
                </td>
            </table>
        </section>
    </div>

    <section id="kategori" class="col-md rounded" style="padding: 30px; margin-left: 3rem; margin-right: 3rem;margin-bottom: 5rem;"><br><br>
        <div class="col-md rounded" style="padding: 30px;">
            <center>
                <h2 style="margin-top: 0px;">Kategori</h2><br><br>
            </center>
            <div class="row">
                <?php
                include "connect.php";
                $qry_produk = mysqli_query($conn, "select * from produk");
                ?>
                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="elektronik.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-bolt fa-5x mb-3" href="elektronik.php" aria-hidden="true"></i>
                        </center>
                        Elektronik
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="makanan.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-cutlery fa-5x mb-3" href="makanan.php" aria-hidden="true"></i>
                        </center>
                        Makanan & Minuman
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="komp.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-television fa-5x mb-3" href="komp.php" aria-hidden="true"></i>
                        </center>
                        Komputer & Handphone
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="kecantikan.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-female fa-5x mb-3" href="kecantikan.php" aria-hidden="true"></i>
                        </center>
                        Kecantikan
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="baju.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-shopping-bag fa-5x mb-3" href="baju.php" aria-hidden="true"></i>
                        </center>
                        Pakaian
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="bayi.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fas fa-baby-carriage fa-5x mb-3" href="bayi.php" aria-hidden="true"></i>
                        </center>
                        Bayi & Anak
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="kesehatan.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-medkit fa-5x mb-3" href="kesehatan.php" aria-hidden="true"></i>
                        </center>
                        Kesehatan
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="olahraga.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="far fa-futbol fa-5x mb-3" href="olahraga.php" aria-hidden="true"></i>
                        </center>
                        Perlengkapan Olahraga
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="furniture.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fa fa-home fa-5x mb-3" href="furniture.php" aria-hidden="true"></i>
                        </center>
                        Furniture
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="buku.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fas fa-book fa-5x mb-3" href="buku.php" aria-hidden="true"></i>
                        </center>
                        Stationery
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="sepatu.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fas fa-sleigh fa-5x mb-3" href="sepatu.php" aria-hidden="true"></i>
                        </center>
                        Sepatu
                    </a>
                </div>

                <div class="d-grid gap-1 col-2 md-2 mb-3">
                    <a href="otomotif.php" class="btn btn-light" style="box-shadow: 4px 4px 5px -4px; padding-top: 40px; padding-bottom: 40px;">
                        <center><i class="fas fa-car fa-5x mb-3" href="otomotif.php" aria-hidden="true"></i>
                        </center>
                        Otomotif
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section id="produk" class="col-md rounded" style="padding: 30px; margin-left: 3rem; margin-right: 3rem;margin-bottom: 5rem;">
        <div class="col-md rounded" style="padding: 30px;">
            <center>
                <h2 style="margin-top: 3rem; margin-bottom: 2rem;">Daftar Produk</h2>
            </center>
            <div class="row">
                <?php
                include "connect.php";
                $qry_produk = mysqli_query($conn, "select * from produk");
                while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mt-3 mb-3">
                            <img src="assets/foto_produk/<?= $dt_produk['foto'] ?>" width="305px">
                            <div class="card-body">
                                <h5 class="card-title"><?= $dt_produk['nama_produk'] ?></h5>
                                <p class="card-text"><?= substr($dt_produk['deskripsi'], 0, 200) ?></p>
                                <p class="card-text">IDR<?= substr($dt_produk['harga'], 0, 20) ?></p>
                                <a href="beli_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-danger">Beli</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>
</body>

</html>

<?php
include "footer.php"
?>