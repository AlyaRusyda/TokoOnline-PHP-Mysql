<?php 
    if($_GET['id_produk']){
        include "connect.php";
        $qry_hapus=mysqli_query($conn,"delete from produk where id_produk='".$_GET['id_produk']."'");
        if($qry_hapus){
            echo "<script>alert('Successfully delete product');location.href='index_petugas.php';</script>";
        } else {
            echo "<script>alert('Failed delete product');location.href='index_petugas.php';</script>";
        }
    }
?>