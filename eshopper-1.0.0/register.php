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

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="row" style="margin-top:50px;">
        <div class="col-md"></div>
        <div class="col-md rounded bg-light" style="box-shadow: 0px 0px 5px 2px; padding: 30px">
            <h3 align="center">Register</h3>
            <form action="proses_register.php" method="post" enctype="multipart/form-data">
                Username :
                <input type="text" name="username" value="" class="form-control mb-2">
                Email :
                <input type="email" name="email" value="" class="form-control mb-2">
                Address :
                <input type="text" name="alamat" value="" class="form-control mb-2">
                Password :
                <input type="password" name="password" value="" class="form-control mb-2">
                <center><a href="index.php" class="btn btn-primary mt-4">Back</a>
                <input type="submit" name="simpan" value="Submit Data" class="btn btn-primary mt-3"></center>
            </form>
        </div>
        <div class="col-md"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>