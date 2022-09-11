<?php
include "header_pelanggan.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>
    <section id="elektronik" class="col-md rounded" style="padding: 30px; margin-left: 3rem; margin-right: 3rem;"><br><br>
        <div class="col-md rounded bg-light" style="padding: 30px;">
            <center>
                <h2 style="margin-top: 0px;">Produk Furniture</h2>
            </center>
            <div class="row">
                <?php
                include "connect.php";
                $qry_produk = mysqli_query($conn, "select * from produk where kategori = 'furniture'");
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