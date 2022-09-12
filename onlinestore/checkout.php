<?php 
    session_start();
    include "connect.php";
    $cart=@$_SESSION['cart'];
    if(count($cart)>0){
        $lama_pengiriman=5; //satuan hari
        $tgl_sampai=date('Y-m-d',mktime(0,0,0,date('m'),(date('d')+$lama_pengiriman),date('Y')));
        mysqli_query($conn,"insert into transaksi (id_pelanggan,tgl_transaksi,tgl_sampai, id_produk) value('".$val_produk['id_pelanggan']."','".date('Y-m-d')."','".$tgl_sampai."','".$val_produk['id_produk']."')");
         $id=mysqli_insert_id($conn);
        foreach ($cart as $key_produk => $val_produk) {
            mysqli_query($conn,"insert into detail_transaksi (id_transaksi,qty,subtotal) value('".$id."','".$val_produk['qty']."','".$subtotal."')");
        }
        unset($_SESSION['cart']);
        echo '<script>alert("Anda berhasil membeli produk");location.href="histori_pelanggan.php"</script>';
    }
?>