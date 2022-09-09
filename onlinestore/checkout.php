<?php 
    session_start();
    include "connect.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        mysqli_query($conn,"insert into transaksi (id_petugas, tgl_transaksi) value('".$_SESSION['id_petugas']."','".date('Y-m-d')."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi, qty, subtotal) value('".$id."','".$val_produk['id_transaksi']."','".$val_produk['qty']."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_transaksi.php"</script>';
    }
?>
