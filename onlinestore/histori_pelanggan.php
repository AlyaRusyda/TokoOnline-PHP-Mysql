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
            <a class="navbar-brand" href="home_pelanggan.php" style="color: black;">
                <img src="assets/logo1.png" alt="" width="30" height="24" class="d-inline-block align-text-top" style="margin-left: 5px;">
                <strong style="margin-left: 10px;">BUKATOKO</strong>
            </a>
            <ul class="nav nav-pills" style="color: black;">
                <li class="nav-item">
                    <a class="nav-link" href="#kategori">Produk</a>
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

    <div class="container-fluid py-4">
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
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        session_start();
                                        $id = $_SESSION['id_pelanggan'];
                                        include 'connect.php';
                                        $qry_histori = mysqli_query($conn, "select produk.nama_produk, transaksi.tgl_transaksi, produk.harga, detail_transaksi.qty, produk.foto, transaksi.id_transaksi from produk JOIN transaksi ON produk.id_produk = transaksi.id_produk JOIN detail_transaksi on transaksi.id_transaksi = detail_transaksi.id_transaksi Where transaksi.id_pelanggan = '$id'");
                                        $no = 0;
                                        while ($dt_histori = mysqli_fetch_array($qry_histori)) {
                                            $no++; 
                                            $button_hapus="<a href='hapus_histori.php?id_transaksi=".$dt_histori['id_transaksi']."' class='btn btn-danger' onclick='return confirm(\"Apakah anda yakin menghapus data ini?\")'>Hapus</a>";
                                            ?>

                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $dt_histori['tgl_transaksi'] ?></td>
                                                <td><?= $dt_histori['nama_produk'] ?></td>
                                                <td><img src="assets/foto_produk/<?= $dt_histori['foto'] ?>" width="100px" ;></td>
                                                <td><?= $dt_histori['qty'] ?></td>
                                                <td><?= $dt_histori['harga'] ?></td>
                                                <td><?= $dt_histori['qty'] * $dt_histori['harga'] ?></td>
                                                <td> <?= $button_hapus ?> </td>
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
        </div>


</body>

</html>