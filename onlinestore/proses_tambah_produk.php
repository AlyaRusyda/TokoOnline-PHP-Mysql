<?php 
include 'connect.php';
$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];
 
$ekstensi =  array('png','jpg','jpeg','gif','JPG');
$filename = $_FILES['foto']['name'];
$ukuran = $_FILES['foto']['size'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
 
if(!in_array($ext,$ekstensi) ) {
	header("location:tambah_produk.php?alert=gagal_ekstensi");
}else{
	if($ukuran < 1044070){		
		$xx =$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], 'assets/foto_produk/'.''.$filename);
		mysqli_query($conn, "INSERT INTO produk VALUES(NULL,'$nama_produk','$deskripsi','$harga','$kategori','$xx')");
		echo "<script>alert('Sukses menambahkan produk');location.href='home_petugas.php';</script>";
	} else{
		echo "<script>alert('Gagal menambahkan produk');location.href='tambah_produk.php';</script>";
	}
}
?>