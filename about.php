<?php

  session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>About Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style3.css">
</head>

<body class="goto-here">
  <div class="header__top py-1 bg-black">
    <div class="container">
      <div class="row atas-nav">
        <div class="col-lg-6 col-md-7">
          <div class="header__top__left">
            <?php
              
              if(isset($_SESSION["login"]))
              {
                echo "<p>Haloo! " . $_SESSION["nama"] . "</p>";
              }
            
            ?>
          </div>
        </div>
        <div class="col-lg-6 col-md-5">
          <div class="header__top__right">
            <div class="header__top__links">
              <a href="login.php">Sign in</a>
              <a href="signout.php">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span>
            </div>
            <span class="text">+ 1235 2355 98</span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                class="icon-paper-plane"></span></div>
            <span class="text">youremail@email.com</span>
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
            <span class="text">3-5 Business days delivery &amp; Free Returns</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="index.php">Minishop</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
        aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item login"><a href="login.php" class="nav-link">Sign In</a></li>
          <li class="nav-item login"><a href="signout.php" class="nav-link">Sign Out</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="shop.php" class="nav-link">Shop</a></li>
          <li class="nav-item active"><a href="about.php" class="nav-link">About</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
          <li class="nav-item"><a href="profile.php" class="nav-link">Profile</a></li>
          <li class="nav-item cta cta-colored"><a href="cart.php" class="nav-link"><span
                class="icon-shopping_cart"></span>[0]</a></li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->

  <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2">K-FEVER</span></p>
          <h1 class="mb-0 bread">About Us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
      <div class="row no-gutters ftco-services">
        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-4 py-md-5">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-bag"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Originality</h3>
              <p>All items from K-Fever are guaranteed authentic!</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-4 py-md-5">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Support Customer</h3>
              <p>We're happy to hear any of our customer's question and input. Don't hesitate to reach out to us and we'll contact you immediately.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services p-4 py-md-5">
            <div class="icon d-flex justify-content-center align-items-center mb-4">
              <span class="flaticon-payment-security"></span>
            </div>
            <div class="media-body">
              <h3 class="heading">Secure & Easy Payment</h3>
              <p>Buy anything you want with easy and safe e-wallet methods!</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url(images/about.jpg);">
          <a href="https://vimeo.com/45830194"
            class="icon popup-vimeo d-flex justify-content-center align-items-center">
            <span class="icon-play"></span>
          </a>
        </div>
        <div class="col-md-7 py-md-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
            <div class="ml-md-0">
              <h2 class="mb-4">Stablished Sinced 2022,</h2>
            </div>
          </div>
          <div class="pb-md-5 pb-4">
            <p>K-Fever is a platform made for K-Popers all around Indonesia, providing customers with an easy, secure and fast online shopping experience through strong payment and fulfillment support.</p>
            <p>We believe online shopping should be accessible, easy and enjoyable. This is the vision K-Fever aspires to deliver on the platform, every single day.</p>
            <p><a href="shop.php" class="btn btn-primary">Shop now</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section testimony-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="services-flow">
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-bag"></span>
              </div>
              <div class="text">
                <h3>Originality</h3>
                <p class="mb-0">Original products from the group's respected label.</p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-heart-box"></span>
              </div>
              <div class="text">
                <h3>Package</h3>
                <p class="mb-0">The product will get to you safely and satisfactorily.</p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-payment-security"></span>
              </div>
              <div class="text">
                <h3>Security</h3>
                <p class="mb-0">Transactions are guaranteed safe and easy.</p>
              </div>
            </div>
            <div class="services-2 p-4 d-flex ftco-animate">
              <div class="icon">
                <span class="flaticon-customer-service"></span>
              </div>
              <div class="text">
                <h3>Support</h3>
                <p class="mb-0">Contact us and we will answer quickly (available for 24/5).</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="heading-section ftco-animate mb-5">
            <h2 class="mb-4">Our satisfied customer says</h2>
            <p>These are reviews from our beloved customers all around Indonesia.</p>
          </div>
          <div class="carousel-testimony owl-carousel ftco-animate">
            <div class="item">
              <div class="testimony-wrap">
                <div class="user-img mb-4" style="background-image: url(images/dummyP.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">Saya sering beli album disini dan selalu puas. Pesanannya cepat dan aman. Gak nyesel beli di K-Fever.</p>
                  <p class="name">Achmad Kalla</p>
                  <span class="position">Customer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="user-img mb-4" style="background-image: url(images/dummyP.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">Saya beli banyak merchandise di K-Fever untuk teman-teman saya. Kualitas barangnya tinggi dan original.</p>
                  <p class="name">Benny Tjokrosapoetro</p>
                  <span class="position">Customer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="user-img mb-4" style="background-image: url(images/dummyP.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">Saya belanja di K-Fever karena produknya bagus, asli, dan aman. Bener-bener terjamin deh.</p>
                  <p class="name">Chandra Ekajaya</p>
                  <span class="position">Customer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="user-img mb-4" style="background-image: url(images/dummyP.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">Pembayaran di K-Fever mudah dan cepat. Hanya tinggal menggunakan e-wallet dan barang langsung diproses.</p>
                  <p class="name">Daniel Kurniawan</p>
                  <span class="position">Customer</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimony-wrap">
                <div class="user-img mb-4" style="background-image: url(images/dummyP.png)">
                  <span class="quote d-flex align-items-center justify-content-center">
                    <i class="icon-quote-left"></i>
                  </span>
                </div>
                <div class="text">
                  <p class="mb-4 pl-4 line">Membeli barang di K-Fever itu gak sulit dan mudah dimengerti. Caranya juga cepat dan tidak banyak basa-basi.</p>
                  <p class="name">Eddy Pramono</p>
                  <span class="position">Customer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer class="ftco-footer ftco-section">
    <div class="container">
      <div class="row">
        <div class="mouse">
          <a href="#" class="mouse-icon">
            <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
          </a>
        </div>
      </div>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">K-Fever</h2>
            <p>Accessible, guaranteed, and affordable k-pop shop.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Menu</h2>
            <ul class="list-unstyled">
              <li><a href="index.php" class="py-2 d-block">Home</a></li>
              <li><a href="shop.php" class="py-2 d-block">Shop</a></li>
              <li><a href="about.php" class="py-2 d-block">About</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Help</h2>
            <div class="d-flex">
              <ul class="list-unstyled mr-l-5 pr-l-3 mr-4">
                <li><a href="#" class="py-2 d-block">Shipping Information</a></li>
                <li><a href="#" class="py-2 d-block">Returns &amp; Exchange</a></li>
                <li><a href="#" class="py-2 d-block">Terms &amp; Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
              </ul>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQs</a></li>
                <li><a href="#" class="py-2 d-block">Delivery</a></li>
                <li><a href="#" class="py-2 d-block">Payment Methods</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Have a Questions?</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San
                    Francisco, California, USA</span></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span
                      class="text">info@yourdomain.com</span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> Shopee. <br>Trademarks belong to their respective owners. All rights reserved.
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>

</body>

</html>