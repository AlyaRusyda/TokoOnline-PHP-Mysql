<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>E Shopper</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

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
    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0">Categories</h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse hidden navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 410px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Dresses <i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="men_dresses.php" class="dropdown-item">Men's Dresses</a>
                                <a href="women_dresses.php" class="dropdown-item">Women's Dresses</a>
                                <a href="baby_dresses.php" class="dropdown-item">Baby's Dresses</a>
                            </div>
                        </div>
                        <a href="accessories.php" class="nav-item nav-link">Accessories</a>
                        <a href="bags.php" class="nav-item nav-link">Bags</a>
                        <a href="shoes.php" class="nav-item nav-link">Shoes</a>
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">E</span>Shopper</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index_pelanggan.php" class="nav-item nav-link">Home</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="keranjang.php" class="dropdown-item">Shopping Cart</a>
                                    <a href="histori_pelanggan.php" class="dropdown-item">History</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                            <a href="logout.php" class="nav-item nav-link">Logout</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        <div class="px-xl-5">
            <!-- <form action="proses_checkout.php">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h4 class="font-weight-semi-bold mb-4">Checkout</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Name</label>
                                <input class="form-control" type="text" placeholder="name" name="nama">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <input class="form-control" type="text" placeholder="country" name="negara">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com" name="email">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="city" name="kota">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>No Handphone</label>
                                <input class="form-control" type="text" placeholder="+62 8345 6789 101" name="no_hp">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address</label>
                                <input class="form-control" type="text" placeholder="address" name="alamat">
                            </div>

                        </div>
                    </div>
                    <div class="collapse mb-4" id="shipping-address">
                        <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>First Name</label>
                                <input class="form-control" type="text" placeholder="John">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text" placeholder="Doe">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>E-mail</label>
                                <input class="form-control" type="text" placeholder="example@email.com">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Mobile No</label>
                                <input class="form-control" type="text" placeholder="+123 456 789">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 1</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Address Line 2</label>
                                <input class="form-control" type="text" placeholder="123 Street">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Country</label>
                                <select class="custom-select">
                                    <option selected>United States</option>
                                    <option>Afghanistan</option>
                                    <option>Albania</option>
                                    <option>Algeria</option>
                                </select>
                            </div>
                            <div class="col-md-6 form-group">
                                <label>City</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>State</label>
                                <input class="form-control" type="text" placeholder="New York">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>ZIP Code</label>
                                <input class="form-control" type="text" placeholder="123">
                            </div>
                        </div>
                    </div>
                </div>
            </form> -->

            <div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Total</h4>
                    </div>
                    <div class="card-body">
                        <h5 class="font-weight-medium mb-3 ml-3">Products</h5>
                        <div class="d-flex justify-content-between">
                            <?php
                            foreach (@$_SESSION['cart'] as $key_produk => $val_produk) :
                                $subtotal = $val_produk['harga'] * $val_produk['qty'];
                                $total = $subtotal + 20000;
                            ?>
                                <p class="ml-3"><?= $val_produk['nama_produk'] ?> ( x<?= $val_produk['qty'] ?> )</p>
                                <p class="mr-3"><?= $val_produk['harga'] ?></p>

                        </div>
                    <?php endforeach ?>
                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1 ml-3 mr-3">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium"><?= $subtotal ?></h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pt-1 ml-3 mr-3">
                        <h6 class="font-weight-medium">Shipping</h6>
                        <h6 class="font-weight-medium">20000</h6>
                    </div>
                    <div class="d-flex justify-content-between mb-3 pt-1 ml-3 mr-3">
                        <h6 class="font-weight-medium">Payment</h6>
                        <h6 class="font-weight-medium"><?= $val_produk['payment'] ?></h6>
                    </div>
                    <div class="d-flex justify-content-between mt-2 mb-3 pt-1 ml-3 mr-3">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold"><?= $total ?></h5>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <a href="proses_checkout.php" class="btn btn-primary p-2">Checkout</a>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Checkout End -->


            <!-- Footer Start -->
            <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
                <div class="row px-xl-5 pt-5">
                    <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                        <a href="" class="text-decoration-none">
                            <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">E</span>Shopper</h1>
                        </a>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>12 Thamrin Street, Jakarta, Indonesia</p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>eshopper@gmail.com</p>
                        <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
                    </div>
                    <div class="col-lg-8 col-md-12">
                        <div class="row">
                            <div class="col-md-4 mb-5">
                                <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                                <div class="d-flex flex-column justify-content-start">
                                    <a class="text-dark mb-2" href="index_pelanggan.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                                    <a class="text-dark mb-2" href="keranjang.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                                    <a class="text-dark mb-2" href="histori_pelanggan.php"><i class="fa fa-angle-right mr-2"></i>History</a>
                                    <a class="text-dark" href="contact.html"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                                </div>
                            </div>
                            <div class="col-md-4 mb-5">
                                <h5 class="font-weight-bold text-dark mb-4">Our Social Media</h5>
                                <div class="d-flex flex-column justify-content-start">
                                    <a class="text-dark mb-2" href="https://twitter.com/alyamhrst"><i class="fab fa-twitter"></i></i> @eshopper.official</a>
                                    <a class="text-dark mb-2" href="https://www.instagram.com/alyarusyda__/"><i class="fab fa-instagram"></i> @eshopper.official</a>
                                    <a class="text-dark mb-2" href="https://youtu.be/Xhoo8Oecq78.html"><i class="fab fa-youtube"></i> @eshopper.official</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row border-top border-light mx-xl-5 py-4">
                    <div class="col-md-6 px-xl-0">
                        <p class="mb-md-0 text-center text-md-left text-dark">
                            &copy; <a class="text-dark font-weight-semi-bold" href="#">eshopper.com</a>.
                        </p>
                    </div>
                    <div class="col-md-6 px-xl-0 text-center text-md-right">
                        <img class="img-fluid" src="img/payments.png" alt="">
                    </div>
                </div>
            </div>
            <!-- Footer End -->


            <!-- Back to Top -->
            <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


            <!-- JavaScript Libraries -->
            <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
            <script src="lib/easing/easing.min.js"></script>
            <script src="lib/owlcarousel/owl.carousel.min.js"></script>

            <!-- Contact Javascript File -->
            <script src="mail/jqBootstrapValidation.min.js"></script>
            <script src="mail/contact.js"></script>

            <!-- Template Javascript -->
            <script src="js/main.js"></script>
</body>

</html>