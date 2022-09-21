<?php
if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = $_POST['password'];
    if(empty($username)){
        echo "<script>alert('Username should not be empty');location.href='login.php';</script>";
    } elseif(empty($email)){
        echo "<script>alert('Email should not be empty');location.href='login.php';</script>";
    } elseif(empty($alamat)){
        echo "<script>alert('Alamat should not be empty');location.href='login.php';</script>";
    } elseif(empty($password)){
        echo "<script>alert('Password should not be empty');location.href='login.php';</script>";
    } else {
        include "connect.php";
        $insert=mysqli_query($conn,"insert into pelanggan (username, email, alamat, password) value ('".$username."','".$email."','".$alamat."','".$password."')");
        if($insert){
            echo "<script>alert('Successfully adding customers');location.href=login.php;</script>";
        } else {
            echo "<script>alert('Failed to add customers');location.href=register.php;</script>";
        }
    }
}
?>