<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
  <title>Penambahan Produk</title>
  <style>
    body {
      margin: 10px;
    }
  </style>
  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon" />

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />

  <!-- Libraries Stylesheet -->
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

  <!-- Customized Bootstrap Stylesheet -->
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
<div class="row" style="margin-top:50px;">
    <div class="col-md"></div>
    <div class="col-md rounded bg-light" style="box-shadow: 0px 0px 5px 2px; padding: 30px">
      <h3 align="center" class="mb-4">Tambah Produk</h3>
      <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
        Product Name :
        <input type="text" name="nama_produk" value="" class="form-control mb-3" />
        Description :
        <input type="text" name="deskripsi" value="" class="form-control mb-3" />
        Price :
        <input type="number" name="harga" value="" class="form-control mb-3" />
        Categori :
        <select name="kategori" id="" class="form-control mb-3">
          <option value="">-- SELECT CATEGORI --</option>
          <option value="Men Dresses">Men's Dresses</option>
          <option value="Women Dresses">Women's Dresses</option>
          <option value="Baby Dresses">Baby's Dresses</option>
          <option value="Accessories">Accessories</option>
          <option value="Bags">Bags</option>
          <option value="Shoes">Shoes</option>
        </select>
        Product Picture :
        <input type="file" name="foto" value="" class="form-control mb-3" />
        <input type="submit" name="simpan" value="Add Product" class="btn btn-primary mt-3" />
      </form>
    </div>
    <div class="col-md"></div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>