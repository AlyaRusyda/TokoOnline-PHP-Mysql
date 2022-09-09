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

    <div id="produk">
        <div class="col-md rounded bg-light" style="padding: 30px;">
            <h2 style="margin-top: 5rem;">Daftar Produk</h2>
            <div class="row">
                <?php
                include "connect.php";
                $qry_produk = mysqli_query($conn, "select * from produk");
                while ($dt_produk = mysqli_fetch_array($qry_produk)) {
                ?>
                    <div class="col-md-3">
                        <div class="card mt-3 mb-3">
                            <center><img src="assets/foto_produk/<?= $dt_produk['foto'] ?>" width="300px"></center>
                            <div class="card-body">
                                <h5 class="card-title text-wrap" style="width: 18rem;"><?= $dt_produk['nama_produk'] ?></h5>
                                <p class="card-text text-wrap" style="width: 18rem;"><?= substr($dt_produk['deskripsi'], 0, 200) ?></p>
                                <p class="card-text">IDR<?= substr($dt_produk['harga'], 0, 20) ?></p>
                                <a href="hapus_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-danger">Hapus</a>
                                <a href="ubah_produk.php?id_produk=<?= $dt_produk['id_produk'] ?>" class="btn btn-warning">Edit</a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <a href="tambah_produk.php" class="btn btn-dark">+ Tambah Produk</a>
        </div>
        </section>
</body>

</html>