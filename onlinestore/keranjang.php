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
                    <a class="nav-link" href="#kategori">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Keranjang">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#Riwayat">Pesananmu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="col-md rounded" style="padding: 30px; margin-top: 4rem;">

        <h2>Daftar Produk di Keranjang</h2>
        <table class="table table-hover striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Nama Produk</th>
                    <th>Jumlah</th>
                    <th>Total Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (@$_SESSION['cart'] as $key_produk => $val_produk) :
                ?>
                    <tr>
                        <td>
                            <?= ($key_produk + 1) ?>
                        </td>
                        <td>
                            <?= $val_produk['nama_produk'] ?>
                        </td>
                        <td>
                            <?= $val_produk['qty'] ?>
                        </td>
                        <td>
                            <?= $val_produk['harga'] * $val_produk['qty'] ?>
                        </td>
                        <td>
                            <a href="hapus_cart.php?id=<?= $key_produk ?>" class="btn btn-danger"><strong>X</strong></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="checkout.php" class="btn btn-dark">Check Out</a>
</body>

</html>