<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $kategori=$_POST['kategori'];
    if(empty($nama_produk)){
        echo "<script>alert('Product Name should not be empty');location.href='ubah_produk.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('Description should not be empty');location.href='ubah_produk.php';</script>";
    } elseif(empty($harga)) {
        echo "<script>alert('Price should not be empty');location.href='ubah_produk.php';</script>";
    } elseif(empty($kategori)){
        echo "<script>alert('Must select a category');location.href='ubah_produk.php';</script>";
    } else {
        include "connect.php";
        if(empty($deskripsi)){
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."', harga='".$harga."', kategori='".$kategori."', foto='".$foto."' " ) or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Successful product update');location.href='index_petugas.php';</script>";
            } else {
                echo "<script>alert('Failed product update');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."', harga='".$harga."', kategori='".$kategori."', foto='".$foto."' where id_produk ='". $id_produk. "' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Successful product update');location.href='index_petugas.php';</script>";
            } else {
                echo "<script>alert('Failed product update');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        }
        
    } 
}
?>