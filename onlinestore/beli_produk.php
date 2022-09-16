<?php
session_start();
include "connect.php";
$qry_detail_produk = mysqli_query($conn, "select * from produk where id_produk = '" . $_GET['id_produk'] . "'");
$dt_produk = mysqli_fetch_array($qry_detail_produk);
?>

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
                    <a class="nav-link" href="#produk" aria-current="page">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Riwayat">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="col-md rounded" style="padding: 30px; margin-top: 4rem;">
        <h2>Beli Produk</h2>
        <div class="row">
            <div class="col-md-4">
                <img src="assets/foto_produk/<?= $dt_produk['foto'] ?>" class="card-img-top">
            </div>
            <div class="col-md-8">
                <form action="masukkankeranjang.php?id_produk=<?= $dt_produk['id_produk'] ?>" method="post">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <td>Nama Produk</td>
                                <td><?= $dt_produk['nama_produk'] ?></td>
                            </tr>
                            <tr>
                                <td>Deskripsi</td>
                                <td><?= $dt_produk['deskripsi'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?= $dt_produk['harga'] ?></td>
                            </tr>
                            <tr>
                                <td>Jumlah Produk</td>
                                <td><input type="number" name="qty" value="1"></td>
                            </tr>
                            <tr>
                                <td>Metode Pembayaran</td>
                                <td>
                                    <input type="radio" name="bayar" id="cod"><i class="fas fa-gift fa-2x mb-3" style="margin-left: 15px;" aria-hidden="true"></i> <h5>COD</h5>
                                    <br>
                                    <input type="radio" name="bayar" id="bank"><i class="fa fa-exchange fa-2x mb-3" style="margin-left: 15px;" aria-hidden="true"></i> <h5>Transfer Bank</h5>
                                    <br>
                                    <input type="radio" name="bayar" id="credit"><i class="fa fa-credit-card fa-2x mb-3" style="margin-left: 15px;" aria-hidden="true"></i> <h5>Kartu Kredit</h5>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-success" type="submit" value="BELI"></td>
                            </tr>
                        </thead>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>