 <?php 
// if($_POST){
//     $nama = $_POST['nama'];
//     $negara = $_POST['negara'];
//     $email = $_POST['email'];
//     $kota = $_POST['kota'];
//     $no_hp = $_POST['no_hp'];
//     $alamat = $_POST['alamat'];
//     if(empty($nama)){
//         echo "<script>alert('nama tidak boleh kosong');location.href='checkout.html';</script>";
//     } elseif(empty($negara)){
//         echo "<script>alert('negara tidak boleh kosong');location.href='checkout.html';</script>";
//     } elseif(empty($email)){
//         echo "<script>alert('email tidak boleh kosong');location.href='checkout.html';</script>";
//     } elseif(empty($kota)){
//         echo "<script>alert('kota tidak boleh kosong');location.href='checkout.html';</script>";
//     }elseif(empty($no_hp)){
//         echo "<script>alert('no hp tidak boleh kosong');location.href='checkout.html';</script>";
//     }elseif(empty($alamat)){
//         echo "<script>alert('alamat tidak boleh kosong');location.href='checkout.html';</script>";
//     }else {
//         include "connect.php";
//         $insert=mysqli_query($conn,"insert into pelanggan (nama, email, telp, negara, kota, alamat) value ('".$nama."','".$email."','".$no_hp."','".$negara."','".$kota."','".$alamat."')");
//         if($insert){
//             echo "<script>alert('Sukses menambahkan pelanggan');location.href=histori_pelanggan.php;</script>";
//         } else {
//             echo "<script>alert('Gagal menambahkan pelanggan');location.href=checkout.html;</script>";
//         }
//     }
// }
    session_start();
    include "connect.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into transaksi (id_pelanggan,tgl_transaksi,id_produk) value('".$val_produk['id_pelanggan']."','".date('Y-m-d')."','".$val_produk['id_produk']."')");
             $id=mysqli_insert_id($conn);
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi, qty) value('".$id."','".$val_produk['qty']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pelanggan.php"</script>';
    }
?>