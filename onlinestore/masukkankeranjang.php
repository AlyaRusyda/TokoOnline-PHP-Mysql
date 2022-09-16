<?php
session_start();
$id = $_SESSION['id_pelanggan'];
if ($_POST) {
    include "connect.php";
    $metode_bayar = $_POST['bayar'];

    if (empty($metode_bayar)) {
        echo "<script>alert('metode pembayaran tidak boleh kosong');location.href='masukkankeranjang.php';</script>";
    } else {
        $qry_get_produk = mysqli_query($conn, "select * from produk, pelanggan where id_produk = '" . $_GET['id_produk'] . "'");
        $dt_produk = mysqli_fetch_array($qry_get_produk);
        $_SESSION['cart'][] = array(
            'id_produk' => $dt_produk['id_produk'],
            'id_pelanggan' => $id,
            'nama' => $dt_produk['nama'],
            'alamat' => $dt_produk['alamat'],
            'nama_produk' => $dt_produk['nama_produk'],
            'foto' => $dt_produk['foto'],
            'harga' => $dt_produk['harga'],
            'qty' => $_POST['qty']
        );
    }
}
header('location: keranjang.php');
