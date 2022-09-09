<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
    <style>
        * {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="col-md rounded bg-light" style="box-shadow: 4px 4px 5px -4px;padding:10px">
        <h3>Input Data</h3>
        <form action="proses_tambah_pelanggan.php" method="post" enctype="multipart/form-data">
            Nama :
            <input type="text" name="nama" value="" class="form-control mb-2">
            Alamat :
            <input type="text" name="alamat" value="" class="form-control mb-2">
            Username :
            <input type="text" name="username" value="" class="form-control mb-2">
            Password :
            <input type="text" name="password" value="" class="form-control mb-2">
            Telepon :
            <input type="text" name="telp" value="" class="form-control">
            <input type="submit" name="simpan" value="Submit Data" class="btn btn-dark mt-3">
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>