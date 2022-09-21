<?php 
session_start();
    $id = $_SESSION['id_pelanggan'];
    if($_POST){
        include "connect.php";
        $qry_get_produk=mysqli_query($conn,"select * from produk, pelanggan, metode_pembayaran where produk.id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        // var_dump($dt_produk);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_produk['id_produk'],
            'id_pelanggan'=>$id,
            'nama_produk'=>$dt_produk['nama_produk'],
            'foto'=>$dt_produk['foto'],
            'harga'=>$dt_produk['harga'],
            'qty'=>$_POST['qty'],
            'payment'=>$_POST['payment']
        );
        // var_dump($_SESSION['cart']);
    }
    header('location: keranjang.php');
?>