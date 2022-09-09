<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $login=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username tidak boleh kosong');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password tidak boleh kosong');location.href='login.php';</script>";
        } else {
            if ($login == 'petugas') { //Jika Pengakses Memilih Petugas
                include "connect.php";
                $query = mysqli_query($conn, "select * from petugas where username = '".$username."' and password = '".$password."'"); //Mencari Data Pada Database
                $cek = mysqli_num_rows($query); //Cek Ketersediaan
                if ($cek > 0) { //Jika Tidak Kosong
                    $_SESSION['masuk'] = $username; //Membuat Session
                    header("location: home_petugas.php"); //Memuat Ulang Halaman
                }                                                                                           
                else{//Jika Kosong
                    echo "<center><div class='peringatan'>Username Atau Password Untuk Petugas Salah!</div></center>";
                }
            } elseif ($login == 'pelanggan') {
                include "connect.php";
                $query = mysqli_query($conn, "select * from pelanggan WHERE username = '".$username."' and password = '".$password."'"); //Mencari Data Pada Database
                $cek = mysqli_num_rows($query); //Cek Ketersediaan
                if ($cek > 0) { //Jika Tidak Kosong
                    $_SESSION['masuk'] = $user; //Membuat Session
                    header("location: home_pelanggan.php"); //Memuat Ulang Halaman
                }
                else{//Jika Kosong
                    echo $cek;
                echo "<center><div class='peringatan'>Username Atau Password Untuk Pelanggan Salah!</div></center>";
                }
            }
        }
    }
