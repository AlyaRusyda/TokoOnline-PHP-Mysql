<!DOCTYPE html>
<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <title></title>
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
      <form action="proses_login.php" method="post">
        <h3 align="center">LOGIN</h3>
        Username :
        <input type="text" name="username" value="" class="form-control mb-1">
        Password :
        <input type="password" name="password" class="form-control mb-1">
        Login as
        <select name="role" id="" class="form-control">
          <option value="">-- LOGIN AS --</option>
          <option value="pelanggan">Pelanggan</option>
          <option value="petugas">Petugas</option>
        </select>
        <center><a href="index.php" class="btn btn-primary mt-4">Back</a>
        <input type="submit" name="loginButton" value="Login" class="btn btn-primary mt-4"></center>
        <!-- <center><input type="submit" name="loginButton" class="btn btn-primary mt-3 mb-2" value="LOGIN"></center> -->
        <center>
          <h6 class="mt-3">Don't have any account? <a href="register.php">Register</a></h6>
        </center>
      </form>
    </div>
    <div class="col-md"></div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>