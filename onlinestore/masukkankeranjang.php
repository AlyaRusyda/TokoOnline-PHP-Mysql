<?php 
session_start();
    if($_POST){
        include "connect.php";
        
        $qry_get_produk=mysqli_query($conn,"select * from produk, pelanggan where id_produk = '".$_GET['id_produk']."'");
        $dt_produk=mysqli_fetch_array($qry_get_produk);
        $_SESSION['cart'][]=array(
            'id_produk'=>$dt_produk['id_produk'],
            'id_pelanggan'=>$dt_produk['id_pelanggan'],
            'nama'=>$dt_produk['nama'],
            'alamat'=>$dt_produk['alamat'],
            'nama_produk'=>$dt_produk['nama_produk'],
            'foto'=>$dt_produk['foto'],
            'harga'=>$dt_produk['harga'],
            'qty'=>$_POST['qty']
        );
    }
    header('location: keranjang.php');
?>
