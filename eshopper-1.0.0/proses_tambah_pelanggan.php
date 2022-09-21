<?php
if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    if(empty($username)){
        echo "<script>alert('username petugas tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('email tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('password tidak boleh kosong');location.href='tambah_pelanggan.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into pelanggan (username, email, password) value ('".$username."','".$email."','".$password."')");
        if($insert){
            echo "<script>alert('Sukses menambahkan pelanggan');location.href=tambah_pelanggan.php;</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pelanggan');location.href=tambah_pelanggan.php;</script>";
        }
    }
}
?>