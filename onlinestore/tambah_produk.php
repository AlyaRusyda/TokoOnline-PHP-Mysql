<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Penambahan Produk</title>
    <style>
        body {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <!-- hanya muncul di tampilan petugas -->
        <h3>Tambah Produk</h3>
        <form action="proses_tambah_produk.php" method="post" enctype="multipart/form-data">
            Nama Produk :
            <input type="text" name="nama_produk" value="" class="form-control">
            Deskripsi :
            <textarea id="" name="deskripsi" rows="4" class="form-control" required></textarea>
            Harga :
            <input type="number" name="harga" value="" class="form-control">
            Kategori :
            <select name="kategori" id="" class="form-control">
                <option value="">-- PILIH KATEGORI --</option>
                <option value="elektronik">Elektronik</option>
                <option value="makanan">Makanan & Minuman</option>
                <option value="komp">Aksesoris Komputer & Handphone</option>
                <option value="kecantikan">Kecantikan</option>
                <option value="baju">Pakaian</option>
                <option value="bayi">Bayi & Anak</option>
                <option value="kesehatan">Kesehatan</option>
                <option value="olahraga">Perlengkapan Olahraga</option>
                <option value="furniture">Furniture</option>
                <option value="buku">Stationery</option>
            </select>
            Foto Produk :
            <input type="file" name="foto" value="" class="form-control">
            <input type="submit" name="simpan" value="Tambah Produk" class="btn btn-dark mt-3">
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>