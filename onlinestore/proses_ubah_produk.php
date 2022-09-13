<?php
if($_POST){
    $id_produk=$_POST['id_produk'];
    $nama_produk=$_POST['nama_produk'];
    $deskripsi=$_POST['deskripsi'];
    $harga=$_POST['harga'];
    $kategori=$_POST['kategori'];
    if(empty($nama_produk)){
        echo "<script>alert('nama produk tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } elseif(empty($deskripsi)){
        echo "<script>alert('deskripsi tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } elseif(empty($harga)) {
        echo "<script>alert('harga tidak boleh kosong');location.href='tambah_produk.php';</script>";
    } elseif(empty($kategori)){
        echo "<script>alert('harus memilih kategori');location.href='tambah_produk.php';</script>";
    } else {
        include "connect.php";
        if(empty($deskripsi)){
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."', harga='".$harga."' " ) or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update produk');location.href='tampil_produk.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update produk set nama_produk='".$nama_produk."',deskripsi='".$deskripsi."', harga='".$harga."' where id_produk ='". $id_produk. "' ") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update produk');location.href='home_petugas.php';</script>";
            } else {
                echo "<script>alert('Gagal update produk');location.href='ubah_produk.php?id_produk=".$id_produk."';</script>";
            }
        }
        
    } 
}
?>