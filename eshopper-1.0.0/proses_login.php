<?php 
    if($_POST){
        $username=$_POST['username'];
        $password=$_POST['password'];
        $login=$_POST['role'];
        if(empty($username)){
            echo "<script>alert('Username should not be empty');location.href='login.php';</script>";
        } elseif(empty($password)){
            echo "<script>alert('Password should not be empty');location.href='login.php';</script>";
        } else {
            if ($login == 'petugas') { //Jika Pengakses Memilih Petugas
                include "connect.php";
                $query = mysqli_query($conn, "select * from petugas where username = '".$username."' and password = '".$password."'"); //Mencari Data Pada Database
                $cek = mysqli_num_rows($query); //Cek Ketersediaan
                if ($cek > 0) { //Jika Tidak Kosong
                    session_start();
                    $_SESSION['masuk'] = $username; //Membuat Session
                    header("location: index_petugas.php"); //Memuat Ulang Halaman
                }                                                                                           
                else{//Jika Kosong
                    echo "<center><div class='peringatan'>Incorrect Username or Password for Customer!</div></center>";
                }
            } elseif ($login == 'pelanggan') {
                include "connect.php";
                $query = mysqli_query($conn, "select * from pelanggan WHERE username = '".$username."' and password = '".$password."'"); //Mencari Data Pada Database
                $cek = mysqli_num_rows($query); //Cek Ketersediaan
                if ($cek > 0) { //Jika Tidak Kosong
                    session_start();
                    $data_login = mysqli_fetch_array($query);
                    $_SESSION['masuk'] = $user; //Membuat Session
                    $_SESSION['id_pelanggan'] = $data_login['id_pelanggan'];
                    header("location: index_pelanggan.php"); //Memuat Ulang Halaman
                }
                else{//Jika Kosong
                    echo $cek;
                echo "<center><div class='peringatan'>Incorrect Username or Password for Customer!</div></center>";
                }
            }
        }
    }
